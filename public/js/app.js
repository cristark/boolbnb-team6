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
/*! no exports provided */
/***/ (function(module, exports) {

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

__webpack_require__(/*! D:\BOOLEAN\Classe24\mamp_public\boolbnb-team6\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\BOOLEAN\Classe24\mamp_public\boolbnb-team6\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });