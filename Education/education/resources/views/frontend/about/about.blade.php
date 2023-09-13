<div id="rs-about" class="rs-about style1 pt-50 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-12">
                <h2 style="text-align: left">
                    @if(session()->get('language') == 'bangla') নির্দেশনা @else Notice @endif </h2>              
                @foreach($notices as $notice)
                    <div class="card shadow mb-3" style="max-width: 540px;">
                        <div class="row" style="padding-right: 10px !important">
                          <div class="col-md-2">
                            <div class="text-center mt-4" style="background-color: #ff5421; color:white;">
                                <span class="" >{{ Carbon\Carbon::parse($notice->created_at)->format('d') }}<br>{{ Carbon\Carbon::parse($notice->created_at)->format('M') }}</span>
                            </div>
                            
                            
                          </div>
                          <div class="col-md-10">
                            
                              <p class="" ><a href="{{ route('notice.details',$notice->id) }}" class="text-dark">{!! Str::words($notice->short_des,10) !!}</a></p>                             
                         
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                   

                

            </div>
<div class="col-md-3 col-12"></div>
            <div class="col-md-4 col-12">
                <div class="col-lg-6 order-last padding-0 md-pl-10 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <div class="about-img-wrap">
                            <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">
                            <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two d-none d-md-block">
                            {{--                            <img src="{{asset($about->image3??null)}}" alt="Image" class="about-img-three">--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pr-70 md-pr-15">
                    <div class="sec-title">
                        <div class="sub-title orange">@if(session()->get('language') == 'bangla') আমাদের সম্পর্কে @else About Us @endif</div>
                        <h2 class="title mb-17">{{$about->title??null}}</h2>
                        {!! $about->details1??null !!}
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
