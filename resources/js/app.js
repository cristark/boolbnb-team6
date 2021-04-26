require('./bootstrap');
// require('../../public/js/stat');
// var Chart = require('chart.js');
// const $ = require('jquery');
// window.axios = require('axios');
import Vue from 'vue';
// import Chart from 'chart.js/auto';
import axios from 'axios';


//braintree
// {
//     "require" : {
//         "braintree/braintree_php" : "5.5.0"
//     }
// }
// const $ = require('./jquery');
// 
// const { default: axios } = require("axios");

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        //cri
        footerLinks: ['© 2021 BoolBnb Inc. - All rights reserved', 'Privacy', 'Termini', 'Mappa del sito', 'Dettagli dell\'azienda'],
        citiesBox:[
            {
                city: 'Roma',
                description: 'Città Eterna',
                img: 'https://images.unsplash.com/photo-1569343051690-6dd6475dc776?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
            },
            {
                city: 'Milano',
                description: 'Smart-City Life',
                img: 'https://images.unsplash.com/photo-1530284610319-31ee7c55378e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
            },
            {
                city: 'Firenze',
                description: 'Arte e Cultura Rinascimentale',
                img: 'https://images.unsplash.com/photo-1527152272644-1af27a5c00cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
            },
            {
                city: 'Napoli',
                description: 'Folclore partenopeo',
                img: 'https://images.unsplash.com/photo-1527152272644-1af27a5c00cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
            }
        ],
        mainMenu: false,
        //dave
        ricerca: "",
        ricercaToUpper: "",
        nomeToUpper: "",
        apartments: '',
        currentUrl: window.location.pathname,
        myLocal: 'http://localhost:8000/api/statistiche/',
        lastItem: '',
        risultato_mesi: [],
        language: 'it-IT',
        citta: '',
        apiKey: '581ptADhY1xisfyvdt8ITvz3d78O66H6',
        array_tom: [],
        json: '.json',

        //canvas d
        array_visite: '',
        mesi: [],
        n_visite: [],
        search: 'All',
        array_completo: [],
        months: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile']
    },
    // created(){
    //     console.log(this.lastItem);

    // },
    mounted() {
        // console.log(this.citta);

        this.lastItem = this.currentUrl.substring(this.currentUrl.lastIndexOf('/') + 1);
        this.loadVisitors();
        this.tomtom();
    },
    methods: {
        prova(){

            var latitude = document.getElementById("dom-lat").textContent;
            var longitudine = document.getElementById("dom-lon").textContent;

            // centro della mappa
            var HQ = { lat: latitude, lng: longitudine }
            console.log(HQ);

            // visualizzazione della mappa
            var map = tt.map({
                key: '3Lb6xSAA2aORuhekPk7epa88Y9SpvSla',
                container: 'map',
                center: HQ,
                zoom: 15
            });

            var marker = new tt.Marker().setLngLat(HQ).addTo(map);

        },
        // FUNZIONE PER MOSTRARE/NASCONDERE MENU DROPDOWN HEADER
        showMenu() {
            this.mainMenu = !this.mainMenu;
        },
        // DISATTIVARE SCROLL PAGINA
        disableScroll() {
            document.body.style.overflow = 'hidden';
            document.querySelector('html').scrollTop = window.scrollY;
        },
        tomtom()
        {
            axios.get('https://api.tomtom.com/search/2/search/' + this.citta + '.json?',
            {
                params: {
                    
                    limit: 1,
                    key: '3ZJWFcBWKUg3rC731Tp0W3ytemg6tt3O'
                    
                }
            })
            .then(result => {
                this.array_tom = result.data.results;
                console.log(this.array_tom);

            });
        },
        loadVisitors() {
            axios.get('http://localhost:8000/api/statistiche/' + this.lastItem)
                .then(result => {
                    this.array_visite = result.data.numero_visite;
                    
                    console.log(this.array_visite, 'ARRAY_VISITE');
                    this.array_visite.forEach(element => {
                        // console.log(element.totale, 'sono element');
                        this.mesi.push(element.numero_mese, 'mese di');
                        this.n_visite.push(element.totale, 'Array visite');
                        // console.log(this.n_visite);
                        

                        
                    });
                    
                    
                
                    this.array_completo = this.months.map((element) => {
                        // const typeIndex = this.mesi.indexOf(element);
                        // console.log(typeIndex, '????????????');
                        return this.mesi
                    })

                    console.log(this.array_completo, '!!!!!!!!!!!!!!!');

                    var mesi = this.mesi;
                    console.log(mesi, 'ciaoooooooooooo');
                    var n_visite = this.n_visite;
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            months: ['Gennaio', 'Febbraio'],
                            labels: mesi,
                            datasets: [{
                                label: 'Visite',
                                data: n_visite,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        },

                    });

                });
        },
                
    }
});



