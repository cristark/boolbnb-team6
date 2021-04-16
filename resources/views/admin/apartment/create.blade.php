@extends('layouts.app')

@section('title', 'BoolBnB | Crea un nuovo appartamento')

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
        <form method="post" action="{{route('apartment.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')

            {{-- Titolo Appartamento --}}
            <div class="form-group">
                <label for="InputTitle">Titolo</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Inserisci il titolo" name="title" value="{{old('title')}}">
            </div>

            {{-- Descrizione appartamento --}}
            <div class="form-group">
                <label for="InputDescription">Descrizione</label>
                <textarea class="form-control" id="InputDescription" placeholder="Inserisci la descrizione dell'appartamento" cols="30" rows="10" name="description">{{old('description')}}</textarea>
            </div>

            {{-- Riga singola con Città - Regione - Stato --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputCity">Città</label>
                    <input type="text" class="form-control" id="InputCity" placeholder="Inserisci la Città" name="city" value="{{old('city')}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="InputProvince">Provincia</label>
                    <input type="text" class="form-control" id="InputProvince" placeholder="Inserisci la Provincia" name="province" >
                </div>

                <div class="form-group col-md-2">
                    <label for="InputStato">Stato</label>
                    <input type="text" class="form-control" id="InputStato" placeholder="Inserisci lo Stato" name="state">
                </div>
            </div>

            {{-- Riga singola con Num Stanze - Num Letti - Num Bagni - MQ --}}
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="NumRooms">Stanze</label>
                    <input type="number" class="form-control" id="NumRooms" name="num_rooms" >
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBeds">Letti</label>
                    <input type="number" class="form-control" id="NumBeds" name="num_beds" >
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBaths">Bagni</label>
                    <input type="number" class="form-control" id="NumBaths" name="num_baths" >
                </div>

                <div class="form-group col-md-3">
                    <label for="InputMq">Mq</label>
                    <input type="number" class="form-control" id="InputMq" name="mq" >
                </div>
            </div>

            {{-- Immagine principale --}}
           <label for="InputFile">Immagine principale</label>

            <div class="form-group mt-3">
                <input type="file" class="form-control-file" id="InputFile" name="main_img">
            </div>

            {{-- Foto galleria --}}
            <p>Seleziona tutte le immagini per la galleria delle foto</p>

            <div class="form-group mt-3 p-2">
                <input type="file" class="form-control-file" id="InputFile" name="images[]" multiple>
            </div>

            {{-- Riga singola con Latitudine - Longitudine --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputLatitude">Latitudine</label>
                    <input type="text" class="form-control" id="InputLatitude" placeholder="Inserisci la Latitudine" name="latitude" >
                </div>

                <div class="form-group col-md-6">
                    <label for="InputLongitude">Longitudine</label>
                    <input type="text" class="form-control" id="InputLongitude" placeholder="Inserisci la Longitudine" name="longitude" >
                </div>
            </div>

            {{-- Prezzo Appartamento --}}
            <div class="form-group">
                <label for="InputPrice">Prezzo per notte</label>
                <input type="number" class="form-control" id="InputPrice" placeholder="Inserisci il Prezzo" name="price">
            </div>

            {{-- Visibilita --}}
            <div class="form-group">
                <label for="InputActive">Vuoi rendere visibile il tuo l'appartamento</label>    
                <select name="active" class="custom-select mb-2 mr-sm-2 mb-sm-0" >
                    <option value="0" {{old('active') == '0' ? ' selected' : '' }}>Non visibile </option>
                    <option value="1" {{old('active') == '1' ? ' selected' : '' }}>Visibile</option>
                </select>
            </div>

            {{-- servizi --}}            
            <div class="form-group">
                <label for="InputActive">Servizi disponibili</label>    
                
                @foreach ($services as $service)
                    <div class="form-check">

                        @php
                            // dd(old('services'));
                        @endphp
                        <input value="{{ $service->id }}" 
                            @if (old('services') != null)
                                {{old('services')->contains($service->id) ? 'checked' : ''}}
                            @endif
                            class="form-check-input" type="checkbox" id="services" 
                            name="services[]">
                        <label class="form-check-label" for="services">
                            {{$service->name}}
                        </label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection


