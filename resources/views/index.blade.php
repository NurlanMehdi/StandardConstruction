@extends('layouts.master')
@section('content')
    <!-- header three area end -->
    <div class="swiper-banner-seven-main-wrapper">
        <div class="swiper mySwiper-banner-six">
            <div class="swiper-wrapper">
            @foreach($servicesData as $key => $value)
            <div class="swiper-slide">
                    <!-- banner area five -->
                    <div style="background-image: url({{$value['img']}})" class="banner-area-six rts-section-gap banner_bg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-content-inner-six">
                                        <h3 class="title"><a href="{{ route('services.details', $key) }}">{{__($value['name'])}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner area five end -->
                </div>
                                @endforeach


            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pafination-area-main-home-6">
                        <div class="pagination-left-banner-one">
                            <div class="activeslide">01</div>
                            <div class="swiper-paginations"></div>
                            <div class="totalslidee">06</div>
                        </div>
                        <!-- social- with text follow -->
                        <div class="social-text-follow">
                            <ul>
                                <li><a href="index-six.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="index-six.html#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="index-six.html#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="index-six.html#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- social- with text follow end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- search area start -->
@endsection
