@extends('backend.layouts.app')
@section('content')
    <ol class="breadcrumb alert alert-info p-2">
        <li class="breadcrumb-item"><strong>Created At - </strong> <span>{{ \Carbon\Carbon::parse($shop->created_at)->format('d F , Y') }} at {{ \Carbon\Carbon::parse($shop->created_at)->format('g:i A') }} </span></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
                <h5><i class="fa fa-list-alt"></i> Shop details</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Name </div>
                        <div class="col-lg-8"> {{ $shop->name }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Phone </div>
                        <div class="col-lg-8"> {{ $shop->phone }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Proprietor </div>
                        <div class="col-lg-8"> {{ $shop->proprietor }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Status </div>
                        <div class="col-lg-8">
                            @if($shop->status == 1)
                            <label class='badge badge-success'>Active</label>
                            @else
                              <label class='badge badge-danger'> Inactive</label>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Address</div>
                        <div class="col-lg-8">
                          {!! $shop->address !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.shops.index') }}" class="btn btn-secondary"><i class="fa fa-backward"></i> Back</a>
        </div>
    </div>
@endsection
