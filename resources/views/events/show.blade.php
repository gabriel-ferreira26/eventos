@extends('layouts.layout')

@section('title', $event->title)

@section('content')

<div id="container-center">
    <div class="offset-md-1 bg-default">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><span class="icons material-symbols-outlined">location_on</span> {{ $event->city }}</p>
                <p class="events-participants"><span class="icons material-symbols-outlined">group</span> X Participantes</p>
                <p class="event-owner"><span class="icons material-symbols-outlined">star</span>  Dono do Evento</p>

                <h3 class="mt-3">Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>

                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            </div>

        </div>
    </div>
</div>
@endsection
