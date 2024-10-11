@extends('layouts.master')

@section('content')
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg contact-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="{{route('dashboard')}}">{{__('messages.home')}}</a> 
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{__('messages.contact')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->


    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top">
                        <h2 class="title">Əlaqə</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="left-contact">
                        <h6 class="top mb--30">
                            Standard Construction
                        </h6>
                        <p class="disc mb--20">
                            Standard Construction, yüksək keyfiyyətli inşaat və mühəndislik xidmətləri təqdim edən aparıcı bir şirkətdir. Peşəkar memar, mühəndis və layihə menecerlərindən ibarət komandamız hər bir layihə üçün innovativ və davamlı həllər yaratmağa sadiqdir. Yaşayış, kommersiya və ya sənaye tikintisi olsun, hər mərhələdə mükəmməlliyə nail olmağı hədəfləyirik.
                        </p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pl--50 pl_md--15 pl_sm--15">
                    <div class="contact-info-mid">
                        <p class="top-contact mb--20">Əlaqə məlumatları</p>
                        <div class="single-information mt--30">
                            <span>Ünvan:</span>
                            <p class="address" style="text-decoration: underline;">
                            12 Alaskar Gayibov St, <br>
                            Baku 1029. Azerbaijan Baku
                            </p>
                        </div>
                        <div class="single-information">
                            <span>Əlaqə nömrəsi:</span>
                            <a href="Tel:123-456-7890">
                                +994 55
                            </a>
                        </div>
                        <div class="single-information">
                            <span>E-Poçt:</span>
                            <a href="mailto:webmaster@example.com">
                                info@raf.az
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form-conatct-page">
                        <p class="top-contact mb--20">Əlaqə Formu</p>
                        <input type="text" placeholder="Ad Soyad" required>
                        <input type="text" placeholder="Əlaqə nömrəsi">
                        <textarea placeholder="Qeyd..."></textarea>
                        <button class="rts-btn btn-primary mt--30">Göndər</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt--120">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d268.47589484692503!2d49.878600135487964!3d40.42085601645485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030881d97939fdb%3A0x98c7b4fc8d91a24c!2s12%20Alaskar%20Gayibov%20St%2C%20Baku%201029!5e0!3m2!1sen!2saz!4v1728021722007!5m2!1sen!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>




    <!-- header three area start -->
@endsection
   