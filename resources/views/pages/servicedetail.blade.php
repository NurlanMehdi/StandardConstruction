@extends('layouts.master')

@section('content')
    <!-- header three area start -->
    <!-- bread croumba rea start -->
    <div style='background-image:url( " {{asset($service['img'])}}") !important' class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="{{route('dashboard')}}">{{__('messages.home')}}</a> /
                            <a class="active" href="{{route('services')}}">{{__('messages.services')}}</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{__($service['name'])}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <div class="rts-blog-area rts-section-gap">
        
        <div class="container">
        <div class="service-details-content-right">
        <div class="title-main-s">
            <h2>
                {{__($service['header'])}}
            </h2>
        </div>
        
        <p class="disc"> {{__($service['text'])}}</p>
                </div>
            <div class="row g-24 mt--30">
            @if(is_array($service['details'] ))
                @foreach($service['details'] as $rafs)
              
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- single blog area start -->
            

                        <div class="signle-blog-style-one">
                            <a class="thumbnail">
                                <img src="{{asset($rafs['img'])}}" alt="blog">
                                <span class="tag">{{__($rafs['name'])}}</span>
                            </a>
                        </div>
                        <!-- single blog area end -->
                    </div>
           

                @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
   