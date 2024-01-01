@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
                <h5><i class="fa fa-edit"></i> Edit Shop</h5>
            </div>
        </div>
        {!! Form::open(['route'=>array('admin.shops.update',\App\Libraries\Encryption::encodeId($shop->id)), 'method'=>'patch','enctype'=>'multipart/form-data','id'=>'dataForm']) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 form-group">
                    {!! Form::label('market_id','Market',['class'=>'font-weight-bold required-star']) !!}
                    {!! Form::select('market_id',$markets,$shop->market_id,['class'=>$errors->has('market_id')?'form-control is-invalid':'form-control required','placeholder'=>'Select one']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('name','Name',['class'=>'required-star']) !!}
                    {!! Form::text('name',$shop->name,['class'=>$errors->has('name')?'form-control is-invalid':'form-control required','placeholder'=>'Name']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('phone','Phone',['class'=>'required-star']) !!}
                    {!! Form::text('phone',$shop->phone,['class'=>$errors->has('phone')?'form-control is-invalid':'form-control required','placeholder'=>'Phone']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('proprietor','Proprietor') !!}
                    {!! Form::text('proprietor',$shop->proprietor,['class'=>$errors->has('proprietor')?'form-control is-invalid':'form-control','placeholder'=>'Proprietor']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('address','Address',['class'=>'required-star']) !!}
                    {!! Form::text('address',$shop->address,['class'=>$errors->has('address')?'form-control is-invalid':'form-control required','placeholder'=>'Address']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('status','Status',['class'=>'font-weight-bold required-star']) !!}
                    {!! Form::select('status',[1=>'Active',0=>'Inactive'],$shop->status,['class'=>$errors->has('status')?'form-control is-invalid':'form-control required']) !!}
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('image', 'Image :',['class'=>'required-star']) }}
                        <br/>
                        <div>
                            <img class="img img-responsive img-thumbnail" src="{{ (isset($shop->image)) ? url('/uploads/shops/'.$shop->image): url('/assets/backend/img/photo.png') }}" id="photoViewer" height="100" width="120">
                        </div>
                        <label class="btn btn-block btn-secondary btn-sm border-0" style="width: 120px;">
                            <input onchange="changePhoto(this)" type="file" name="image" style="display: none" required>
                            <i class="fa fa-image"></i> Browse
                        </label>
                        <span id="photo_err" class="text-danger" style="font-size: 16px;"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.shops.index') }}" class="btn btn-secondary"><i class="fa fa-backward"></i> Back</a>
            <button type="submit" class="btn float-right btn-primary"><i class="fa fa-save"></i> Update</button>
        </div>
        {!! Form::close() !!}
    </div><!--card-->
@endsection
@section('footer-script')
{!! Html::script('assets/backend/plugins/tinymce/tinymce.min.js') !!}
{!! Html::script('assets/backend/plugins/tinymce/tinymce.js') !!}>
    <script type="text/javascript">
        $(document).ready(function () {
            /**********************
             VALIDATION START HERE
             **********************/
            $('#dataForm').validate({
                errorPlacement: function () {
                    return false;
                }
            });
        });
    </script>
@endsection
