@extends('layouts.master')

@section('title')
    <title>Event - RSL Trading</title>
@endsection

{{-- @section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
@endsection --}}

@section('content')

<style>
  :root{
  color: #059848;
  color: #FFFFFF
}

.main-banner{
  width: 100%;
  height: 115vh;
  background-color: #D9D9D9;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 0 !important;
  position: relative;
}

.main-banner .img-banner{
  width: 100%;
  height: 115vh;
position: absolute;
object-fit: cover;
top: 0;
z-index: -1;
}

.main-banner .main-banner-h1-bg {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.main-banner h1{
  font-weight: bolder;
  font-size: 100px;
  color: #059848;
}

.main-banner .main-banner-p-bg{
  width: 50rem;
  text-align: center;
}

.main-banner .main-banner-p-bg p{
  font-size: 20px;
}

.btn-Interest-to-export{
  width: 228px;
  height: 43px;
  background-color: #FFFFFF;
  font-weight: bolder;
  color: #059848;
  border-radius: 41.5px;
  margin-top: 3rem;
}

@media screen and (max-width: 1025px){
  .main-banner h1{
  font-weight: bolder;
  font-size: 75px;
  color: #059848;
}

.main-banner .main-banner-p-bg{
  width: 30rem;
  text-align: center;
}

.btn-Interest-to-export{
  width: 208px;
  height: 40px;
  background-color: #FFFFFF;
  font-weight: bolder;
  color: #059848;
  border-radius: 41.5px;
  margin-top: 3rem;
}
}

@media screen and (max-width: 640px) {

.main-banner{
  height: 70vh;
}
    .main-banner h1{
  font-weight: bolder;
  font-size: 50px;
  color: #059848;
}

.main-banner .main-banner-p-bg{
  width: 25rem;
  text-align: center;
}

.main-banner .main-banner-p-bg p{
  font-size: 15px;
}


.btn-Interest-to-export{
  width: 180px;
  height: 30px;
  background-color: #FFFFFF;
  font-weight: bolder;
  color: #059848;
  border-radius: 41.5px;
  margin-top: 3rem;
}
}



@media screen and (max-width: 426px) {

.main-banner{
  height: 70vh;
}
    .main-banner h1{
  font-weight: bolder;
  font-size: 40px;
  color: #059848;
}

.main-banner .main-banner-p-bg{
  width: 18rem;
  text-align: center;
}

.main-banner .main-banner-p-bg p{
  font-size: 13px;
}


.btn-Interest-to-export{
  width: 180px;
  height: 30px;
  background-color: #FFFFFF;
  font-weight: bolder;
  color: #059848;
  border-radius: 41.5px;
  margin-top: 3rem;
}
}

.first-card{
  position: relative;
  width: 100%;
  height: 100%;
  padding-top: 13rem;
  margin-top: -10% !important;
}

@media screen and (max-width:769px) {
  .first-card{
  position: relative;
  width: 100%;
  height: 100%;
  padding-top: 9rem;
  margin-top: -10% !important;
}
}

.first-card-background{
    z-index: 0 !important;
    position: absolute;
 height: 100%;
  width: 100%;
  top: 0

}

.first-card-background img{
  object-fit: cover;
  width: 100%;
  height: 170vh;
}



@media screen and (max-width: 1440px) and (min-width: 768px){
  .first-card{
  position: relative;
  width: 100%;
  height: 170vh;
  padding-top: 18rem;
  margin-top: -15% !important;
}
}

.main-banner{
  width: 100%;
  height: 100vh;
  background-color: #D9D9D9;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 0 !important;
  position: relative;
}


.btn-Interest-to-export{
  width: 228px;
  height: 43px;
  background-color: #FFFFFF;
  font-weight: bolder;
  color: #059848;
  border-radius: 41.5px;
  margin-top: 2rem;
}


.main-card-product{
  position: relative;
  z-index: 2;
  width: 100%;
  height: 100%;
}

.wrapper-contact{
  margin-top: 15rem;
  margin-bottom: 5rem;
  padding-top: 1rem;
  width: 100%;
  padding-left: 5rem !important;
  padding-right: 5rem !important;
}

.wrapper-contact p{
  text-align: center;
  color:#059848;
  font-size: 30px;
}

.wrapper-contact .input-field input{
  width: 100%;
  height: 49px;
  border-radius: 24.5px;
  background-color: #ECECEC;
  padding-left: 1.5rem;
  font-size: 16px !important; 
  margin-bottom: 0.5rem;
  outline: none !important;
}

.wrapper-contact .input-field input::placeholder{
  font-size: 16px !important;
  color: #394552 !important;
}

.wrapper-contact .input-field input:focus{
  border: 1px solid #059848 !important;
}

.wrapper-contact .input-field textarea{
  width: 100%;
  max-height: auto;
  border-radius: 24.5px;
  background-color: #ECECEC;
  padding-left: 1.5rem;
  font-size: 16px !important; 
  margin-bottom: 0.5rem;
}

.wrapper-contact .input-field textarea::placeholder{
  color: #394552;
}

.wrapper-contact .input-field textarea:focus{
  border: 1px solid #059848 !important;
}

.wrapper-contact .input-field select{
  width: 100%;
  height: 49px;
  border-radius: 24.5px;
  background-color: #ECECEC;
  padding-left: 1.5rem;
  font-size: 16px !important; 
  margin-bottom: 0.5rem;
  outline: none !important;
  border: 1px solid #394552;
}

.wrapper-contact .input-field select option{
background-color: #059848;
color: #ffffff
}

.confirm-policy{
  display: flex;
  justify-content: center;
  margin-top: 1rem;
}

.confirm-policy input[type="checkbox"]{
  width: 27px;
  height: 27px;
  border-radius: 100px;
  background-color: #059848;
  border: none;
}

.confirm-policy input[type="checkbox"]:focus,
.confirm-policy input[type="checkbox"]:active
{
  box-shadow: none;
 background-color: #059848;
}

.confrim-policy-text{
  width: 25rem;
}

.confirm-policy p{
  font-size: 15px;
  color: #059848;
}

.btn-Submit{
  position: relative;
  width: 396.97px;
  height: 80.14px;
  margin-top: 2rem;
}

.btn-Submit img{
  width: 100%;
  position: absolute;
  top: 0;
  z-index: 0;
}

.btn-Submit p{
  position: absolute;
  top: 47%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  color: #FFFFFF;
  font-weight: 500;
  margin-top: 0.2rem;
  font-size: 35px;
}


@media screen and (max-width: 768px) {


  .wrapper-contact{
  margin-top: 5rem;
  padding-top: 1rem;
  width: 100%;
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}

.btn-Submit{
  width: 356.97px;
  height: 75.14px;
  margin-top: 2rem;
}

.btn-Submit p{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  color: #FFFFFF;
  font-weight: 500;
  margin-top: 0rem;
}

.confirm-policy p{
  font-size: 14px;
  color: #059848;
}
}

@media screen and (max-width: 426px) {
  .btn-Submit{
  width: 286.97px;
  height: 68.14px;
  margin-top: 2rem;
}

.btn-Submit p{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  color: #FFFFFF;
  font-weight: 500;
  margin-top: -0.3rem;
  font-size: 25px;
}
}

.event-card-wrapper{
  display: flex;
  gap: 2rem;
  margin-top: 5rem;
}

.event-card-wrapper .event-img{
  width: 1200px;
  max-width: 100%;
  max-width: 100%;
  height: 325.79px;

  
}

.event-card-wrapper .event-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 0px 50px 0px 50px;
  border:5px solid #CCC9C9;
}

