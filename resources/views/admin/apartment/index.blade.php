@extends('layouts.app')

@section('title', 'BoolBnB | Dashboard Utente')

@section('content')
<div class="main_container">
    <span><h2>Account > </h2> <h1>I miei appartamenti</h1></span>
    {{-- Notifica eliminazione post esistente --}}
    @if (session('status'))
	    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="main-index">
        {{-- PROFILO UTENTE --}}
        <section class="user-left">
            <h2>ciao,</h2>
            <h2>{{ $user->name ." ". $user->lastname }}</h2>
            <p>
                <span>Data di nascita:</span>
                <span>{{ $user->birth_date }}</span>
            </p>
            <p>
                <span>Mail:</span>
                <span>{{ $user->email }}</span>
            </p>
            {{-- Pulsante creazione Nuovo Appartamento --}}
            <a href="{{route('apartment.create')}}">Aggiungi un nuovo appartamento</a>
        </section>
        {{-- PROFILO UTENTE --}}

        {{-- ELENCO APPARTAMENTI --}}
        <section class="apartment-right">
            @foreach ($apartments as $apartment)
                <div class="box-apartment">
                    <section class="box-left">
                        {{-- IMMAGINE APPARTAMENTO --}}
                        <div class="box-ap-img">
                            @if (strpos($apartment->main_img, 'https') !== false)
                            <img src="{{ $apartment->main_img }}" alt="Anteprima img appartamento">
                            @else
                            <img src="{{ asset('storage/'.$apartment->main_img) }}" alt="Anteprima img appartamento">
                            @endif
                        </div>
                        {{-- INFO APPARTAMENTO --}}
                        <div class="box-ap-info">
                            <h4>{{$apartment->title}}</h4>
                            <p>Stanze: {{$apartment->num_rooms}} | Letti: {{$apartment->num_beds}} | Bagni: {{$apartment->num_baths}}</p>
                            <p>Prezzo una notte: <strong>{{$apartment->price}}</strong>€</p>
                        </div>
                    </section>

                    <section class="box-right">
                        {{-- STATISTICHE E MESSAGGI APPARTAMENTO --}}
                        <div class="box-ap-stat-msg">
                            <a class="btn btn-info" href="{{route('statistic.show', $apartment->slug)}}"><button>Statistiche</button></a>
                            <a href="{{route('message.index')}}"><button>Messaggi</button></a>
                        </div>
                        {{-- OPZIONI APPARTAMENTO --}}
                        <div class="box-ap-button">
                            <a class="btn btn-info" href="{{route('apartment.show', $apartment->slug)}}"><button>Visualizza</button></a>
                            <a href="{{route('apartment.edit', $apartment->slug)}}"><button>Modifica</button></a>
                            <form method="post" action="{{route('apartment.destroy', $apartment)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </section>
                </div>
            @endforeach
        </section>
        {{-- ELENCO APPARTAMENTI --}}
    </div>

    
</div>
@endsection
