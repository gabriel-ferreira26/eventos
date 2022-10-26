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
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento" >
        </div>
        <div class="form-group m-2">
            <label for="description">Descric√£o</label>
            <textarea class="form-control" rows="4" id="description" name="description" placeholder="DescriÁ„o do evento" ></textarea>
        </div>
        <div class="form-group m-2">
            <label for="private">Privado</label>
            <select type="text" class="form-control" id="private" name="private">
                <option value="0">N√£o</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" value="Criar" class="btn btn-primary m-2">

    </form>
</div>

@endsection
