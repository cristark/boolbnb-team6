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
                <p class="card-text">Prezzo: {{$apartment->price}} €/notte</p>
                </div>
            </div>

            <div class="actions d-flex justify-content-between">

            <div class="action-1">
                <a href="{{ route( 'guest.apartment.index' ) }}"><button type="button" class="btn btn-primary">Torna Indietro</button></a>
                <a href="{{ route( 'guest.message.create', $apartment ) }}">Richiedi Info</a>
            </div>
        </div>
    </div>
@endsection
