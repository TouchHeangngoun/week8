@extends('layouts.app')

@section('content')

 <!-- banner starts -->

    <div class="swiper-container">         
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner">
                    <div class="slide-image" style="background-image:url({{asset('fe/images/slider/1.jpg')}})"></div>
                    <div class="swiper-content container">
                        <h4 class="blue">Amazing Places</h4>
                        <h1 class="white mb-4">ប្រាសាទអង្គរវត្ត</h1>
                        <a href="#" class="per-btn">
                            <span class="white">Discover</span>
                        <i class="fa fa-arrow-right white"></i>
                        </a>
                    </div>
                    <div class="overlay"></div>
                </div> 
            </div>
            <div class="swiper-slide">
                <div class="slide-inner">
                    <div class="slide-image" style="background-image:url({{asset('fe/images/slider/2.jpg')}})"></div>
                    <div class="swiper-content container">
                        <h4 class="blue">ខ្នងផ្សារ</h4>
                        <h1 class="white mb-4">ខ្នងផ្សារ</h1>
                        <!-- <span>travel</span> with us -->
                        <a href="#" class="per-btn">
                            <span class="white">Discover</span>
                            <i class="fa fa-arrow-right white"></i>
                        </a>
                    </div>
                    <div class="overlay"></div>
                </div> 
            </div>
            <div class="swiper-slide">
                <div class="slide-inner">
                    <div class="slide-image" style="background-image:url({{asset('fe/images/slider/3.jpg')}})"></div>
                    <div class="swiper-content container">
                        <h4 class="blue">Trip For Your Kids</h4>
                        <h1 class="white mb-4">បូកគោ</h1>
                        <a href="#" class="per-btn">
                            <span class="white">Discover</span>
                            <i class="fa fa-arrow-right white"></i>
                        </a>
                    </div>
                    <div class="overlay"></div>
                </div> 
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- banner ends -->

@endsection('content')