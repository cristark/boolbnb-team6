@extends('layouts.app')

@section('title', 'BoolBnB | Appartamenti')



@section('content')





    {{-- Test Ricerca inizio --}}
    <div class="container">
        <h3>inizio test ricerca</h3>
        <form type="get" action="{{ url('/search') }}">
            <input name="query" type="search" placeholder="Search">
            <button type="submit">Search</button>
        </form>
        <h3>fine test ricerca</h3>
    </div>
    {{-- Test Ricerca fine --}}


    {{-- test 2 --}}
    <h2>Cerca la tua cittá</h2>
    <input v-model="citta" @keyup.enter="tomtom" placeholder="edit me">
    <p>Message is: @{{citta}}</p>
    <h1>@{{prova}}</h1>

        





    <div class="container">
            <h1>Elenco Appartamenti</h1>
            {{-- <h2>@{{messaggio}}</h2> --}}
    
            @foreach ($apartments as $apartment)    
                <div class="card mb-5">
                    <h5 class="card-header">{{$apartment->title}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{$apartment->description}}</p>
                        <h5 class="card-title">{{$apartment->mq}}</h5>
                        <p></p>
                        <a href="{{route('guest.apartment.show', $apartment->slug)}}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
    </div>
@endsection