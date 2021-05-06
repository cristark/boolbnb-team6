@extends('layouts.app')

@section('title', 'BoolBnB | Favorites apartment')

@section('content')
<div class="main_container">

    {{-- SEZIONE BREADCUMB IN ALTO --}}
    <div class="breadcumb">
        <h3 class="not_selected">Account</h3>
        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 18">
            <path id="Unione_1" data-name="Unione 1" d="M1997,8l-7-8,7,8-7,8Z" transform="translate(-1989 1)" fill="#222" stroke="#222" stroke-linecap="square" stroke-linejoin="round" stroke-width="2"/>
        </svg>
        <h3>I appartamenti preferiti</h3>
    </div>

    {{-- Notifica eliminazione post esistente --}}
    @if (session('status'))
        <div class="" style="background-color: #baffba;
    padding: 10px; border-radius: 10px; margin-top: 10px;" >{{ session('status') }}</div>
    @endif

    {{-- SEZIONE PRINCIPALE --}}
    <div class="main-index">

        {{-- ELENCO APPARTAMENTI --}}
         <section class="apartment-right">
            @foreach ($apartments as $apartment)
                <div class="box-apartment">
                    <section class="box-left">
                        {{-- IMMAGINE APPARTAMENTO --}}
                        <div class="box-ap-img" style="position: relative;">

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
                            <div class="price_box">
                                <p>Prezzo di una notte in appartamento</p>
                                <h3>{{intval($apartment->price)}} €</h3>
                            </div>
                        </div>
                    </section>

                    <section class="box-right">
                        {{-- OPZIONI APPARTAMENTO --}}
                        <a href="{{route('guest.apartment.show', $apartment->slug)}}"><button>Visualizza</button></a>
                        <form method="post" action="{{route('apartment.destroy', $apartment)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </section>
                </div>
            @endforeach
        </section>
        {{-- ELENCO APPARTAMENTI --}}
    </div>

    
</div>
@endsection
