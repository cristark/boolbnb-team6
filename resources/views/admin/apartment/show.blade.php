@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
    <div class="container">

        <div class="card mb-3">
            @if(strpos($apartment->main_img, 'https') !== false)
                <img class="card-img-top" src="{{ $apartment->main_img }}" alt="{{$apartment->title}}">
            @else
                <img class="card-img-top" src="{{ asset('storage/'.$apartment->main_img) }}" alt="{{$apartment->title}}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$apartment->title}}</h5>
                <p class="card-text">{{$apartment->description}}</p>
                <p class="card-text">Stanze : {{$apartment->num_rooms}}</p>
                <p class="card-text">Letti : {{$apartment->num_beds}}</p>
                <p class="card-text">Bagni : {{$apartment->num_bath}}</p>
                <p class="card-text">{{$apartment->mq}} mq</p>
                <p class="card-text">{{$apartment->city}}, {{$apartment->province}}, {{$apartment->state}}</p>
                <p class="card-text">Latitudine: {{$apartment->latitude}}</p>
                <p class="card-text">Longitudine: {{$apartment->longitude}}</p>
                
                <div id ="map" style="height:90vh;">
                
                {{-- questo solo per passaggio di valori --}}
                <div id="dom-lat" style="display: none;">
                    <?php
                        echo $lat = $apartment->latitude; 
                    ?>
                </div>
                <div id="dom-lon" style="display: none;">
                    <?php
                        echo $lon = $apartment->longitude; 
                    ?>
                </div>
                
                </div> 
                <p class="card-text">Prezzo: {{$apartment->price}} €/notte</p>
            </div>

            <a href="{{ route( 'guest.message.create', $apartment ) }}">Richiedi Info</a>

            <div class="action-1">
                <a href="{{ route( 'apartment.index' ) }}"><button type="button" class="btn btn-primary">Torna Indietro</button></a>
            </div>
            
            <div class="action-2 d-flex">
                <a class="mr-2" href="{{route('apartment.edit', $apartment->slug)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    
                @if ($sponsor)
                
                <a class="mr-2" href="{{route('sponsor.index', $apartment->slug)}}"><button type="button" class="btn btn-warning">Sponsorizza</button></a>
                
                @else
                    <h1>Il tuo appartmento é sponsorizzato</h1>
                @endif

                <form method="post" action="{{route('apartment.destroy', $apartment)}}">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
                
@endsection


