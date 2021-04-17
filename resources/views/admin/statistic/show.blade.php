@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
@php
    
    $months = [
        1 => 'Gennaio',
        2 => 'Febbraio',
        3 => 'Marzo',
        4 => 'Aprile',
        5 => 'Maggio',
        6 => 'Giugno',
        7 => 'Luglio',
        8 => 'Agosto',
        9 => 'Settembre',
        10 => 'Ottobre',
        11 => 'Novembre',
        12 => 'Dicembre'
    ];
@endphp
    ciaociao
                {{-- <h1>{{$my_visitor->view_counter}}</h1> --}}
    {{-- <div>
        
        @php echo json_encode($visitors); @endphp
    </div> --}}
    <div>
        <h2>Statistiche Mese:</h2>
        {{$apartment->title}}
        @foreach ($numero_visite as $visita)
        {{$months[$visita->numero_mese]}}
        {{$visita->totale}}
        {{$visita->numero_mese}}
            
        @endforeach
        
    </div>


@endsection
