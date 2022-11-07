@extends('layouts.layout')

@section('title', 'dashboard')

@section('content')
@if (session('msg'))
<div class="alert alert-success" role="alert">
    {{session('msg')}}
</div>
@endif
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th class="col">#</th>
                    <th class="col">Nome</th>
                    <th class="col">Participantes</th>
                    <th class="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                <tr>
                    <th scropt="row">{{$loop->index+1}}</th>
                    <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                    <td>0</td>
                    <td>
                        <a href="#" class="btn btn-info edit-btn">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                            Editar
                        </a>
                        <form action="events/{{$event->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="Submit" class="btn btn-danger delete-btn">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                                Deletar
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>



    @else
        <p> Você ainda não tem nenhum evento! </p>
    @endif
</div>

@endsection
