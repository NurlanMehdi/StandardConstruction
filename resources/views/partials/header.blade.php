<!DOCTYPE html>
<html lang="{{  app()->getLocale()}}">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Standard Construction</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Standard/logo.jpg')}}">
      <!-- fontawesome 6.4.2 -->
      <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome-6.css')}}">
      <!-- swiper Css 10.2.0 -->
      <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
      <!-- Bootstrap 5.0.2 -->
      <link rel="stylesheet" href="{{asset('assets/css/vendor/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
      <!-- metismenu scss -->
      <link rel="stylesheet" href="{{asset('assets/css/vendor/metismenu.css')}}">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   </head>
   <body class="varticle-portfolio">
      <!-- header three area start -->
      <header class="header-three five nav-color-white" style="z-index: 10;">
         <a href="{{route('dashboard')}}" class="logo-area">
         <img style="max-width: 200px;" src="{{asset('assets/images/Standard/letter s letter c letter cs interiors drawer cupboard logo (1)-Photoroom.png')}}" alt="logo">
         </a>
         <div class="header-right">
            <div class="nav-area-center">
               <nav class="navigation">
                  <ul class="parent-ul">
                    <li>
                        <a href="{{ route('about') }}">{{ __('messages.about') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">{{ __('messages.services') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">{{ __('messages.products') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}">{{ __('messages.projects') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('customers') }}">{{ __('messages.clients') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">{{ __('messages.contact') }}</a>
                    </li>

                     <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(app()->getLocale() === 'az')
                                    <img class="flag-icon" src="{{asset('assets\images\flag\az.png')}}" alt="Azerbaijan Flag" width="20" height="15">
                                @elseif(app()->getLocale() === 'en')
                                    <img class="flag-icon" src="{{asset('assets\images\flag\en.png')}}" alt="UK Flag" width="20" height="15">
                                @elseif(app()->getLocale() === 'ru')
                                    <img class="flag-icon" src="{{asset('assets\images\flag\ru.png')}}" alt="Russia Flag" width="20" height="15">
                                @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if(app()->getLocale() === 'az')
                            <a class="dropdown-item" href="locale/en">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\en.png')}}" alt="UK Flag" width="30" height="15">
                                </a>
                                <a class="dropdown-item" href="locale/ru">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\ru.png')}}" alt="Russia Flag" width="30" height="15">
                                </a>
                                @elseif(app()->getLocale() === 'en')
                                <a class="dropdown-item" href="locale/az">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\az.png')}}" alt="Azerbaijan Flag" width="30" height="15">
                                </a>
                                <a class="dropdown-item" href="locale/ru">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\ru.png')}}" alt="Russia Flag" width="30" height="15">
                                </a>
                                @elseif(app()->getLocale() === 'ru')
                                <a class="dropdown-item" href="locale/az">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\az.png')}}" alt="Azerbaijan Flag" width="30" height="15">
                                </a>
                                <a class="dropdown-item" href="locale/en">
                                    <img class="flag-icon" src="{{asset('assets\images\flag\en.png')}}" alt="UK Flag" width="30" height="15">
                                </a>
                                @endif
                            </div>
                        </div>
                  </ul>
               </nav>
            </div>
            <div class="action-area" id="menu-btn">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                     <rect x="6" width="18" height="2" fill="#D9D9D9" />
                     <rect x="10" y="14" width="14" height="2" fill="#D9D9D9" />
                     <rect y="7" width="24" height="2" fill="#D9D9D9" />
                  </svg>
               </div>
            </div>
         </div>
      </header>