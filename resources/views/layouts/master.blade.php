<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
</head>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<body>
<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#">Title</a>
        <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="{{url('accueil')}}">Accueil</a> </li>
            <li><a href="{{url('service')}}">Service</a> </li>
            <li><a href="{{url('contact')}}">Contact</a> </li>
        </ul>


        <form class="navbar-form pull-left">
            <input type="text" class="span2">
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</div>

@yield('content')


<script src="{{asset(('assets/js/jquery.min.js'))}}"></script>
<script src="{{asset(('assets/js/bootstrap.min.js'))}}"></script>


</body>

</html>