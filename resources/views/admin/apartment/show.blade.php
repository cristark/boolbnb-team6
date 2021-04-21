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
                
                <div id ="map" style="height:90vh;"></div> 
                <script>  

            // centro della mappa
            var HQ = { lat: 45.46428976336229, lng: 9.191959328863394 }

            // visualizzazione della mappa
            var map = tt.map({
                key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                container: 'map',
                center: HQ,
                zoom: 13
            });

            // maker singolo tramite  posizione (latitudine e longitudine)
            // var marker = new tt.Marker().setLngLat(HQ).addTo(map);

            // lista array di posizioni (latitudine e longitudine)
            var posizioni = [
                { lat: 45.47063201520255, lng: 9.179320179007835 },
                { lat: 45.45272791968916, lng: 9.180218194669429 },
                { lat: 45.466448360832445, lng:  9.197505636685777 },
                { lat: 45.460235852020745, lng:  9.22371182266457 }
            ];     
        
            count = 1;
        
            // crea maker per ogni posizioni (latitudine e longitudine)
            posizioni.forEach( posizione => {
                
                // crea casella di testo di info con testo personalizzabile
                var popup = new tt.Popup({ anchor: 'top' }).setText('appartamento '+count+' test');
                
                // aggiungi maker sulla mappa
                var marker = new tt.Marker().setLngLat(posizione).addTo(map);
                
                // testo descritivo del maker
                marker.setPopup(popup).togglePopup();

                count++;
            });



        </script>
                 
                <p class="card-text">Prezzo: {{$apartment->price}} €/notte</p>
            </div>

            <a href="{{ route( 'guest.message.create', $apartment ) }}">Richiedi Info</a>

            <div class="action-1">
                <a href="{{ route( 'apartment.index' ) }}"><button type="button" class="btn btn-primary">Torna Indietro</button></a>
            </div>
            
            <div class="action-2 d-flex">
                <a class="mr-2" href="{{route('apartment.edit', $apartment->slug)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                <a class="mr-2" href="{{route('sponsor.index', $apartment->slug)}}"><button type="button" class="btn btn-warning">Sponsorizza</button></a>

                <form method="post" action="{{route('apartment.destroy', $apartment)}}">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
@endsection


