@extends('layouts.master')

@section('content')
    <!-- header three area start -->
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg services-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="{{route('dashboard')}}">{{__('messages.home')}}</a> 
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{__('messages.services')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-full-top-wrapper">
                        <!-- title-left -->
                        <div class="title-area-style-six-left">
                            <span class="pre">
                            {{__('messages.services')}}
                            </span>
                            <h2 class="title">{{__('messages.service.header')}}</h2>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row mt--90 align-items-center">
                <div class="col-lg-5">
                    <div class="thumbnail-serice-6-left">
                        <div class="image-hover-bg">
                        @foreach($servicesData as $value)
                            <!-- single short service -->
                            <div class="rts-img-hover {{$value['key']}} active">
                                <img src="{{asset($value['img'])}}" alt="about">
                            </div>
                            <!-- single short service end -->
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt_md--50 mt_sm--50">
                    <div class="service-list-one-wrapper">
                        <!-- ingle service area start -->
                        @php
                            $counter = 1; // Initialize a counter
                        @endphp

                        @foreach($servicesData as $key => $value)
                            <!-- single short service -->
                            <div class="signle-service-list {{$value['key']}}">
                            <div class="left-one">
                                <span>{{ str_pad($counter++, 2, '0', STR_PAD_LEFT) }}</span>
                                <a href="{{route('services.details',$key)}}">
                                    <h5 class="title">{{ __($value['name']) }}</h5>
                                </a>
                            </div>
                            <div class="center-area">
                                <p class="disc">
                                {{ __($value['text']) }}
                                </p>
                            </div>
                            <a href="{{route('services.details',$key)}}" class="rts-read-more-circle-btn">
                                <i class="fa-solid fa-arrow-up-right"></i>
                                <p>Ətraflı</p>
                            </a>
                        </div>
                            <!-- single short service end -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
   