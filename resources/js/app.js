require('./bootstrap');
// var Chart = require('chart.js');
// const $ = require('jquery');
// window.axios = require('axios');


//braintree
// {
//     "require" : {
//         "braintree/braintree_php" : "5.5.0"
//     }
// }
// const $ = require('./jquery');
// 
const { default: axios } = require("axios");

// require('../../public/js/stat');
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
            }
        ],
        mainMenu: false,
        //dave
        prova: 'ciao',
        ricerca: "",
        ricercaToUpper: "",
        nomeToUpper: "",
        apartments: '',
        array_visite: [],
        currentUrl: window.location.pathname,
        myLocal: 'http://localhost:8000/api/statistiche/',
        lastItem: '',
        risultato_mesi: [],
        language: 'it-IT',
        citta: '',
        apiKey: '581ptADhY1xisfyvdt8ITvz3d78O66H6',
        array_tom: [],
        json: '.json'
    },
    // created(){
    //     console.log(this.lastItem);

    // },
    mounted() {
        // console.log(this.citta);

        this.lastItem = this.currentUrl.substring(this.currentUrl.lastIndexOf('/') + 1);
        // this.loadVisitors();
        this.tomtom();
    },
    methods: {
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
        filtro() {
            this.ricercaToUpper = this.ricerca.toUpperCase();
            this.apartments.forEach((items) => {
                this.nomeToUpper = items.nome.toUpperCase();
                (this.nomeToUpper.includes(this.ricercaToUpper)) ? items.status = true : items.status = false;
            });
        },
        loadVisitors() {
            axios.get('http://localhost:8000/api/statistiche/' + this.lastItem)
                .then(result => {
                    this.array_visite = result.data.numero_visite;
                    console.log(this.array_visite);
                    console.log(result.data.numero_visite);
                    this.array_visite.forEach(element => {
                        console.log(element.totale, 'sono element');
                        console.log(element.numero_mese);
                        this.risultato_mesi.push(element.numero_mese);

                        console.log(this.risultato_mesi, 'sono risultato mesi');
                    });

                });
        },
        createCanvas(){
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
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
                }
            });
        }        
    }
});


// var risultato_mesi = risultato_mesi;
// var ctx = document.getElementById('myChart').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//         labels: [1,2,3,4],
//         datasets: [{
//             label: '# of Votes',
//             data: [0, 1, 2, 3, 4],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     },

// });

