<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title >CvTheque</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #131212;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url("../t.jpg");
                background-size: cover;
                background-repeat: no-repeat;

            }

            .full-height {
                height: 100vh;
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #171a1d;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;

            }






        </style>
    </head>
    <body class="cv" >
    <div class="content">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{url('accueil')}}"><img src="../accueil.png" style="width:50px;height:50px;">Accueil</a>
                    <a href="{{url('service')}}"><img src="../service.png" style="width:50px;height:50px;">Service</a>
                    <a href="{{url('contact')}}"><img src="../contact.png" style="width:50px;height:50px;">Contact</a>
                    @auth
                      <a href="{{ url('/cvs') }}"><img src="../home.png" style="width:50px;height:50px;">Home</a>

                    @else

                        <a href="{{ route('login') }}"><img src="../login.png" style="width:50px;height:50px;">Login</a>
                        <a href="{{ route('register') }}"><img src="../register.png" style="width:50px;height:50px;">Register</a>
                    @endauth


                </div>
            @endif

            <div class="content ">
                <div class="title m-b-md">
                    <a href="http://localhost:8000/cvs "> CvTheque</a>
                </div>
<br>
                <div class="links">
                    <a href="https://www.facebook.com/TunisieTelecom/?ref=br_tf"><img src="../web.png" style="width:50px;height:50px;">WEB</a>
                    <a href="https://www.tunisietelecom.tn/Fr"> <img src="../fb.png" style="width:50px;height:50px;">Fb</a>

                    <a href="https://www.instagram.com/tunisietelecom/"><img src="../instag.png" style="width:50px;height:50px;">Instagrame</a>

                </div>
            </div>
        </div>
    </div>

    <center>
        <footer id="footer">
        <p>Copyright 2018@Tunisie_Telecom</p>
    </footer>
    </center>
    </body>

</html>


