@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio messaggi utente')

@section('content')
    <div class="container">

        <div class="card mb-3">
            @if(strpos($apartment[$message->apartment_id]->main_img, 'https') !== false)
                <img class="card-img-top" src="{{ $apartment[$message->apartment_id]->main_img }}" alt="{{$apartment[$message->apartment_id]->title}}">
            @else
                <img class="card-img-top" src="{{ asset('storage/'.$apartment[$message->apartment_id]->main_img) }}" alt="{{$apartment[$message->apartment_id]->title}}">
            @endif
            <div class="card-body">
                <h2>Appartamento: {{ $apartment[$message->apartment_id]->title }}</h2>
                <h2>Nome: {{ $message->sender_name }}</h2>
                <h2>Mail: {{ $message->sender_mail }}</h2>
                <h2>Richiesta informazioni: {{ $message->msg_txt }}</h2>
                <!-- <h2>{{ $message->status }}</h2> -->
            </div>

            <div class="action-1 d-flex">
                <a href="{{ route( 'message.index' ) }}"><button type="button" class="btn btn-primary">Torna Indietro</button></a>
            </div>
            
            <div class="action-2 d-flex">
                <form method="post" action="{{route('message.destroy', $message)}}">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
@endsection
