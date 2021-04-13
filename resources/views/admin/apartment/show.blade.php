@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
    <div class="container">

        <div class="card mb-3">
            <img class="card-img-top" src="" alt="Immagine appartamento">
            <div class="card-body">
              <h5 class="card-title">Villa del Vento Ischia</h5>
              <p class="card-text">QUI VA LA DESCRIZIONE DELL'APPARTAMENTO - Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur reiciendis eligendi modi, ut qui odio eum illo accusamus unde minima ex et placeat molestiae maxime quibusdam sed tempore ad corrupti?</p>
              <p class="card-text">Stanze : 7</p>
              <p class="card-text">Letti : 2</p>
              <p class="card-text">Bagni : 4</p>
              <p class="card-text">247 mq</p>
              <p class="card-text">Ischia, NA, Italia</p>
              <p class="card-text">Latitudine: 83.4951960</p>
              <p class="card-text">Longitudine: 120.9704860</p>
              <p class="card-text">Prezzo: 2068 €/notte</p>
            </div>
          </div>

          <div class="actions d-flex justify-content-between">

            <div class="action-1">
                <a href=""><button type="button" class="btn btn-primary">Torna Indietro</button></a>
            </div>
            
            <div class="action-2 d-flex">
                <a class="mr-2" href=""><button type="button" class="btn btn-warning">Modifica</button></a>
                <form method="post" action="">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
@endsection
