/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./static/scripts/components/_marquee.js":
/*!***********************************************!*\
  !*** ./static/scripts/components/_marquee.js ***!
  \***********************************************/
/***/ (function() {

const $scrollingText = document.querySelector(".js-marquee");
const thresholdBase = window.innerHeight;
let translateRatio = 2;
let containerDistance = 0;
window.addEventListener("scroll", onScroll);

function onScroll() {
  const containerTop = $scrollingText.getBoundingClientRect().top;
  const containerStartThreshold = containerTop - thresholdBase;
  containerDistance = containerStartThreshold;

  if (containerDistance < window.innerHeight * -1) {
    containerDistance = $scrollingText.offsetHeight * -1;
  } else if (containerDistance > 0) {
    containerDistance = 0;
  }
}

let lerpRatio = 0.08;
let distanceLerp = 0;
let targetLerp = 0;

function applyTranslateLerp(containerDistance) {
  const offsetX = containerDistance * 1 * translateRatio;
  targetLerp = offsetX;
  distanceLerp += (targetLerp - distanceLerp) * lerpRatio;
  $scrollingText.style.transform = "translateX(" + distanceLerp + "px)";
}

function onUpdate() {
  applyTranslateLerp(containerDistance);
  requestAnimationFrame(onUpdate);
}

onUpdate();

/***/ }),

/***/ "./static/scripts/components/_menu.js":
/*!********************************************!*\
  !*** ./static/scripts/components/_menu.js ***!
  \********************************************/
/***/ (function() {

const openMenuSelector = '[js-menu-open]';
const closeMenuSelector = '[js-menu-close]';
const contentMenuSelector = '[js-menu-content]';
const headerSelector = '[js-header]';
const activeClass = 'active';
const openMenu = document.querySelector(openMenuSelector);
const closeMenu = document.querySelector(closeMenuSelector);
const contentMenu = document.querySelector(contentMenuSelector);
const header = document.querySelector(headerSelector);
openMenu.addEventListener('click', () => {
  contentMenu.classList.toggle(activeClass);
  document.body.classList.toggle('menu-open');
  header.classList.toggle('menu-open');
});
closeMenu.addEventListener('click', () => {
  contentMenu.classList.toggle(activeClass);
  document.body.classList.toggle('menu-open');
  header.classList.toggle('menu-open');
});

/***/ }),

/***/ "./static/scripts/global.js":
/*!**********************************!*\
  !*** ./static/scripts/global.js ***!
  \**********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _static_styles_global_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../static/styles/global.scss */ "./static/styles/global.scss");
/* harmony import */ var _static_styles_pages_gamme_gamme_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../static/styles/pages/gamme/gamme.scss */ "./static/styles/pages/gamme/gamme.scss");
/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/_menu */ "./static/scripts/components/_menu.js");
/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_menu__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_marquee__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/_marquee */ "./static/scripts/components/_marquee.js");
/* harmony import */ var _components_marquee__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_marquee__WEBPACK_IMPORTED_MODULE_3__);





/***/ }),

/***/ "./static/styles/global.scss":
/*!***********************************!*\
  !*** ./static/styles/global.scss ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./static/styles/pages/gamme/gamme.scss":
/*!**********************************************!*\
  !*** ./static/styles/pages/gamme/gamme.scss ***!
  \**********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./static/scripts/global.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;
//# sourceMappingURL=global.js.map