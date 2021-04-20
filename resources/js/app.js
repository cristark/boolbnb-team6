/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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
    data:{
        prova: 'ciao',
        ricerca: '',
        ricercaToUpper: '',
        nomeToUpper: '',
        apartments: '',
        mainMenu: false,
        footerLinks: ['© 2021 BoolBnb Inc. - All rights reserved', 'Privacy', 'Termini', 'Mappa del sito', 'Dettagli dell\'azienda']
        // iconsFooterLink: ['']
    },
    mounted() {
        console.log(this.mainMenu);
    },
    methods: {
        filtro() {
            this.ricercaToUpper = this.ricerca.toUpperCase();
            this.apartments.forEach((items) => {
                this.nomeToUpper = items.nome.toUpperCase();
                (this.nomeToUpper.includes(this.ricercaToUpper)) ? items.status = true : items.status = false;
            });
        },
        // FUNZIONE PER MOSTRARE/NASCONDERE MENU DROPDOWN HEADER
        showMenu() {
            this.mainMenu = !this.mainMenu;
            console.log(this.mainMenu);
        }
    }
});
