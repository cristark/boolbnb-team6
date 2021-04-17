@extends('layouts.app')

@section('title', 'BoolBnB | Invio messaggio')

@section('content')

<div class="container">
    <form action="{{ route('guest.message.sent') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <input name="status" type="hidden" value="1">
            <input name="apartment_id" type="hidden" value="{{$apartment_id->id}}">
        </div>

        <div class="form-group">
            <label for="nomeUtente">NOME E COGNOME</label>
            <input name="sender_name" type="text" class="form-control" id="nomeUtente">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">E MAIL</label>
            <input name="sender_mail" type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="messaggio">RICHIESTA</label>
            <textarea name="msg_txt" class="form-control" id="messaggio" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection