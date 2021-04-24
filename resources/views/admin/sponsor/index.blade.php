@extends('layouts.app')

@section('title', 'BoolBnB | Scelta sponsorizzazione')

@section('content')
    <div class="container">
        <div style="width: 100%;">
            <h3>Stai sponsorizzando questo appartamento:</h3>
            @if(strpos($apartment->main_img, 'https') !== false)
                <img class="card-img-top" src="{{ $apartment->main_img }}" alt="{{$apartment->title}}" style="height: 100px;">
            @else
                <img class="card-img-top" src="{{ asset('storage/'.$apartment->main_img) }}" alt="{{$apartment->title}}" style="height: 100px;">
            @endif
            <h4>{{$apartment->title}}</h4>
        </div>
        <div class="container-sponsor" style="display: flex; flex-direction: row; justify-content: space-around;">
            @foreach($sponsors as $sponsor)
                <div class="box-sponsor">
                    <h2>Durata sponsorizzazione: {{$sponsor->duration}} ore</h2>
                    <h2>Costo: {{$sponsor->price}} €</h2>
                    <h4>{{$sponsor->description}}</h4>
                    <a href="{{route('richiesta-pagamento', $apartment)}}" style="background-color: lightblue;">SPONSORIZZA</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection