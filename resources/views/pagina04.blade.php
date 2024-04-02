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
        <form action="{{route('dadosPagina04')}}" method="POST">
            @csrf
            <div class="form-group py-4">
                <label for="pergunta"> <h3> <strong>Qual e o time com mais títulos da Champions League</strong> </h3> </label>
                
                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5>Real Madri</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5>Barcelona</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5>Bayer de Monique</h5>
                    </label>
                </div>

                <div class="form-check" py-4>
                    <input class="form-check-input" type="radio" name="pegunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5>Manchester United</h5>
                    </label>
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <button onclick="window.location.kref='/';" type="button" class="btn btn-primary btn-sm">Desistir</button>
        </form>
    </div>
</div>
@endsection
