<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
body ,html{
                margin: 0;
}

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 6px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .couleur{
                background-color: #2c292f;
                color: white;
            }
            ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2c292f;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                width: 100%;
}

li {
  float: left;
   
  padding-top: 0.5%;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.logo{
  float: left; 
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

        </style>
    </head>
    <body>
        <ul>
            <img src="images\imageprofil.png" height="68" width="200" class="logo">
            <li><a href="{{ url('/') }}">Accueil</a></li>
             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Cours de soutien</a>
              <div class="dropdown-content">
                <a href="{{url('missions')}}">Type mission</a>
                <a href="{{url('University')}}">CPGE & Université</a>
              </div>
            </li>
            <li><a href="{{ url('/langues') }}">Cours de langues</a></li>
            <li><a href="{{ url('/nos-aform') }}">Nos Formules</a></li>
            <li><a href="{{ url('/nos-atelier') }}">Nos Ateliers</a></li>
            <li class="dropdown">
              <a  class="dropbtn" href="{{url('/Qui-nous')}}">Qui sommes-nous!</a>
              <div class="dropdown-content">
                <a href="{{url('/pedagogique')}}">notre équipe pédagogique</a>
                <a href="{{url('/individuels-ou-en-groupes')}}">nos cours individuels ou en groupes</a>
                <a href="{{url('/nos-professeurs-particuliers')}}">nos professeurs particuliers</a>
                <a href="{{url('/le-soutien-scolaire')}}">le soutien scolaire</a>
              </div>
            </li>
        <div class="flex-center position-ref full-height couleur">
            
            @if (Route::has('login'))
                <div class="top-right links">

                    @auth
                       <li> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                       <li> <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif  
        </div>
    </ul>

    <!--images-->
    <div class="bg-image img1"></div>
<div class="bg-image img2"></div>

<div class="bg-text">
    
    <h1>Une école alternative à Casa</h1>
    <p>Le centre TDM propose des cours en ligne, depuis votre domicile, en individuels ou en groupe de 3.
Nos conseillers pédagogiques sont à votre disposition pour toutes questions au:
05 20 14 14 18 ou 06 14 16 00 00</p>
</div>

<style type="text/css">
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-text h1{
    color: red;
}
.bg-image {
  /* Full height */
  height: 50%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url(images/25060-1365x748.jpg); }
.img2 { background-image: url(images/Home-Study-Health-Tips-1.jpg); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.9); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 20px;
  border: 10px solid #f1f1f1;
  position: relative;
  bottom: 50%;
  height: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 70%;
  padding: 20px;
  text-align: center;
}
</style>

<!--offres-->

<div class="blog-card">
      <input type="radio" name="select" id="tap-1" checked>
      <input type="radio" name="select" id="tap-2">
      <input type="radio" name="select" id="tap-3">
      <input type="radio" name="select" id="tap-4">
      <input type="checkbox" id="imgTap">
      <div class="sliders">
        <label for="tap-1" class="tap tap-1"></label>
        <label for="tap-2" class="tap tap-2"></label>
        <label for="tap-3" class="tap tap-3"></label>
        <label for="tap-4" class="tap tap-4"></label>
      </div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-1" src="images/1.jpg">
        </label>
        <div class="content content-1">
          
          <div class="title">COURS INDIVIDUELS</div>
<div class="text">
Cours 100% individuels
Au centre ou à domicile
Horaire flexible
Pour tous les niveaux 
Partout au Maroc</div>
<button>Détails</button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-2" src="images/2.jpg">
        </label>
        <div class="content content-2">
          <div class="title">GROUPE DE 3</div>
<div class="text">
Cours en groupe de 1 à 3 participants
Un emploi du temps flexible,
Dans toutes les matières,
Pour tous les niveaux,
Cours au centre</div>
<button>Détails</button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-3" src="images/3.jpg">
        </label>
        <div class="content content-3">
          <div class="title">GROUPE DE 6</div>
<div class="text">
Cours en groupe de 1 à 6 participants
Un emploi du temps flexible
Cours de Maths et de Physique Chimie
Aide aux devoirs
Formule trimestrielle ou annuelle au centre</div>
<button>Détails</button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-4" src="images/4.jpg">
        </label>
        <div class="content content-4">
          <div class="title">COURS EN LIGNE</div>
<div class="text">
Des cours partout dans le monde
Cours individuels
Cours en live
A l'heure qui vous convient
Dans plusieurs matières</div>
<button>Détails</button>
        </div>
</div>
</div>

<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800");

.blog-card{
  position: absolute;
  height: 370px;
  width: 100%;
  bottom:-67%;
  max-width: 100%;
  background: white;
  box-shadow: 0px 2px 10px #df283a;
}
.inner-part{
  position: absolute;
  display: flex;
  height: 360px;
  left: 65px;
  align-items: center;
  justify-content: center;
  padding: 0 25px;
}
#imgTap:checked ~ .inner-part {
  padding: 0;
  transition: .1s ease-in;
}
.inner-part .img{
  height: 260px;
  width: 260px;
  flex-shrink: 0;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 2px 3px 5px #df283a;
}
#imgTap:checked ~ .inner-part .img{
  height: 370px;
  width: 850px;
  z-index: 99;
  margin-top: 10px;
  transition: .3s .2s ease-in;
}
.img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  cursor: pointer;
  opacity: 0;
  transition: .6s;
}
#tap-1:checked ~ .inner-part .img-1,
#tap-2:checked ~ .inner-part .img-2,#tap-3:checked ~ .inner-part .img-3,
#tap-4:checked ~ .inner-part .img-4{
  opacity: 1;
  transition-delay: .2s;
}
.content{
  padding: 0 20px 0 35px;
  width: 530px;
  margin-left: 50px;
  opacity: 0;
  transition: .6s;
}
#imgTap:checked ~ .inner-part .content{
  display: none;
}
#tap-1:checked ~ .inner-part .content-1,
#tap-2:checked ~ .inner-part .content-2,#tap-3:checked ~ .inner-part .content-3,
#tap-4:checked ~ .inner-part .content-4{
  opacity: 1;
  margin-left: 0px;
  z-index: 100;
  transition-delay: .3s;
}
.content span{
  display: block;
  color: #7b7992;
  margin-bottom: 15px;
  font-size: 22px;
  font-weight: 500
}
.content .title{
  font-size: 30px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
}
.content .text{
  color: #4e4a67;
  font-size: 19px;
  margin-bottom: 30px;
  line-height: 1.5em;
  text-align: justify;
}
.content button{
  display: inline-flex;
  padding: 15px 20px;
  border: none;
  font-size: 16px;
  text-transform: uppercase;
  color: #fff0e6;
  font-weight: 600;
  letter-spacing: 1px;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  border: 1px solid #fd3535;
  background: linear-gradient(147deg, #fe8a39  0%, #fd3838 74%);
}
.content button:hover{
  background: linear-gradient(147deg, #fe791b 0%, #fd1c1c 74%);
}
.sliders{
  position: absolute;
  bottom: 25px;
  left: 65%;
  transform: translateX(-50%);
  z-index: 12;
}
#imgTap:checked ~ .sliders{
  display: none;
}
.sliders .tap{
  position: relative;
  height: 10px;
  width: 50px;
  background: #d9d9d9;
  border-radius: 5px;
  display: inline-flex;
  margin: 0 3px;
  cursor: pointer;
}
.sliders .tap:hover{
  background: #cccccc;
}
.sliders .tap:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: -100%;
  background: linear-gradient(147deg,#f6b323 0%, #f23b26 74%);
  border-radius: 10px;
  transform: scaleX(0);
  transition: transform .6s;
  transform-origin: left;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}
#tap-1:checked ~ .sliders .tap-1:before,
#tap-2:checked ~ .sliders .tap-2:before,#tap-3:checked ~ .sliders .tap-3:before,
#tap-4:checked ~ .sliders .tap-4:before{
  transform: scaleX(1);
  width: 100%;
}

