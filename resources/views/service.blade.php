@extends('layouts.app')

@section('content')
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>


<center>

    <a href="http://localhost:8000 ">  <h1 >CODES DES SERVICES </h1></a>
    <a href="http://localhost:8000/accueil "><img src="../back.png"  style="width:50px;height:50px;"></a>
    <a href="http://localhost:8000/contact "><img src="../next.png"  style="width:50px;height:50px;"></a>
</center>




        <br>
        <div>



            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../carou/2.png" alt="First slide" style="width:500px;height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../carou/1.png" alt="Second slide"style="width:500px;height:600px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../carou/3.jpg" alt="Third slide" style="width:500px;height:600px;">
                    </div>

                     <div class="carousel-item">
                            <img class="d-block w-100" src="../carou/4.png" alt="Third slide" style="width:500px;height:600px;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../carou/5.jpg" alt="Third slide"style="width:500px;height:600px;">
                        </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    <h4 style="color:black; text-align: justify;border:1px solid black;padding:8px; margin:8px; ">
    <br>
        Cette rubrique vous permet d’accéder à la liste des codes permettant de gérer votre compte, de changer votre profil et d’activer les services supplémentaires.

    <br>
        <center><img src="../Capture1.PNG"></center>
    <br>
        <center><img src="../Capture2.PNG"></center>
        <br>
        <center><img src="../Capture3.PNG"></center>
        <br>
        <center><img src="../Capture4.PNG"></center>
        <br>
    </h4>
@endsection