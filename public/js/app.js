/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
<<<<<<< Updated upstream
/*! no exports provided */
/***/ (function(module, exports) {
=======
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js"); // var Chart = require('chart.js');
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


var _require = __webpack_require__(/*! axios */ "./node_modules/axios/index.js"),
    axios = _require["default"]; // require('../../public/js/stat');


window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
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

var app = new Vue({
  el: '#app',
  data: {
    //cri
    footerLinks: ['© 2021 BoolBnb Inc. - All rights reserved', 'Privacy', 'Termini', 'Mappa del sito', 'Dettagli dell\'azienda'],
    citiesBox: [{
      city: 'Roma',
      description: 'Città Eterna',
      img: 'https://images.unsplash.com/photo-1569343051690-6dd6475dc776?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
    }, {
      city: 'Milano',
      description: 'Smart-City Life',
      img: 'https://images.unsplash.com/photo-1530284610319-31ee7c55378e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
    }, {
      city: 'Firenze',
      description: 'Arte e Cultura Rinascimentale',
      img: 'https://images.unsplash.com/photo-1527152272644-1af27a5c00cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'
    }],
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
  mounted: function mounted() {
    // console.log(this.citta);
    this.lastItem = this.currentUrl.substring(this.currentUrl.lastIndexOf('/') + 1); // this.loadVisitors();

    this.tomtom();
  },
  methods: {
    // FUNZIONE PER MOSTRARE/NASCONDERE MENU DROPDOWN HEADER
    showMenu: function showMenu() {
      this.mainMenu = !this.mainMenu;
    },
    // DISATTIVARE SCROLL PAGINA
    disableScroll: function disableScroll() {
      document.body.style.overflow = 'hidden';
      document.querySelector('html').scrollTop = window.scrollY;
    },
    tomtom: function tomtom() {
      var _this = this;

      axios.get('https://api.tomtom.com/search/2/search/' + this.citta + '.json?', {
        params: {
          limit: 1,
          key: '3ZJWFcBWKUg3rC731Tp0W3ytemg6tt3O'
        }
      }).then(function (result) {
        _this.array_tom = result.data.results;
        console.log(_this.array_tom);
      });
    },
    filtro: function filtro() {
      var _this2 = this;

      this.ricercaToUpper = this.ricerca.toUpperCase();
      this.apartments.forEach(function (items) {
        _this2.nomeToUpper = items.nome.toUpperCase();
        _this2.nomeToUpper.includes(_this2.ricercaToUpper) ? items.status = true : items.status = false;
      });
    },
    loadVisitors: function loadVisitors() {
      var _this3 = this;

      axios.get('http://localhost:8000/api/statistiche/' + this.lastItem).then(function (result) {
        _this3.array_visite = result.data.numero_visite;
        console.log(_this3.array_visite);
        console.log(result.data.numero_visite);

        _this3.array_visite.forEach(function (element) {
          console.log(element.totale, 'sono element');
          console.log(element.numero_mese);

          _this3.risultato_mesi.push(element.numero_mese);

          console.log(_this3.risultato_mesi, 'sono risultato mesi');
        });
      });
    },
    createCanvas: function createCanvas() {
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],
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
}); // var risultato_mesi = risultato_mesi;
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

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.Popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js")["default"];
  window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

  __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
} catch (e) {}
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

>>>>>>> Stashed changes

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\resources\\js\\app.js: Unexpected token (90:0)\n\n\u001b[0m \u001b[90m 88 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 89 |\u001b[39m         \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mlastItem \u001b[33m=\u001b[39m \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mcurrentUrl\u001b[33m.\u001b[39msubstring(\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mcurrentUrl\u001b[33m.\u001b[39mlastIndexOf(\u001b[32m'/'\u001b[39m) \u001b[33m+\u001b[39m \u001b[35m1\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 90 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 91 |\u001b[39m         console\u001b[33m.\u001b[39mlog(\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mcurrentUrl)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 92 |\u001b[39m         console\u001b[33m.\u001b[39mlog(\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mlastItem)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 93 |\u001b[39m         \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mloadVisitors()\u001b[33m;\u001b[39m\u001b[0m\n    at Parser._raise (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:776:17)\n    at Parser.raiseWithData (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:769:17)\n    at Parser.raise (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:737:17)\n    at Parser.unexpected (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:9735:16)\n    at Parser.parseExprAtom (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11131:20)\n    at Parser.parseExprSubscripts (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10708:23)\n    at Parser.parseUpdate (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10688:21)\n    at Parser.parseMaybeUnary (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10666:23)\n    at Parser.parseExprOps (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10523:23)\n    at Parser.parseMaybeConditional (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10497:23)\n    at Parser.parseMaybeAssign (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10460:21)\n    at Parser.parseExpressionBase (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10405:23)\n    at D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10399:39\n    at Parser.allowInAnd (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12098:16)\n    at Parser.parseExpression (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10399:17)\n    at Parser.parseStatementContent (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12390:23)\n    at Parser.parseStatement (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12259:17)\n    at Parser.parseBlockOrModuleBlockBody (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12845:25)\n    at Parser.parseBlockBody (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12836:10)\n    at Parser.parseBlock (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12820:10)\n    at Parser.parseFunctionBody (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11777:24)\n    at Parser.parseFunctionBodyAndFinish (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11761:10)\n    at Parser.parseMethod (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11711:10)\n    at Parser.parseObjectMethod (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11640:19)\n    at Parser.parseObjPropValue (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11673:23)\n    at Parser.parsePropertyDefinition (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11597:10)\n    at Parser.parseObjectLike (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11487:25)\n    at Parser.parseExprAtom (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11047:23)\n    at Parser.parseExprSubscripts (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10708:23)\n    at Parser.parseUpdate (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10688:21)\n    at Parser.parseMaybeUnary (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10666:23)\n    at Parser.parseExprOps (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10523:23)\n    at Parser.parseMaybeConditional (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10497:23)\n    at Parser.parseMaybeAssign (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10460:21)\n    at D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10427:39\n    at Parser.allowInAnd (D:\\BOOLEAN\\Classe24\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12104:12)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< Updated upstream
__webpack_require__(/*! D:\BOOLEAN\Classe24\mamp_public\boolbnb-team6\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\BOOLEAN\Classe24\mamp_public\boolbnb-team6\resources\sass\app.scss */"./resources/sass/app.scss");
=======
__webpack_require__(/*! D:\BOOLEAN\Classe24\03. ESERCITAZIONI LIVE\boolbnb-team6\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\BOOLEAN\Classe24\03. ESERCITAZIONI LIVE\boolbnb-team6\resources\sass\app.scss */"./resources/sass/app.scss");
>>>>>>> Stashed changes


/***/ })

/******/ });