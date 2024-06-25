@extends('layouts.guest')

@section('content')

<div class="bg_image">

<header >
    <div class="container align-items-end justify-content-end d-flex mt-5">
        <div class="col-lg-6">
            <h1 class="text-white text-start text-lg-start  mb-5 header-title">
                Now it's the time of the virtual game <br>
            </h1>
            <hr class="bg_hr">
            <p class="col-lg-6 text-white mb-5 text-start text-lg-start header-description">
            With This Information, You Can Start Planning And Executing.
            </p>
            <div class="d-flex justify-content-start">
                <a href="{{ route('articles.index') }}" class="btn  px-4 py-2 me-3 btn-ex">
                    Get started
                </a>
            </div>

        </div>
    </div>
    
</header>
</div>
<section class="my-lg-2" id="discount">
    <div class="container">
            <h2 class="some_title">The best discounts</h2>   
    </div>
</section>
<section class="auctions my-lg-2 ">
    <div class="swiper auctionsSwiper container ">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img1.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center text-white">
                            <span class="small_text">$60.09</span>
                                <h5>$45.09</h5>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img2.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center text-white">
                            <span class="small_text">$50.09</span>
                                <h5>$35.39</h5>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img3.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center text-white">
                            <span class="small_text">$70.09</span>
                                <h5>$65.99</h5>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img4.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center text-white">
                            <span class="small_text">$80.00</span>
                                <h5>$73.99</h5>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img5.png') }}" class="card-img-top" alt="Metaverse">
                    <div class="card-body">
                        <div class="d-flex author flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-column justify-content-center text-white">
                            <span class="small_text">$40.90</span>
                                <h5>$34.49</h5>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="swiper-pagination"></div>
    </div> 
</section>
<!-- <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
    <swiper-slide>
      <img src="{{ asset('assets/images/img1.png') }}" />
    </swiper-slide>
    <swiper-slide>
      <img src="{{ asset('assets/images/img2.png') }}" />
    </swiper-slide>
    <swiper-slide>
      <img src="{{ asset('assets/images/img3.png') }}" />
    </swiper-slide>
    <swiper-slide>
      <img src="{{ asset('assets/images/img4.png') }}" />
    </swiper-slide>
    <swiper-slide>
      <img src="{{ asset('assets/images/img5.png') }}" />
    </swiper-slide>
  </swiper-container>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> -->

<section id="about" class="articles my-5 py-5">
    <div class="container">
        <h2 class="some_title">About us</h2>
        <div class="row">
            @foreach($articles as $article)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card_img">
                            @foreach($article->images()->limit(4)->get() as $image)
                            <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" class="w-100 p-2 radius" alt="Metaverse">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card_text text-white">
                            <div class="card_name">
                                {{ $article->name }}
                            </div>
                            <div class="card_info">
                                {{ $article->info }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
    