</style> 

<br><br><br><br>
<form action="{{url('/')}}" method="POST">  
@csrf    
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
<hr width=98% color=white>
<hr width=98% color=white>

<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:#2c292f; }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
</style> 

<footer class="footer-distributed">

      <div class="footer-left">
          <img src="images/imageprofil.png">
        <h3>A propos <span>TDM</span></h3>

        <p class="footer-links">
          <a href="{{ url('/') }}">Accueil</a>
          |
          <a href="https://www.linkedin.com/in/saad-chahi-273b99185/">Le développeur</a>
        </p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
            <p><span>Angle Rue Annaba Et Rue Omar El Kindy, Bourgogne</span>
            Casablanca, 20250 Maroc</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>05 20 14 14 18</p>
          &nbsp;&nbsp;&nbsp;
          <p>06 14 16 00 00</p>
        </div>
        
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>École à Casablanca, Maroc</span>
          
          Actuellement ouvert · Services en ligne</p>
        <div class="footer-icons">
          <a href="https://www.facebook.com/trainingdm/"><i class="fa fa-facebook"></i></a> 
        </div>
      </div>
      <div class="copyright">© 2020 by TRAINING DM. </div>
    </footer>

    <style type="text/css">
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

/* The footer is fixed to the bottom of the page */

footer{
  position: fixed;
  bottom: 0;
}

@media (max-height:800px){
  footer { position: static; }
}


.footer-distributed{
  background-color: #2c292f;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 30%;
}

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
  width: 30%;
}

.footer-distributed h3 span{
  color: red;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}


.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  #e0ac1c;
  text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 30%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}

.copyright{
  text-align: center;
  color: red;
  width: 100%;
}
    </style>


            
        </footer> 


    </body>
</html>
