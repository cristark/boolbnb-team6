/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Chart = require('chart.js');
// const $ = require('jquery');
// window.axios = require('axios');

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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    data: {
        ricerca: "",
        ricercaToUpper: "",
        nomeToUpper: "",
        apartments: '',
        array_visite: [],
        prova: '',
        currentUrl: window.location.pathname,
        myLocal: 'http://localhost:8000/api/statistiche/',
        lastItem: '',
        risultato_mesi: []
    },
    // created(){
    //     console.log(this.lastItem);

    // },
    mounted() {


        this.lastItem = this.currentUrl.substring(this.currentUrl.lastIndexOf('/') + 1);
        // console.log(this.currentUrl);
        console.log(this.lastItem);
        this.loadVisitors();

    },
    methods: {
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

