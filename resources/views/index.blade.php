@extends('layout')
@section('content')
    <div class="jumbotron">
        <p class="h5 text-center py-4">Quiz - O que você sabe sobre o campeonato da Champions League</p>
    </div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center imagem">
        <a href="#" class="img-thumbnail logo">
            <img class="img-fluid" src="{{asset('storage/image/Cristiano_Ronaldo.jpg')}}">
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text-center py-4">
        <p class="texto">Qual e seu conhecimento sobre a <br>
            <strong>Champions League?</strong> </h4>
        </p>
    </div>
    <div class="card-footer py-4 text-center">
        <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>
    </div>
</div>

@endsection