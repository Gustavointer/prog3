@extends('templates.base')
@section('title', 'Editar Comentario')
@section('h1', 'Editar Comentario')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('comentario.update', $recados) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$recados->nome}}">
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentário</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3">{{$recados->comentario}}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection