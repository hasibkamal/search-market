<?php

namespace App\Traits;


use App\Modules\Backend\Models\PaymentEndPointLog;
use App\Modules\Backend\Models\PaymentLog;
use App\Modules\Backend\Models\ProviderInfo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

trait SSL_Payment
{
    public $sslProviderName;
    public $response_code;
    public $response_message;
    public $response_object;

    public function __construct() {
        $this->sslProviderName      = 'ssl-wireless';
        $this->response_code        = 200;
        $this->response_message     = 'Success';
        $this->response_object      = array();

    }

    protected function makePayment($param): JsonResponse
    {
        try{

            $requestData = $this->manageRequests($param);

            //Find provider information
            $providerInfo =  ProviderInfo::find($requestData['provider_id']);

            if($providerInfo->provider_type == 'payment-gateway') {
                //check to handle multiple payment gateway
                if ($providerInfo->name == 'ssl-wireless') {
                    // get ssl information
                    $endPointInfo = $this->getSslEndPointInfo($requestData);

                    /*
                     * Store request data into log table
                     * A Request Response Log is first created HERE, which
                     * is then updated later, irrespective of whether
                     * the transaction was successful or not
                     */
                    $initialRequestResponse = $this->createRequestResponseLog($requestData, $endPointInfo, null,null, true);

                    //Format gateway data
                    $postData = $this->formattedGatewayData($requestData, $endPointInfo);
                    $method    = 'post';

                    # REQUEST SEND TO SSLCOMMERZ BY CURL
                    $directApiUrl = config('payment.gateway-url.ssl-wireless.base_url');

                    $curlResponse = $this->getCurlResponse($directApiUrl, $postData, $method);
                    if($curlResponse['code'] != 200){
                        curl_close($curlResponse['handle']);
                        $this->createRequestResponseLog(null, null, $curlResponse['content'], $initialRequestResponse);
                        throw new \Exception("FAILED TO CONNECT WITH SSLCOMMERZ API!");
                    }

                    curl_close($curlResponse['handle']);
                    $sslcommerzResponse = $curlResponse['content'];
                    //response store in log table
                    $this->createRequestResponseLog(null, null, $sslcommerzResponse, $initialRequestResponse);

                    # PARSE THE JSON RESPONSE
                    $sslcz = json_decode($sslcommerzResponse, true);

                    if (!isset($sslcz['GatewayPageURL']) || $sslcz['GatewayPageURL'] == "") {
                        throw new \Exception("JSON Data parsing error!");
                    }

                    $this->response_object['GatewayPageURL'] = $sslcz['GatewayPageURL'];

                } else {
                    throw new \Exception("Different payment gateway selected!!");
                }
            }
        } catch (\Exception $e) {
            $this->response_code = 400;
            $this->response_message = $e->getMessage();
        } finally {
            return response()->json([
                'data' => $this->response_object,
                'response_code' => $this->response_code,
                'response_message' => $this->response_message,
            ]);
        }
    }

    /**
     * Manage request params
     * @param $requestParam
     * @return array
     */
    protected function manageRequests($request): array
    {
        $requestParam['record_type']        = $request['record_type'] ?? null;
        $requestParam['record_id']          = $request['record_id'] ?? null;
        $requestParam['user_id']            = $request['user_id'] ?? null;
        $requestParam['cus_phone']          = $request['cus_phone'] ?? null;
        $requestParam['platform']           = $request['platform'] ?? null;
        $requestParam['provider_id']        = $request['provider_id'] ?? null;
        $requestParam['product_name']       = $request['product_name'] ?? null;
        $requestParam['product_category']   = $request['product_category'] ?? null;
        $requestParam['amount']             = $request['amount'] ?? null;
        $requestParam['cus_name']           = $request['cus_name'] ?? null;
        $requestParam['cus_email']          = $request['cus_email'] ?? null;
        $requestParam['num_of_item']        = $request['num_of_item'] ?? null;
        return $requestParam;
    }

