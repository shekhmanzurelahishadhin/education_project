@extends('frontend.master')
@section('title')
    Blogs
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
                <h1 class="page-title">Blogs</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Popular Courses Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row grid">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 grid-item filter1">
                        <div class="mb-30" style="border: 1px solid #dfe9eb;transition: all 0.3s ease;">
                            <div class="">
                                <img src="{{asset($blog->main_image)}}" width="100%" style="height: 250px" alt="">
                            </div>
                            @php $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);$year = date('Y', $timestamp);@endphp
                            <div class="content-part p-3">
                                <ul class="meta-part">
                                    <li><i style="color: #FF5421" class="fa fa-calendar me-2"></i>&nbsp;{{ $month }} {{ $blog->created_at->format('d') }}, {{$year}}</li>
                                </ul>
                                <h3 class="title"><a style="color: #FF5421" href="">{{$blog->title??null}}</a></h3>
                                <div>{!! $blog->short_details??null !!}</div>
                                <div class="bottom-part">
                                    <div class="info-meta">

                                    </div>
                                    <div class="btn-part">
                                        <a style="color: #FF5421" href="{{route('blogs.details',['id'=>$blog->id])}}">@if(session()->get('language')=='bangla') আরো পড়ুন @else Read More @endif </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$blogs->links()}}
            </div>
        </div>
        <!-- Popular Courses Section End -->


    </div>
    <!-- Main content End -->
@endsection
