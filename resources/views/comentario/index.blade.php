@extends('templates.base')
@section('title', 'Recados')
@section('h1', 'Página de Comentário')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de comentário</p>

        <a class="btn btn-primary" href="{{route('comentario.inserir')}}" role="button">Inserir comentario</a>
    </div>
</div>
<div class="row">
    <table class="table">
        <tr>
            <th width="50%">Nome</th>
            <th>Comentário</th>
            <th colspan="2">Gerenciar</th>
        </tr>
            @foreach($rec as $recs)
        <tr>
            <td>{{$recs->nome}}</td>
            <td>{{$recs->comentario}}</td>
            <td>
                <a href="{{ route('comentario.edit', $recs) }}" class="btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i>Editar</a>
            </td>
            <td>
            @if (session('usuario'))
            
                <a href="{{ route('comentario.remove', $recs) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i>Apagar</a>
            @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection