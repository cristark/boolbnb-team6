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
           <div id ="map" style="height:550px;width:550px;"></div> 
                
                {{-- questo solo per passaggio di valori --}}
                <div id="dom-ap" style="display: none;">
                    <?php
                        echo $apartments; 
                    ?>
                </div>
                <script>

                    var apartments = document.getElementById("dom-ap").textContent;
                
                     // centro della mappa
                    var HQ = { lat: 45.46428976336229, lng: 9.191959328863394 }

                    // visualizzazione della mappa
                    var map = tt.map({
                        key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                        container: 'map',
                        center: HQ,
                        zoom: 10
                    });

                    // trasforma stringa a array json
                    var apartments = JSON.parse(apartments);
                    console.log(apartments);

                    // crea maker per ogni posizioni (latitudine e longitudine)
                    apartments.forEach( apartment => {
                        
                        // crea casella di testo di info con testo personalizzabile
                        var popup = new tt.Popup({ anchor: 'top' }).setText(apartment.title);

                        var position = { lat: apartment.latitude, lng: apartment.longitude }

                        console.log(position);
                        
                        // aggiungi maker sulla mappa
                        var marker = new tt.Marker().setLngLat(position).addTo(map);
                        
                        // testo descritivo del maker
                        marker.setPopup(popup).togglePopup();

                    });


                </script>
        </div>

    </div>
@endsection