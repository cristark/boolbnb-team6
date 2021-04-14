@extends('layouts.app')

@section('title', 'BoolBnB | Dashboard Utente')

@section('content')
<div class="container">

    {{-- Pulsante creazione Nuovo Post --}}
    <a href="{{route('apartment.create')}}"><button type="button" class="btn btn-primary mb-3">Aggiungi un nuovo appartamento</button></a>

    {{-- Notifica eliminazione post esistente --}}
    @if (session('status'))
	    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    {{-- Tabella Post DataBase --}}
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Anteprima</th>
                <th scope="col">Titolo</th>
                <th scope="col">Città</th>
                <th scope="col">Provincia</th>
                <th scope="col">Attivo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($apartments as $apartment)
                <tr>
                    <th scope="row">{{$apartment->id}}</th>
                    <td>
                        @if (strpos($apartment->main_img, 'https') !== false)
                        <img style="height: 100px;" src="{{ $apartment->main_img }}" alt="Anteprima img appartamento">
                        @else
                        <img style="height: 100px;" src="{{ asset('storage/'.$apartment->main_img) }}" alt="Anteprima img appartamento">
                        @endif
                    </td>
                    <td>{{$apartment->title}}</td>
                    <td>{{$apartment->city}}</td>
                    <td>{{$apartment->province}}</td>
                    <td>{{$apartment->active}}</td>
                    <td><a class="btn btn-info" href="{{route('apartment.show', $apartment->slug)}}">Visualizza</a></td>
                    <td><a href="{{route('apartment.edit', $apartment->slug)}}"><button type="button" class="btn btn-warning">Modifica</button></a></td>
                    <td>
                        <form method="post" action="{{route('apartment.destroy', $apartment)}}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
