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
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\resources\\js\\app.js: Unexpected token, expected \",\" (30:4)\n\n\u001b[0m \u001b[90m 28 |\u001b[39m         mainMenu\u001b[33m:\u001b[39m \u001b[36mfalse\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 29 |\u001b[39m         footerLinks\u001b[33m:\u001b[39m [\u001b[32m'© 2021 BoolBnb Inc. - All rights reserved'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'Privacy'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'Termini'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'Mappa del sito'\u001b[39m\u001b[33m,\u001b[39m \u001b[32m'Dettagli dell\\'azienda'\u001b[39m]\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 30 |\u001b[39m     data\u001b[33m:\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m    |\u001b[39m     \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 31 |\u001b[39m         prova\u001b[33m:\u001b[39m \u001b[32m'ciao'\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 32 |\u001b[39m         ricerca\u001b[33m:\u001b[39m \u001b[32m\"\"\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 33 |\u001b[39m         ricercaToUpper\u001b[33m:\u001b[39m \u001b[32m\"\"\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n    at Parser._raise (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:776:17)\n    at Parser.raiseWithData (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:769:17)\n    at Parser.raise (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:737:17)\n    at Parser.unexpected (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:9735:16)\n    at Parser.expect (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:9721:28)\n    at Parser.parseObjectLike (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11479:14)\n    at Parser.parseExprAtom (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11047:23)\n    at Parser.parseExprSubscripts (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10708:23)\n    at Parser.parseUpdate (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10688:21)\n    at Parser.parseMaybeUnary (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10666:23)\n    at Parser.parseExprOps (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10523:23)\n    at Parser.parseMaybeConditional (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10497:23)\n    at Parser.parseMaybeAssign (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10460:21)\n    at D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10427:39\n    at Parser.allowInAnd (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12104:12)\n    at Parser.parseMaybeAssignAllowIn (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10427:17)\n    at Parser.parseExprListItem (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11864:18)\n    at Parser.parseExprList (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11834:22)\n    at Parser.parseNewArguments (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11414:25)\n    at Parser.parseNew (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11408:10)\n    at Parser.parseNewOrNewTarget (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11394:17)\n    at Parser.parseExprAtom (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:11062:21)\n    at Parser.parseExprSubscripts (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10708:23)\n    at Parser.parseUpdate (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10688:21)\n    at Parser.parseMaybeUnary (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10666:23)\n    at Parser.parseExprOps (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10523:23)\n    at Parser.parseMaybeConditional (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10497:23)\n    at Parser.parseMaybeAssign (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10460:21)\n    at D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10427:39\n    at Parser.allowInAnd (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12098:16)\n    at Parser.parseMaybeAssignAllowIn (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:10427:17)\n    at Parser.parseVar (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12926:70)\n    at Parser.parseVarStatement (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12740:10)\n    at Parser.parseStatementContent (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12326:21)\n    at Parser.parseStatement (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12259:17)\n    at Parser.parseBlockOrModuleBlockBody (D:\\Boolean2\\Final\\mamp_public\\boolbnb-team6\\node_modules\\@babel\\parser\\lib\\index.js:12845:25)");

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

__webpack_require__(/*! D:\Boolean2\Final\mamp_public\boolbnb-team6\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\Boolean2\Final\mamp_public\boolbnb-team6\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });