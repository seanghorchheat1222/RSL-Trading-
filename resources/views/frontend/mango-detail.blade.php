@extends('layouts.master')

@section('title')
    <title>Export - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/export-detail.css') }}">
@endsection

@section('content') 

<section>
<div class="main-banner">
     <div class="main-banner-h1-bg">
        <h1>Fruits & Fruit Products</h1>
     </div>
     <div class="main-banner-p-bg">
    <p>High-quality, farm-sourced grains trusted by local farmers and global buyers.</p>
     </div>
    <button class="btn-Interest-to-export">Interest to Export</button>
    <div class="img-banner">
      <img src="{{ asset('assets/images/export-card-product-1.png') }}">
    </div>
</div>
</section>

<section>
    <div class="first-card">
      <div class="first-card-background">
        <img src="{{ asset('assets/images/second-bg.png') }}">
      </div>
      <div class="main-card-wrapper">
         {{-- <img src="{{ asset('assets/images/rice-detail-img.png') }}"> --}}
      <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{ asset('assets/images/card-6.png')}}"></div>
      <div class="swiper-slide"><img src="{{ asset('assets/images/card-6.png')}}"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>


        
      <div class="context-main-card">
        <p class="title"> Mango</p>
        <p class="sub-title">Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
      </div>
        </div>
      </div>
    </div>





</section>

@endsection

@section('export-detail')
<script src="{{ asset('assets/js/export-detail.js') }}"></script>
@endsection