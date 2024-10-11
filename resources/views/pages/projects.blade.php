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
                            <a href="blog-3.html#">{{__('messages.home')}}</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{__('messages.projects')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->



    <div class="rts-blog-area rts-section-gap ">
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="project-full-top-wrapper">
                        <!-- title-left -->
                        <div class="title-area-style-six-left">
                            <span class="pre">
                            {{__('messages.projects')}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--40">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="signle-blog-style-one">
                            <a class="thumbnail">
                                <img src="{{asset('assets/images/product/IMG_6185.jpg')}}" alt="blog">
                                <span class="tag">Metal</span>
                            </a>
                        </div>
                        <!-- single blog area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- single blog area start -->
            

                        <div class="signle-blog-style-one">
                            <a class="thumbnail">
                                <img src="{{asset('assets/images/product/depo-raf.jpg')}}" alt="blog">
                                <span class="tag">Rəf</span>
                            </a>
                        </div>
                        <!-- single blog area end -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- single blog area start -->
            

                        <div class="signle-blog-style-one">
                            <a class="thumbnail">
                                <img src="{{asset('assets/images/product/398244497_314074211375628_7576948088669597868_n.jpg')}}" alt="blog">
                                <span class="tag">Sendviç Panel</span>
                            </a>
                        </div>
                        <!-- single blog area end -->
                    </div>

            </div>
        </div>
        </div>
    </div>



@endsection
   