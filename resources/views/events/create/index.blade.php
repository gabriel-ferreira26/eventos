@extends('layouts.layout')

@section('title', 'Titulo')

@section('content')

<div class="header">
</div>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group m-2">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" >
        </div>
        <div class="form-group m-2">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do evento" >
        </div>
        <div class="form-group m-2">
            <label for="description">Descricão</label>
            <textarea class="form-control" rows="4" id="description" name="description" placeholder="Nome do evento" ></textarea>
        </div>
        <div class="form-group m-2">
            <label for="private">Privado</label>
            <select type="text" class="form-control" id="private" name="private" placeholder="Nome do evento" >
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" value="Criar" class="btn btn-primary m-2">

    </form>
</div>

@endsection
