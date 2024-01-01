@extends('backend.layouts.app')
@section('header-css')
    {!! Html::style('assets/backend/dist/css/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('assets/backend/dist/css/buttons.dataTables.min.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="fa fa-chart-bar"></i> Dashboard</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url('/admin/markets') }}">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <i class="fas fa-building text-white"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Markets</span>
                                    <span class="info-box-number">{{ $totalMarket }}</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/admin/shops') }}">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <i class="fas fa-home text-white"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Shops</span>
                                    <span class="info-box-number">{{ $totalShop }}</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
