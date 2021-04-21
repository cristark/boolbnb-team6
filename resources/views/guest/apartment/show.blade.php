@extends('layouts.app')

@section('title', 'BoolBnB | Dettaglio appartamento')

@section('content')
    <div class="main_container show_user_apt">

        <div class="back_btn">
            {{-- BACK --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="26.845" height="18.792" viewBox="0 0 26.845 18.792">
                <path id="Tracciato_29" data-name="Tracciato 29" d="M11.4,23.792,13.288,21.9,7.141,15.738h21.7V13.054H7.141L13.3,6.893,11.4,5,2,14.4Z" transform="translate(-2 -5)" fill="#222"/>
            </svg>
            <a href="{{ route( 'guest.apartment.index' ) }}">Torna Indietro</a>
        </div>

        {{-- SEZIONE CON FOTO APPARTAMENTO E INFO PRINCIPALI --}}
        <section class="main_info">

            {{-- SEZIONE FOTO APPARTAMENTO --}}
            <div class="img_box">
                @if(strpos($apartment->main_img, 'https') !== false)
                <img src="{{ $apartment->main_img }}" alt="{{$apartment->title}}">
                @else
                    <img src="{{ asset('storage/'.$apartment->main_img) }}" alt="{{$apartment->title}}">
                @endif
            </div>

            {{-- SEZIONE INFO PRINCIPALI --}}
            <div class="info_box">
                <p class="views">32 visualizzazioni</p>
                <h3>{{$apartment->title}}</h3>
                <p class="rooms">{{$apartment->num_rooms}} stanze - {{$apartment->num_beds}} letti - {{$apartment->num_baths}} bagni</p>

                <div class="hosts_box">
                    <div class="box nights">
                        <h5>Notti</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>2</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="box adults">
                        <h5>Adulti</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>2</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="box childrens">
                        <h5>Bambini</h5>
                        <div class="selector">
                            <i class="fas fa-minus"></i>
                            <p>0</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="price_box">
                    <p>{{$apartment->price}} € x 2 notti</p>
                    <p>240 €</p>
                </div>
                <div class="price_box">
                    <p>Pulizie</p>
                    <p>60 €</p>
                </div>
                <div class="price_box">
                    <p>Tasse di soggiorno</p>
                    <p>100 €</p>
                </div>
                <div class="tot_price_box">
                    <p>Totale</p>
                    <h3>400 €</h3>
                </div>

                <div class="air_btn">
                    <a href="{{ route( 'guest.message.create', $apartment_selected ) }}">Controlla disponibilità</a>
                </div>
            </div>
        </section>

        <section class="main_title">
            <h2>{{$apartment->title}}</h2>
            <p class="rooms">{{$apartment->mq}} mq - {{$apartment->num_rooms}} stanze - {{$apartment->num_beds}} letti - {{$apartment->num_baths}} bagni</p>
        </section>

        <section class="details">

            {{-- DESCRIZIONE APPARTAMENTO --}}
            <div class="detail_box">
                <h3>Informazioni su questo spazio</h3>
                {{-- <p>{{$apartment->description}}</p> --}}
                {{-- ! PROVVISORIO IN ATTESA DI DESCRIZIONE PRECISA - COMMENTO SOPRA RIGA 92 --}}
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi tenetur error ratione nisi, iste iure ex fuga architecto officia quos aliquam dolorem? Ducimus alias officia, delectus tempora hic libero similique quos doloribus, fugit nam architecto maiores nobis quod, possimus quis quaerat esse aliquid eius reiciendis. Blanditiis quos modi nostrum consequatur sint quia quae accusamus ab dolorem et in quis fugit ducimus repellendus quisquam natus fuga, totam voluptates nesciunt cupiditate officia? Quam maiores nulla ipsa tenetur eveniet, quis neque nobis placeat, in ad, velit vero numquam dignissimos eos. Autem omnis maxime tenetur repudiandae tempora, repellendus amet? Eum, iure molestias impedit, beatae ipsa aliquam accusamus quam magnam dicta placeat consectetur cupiditate consequuntur. Corporis, iusto quae. Quae, dolorem doloribus cum labore, culpa tenetur enim optio aspernatur, quisquam perspiciatis distinctio vel possimus. In sed dignissimos similique perspiciatis perferendis, et ad modi architecto cupiditate minus aliquid eveniet dolorem nostrum accusantium praesentium velit necessitatibus harum laborum! Natus repudiandae non, iure dolor assumenda facilis qui quidem inventore rerum minima suscipit cumque impedit nihil. Iste nam aliquam ea in minima nemo eveniet iure quo. Ad quo quasi ullam asperiores maiores fugiat nam, porro obcaecati incidunt enim nesciunt repellendus cumque sapiente molestias, laudantium similique voluptas assumenda. Sunt, aut. Officia!</p>
            </div>

            {{-- SERVIZI --}}
            <div class="detail_box services">
                <h3>Servizi</h3>
                <p style="color: red; font-weight:bolder;">SAUNA - RIVEDERE QUESTA PARTE COME COLLEGARE SERVIZI!!</p>
            </div>

            {{-- POSIZIONE APPARTAMENTO --}}
            <div class="detail_box position">
                <h3>Posizione</h3>
                <div class="map_box"></div>
                <p>{{$apartment->city}}, {{$apartment->province}}, {{$apartment->state}}</p>
            </div>
        </section>

        <div id ="map" style="height:90vh;"></div> 
                
                {{-- questo solo per passaggio di valori --}}
                <div id="dom-lat" style="display: none;">
                    <?php
                        echo $lat = $apartment->latitude; 
                    ?>
                </div>
                <div id="dom-lon" style="display: none;">
                    <?php
                        echo $lon = $apartment->longitude; 
                    ?>
                </div>
                <script>

                    var latitude = document.getElementById("dom-lat").textContent;
                    var longitudine = document.getElementById("dom-lon").textContent;

                    // centro della mappa
                    var HQ = { lat: longitudine, lng: latitude }
                    console.log(HQ);

                    // visualizzazione della mappa
                    var map = tt.map({
                        key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                        container: 'map',
                        center: HQ,
                        zoom: 15
                    });

                    var marker = new tt.Marker().setLngLat(HQ).addTo(map);

                </script>
    </div>
@endsection
