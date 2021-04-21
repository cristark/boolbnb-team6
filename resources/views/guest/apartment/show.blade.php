@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
    <div class="main_container show_user_apt">

        <div class="back_btn">
            {{-- BACK --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="26.845" height="18.792" viewBox="0 0 26.845 18.792">
                <path id="Tracciato_29" data-name="Tracciato 29" d="M11.4,23.792,13.288,21.9,7.141,15.738h21.7V13.054H7.141L13.3,6.893,11.4,5,2,14.4Z" transform="translate(-2 -5)" fill="#222"/>
            </svg>
            <a href="{{ route( 'guest.apartment.index' ) }}">Torna Indietro</a>
        </div>

        {{-- SEZIONE CON FOTO APPARTAMENTO E INFO PRINCIPALI --}}
        <section class="main_info">

            {{-- SEZIONE FOTO APPARTAMENTO --}}
            <div class="img_box">
                @if(strpos($apartment->main_img, 'https') !== false)
                <img src="{{ $apartment->main_img }}" alt="{{$apartment->title}}">
                @else
                    <img src="{{ asset('storage/'.$apartment->main_img) }}" alt="{{$apartment->title}}">
                @endif
            </div>

            {{-- SEZIONE INFO PRINCIPALI --}}
            <div class="info_box">
                <p class="views">32 visualizzazioni</p>
                <h3>{{$apartment->title}}</h3>
                <p class="rooms">{{$apartment->num_rooms}} stanze - {{$apartment->num_beds}} letti - {{$apartment->num_baths}} bagni</p>

                <div class="hosts_box">
                    <div class="box nights">
                        <h5>Notti</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>2</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="box adults">
                        <h5>Adulti</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>2</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="box childrens">
                        <h5>Bambini</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>0</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="price_box">
                    <p>{{$apartment->price}} € x 2 notti</p>
                    <p>240 €</p>
                </div>
                <div class="price_box">
                    <p>Pulizie</p>
                    <p>60 €</p>
                </div>
                <div class="price_box">
                    <p>Tasse di soggiorno</p>
                    <p>100 €</p>
                </div>
                <div class="tot_price_box">
                    <p>Totale</p>
                    <h3>400 €</h3>
                </div>

                <div class="air_btn">
                    <a href="{{ route( 'guest.message.create', $apartment_selected ) }}">Controlla disponibilità</a>
                </div>
            </div>
        </section>

        <section class="main_title">
            <h2>{{$apartment->title}}</h2>
            <p class="rooms">{{$apartment->mq}} mq - {{$apartment->num_rooms}} stanze - {{$apartment->num_beds}} letti - {{$apartment->num_baths}} bagni</p>
        </section>

        <section class="details">
            <div class="detail_box">
                <h3>Informazioni su questo spazio</h3>
                <p>{{$apartment->description}}</p>
            </div>
            <div class="detail_box services">
                <h3>Servizi</h3>
                <p style="color: red; font-weight:bolder;">SAUNA - RIVEDERE QUESTA PARTE COME COLLEGARE SERVIZI!!</p>
            </div>
            <div class="detail_box position">
                <h3>Posizione</h3>
                <div class="map_box"></div>
                <p>{{$apartment->city}}, {{$apartment->province}}, {{$apartment->state}}</p>
            </div>
        </section>

        <div class="card mb-3">
            
        <div class="card-body">
            <p class="card-text">Latitudine: {{$apartment->latitude}}</p>
            <p class="card-text">Longitudine: {{$apartment->longitude}}</p>
            </div>
        </div>
    </div>
@endsection
