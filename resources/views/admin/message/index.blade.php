@extends('layouts.app')

@section('title', 'BoolBnB | Messaggi Utente')

@section('content')
<div class="container">
    {{-- Tabella Post DataBase --}}
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Anteprima</th>
                <th scope="col">Appartamento</th>
                <th scope="col">Nome</th>
                <th scope="col">Mail</th>
                <th scope="col"></th>
            </tr>
        </thead>
        
        
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>
                        @if (strpos($apartments[$message->apartment_id]->main_img, 'https') !== false)
                        <img style="height: 100px;" src="{{ $apartments[$message->apartment_id]->main_img }}" alt="Anteprima img appartamento">
                        @else
                        <img style="height: 100px;" src="{{ asset('storage/'.$apartments[$message->apartment_id]->main_img) }}" alt="Anteprima img appartamento">
                        @endif
                    </td>
                    <td>{{$apartments[$message->apartment_id]->title}}</td>
                    <td>{{ $message->sender_name }}</td>
                    <td>{{ $message->sender_mail }}</td>
                    <td><a class="btn btn-info" href="{{route('message.show', $message)}}">Visualizza</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
