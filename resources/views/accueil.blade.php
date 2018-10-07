@extends('layouts.app')

@section('content')
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bachground.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>

    <a href="http://localhost:8000 "> <center><h1>Accueil </h1></center></a>
    <center>
    <a href="http://localhost:8000 "><img src="../back.png"  style="width:50px;height:50px;"></a>

    <a href="http://localhost:8000/service "><img src="../next.png"  style="width:50px;height:50px;"></a>

    </center>





    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../carou/1.png" alt="First slide" style="width:500px;height:600px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../carou/2.png" alt="Second slide" style="width:500px;height:600px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../carou/3.jpg" alt="Third slide" style="width:500px;height:600px;">
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

<br>
    <br>






    <center>


         <h4 style="color:black; text-align: justify;border:1px solid black;padding:8px; margin:8px; "  >

             NOTRE ENTREPRISE
             <br>
             L’office national des télécommunications est créé suite à la promulgation de la loi N°36 du 17 avril 1995.
             L’office a ensuite changé de statut juridique, en vertu du décret N°30 du 5 avril 2004, pour devenir une société anonyme dénommée « Tunisie Telecom ».En juillet 2006, il a été procédé à l’ouverture du capital de Tunisie Telecom à hauteur de 35% en faveur du consortium émirati TeCom-DIG.
             Cette opération vise à améliorer la rentabilité de Tunisie Telecom et à lui permettre de se hisser parmi les grands opérateurs internationaux.Depuis sa création, Tunisie Telecom œuvre à consolider l’infrastructure des télécoms en Tunisie, à améliorer le taux de couverture et à renforcer sa compétitivité.
             Elle contribue également activement à la promotion de l’usage des TIC et au développement des sociétés innovantes dans le domaine des télécoms.Pionnière du secteur des télécoms en Tunisie, Tunisie Telecom a établi un ensemble de valeurs définitoires qui place le client au centre de ses priorités.
             L’adoption de ces valeurs se traduit en particulier par une amélioration continue des standards de l’entreprise et de la qualité des services.Tunisie Telecom compte dans ses rangs plus de 6 millions abonnés dans la téléphonie fixe et mobile.Tunisie Telecom se compose de 24 directions régionales, de 140 Espaces TT et points de vente et de plus de 13 mille points de vente privés.
             Elle emploie plus de 6000 agents.

    </h4>
         <img src="../tunisietelecome.jpg"></center>




    </div>
@endsection



