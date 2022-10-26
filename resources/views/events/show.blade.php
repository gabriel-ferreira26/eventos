@extends('layouts.layout')

@section('title', 'Titulo')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="image-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1 id="info-container" class="col-md-6">{{$event->title}}</h1>
                <p class="event-city"></p>
            </div>
        </div>
    </div>

@endsection