    /**
     * Format ssl end point info
     * @param $requestParam
     * @return array
     */
    protected function getSslEndPointInfo($requestParam): array
    {
        //Generate transaction id
        $transactionId  =  $this->generateTrxId();

        //Define End points
        $appURL         = env('APP_URL', 'https://www.exsaacsc.org').'/';
        $successUrl     = $appURL.config('payment.gateway-url.ssl-wireless.success_url');
        $failedUrl      = $appURL.config('payment.gateway-url.ssl-wireless.fail_url');
        $canceledUrl    = $appURL.config('payment.gateway-url.ssl-wireless.cancel_url');
        $ipnUrl         = $appURL.config('payment.gateway-url.ssl-wireless.ipn_url');

        $providerName   = 'ssl-wireless';
        $amount         =  $requestParam['amount'];

        return [
            'trans_id' =>  $transactionId,
            'success_url'    =>  $successUrl,
            'failed_url'     =>  $failedUrl,
            'cancel_url'     =>  $canceledUrl,
            'ipn_url'        =>  $ipnUrl,
            'provider_name'  =>  $providerName,
            'amount'         =>  $amount,
        ];
    }

    /**
     * Store SSL request & response into log table
     * @param $requestData
     * @param $endPointInfo
     * @param null $sslResponse
     * @param null $initialRequestResponse
     * @param bool $initialRequest
     */
    protected function createRequestResponseLog($requestData, $endPointInfo, $sslResponse = null, $initialRequestResponse = null, $initialRequest = false) {
        //dd($requestData, $endPointInfo, $sslResponse, $initialRequestResponse, $initialRequest);
        if($initialRequest){
            $requestLog = new PaymentLog();
            $requestLog->record_type        = $requestData['record_type'];
            $requestLog->record_id          = $requestData['record_id'];
            $requestLog->user_id            = $requestData['user_id'];
            $requestLog->cus_phone          = $requestData['cus_phone'];
            $requestLog->platform           = $requestData['platform'];
            $requestLog->amount             = $endPointInfo['amount'];
            $requestLog->currency           = 'BDT';
            $requestLog->provider_name      = $endPointInfo['provider_name'];
            $requestLog->trans_id           = $endPointInfo['trans_id'];
            $requestLog->cus_name           = $requestData['cus_name'];
            $requestLog->cus_email          = $requestData['cus_email'];
            $requestLog->save();

            return $requestLog;
        } else {
            $sslResponse = json_decode($sslResponse);
            $responseLog = PaymentLog::find($initialRequestResponse->id);
            $responseLog->status               = $sslResponse->status;
            $responseLog->gateway_page_url     = $sslResponse->redirectGatewayURL ?? null;
            $responseLog->failed_reason        = $sslResponse->failedreason ?? null;
            $responseLog->session_key          = $sslResponse->sessionkey ?? null;
            $responseLog->save();
        }
    }

    /**
     * Formatted gateway data
     * @param $requestParam
     * @param $endPointInfo
     * @return array
     */
    protected function formattedGatewayData($requestParam, $endPointInfo): array
    {
        return [
            'total_amount' => $endPointInfo['amount'],
            'store_id'     => config('payment.gateway-cred.ssl-wireless.store_id'),
            'store_passwd' => config('payment.gateway-cred.ssl-wireless.store_pass'),
            'tran_id'      => $endPointInfo['trans_id'],
            'success_url'  => $endPointInfo['success_url'],
            'fail_url'     => $endPointInfo['failed_url'],
            'cancel_url'   => $endPointInfo['cancel_url'],
            'ipn_url'      => $endPointInfo['ipn_url'],

            'cus_name'    => $user->name ?? 'Test',
            'cus_email'   => $user->email ?? 'info@test.com',
            'cus_phone'   => $user->mobile ?? '+880xxxxxxx',
            'cus_add1'    => $user->present_address ?? 'Dhaka',
            'cus_city'    => $user->district ?? 'Dhaka',
            'cus_country' => $user->country ?? 'Bangladesh',

            'shipping_method'  => 'NO',
            'product_name'     => $requestParam['product_name'],
            'product_category' => $requestParam['product_category'],
            'product_profile'  => 'general',

            'value_a' => $requestParam['record_id'],
            'value_b' => $requestParam['user_id'],
            'value_c' => $requestParam['record_type'],
            'value_d' => $requestParam['platform'],
        ];
    }

