/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js":
/*!******************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js ***!
  \******************************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTUsersAddAuthApp = function () {\n  // Shared variables\n  var element = document.getElementById('kt_modal_add_auth_app');\n  var modal = new bootstrap.Modal(element); // Init add schedule modal\n\n  var initAddAuthApp = function initAddAuthApp() {\n    // Close button handler\n    var closeButton = element.querySelector('[data-kt-users-modal-action=\"close\"]');\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to close?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, close it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          modal.hide(); // Hide modal\t\t\t\t\n        }\n      });\n    });\n  }; // QR code to text code swapper\n\n\n  var initCodeSwap = function initCodeSwap() {\n    var qrCode = element.querySelector('[ data-kt-add-auth-action=\"qr-code\"]');\n    var textCode = element.querySelector('[ data-kt-add-auth-action=\"text-code\"]');\n    var qrCodeButton = element.querySelector('[ data-kt-add-auth-action=\"qr-code-button\"]');\n    var textCodeButton = element.querySelector('[ data-kt-add-auth-action=\"text-code-button\"]');\n    var qrCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"qr-code-label\"]');\n    var textCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"text-code-label\"]');\n\n    var toggleClass = function toggleClass() {\n      qrCode.classList.toggle('d-none');\n      qrCodeButton.classList.toggle('d-none');\n      qrCodeLabel.classList.toggle('d-none');\n      textCode.classList.toggle('d-none');\n      textCodeButton.classList.toggle('d-none');\n      textCodeLabel.classList.toggle('d-none');\n    }; // Swap to text code handler\n\n\n    textCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n    qrCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n  };\n\n  return {\n    // Public functions\n    init: function init() {\n      initAddAuthApp();\n      initCodeSwap();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTUsersAddAuthApp.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvZWNvbW1lcmNlL2N1c3RvbWVycy9kZXRhaWxzL2FkZC1hdXRoLWFwcC5qcy5qcyIsIm1hcHBpbmdzIjoiQ0FFQTs7QUFDQSxJQUFJQSxpQkFBaUIsR0FBRyxZQUFZO0FBQ2hDO0FBQ0EsTUFBTUMsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsdUJBQXhCLENBQWhCO0FBQ0EsTUFBTUMsS0FBSyxHQUFHLElBQUlDLFNBQVMsQ0FBQ0MsS0FBZCxDQUFvQkwsT0FBcEIsQ0FBZCxDQUhnQyxDQUtoQzs7QUFDQSxNQUFJTSxjQUFjLEdBQUcsU0FBakJBLGNBQWlCLEdBQU07QUFFdkI7QUFDQSxRQUFNQyxXQUFXLEdBQUdQLE9BQU8sQ0FBQ1EsYUFBUixDQUFzQixzQ0FBdEIsQ0FBcEI7QUFDQUQsSUFBQUEsV0FBVyxDQUFDRSxnQkFBWixDQUE2QixPQUE3QixFQUFzQyxVQUFBQyxDQUFDLEVBQUk7QUFDdkNBLE1BQUFBLENBQUMsQ0FBQ0MsY0FBRjtBQUVBQyxNQUFBQSxJQUFJLENBQUNDLElBQUwsQ0FBVTtBQUNOQyxRQUFBQSxJQUFJLEVBQUUsdUNBREE7QUFFTkMsUUFBQUEsSUFBSSxFQUFFLFNBRkE7QUFHTkMsUUFBQUEsZ0JBQWdCLEVBQUUsSUFIWjtBQUlOQyxRQUFBQSxjQUFjLEVBQUUsS0FKVjtBQUtOQyxRQUFBQSxpQkFBaUIsRUFBRSxnQkFMYjtBQU1OQyxRQUFBQSxnQkFBZ0IsRUFBRSxZQU5aO0FBT05DLFFBQUFBLFdBQVcsRUFBRTtBQUNUQyxVQUFBQSxhQUFhLEVBQUUsaUJBRE47QUFFVEMsVUFBQUEsWUFBWSxFQUFFO0FBRkw7QUFQUCxPQUFWLEVBV0dDLElBWEgsQ0FXUSxVQUFVQyxNQUFWLEVBQWtCO0FBQ3RCLFlBQUlBLE1BQU0sQ0FBQ0MsS0FBWCxFQUFrQjtBQUNkdEIsVUFBQUEsS0FBSyxDQUFDdUIsSUFBTixHQURjLENBQ0E7QUFDakI7QUFDSixPQWZEO0FBZ0JILEtBbkJEO0FBcUJILEdBekJELENBTmdDLENBaUNoQzs7O0FBQ0EsTUFBSUMsWUFBWSxHQUFHLFNBQWZBLFlBQWUsR0FBTTtBQUNyQixRQUFNQyxNQUFNLEdBQUc1QixPQUFPLENBQUNRLGFBQVIsQ0FBc0Isc0NBQXRCLENBQWY7QUFDQSxRQUFNcUIsUUFBUSxHQUFHN0IsT0FBTyxDQUFDUSxhQUFSLENBQXNCLHdDQUF0QixDQUFqQjtBQUNBLFFBQU1zQixZQUFZLEdBQUc5QixPQUFPLENBQUNRLGFBQVIsQ0FBc0IsNkNBQXRCLENBQXJCO0FBQ0EsUUFBTXVCLGNBQWMsR0FBRy9CLE9BQU8sQ0FBQ1EsYUFBUixDQUFzQiwrQ0FBdEIsQ0FBdkI7QUFDQSxRQUFNd0IsV0FBVyxHQUFHaEMsT0FBTyxDQUFDUSxhQUFSLENBQXNCLDRDQUF0QixDQUFwQjtBQUNBLFFBQU15QixhQUFhLEdBQUdqQyxPQUFPLENBQUNRLGFBQVIsQ0FBc0IsOENBQXRCLENBQXRCOztBQUVBLFFBQU0wQixXQUFXLEdBQUcsU0FBZEEsV0FBYyxHQUFLO0FBQ3JCTixNQUFBQSxNQUFNLENBQUNPLFNBQVAsQ0FBaUJDLE1BQWpCLENBQXdCLFFBQXhCO0FBQ0FOLE1BQUFBLFlBQVksQ0FBQ0ssU0FBYixDQUF1QkMsTUFBdkIsQ0FBOEIsUUFBOUI7QUFDQUosTUFBQUEsV0FBVyxDQUFDRyxTQUFaLENBQXNCQyxNQUF0QixDQUE2QixRQUE3QjtBQUNBUCxNQUFBQSxRQUFRLENBQUNNLFNBQVQsQ0FBbUJDLE1BQW5CLENBQTBCLFFBQTFCO0FBQ0FMLE1BQUFBLGNBQWMsQ0FBQ0ksU0FBZixDQUF5QkMsTUFBekIsQ0FBZ0MsUUFBaEM7QUFDQUgsTUFBQUEsYUFBYSxDQUFDRSxTQUFkLENBQXdCQyxNQUF4QixDQUErQixRQUEvQjtBQUNILEtBUEQsQ0FScUIsQ0FpQnJCOzs7QUFDQUwsSUFBQUEsY0FBYyxDQUFDdEIsZ0JBQWYsQ0FBZ0MsT0FBaEMsRUFBeUMsVUFBQUMsQ0FBQyxFQUFHO0FBQ3pDQSxNQUFBQSxDQUFDLENBQUNDLGNBQUY7QUFFQXVCLE1BQUFBLFdBQVc7QUFDZCxLQUpEO0FBTUFKLElBQUFBLFlBQVksQ0FBQ3JCLGdCQUFiLENBQThCLE9BQTlCLEVBQXVDLFVBQUFDLENBQUMsRUFBRztBQUN2Q0EsTUFBQUEsQ0FBQyxDQUFDQyxjQUFGO0FBRUF1QixNQUFBQSxXQUFXO0FBQ2QsS0FKRDtBQUtILEdBN0JEOztBQStCQSxTQUFPO0FBQ0g7QUFDQUcsSUFBQUEsSUFBSSxFQUFFLGdCQUFZO0FBQ2QvQixNQUFBQSxjQUFjO0FBQ2RxQixNQUFBQSxZQUFZO0FBQ2Y7QUFMRSxHQUFQO0FBT0gsQ0F4RXVCLEVBQXhCLEMsQ0EwRUE7OztBQUNBVyxNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVk7QUFDbEN4QyxFQUFBQSxpQkFBaUIsQ0FBQ3NDLElBQWxCO0FBQ0gsQ0FGRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vYXBwcy9lY29tbWVyY2UvY3VzdG9tZXJzL2RldGFpbHMvYWRkLWF1dGgtYXBwLmpzPzc3YTUiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVFVzZXJzQWRkQXV0aEFwcCA9IGZ1bmN0aW9uICgpIHtcclxuICAgIC8vIFNoYXJlZCB2YXJpYWJsZXNcclxuICAgIGNvbnN0IGVsZW1lbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3RfbW9kYWxfYWRkX2F1dGhfYXBwJyk7XHJcbiAgICBjb25zdCBtb2RhbCA9IG5ldyBib290c3RyYXAuTW9kYWwoZWxlbWVudCk7XHJcblxyXG4gICAgLy8gSW5pdCBhZGQgc2NoZWR1bGUgbW9kYWxcclxuICAgIHZhciBpbml0QWRkQXV0aEFwcCA9ICgpID0+IHtcclxuXHJcbiAgICAgICAgLy8gQ2xvc2UgYnV0dG9uIGhhbmRsZXJcclxuICAgICAgICBjb25zdCBjbG9zZUJ1dHRvbiA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEta3QtdXNlcnMtbW9kYWwtYWN0aW9uPVwiY2xvc2VcIl0nKTtcclxuICAgICAgICBjbG9zZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGUgPT4ge1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgdGV4dDogXCJBcmUgeW91IHN1cmUgeW91IHdvdWxkIGxpa2UgdG8gY2xvc2U/XCIsXHJcbiAgICAgICAgICAgICAgICBpY29uOiBcIndhcm5pbmdcIixcclxuICAgICAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXHJcbiAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCJZZXMsIGNsb3NlIGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uVGV4dDogXCJObywgcmV0dXJuXCIsXHJcbiAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcbiAgICAgICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiBcImJ0biBidG4tYWN0aXZlLWxpZ2h0XCJcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzdWx0LnZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgbW9kYWwuaGlkZSgpOyAvLyBIaWRlIG1vZGFsXHRcdFx0XHRcclxuICAgICAgICAgICAgICAgIH0gXHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgIH1cclxuXHJcbiAgICAvLyBRUiBjb2RlIHRvIHRleHQgY29kZSBzd2FwcGVyXHJcbiAgICB2YXIgaW5pdENvZGVTd2FwID0gKCkgPT4ge1xyXG4gICAgICAgIGNvbnN0IHFyQ29kZSA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInFyLWNvZGVcIl0nKTtcclxuICAgICAgICBjb25zdCB0ZXh0Q29kZSA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInRleHQtY29kZVwiXScpO1xyXG4gICAgICAgIGNvbnN0IHFyQ29kZUJ1dHRvbiA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInFyLWNvZGUtYnV0dG9uXCJdJyk7XHJcbiAgICAgICAgY29uc3QgdGV4dENvZGVCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJ0ZXh0LWNvZGUtYnV0dG9uXCJdJyk7XHJcbiAgICAgICAgY29uc3QgcXJDb2RlTGFiZWwgPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJxci1jb2RlLWxhYmVsXCJdJyk7XHJcbiAgICAgICAgY29uc3QgdGV4dENvZGVMYWJlbCA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInRleHQtY29kZS1sYWJlbFwiXScpO1xyXG5cclxuICAgICAgICBjb25zdCB0b2dnbGVDbGFzcyA9ICgpID0+e1xyXG4gICAgICAgICAgICBxckNvZGUuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHFyQ29kZUJ1dHRvbi5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgcXJDb2RlTGFiZWwuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHRleHRDb2RlLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICB0ZXh0Q29kZUJ1dHRvbi5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgdGV4dENvZGVMYWJlbC5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIC8vIFN3YXAgdG8gdGV4dCBjb2RlIGhhbmRsZXJcclxuICAgICAgICB0ZXh0Q29kZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGUgPT57XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIHRvZ2dsZUNsYXNzKCk7XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIHFyQ29kZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGUgPT57XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIHRvZ2dsZUNsYXNzKCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgZnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBpbml0QWRkQXV0aEFwcCgpO1xyXG4gICAgICAgICAgICBpbml0Q29kZVN3YXAoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcclxuICAgIEtUVXNlcnNBZGRBdXRoQXBwLmluaXQoKTtcclxufSk7Il0sIm5hbWVzIjpbIktUVXNlcnNBZGRBdXRoQXBwIiwiZWxlbWVudCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJtb2RhbCIsImJvb3RzdHJhcCIsIk1vZGFsIiwiaW5pdEFkZEF1dGhBcHAiLCJjbG9zZUJ1dHRvbiIsInF1ZXJ5U2VsZWN0b3IiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInByZXZlbnREZWZhdWx0IiwiU3dhbCIsImZpcmUiLCJ0ZXh0IiwiaWNvbiIsInNob3dDYW5jZWxCdXR0b24iLCJidXR0b25zU3R5bGluZyIsImNvbmZpcm1CdXR0b25UZXh0IiwiY2FuY2VsQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsImNhbmNlbEJ1dHRvbiIsInRoZW4iLCJyZXN1bHQiLCJ2YWx1ZSIsImhpZGUiLCJpbml0Q29kZVN3YXAiLCJxckNvZGUiLCJ0ZXh0Q29kZSIsInFyQ29kZUJ1dHRvbiIsInRleHRDb2RlQnV0dG9uIiwicXJDb2RlTGFiZWwiLCJ0ZXh0Q29kZUxhYmVsIiwidG9nZ2xlQ2xhc3MiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js"]();
/******/ 	
/******/ })()
;