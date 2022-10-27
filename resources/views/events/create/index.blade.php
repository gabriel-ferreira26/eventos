@extends('layouts.layout')

@section('title', 'Titulo')

@section('content')

<div class="header">
</div>
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-2">
            <label for="image">Imagem do evento</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group m-2">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" >
        </div>
        <div class="form-group m-2">
            <label for="date">Data do evento</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group m-2">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento" >
        </div>
        <div class="form-group m-2">
            <label for="description">Descricão</label>
            <textarea class="form-control" rows="4" id="description" name="description" placeholder="Descrição do evento" ></textarea>
        </div>
        <div class="form-group m-2">
            <label for="private">Privado</label>
            <select type="text" class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group m-2">
            <label for="private">Adicione itens da infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeira" id="cadeira">
                <label for="cadeira">Cadeira</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="openbar" id="openbar">
                <label for="openbar">Open bar</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="palco" id="palco">
                <label for="palco">Open food</label>
            </div>
        </div>
        <input type="submit" value="Criar" class="btn btn-primary m-2">

    </form>
</div>

@endsection
