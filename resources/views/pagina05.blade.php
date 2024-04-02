@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 1: </strong> </h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina05')}}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta"> <h3> <strong>Em qual foi o primeiro ano da Champions League</strong> </h3> </label>
                
                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5>1955</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5>1956</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5>1957</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5>1958</h5>
                    </label>
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.kref='/';" type="button" class="btn btn-primary btn-sm">Desistir</button>
        </form>
    </div>
</div>
@endsection
