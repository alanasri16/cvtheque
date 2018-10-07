@extends('layouts.app')


@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
            <form action="{{url('cvs')}}"  enctype="multipart/form-data" method="post" >

                {{csrf_field()}}

                    <div class="form-group @if($errors->get('titre')) has-error @endif" >
                        <label for="">Titre</label>
                            <input type="text" name="titre" class="form-control" value="{{old('titre')}}" >
                     @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $message)
                                <li>{{$message}}</li>
                                @endforeach
                        @endif
                    </div>



                 <div class="form-group @if($errors->get('presentation')) has-error @endif">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control"  cols="180" rows="7" >{{old('presentation')}}</textarea>

                     @if($errors->get('presentation'))
                         @foreach($errors->get('presentation') as $message)
                             <li>{{$message}}</li>
                         @endforeach
                     @endif
                 </div>


                <div class="form-group"  >
                    <label for="" >Image</label>
                    <br>
                    <input id="photo" class="form-controle" type="file" name="photo" >
                </div>

                <div class="form-group">

                    <input type="submit"  class="form-control btn btn-primary" value="Enregistrer" >
                </div>


            </form>
        </div>





@endsection