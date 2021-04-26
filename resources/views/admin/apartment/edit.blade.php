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
        <form method="post" action="{{route('apartment.update', $apartment)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Titolo Appartamento --}}
            <div class="form-group">
                <label for="InputTitle">Titolo</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Inserisci il titolo" name="title" value="{{$apartment->title}}">
            </div>

            {{-- Descrizione appartamento --}}
            <div class="form-group">
                <label for="InputDescription">Descrizione</label>
                <textarea class="form-control" id="InputDescription" placeholder="Inserisci la descrizione dell'appartamento" cols="30" rows="10" name="content">{{$apartment->description}}</textarea>
            </div>

            {{-- Riga singola con Città - Regione - Stato --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="InputCity">Città</label>
                    <input type="text" class="form-control" id="InputCity" placeholder="Inserisci la Città" name="city" value="{{$apartment->city}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="InputProvince">Provincia</label>
                    <input type="text" class="form-control" id="InputProvince" placeholder="Inserisci la Provincia" name="province" value="{{$apartment->province}}">
                </div>

                <div class="form-group col-md-2">
                    <label for="InputStato">Stato</label>
                    <input type="text" class="form-control" id="InputStato" placeholder="Inserisci lo Stato" name="state" value="{{$apartment->state}}">
                </div>
            </div>

            {{-- Riga singola con Num Stanze - Num Letti - Num Bagni - MQ --}}
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="NumRooms">Stanze</label>
                    <input type="number" class="form-control" id="NumRooms" name="num_rooms" value="{{$apartment->num_rooms}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBeds">Letti</label>
                    <input type="number" class="form-control" id="NumBeds" name="num_beds" value="{{$apartment->num_beds}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="NumBaths">Bagni</label>
                    <input type="number" class="form-control" id="NumBaths" name="num_baths" value="{{$apartment->num_baths}}">
                </div>

                <div class="form-group col-md-3">
                    <label for="InputMq">Mq</label>
                    <input type="number" class="form-control" id="InputMq" name="mq" value="{{$apartment->mq}}">
                </div>
            </div>

            {{-- Immagine principale --}}
            @if ($apartment->main_img)
                <p>Immagine principale:</p>
                    @if(strpos($apartment->main_img, 'https') !== false)
                    <img class="card-img-top" style="width: 150px;" src="{{ $apartment->main_img }}" alt="{{$apartment->title}}">
                    @else
                        <img class="card-img-top" style="width: 150px;" src="{{ asset('storage/'.$apartment->main_img) }}" alt="{{$apartment->title}}">
                    @endif
                <label for="InputFile">Sostituisci l'immagine</label>    
            @else
                <p class="alert alert-dark">Immagine non inserita</p>
                <label for="InputFile">Carica un'immagine</label>
            @endif
            <div class="form-group mt-3">
                <input type="file" class="form-control-file" id="InputFile" name="main_img">
            </div>

            {{-- Foto galleria --}}
            <p>Seleziona tutte le immagini per la galleria delle foto</p>
            <label>Immagini presenti della galleria:</label>
            <div class="d-flex flex-wrap ">
                @if (isset($images))
                    @foreach ($images as $image)
                        @if(strpos($apartment->main_img, 'https') !== false)
                            <img class="card-img-top" style="width: 150px;" src="{{ $image->src }}" alt="{{$image->img_description}}">
                        @else
                            <div class="card col-2" >
                                <img class="card-img" src="{{ asset('storage/'.$image->src) }}" alt="{{$image->img_description}}">
                            </div>
                        @endif
                        {{-- @php dd($image->src) @endphp  --}}
                    @endforeach
                @else
                    <p>Non sono presenti foto della galleria per qiesto appartamento</p>
                @endif
            </div>
            
            <p class="mt-3">Se scegli di inserire almeno una foto, tutte quelle presenti precedemente verrano eliminate</p>
            <div class="form-group mt-3 p-2">
                <input type="file" class="form-control-file" id="InputFile" name="images[]" multiple>
            </div>

            {{-- Riga singola con Latitudine - Longitudine --}}
            <div class="form-row">
                <div >
                    <p>Per favore reinserire l'indirizzo manualmente ancora (obbligatorio).</p>
                    <label for="InputLatitude">Esempio modello: via milano 3, 20020 corsico MI </label>
                    <input type="text" id="InputIndirizzo" placeholder="Inserisici nome della via" name="andress" v-model='indirizzo' v-on:input="getPosition" value="{{old('andress')}}">
                </div>

                <div>
                    <label for="InputLatitude">Latitudine</label>
                    <input type="text" id="InputLatitude" placeholder="Inserisci la Latitude" name="latitude" v-model='latitude' style="">
                </div>

                <div>
                    <label for="InputLongitude">Longitudine</label>
                    <input type="text" id="InputLongitude" placeholder="Inserisci la Longitudine" name="longitude" v-model='longitude' style="">
                </div>

            {{-- Prezzo Appartamento --}}
            <div class="form-group">
                <label for="InputPrice">Prezzo per notte</label>
                <input type="number" class="form-control" id="InputPrice" placeholder="Inserisci il Prezzo" name="price" value="{{$apartment->price}}">
            </div>

            {{-- Visibilita --}}
            <div class="form-group">
                <label for="InputActive">Vuoi rendere visibile il tuo l'appartamento</label>    
                <select name="active" class="custom-select mb-2 mr-sm-2 mb-sm-0" >
                    <option value="0" {{$apartment->active == '0' ? ' selected' : '' }}>Non visibile </option>
                    <option value="1" {{$apartment->active == '1' ? ' selected' : '' }}>Visibile</option>
                </select>
            </div>

            {{-- servizi --}}            
            <div class="form-group">
                <label for="InputActive">Servizi disponibili</label>    
                
                @foreach ($services as $service)
                    <div class="form-check">
                        <input value="{{ $service->id }}" {{$apartment->services->contains($service->id) ? 'checked' : ''}} class="form-check-input" type="checkbox" id="services" name="services[]">
                        <label class="form-check-label" for="services">
                            {{$service->name}}
                        </label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Salva le modifiche</button>
            <a class="d-flex justify-content-end" href="{{route('apartment.index')}}"><button  class="btn btn-warning">Annulla</button></a>
        </form>
    </div>
@endsection
