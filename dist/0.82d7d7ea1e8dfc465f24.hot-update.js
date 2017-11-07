webpackHotUpdate(0,{

/***/ 17:
/*!*************************!*\
  !*** ./scripts/main.js ***!
  \*************************/
/*! exports provided:  */
/*! all exports used */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery, process, $) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(/*! jquery */ 0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__autoload_materialize_js__ = __webpack_require__(/*! ./autoload/_materialize.js */ 19);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__util_Router__ = __webpack_require__(/*! ./util/Router */ 23);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__routes_common__ = __webpack_require__(/*! ./routes/common */ 25);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__routes_home__ = __webpack_require__(/*! ./routes/home */ 26);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__routes_about__ = __webpack_require__(/*! ./routes/about */ 27);
// import external dependencies


// Import everything from autoload


// import local dependencies





/** Populate Router instance with DOM routes */
var routes = new __WEBPACK_IMPORTED_MODULE_2__util_Router__["a" /* default */]({
  // All pages
  common: __WEBPACK_IMPORTED_MODULE_3__routes_common__["a" /* default */],
  // Home page
  home: __WEBPACK_IMPORTED_MODULE_4__routes_home__["a" /* default */],
  // About Us page, note the change from about-us to aboutUs.
  aboutUs: __WEBPACK_IMPORTED_MODULE_5__routes_about__["a" /* default */],
});

// Load Events
jQuery(document).ready(function () { return routes.loadEvents(); });

// Force CSS update
// https://github.com/webpack-contrib/extract-text-webpack-plugin/issues/30#issuecomment-256958209
if (process.env.NODE_ENV !== 'production') {
  if (true) {
    var reporter = window.__webpack_hot_middleware_reporter__
    var success = reporter.success
    reporter.success = function () {
      document.querySelectorAll('[id*="sage"]').forEach(function (link) {
        var nextStyleHref = link.href.replace(/(\?\d+)?$/, ("?" + (Date.now())))
        link.href = nextStyleHref
      })
      success()
    }
  }
}

$(".button-collapse").sideNav();

$('#contact_action').click(function(){
    $.ajax({
      type: 'POST',
      url: '/wp-json/collection/message',
      data: $('#contact_form').serialize(),
      beforeSend: function(){
        $('#contact_preloader').removeClass('hide');
        $('#contact_text').text('Sending...');
      },
      success: function () {
        $("#contact_container").hide();
      },
    });
  });

/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(/*! jquery */ 0), __webpack_require__(/*! ./../../../node_modules/process/browser.js */ 18), __webpack_require__(/*! jquery */ 0)))

/***/ })

})
//# sourceMappingURL=0.82d7d7ea1e8dfc465f24.hot-update.js.map