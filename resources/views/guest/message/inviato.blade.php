@extends('layouts.app')

@section('title', 'BoolBnB | Messaggio inviato')

@section('content')

<div class="container">
    @if(session('status') == 'ok')
        <h2>messaggio inviato correttamente</h2>
        <h3 class="card-text">{{$message->sender_mail}}</h3>
        <h3 class="card-text">{{$message->msg_txt}}</h3>
    @endif
</div>

@endsection