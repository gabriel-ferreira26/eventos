@extends('layouts.layout')

@section('title', 'Titulo')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="event-container" class="col-md-12">


    @if (session('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
    @endif
    <h2>Proximos eventos</h2>
    <p>Veja abaixo os eventos dos proximos dias</p>

    <div id="card-container" >
        @foreach ($events as $i => $event)
            <div class="card col-md-3 m-1 p-3">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{$event->created_at}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="participants">{{$i}} Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
