@extends('layouts.app')

@section('title', 'BoolBnB | Dashboard Utente')

@section('content')
<div class="container">

    {{-- Pulsante creazione Nuovo Post --}}
    <a href=""><button type="button" class="btn btn-primary mb-3">Aggiungi un nuovo appartamento</button></a>

    {{-- Notifica eliminazione post esistente --}}
    @if (session('status'))
	    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    {{-- Tabella Post DataBase --}}
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Anteprima</th>
                <th scope="col">Titolo</th>
                <th scope="col">Città</th>
                <th scope="col">Provincia</th>
                <th scope="col">Attivo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="" alt="Anteprima img appartamento"></td>
                <td>Villa del Vento Ischia</td>
                <td>Ischia</td>
                <td>NA</td>
                <td>Annuncio attivo</td>
                <td><a href=""><button type="button" class="btn btn-info">Visualizza</button></a></td>
                <td><a href=""><button type="button" class="btn btn-warning">Modifica</button></a></td>
                <td>
                    <form method="post" action="">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
