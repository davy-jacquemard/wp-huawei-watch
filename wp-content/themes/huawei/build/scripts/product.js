/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./static/scripts/page/_product-perso.js":
/*!***********************************************!*\
  !*** ./static/scripts/page/_product-perso.js ***!
  \***********************************************/
/***/ (function() {

let filterItemsSelector = "[js-product-filter]";
let filterItems = document.querySelectorAll(filterItemsSelector);
let sizeContainerSelector = '[js-watch-size]';
let colorContainerSelector = '[js-watch-color]';
let productImageSelector = '[js-product-image]';
let montre = {
  color: null,
  size: null
};
filterItems.forEach(function (item) {
  item.addEventListener("click", function (e) {
    let attribute = this.dataset.attribute;
    let value = this.dataset.value;
    Array.prototype.slice.call(this.parentNode.children).forEach(function (child) {
      child.classList.remove("is-active");
    });
    this.classList.add("is-active");

    if (attribute === "pa_colors") {
      let name = this.dataset.name;
      montre = { ...montre,
        color: value
      };
      updateWatchColor(name);
      changeImage(value, ".watch__strap");
    }

    if (attribute === "taille-du-cadran") {
      montre = { ...montre,
        size: value
      };
      updateWatchSize(value);
    }

    let select = document.getElementById(attribute);
    select.value = value;
    jQuery(select).trigger("change.wc-variation-form");
  });
});

let changeImage = function (color) {
  let images = document.querySelectorAll(productImageSelector);
  images.forEach(image => {
    let src = image.dataset.source;
    src = src.replace("{color}", color);
    image.src = src;
  });
};

let addToCartSelector = "[js-add-to-cart]";
let buttonAddToCart = document.querySelector(addToCartSelector);
buttonAddToCart.addEventListener("click", function () {
  document.querySelector(".variations_form").submit();
});

const updatePrice = () => {
  let selector = ".woocommerce-variation-price .woocommerce-Price-amount";
  let price = document.querySelector(selector).innerHTML;
  document.querySelector("[js-product-price]").innerHTML = price;
};

const updateWatchSize = currentSize => {
  let sizeContainer = document.querySelector(sizeContainerSelector);
  sizeContainer.innerHTML = currentSize;
};

const updateWatchColor = currentColor => {
  let colorContainer = document.querySelector(colorContainerSelector);
  colorContainer.innerHTML = currentColor;
};

jQuery(document).on("show_variation", function () {
  updatePrice();
});

/***/ }),

/***/ "./static/scripts/page/_product-ui.js":
/*!********************************************!*\
  !*** ./static/scripts/page/_product-ui.js ***!
  \********************************************/
/***/ (function() {

const backgroundSelector = '[js-bg-color]';
const background = document.querySelector(backgroundSelector);

let calcImageMargin = () => {
  const imgContainerSelector = '[js-main-image-container]';
  const imgContainer = document.querySelector(imgContainerSelector);

  if (window.innerWidth < 960) {
    background.style.width = 100 + '%';
    let imgHeight = imgContainer.offsetHeight + 64;
    let imgTop = imgContainer.getBoundingClientRect().top - 32;
    console.log(imgHeight, imgTop);
    var bgHeight = imgHeight / 2 + imgTop - 72;
    background.style.height = bgHeight + 'px';
  } else {
    background.style.height = 100 + '%';
    let imgWidth = imgContainer.clientWidth;
    let imgLeft = imgContainer.getBoundingClientRect().left;
    var bgWidth = imgWidth / 2 + imgLeft;
    background.style.width = bgWidth + 'px';
  }
};

calcImageMargin(); //window.onresize = calcImageMargin;

let gestColor = () => {
  const colorOptionsSelector = '[js-color-choice]';
  const colorOptions = document.querySelectorAll(colorOptionsSelector);
  colorOptions.forEach(color => {
    color.addEventListener('click', () => {
      const activeColor = document.querySelector('.color.is-active');
      background.style.backgroundColor = color.style.backgroundColor;
    });
  });
};

gestColor();

/***/ }),

/***/ "./static/scripts/page/product.js":
/*!****************************************!*\
  !*** ./static/scripts/page/product.js ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _product_perso__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_product-perso */ "./static/scripts/page/_product-perso.js");
/* harmony import */ var _product_perso__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_product_perso__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _product_ui__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_product-ui */ "./static/scripts/page/_product-ui.js");
/* harmony import */ var _product_ui__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_product_ui__WEBPACK_IMPORTED_MODULE_1__);



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
/******/ 	__webpack_require__("./static/scripts/page/product.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;
//# sourceMappingURL=product.js.map