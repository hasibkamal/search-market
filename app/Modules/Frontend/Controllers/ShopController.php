<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\Product;
use App\Modules\Backend\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index()
    {
        $data['products'] = Product::where('is_archive',0)
            ->orderBy('id','ASC')
            ->get();
        return view("Frontend::products.index",$data);
    }

    public function details($productId){
        $data['product'] = Product::leftJoin('product_categories','product_categories.id','=','products.category_id')
        ->where('products.id',$productId)
        ->first([
            'products.*',
            'product_categories.name as category_name'
        ]);

        $data['relatedProducts'] = Product::leftJoin('product_categories','product_categories.id','=','products.category_id')
            ->where('products.category_id',$data['product']->category_id)
            ->whereNotIn('products.id',[$productId])
            ->limit(4)
            ->get([
                'products.*',
                'product_categories.name as category_name'
            ]);
        return view("Frontend::products.details",$data);
    }

    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');
        $cartProduct = session()->get("cart.products.$productId");

        $data['product_id'] = $request->input('product_id');
        $data['name'] = $request->input('name');
        $data['image'] = $request->input('image');
        $data['price'] = $request->input('price');
        $data['discount'] = $request->input('discount');
        $data['quantity'] = $request->input('quantity');

        if($cartProduct){
            $data['quantity'] = session()->get("cart.products.$productId.quantity") + $request->input('quantity');
        }

        Session::put("cart.products.$productId",$data);
        return redirect(route('products.view-cart'));
    }

    public function viewCart()
    {
        $data['products'] = session()->get("cart.products") ?? [];
        return view("Frontend::products.cart",$data);
    }

    public function removeCart($productId)
    {
        Session::forget("cart.products.$productId");
        return redirect(route('products.view-cart'));
    }

    public function checkout()
    {
        $data['products'] = session()->get("cart.products") ?? [];
        return view("Frontend::products.checkout",$data);
    }
}
