@extends('layouts.master')

@section('title')
    <title>Event - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
@endsection

@section('content') 

<section>
<div class="main-banner">
     <div class="main-banner-h1-bg">
        <h1>Events</h1>
     </div>
     <div class="main-banner-p-bg">
    <p>​​Your Trusted Partner in Cambodian Agricultural Exports</p>
     </div>
    <button class="btn-Interest-to-export">Interest to Export</button>
</div>
</section>

<section>
    <div class="first-card">
      <div class="first-card-background">
        <img src="{{ asset('assets/images/second-bg.png') }}">
      </div>
      <div class="main-card-product">
      <div class="container">

        <div class="event-card-wrapper">
             <div class="event-img">
              <img src="{{ asset('assets/images/bg-3.png')}}">
             </div>

              <div class="event-content">
                <h5>Headline Title</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>
        </div>


                <div class="event-card-wrapper">
      
              <div class="event-content">
                <h5>Headline Title</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>

               <div class="event-img">
              <img src="{{ asset('assets/images/bg-3.png')}}">
             </div>
        </div>


              <div class="event-card-wrapper">
             <div class="event-img">
              <img src="{{ asset('assets/images/bg-3.png')}}">
             </div>

              <div class="event-content">
                <h5>Headline Title</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>
        </div>


              <div class="event-card-wrapper">
      
              <div class="event-content">
                <h5>Headline Title</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>

               <div class="event-img">
              <img src="{{ asset('assets/images/bg-3.png')}}">
             </div>
        </div>






      </div>
      </div>
    </div>
</section>



<section>
<div class="wrapper-contact container">
<p>Contact Form</p>
<div class="row">
<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Name">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Mobile Phone ">
</div>

<div class="col-lg-6 col-md-6 input-field"> 
  <input class="col-12" placeholder="Company Name">
</div>
 
<div class="col-lg-6 col-md-6 input-field">
 <select class="form-select" aria-label="Default select example">
 <option selected>Import</option>
  <option value="1">Select Commodities</option>
  <option value="2">Select Commodities</option>
  <option value="3">Select Commodities</option>
</select>
</div>

<div class="col-lg-6 col-md-6 input-field">
<select class="form-select" aria-label="Default select example">
  <option selected>Country</option>
  <option value="1">Cambodia</option>
  <option value="2">China</option>
  <option value="3">USA</option>
</select>

</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Export
">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Adress
">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Email
">
</div>

<div class="col-12 input-field">
  <textarea class="col-12" placeholder="Messages
"></textarea>
</div>
</div>

<div class="confirm-policy">
<input type="checkbox">
<div class="confrim-policy-text">
<p>I consent to having this website store my submitted
information so they can respond to my enquiry.”
</p>
</div>
</div>


<div class="d-flex justify-content-center">
  <button class="btn-Submit">
      <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
      <p>Submit</p>
  </button>
</div>
</div>
</section>

<section>
  <div class="last-banner">
    <img src="{{ asset('assets/images/bg-3.png') }}">
  </div>
</section>

@endsection