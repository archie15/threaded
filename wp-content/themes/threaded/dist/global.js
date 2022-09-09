"use strict";
(self["webpackChunkthreaded"] = self["webpackChunkthreaded"] || []).push([["global"],{

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/styles.scss */ "./assets/scss/styles.scss");
/* harmony import */ var _scripts_header_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/header.js */ "./assets/js/scripts/header.js");
/* harmony import */ var _scripts_slick_carousel_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/slick-carousel.js */ "./assets/js/scripts/slick-carousel.js");
// style
 //js 




/***/ }),

/***/ "./assets/js/scripts/header.js":
/*!*************************************!*\
  !*** ./assets/js/scripts/header.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
 // fixed header script

window.onscroll = function () {
  fixedHeader();
};

const header = document.querySelector('.header');

function fixedHeader() {
  if (window.pageYOffset > 0) {
    header.classList.add('header--fixed');
  } else {
    header.classList.remove('header--fixed');
  }
}
/**
 * header profile menu
*/


jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.jsProfileMenuBtn', function (e) {
  e.preventDefault();
  var dropdown = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parent();
  var open = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parent().hasClass('open');

  if (open) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parent().removeClass('open');
  } else {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parent().addClass('open');
  }
});

/***/ }),

/***/ "./assets/js/scripts/slick-carousel.js":
/*!*********************************************!*\
  !*** ./assets/js/scripts/slick-carousel.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var slick_carousel_latest__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! slick-carousel-latest */ "./node_modules/slick-carousel-latest/slick/slick.js");
/* harmony import */ var slick_carousel_latest__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(slick_carousel_latest__WEBPACK_IMPORTED_MODULE_1__);


jquery__WEBPACK_IMPORTED_MODULE_0___default()(".hero-banner").slick({
  dots: false,
  arrows: false,
  autoplay: false,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  variableWidth: true,
  centerMode: true
});

/***/ }),

/***/ "./assets/scss/styles.scss":
/*!*********************************!*\
  !*** ./assets/scss/styles.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendor"], () => (__webpack_exec__("./assets/js/index.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=global.js.map