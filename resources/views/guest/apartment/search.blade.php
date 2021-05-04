@extends('layouts.app')

@section('title', 'BoolBnB | Appartamenti trovati')

@section('content')

    <p id="dom-city-start" style="display: none;">
        <?php echo $city ?> 
    </p>

    @{{setCity()}}

    <div class="main_container">

        <div class="back_btn">
            {{-- BACK --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="26.845" height="18.792" viewBox="0 0 26.845 18.792">
                <path id="Tracciato_29" data-name="Tracciato 29" d="M11.4,23.792,13.288,21.9,7.141,15.738h21.7V13.054H7.141L13.3,6.893,11.4,5,2,14.4Z" transform="translate(-2 -5)" fill="#222"/>
            </svg>
            <a href="{{url('/')}}">Torna Indietro</a>
        </div>

        <div class="main_search">
            
            {{-- BOX RISULTATI RICERCA APPARTAMENTI --}}
            <div class="search_box">

                <div class="adv_search clearfix" :class="(advancedSearch == true) ? 'active' : ''" style="height: 360px">
                    <h3 v-on:click="showSrc">Ricerca avanzata</h3>
                    <div >

                        <h4>Caratteristiche minime stanze</h4>

                        <div class="src_box">
                            <div class="row">
                                <label for="SrcBeds">Numero letti</label>
                                <input name="num_beds" type="number" id="SrcBeds" v-model="num_beds" min="1" v-on:change='getResultSearchAdvanced()'>
                            </div>
    
                            <div class="row">
                                <label for="SrcRooms">Numero stanze</label>
                                <input name="num_rooms" type="number" id="SrcRooms" v-model="num_rooms" min="1" v-on:change='getResultSearchAdvanced()'>
                            </div>
                        </div>

                        <div class="src_box">
                            <div class="row">
                                <label for="SrcBaths">Numero bagni</label>
                                <input name="num_baths" type="number" id="SrcBaths" v-model="num_baths" min="1" v-on:change='getResultSearchAdvanced()'>
                            </div>
    
                            <div class="row">
                                <label for="SrcMq">Metri quadrati</label>
                                <input name="num_mq" type="number" id="SrcMq" v-model="num_mq" min="1" v-on:change='getResultSearchAdvanced()'>
                            </div>

                            <div class="row">
                                <input name="city" type="hidden" value="{{$city}}">
                            </div>
                        </div>

                        <hr>

                        <h4>Servizi disponibili</h4>
                        <div class="src_box services">
                            <div class="form-check" v-for="service in array_services" :key="service.id">
                                <input :value='service' type="checkbox" id="services" name="services[]" v-model="checkedServices" v-on:change='getResultSearchAdvanced()'>
                                <label for="services">
                                    @{{ service.name}}
                                </label>
                            </div>
                        </div>

                        <h4>Distanza massima dal centro geografico della citta</h4>
                        <div class="src_box">
                            <div class="row">
                                <label for="SrcBaths">Massima distanza dal centro</label>
                                <label for="distance">Scegli la distanza massima:</label>
                                <select id="distance" name="radius" v-on:change='getResultSearchAdvanced()' v-model="radius">
                                    <option value="1">max 1 km</option>
                                    <option value="7">max 7 km</option>
                                    <option value="9">max 9 km</option>
                                    <option value="20">max 20km</option>
                                </select>
                            </div>
                        </div>
                        
                        <button class="src_btn" v-on:click='getResultSearchAdvanced()'>Avvia ricerca avanzata</button>
                    </div>
                </div>

                <p>Lista appartamenti attivi</p>

                <div class="box" v-for="apartment in array_apt_filter">

                    {{-- IMMAGINE APPARTAMENTO --}}
                    <div class="apt_img">
                        <a :href="'/apartment/'+apartment.slug">
                            <img :src="apartment.main_img" alt="apartment.title}}">
                        </a>
                    </div>

                        {{-- DIVIDER --}}
                        <div class="divider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1" height="110" viewBox="0 0 1 121">
                                <path id="Separator" d="M582,746.953v120" transform="translate(-581.5 -746.453)" fill="none" stroke="#909090" stroke-linecap="round" stroke-width="1" stroke-dasharray="0.5 12"/>
                            </svg>
                        </div>

                        {{-- DESCRIZIONE APPARTAMENTO --}}
                        <div class="apt_description">
                            <a :href="'/apartment/'+apartment.slug">
                                <h4>@{{apartment.title}}</h4>
                            </a>
                            <p class="views">32 visualizzazioni</p>

                            <p class="rooms">
                                @{{apartment.mq}} mq - @{{apartment.num_rooms}} stanze - @{{apartment.num_beds}} letti - @{{apartment.num_baths}} bagni
                            </p>

                            <div class="price_box">
                                <p>Prezzo di una notte in appartamento</p>
                                <h3>@{{parseInt(apartment.price)}} €</h3>
                            </div>
                        </div>
                </div>
            </div>
    
            {{-- MAPPA --}}
            <div id ="mapSearch" class="map_box"></div> 
                
                @php
                    // dd($apartments);
                @endphp
                {{-- questo solo per passaggio di valori --}}
                <div id="dom-ap" style="display: none;">
                    <?php
                        echo json_encode ( $apartments);
                    ?>
                </div>
                <p id="dom-city" style="display: none;">
                    <?php
                        echo $city; 
                    ?>
                </p>

                @{{mappasearch()}}

                {{-- SCRIPT PER TESTING --}}
                {{-- <script>

                    var indirizzo = 'Corso Galileo Ferraris, 35, 10121 Torino TO';
                    
                    axios
                        .get('https://api.tomtom.com/search/2/geocode/'+indirizzo+'.json?key=3Lb6xSAA2aORuhekPk7epa88Y9SpvSla')
                        .then( response  => {
                            // centro della mappa
                            console.log(response.data.results);
                            
                            var data = response.data.results
                            var count = 0;
                            var position = null;
                            
                            while(count < data.length){
                                if(data[count].type == "Point Address"){
                                     position = data[count].position;
                                    //  return data[count].position;
                                } else {
                                    count++;
                                }           
                            }

                            // return null;

                            var HQ = position;
                            console.log(position);

                            // visualizzazione della mappa
                            var map = tt.map({
                                key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                                container: 'map',
                                center: HQ,
                                zoom: 16
                            });

                            var marker = new tt.Marker().setLngLat(position).addTo(map);

                        })
                        .catch(error => console.error('error city', error)); 

                </script> --}}
        </div>

    </div>
@endsection