    /**
     * Hit ssl API with curl
     * @param $url
     * @param $params
     * @return array
     */
    protected function getCurlResponse($url, $params, $method): array
    {

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        if($method == 'post') {
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $params);
        }
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC

        $content = curl_exec($handle );
        $code    = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        return [
            'handle'  => $handle,
            'code'    => $code,
            'content' => $content,
        ];
    }

    /**
     * generate random external trx id for transaction
     * @return int
     * */

    protected function generateTrxId()
    {
        $transactionId = time() . rand(10001, 99999);
        $validator = Validator::make(['trans_id' => $transactionId], [
            'trans_id' => 'unique:payment_request_response_log',
        ]);

        if($validator->fails()) {
            $transactionId = null;
            $this->generateTrxId();
        }

        return $transactionId;
    }

    protected function storeSslEndpointRequest($params) {
        $endPointLog = new PaymentEndPointLog();
        $endPointLog->record_id             = $params->value_a ?? null; //Request Id
        $endPointLog->user_id               = $params->value_b ?? null; //User Id
        $endPointLog->record_type           = $params->value_c ?? null; //Record Type
        $endPointLog->platform              = $params->value_d ?? null; //Platform
        $endPointLog->status                = $params->status ?? null;
        $endPointLog->tran_date             = $params->tran_date ?? null;
        $endPointLog->tran_id               = $params->tran_id ?? null;
        $endPointLog->val_id                = $params->val_id ?? null;
        $endPointLog->amount                = $params->amount ?? null;
        $endPointLog->store_amount          = $params->store_amount ?? null;
        $endPointLog->card_type             = $params->card_type ?? null;
        $endPointLog->card_no               = $params->card_no ?? null;
        $endPointLog->currency              = $params->currency ?? null;
        $endPointLog->bank_tran_id          = $params->bank_tran_id ?? null;
        $endPointLog->card_issuer           = $params->card_issuer ?? null;
        $endPointLog->card_brand            = $params->card_brand ?? null;
        $endPointLog->card_issuer_country   = $params->card_issuer_country ?? null;
        $endPointLog->currency_amount       = $params->currency_amount ?? null;
        $endPointLog->verify_sign           = $params->verify_sign ?? null;
        $endPointLog->error                 = $params->error ?? null;
        $endPointLog->risk_level            = $params->risk_level ?? 0;
        $endPointLog->risk_title            = $params->risk_title ?? null;
        $endPointLog->provider_name         = 'ssl-wireless';
        $endPointLog->save();

        return $endPointLog;
    }

    # FUNCTION TO CHECK HASH VALUE FOR SSLCOMMERZ
    protected function _SSLCOMMERZ_hash_verify($store_passwd=""): bool
    {

        if(isset($_POST) && isset($_POST['verify_sign']) && isset($_POST['verify_key'])) {
            # NEW ARRAY DECLARED TO TAKE VALUE OF ALL POST

            $pre_define_key = explode(',', $_POST['verify_key']);

            $new_data = array();
            if(!empty($pre_define_key )) {
                foreach($pre_define_key as $value) {
                    if(isset($_POST[$value])) {
                        $new_data[$value] = ($_POST[$value]);
                    }
                }
            }
            # ADD MD5 OF STORE PASSWORD
            $new_data['store_passwd'] = md5($store_passwd);

            # SORT THE KEY AS BEFORE
            ksort($new_data);

            $hash_string="";
            foreach($new_data as $key=>$value) {
                $hash_string .= $key.'='.($value).'&';
                //Log::info($hash_string);
            }
            $hash_string = rtrim($hash_string,'&');

            if(md5($hash_string) == $_POST['verify_sign']) {

                return true;

            } else {
                return false;
            }
        } else return false;
    }

    private function getProviderInformation($providerName): array
    {
        $provider   =   ProviderInfo::where('name',$providerName)->first();
        if  (!$provider) {
            throw new \Exception('invalid provider name');
        }

        return [
            'id'              => $provider->id,
            'name'            => $provider->name,
            'provider_type'   => $provider->provider_type,
            'store_id'        => $provider->store_id,
            'password'        => $provider->password,
            'source_address'  => $provider->source_address,
        ];
    }
}
