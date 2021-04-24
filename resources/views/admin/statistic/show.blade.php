@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
@php
    use Carbon\Carbon;
    $now = Carbon::now()->month;
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

        <h1>Statistiche di {{ $apartment->title }}</h1>
        <select id="month">
                <option class="default" value="" hidden selected="">{{$months[$now]}}</option>
                    @for ($i = 1; $i <= $now; $i++)
                    @foreach ($months as $key => $month)
                        @if ($key == $i)
                        <option value="{{$key}}">{{$month}}</option>
                        @endif
                    @endforeach
                    @endfor
            </select>
            <div style="width: 500px; height: 400px; margin-bottom: 500px;">
                <canvas id="myChart"   width="200" height="200"></canvas>
            </div>


        
        
            
        
        
        
        
        
        

        
        
        
        {{-- <script src="{{asset("js/app.js")}}"></script> --}}
@endsection
            

