@extends('layouts.app')

@section('title', 'BoolBnB | Appartamenti')

@section('content')
<div class="container">
        <h1>Elenco Appartamenti</h1>

        @foreach ($apartments as $apartment)    
            <div class="card mb-5">
                <h5 class="card-header">{{$apartment->title}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$apartment->description}}</p>
                    <h5 class="card-title">{{$apartment->mq}}</h5>
                    <p></p>
                    <a href="" class="btn btn-primary">Continua</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection