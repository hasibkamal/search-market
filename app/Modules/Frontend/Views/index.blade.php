@extends('frontend.layouts.app')
@section('content')

    <!-- ========== market-map design Start hear========== -->
    <div class="market-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d82591.88056519059!2d90.41549706512716!3d23.81575673254868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704312884055!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ======== market-map design end hear ======== -->
    <div class="multiple-market-section">
        <div class="container">
            <div class="title">
                <h1>Market <span>List</span></h1>
            </div>
            <div class="row pt-5">
                @if(isset($searchKeywords) && count($markets) == 0)
                <div class="col-lg-12 pt-5 text-center text-danger">
                    <h1>Market not found!!</h1>
                </div>
                @endif
                <div class="col-lg-12">
                    @foreach($markets as $market)
                    <div class="single-market">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="image-part">
                                    <img style="width: 100%;" src="{{ url('/uploads/markets/'.$market->image) }}">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="content-part">
                                    <h3>{{ $market->name }}</h3>
                                    <p>{{ $market->location }}</p>
                                    <p>Open <b>9am</b> Closes <b> 8pm</b></p>
                                    <p><b>Contact : 01622254125 </b></p>
                                    <div class="content-part-button">
                                        <a href="{{ route('market.shops',$market->id) }}">All Shops</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('external-script')

@endsection
