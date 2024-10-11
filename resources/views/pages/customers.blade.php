@extends('layouts.master')

@section('content')
    <!-- header three area start -->
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="{{route('dashboard')}}">{{__('messages.home')}}</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{__('messages.clients')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

<!-- resources/views/logos/index.blade.php -->

<div class="rts-blog-area rts-section-gap">
    <div class="container">
        <div class="service-details-content-right"></div>
        <div class="row g-24">
            @foreach($logos as $logo)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- single blog area start -->
                    <div class="signle-blog-style-one">
                        <a class="thumbnail-customers">
                            <!-- Logo resmi -->
                            <img src="{{ asset('assets/images/customers/' . $logo->getFilename()) }}" alt="logo">
                        </a>
                    </div>
                    <!-- single blog area end -->
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
   