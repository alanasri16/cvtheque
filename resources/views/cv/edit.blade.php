@extends('layouts.app')


@section('content')

    @if(count($errors))
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors-> all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>


    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
            <form action="{{url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control" value="{{$cv -> titre}}" >
                </div>



                <div class="form-group">
                    <label for="">Presentation</label>
                    <textarea name="presentation" class="form-control"  cols="180" rows="7" >{{$cv -> presentation}}</textarea>
                </div>

                <div class="form-group ">
                  <label for="">Image</label>
                    <br>
                    <input class="form-controle  border" type="file" name="photo" >
                </div>


                <div class="form-group ">

                    <input type="submit"  class="form-control btn-danger" value="Modifier" >
                </div>


            </form>
        </div>





@endsection