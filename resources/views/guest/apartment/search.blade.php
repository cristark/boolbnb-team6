@extends('layouts.app')

@section('title', 'BoolBnB | Appartamenti trovati')

@section('content')
    <div class="main_container">

        <div class="back_btn">
            {{-- BACK --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="26.845" height="18.792" viewBox="0 0 26.845 18.792">
                <path id="Tracciato_29" data-name="Tracciato 29" d="M11.4,23.792,13.288,21.9,7.141,15.738h21.7V13.054H7.141L13.3,6.893,11.4,5,2,14.4Z" transform="translate(-2 -5)" fill="#222"/>
            </svg>
            <a href="{{ route( 'guest.apartment.index' ) }}">Torna Indietro</a>
        </div>

        <div class="main_search">
            
            {{-- BOX RISULTATI RICERCA APPARTAMENTI --}}
            <div class="search_box">
        
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
    
            {{-- MAPPA --}}
            <div class="map_box">
    
            </div>
        </div>

    </div>
@endsection