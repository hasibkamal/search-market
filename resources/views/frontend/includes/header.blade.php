<div class="menu-bar">
    <div class="container">
        <div class="menu-content">
            <div class="logo-2">
                <div class="full-logo">
                    <a href="{{ url('/') }}"><img src="/assets/frontend/images/logo.svg"></a>
                </div>
                <div class="half-logo">
                    <a href="{{ url('/') }}"><img src="/assets/frontend/images/logo.svg"></a>
                </div>
            </div>
            <div class="attr-nav">
                <div class="search-container">
                    {!! Form::open(['url'=>url('/'),'method'=>'get']) !!}
                        {!! Form::text('search','',['class'=>'form-control','placeholder'=>'Search']) !!}
                        <button type="submit"><i class="fa fa-search"></i> <span> Search </span></button>
                        <div class="suggestions">
                            <ul></ul>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- microphone -->

            <ul class="our-menu">
                <li><a href="{{ url('/login') }}"><i class="far fa-user"></i>Login</a></li>
                <div id="google_element"> </div>
            </ul>
        </div>
    </div>
</div>
