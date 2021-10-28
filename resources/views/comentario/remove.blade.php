@extends('templates.base')
@section('title', 'Remover comentario')
@section('h1', 'Remover comentario')

@section('content')

<div class="row">
    <div class="col">
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Cuidado!</strong> Você está prestes a remover esse comentário!
        </div>
        <p>Nome: {{$rec->nome}}</p>
        <p>Você tem certeza que deseja apagar este produto para sempre?</p>
        <form method="post" action="{{ route('comentario.delete', $rec) }}">
        @csrf
        @method('delete')
            <input type="submit" class="btn btn-danger" value="Pode apagar sem medo">
            <a href="{{ route('comentarios') }}" class="btn btn-secondary">Desculpa, eu cliquei errado!</a>
        </form>
    </div>
</div>
@endsection