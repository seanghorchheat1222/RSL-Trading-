@extends('layouts.master')

@section('title')
    <title>Career - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/career.css') }}">
@endsection

@section('content')

<section>
<div class="main-banner">
  <img class="banner-img" src="{{ asset('assets/images/banner-img-1.png') }}">
   <div class="wrapper-banner">
    <div class="logo-video">
  <video autoplay muted loop class="home-banner-logo">
                <source src="{{ asset('assets/videos/LOGO.webm') }}">
                </source>
            </video>
    </div>
 <div class="banner-content">
       <div class="main-banner-h1-bg">
        <h1 class="popup">Career</h1>
     </div>
     <div class="main-banner-p-bg">
    <p class="popup">J​​oin Our Team and Grow with Cambodia’s 
Leading Agricultural Exporter</p>

 <p class="popup">​Be part of a company that connects local farmers to global markets, values integrity, and delivers quality products worldwide.”</p>
     </div>
     <a class="popup" href="#first-card"><button class="btn-Interest-to-export">View Open Positions</button></a>
 </div>
    </div>
  </div>  
</div>
</section>

<section>
    <div class="first-card">
      <div class="first-card-background">
        <img src="{{ asset('assets/images/career-bg.png') }}">
      </div>
      <div class="career-main-form">
         <div class="container">
          <div class="row gx-5">

            <div class="col-lg-6">
             <div class="career-input-form">
              <input placeholder="Name">
             </div>
            </div>

               <div class="col-lg-6">
             <div class="career-input-form">
              <input placeholder="Email">
             </div>
            </div>

                 <div class="col-lg-6">
             <div class="career-input-form">
              <input placeholder="Phone Number">
             </div>
            </div>

               <div class="col-lg-6">
             <div class="career-file-form">
               <input  type="file">
            </div>
            </div>


                 <div class="col-lg-6">
             <div class="career-input-form">
              <select class="form-select" aria-label="Default select example">
  <option selected>Position</option>
  <option value="1">Position1</option>
  <option value="2">Position2</option>
  <option value="3">Position3</option>
</select>
             </div>
            </div>


                  <div class="col-lg-6">
             <div class="career-file-form">
               <input  type="file">
            </div>
            </div>


            <div class="col-12 d-flex justify-content-center">
               <button class="btn-career-submit"><img src="{{ asset('assets/images/btn-submit-bg.png') }}"><p>Submit</p></button>
            </div>

          </div>
         </div>
    </div>
</section>





@endsection


@section('career')
    <script src="{{ asset('assets/js/career.js') }}"></script>
@endsection
