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

.notification {
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

        </style>
    </head>
    <body>
        <ul>@guest
            <a href="{{ url('/') }}"><img src="images/imageprofil.png" height="68" width="200" class="logo"></a>
            @else
            <a href="{{ url('/home') }}"><img src="images/imageprofil.png" height="68" width="200" class="logo"></a>

            @endguest 

        <div class="flex-center position-ref full-height couleur">
            
                        @guest
                            <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                              <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">{{__('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                                 <li >
                                    <a  href="{{ url('/profil') }}">{{ Auth::user()->name }}</a>
                                </li>
                                <li >
                                    <a  href="{{url('messages/'.Auth::user()->id)}}" class="notification">Messenger
                                      <span class="badge">?</span></a>
                                </li>
                                <li >
                                    <a  href="{{ route('logout') }}">{{ __('Log out') }}</a>
                                </li>
                        @endguest 
        </div>
    </ul>
<div class="container">
            
  @yield('centenu')
        </div>

<footer class="footer-distributed">

      <div class="footer-left">
        <h3>A propos <span>TDM</span></h3>

        <p class="footer-links">
          @guest
            <a href="{{ url('/') }}">Accueil</a>

            @else
            <a href="{{ url('/home') }}">Accueil</a>


            @endguest 
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
          <span>About the company</span>
          We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a> 
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