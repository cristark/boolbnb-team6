@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Appartamenti Trovati</h1>

        @foreach ($apartments as $apartment)    
            <div class="card mb-5">
                <h5 class="card-header">{{$apartment->title}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$apartment->description}}</p>
                    <h5 class="card-title">{{$apartment->mq}}</h5>
                    <p></p>
                    <a  href="{{route('guest.apartment.show', $apartment->slug)}}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection