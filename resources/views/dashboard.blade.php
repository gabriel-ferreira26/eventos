@extends('layouts.layout')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)

    @else
        <p> Voc� ainda n�o tem nenhum evento! </p>
    @endif
</div>

@endsection
