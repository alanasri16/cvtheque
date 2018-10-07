@extends('layouts.app')


@section('content')

    <div class="container" >
        <div class="row align-items-start">
            <div class="col-md-12">
                @if(session()->has('succes'))
                    <div class="alert alert-success">
                        {{session()->get('succes')}}
                    </div>
                @endif

                <h1>La liste de mes cv</h1>
                    <br>
                <div   class = pull-left>
                   <a href="{{url(('cvs/create'))}}" class="btn btn-success" > Nouveau cv</a>

                </div>
                <br>

                    <div class="row" >
                        @foreach($cvs as $cv)

                        <div class="col-sm-6 col-md-4 border border-light">
                            <div class="thumbnail">
                                <br>
                                <br>
                                <img src="{{asset('storage/'.$cv->photo)}}" alt="..." width=300 height=300 class="rounded-top"  >
                                <div class="caption">
                                    <h3>{{$cv->titre}}</h3>

                                    <br>
                                    <p>


                                       <form action="{{url('cvs/'.$cv->id)}}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}


                                        <a href="{{url('cvs/'.$cv->id.'/show')}}" class="btn btn-primary" role="button">Show</a>

                                        <a href="{{url('cvs/'.$cv->id.'/edit')}}"class="btn btn-default" role="button" >Editer</a>

                                        @can('delete',$cv)
                                        <button  type="submit" class="btn btn-danger" >Supprimer</button>
                                        @endcan
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

@endsection
