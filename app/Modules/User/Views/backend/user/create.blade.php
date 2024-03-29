@extends('backend.layouts.app')
@section('header-css')
    {!! Html::style('/assets/backend/dist/css/bootstrap-datepicker3.css') !!}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <span class="card-title"><i class="fa fa-user"></i> User Create</span>
        </div>
        <!-- /.card-header -->
        {!! Form::open(['route'=>'admin.users.store', 'method'=>'post','enctype'=>'multipart/form-data','id'=>'dataForm']) !!}
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('name','Name : ',['class'=>'required-star']) !!}
                        {!! Form::text('name','',['class'=>$errors->has('name')?'form-control is-invalid':'form-control required','placeholder'=>'Name']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('email','Email Address : ') !!}
                        {!! Form::email('email','',['class'=>$errors->has('email')?'form-control is-invalid':'form-control','placeholder'=>'Email address','autocomplete'=>'off']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('mobile','Mobile : ',['class'=>'required-star']) !!}
                        {!! Form::text('mobile','',['class'=>$errors->has('mobile')?'form-control is-invalid':'form-control required','placeholder'=>'+880XXXXXXXXXX','autocomplete'=>'off']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('user_type','User Type : ',['class'=>'required-star']) !!}
                        {!! Form::select('user_type',$userTypes,'',['class'=>$errors->has('user_type')?'form-control is-invalid':'form-control required']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('password','Password : ') !!}
                        {!! Form::password('password',['class'=>$errors->has('password')?'form-control is-invalid':'form-control','placeholder'=>'Password','autocomplete'=>'off']) !!}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('password_confirmation','Confirm Password : ') !!}
                        {!! Form::password('password_confirmation',['class'=>$errors->has('password_confirmation')?'form-control is-invalid':'form-control','placeholder'=>'Confirm password','autocomplete'=>'off']) !!}
                    </div>
                </div>

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('designation','Designation : ') !!}--}}
{{--                        {!! Form::text('designation','',['class'=>$errors->has('designation')?'form-control is-invalid':'form-control','placeholder'=>'Designation']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('country','Country Name : ',['class'=>'required-star']) !!}--}}
{{--                        {!! Form::text('country','',['class'=>$errors->has('country')?'form-control is-invalid':'form-control required','placeholder'=>'Country name']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('nationality','Nationality : ',['class'=>'required-star']) !!}--}}
{{--                        {!! Form::text('nationality','',['class'=>$errors->has('nationality')?'form-control is-invalid':'form-control required','placeholder'=>'Nationality']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('date_of_birth','Birth Date : ',['class'=>'required-star']) !!}--}}
{{--                        {!! Form::text('date_of_birth','',['class'=>$errors->has('date_of_birth')?'form-control is-invalid':'form-control required','id'=>'birthDate','placeholder'=>'yyyy-mm-dd','autocomplete'=>'off']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('address','Address : ',['class'=>'required-star']) !!}--}}
{{--                        {!! Form::textarea('address','',['class'=>$errors->has('address')?'form-control is-invalid':'form-control required','placeholder'=>'Address','rows'=>'5']) !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::label('photo', 'Profile Image :',['class'=>'required-star']) !!}--}}
{{--                        <br>--}}
{{--                        <img class="img border" src="{{ url('/assets/backend/img/photo.png') }}" id="photoViewer" height="100" width="120">--}}
{{--                        <label class="btn btn-block btn-secondary btn-sm rounded-0" style="width: 120px; cursor: pointer">--}}
{{--                            <input onchange="changePhoto(this)" type="file" name="photo" style="display: none" required>--}}
{{--                            <i class="fa fa-image"></i> Browse--}}
{{--                        </label>--}}
{{--                        <span id="photo_err" class="text-danger" style="font-size: 16px;"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-default"><i class="fa fa-backspace"></i>
                Back</a>
            <button type="submit" class="btn float-right btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
        </div>
        {!! Form::close() !!}
    </div>
    </div>

@endsection
@section('footer-script')
{{--    {!! Html::script('/assets/backend/dist/js/bootstrap-datepicker.min.js') !!}--}}
@endsection
