@extends('layouts.master')

@section('title')
    <title>Contact - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('content') 

<section>

  <div class="main-contect">
    <div class="contact-bg">
  <img src="{{ asset('assets/images/contact-bg.png') }}" >
    </div>
    
    <div class="form-contact">
  
<section>
<div class="wrapper-contact container">
<h1>Contact Us</h1>
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
  </div>

  </div>
</section>
@endsection