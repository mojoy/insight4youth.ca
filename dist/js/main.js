/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\nwindow.addEventListener('scroll', function() {\r\n    const header = document.querySelector('.header');\r\n\r\n    if (window.scrollY > 0) {\r\n        header.classList.add('fixed');\r\n    } else {\r\n        header.classList.remove('fixed');\r\n    }\r\n});\r\n\r\nvar swiper;\r\n\r\nfunction initSwiper() {\r\n    const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;\r\n\r\n    if (windowWidth < 1024) {\r\n        swiper = new Swiper(\".swiper-services\", {\r\n            slidesPerView: 3,\r\n            loop: true,\r\n            threshold: 5,\r\n            grabCursor: true,\r\n            watchOverflow: true,\r\n            spaceBetween: 30,\r\n            //autoHeight: true,\r\n\r\n            navigation: {\r\n                nextEl: \".swiper-services-button--next\",\r\n                prevEl: \".swiper-services-button--prev\",\r\n            },\r\n\r\n            pagination: {\r\n                el: \".swiper-pagination\",\r\n                clickable: true,\r\n                //dynamicBullets: true,\r\n            },\r\n\r\n            centeredSlides: true, // центрируем слайд\r\n\r\n            breakpoints: {\r\n                250: {\r\n                    slidesPerView: 1.3,\r\n                    spaceBetween: 24,\r\n                    centeredSlides: true,\r\n                },\r\n                640: {\r\n                    slidesPerView: 2.3,\r\n                    spaceBetween: 24,\r\n                    centeredSlides: false\r\n                },\r\n                930: {\r\n                    slidesPerView: 3.3,\r\n                    spaceBetween: 24,\r\n                    centeredSlides: false\r\n                },\r\n            }\r\n        });\r\n\r\n    }\r\n}\r\n\r\nfunction sliderArrow() {\r\n    const portfolioSlider = document.querySelectorAll('.swiper-posts');\r\n\r\n    if (portfolioSlider.length) {\r\n        portfolioSlider.forEach((element) => {\r\n\r\n            const twentyTwentyWrapper = element.querySelector('.posts-img-wrapper');\r\n            const arrowWrapper = element.querySelectorAll('.slider-arrow-wrapper');\r\n            const arrowWrapperHeight = twentyTwentyWrapper.clientHeight;\r\n\r\n            arrowWrapper.forEach((element) => {\r\n                element.style.setProperty('height', arrowWrapperHeight + 'px')\r\n            })\r\n        });\r\n    }\r\n}\r\n\r\nfunction handleResize() {\r\n    sliderArrow();\r\n    if (swiper) {\r\n        swiper.destroy();\r\n    }\r\n    initSwiper();\r\n}\r\n\r\ninitSwiper();\r\nsliderArrow();\r\n\r\nwindow.addEventListener('resize', handleResize);\r\n\r\n\r\n\r\nconst btnNav = document.querySelector('.btn-nav');\r\n\r\nif (btnNav) {\r\n\r\n    btnNav.addEventListener(\"click\", function () {\r\n\r\n        const body = document.querySelector('body');\r\n        const nav = document.querySelector('.mob-panel');\r\n\r\n        if (btnNav.classList.contains('btn-nav--open')) {\r\n            btnNav.classList.remove('btn-nav--open');\r\n            nav.classList.remove('open');\r\n            body.classList.remove('over');\r\n        } else {\r\n            btnNav.classList.add('btn-nav--open');\r\n            nav.classList.add('open');\r\n            body.classList.add('over');\r\n        }\r\n\r\n    });\r\n}\n\n//# sourceURL=webpack://mytest/./src/js/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/main.js"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;