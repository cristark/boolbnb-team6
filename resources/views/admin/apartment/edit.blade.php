@extends('layouts.app')

@section('title', 'BoolBnB | Modifica l\'appartamento')

@section('content')
    <div class="container">

        {{-- Controllo errori --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form inserimento dati --}}
        <form method="post" action="{{route('apartment.update', $apartment->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Titolo Appartamento --}}
            <div class="form-group">
                <label for="InputTitle">Titolo</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Inserisci il titolo" name="title" value="{{$apartment->title}}">
            </div>

            {{-- Descrizione appartamento --}}
            <div class="form-group">
                <label for="InputDescription">Testo</label>
                <textarea class="form-control" id="InputDescription" placeholder="Inserisci la descrizione dell'appartamento" cols="30" rows="10" name="content">{{old('content')}}</textarea>
            </div>

            {{-- Riga singola con Città - Regione - Stato --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputCity">Città</label>
                    <input type="text" class="form-control" id="InputCity" placeholder="Inserisci la Città" name="city" value="{{old('city')}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="InputProvince">Provincia</label>
                    <input type="text" class="form-control" id="InputProvince" placeholder="Inserisci la Provincia" name="province" value="{{old('province')}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="InputStato">Stato</label>
                    <input type="text" class="form-control" id="InputStato" placeholder="Inserisci lo Stato" name="state" value="{{old('state')}}">
                </div>
            </div>

            {{-- Riga singola con Num Stanze - Num Letti - Num Bagni - MQ --}}
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="NumRooms">Stanze</label>
                    <input type="number" class="form-control" id="NumRooms" name="num_rooms" value="{{old('num_rooms')}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBeds">Letti</label>
                    <input type="number" class="form-control" id="NumBeds" name="num_beds" value="{{old('num_beds')}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBaths">Bagni</label>
                    <input type="number" class="form-control" id="NumBaths" name="num_baths" value="{{old('num_baths')}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="InputMq">Mq</label>
                    <input type="number" class="form-control" id="InputMq" name="mq" value="{{old('mq')}}">
                </div>
            </div>

            {{-- Sezione caricamento immagine appartamento --}}
            <div class="form-group">
                <label for="InputFile">Carica un'immagine</label>
                <input type="file" class="form-control-file" id="InputFile" name="main_img ">
            </div>

            {{-- Riga singola con Latitudine - Longitudine --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputLatitude">Latitudine</label>
                    <input type="text" class="form-control" id="InputLatitude" placeholder="Inserisci la Latitudine" name="latitude" value="{{old('latitude')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="InputLongitude">Longitudine</label>
                    <input type="text" class="form-control" id="InputLongitude" placeholder="Inserisci la Longitudine" name="longitude" value="{{old('longitude')}}">
                </div>
            </div>

            {{-- Prezzo Appartamento --}}
            <div class="form-group">
                <label for="InputPrice">Prezzo per notte</label>
                <input type="number" class="form-control" id="InputPrice" placeholder="Inserisci il Prezzo" name="price" value="{{old('price')}}">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