.event-card-wrapper .event-content{
  width: 1700px;
  max-width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.event-card-wrapper .event-content h5{
  font-size: 40px !important;
}

.event-card-wrapper .event-content p{
  font-size: 20px;
}


@media screen and (max-width: 769px) {
  .event-card-wrapper{
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  margin-top: 5rem;
}

.event-card-wrapper .event-img{
  order: 1;
}

.event-card-wrapper .event-content{
  order: 2;
}

.event-card-wrapper .event-content h5{
  font-size: 30px !important;
}

.event-card-wrapper .event-content p{
  font-size: 15px;
}
}



.last-banner{
  width: 100%;
  height: 70vh;
}

.last-banner img{
  width: 100%;
  height: 70vh;
  object-fit: cover;
}

@media screen and (max-width: 769px) {
  .last-banner{
  width: 100%;
  height: 50vh;
}

.last-banner img{
  width: 100%;
  height: 50vh;
  object-fit: cover;
}

}


@media screen and (max-width: 426px) {
  .last-banner{
  width: 100%;
  height: 40vh;
}

.last-banner img{
  width: 100%;
  height: 40vh;
  object-fit: cover;
}

}


  .showcommoditylist{
    width: 100%;
    height: auto;
    background-color: #059848;
    color: #ffffff;
    border-radius: 24.5px;
    padding-left: 1rem;
}

.wrapper-contact .choose-field{
width: 100%;
  height: 49px;
  border-radius: 24.5px;
  background-color: #ECECEC;
  padding-left: 1.5rem;
  font-size: 16px !important; 
  margin-bottom: 0.5rem;
  outline: none !important;
  padding-top: 0.7rem

}


/* banner style */

.main-banner .wrapper-banner{
  display: grid;
  grid-template-columns: 1fr 1fr;
  padding-left: 5rem;
  padding-right: 5rem;
  gap: 5rem !important;
  position: relative
}

.main-banner .banner-img{
 position: absolute;
  width: 100%;
  height: 120vh;
 top: 0%;
 z-index: -1;
  object-fit: cover;
}

.banner-content {
 width: 100%;
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
}

.banner-content .main-banner-h1-bg{
  text-align: center;
}

.wrapper-banner .logo-video{
  display: flex;
  justify-content: center;
  align-items: center;

}

.wrapper-banner .home-banner-logo{
  width: 400px !important;
}

.banner-content .main-banner-h1-bg h1{
  font-size: 70px;
}

.banner-content .main-banner-p-bg p{
  font-size: 16px;
}

.banner-content .main-banner-p-bg{
  width: 500px;
}

@media screen and (max-width: 1025px){
.main-banner .wrapper-banner{
  display: grid;
  grid-template-columns: 1fr 1fr;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}

.banner-content .main-banner-h1-bg{
  text-align: center;
}

.wrapper-banner .home-banner-logo{
  width: 300px !important;
}

.banner-content .main-banner-h1-bg h1{
  font-size: 55px;
}

.banner-content .main-banner-p-bg{
  width: 350px !important;
}

.banner-content .main-banner-p-bg p{
  font-size: 16px;
}
}

@media screen and (max-width: 769px){
.main-banner .wrapper-banner{
  display: grid;
  grid-template-columns: 1fr;
  padding-left: 1rem;
  padding-right: 1rem;
  margin-top: -4rem
}

.banner-content .main-banner-h1-bg{
  text-align: center;
}

.wrapper-banner .home-banner-logo{
  width: 250px !important;
}

.banner-content .main-banner-h1-bg{
 width: 100% !important
}


.banner-content .main-banner-h1-bg h1{
  font-size: 40px;
}

.banner-content .main-banner-p-bg{
  width: 100% !important;
}

.banner-content .main-banner-p-bg p{
  font-size: 16px;
}

.first-card{
  position: relative;
  width: 100%;
  height: 100%;
  margin-top: 7% !important;
}


.main-banner .banner-img{
 position: absolute;
  width: 100%;
  height: 130vh;
 top: 0%;
 z-index: -1;
 object-fit: cover;
}
}


@media screen and (max-width: 641px){
  .main-banner .wrapper-banner{
  display: grid;
  grid-template-columns: 1fr;
  padding-left: 1rem;
  padding-right: 1rem;
  margin-top: 15rem 
}

.first-card{
  position: relative;
  width: 100%;
  height: 100%;
  margin-top: 30% !important;
}

.main-banner .banner-img{
 position: absolute;
  width: 100%;
  height: 140vh;
 top: 0%;
 z-index: -1;
 object-fit: cover;
}
}

@media screen and (max-width: 426px){
.main-banner .wrapper-banner{
  display: grid;
  grid-template-columns: 1fr;
  padding-left: 1rem;
  padding-right: 1rem;
  gap: 1rem;
  margin-top: 15rem;
}

.banner-content .main-banner-h1-bg{
  text-align: center;
}

.wrapper-banner .home-banner-logo{
  width: 200px !important;
}

.banner-content .main-banner-h1-bg h1{
  font-size: 40px;
}

.banner-content .main-banner-p-bg{
  width: 100% !important;
}

.banner-content .main-banner-p-bg p{
  font-size: 14px;
}

.first-card{
  position: relative;
  width: 100%;
  height: 100%;
  margin-top: 50% !important;
}
}

/* popup animate */


.popup {
  opacity: 0;
  transform: scale(0.6);
  animation: popupIn 1s ease-out forwards;
}

/* Keyframe animation */
@keyframes popupIn {
  0% {
    opacity: 0;
    transform: scale(0.6);
  }
  60% {
    opacity: 1;
    transform: scale(1.05);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

.first-event-conten img{
  border-radius: 0px 50px 0px 50px;
  border: 5px solid #CCC9C9;
}

.first-event-conten h5{
  font-size: 40px !important;
}

.first-event-conten p{
  font-size: 20px;
}


</style>

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
        <h1 class="popup">Activites</h1>
     </div>
     <div class="main-banner-p-bg">
    <p class="popup">​​​Your Trusted Partner in Cambodian Agricultural Exports</p>
     </div>
     <a class="popup" href="#first-card"><button class="btn-Interest-to-export">Interest to Export</button></a>
 </div>
    </div>
  </div>  
</div>
</section>

<section>
    <div class="first-card">
      <div class="first-card-background">
        <img src="{{ asset('assets/images/second-bg.png') }}">
      </div>
      <div class="main-card-product">
      <div class="container">

        

        <div class="first-event-conten">
             <img src="{{ asset('assets/images/Activites-1.JPG')}}">
              <div class="event-content">
                <h5>Headline Title</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>
        </div>


                <div class="event-card-wrapper">

              <div class="event-content">
                <h5>Headline Title123</h5>
                <p>
Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide while supporting farmers with better opportunities and incomes.</p>
          </div>

               <div class="event-img">
              <img src="{{ asset('assets/images/Activites-3.JPG')}}">
             </div>
        </div>


              <div class="event-card-wrapper">
             <div class="event-img">
              <img src="{{ asset('assets/images/Activites-4.JPG')}}">
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
              <img src="{{ asset('assets/images/Activites-5.JPG')}}">
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
  <select id="tradeType" class="form-select">
    <option value="">Select Import/Export</option>
    <option value="import">Import</option>
    <option value="export">Export</option>
  </select>
</div>

<div class="col-lg-6 col-md-6 input-field">
<select class="form-select" aria-label="Default select example">
       <option selected disabled>Select a Country</option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BR">Brazil</option>
    <option value="BN">Brunei</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CR">Costa Rica</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GR">Greece</option>
    <option value="GD">Grenada</option>
    <option value="GT">Guatemala</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HN">Honduras</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">North Korea</option>
    <option value="KR">South Korea</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Laos</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia</option>
    <option value="MD">Moldova</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="QA">Qatar</option>
    <option value="RO">Romania</option>
    <option value="RU">Russia</option>
    <option value="RW">Rwanda</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syria</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania</option>
    <option value="TH">Thailand</option>
    <option value="TG">Togo</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">USA</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>

</div>

<div class="col-lg-6 col-md-6">
  <label class="choose-field" >Commodities</label>
  <div id="commodityList" class="showcommoditylist"></div>
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
information so they can respond to my enquiry.
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
