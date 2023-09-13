@extends('frontend.master')
@section('title')
    Doctors
@endsection
@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Team One</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team  orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
            <div class="container">
                <h2 class="text-center mb-5">{{$banner->title??null}}</h2>
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="">
                            <img src="{{asset($team->image)}}" style="height: 350px;
" alt="">
                            <div class="content-part">
                                <h4 class="">{{$team->name}}</h4>                          <span class="designation">{{$team->designation}}</span>
                                <ul class="social-links" style="display: flex;">
                                    <li style="padding: 0px 10px;"><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <li style="padding: 0px 10px;"><a href="{{$team->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                                    <li style="padding: 0px 10px;"><a href="{{$team->linkedIn}}"><i class="fa fa-linkedin"></i></a></li>
                                    <li style="padding: 0px 10px;"><a href="{{$team->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                {!! $teams->links() !!}
            </div>
        </div>
        <!-- Team Section End -->


    </div>
    <!-- Main content End -->
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection
