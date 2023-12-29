<<<<<<< HEAD
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation.css");
/* harmony import */ var _plugins_intl_tel_input_build_js_intlTelInput_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../plugins/intl-tel-input/build/js/intlTelInput.js */ "./resources/plugins/intl-tel-input/build/js/intlTelInput.js");
/* harmony import */ var _plugins_intl_tel_input_build_js_intlTelInput_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_plugins_intl_tel_input_build_js_intlTelInput_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var swiper_bundle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/bundle */ "./node_modules/swiper/swiper-bundle.mjs");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }



// import 'swiper/css/pagination';
// import 'swiper/css/scrollbar';




// document.addEventListener("DOMContentLoaded", () => {
//     initSwipers({ spaceBetween: 5, slidesPerView: 2 });
//     function initSwipers(defaults = {}, selector = ".swiper") {
//         document.querySelectorAll(selector).forEach(swiper => {
//             const options = { ...defaults, ...JSON.parse(swiper.dataset.swiper || "{}") };
//             new Swiper(swiper, options);
//         });
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
  initSwipers({
    spaceBetween: 5,
    slidesPerView: 2
  });
  function initSwipers() {
    var defaults = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
    var selector = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : ".swiper";
    document.querySelectorAll(selector).forEach(function (swiper) {
      var options = _objectSpread(_objectSpread({}, defaults), JSON.parse(swiper.dataset.swiper || "{}"));

      // Add video-related options
      options.on = _objectSpread(_objectSpread({}, options.on), {}, {
        transitionStart: function transitionStart() {
          var videos = document.querySelectorAll('video');
          Array.prototype.forEach.call(videos, function (video) {
            video.pause();
          });
        },
        transitionEnd: function transitionEnd() {
          var activeIndex = this.activeIndex;
          var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
          var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];

          // Check if video element is defined before playing
          if (activeSlideVideo) {
            activeSlideVideo.play();
          }
        }
      });
      new swiper_bundle__WEBPACK_IMPORTED_MODULE_3__["default"](swiper, options);
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {
  document.body.addEventListener("mousemove", function (event) {
    var cursor = document.getElementById("cursor");
    var cursor2 = document.getElementById("cursor2");
    cursor.style.left = event.clientX + "px";
    cursor.style.top = event.clientY + "px";
    cursor2.style.left = event.clientX + "px";
    cursor2.style.top = event.clientY + "px";
  });
  var cursor2 = document.getElementById("cursor2");
  function addHoverClass() {
    document.body.classList.add("hover");
  }
  function removeHoverClass() {
    document.body.classList.remove("hover");
  }
  removeHoverClass();
  var hoverLinks = document.querySelectorAll(".hoverLink");
  hoverLinks.forEach(function (link) {
    link.addEventListener("mouseover", addHoverClass);
    link.addEventListener("mouseout", removeHoverClass);
  });
  var buttons = document.querySelectorAll("button");
  var anchors = document.querySelectorAll("a");
  buttons.forEach(function (button) {
    button.addEventListener("mouseover", addColorViolet);
    button.addEventListener("mouseout", removeColorViolet);
  });
  anchors.forEach(function (anchor) {
    anchor.addEventListener("mouseover", addPreload);
    anchor.addEventListener("mouseout", removePreload);
  });
  function addColorViolet() {
    document.body.classList.add("group/cyan");
  }
  function removeColorViolet() {
    document.body.classList.remove("group/cyan");
  }
  function addPreload() {
    document.body.classList.add("group/preload");
  }
  function removePreload() {
    document.body.classList.remove("group/preload");
  }

  // Active navbar on scroll
  window.addEventListener('scroll', function () {
    var scroll = window.scrollY || document.documentElement.scrollTop;
    var mainBody = document.querySelector('body');
    if (scroll <= 80) {
      mainBody.classList.remove('group/ns');
    } else {
      mainBody.classList.add('group/ns');
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var input = document.querySelector("#phone");
  var iti = _plugins_intl_tel_input_build_js_intlTelInput_js__WEBPACK_IMPORTED_MODULE_2___default()(input, _defineProperty(_defineProperty({
    nationalMode: true,
    initialCountry: 'in',
    placeholderNumberType: 'FIXED_LINE',
    onlyCountries: ["in", "us", "cn", "jp", "br", "ru", "gb", "de", "fr", "it", "es", "kr", "au", "ca", "mx", "id", "tr", "za", "ng", "eg", "ar"],
    localizedCountries: {
      "in": "India",
      fr: "Frankreich",
      de: "Deutschland",
      es: "Spanien",
      it: "Italien",
      ch: "Schweiz",
      nl: "Niederlande",
      at: "Österreich",
      dk: "Dänemark"
    },
    preferredCountries: ["in", "us"]
  }, "nationalMode", false), "separateDialCode", true));
  var phoneInput = document.getElementById('phone');
  phoneInput.addEventListener('input', function () {
    phoneInput.value = phoneInput.value.replace(/\D/g, '');
  });
});
(function () {
  'use strict';

  document.querySelectorAll('.needs-validation').forEach(function (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopPropagation();
      var invalidElements = form.querySelectorAll(':invalid');
      if (!form.checkValidity()) {
        if (invalidElements.length > 0) {
          invalidElements[0].focus();
        }
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', document.getElementById('ajxURL').value, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
          var submitBtn = event.submitter;
          submitBtn.classList.add('disabled');
          event.preventDefault();
          event.stopPropagation();
          if (xhr.readyState == 4) {
            if (xhr.status == 200) {
              var data = JSON.parse(xhr.responseText);
              window.location = document.getElementById('reUrl').value;
            } else {
              alert('Error posting feed.');
            }
          }
        };
        xhr.send(new URLSearchParams(new FormData(document.forms['feedInput'])).toString());
      }
      form.classList.add('check');
    }, false);
  });
})();

/***/ }),

/***/ "./resources/plugins/intl-tel-input/build/js/intlTelInput.js":
/*!*******************************************************************!*\
  !*** ./resources/plugins/intl-tel-input/build/js/intlTelInput.js ***!
  \*******************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

/* module decorator */ module = __webpack_require__.nmd(module);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
/*
 * International Telephone Input v18.3.3
 * https://github.com/jackocnr/intl-tel-input.git
 * Licensed under the MIT license
 */

// wrap in UMD
(function (factory) {
  if (( false ? 0 : _typeof(module)) === "object" && module.exports) module.exports = factory();else window.intlTelInput = factory();
})(function (undefined) {
  "use strict";

  return function () {
    // Array of country objects for the flag dropdown.
    // Here is the criteria for the plugin to support a given country/territory
    // - It has an iso2 code: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
    // - It has it's own country calling code (it is not a sub-region of another country): https://en.wikipedia.org/wiki/List_of_country_calling_codes
    // - It has a flag in the region-flags project: https://github.com/behdad/region-flags/tree/gh-pages/png
    // - It is supported by libphonenumber (it must be listed on this page): https://github.com/googlei18n/libphonenumber/blob/master/resources/ShortNumberMetadata.xml
    // Each country array has the following information:
    // [
    //    Country name,
    //    iso2 code,
    //    International dial code,
    //    Order (if >1 country with same dial code),
    //    Area codes
    // ]
    var allCountries = [["Afghanistan (‫افغانستان‬‎)", "af", "93"], ["Albania (Shqipëri)", "al", "355"], ["Algeria (‫الجزائر‬‎)", "dz", "213"], ["American Samoa", "as", "1", 5, ["684"]], ["Andorra", "ad", "376"], ["Angola", "ao", "244"], ["Anguilla", "ai", "1", 6, ["264"]], ["Antigua and Barbuda", "ag", "1", 7, ["268"]], ["Argentina", "ar", "54"], ["Armenia (Հայաստան)", "am", "374"], ["Aruba", "aw", "297"], ["Ascension Island", "ac", "247"], ["Australia", "au", "61", 0], ["Austria (Österreich)", "at", "43"], ["Azerbaijan (Azərbaycan)", "az", "994"], ["Bahamas", "bs", "1", 8, ["242"]], ["Bahrain (‫البحرين‬‎)", "bh", "973"], ["Bangladesh (বাংলাদেশ)", "bd", "880"], ["Barbados", "bb", "1", 9, ["246"]], ["Belarus (Беларусь)", "by", "375"], ["Belgium (België)", "be", "32"], ["Belize", "bz", "501"], ["Benin (Bénin)", "bj", "229"], ["Bermuda", "bm", "1", 10, ["441"]], ["Bhutan (འབྲུག)", "bt", "975"], ["Bolivia", "bo", "591"], ["Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387"], ["Botswana", "bw", "267"], ["Brazil (Brasil)", "br", "55"], ["British Indian Ocean Territory", "io", "246"], ["British Virgin Islands", "vg", "1", 11, ["284"]], ["Brunei", "bn", "673"], ["Bulgaria (България)", "bg", "359"], ["Burkina Faso", "bf", "226"], ["Burundi (Uburundi)", "bi", "257"], ["Cambodia (កម្ពុជា)", "kh", "855"], ["Cameroon (Cameroun)", "cm", "237"], ["Canada", "ca", "1", 1, ["204", "226", "236", "249", "250", "263", "289", "306", "343", "354", "365", "367", "368", "382", "387", "403", "416", "418", "428", "431", "437", "438", "450", "584", "468", "474", "506", "514", "519", "548", "579", "581", "584", "587", "604", "613", "639", "647", "672", "683", "705", "709", "742", "753", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]], ["Cape Verde (Kabu Verdi)", "cv", "238"], ["Caribbean Netherlands", "bq", "599", 1, ["3", "4", "7"]], ["Cayman Islands", "ky", "1", 12, ["345"]], ["Central African Republic (République centrafricaine)", "cf", "236"], ["Chad (Tchad)", "td", "235"], ["Chile", "cl", "56"], ["China (中国)", "cn", "86"], ["Christmas Island", "cx", "61", 2, ["89164"]], ["Cocos (Keeling) Islands", "cc", "61", 1, ["89162"]], ["Colombia", "co", "57"], ["Comoros (‫جزر القمر‬‎)", "km", "269"], ["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243"], ["Congo (Republic) (Congo-Brazzaville)", "cg", "242"], ["Cook Islands", "ck", "682"], ["Costa Rica", "cr", "506"], ["Côte d’Ivoire", "ci", "225"], ["Croatia (Hrvatska)", "hr", "385"], ["Cuba", "cu", "53"], ["Curaçao", "cw", "599", 0], ["Cyprus (Κύπρος)", "cy", "357"], ["Czech Republic (Česká republika)", "cz", "420"], ["Denmark (Danmark)", "dk", "45"], ["Djibouti", "dj", "253"], ["Dominica", "dm", "1", 13, ["767"]], ["Dominican Republic (República Dominicana)", "do", "1", 2, ["809", "829", "849"]], ["Ecuador", "ec", "593"], ["Egypt (‫مصر‬‎)", "eg", "20"], ["El Salvador", "sv", "503"], ["Equatorial Guinea (Guinea Ecuatorial)", "gq", "240"], ["Eritrea", "er", "291"], ["Estonia (Eesti)", "ee", "372"], ["Eswatini", "sz", "268"], ["Ethiopia", "et", "251"], ["Falkland Islands (Islas Malvinas)", "fk", "500"], ["Faroe Islands (Føroyar)", "fo", "298"], ["Fiji", "fj", "679"], ["Finland (Suomi)", "fi", "358", 0], ["France", "fr", "33"], ["French Guiana (Guyane française)", "gf", "594"], ["French Polynesia (Polynésie française)", "pf", "689"], ["Gabon", "ga", "241"], ["Gambia", "gm", "220"], ["Georgia (საქართველო)", "ge", "995"], ["Germany (Deutschland)", "de", "49"], ["Ghana (Gaana)", "gh", "233"], ["Gibraltar", "gi", "350"], ["Greece (Ελλάδα)", "gr", "30"], ["Greenland (Kalaallit Nunaat)", "gl", "299"], ["Grenada", "gd", "1", 14, ["473"]], ["Guadeloupe", "gp", "590", 0], ["Guam", "gu", "1", 15, ["671"]], ["Guatemala", "gt", "502"], ["Guernsey", "gg", "44", 1, ["1481", "7781", "7839", "7911"]], ["Guinea (Guinée)", "gn", "224"], ["Guinea-Bissau (Guiné Bissau)", "gw", "245"], ["Guyana", "gy", "592"], ["Haiti", "ht", "509"], ["Honduras", "hn", "504"], ["Hong Kong (香港)", "hk", "852"], ["Hungary (Magyarország)", "hu", "36"], ["Iceland (Ísland)", "is", "354"], ["India (भारत)", "in", "91"], ["Indonesia", "id", "62"], ["Iran (‫ایران‬‎)", "ir", "98"], ["Iraq (‫العراق‬‎)", "iq", "964"], ["Ireland", "ie", "353"], ["Isle of Man", "im", "44", 2, ["1624", "74576", "7524", "7924", "7624"]], ["Israel (‫ישראל‬‎)", "il", "972"], ["Italy (Italia)", "it", "39", 0], ["Jamaica", "jm", "1", 4, ["876", "658"]], ["Japan (日本)", "jp", "81"], ["Jersey", "je", "44", 3, ["1534", "7509", "7700", "7797", "7829", "7937"]], ["Jordan (‫الأردن‬‎)", "jo", "962"], ["Kazakhstan (Казахстан)", "kz", "7", 1, ["33", "7"]], ["Kenya", "ke", "254"], ["Kiribati", "ki", "686"], ["Kosovo", "xk", "383"], ["Kuwait (‫الكويت‬‎)", "kw", "965"], ["Kyrgyzstan (Кыргызстан)", "kg", "996"], ["Laos (ລາວ)", "la", "856"], ["Latvia (Latvija)", "lv", "371"], ["Lebanon (‫لبنان‬‎)", "lb", "961"], ["Lesotho", "ls", "266"], ["Liberia", "lr", "231"], ["Libya (‫ليبيا‬‎)", "ly", "218"], ["Liechtenstein", "li", "423"], ["Lithuania (Lietuva)", "lt", "370"], ["Luxembourg", "lu", "352"], ["Macau (澳門)", "mo", "853"], ["Madagascar (Madagasikara)", "mg", "261"], ["Malawi", "mw", "265"], ["Malaysia", "my", "60"], ["Maldives", "mv", "960"], ["Mali", "ml", "223"], ["Malta", "mt", "356"], ["Marshall Islands", "mh", "692"], ["Martinique", "mq", "596"], ["Mauritania (‫موريتانيا‬‎)", "mr", "222"], ["Mauritius (Moris)", "mu", "230"], ["Mayotte", "yt", "262", 1, ["269", "639"]], ["Mexico (México)", "mx", "52"], ["Micronesia", "fm", "691"], ["Moldova (Republica Moldova)", "md", "373"], ["Monaco", "mc", "377"], ["Mongolia (Монгол)", "mn", "976"], ["Montenegro (Crna Gora)", "me", "382"], ["Montserrat", "ms", "1", 16, ["664"]], ["Morocco (‫المغرب‬‎)", "ma", "212", 0], ["Mozambique (Moçambique)", "mz", "258"], ["Myanmar (Burma) (မြန်မာ)", "mm", "95"], ["Namibia (Namibië)", "na", "264"], ["Nauru", "nr", "674"], ["Nepal (नेपाल)", "np", "977"], ["Netherlands (Nederland)", "nl", "31"], ["New Caledonia (Nouvelle-Calédonie)", "nc", "687"], ["New Zealand", "nz", "64"], ["Nicaragua", "ni", "505"], ["Niger (Nijar)", "ne", "227"], ["Nigeria", "ng", "234"], ["Niue", "nu", "683"], ["Norfolk Island", "nf", "672"], ["North Korea (조선 민주주의 인민 공화국)", "kp", "850"], ["North Macedonia (Северна Македонија)", "mk", "389"], ["Northern Mariana Islands", "mp", "1", 17, ["670"]], ["Norway (Norge)", "no", "47", 0], ["Oman (‫عُمان‬‎)", "om", "968"], ["Pakistan (‫پاکستان‬‎)", "pk", "92"], ["Palau", "pw", "680"], ["Palestine (‫فلسطين‬‎)", "ps", "970"], ["Panama (Panamá)", "pa", "507"], ["Papua New Guinea", "pg", "675"], ["Paraguay", "py", "595"], ["Peru (Perú)", "pe", "51"], ["Philippines", "ph", "63"], ["Poland (Polska)", "pl", "48"], ["Portugal", "pt", "351"], ["Puerto Rico", "pr", "1", 3, ["787", "939"]], ["Qatar (‫قطر‬‎)", "qa", "974"], ["Réunion (La Réunion)", "re", "262", 0], ["Romania (România)", "ro", "40"], ["Russia (Россия)", "ru", "7", 0], ["Rwanda", "rw", "250"], ["Saint Barthélemy", "bl", "590", 1], ["Saint Helena", "sh", "290"], ["Saint Kitts and Nevis", "kn", "1", 18, ["869"]], ["Saint Lucia", "lc", "1", 19, ["758"]], ["Saint Martin (Saint-Martin (partie française))", "mf", "590", 2], ["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508"], ["Saint Vincent and the Grenadines", "vc", "1", 20, ["784"]], ["Samoa", "ws", "685"], ["San Marino", "sm", "378"], ["São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239"], ["Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966"], ["Senegal (Sénégal)", "sn", "221"], ["Serbia (Србија)", "rs", "381"], ["Seychelles", "sc", "248"], ["Sierra Leone", "sl", "232"], ["Singapore", "sg", "65"], ["Sint Maarten", "sx", "1", 21, ["721"]], ["Slovakia (Slovensko)", "sk", "421"], ["Slovenia (Slovenija)", "si", "386"], ["Solomon Islands", "sb", "677"], ["Somalia (Soomaaliya)", "so", "252"], ["South Africa", "za", "27"], ["South Korea (대한민국)", "kr", "82"], ["South Sudan (‫جنوب السودان‬‎)", "ss", "211"], ["Spain (España)", "es", "34"], ["Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94"], ["Sudan (‫السودان‬‎)", "sd", "249"], ["Suriname", "sr", "597"], ["Svalbard and Jan Mayen", "sj", "47", 1, ["79"]], ["Sweden (Sverige)", "se", "46"], ["Switzerland (Schweiz)", "ch", "41"], ["Syria (‫سوريا‬‎)", "sy", "963"], ["Taiwan (台灣)", "tw", "886"], ["Tajikistan", "tj", "992"], ["Tanzania", "tz", "255"], ["Thailand (ไทย)", "th", "66"], ["Timor-Leste", "tl", "670"], ["Togo", "tg", "228"], ["Tokelau", "tk", "690"], ["Tonga", "to", "676"], ["Trinidad and Tobago", "tt", "1", 22, ["868"]], ["Tunisia (‫تونس‬‎)", "tn", "216"], ["Turkey (Türkiye)", "tr", "90"], ["Turkmenistan", "tm", "993"], ["Turks and Caicos Islands", "tc", "1", 23, ["649"]], ["Tuvalu", "tv", "688"], ["U.S. Virgin Islands", "vi", "1", 24, ["340"]], ["Uganda", "ug", "256"], ["Ukraine (Україна)", "ua", "380"], ["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971"], ["United Kingdom", "gb", "44", 0], ["United States", "us", "1", 0], ["Uruguay", "uy", "598"], ["Uzbekistan (Oʻzbekiston)", "uz", "998"], ["Vanuatu", "vu", "678"], ["Vatican City (Città del Vaticano)", "va", "39", 1, ["06698"]], ["Venezuela", "ve", "58"], ["Vietnam (Việt Nam)", "vn", "84"], ["Wallis and Futuna (Wallis-et-Futuna)", "wf", "681"], ["Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1, ["5288", "5289"]], ["Yemen (‫اليمن‬‎)", "ye", "967"], ["Zambia", "zm", "260"], ["Zimbabwe", "zw", "263"], ["Åland Islands", "ax", "358", 1, ["18"]]];
    // loop over all of the countries above, restructuring the data to be objects with named keys
    for (var i = 0; i < allCountries.length; i++) {
      var c = allCountries[i];
      allCountries[i] = {
        name: c[0],
        iso2: c[1],
        dialCode: c[2],
        priority: c[3] || 0,
        areaCodes: c[4] || null
      };
    }
    "use strict";
    function _objectSpread(target) {
      for (var i = 1; i < arguments.length; i++) {
        var source = arguments[i] != null ? Object(arguments[i]) : {};
        var ownKeys = Object.keys(source);
        if (typeof Object.getOwnPropertySymbols === "function") {
          ownKeys.push.apply(ownKeys, Object.getOwnPropertySymbols(source).filter(function (sym) {
            return Object.getOwnPropertyDescriptor(source, sym).enumerable;
          }));
        }
        ownKeys.forEach(function (key) {
          _defineProperty(target, key, source[key]);
        });
      }
      return target;
    }
    function _defineProperty(obj, key, value) {
      key = _toPropertyKey(key);
      if (key in obj) {
        Object.defineProperty(obj, key, {
          value: value,
          enumerable: true,
          configurable: true,
          writable: true
        });
      } else {
        obj[key] = value;
      }
      return obj;
    }
    function _classCallCheck(instance, Constructor) {
      if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
      }
    }
    function _defineProperties(target, props) {
      for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ("value" in descriptor) descriptor.writable = true;
        Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor);
      }
    }
    function _createClass(Constructor, protoProps, staticProps) {
      if (protoProps) _defineProperties(Constructor.prototype, protoProps);
      if (staticProps) _defineProperties(Constructor, staticProps);
      Object.defineProperty(Constructor, "prototype", {
        writable: false
      });
      return Constructor;
    }
    function _toPropertyKey(arg) {
      var key = _toPrimitive(arg, "string");
      return _typeof(key) === "symbol" ? key : String(key);
    }
    function _toPrimitive(input, hint) {
      if (_typeof(input) !== "object" || input === null) return input;
      var prim = input[Symbol.toPrimitive];
      if (prim !== undefined) {
        var res = prim.call(input, hint || "default");
        if (_typeof(res) !== "object") return res;
        throw new TypeError("@@toPrimitive must return a primitive value.");
      }
      return (hint === "string" ? String : Number)(input);
    }
    var intlTelInputGlobals = {
      getInstance: function getInstance(input) {
        var id = input.getAttribute("data-intl-tel-input-id");
        return window.intlTelInputGlobals.instances[id];
      },
      instances: {},
      // using a global like this allows us to mock it in the tests
      documentReady: function documentReady() {
        return document.readyState === "complete";
      }
    };
    if ((typeof window === "undefined" ? "undefined" : _typeof(window)) === "object") {
      window.intlTelInputGlobals = intlTelInputGlobals;
    }
    // these vars persist through all instances of the plugin
    var id = 0;
    var defaults = {
      // whether or not to allow the dropdown
      allowDropdown: true,
      // auto insert dial code (A) on init, (B) on user selecting a country, (C) on calling setCountry
      // also listen for blur/submit and auto remove dial code if that's all there is
      autoInsertDialCode: false,
      // add a placeholder in the input with an example number for the selected country
      autoPlaceholder: "polite",
      // modify the parentClass
      customContainer: "",
      // modify the auto placeholder
      customPlaceholder: null,
      // append menu to specified element
      dropdownContainer: null,
      // don't display these countries
      excludeCountries: [],
      // format the input value during initialisation and on setNumber
      formatOnDisplay: true,
      // geoIp lookup function
      geoIpLookup: null,
      // inject a hidden input with this name, and on submit, populate it with the result of getNumber
      hiddenInput: "",
      // initial country
      initialCountry: "",
      // localized country names e.g. { 'de': 'Deutschland' }
      localizedCountries: null,
      // national vs international formatting for numbers e.g. placeholders and displaying existing numbers
      nationalMode: true,
      // display only these countries
      onlyCountries: [],
      // number type to use for placeholders
      placeholderNumberType: "MOBILE",
      // the countries at the top of the list. defaults to united states and united kingdom
      preferredCountries: ["us", "gb"],
      // display the country dial code next to the selected flag
      separateDialCode: false,
      // option to hide the flags - must be used with separateDialCode, or allowDropdown=false
      showFlags: true,
      // use full screen popup instead of dropdown for country list
      useFullscreenPopup:
      // we cannot just test screen size as some smartphones/website meta tags will report desktop
      // resolutions
      // Note: to target Android Mobiles (and not Tablets), we must find 'Android' and 'Mobile'
      /Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth <= 500,
      // specify the path to the libphonenumber script to enable validation/formatting
      utilsScript: ""
    };
    // https://en.wikipedia.org/wiki/List_of_North_American_Numbering_Plan_area_codes#Non-geographic_area_codes
    var regionlessNanpNumbers = ["800", "822", "833", "844", "855", "866", "877", "880", "881", "882", "883", "884", "885", "886", "887", "888", "889"];
    // utility function to iterate over an object. can't use Object.entries or native forEach because
    // of IE11
    var forEachProp = function forEachProp(obj, callback) {
      var keys = Object.keys(obj);
      for (var i = 0; i < keys.length; i++) {
        callback(keys[i], obj[keys[i]]);
      }
    };
    // run a method on each instance of the plugin
    var forEachInstance = function forEachInstance(method) {
      forEachProp(window.intlTelInputGlobals.instances, function (key) {
        window.intlTelInputGlobals.instances[key][method]();
      });
    };
    // this is our plugin class that we will create an instance of
    // eslint-disable-next-line no-unused-vars
    var Iti = /*#__PURE__*/function () {
      function Iti(input, options) {
        var _this = this;
        _classCallCheck(this, Iti);
        this.id = id++;
        this.telInput = input;
        this.activeItem = null;
        this.highlightedItem = null;
        // process specified options / defaults
        // alternative to Object.assign, which isn't supported by IE11
        var customOptions = options || {};
        this.options = {};
        forEachProp(defaults, function (key, value) {
          _this.options[key] = customOptions.hasOwnProperty(key) ? customOptions[key] : value;
        });
        this.hadInitialPlaceholder = Boolean(input.getAttribute("placeholder"));
      }
      _createClass(Iti, [{
        key: "_init",
        value: function _init() {
          var _this2 = this;
          // if in nationalMode, do not insert dial codes
          if (this.options.nationalMode) {
            this.options.autoInsertDialCode = false;
          }
          // if separateDialCode enabled, do not insert dial codes
          if (this.options.separateDialCode) {
            this.options.autoInsertDialCode = false;
          }
          // force showFlags=true if there's a dropdown and we're not displaying the dial code,
          // as otherwise you just have a down arrow on it's own which doesn't make sense
          var forceShowFlags = this.options.allowDropdown && !this.options.separateDialCode;
          if (!this.options.showFlags && forceShowFlags) {
            this.options.showFlags = true;
          }
          if (this.options.useFullscreenPopup) {
            // trigger the mobile dropdown css
            document.body.classList.add("iti-fullscreen-popup");
            // on mobile, we want a full screen dropdown, so we must append it to the body
            if (!this.options.dropdownContainer) {
              this.options.dropdownContainer = document.body;
            }
          }
          // check if input has one parent with RTL
          this.isRTL = !!this.telInput.closest("[dir=rtl]");
          // these promises get resolved when their individual requests complete
          // this way the dev can do something like iti.promise.then(...) to know when all requests are
          // complete
          if (typeof Promise !== "undefined") {
            var autoCountryPromise = new Promise(function (resolve, reject) {
              _this2.resolveAutoCountryPromise = resolve;
              _this2.rejectAutoCountryPromise = reject;
            });
            var utilsScriptPromise = new Promise(function (resolve, reject) {
              _this2.resolveUtilsScriptPromise = resolve;
              _this2.rejectUtilsScriptPromise = reject;
            });
            this.promise = Promise.all([autoCountryPromise, utilsScriptPromise]);
          } else {
            // prevent errors when Promise doesn't exist
            this.resolveAutoCountryPromise = this.rejectAutoCountryPromise = function () {};
            this.resolveUtilsScriptPromise = this.rejectUtilsScriptPromise = function () {};
          }
          // in various situations there could be no country selected initially, but we need to be able
          // to assume this variable exists
          this.selectedCountryData = {};
          // process all the data: onlyCountries, excludeCountries, preferredCountries etc
          this._processCountryData();
          // generate the markup
          this._generateMarkup();
          // set the initial state of the input value and the selected flag
          this._setInitialState();
          // start all of the event listeners: autoInsertDialCode, input keydown, selectedFlag click
          this._initListeners();
          // utils script, and auto country
          this._initRequests();
        }
      }, {
        key: "_processCountryData",
        value: function _processCountryData() {
          // process onlyCountries or excludeCountries array if present
          this._processAllCountries();
          // process the countryCodes map
          this._processCountryCodes();
          // process the preferredCountries
          this._processPreferredCountries();
          // translate countries according to localizedCountries option
          if (this.options.localizedCountries) {
            this._translateCountriesByLocale();
          }
          // sort countries by name
          if (this.options.onlyCountries.length || this.options.localizedCountries) {
            this.countries.sort(this._countryNameSort);
          }
        }
      }, {
        key: "_addCountryCode",
        value: function _addCountryCode(iso2, countryCode, priority) {
          if (countryCode.length > this.countryCodeMaxLen) {
            this.countryCodeMaxLen = countryCode.length;
          }
          if (!this.countryCodes.hasOwnProperty(countryCode)) {
            this.countryCodes[countryCode] = [];
          }
          // bail if we already have this country for this countryCode
          for (var i = 0; i < this.countryCodes[countryCode].length; i++) {
            if (this.countryCodes[countryCode][i] === iso2) {
              return;
            }
          }
          // check for undefined as 0 is falsy
          var index = priority !== undefined ? priority : this.countryCodes[countryCode].length;
          this.countryCodes[countryCode][index] = iso2;
        }
      }, {
        key: "_processAllCountries",
        value: function _processAllCountries() {
          if (this.options.onlyCountries.length) {
            var lowerCaseOnlyCountries = this.options.onlyCountries.map(function (country) {
              return country.toLowerCase();
            });
            this.countries = allCountries.filter(function (country) {
              return lowerCaseOnlyCountries.indexOf(country.iso2) > -1;
            });
          } else if (this.options.excludeCountries.length) {
            var lowerCaseExcludeCountries = this.options.excludeCountries.map(function (country) {
              return country.toLowerCase();
            });
            this.countries = allCountries.filter(function (country) {
              return lowerCaseExcludeCountries.indexOf(country.iso2) === -1;
            });
          } else {
            this.countries = allCountries;
          }
        }
      }, {
        key: "_translateCountriesByLocale",
        value: function _translateCountriesByLocale() {
          for (var i = 0; i < this.countries.length; i++) {
            var iso = this.countries[i].iso2.toLowerCase();
            if (this.options.localizedCountries.hasOwnProperty(iso)) {
              this.countries[i].name = this.options.localizedCountries[iso];
            }
          }
        }
      }, {
        key: "_countryNameSort",
        value: function _countryNameSort(a, b) {
          if (a.name < b.name) {
            return -1;
          }
          if (a.name > b.name) {
            return 1;
          }
          return 0;
        }
      }, {
        key: "_processCountryCodes",
        value: function _processCountryCodes() {
          this.countryCodeMaxLen = 0;
          // here we store just dial codes
          this.dialCodes = {};
          // here we store "country codes" (both dial codes and their area codes)
          this.countryCodes = {};
          // first: add dial codes
          for (var i = 0; i < this.countries.length; i++) {
            var c = this.countries[i];
            if (!this.dialCodes[c.dialCode]) {
              this.dialCodes[c.dialCode] = true;
            }
            this._addCountryCode(c.iso2, c.dialCode, c.priority);
          }
          // next: add area codes
          // this is a second loop over countries, to make sure we have all of the "root" countries
          // already in the map, so that we can access them, as each time we add an area code substring
          // to the map, we also need to include the "root" country's code, as that also matches
          for (var _i = 0; _i < this.countries.length; _i++) {
            var _c = this.countries[_i];
            // area codes
            if (_c.areaCodes) {
              var rootCountryCode = this.countryCodes[_c.dialCode][0];
              // for each area code
              for (var j = 0; j < _c.areaCodes.length; j++) {
                var areaCode = _c.areaCodes[j];
                // for each digit in the area code to add all partial matches as well
                for (var k = 1; k < areaCode.length; k++) {
                  var partialDialCode = _c.dialCode + areaCode.substr(0, k);
                  // start with the root country, as that also matches this dial code
                  this._addCountryCode(rootCountryCode, partialDialCode);
                  this._addCountryCode(_c.iso2, partialDialCode);
                }
                // add the full area code
                this._addCountryCode(_c.iso2, _c.dialCode + areaCode);
              }
            }
          }
        }
      }, {
        key: "_processPreferredCountries",
        value: function _processPreferredCountries() {
          this.preferredCountries = [];
          for (var i = 0; i < this.options.preferredCountries.length; i++) {
            var countryCode = this.options.preferredCountries[i].toLowerCase();
            var countryData = this._getCountryData(countryCode, false, true);
            if (countryData) {
              this.preferredCountries.push(countryData);
            }
          }
        }
      }, {
        key: "_createEl",
        value: function _createEl(name, attrs, container) {
          var el = document.createElement(name);
          if (attrs) {
            forEachProp(attrs, function (key, value) {
              return el.setAttribute(key, value);
            });
          }
          if (container) {
            container.appendChild(el);
          }
          return el;
        }
      }, {
        key: "_generateMarkup",
        value: function _generateMarkup() {
          // if autocomplete does not exist on the element and its form, then
          // prevent autocomplete as there's no safe, cross-browser event we can react to, so it can
          // easily put the plugin in an inconsistent state e.g. the wrong flag selected for the
          // autocompleted number, which on submit could mean wrong number is saved
          if (!this.telInput.hasAttribute("autocomplete") && !(this.telInput.form && this.telInput.form.hasAttribute("autocomplete"))) {
            this.telInput.setAttribute("autocomplete", "off");
          }
          var _this$options = this.options,
            allowDropdown = _this$options.allowDropdown,
            separateDialCode = _this$options.separateDialCode,
            showFlags = _this$options.showFlags,
            customContainer = _this$options.customContainer,
            hiddenInput = _this$options.hiddenInput,
            dropdownContainer = _this$options.dropdownContainer;
          // containers (mostly for positioning)
          var parentClass = "iti";
          if (allowDropdown) {
            parentClass += " iti--allow-dropdown";
          }
          if (separateDialCode) {
            parentClass += " iti--separate-dial-code";
          }
          if (showFlags) {
            parentClass += " iti--show-flags";
          }
          if (customContainer) {
            parentClass += " ".concat(customContainer);
          }
          var wrapper = this._createEl("div", {
            "class": parentClass
          });
          this.telInput.parentNode.insertBefore(wrapper, this.telInput);
          // only hide the flagsContainer if allowDropdown, showFlags and separateDialCode are all false
          var showFlagsContainer = allowDropdown || showFlags || separateDialCode;
          if (showFlagsContainer) {
            this.flagsContainer = this._createEl("div", {
              "class": "iti__flag-container"
            }, wrapper);
          }
          wrapper.appendChild(this.telInput);
          // selected flag (displayed to left of input)
          // using Aria tags for "Select-Only Combobox Example"
          // https://www.w3.org/WAI/ARIA/apg/patterns/combobox/examples/combobox-select-only/
          if (showFlagsContainer) {
            this.selectedFlag = this._createEl("div", _objectSpread({
              "class": "iti__selected-flag"
            }, allowDropdown && {
              role: "combobox",
              "aria-haspopup": "listbox",
              "aria-controls": "iti-".concat(this.id, "__country-listbox"),
              "aria-expanded": "false",
              "aria-label": "Telephone country code"
            }), this.flagsContainer);
          }
          if (showFlags) {
            this.selectedFlagInner = this._createEl("div", {
              "class": "iti__flag"
            }, this.selectedFlag);
          }
          if (this.selectedFlag && this.telInput.disabled) {
            this.selectedFlag.setAttribute("aria-disabled", "true");
          }
          if (separateDialCode) {
            this.selectedDialCode = this._createEl("div", {
              "class": "iti__selected-dial-code"
            }, this.selectedFlag);
          }
          if (allowDropdown) {
            if (!this.telInput.disabled) {
              // make element focusable and tab navigable
              this.selectedFlag.setAttribute("tabindex", "0");
            }
            this.dropdownArrow = this._createEl("div", {
              "class": "iti__arrow"
            }, this.selectedFlag);
            // country dropdown: preferred countries, then divider, then all countries
            this.countryList = this._createEl("ul", {
              "class": "iti__country-list iti__hide",
              id: "iti-".concat(this.id, "__country-listbox"),
              role: "listbox",
              "aria-label": "List of countries"
            });
            if (this.preferredCountries.length) {
              this._appendListItems(this.preferredCountries, "iti__preferred", true);
              this._createEl("li", {
                "class": "iti__divider",
                "aria-hidden": "true"
              }, this.countryList);
            }
            this._appendListItems(this.countries, "iti__standard");
            // create dropdownContainer markup
            if (dropdownContainer) {
              this.dropdown = this._createEl("div", {
                "class": "iti iti--container"
              });
              this.dropdown.appendChild(this.countryList);
            } else {
              this.flagsContainer.appendChild(this.countryList);
            }
          }
          if (hiddenInput) {
            var hiddenInputName = hiddenInput;
            var name = this.telInput.getAttribute("name");
            if (name) {
              var i = name.lastIndexOf("[");
              // if input name contains square brackets, then give the hidden input the same name,
              // replacing the contents of the last set of brackets with the given hiddenInput name
              if (i !== -1) {
                hiddenInputName = "".concat(name.substr(0, i), "[").concat(hiddenInputName, "]");
              }
            }
            this.hiddenInput = this._createEl("input", {
              type: "hidden",
              name: hiddenInputName
            });
            wrapper.appendChild(this.hiddenInput);
          }
        }
      }, {
        key: "_appendListItems",
        value: function _appendListItems(countries, className, preferred) {
          // we create so many DOM elements, it is faster to build a temp string
          // and then add everything to the DOM in one go at the end
          var tmp = "";
          // for each country
          for (var i = 0; i < countries.length; i++) {
            var c = countries[i];
            var idSuffix = preferred ? "-preferred" : "";
            // open the list item
            tmp += "<li class='iti__country ".concat(className, "' tabIndex='-1' id='iti-").concat(this.id, "__item-").concat(c.iso2).concat(idSuffix, "' role='option' data-dial-code='").concat(c.dialCode, "' data-country-code='").concat(c.iso2, "' aria-selected='false'>");
            // add the flag
            if (this.options.showFlags) {
              tmp += "<div class='iti__flag-box'><div class='iti__flag iti__".concat(c.iso2, "'></div></div>");
            }
            // and the country name and dial code
            tmp += "<span class='iti__country-name'>".concat(c.name, "</span>");
            tmp += "<span class='iti__dial-code'>+".concat(c.dialCode, "</span>");
            // close the list item
            tmp += "</li>";
          }
          this.countryList.insertAdjacentHTML("beforeend", tmp);
        }
      }, {
        key: "_setInitialState",
        value: function _setInitialState() {
          // fix firefox bug: when first load page (with input with value set to number with intl dial
          // code) and initialising plugin removes the dial code from the input, then refresh page,
          // and we try to init plugin again but this time on number without dial code so get grey flag
          var attributeValue = this.telInput.getAttribute("value");
          var inputValue = this.telInput.value;
          var useAttribute = attributeValue && attributeValue.charAt(0) === "+" && (!inputValue || inputValue.charAt(0) !== "+");
          var val = useAttribute ? attributeValue : inputValue;
          var dialCode = this._getDialCode(val);
          var isRegionlessNanp = this._isRegionlessNanp(val);
          var _this$options2 = this.options,
            initialCountry = _this$options2.initialCountry,
            autoInsertDialCode = _this$options2.autoInsertDialCode;
          // if we already have a dial code, and it's not a regionlessNanp, we can go ahead and set the
          // flag, else fall back to the default country
          if (dialCode && !isRegionlessNanp) {
            this._updateFlagFromNumber(val);
          } else if (initialCountry !== "auto") {
            // see if we should select a flag
            if (initialCountry) {
              this._setFlag(initialCountry.toLowerCase());
            } else {
              if (dialCode && isRegionlessNanp) {
                // has intl dial code, is regionless nanp, and no initialCountry, so default to US
                this._setFlag("us");
              } else {
                // no dial code and no initialCountry, so default to first in list
                this.defaultCountry = this.preferredCountries.length ? this.preferredCountries[0].iso2 : this.countries[0].iso2;
                if (!val) {
                  this._setFlag(this.defaultCountry);
                }
              }
            }
            // if empty and autoInsertDialCode then insert the dial code
            if (!val && autoInsertDialCode) {
              this.telInput.value = "+".concat(this.selectedCountryData.dialCode);
            }
          }
          // NOTE: if initialCountry is set to auto, that will be handled separately
          // format - note this wont be run after _updateDialCode as that's only called if no val
          if (val) {
            this._updateValFromNumber(val);
          }
        }
      }, {
        key: "_initListeners",
        value: function _initListeners() {
          this._initKeyListeners();
          if (this.options.autoInsertDialCode) {
            this._initBlurListeners();
          }
          if (this.options.allowDropdown) {
            this._initDropdownListeners();
          }
          if (this.hiddenInput) {
            this._initHiddenInputListener();
          }
        }
      }, {
        key: "_initHiddenInputListener",
        value: function _initHiddenInputListener() {
          var _this3 = this;
          this._handleHiddenInputSubmit = function () {
            _this3.hiddenInput.value = _this3.getNumber();
          };
          if (this.telInput.form) {
            this.telInput.form.addEventListener("submit", this._handleHiddenInputSubmit);
          }
        }
      }, {
        key: "_getClosestLabel",
        value: function _getClosestLabel() {
          var el = this.telInput;
          while (el && el.tagName !== "LABEL") {
            el = el.parentNode;
          }
          return el;
        }
      }, {
        key: "_initDropdownListeners",
        value: function _initDropdownListeners() {
          var _this4 = this;
          // hack for input nested inside label (which is valid markup): clicking the selected-flag to
          // open the dropdown would then automatically trigger a 2nd click on the input which would
          // close it again
          this._handleLabelClick = function (e) {
            // if the dropdown is closed, then focus the input, else ignore the click
            if (_this4.countryList.classList.contains("iti__hide")) {
              _this4.telInput.focus();
            } else {
              e.preventDefault();
            }
          };
          var label = this._getClosestLabel();
          if (label) {
            label.addEventListener("click", this._handleLabelClick);
          }
          // toggle country dropdown on click
          this._handleClickSelectedFlag = function () {
            // only intercept this event if we're opening the dropdown
            // else let it bubble up to the top ("click-off-to-close" listener)
            // we cannot just stopPropagation as it may be needed to close another instance
            if (_this4.countryList.classList.contains("iti__hide") && !_this4.telInput.disabled && !_this4.telInput.readOnly) {
              _this4._showDropdown();
            }
          };
          this.selectedFlag.addEventListener("click", this._handleClickSelectedFlag);
          // open dropdown list if currently focused
          this._handleFlagsContainerKeydown = function (e) {
            var isDropdownHidden = _this4.countryList.classList.contains("iti__hide");
            if (isDropdownHidden && ["ArrowUp", "Up", "ArrowDown", "Down", " ", "Enter"].indexOf(e.key) !== -1) {
              // prevent form from being submitted if "ENTER" was pressed
              e.preventDefault();
              // prevent event from being handled again by document
              e.stopPropagation();
              _this4._showDropdown();
            }
            // allow navigation from dropdown to input on TAB
            if (e.key === "Tab") {
              _this4._closeDropdown();
            }
          };
          this.flagsContainer.addEventListener("keydown", this._handleFlagsContainerKeydown);
        }
      }, {
        key: "_initRequests",
        value: function _initRequests() {
          var _this5 = this;
          // if the user has specified the path to the utils script, fetch it on window.load, else resolve
          if (this.options.utilsScript && !window.intlTelInputUtils) {
            // if the plugin is being initialised after the window.load event has already been fired
            if (window.intlTelInputGlobals.documentReady()) {
              window.intlTelInputGlobals.loadUtils(this.options.utilsScript);
            } else {
              // wait until the load event so we don't block any other requests e.g. the flags image
              window.addEventListener("load", function () {
                window.intlTelInputGlobals.loadUtils(_this5.options.utilsScript);
              });
            }
          } else {
            this.resolveUtilsScriptPromise();
          }
          if (this.options.initialCountry === "auto") {
            this._loadAutoCountry();
          } else {
            this.resolveAutoCountryPromise();
          }
        }
      }, {
        key: "_loadAutoCountry",
        value: function _loadAutoCountry() {
          // 3 options:
          // 1) already loaded (we're done)
          // 2) not already started loading (start)
          // 3) already started loading (do nothing - just wait for loading callback to fire)
          if (window.intlTelInputGlobals.autoCountry) {
            this.handleAutoCountry();
          } else if (!window.intlTelInputGlobals.startedLoadingAutoCountry) {
            // don't do this twice!
            window.intlTelInputGlobals.startedLoadingAutoCountry = true;
            if (typeof this.options.geoIpLookup === "function") {
              this.options.geoIpLookup(function (countryCode) {
                window.intlTelInputGlobals.autoCountry = countryCode.toLowerCase();
                // tell all instances the auto country is ready
                // TODO: this should just be the current instances
                // UPDATE: use setTimeout in case their geoIpLookup function calls this callback straight
                // away (e.g. if they have already done the geo ip lookup somewhere else). Using
                // setTimeout means that the current thread of execution will finish before executing
                // this, which allows the plugin to finish initialising.
                setTimeout(function () {
                  return forEachInstance("handleAutoCountry");
                });
              }, function () {
                return forEachInstance("rejectAutoCountryPromise");
              });
            }
          }
        }
      }, {
        key: "_initKeyListeners",
        value: function _initKeyListeners() {
          var _this6 = this;
          // update flag on keyup
          this._handleKeyupEvent = function () {
            if (_this6._updateFlagFromNumber(_this6.telInput.value)) {
              _this6._triggerCountryChange();
            }
          };
          this.telInput.addEventListener("keyup", this._handleKeyupEvent);
          // update flag on cut/paste events (now supported in all major browsers)
          this._handleClipboardEvent = function () {
            // hack because "paste" event is fired before input is updated
            setTimeout(_this6._handleKeyupEvent);
          };
          this.telInput.addEventListener("cut", this._handleClipboardEvent);
          this.telInput.addEventListener("paste", this._handleClipboardEvent);
        }
      }, {
        key: "_cap",
        value: function _cap(number) {
          var max = this.telInput.getAttribute("maxlength");
          return max && number.length > max ? number.substr(0, max) : number;
        }
      }, {
        key: "_initBlurListeners",
        value: function _initBlurListeners() {
          var _this7 = this;
          // on blur or form submit: if just a dial code then remove it
          this._handleSubmitOrBlurEvent = function () {
            _this7._removeEmptyDialCode();
          };
          if (this.telInput.form) {
            this.telInput.form.addEventListener("submit", this._handleSubmitOrBlurEvent);
          }
          this.telInput.addEventListener("blur", this._handleSubmitOrBlurEvent);
        }
      }, {
        key: "_removeEmptyDialCode",
        value: function _removeEmptyDialCode() {
          if (this.telInput.value.charAt(0) === "+") {
            var numeric = this._getNumeric(this.telInput.value);
            // if just a plus, or if just a dial code
            if (!numeric || this.selectedCountryData.dialCode === numeric) {
              this.telInput.value = "";
            }
          }
        }
      }, {
        key: "_getNumeric",
        value: function _getNumeric(s) {
          return s.replace(/\D/g, "");
        }
      }, {
        key: "_trigger",
        value: function _trigger(name) {
          // have to use old school document.createEvent as IE11 doesn't support `new Event()` syntax
          var e = document.createEvent("Event");
          e.initEvent(name, true, true);
          // can bubble, and is cancellable
          this.telInput.dispatchEvent(e);
        }
      }, {
        key: "_showDropdown",
        value: function _showDropdown() {
          this.countryList.classList.remove("iti__hide");
          this.selectedFlag.setAttribute("aria-expanded", "true");
          this._setDropdownPosition();
          // update highlighting and scroll to active list item
          if (this.activeItem) {
            this._highlightListItem(this.activeItem, false);
            this._scrollTo(this.activeItem, true);
          }
          // bind all the dropdown-related listeners: mouseover, click, click-off, keydown
          this._bindDropdownListeners();
          // update the arrow
          this.dropdownArrow.classList.add("iti__arrow--up");
          this._trigger("open:countrydropdown");
        }
      }, {
        key: "_toggleClass",
        value: function _toggleClass(el, className, shouldHaveClass) {
          if (shouldHaveClass && !el.classList.contains(className)) {
            el.classList.add(className);
          } else if (!shouldHaveClass && el.classList.contains(className)) {
            el.classList.remove(className);
          }
        }
      }, {
        key: "_setDropdownPosition",
        value: function _setDropdownPosition() {
          var _this8 = this;
          if (this.options.dropdownContainer) {
            this.options.dropdownContainer.appendChild(this.dropdown);
          }
          if (!this.options.useFullscreenPopup) {
            var pos = this.telInput.getBoundingClientRect();
            // windowTop from https://stackoverflow.com/a/14384091/217866
            var windowTop = window.pageYOffset || document.documentElement.scrollTop;
            var inputTop = pos.top + windowTop;
            var dropdownHeight = this.countryList.offsetHeight;
            // dropdownFitsBelow = (dropdownBottom < windowBottom)
            var dropdownFitsBelow = inputTop + this.telInput.offsetHeight + dropdownHeight < windowTop + window.innerHeight;
            var dropdownFitsAbove = inputTop - dropdownHeight > windowTop;
            // by default, the dropdown will be below the input. If we want to position it above the
            // input, we add the dropup class.
            this._toggleClass(this.countryList, "iti__country-list--dropup", !dropdownFitsBelow && dropdownFitsAbove);
            // if dropdownContainer is enabled, calculate postion
            if (this.options.dropdownContainer) {
              // by default the dropdown will be directly over the input because it's not in the flow.
              // If we want to position it below, we need to add some extra top value.
              var extraTop = !dropdownFitsBelow && dropdownFitsAbove ? 0 : this.telInput.offsetHeight;
              // calculate placement
              this.dropdown.style.top = "".concat(inputTop + extraTop, "px");
              this.dropdown.style.left = "".concat(pos.left + document.body.scrollLeft, "px");
              // close menu on window scroll
              this._handleWindowScroll = function () {
                return _this8._closeDropdown();
              };
              window.addEventListener("scroll", this._handleWindowScroll);
            }
          }
        }
      }, {
        key: "_getClosestListItem",
        value: function _getClosestListItem(target) {
          var el = target;
          while (el && el !== this.countryList && !el.classList.contains("iti__country")) {
            el = el.parentNode;
          }
          // if we reached the countryList element, then return null
          return el === this.countryList ? null : el;
        }
      }, {
        key: "_bindDropdownListeners",
        value: function _bindDropdownListeners() {
          var _this9 = this;
          // when mouse over a list item, just highlight that one
          // we add the class "highlight", so if they hit "enter" we know which one to select
          this._handleMouseoverCountryList = function (e) {
            // handle event delegation, as we're listening for this event on the countryList
            var listItem = _this9._getClosestListItem(e.target);
            if (listItem) {
              _this9._highlightListItem(listItem, false);
            }
          };
          this.countryList.addEventListener("mouseover", this._handleMouseoverCountryList);
          // listen for country selection
          this._handleClickCountryList = function (e) {
            var listItem = _this9._getClosestListItem(e.target);
            if (listItem) {
              _this9._selectListItem(listItem);
            }
          };
          this.countryList.addEventListener("click", this._handleClickCountryList);
          // click off to close
          // (except when this initial opening click is bubbling up)
          // we cannot just stopPropagation as it may be needed to close another instance
          var isOpening = true;
          this._handleClickOffToClose = function () {
            if (!isOpening) {
              _this9._closeDropdown();
            }
            isOpening = false;
          };
          document.documentElement.addEventListener("click", this._handleClickOffToClose);
          // listen for up/down scrolling, enter to select, or letters to jump to country name.
          // use keydown as keypress doesn't fire for non-char keys and we want to catch if they
          // just hit down and hold it to scroll down (no keyup event).
          // listen on the document because that's where key events are triggered if no input has focus
          var query = "";
          var queryTimer = null;
          this._handleKeydownOnDropdown = function (e) {
            // prevent down key from scrolling the whole page,
            // and enter key from submitting a form etc
            e.preventDefault();
            // up and down to navigate
            if (e.key === "ArrowUp" || e.key === "Up" || e.key === "ArrowDown" || e.key === "Down") {
              _this9._handleUpDownKey(e.key);
            } else if (e.key === "Enter") {
              _this9._handleEnterKey();
            } else if (e.key === "Escape") {
              _this9._closeDropdown();
            } else if (/^[a-zA-ZÀ-ÿа-яА-Я ]$/.test(e.key)) {
              // jump to countries that start with the query string
              if (queryTimer) {
                clearTimeout(queryTimer);
              }
              query += e.key.toLowerCase();
              _this9._searchForCountry(query);
              // if the timer hits 1 second, reset the query
              queryTimer = setTimeout(function () {
                query = "";
              }, 1e3);
            }
          };
          document.addEventListener("keydown", this._handleKeydownOnDropdown);
        }
      }, {
        key: "_handleUpDownKey",
        value: function _handleUpDownKey(key) {
          var next = key === "ArrowUp" || key === "Up" ? this.highlightedItem.previousElementSibling : this.highlightedItem.nextElementSibling;
          if (next) {
            // skip the divider
            if (next.classList.contains("iti__divider")) {
              next = key === "ArrowUp" || key === "Up" ? next.previousElementSibling : next.nextElementSibling;
            }
            this._highlightListItem(next, true);
          }
        }
      }, {
        key: "_handleEnterKey",
        value: function _handleEnterKey() {
          if (this.highlightedItem) {
            this._selectListItem(this.highlightedItem);
          }
        }
      }, {
        key: "_searchForCountry",
        value: function _searchForCountry(query) {
          for (var i = 0; i < this.countries.length; i++) {
            if (this._startsWith(this.countries[i].name, query)) {
              var listItem = this.countryList.querySelector("#iti-".concat(this.id, "__item-").concat(this.countries[i].iso2));
              // update highlighting and scroll
              this._highlightListItem(listItem, false);
              this._scrollTo(listItem, true);
              break;
            }
          }
        }
      }, {
        key: "_startsWith",
        value: function _startsWith(a, b) {
          return a.substr(0, b.length).toLowerCase() === b;
        }
      }, {
        key: "_updateValFromNumber",
        value: function _updateValFromNumber(originalNumber) {
          var number = originalNumber;
          if (this.options.formatOnDisplay && window.intlTelInputUtils && this.selectedCountryData) {
            var useNational = this.options.nationalMode || number.charAt(0) !== "+" && !this.options.separateDialCode;
            var _intlTelInputUtils$nu = intlTelInputUtils.numberFormat,
              NATIONAL = _intlTelInputUtils$nu.NATIONAL,
              INTERNATIONAL = _intlTelInputUtils$nu.INTERNATIONAL;
            var format = useNational ? NATIONAL : INTERNATIONAL;
            number = intlTelInputUtils.formatNumber(number, this.selectedCountryData.iso2, format);
          }
          number = this._beforeSetNumber(number);
          this.telInput.value = number;
        }
      }, {
        key: "_updateFlagFromNumber",
        value: function _updateFlagFromNumber(originalNumber) {
          // if we already have US/Canada selected, make sure the number starts
          // with a +1 so _getDialCode will be able to extract the area code
          // update: if we dont yet have selectedCountryData, but we're here (trying to update the flag
          // from the number), that means we're initialising the plugin with a number that already has a
          // dial code, so fine to ignore this bit
          var number = originalNumber;
          var selectedDialCode = this.selectedCountryData.dialCode;
          var isNanp = selectedDialCode === "1";
          if (number && isNanp && number.charAt(0) !== "+") {
            if (number.charAt(0) !== "1") {
              number = "1".concat(number);
            }
            number = "+".concat(number);
          }
          // if separateDialCode enabled, then consider the selected dial code to be part of the number
          if (this.options.separateDialCode && selectedDialCode && number.charAt(0) !== "+") {
            number = "+".concat(selectedDialCode).concat(number);
          }
          // try and extract valid dial code from input
          var dialCode = this._getDialCode(number, true);
          var numeric = this._getNumeric(number);
          var countryCode = null;
          if (dialCode) {
            var countryCodes = this.countryCodes[this._getNumeric(dialCode)];
            // check if the right country is already selected. this should be false if the number is
            // longer than the matched dial code because in this case we need to make sure that if
            // there are multiple country matches, that the first one is selected (note: we could
            // just check that here, but it requires the same loop that we already have later)
            var alreadySelected = countryCodes.indexOf(this.selectedCountryData.iso2) !== -1 && numeric.length <= dialCode.length - 1;
            var isRegionlessNanpNumber = selectedDialCode === "1" && this._isRegionlessNanp(numeric);
            // only update the flag if:
            // A) NOT (we currently have a NANP flag selected, and the number is a regionlessNanp)
            // AND
            // B) the right country is not already selected
            if (!isRegionlessNanpNumber && !alreadySelected) {
              // if using onlyCountries option, countryCodes[0] may be empty, so we must find the first
              // non-empty index
              for (var j = 0; j < countryCodes.length; j++) {
                if (countryCodes[j]) {
                  countryCode = countryCodes[j];
                  break;
                }
              }
            }
          } else if (number.charAt(0) === "+" && numeric.length) {
            // invalid dial code, so empty
            // Note: use getNumeric here because the number has not been formatted yet, so could contain
            // bad chars
            countryCode = "";
          } else if (!number || number === "+") {
            // empty, or just a plus, so default
            countryCode = this.defaultCountry;
          }
          if (countryCode !== null) {
            return this._setFlag(countryCode);
          }
          return false;
        }
      }, {
        key: "_isRegionlessNanp",
        value: function _isRegionlessNanp(number) {
          var numeric = this._getNumeric(number);
          if (numeric.charAt(0) === "1") {
            var areaCode = numeric.substr(1, 3);
            return regionlessNanpNumbers.indexOf(areaCode) !== -1;
          }
          return false;
        }
      }, {
        key: "_highlightListItem",
        value: function _highlightListItem(listItem, shouldFocus) {
          var prevItem = this.highlightedItem;
          if (prevItem) {
            prevItem.classList.remove("iti__highlight");
          }
          this.highlightedItem = listItem;
          this.highlightedItem.classList.add("iti__highlight");
          this.selectedFlag.setAttribute("aria-activedescendant", listItem.getAttribute("id"));
          if (shouldFocus) {
            this.highlightedItem.focus();
          }
        }
      }, {
        key: "_getCountryData",
        value: function _getCountryData(countryCode, ignoreOnlyCountriesOption, allowFail) {
          var countryList = ignoreOnlyCountriesOption ? allCountries : this.countries;
          for (var i = 0; i < countryList.length; i++) {
            if (countryList[i].iso2 === countryCode) {
              return countryList[i];
            }
          }
          if (allowFail) {
            return null;
          }
          throw new Error("No country data for '".concat(countryCode, "'"));
        }
      }, {
        key: "_setFlag",
        value: function _setFlag(countryCode) {
          var _this$options3 = this.options,
            allowDropdown = _this$options3.allowDropdown,
            separateDialCode = _this$options3.separateDialCode,
            showFlags = _this$options3.showFlags;
          var prevCountry = this.selectedCountryData.iso2 ? this.selectedCountryData : {};
          // do this first as it will throw an error and stop if countryCode is invalid
          this.selectedCountryData = countryCode ? this._getCountryData(countryCode, false, false) : {};
          // update the defaultCountry - we only need the iso2 from now on, so just store that
          if (this.selectedCountryData.iso2) {
            this.defaultCountry = this.selectedCountryData.iso2;
          }
          if (showFlags) {
            this.selectedFlagInner.setAttribute("class", "iti__flag iti__".concat(countryCode));
          }
          this._setSelectedCountryFlagTitleAttribute(countryCode, separateDialCode);
          if (separateDialCode) {
            var dialCode = this.selectedCountryData.dialCode ? "+".concat(this.selectedCountryData.dialCode) : "";
            this.selectedDialCode.innerHTML = dialCode;
            // offsetWidth is zero if input is in a hidden container during initialisation
            var selectedFlagWidth = this.selectedFlag.offsetWidth || this._getHiddenSelectedFlagWidth();
            // add 6px of padding after the grey selected-dial-code box, as this is what we use in the css
            if (this.isRTL) {
              this.telInput.style.paddingRight = "".concat(selectedFlagWidth + 6, "px");
            } else {
              this.telInput.style.paddingLeft = "".concat(selectedFlagWidth + 6, "px");
            }
          }
          // and the input's placeholder
          this._updatePlaceholder();
          // update the active list item
          if (allowDropdown) {
            var prevItem = this.activeItem;
            if (prevItem) {
              prevItem.classList.remove("iti__active");
              prevItem.setAttribute("aria-selected", "false");
            }
            if (countryCode) {
              // check if there is a preferred item first, else fall back to standard
              var nextItem = this.countryList.querySelector("#iti-".concat(this.id, "__item-").concat(countryCode, "-preferred")) || this.countryList.querySelector("#iti-".concat(this.id, "__item-").concat(countryCode));
              nextItem.setAttribute("aria-selected", "true");
              nextItem.classList.add("iti__active");
              this.activeItem = nextItem;
            }
          }
          // return if the flag has changed or not
          return prevCountry.iso2 !== countryCode;
        }
      }, {
        key: "_setSelectedCountryFlagTitleAttribute",
        value: function _setSelectedCountryFlagTitleAttribute(countryCode, separateDialCode) {
          if (!this.selectedFlag) {
            return;
          }
          var title;
          if (countryCode && !separateDialCode) {
            title = "".concat(this.selectedCountryData.name, ": +").concat(this.selectedCountryData.dialCode);
          } else if (countryCode) {
            // For screen reader output, we don't want to include the dial code in the reader output twice
            // so just use the selected country name here:
            title = this.selectedCountryData.name;
          } else {
            title = "Unknown";
          }
          this.selectedFlag.setAttribute("title", title);
        }
      }, {
        key: "_getHiddenSelectedFlagWidth",
        value: function _getHiddenSelectedFlagWidth() {
          // to get the right styling to apply, all we need is a shallow clone of the container,
          // and then to inject a deep clone of the selectedFlag element
          var containerClone = this.telInput.parentNode.cloneNode();
          containerClone.style.visibility = "hidden";
          document.body.appendChild(containerClone);
          var flagsContainerClone = this.flagsContainer.cloneNode();
          containerClone.appendChild(flagsContainerClone);
          var selectedFlagClone = this.selectedFlag.cloneNode(true);
          flagsContainerClone.appendChild(selectedFlagClone);
          var width = selectedFlagClone.offsetWidth;
          containerClone.parentNode.removeChild(containerClone);
          return width;
        }
      }, {
        key: "_updatePlaceholder",
        value: function _updatePlaceholder() {
          var shouldSetPlaceholder = this.options.autoPlaceholder === "aggressive" || !this.hadInitialPlaceholder && this.options.autoPlaceholder === "polite";
          if (window.intlTelInputUtils && shouldSetPlaceholder) {
            var numberType = intlTelInputUtils.numberType[this.options.placeholderNumberType];
            var placeholder = this.selectedCountryData.iso2 ? intlTelInputUtils.getExampleNumber(this.selectedCountryData.iso2, this.options.nationalMode, numberType) : "";
            placeholder = this._beforeSetNumber(placeholder);
            if (typeof this.options.customPlaceholder === "function") {
              placeholder = this.options.customPlaceholder(placeholder, this.selectedCountryData);
            }
            this.telInput.setAttribute("placeholder", placeholder);
          }
        }
      }, {
        key: "_selectListItem",
        value: function _selectListItem(listItem) {
          // update selected flag and active list item
          var flagChanged = this._setFlag(listItem.getAttribute("data-country-code"));
          this._closeDropdown();
          this._updateDialCode(listItem.getAttribute("data-dial-code"));
          // focus the input
          this.telInput.focus();
          // put cursor at end - this fix is required for FF and IE11 (with auto inserting dial code),
          // who try to put the cursor at the beginning the first time
          var len = this.telInput.value.length;
          this.telInput.setSelectionRange(len, len);
          if (flagChanged) {
            this._triggerCountryChange();
          }
        }
      }, {
        key: "_closeDropdown",
        value: function _closeDropdown() {
          this.countryList.classList.add("iti__hide");
          this.selectedFlag.setAttribute("aria-expanded", "false");
          this.selectedFlag.removeAttribute("aria-activedescendant");
          // update the arrow
          this.dropdownArrow.classList.remove("iti__arrow--up");
          // unbind key events
          document.removeEventListener("keydown", this._handleKeydownOnDropdown);
          document.documentElement.removeEventListener("click", this._handleClickOffToClose);
          this.countryList.removeEventListener("mouseover", this._handleMouseoverCountryList);
          this.countryList.removeEventListener("click", this._handleClickCountryList);
          // remove menu from container
          if (this.options.dropdownContainer) {
            if (!this.options.useFullscreenPopup) {
              window.removeEventListener("scroll", this._handleWindowScroll);
            }
            if (this.dropdown.parentNode) {
              this.dropdown.parentNode.removeChild(this.dropdown);
            }
          }
          this._trigger("close:countrydropdown");
        }
      }, {
        key: "_scrollTo",
        value: function _scrollTo(element, middle) {
          var container = this.countryList;
          // windowTop from https://stackoverflow.com/a/14384091/217866
          var windowTop = window.pageYOffset || document.documentElement.scrollTop;
          var containerHeight = container.offsetHeight;
          var containerTop = container.getBoundingClientRect().top + windowTop;
          var containerBottom = containerTop + containerHeight;
          var elementHeight = element.offsetHeight;
          var elementTop = element.getBoundingClientRect().top + windowTop;
          var elementBottom = elementTop + elementHeight;
          var newScrollTop = elementTop - containerTop + container.scrollTop;
          var middleOffset = containerHeight / 2 - elementHeight / 2;
          if (elementTop < containerTop) {
            // scroll up
            if (middle) {
              newScrollTop -= middleOffset;
            }
            container.scrollTop = newScrollTop;
          } else if (elementBottom > containerBottom) {
            // scroll down
            if (middle) {
              newScrollTop += middleOffset;
            }
            var heightDifference = containerHeight - elementHeight;
            container.scrollTop = newScrollTop - heightDifference;
          }
        }
      }, {
        key: "_updateDialCode",
        value: function _updateDialCode(newDialCodeBare) {
          var inputVal = this.telInput.value;
          // save having to pass this every time
          var newDialCode = "+".concat(newDialCodeBare);
          var newNumber;
          if (inputVal.charAt(0) === "+") {
            // there's a plus so we're dealing with a replacement
            var prevDialCode = this._getDialCode(inputVal);
            if (prevDialCode) {
              // current number contains a valid dial code, so replace it
              newNumber = inputVal.replace(prevDialCode, newDialCode);
            } else {
              // current number contains an invalid dial code, so ditch it
              // (no way to determine where the invalid dial code ends and the rest of the number begins)
              newNumber = newDialCode;
            }
            this.telInput.value = newNumber;
          } else if (this.options.autoInsertDialCode) {
            if (inputVal) {
              // there is an existing value with no dial code: prefix the new dial code
              newNumber = newDialCode + inputVal;
            } else {
              newNumber = newDialCode;
            }
            this.telInput.value = newNumber;
          }
        }
      }, {
        key: "_getDialCode",
        value: function _getDialCode(number, includeAreaCode) {
          var dialCode = "";
          // only interested in international numbers (starting with a plus)
          if (number.charAt(0) === "+") {
            var numericChars = "";
            // iterate over chars
            for (var i = 0; i < number.length; i++) {
              var c = number.charAt(i);
              // if char is number (https://stackoverflow.com/a/8935649/217866)
              if (!isNaN(parseInt(c, 10))) {
                numericChars += c;
                // if current numericChars make a valid dial code
                if (includeAreaCode) {
                  if (this.countryCodes[numericChars]) {
                    // store the actual raw string (useful for matching later)
                    dialCode = number.substr(0, i + 1);
                  }
                } else {
                  if (this.dialCodes[numericChars]) {
                    dialCode = number.substr(0, i + 1);
                    // if we're just looking for a dial code, we can break as soon as we find one
                    break;
                  }
                }
                // stop searching as soon as we can - in this case when we hit max len
                if (numericChars.length === this.countryCodeMaxLen) {
                  break;
                }
              }
            }
          }
          return dialCode;
        }
      }, {
        key: "_getFullNumber",
        value: function _getFullNumber() {
          var val = this.telInput.value.trim();
          var dialCode = this.selectedCountryData.dialCode;
          var prefix;
          var numericVal = this._getNumeric(val);
          if (this.options.separateDialCode && val.charAt(0) !== "+" && dialCode && numericVal) {
            // when using separateDialCode, it is visible so is effectively part of the typed number
            prefix = "+".concat(dialCode);
          } else {
            prefix = "";
          }
          return prefix + val;
        }
      }, {
        key: "_beforeSetNumber",
        value: function _beforeSetNumber(originalNumber) {
          var number = originalNumber;
          if (this.options.separateDialCode) {
            var dialCode = this._getDialCode(number);
            // if there is a valid dial code
            if (dialCode) {
              // in case _getDialCode returned an area code as well
              dialCode = "+".concat(this.selectedCountryData.dialCode);
              // a lot of numbers will have a space separating the dial code and the main number, and
              // some NANP numbers will have a hyphen e.g. +1 684-733-1234 - in both cases we want to get
              // rid of it
              // NOTE: don't just trim all non-numerics as may want to preserve an open parenthesis etc
              var start = number[dialCode.length] === " " || number[dialCode.length] === "-" ? dialCode.length + 1 : dialCode.length;
              number = number.substr(start);
            }
          }
          return this._cap(number);
        }
      }, {
        key: "_triggerCountryChange",
        value: function _triggerCountryChange() {
          this._trigger("countrychange");
        }
      }, {
        key: "handleAutoCountry",
        value: function handleAutoCountry() {
          if (this.options.initialCountry === "auto") {
            // we must set this even if there is an initial val in the input: in case the initial val is
            // invalid and they delete it - they should see their auto country
            this.defaultCountry = window.intlTelInputGlobals.autoCountry;
            // if there's no initial value in the input, then update the flag
            if (!this.telInput.value) {
              this.setCountry(this.defaultCountry);
            }
            this.resolveAutoCountryPromise();
          }
        }
      }, {
        key: "handleUtils",
        value: function handleUtils() {
          // if the request was successful
          if (window.intlTelInputUtils) {
            // if there's an initial value in the input, then format it
            if (this.telInput.value) {
              this._updateValFromNumber(this.telInput.value);
            }
            this._updatePlaceholder();
          }
          this.resolveUtilsScriptPromise();
        }
      }, {
        key: "destroy",
        value: function destroy() {
          var form = this.telInput.form;
          if (this.options.allowDropdown) {
            // make sure the dropdown is closed (and unbind listeners)
            this._closeDropdown();
            this.selectedFlag.removeEventListener("click", this._handleClickSelectedFlag);
            this.flagsContainer.removeEventListener("keydown", this._handleFlagsContainerKeydown);
            // label click hack
            var label = this._getClosestLabel();
            if (label) {
              label.removeEventListener("click", this._handleLabelClick);
            }
          }
          // unbind hiddenInput listeners
          if (this.hiddenInput && form) {
            form.removeEventListener("submit", this._handleHiddenInputSubmit);
          }
          // unbind autoInsertDialCode listeners
          if (this.options.autoInsertDialCode) {
            if (form) {
              form.removeEventListener("submit", this._handleSubmitOrBlurEvent);
            }
            this.telInput.removeEventListener("blur", this._handleSubmitOrBlurEvent);
          }
          // unbind key events, and cut/paste events
          this.telInput.removeEventListener("keyup", this._handleKeyupEvent);
          this.telInput.removeEventListener("cut", this._handleClipboardEvent);
          this.telInput.removeEventListener("paste", this._handleClipboardEvent);
          // remove attribute of id instance: data-intl-tel-input-id
          this.telInput.removeAttribute("data-intl-tel-input-id");
          // remove markup (but leave the original input)
          var wrapper = this.telInput.parentNode;
          wrapper.parentNode.insertBefore(this.telInput, wrapper);
          wrapper.parentNode.removeChild(wrapper);
          delete window.intlTelInputGlobals.instances[this.id];
        }
      }, {
        key: "getExtension",
        value: function getExtension() {
          if (window.intlTelInputUtils) {
            return intlTelInputUtils.getExtension(this._getFullNumber(), this.selectedCountryData.iso2);
          }
          return "";
        }
      }, {
        key: "getNumber",
        value: function getNumber(format) {
          if (window.intlTelInputUtils) {
            var iso2 = this.selectedCountryData.iso2;
            return intlTelInputUtils.formatNumber(this._getFullNumber(), iso2, format);
          }
          return "";
        }
      }, {
        key: "getNumberType",
        value: function getNumberType() {
          if (window.intlTelInputUtils) {
            return intlTelInputUtils.getNumberType(this._getFullNumber(), this.selectedCountryData.iso2);
          }
          return -99;
        }
      }, {
        key: "getSelectedCountryData",
        value: function getSelectedCountryData() {
          return this.selectedCountryData;
        }
      }, {
        key: "getValidationError",
        value: function getValidationError() {
          if (window.intlTelInputUtils) {
            var iso2 = this.selectedCountryData.iso2;
            return intlTelInputUtils.getValidationError(this._getFullNumber(), iso2);
          }
          return -99;
        }
      }, {
        key: "isValidNumber",
        value: function isValidNumber() {
          var val = this._getFullNumber().trim();
          return window.intlTelInputUtils ? intlTelInputUtils.isValidNumber(val, this.selectedCountryData.iso2) : null;
        }
      }, {
        key: "isPossibleNumber",
        value: function isPossibleNumber() {
          var val = this._getFullNumber().trim();
          return window.intlTelInputUtils ? intlTelInputUtils.isPossibleNumber(val, this.selectedCountryData.iso2) : null;
        }
      }, {
        key: "setCountry",
        value: function setCountry(originalCountryCode) {
          var countryCode = originalCountryCode.toLowerCase();
          // check if already selected
          if (this.selectedCountryData.iso2 !== countryCode) {
            this._setFlag(countryCode);
            this._updateDialCode(this.selectedCountryData.dialCode);
            this._triggerCountryChange();
          }
        }
      }, {
        key: "setNumber",
        value: function setNumber(number) {
          // we must update the flag first, which updates this.selectedCountryData, which is used for
          // formatting the number before displaying it
          var flagChanged = this._updateFlagFromNumber(number);
          this._updateValFromNumber(number);
          if (flagChanged) {
            this._triggerCountryChange();
          }
        }
      }, {
        key: "setPlaceholderNumberType",
        value: function setPlaceholderNumberType(type) {
          this.options.placeholderNumberType = type;
          this._updatePlaceholder();
        }
      }]);
      return Iti;
    }();
    /********************
    *  STATIC METHODS
    ********************/
    // get the country data object
    intlTelInputGlobals.getCountryData = function () {
      return allCountries;
    };
    // inject a <script> element to load utils.js
    var injectScript = function injectScript(path, handleSuccess, handleFailure) {
      // inject a new script element into the page
      var script = document.createElement("script");
      script.onload = function () {
        forEachInstance("handleUtils");
        if (handleSuccess) {
          handleSuccess();
        }
      };
      script.onerror = function () {
        forEachInstance("rejectUtilsScriptPromise");
        if (handleFailure) {
          handleFailure();
        }
      };
      script.className = "iti-load-utils";
      script.async = true;
      script.src = path;
      document.body.appendChild(script);
    };
    // load the utils script
    intlTelInputGlobals.loadUtils = function (path) {
      // 2 options:
      // 1) not already started loading (start)
      // 2) already started loading (do nothing - just wait for the onload callback to fire, which will
      // trigger handleUtils on all instances, invoking their resolveUtilsScriptPromise functions)
      if (!window.intlTelInputUtils && !window.intlTelInputGlobals.startedLoadingUtilsScript) {
        // only do this once
        window.intlTelInputGlobals.startedLoadingUtilsScript = true;
        // if we have promises, then return a promise
        if (typeof Promise !== "undefined") {
          return new Promise(function (resolve, reject) {
            return injectScript(path, resolve, reject);
          });
        }
        injectScript(path);
      }
      return null;
    };
    // default options
    intlTelInputGlobals.defaults = defaults;
    // version
    intlTelInputGlobals.version = "18.3.3";
    // convenience wrapper
    return function (input, options) {
      var iti = new Iti(input, options);
      iti._init();
      input.setAttribute("data-intl-tel-input-id", iti.id);
      window.intlTelInputGlobals.instances[iti.id] = iti;
      return iti;
    };
  }();
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./node_modules/swiper/modules/navigation.css":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./node_modules/swiper/modules/navigation.css ***!
  \**************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ":root {\n  --swiper-navigation-size: 44px;\n  /*\n  --swiper-navigation-top-offset: 50%;\n  --swiper-navigation-sides-offset: 10px;\n  --swiper-navigation-color: var(--swiper-theme-color);\n  */\n}\n.swiper-button-prev,\n.swiper-button-next {\n  position: absolute;\n  top: var(--swiper-navigation-top-offset, 50%);\n  width: calc(var(--swiper-navigation-size) / 44 * 27);\n  height: var(--swiper-navigation-size);\n  margin-top: calc(0px - (var(--swiper-navigation-size) / 2));\n  z-index: 10;\n  cursor: pointer;\n  display: flex;\n  align-items: center;\n  justify-content: center;\n  color: var(--swiper-navigation-color, var(--swiper-theme-color));\n}\n.swiper-button-prev.swiper-button-disabled,\n.swiper-button-next.swiper-button-disabled {\n  opacity: 0.35;\n  cursor: auto;\n  pointer-events: none;\n}\n.swiper-button-prev.swiper-button-hidden,\n.swiper-button-next.swiper-button-hidden {\n  opacity: 0;\n  cursor: auto;\n  pointer-events: none;\n}\n.swiper-navigation-disabled .swiper-button-prev,\n.swiper-navigation-disabled .swiper-button-next {\n  display: none !important;\n}\n.swiper-button-prev svg,\n.swiper-button-next svg {\n  width: 100%;\n  height: 100%;\n  -o-object-fit: contain;\n     object-fit: contain;\n  transform-origin: center;\n}\n.swiper-rtl .swiper-button-prev svg,\n.swiper-rtl .swiper-button-next svg {\n  transform: rotate(180deg);\n}\n.swiper-button-prev,\n.swiper-rtl .swiper-button-next {\n  left: var(--swiper-navigation-sides-offset, 10px);\n  right: auto;\n}\n.swiper-button-next,\n.swiper-rtl .swiper-button-prev {\n  right: var(--swiper-navigation-sides-offset, 10px);\n  left: auto;\n}\n.swiper-button-lock {\n  display: none;\n}\n/* Navigation font start */\n.swiper-button-prev:after,\n.swiper-button-next:after {\n  font-family: swiper-icons;\n  font-size: var(--swiper-navigation-size);\n  text-transform: none !important;\n  letter-spacing: 0;\n  font-variant: initial;\n  line-height: 1;\n}\n.swiper-button-prev:after,\n.swiper-rtl .swiper-button-next:after {\n  content: 'prev';\n}\n.swiper-button-next,\n.swiper-rtl .swiper-button-prev {\n  right: var(--swiper-navigation-sides-offset, 10px);\n  left: auto;\n}\n.swiper-button-next:after,\n.swiper-rtl .swiper-button-prev:after {\n  content: 'next';\n}\n/* Navigation font end */\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {

"use strict";


/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
// eslint-disable-next-line func-names
module.exports = function (cssWithMappingToString) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item);

      if (item[2]) {
        return "@media ".concat(item[2], " {").concat(content, "}");
      }

      return content;
    }).join("");
  }; // import a list of modules into the list
  // eslint-disable-next-line func-names


  list.i = function (modules, mediaQuery, dedupe) {
    if (typeof modules === "string") {
      // eslint-disable-next-line no-param-reassign
      modules = [[null, modules, ""]];
    }

    var alreadyImportedModules = {};

    if (dedupe) {
      for (var i = 0; i < this.length; i++) {
        // eslint-disable-next-line prefer-destructuring
        var id = this[i][0];

        if (id != null) {
          alreadyImportedModules[id] = true;
        }
      }
    }

    for (var _i = 0; _i < modules.length; _i++) {
      var item = [].concat(modules[_i]);

      if (dedupe && alreadyImportedModules[item[0]]) {
        // eslint-disable-next-line no-continue
        continue;
      }

      if (mediaQuery) {
        if (!item[2]) {
          item[2] = mediaQuery;
        } else {
          item[2] = "".concat(mediaQuery, " and ").concat(item[2]);
        }
      }

      list.push(item);
    }
  };

  return list;
};

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/swiper/modules/navigation.css":
/*!****************************************************!*\
  !*** ./node_modules/swiper/modules/navigation.css ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_navigation_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!../../postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./navigation.css */ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[6].oneOf[1].use[2]!./node_modules/swiper/modules/navigation.css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_navigation_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_css_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_1_postcss_loader_dist_cjs_js_ruleSet_1_rules_6_oneOf_1_use_2_navigation_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var isOldIE = function isOldIE() {
  var memo;
  return function memorize() {
    if (typeof memo === 'undefined') {
      // Test for IE <= 9 as proposed by Browserhacks
      // @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
      // Tests for existence of standard globals is to allow style-loader
      // to operate correctly into non-standard environments
      // @see https://github.com/webpack-contrib/style-loader/issues/177
      memo = Boolean(window && document && document.all && !window.atob);
    }

    return memo;
  };
}();

var getTarget = function getTarget() {
  var memo = {};
  return function memorize(target) {
    if (typeof memo[target] === 'undefined') {
      var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself

      if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
        try {
          // This will throw an exception if access to iframe is blocked
          // due to cross-origin restrictions
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          // istanbul ignore next
          styleTarget = null;
        }
      }

      memo[target] = styleTarget;
    }

    return memo[target];
  };
}();

var stylesInDom = [];

function getIndexByIdentifier(identifier) {
  var result = -1;

  for (var i = 0; i < stylesInDom.length; i++) {
    if (stylesInDom[i].identifier === identifier) {
      result = i;
      break;
    }
  }

  return result;
}

function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];

  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var index = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3]
    };

    if (index !== -1) {
      stylesInDom[index].references++;
      stylesInDom[index].updater(obj);
    } else {
      stylesInDom.push({
        identifier: identifier,
        updater: addStyle(obj, options),
        references: 1
      });
    }

    identifiers.push(identifier);
  }

  return identifiers;
}

function insertStyleElement(options) {
  var style = document.createElement('style');
  var attributes = options.attributes || {};

  if (typeof attributes.nonce === 'undefined') {
    var nonce =  true ? __webpack_require__.nc : 0;

    if (nonce) {
      attributes.nonce = nonce;
    }
  }

  Object.keys(attributes).forEach(function (key) {
    style.setAttribute(key, attributes[key]);
  });

  if (typeof options.insert === 'function') {
    options.insert(style);
  } else {
    var target = getTarget(options.insert || 'head');

    if (!target) {
      throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
    }

    target.appendChild(style);
  }

  return style;
}

function removeStyleElement(style) {
  // istanbul ignore if
  if (style.parentNode === null) {
    return false;
  }

  style.parentNode.removeChild(style);
}
/* istanbul ignore next  */


var replaceText = function replaceText() {
  var textStore = [];
  return function replace(index, replacement) {
    textStore[index] = replacement;
    return textStore.filter(Boolean).join('\n');
  };
}();

function applyToSingletonTag(style, index, remove, obj) {
  var css = remove ? '' : obj.media ? "@media ".concat(obj.media, " {").concat(obj.css, "}") : obj.css; // For old IE

  /* istanbul ignore if  */

  if (style.styleSheet) {
    style.styleSheet.cssText = replaceText(index, css);
  } else {
    var cssNode = document.createTextNode(css);
    var childNodes = style.childNodes;

    if (childNodes[index]) {
      style.removeChild(childNodes[index]);
    }

    if (childNodes.length) {
      style.insertBefore(cssNode, childNodes[index]);
    } else {
      style.appendChild(cssNode);
    }
  }
}

function applyToTag(style, options, obj) {
  var css = obj.css;
  var media = obj.media;
  var sourceMap = obj.sourceMap;

  if (media) {
    style.setAttribute('media', media);
  } else {
    style.removeAttribute('media');
  }

  if (sourceMap && typeof btoa !== 'undefined') {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  } // For old IE

  /* istanbul ignore if  */


  if (style.styleSheet) {
    style.styleSheet.cssText = css;
  } else {
    while (style.firstChild) {
      style.removeChild(style.firstChild);
    }

    style.appendChild(document.createTextNode(css));
  }
}

var singleton = null;
var singletonCounter = 0;

function addStyle(obj, options) {
  var style;
  var update;
  var remove;

  if (options.singleton) {
    var styleIndex = singletonCounter++;
    style = singleton || (singleton = insertStyleElement(options));
    update = applyToSingletonTag.bind(null, style, styleIndex, false);
    remove = applyToSingletonTag.bind(null, style, styleIndex, true);
  } else {
    style = insertStyleElement(options);
    update = applyToTag.bind(null, style, options);

    remove = function remove() {
      removeStyleElement(style);
    };
  }

  update(obj);
  return function updateStyle(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap) {
        return;
      }

      update(obj = newObj);
    } else {
      remove();
    }
  };
}

module.exports = function (list, options) {
  options = options || {}; // Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
  // tags it will allow on a page

  if (!options.singleton && typeof options.singleton !== 'boolean') {
    options.singleton = isOldIE();
  }

  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];

    if (Object.prototype.toString.call(newList) !== '[object Array]') {
      return;
    }

    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDom[index].references--;
    }

    var newLastIdentifiers = modulesToDom(newList, options);

    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];

      var _index = getIndexByIdentifier(_identifier);

      if (stylesInDom[_index].references === 0) {
        stylesInDom[_index].updater();

        stylesInDom.splice(_index, 1);
      }
    }

    lastIdentifiers = newLastIdentifiers;
  };
};

/***/ }),

/***/ "./node_modules/swiper/modules/a11y.mjs":
/*!**********************************************!*\
  !*** ./node_modules/swiper/modules/a11y.mjs ***!
  \**********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ A11y)
/* harmony export */ });
/* harmony import */ var _shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/classes-to-selector.mjs */ "./node_modules/swiper/shared/classes-to-selector.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function A11y(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    a11y: {
      enabled: true,
      notificationClass: 'swiper-notification',
      prevSlideMessage: 'Previous slide',
      nextSlideMessage: 'Next slide',
      firstSlideMessage: 'This is the first slide',
      lastSlideMessage: 'This is the last slide',
      paginationBulletMessage: 'Go to slide {{index}}',
      slideLabelMessage: '{{index}} / {{slidesLength}}',
      containerMessage: null,
      containerRoleDescriptionMessage: null,
      itemRoleDescriptionMessage: null,
      slideRole: 'group',
      id: null
    }
  });
  swiper.a11y = {
    clicked: false
  };
  let liveRegion = null;
  function notify(message) {
    const notification = liveRegion;
    if (notification.length === 0) return;
    notification.innerHTML = '';
    notification.innerHTML = message;
  }
  const makeElementsArray = el => (Array.isArray(el) ? el : [el]).filter(e => !!e);
  function getRandomNumber(size) {
    if (size === void 0) {
      size = 16;
    }
    const randomChar = () => Math.round(16 * Math.random()).toString(16);
    return 'x'.repeat(size).replace(/x/g, randomChar);
  }
  function makeElFocusable(el) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('tabIndex', '0');
    });
  }
  function makeElNotFocusable(el) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('tabIndex', '-1');
    });
  }
  function addElRole(el, role) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('role', role);
    });
  }
  function addElRoleDescription(el, description) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-roledescription', description);
    });
  }
  function addElControls(el, controls) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-controls', controls);
    });
  }
  function addElLabel(el, label) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-label', label);
    });
  }
  function addElId(el, id) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('id', id);
    });
  }
  function addElLive(el, live) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-live', live);
    });
  }
  function disableEl(el) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-disabled', true);
    });
  }
  function enableEl(el) {
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.setAttribute('aria-disabled', false);
    });
  }
  function onEnterOrSpaceKey(e) {
    if (e.keyCode !== 13 && e.keyCode !== 32) return;
    const params = swiper.params.a11y;
    const targetEl = e.target;
    if (swiper.pagination && swiper.pagination.el && (targetEl === swiper.pagination.el || swiper.pagination.el.contains(e.target))) {
      if (!e.target.matches((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(swiper.params.pagination.bulletClass))) return;
    }
    if (swiper.navigation && swiper.navigation.nextEl && targetEl === swiper.navigation.nextEl) {
      if (!(swiper.isEnd && !swiper.params.loop)) {
        swiper.slideNext();
      }
      if (swiper.isEnd) {
        notify(params.lastSlideMessage);
      } else {
        notify(params.nextSlideMessage);
      }
    }
    if (swiper.navigation && swiper.navigation.prevEl && targetEl === swiper.navigation.prevEl) {
      if (!(swiper.isBeginning && !swiper.params.loop)) {
        swiper.slidePrev();
      }
      if (swiper.isBeginning) {
        notify(params.firstSlideMessage);
      } else {
        notify(params.prevSlideMessage);
      }
    }
    if (swiper.pagination && targetEl.matches((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(swiper.params.pagination.bulletClass))) {
      targetEl.click();
    }
  }
  function updateNavigation() {
    if (swiper.params.loop || swiper.params.rewind || !swiper.navigation) return;
    const {
      nextEl,
      prevEl
    } = swiper.navigation;
    if (prevEl) {
      if (swiper.isBeginning) {
        disableEl(prevEl);
        makeElNotFocusable(prevEl);
      } else {
        enableEl(prevEl);
        makeElFocusable(prevEl);
      }
    }
    if (nextEl) {
      if (swiper.isEnd) {
        disableEl(nextEl);
        makeElNotFocusable(nextEl);
      } else {
        enableEl(nextEl);
        makeElFocusable(nextEl);
      }
    }
  }
  function hasPagination() {
    return swiper.pagination && swiper.pagination.bullets && swiper.pagination.bullets.length;
  }
  function hasClickablePagination() {
    return hasPagination() && swiper.params.pagination.clickable;
  }
  function updatePagination() {
    const params = swiper.params.a11y;
    if (!hasPagination()) return;
    swiper.pagination.bullets.forEach(bulletEl => {
      if (swiper.params.pagination.clickable) {
        makeElFocusable(bulletEl);
        if (!swiper.params.pagination.renderBullet) {
          addElRole(bulletEl, 'button');
          addElLabel(bulletEl, params.paginationBulletMessage.replace(/\{\{index\}\}/, (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.g)(bulletEl) + 1));
        }
      }
      if (bulletEl.matches((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(swiper.params.pagination.bulletActiveClass))) {
        bulletEl.setAttribute('aria-current', 'true');
      } else {
        bulletEl.removeAttribute('aria-current');
      }
    });
  }
  const initNavEl = (el, wrapperId, message) => {
    makeElFocusable(el);
    if (el.tagName !== 'BUTTON') {
      addElRole(el, 'button');
      el.addEventListener('keydown', onEnterOrSpaceKey);
    }
    addElLabel(el, message);
    addElControls(el, wrapperId);
  };
  const handlePointerDown = () => {
    swiper.a11y.clicked = true;
  };
  const handlePointerUp = () => {
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        if (!swiper.destroyed) {
          swiper.a11y.clicked = false;
        }
      });
    });
  };
  const handleFocus = e => {
    if (swiper.a11y.clicked) return;
    const slideEl = e.target.closest(`.${swiper.params.slideClass}, swiper-slide`);
    if (!slideEl || !swiper.slides.includes(slideEl)) return;
    const isActive = swiper.slides.indexOf(slideEl) === swiper.activeIndex;
    const isVisible = swiper.params.watchSlidesProgress && swiper.visibleSlides && swiper.visibleSlides.includes(slideEl);
    if (isActive || isVisible) return;
    if (e.sourceCapabilities && e.sourceCapabilities.firesTouchEvents) return;
    if (swiper.isHorizontal()) {
      swiper.el.scrollLeft = 0;
    } else {
      swiper.el.scrollTop = 0;
    }
    swiper.slideTo(swiper.slides.indexOf(slideEl), 0);
  };
  const initSlides = () => {
    const params = swiper.params.a11y;
    if (params.itemRoleDescriptionMessage) {
      addElRoleDescription(swiper.slides, params.itemRoleDescriptionMessage);
    }
    if (params.slideRole) {
      addElRole(swiper.slides, params.slideRole);
    }
    const slidesLength = swiper.slides.length;
    if (params.slideLabelMessage) {
      swiper.slides.forEach((slideEl, index) => {
        const slideIndex = swiper.params.loop ? parseInt(slideEl.getAttribute('data-swiper-slide-index'), 10) : index;
        const ariaLabelMessage = params.slideLabelMessage.replace(/\{\{index\}\}/, slideIndex + 1).replace(/\{\{slidesLength\}\}/, slidesLength);
        addElLabel(slideEl, ariaLabelMessage);
      });
    }
  };
  const init = () => {
    const params = swiper.params.a11y;
    swiper.el.append(liveRegion);

    // Container
    const containerEl = swiper.el;
    if (params.containerRoleDescriptionMessage) {
      addElRoleDescription(containerEl, params.containerRoleDescriptionMessage);
    }
    if (params.containerMessage) {
      addElLabel(containerEl, params.containerMessage);
    }

    // Wrapper
    const wrapperEl = swiper.wrapperEl;
    const wrapperId = params.id || wrapperEl.getAttribute('id') || `swiper-wrapper-${getRandomNumber(16)}`;
    const live = swiper.params.autoplay && swiper.params.autoplay.enabled ? 'off' : 'polite';
    addElId(wrapperEl, wrapperId);
    addElLive(wrapperEl, live);

    // Slide
    initSlides();

    // Navigation
    let {
      nextEl,
      prevEl
    } = swiper.navigation ? swiper.navigation : {};
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    if (nextEl) {
      nextEl.forEach(el => initNavEl(el, wrapperId, params.nextSlideMessage));
    }
    if (prevEl) {
      prevEl.forEach(el => initNavEl(el, wrapperId, params.prevSlideMessage));
    }

    // Pagination
    if (hasClickablePagination()) {
      const paginationEl = makeElementsArray(swiper.pagination.el);
      paginationEl.forEach(el => {
        el.addEventListener('keydown', onEnterOrSpaceKey);
      });
    }

    // Tab focus
    swiper.el.addEventListener('focus', handleFocus, true);
    swiper.el.addEventListener('pointerdown', handlePointerDown, true);
    swiper.el.addEventListener('pointerup', handlePointerUp, true);
  };
  function destroy() {
    if (liveRegion) liveRegion.remove();
    let {
      nextEl,
      prevEl
    } = swiper.navigation ? swiper.navigation : {};
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    if (nextEl) {
      nextEl.forEach(el => el.removeEventListener('keydown', onEnterOrSpaceKey));
    }
    if (prevEl) {
      prevEl.forEach(el => el.removeEventListener('keydown', onEnterOrSpaceKey));
    }

    // Pagination
    if (hasClickablePagination()) {
      const paginationEl = makeElementsArray(swiper.pagination.el);
      paginationEl.forEach(el => {
        el.removeEventListener('keydown', onEnterOrSpaceKey);
      });
    }

    // Tab focus
    swiper.el.removeEventListener('focus', handleFocus, true);
    swiper.el.removeEventListener('pointerdown', handlePointerDown, true);
    swiper.el.removeEventListener('pointerup', handlePointerUp, true);
  }
  on('beforeInit', () => {
    liveRegion = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('span', swiper.params.a11y.notificationClass);
    liveRegion.setAttribute('aria-live', 'assertive');
    liveRegion.setAttribute('aria-atomic', 'true');
  });
  on('afterInit', () => {
    if (!swiper.params.a11y.enabled) return;
    init();
  });
  on('slidesLengthChange snapGridLengthChange slidesGridLengthChange', () => {
    if (!swiper.params.a11y.enabled) return;
    initSlides();
  });
  on('fromEdge toEdge afterInit lock unlock', () => {
    if (!swiper.params.a11y.enabled) return;
    updateNavigation();
  });
  on('paginationUpdate', () => {
    if (!swiper.params.a11y.enabled) return;
    updatePagination();
  });
  on('destroy', () => {
    if (!swiper.params.a11y.enabled) return;
    destroy();
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/autoplay.mjs":
/*!**************************************************!*\
  !*** ./node_modules/swiper/modules/autoplay.mjs ***!
  \**************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Autoplay)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");


/* eslint no-underscore-dangle: "off" */
/* eslint no-use-before-define: "off" */
function Autoplay(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit,
    params
  } = _ref;
  swiper.autoplay = {
    running: false,
    paused: false,
    timeLeft: 0
  };
  extendParams({
    autoplay: {
      enabled: false,
      delay: 3000,
      waitForTransition: true,
      disableOnInteraction: false,
      stopOnLastSlide: false,
      reverseDirection: false,
      pauseOnMouseEnter: false
    }
  });
  let timeout;
  let raf;
  let autoplayDelayTotal = params && params.autoplay ? params.autoplay.delay : 3000;
  let autoplayDelayCurrent = params && params.autoplay ? params.autoplay.delay : 3000;
  let autoplayTimeLeft;
  let autoplayStartTime = new Date().getTime();
  let wasPaused;
  let isTouched;
  let pausedByTouch;
  let touchStartTimeout;
  let slideChanged;
  let pausedByInteraction;
  let pausedByPointerEnter;
  function onTransitionEnd(e) {
    if (!swiper || swiper.destroyed || !swiper.wrapperEl) return;
    if (e.target !== swiper.wrapperEl) return;
    swiper.wrapperEl.removeEventListener('transitionend', onTransitionEnd);
    if (pausedByPointerEnter) {
      return;
    }
    resume();
  }
  const calcTimeLeft = () => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    if (swiper.autoplay.paused) {
      wasPaused = true;
    } else if (wasPaused) {
      autoplayDelayCurrent = autoplayTimeLeft;
      wasPaused = false;
    }
    const timeLeft = swiper.autoplay.paused ? autoplayTimeLeft : autoplayStartTime + autoplayDelayCurrent - new Date().getTime();
    swiper.autoplay.timeLeft = timeLeft;
    emit('autoplayTimeLeft', timeLeft, timeLeft / autoplayDelayTotal);
    raf = requestAnimationFrame(() => {
      calcTimeLeft();
    });
  };
  const getSlideDelay = () => {
    let activeSlideEl;
    if (swiper.virtual && swiper.params.virtual.enabled) {
      activeSlideEl = swiper.slides.filter(slideEl => slideEl.classList.contains('swiper-slide-active'))[0];
    } else {
      activeSlideEl = swiper.slides[swiper.activeIndex];
    }
    if (!activeSlideEl) return undefined;
    const currentSlideDelay = parseInt(activeSlideEl.getAttribute('data-swiper-autoplay'), 10);
    return currentSlideDelay;
  };
  const run = delayForce => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    cancelAnimationFrame(raf);
    calcTimeLeft();
    let delay = typeof delayForce === 'undefined' ? swiper.params.autoplay.delay : delayForce;
    autoplayDelayTotal = swiper.params.autoplay.delay;
    autoplayDelayCurrent = swiper.params.autoplay.delay;
    const currentSlideDelay = getSlideDelay();
    if (!Number.isNaN(currentSlideDelay) && currentSlideDelay > 0 && typeof delayForce === 'undefined') {
      delay = currentSlideDelay;
      autoplayDelayTotal = currentSlideDelay;
      autoplayDelayCurrent = currentSlideDelay;
    }
    autoplayTimeLeft = delay;
    const speed = swiper.params.speed;
    const proceed = () => {
      if (!swiper || swiper.destroyed) return;
      if (swiper.params.autoplay.reverseDirection) {
        if (!swiper.isBeginning || swiper.params.loop || swiper.params.rewind) {
          swiper.slidePrev(speed, true, true);
          emit('autoplay');
        } else if (!swiper.params.autoplay.stopOnLastSlide) {
          swiper.slideTo(swiper.slides.length - 1, speed, true, true);
          emit('autoplay');
        }
      } else {
        if (!swiper.isEnd || swiper.params.loop || swiper.params.rewind) {
          swiper.slideNext(speed, true, true);
          emit('autoplay');
        } else if (!swiper.params.autoplay.stopOnLastSlide) {
          swiper.slideTo(0, speed, true, true);
          emit('autoplay');
        }
      }
      if (swiper.params.cssMode) {
        autoplayStartTime = new Date().getTime();
        requestAnimationFrame(() => {
          run();
        });
      }
    };
    if (delay > 0) {
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        proceed();
      }, delay);
    } else {
      requestAnimationFrame(() => {
        proceed();
      });
    }

    // eslint-disable-next-line
    return delay;
  };
  const start = () => {
    autoplayStartTime = new Date().getTime();
    swiper.autoplay.running = true;
    run();
    emit('autoplayStart');
  };
  const stop = () => {
    swiper.autoplay.running = false;
    clearTimeout(timeout);
    cancelAnimationFrame(raf);
    emit('autoplayStop');
  };
  const pause = (internal, reset) => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    clearTimeout(timeout);
    if (!internal) {
      pausedByInteraction = true;
    }
    const proceed = () => {
      emit('autoplayPause');
      if (swiper.params.autoplay.waitForTransition) {
        swiper.wrapperEl.addEventListener('transitionend', onTransitionEnd);
      } else {
        resume();
      }
    };
    swiper.autoplay.paused = true;
    if (reset) {
      if (slideChanged) {
        autoplayTimeLeft = swiper.params.autoplay.delay;
      }
      slideChanged = false;
      proceed();
      return;
    }
    const delay = autoplayTimeLeft || swiper.params.autoplay.delay;
    autoplayTimeLeft = delay - (new Date().getTime() - autoplayStartTime);
    if (swiper.isEnd && autoplayTimeLeft < 0 && !swiper.params.loop) return;
    if (autoplayTimeLeft < 0) autoplayTimeLeft = 0;
    proceed();
  };
  const resume = () => {
    if (swiper.isEnd && autoplayTimeLeft < 0 && !swiper.params.loop || swiper.destroyed || !swiper.autoplay.running) return;
    autoplayStartTime = new Date().getTime();
    if (pausedByInteraction) {
      pausedByInteraction = false;
      run(autoplayTimeLeft);
    } else {
      run();
    }
    swiper.autoplay.paused = false;
    emit('autoplayResume');
  };
  const onVisibilityChange = () => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
    if (document.visibilityState === 'hidden') {
      pausedByInteraction = true;
      pause(true);
    }
    if (document.visibilityState === 'visible') {
      resume();
    }
  };
  const onPointerEnter = e => {
    if (e.pointerType !== 'mouse') return;
    pausedByInteraction = true;
    pausedByPointerEnter = true;
    if (swiper.animating || swiper.autoplay.paused) return;
    pause(true);
  };
  const onPointerLeave = e => {
    if (e.pointerType !== 'mouse') return;
    pausedByPointerEnter = false;
    if (swiper.autoplay.paused) {
      resume();
    }
  };
  const attachMouseEvents = () => {
    if (swiper.params.autoplay.pauseOnMouseEnter) {
      swiper.el.addEventListener('pointerenter', onPointerEnter);
      swiper.el.addEventListener('pointerleave', onPointerLeave);
    }
  };
  const detachMouseEvents = () => {
    swiper.el.removeEventListener('pointerenter', onPointerEnter);
    swiper.el.removeEventListener('pointerleave', onPointerLeave);
  };
  const attachDocumentEvents = () => {
    const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
    document.addEventListener('visibilitychange', onVisibilityChange);
  };
  const detachDocumentEvents = () => {
    const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
    document.removeEventListener('visibilitychange', onVisibilityChange);
  };
  on('init', () => {
    if (swiper.params.autoplay.enabled) {
      attachMouseEvents();
      attachDocumentEvents();
      start();
    }
  });
  on('destroy', () => {
    detachMouseEvents();
    detachDocumentEvents();
    if (swiper.autoplay.running) {
      stop();
    }
  });
  on('_freeModeStaticRelease', () => {
    if (pausedByTouch || pausedByInteraction) {
      resume();
    }
  });
  on('_freeModeNoMomentumRelease', () => {
    if (!swiper.params.autoplay.disableOnInteraction) {
      pause(true, true);
    } else {
      stop();
    }
  });
  on('beforeTransitionStart', (_s, speed, internal) => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    if (internal || !swiper.params.autoplay.disableOnInteraction) {
      pause(true, true);
    } else {
      stop();
    }
  });
  on('sliderFirstMove', () => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    if (swiper.params.autoplay.disableOnInteraction) {
      stop();
      return;
    }
    isTouched = true;
    pausedByTouch = false;
    pausedByInteraction = false;
    touchStartTimeout = setTimeout(() => {
      pausedByInteraction = true;
      pausedByTouch = true;
      pause(true);
    }, 200);
  });
  on('touchEnd', () => {
    if (swiper.destroyed || !swiper.autoplay.running || !isTouched) return;
    clearTimeout(touchStartTimeout);
    clearTimeout(timeout);
    if (swiper.params.autoplay.disableOnInteraction) {
      pausedByTouch = false;
      isTouched = false;
      return;
    }
    if (pausedByTouch && swiper.params.cssMode) resume();
    pausedByTouch = false;
    isTouched = false;
  });
  on('slideChange', () => {
    if (swiper.destroyed || !swiper.autoplay.running) return;
    slideChanged = true;
  });
  Object.assign(swiper.autoplay, {
    start,
    stop,
    pause,
    resume
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/controller.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/modules/controller.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Controller)
/* harmony export */ });
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


/* eslint no-bitwise: ["error", { "allow": [">>"] }] */
function Controller(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    controller: {
      control: undefined,
      inverse: false,
      by: 'slide' // or 'container'
    }
  });

  swiper.controller = {
    control: undefined
  };
  function LinearSpline(x, y) {
    const binarySearch = function search() {
      let maxIndex;
      let minIndex;
      let guess;
      return (array, val) => {
        minIndex = -1;
        maxIndex = array.length;
        while (maxIndex - minIndex > 1) {
          guess = maxIndex + minIndex >> 1;
          if (array[guess] <= val) {
            minIndex = guess;
          } else {
            maxIndex = guess;
          }
        }
        return maxIndex;
      };
    }();
    this.x = x;
    this.y = y;
    this.lastIndex = x.length - 1;
    // Given an x value (x2), return the expected y2 value:
    // (x1,y1) is the known point before given value,
    // (x3,y3) is the known point after given value.
    let i1;
    let i3;
    this.interpolate = function interpolate(x2) {
      if (!x2) return 0;

      // Get the indexes of x1 and x3 (the array indexes before and after given x2):
      i3 = binarySearch(this.x, x2);
      i1 = i3 - 1;

      // We have our indexes i1 & i3, so we can calculate already:
      // y2 := ((x2−x1) × (y3−y1)) ÷ (x3−x1) + y1
      return (x2 - this.x[i1]) * (this.y[i3] - this.y[i1]) / (this.x[i3] - this.x[i1]) + this.y[i1];
    };
    return this;
  }
  function getInterpolateFunction(c) {
    swiper.controller.spline = swiper.params.loop ? new LinearSpline(swiper.slidesGrid, c.slidesGrid) : new LinearSpline(swiper.snapGrid, c.snapGrid);
  }
  function setTranslate(_t, byController) {
    const controlled = swiper.controller.control;
    let multiplier;
    let controlledTranslate;
    const Swiper = swiper.constructor;
    function setControlledTranslate(c) {
      if (c.destroyed) return;

      // this will create an Interpolate function based on the snapGrids
      // x is the Grid of the scrolled scroller and y will be the controlled scroller
      // it makes sense to create this only once and recall it for the interpolation
      // the function does a lot of value caching for performance
      const translate = swiper.rtlTranslate ? -swiper.translate : swiper.translate;
      if (swiper.params.controller.by === 'slide') {
        getInterpolateFunction(c);
        // i am not sure why the values have to be multiplicated this way, tried to invert the snapGrid
        // but it did not work out
        controlledTranslate = -swiper.controller.spline.interpolate(-translate);
      }
      if (!controlledTranslate || swiper.params.controller.by === 'container') {
        multiplier = (c.maxTranslate() - c.minTranslate()) / (swiper.maxTranslate() - swiper.minTranslate());
        if (Number.isNaN(multiplier) || !Number.isFinite(multiplier)) {
          multiplier = 1;
        }
        controlledTranslate = (translate - swiper.minTranslate()) * multiplier + c.minTranslate();
      }
      if (swiper.params.controller.inverse) {
        controlledTranslate = c.maxTranslate() - controlledTranslate;
      }
      c.updateProgress(controlledTranslate);
      c.setTranslate(controlledTranslate, swiper);
      c.updateActiveIndex();
      c.updateSlidesClasses();
    }
    if (Array.isArray(controlled)) {
      for (let i = 0; i < controlled.length; i += 1) {
        if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
          setControlledTranslate(controlled[i]);
        }
      }
    } else if (controlled instanceof Swiper && byController !== controlled) {
      setControlledTranslate(controlled);
    }
  }
  function setTransition(duration, byController) {
    const Swiper = swiper.constructor;
    const controlled = swiper.controller.control;
    let i;
    function setControlledTransition(c) {
      if (c.destroyed) return;
      c.setTransition(duration, swiper);
      if (duration !== 0) {
        c.transitionStart();
        if (c.params.autoHeight) {
          (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.n)(() => {
            c.updateAutoHeight();
          });
        }
        (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.j)(c.wrapperEl, () => {
          if (!controlled) return;
          c.transitionEnd();
        });
      }
    }
    if (Array.isArray(controlled)) {
      for (i = 0; i < controlled.length; i += 1) {
        if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
          setControlledTransition(controlled[i]);
        }
      }
    } else if (controlled instanceof Swiper && byController !== controlled) {
      setControlledTransition(controlled);
    }
  }
  function removeSpline() {
    if (!swiper.controller.control) return;
    if (swiper.controller.spline) {
      swiper.controller.spline = undefined;
      delete swiper.controller.spline;
    }
  }
  on('beforeInit', () => {
    if (typeof window !== 'undefined' && (
    // eslint-disable-line
    typeof swiper.params.controller.control === 'string' || swiper.params.controller.control instanceof HTMLElement)) {
      const controlElement = document.querySelector(swiper.params.controller.control);
      if (controlElement && controlElement.swiper) {
        swiper.controller.control = controlElement.swiper;
      } else if (controlElement) {
        const onControllerSwiper = e => {
          swiper.controller.control = e.detail[0];
          swiper.update();
          controlElement.removeEventListener('init', onControllerSwiper);
        };
        controlElement.addEventListener('init', onControllerSwiper);
      }
      return;
    }
    swiper.controller.control = swiper.params.controller.control;
  });
  on('update', () => {
    removeSpline();
  });
  on('resize', () => {
    removeSpline();
  });
  on('observerUpdate', () => {
    removeSpline();
  });
  on('setTranslate', (_s, translate, byController) => {
    if (!swiper.controller.control || swiper.controller.control.destroyed) return;
    swiper.controller.setTranslate(translate, byController);
  });
  on('setTransition', (_s, duration, byController) => {
    if (!swiper.controller.control || swiper.controller.control.destroyed) return;
    swiper.controller.setTransition(duration, byController);
  });
  Object.assign(swiper.controller, {
    setTranslate,
    setTransition
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-cards.mjs":
/*!******************************************************!*\
  !*** ./node_modules/swiper/modules/effect-cards.mjs ***!
  \******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectCards)
/* harmony export */ });
/* harmony import */ var _shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/create-shadow.mjs */ "./node_modules/swiper/shared/create-shadow.mjs");
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/effect-target.mjs */ "./node_modules/swiper/shared/effect-target.mjs");
/* harmony import */ var _shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/effect-virtual-transition-end.mjs */ "./node_modules/swiper/shared/effect-virtual-transition-end.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");






function EffectCards(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    cardsEffect: {
      slideShadows: true,
      rotate: true,
      perSlideRotate: 2,
      perSlideOffset: 8
    }
  });
  const setTranslate = () => {
    const {
      slides,
      activeIndex,
      rtlTranslate: rtl
    } = swiper;
    const params = swiper.params.cardsEffect;
    const {
      startTranslate,
      isTouched
    } = swiper.touchEventsData;
    const currentTranslate = rtl ? -swiper.translate : swiper.translate;
    for (let i = 0; i < slides.length; i += 1) {
      const slideEl = slides[i];
      const slideProgress = slideEl.progress;
      const progress = Math.min(Math.max(slideProgress, -4), 4);
      let offset = slideEl.swiperSlideOffset;
      if (swiper.params.centeredSlides && !swiper.params.cssMode) {
        swiper.wrapperEl.style.transform = `translateX(${swiper.minTranslate()}px)`;
      }
      if (swiper.params.centeredSlides && swiper.params.cssMode) {
        offset -= slides[0].swiperSlideOffset;
      }
      let tX = swiper.params.cssMode ? -offset - swiper.translate : -offset;
      let tY = 0;
      const tZ = -100 * Math.abs(progress);
      let scale = 1;
      let rotate = -params.perSlideRotate * progress;
      let tXAdd = params.perSlideOffset - Math.abs(progress) * 0.75;
      const slideIndex = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.from + i : i;
      const isSwipeToNext = (slideIndex === activeIndex || slideIndex === activeIndex - 1) && progress > 0 && progress < 1 && (isTouched || swiper.params.cssMode) && currentTranslate < startTranslate;
      const isSwipeToPrev = (slideIndex === activeIndex || slideIndex === activeIndex + 1) && progress < 0 && progress > -1 && (isTouched || swiper.params.cssMode) && currentTranslate > startTranslate;
      if (isSwipeToNext || isSwipeToPrev) {
        const subProgress = (1 - Math.abs((Math.abs(progress) - 0.5) / 0.5)) ** 0.5;
        rotate += -28 * progress * subProgress;
        scale += -0.5 * subProgress;
        tXAdd += 96 * subProgress;
        tY = `${-25 * subProgress * Math.abs(progress)}%`;
      }
      if (progress < 0) {
        // next
        tX = `calc(${tX}px ${rtl ? '-' : '+'} (${tXAdd * Math.abs(progress)}%))`;
      } else if (progress > 0) {
        // prev
        tX = `calc(${tX}px ${rtl ? '-' : '+'} (-${tXAdd * Math.abs(progress)}%))`;
      } else {
        tX = `${tX}px`;
      }
      if (!swiper.isHorizontal()) {
        const prevY = tY;
        tY = tX;
        tX = prevY;
      }
      const scaleString = progress < 0 ? `${1 + (1 - scale) * progress}` : `${1 - (1 - scale) * progress}`;

      /* eslint-disable */
      const transform = `
        translate3d(${tX}, ${tY}, ${tZ}px)
        rotateZ(${params.rotate ? rtl ? -rotate : rotate : 0}deg)
        scale(${scaleString})
      `;
      /* eslint-enable */

      if (params.slideShadows) {
        // Set shadows
        let shadowEl = slideEl.querySelector('.swiper-slide-shadow');
        if (!shadowEl) {
          shadowEl = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('cards', slideEl);
        }
        if (shadowEl) shadowEl.style.opacity = Math.min(Math.max((Math.abs(progress) - 0.5) / 0.5, 0), 1);
      }
      slideEl.style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
      const targetEl = (0,_shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__.e)(params, slideEl);
      targetEl.style.transform = transform;
    }
  };
  const setTransition = duration => {
    const transformElements = swiper.slides.map(slideEl => (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__.l)(slideEl));
    transformElements.forEach(el => {
      el.style.transitionDuration = `${duration}ms`;
      el.querySelectorAll('.swiper-slide-shadow').forEach(shadowEl => {
        shadowEl.style.transitionDuration = `${duration}ms`;
      });
    });
    (0,_shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__.e)({
      swiper,
      duration,
      transformElements
    });
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__.e)({
    effect: 'cards',
    swiper,
    on,
    setTranslate,
    setTransition,
    perspective: () => true,
    overwriteParams: () => ({
      watchSlidesProgress: true,
      virtualTranslate: !swiper.params.cssMode
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-coverflow.mjs":
/*!**********************************************************!*\
  !*** ./node_modules/swiper/modules/effect-coverflow.mjs ***!
  \**********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectCoverflow)
/* harmony export */ });
/* harmony import */ var _shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/create-shadow.mjs */ "./node_modules/swiper/shared/create-shadow.mjs");
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/effect-target.mjs */ "./node_modules/swiper/shared/effect-target.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");





function EffectCoverflow(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      scale: 1,
      modifier: 1,
      slideShadows: true
    }
  });
  const setTranslate = () => {
    const {
      width: swiperWidth,
      height: swiperHeight,
      slides,
      slidesSizesGrid
    } = swiper;
    const params = swiper.params.coverflowEffect;
    const isHorizontal = swiper.isHorizontal();
    const transform = swiper.translate;
    const center = isHorizontal ? -transform + swiperWidth / 2 : -transform + swiperHeight / 2;
    const rotate = isHorizontal ? params.rotate : -params.rotate;
    const translate = params.depth;
    // Each slide offset from center
    for (let i = 0, length = slides.length; i < length; i += 1) {
      const slideEl = slides[i];
      const slideSize = slidesSizesGrid[i];
      const slideOffset = slideEl.swiperSlideOffset;
      const centerOffset = (center - slideOffset - slideSize / 2) / slideSize;
      const offsetMultiplier = typeof params.modifier === 'function' ? params.modifier(centerOffset) : centerOffset * params.modifier;
      let rotateY = isHorizontal ? rotate * offsetMultiplier : 0;
      let rotateX = isHorizontal ? 0 : rotate * offsetMultiplier;
      // var rotateZ = 0
      let translateZ = -translate * Math.abs(offsetMultiplier);
      let stretch = params.stretch;
      // Allow percentage to make a relative stretch for responsive sliders
      if (typeof stretch === 'string' && stretch.indexOf('%') !== -1) {
        stretch = parseFloat(params.stretch) / 100 * slideSize;
      }
      let translateY = isHorizontal ? 0 : stretch * offsetMultiplier;
      let translateX = isHorizontal ? stretch * offsetMultiplier : 0;
      let scale = 1 - (1 - params.scale) * Math.abs(offsetMultiplier);

      // Fix for ultra small values
      if (Math.abs(translateX) < 0.001) translateX = 0;
      if (Math.abs(translateY) < 0.001) translateY = 0;
      if (Math.abs(translateZ) < 0.001) translateZ = 0;
      if (Math.abs(rotateY) < 0.001) rotateY = 0;
      if (Math.abs(rotateX) < 0.001) rotateX = 0;
      if (Math.abs(scale) < 0.001) scale = 0;
      if (swiper.browser && swiper.browser.isSafari) {
        if (Math.abs(rotateY) / 90 % 2 === 1) {
          rotateY += 0.001;
        }
        if (Math.abs(rotateX) / 90 % 2 === 1) {
          rotateX += 0.001;
        }
      }
      const slideTransform = `translate3d(${translateX}px,${translateY}px,${translateZ}px)  rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(${scale})`;
      const targetEl = (0,_shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__.e)(params, slideEl);
      targetEl.style.transform = slideTransform;
      slideEl.style.zIndex = -Math.abs(Math.round(offsetMultiplier)) + 1;
      if (params.slideShadows) {
        // Set shadows
        let shadowBeforeEl = isHorizontal ? slideEl.querySelector('.swiper-slide-shadow-left') : slideEl.querySelector('.swiper-slide-shadow-top');
        let shadowAfterEl = isHorizontal ? slideEl.querySelector('.swiper-slide-shadow-right') : slideEl.querySelector('.swiper-slide-shadow-bottom');
        if (!shadowBeforeEl) {
          shadowBeforeEl = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('coverflow', slideEl, isHorizontal ? 'left' : 'top');
        }
        if (!shadowAfterEl) {
          shadowAfterEl = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('coverflow', slideEl, isHorizontal ? 'right' : 'bottom');
        }
        if (shadowBeforeEl) shadowBeforeEl.style.opacity = offsetMultiplier > 0 ? offsetMultiplier : 0;
        if (shadowAfterEl) shadowAfterEl.style.opacity = -offsetMultiplier > 0 ? -offsetMultiplier : 0;
      }
    }
  };
  const setTransition = duration => {
    const transformElements = swiper.slides.map(slideEl => (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_3__.l)(slideEl));
    transformElements.forEach(el => {
      el.style.transitionDuration = `${duration}ms`;
      el.querySelectorAll('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').forEach(shadowEl => {
        shadowEl.style.transitionDuration = `${duration}ms`;
      });
    });
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__.e)({
    effect: 'coverflow',
    swiper,
    on,
    setTranslate,
    setTransition,
    perspective: () => true,
    overwriteParams: () => ({
      watchSlidesProgress: true
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-creative.mjs":
/*!*********************************************************!*\
  !*** ./node_modules/swiper/modules/effect-creative.mjs ***!
  \*********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectCreative)
/* harmony export */ });
/* harmony import */ var _shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/create-shadow.mjs */ "./node_modules/swiper/shared/create-shadow.mjs");
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/effect-target.mjs */ "./node_modules/swiper/shared/effect-target.mjs");
/* harmony import */ var _shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/effect-virtual-transition-end.mjs */ "./node_modules/swiper/shared/effect-virtual-transition-end.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");






function EffectCreative(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    creativeEffect: {
      limitProgress: 1,
      shadowPerProgress: false,
      progressMultiplier: 1,
      perspective: true,
      prev: {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        opacity: 1,
        scale: 1
      },
      next: {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        opacity: 1,
        scale: 1
      }
    }
  });
  const getTranslateValue = value => {
    if (typeof value === 'string') return value;
    return `${value}px`;
  };
  const setTranslate = () => {
    const {
      slides,
      wrapperEl,
      slidesSizesGrid
    } = swiper;
    const params = swiper.params.creativeEffect;
    const {
      progressMultiplier: multiplier
    } = params;
    const isCenteredSlides = swiper.params.centeredSlides;
    if (isCenteredSlides) {
      const margin = slidesSizesGrid[0] / 2 - swiper.params.slidesOffsetBefore || 0;
      wrapperEl.style.transform = `translateX(calc(50% - ${margin}px))`;
    }
    for (let i = 0; i < slides.length; i += 1) {
      const slideEl = slides[i];
      const slideProgress = slideEl.progress;
      const progress = Math.min(Math.max(slideEl.progress, -params.limitProgress), params.limitProgress);
      let originalProgress = progress;
      if (!isCenteredSlides) {
        originalProgress = Math.min(Math.max(slideEl.originalProgress, -params.limitProgress), params.limitProgress);
      }
      const offset = slideEl.swiperSlideOffset;
      const t = [swiper.params.cssMode ? -offset - swiper.translate : -offset, 0, 0];
      const r = [0, 0, 0];
      let custom = false;
      if (!swiper.isHorizontal()) {
        t[1] = t[0];
        t[0] = 0;
      }
      let data = {
        translate: [0, 0, 0],
        rotate: [0, 0, 0],
        scale: 1,
        opacity: 1
      };
      if (progress < 0) {
        data = params.next;
        custom = true;
      } else if (progress > 0) {
        data = params.prev;
        custom = true;
      }
      // set translate
      t.forEach((value, index) => {
        t[index] = `calc(${value}px + (${getTranslateValue(data.translate[index])} * ${Math.abs(progress * multiplier)}))`;
      });
      // set rotates
      r.forEach((value, index) => {
        let val = data.rotate[index] * Math.abs(progress * multiplier);
        if (swiper.browser && swiper.browser.isSafari && Math.abs(val) / 90 % 2 === 1) {
          val += 0.001;
        }
        r[index] = val;
      });
      slideEl.style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
      const translateString = t.join(', ');
      const rotateString = `rotateX(${r[0]}deg) rotateY(${r[1]}deg) rotateZ(${r[2]}deg)`;
      const scaleString = originalProgress < 0 ? `scale(${1 + (1 - data.scale) * originalProgress * multiplier})` : `scale(${1 - (1 - data.scale) * originalProgress * multiplier})`;
      const opacityString = originalProgress < 0 ? 1 + (1 - data.opacity) * originalProgress * multiplier : 1 - (1 - data.opacity) * originalProgress * multiplier;
      const transform = `translate3d(${translateString}) ${rotateString} ${scaleString}`;

      // Set shadows
      if (custom && data.shadow || !custom) {
        let shadowEl = slideEl.querySelector('.swiper-slide-shadow');
        if (!shadowEl && data.shadow) {
          shadowEl = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('creative', slideEl);
        }
        if (shadowEl) {
          const shadowOpacity = params.shadowPerProgress ? progress * (1 / params.limitProgress) : progress;
          shadowEl.style.opacity = Math.min(Math.max(Math.abs(shadowOpacity), 0), 1);
        }
      }
      const targetEl = (0,_shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__.e)(params, slideEl);
      targetEl.style.transform = transform;
      targetEl.style.opacity = opacityString;
      if (data.origin) {
        targetEl.style.transformOrigin = data.origin;
      }
    }
  };
  const setTransition = duration => {
    const transformElements = swiper.slides.map(slideEl => (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__.l)(slideEl));
    transformElements.forEach(el => {
      el.style.transitionDuration = `${duration}ms`;
      el.querySelectorAll('.swiper-slide-shadow').forEach(shadowEl => {
        shadowEl.style.transitionDuration = `${duration}ms`;
      });
    });
    (0,_shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__.e)({
      swiper,
      duration,
      transformElements,
      allSlides: true
    });
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__.e)({
    effect: 'creative',
    swiper,
    on,
    setTranslate,
    setTransition,
    perspective: () => swiper.params.creativeEffect.perspective,
    overwriteParams: () => ({
      watchSlidesProgress: true,
      virtualTranslate: !swiper.params.cssMode
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-cube.mjs":
/*!*****************************************************!*\
  !*** ./node_modules/swiper/modules/effect-cube.mjs ***!
  \*****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectCube)
/* harmony export */ });
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function EffectCube(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    cubeEffect: {
      slideShadows: true,
      shadow: true,
      shadowOffset: 20,
      shadowScale: 0.94
    }
  });
  const createSlideShadows = (slideEl, progress, isHorizontal) => {
    let shadowBefore = isHorizontal ? slideEl.querySelector('.swiper-slide-shadow-left') : slideEl.querySelector('.swiper-slide-shadow-top');
    let shadowAfter = isHorizontal ? slideEl.querySelector('.swiper-slide-shadow-right') : slideEl.querySelector('.swiper-slide-shadow-bottom');
    if (!shadowBefore) {
      shadowBefore = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', `swiper-slide-shadow-cube swiper-slide-shadow-${isHorizontal ? 'left' : 'top'}`.split(' '));
      slideEl.append(shadowBefore);
    }
    if (!shadowAfter) {
      shadowAfter = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', `swiper-slide-shadow-cube swiper-slide-shadow-${isHorizontal ? 'right' : 'bottom'}`.split(' '));
      slideEl.append(shadowAfter);
    }
    if (shadowBefore) shadowBefore.style.opacity = Math.max(-progress, 0);
    if (shadowAfter) shadowAfter.style.opacity = Math.max(progress, 0);
  };
  const recreateShadows = () => {
    // create new ones
    const isHorizontal = swiper.isHorizontal();
    swiper.slides.forEach(slideEl => {
      const progress = Math.max(Math.min(slideEl.progress, 1), -1);
      createSlideShadows(slideEl, progress, isHorizontal);
    });
  };
  const setTranslate = () => {
    const {
      el,
      wrapperEl,
      slides,
      width: swiperWidth,
      height: swiperHeight,
      rtlTranslate: rtl,
      size: swiperSize,
      browser
    } = swiper;
    const params = swiper.params.cubeEffect;
    const isHorizontal = swiper.isHorizontal();
    const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
    let wrapperRotate = 0;
    let cubeShadowEl;
    if (params.shadow) {
      if (isHorizontal) {
        cubeShadowEl = swiper.wrapperEl.querySelector('.swiper-cube-shadow');
        if (!cubeShadowEl) {
          cubeShadowEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', 'swiper-cube-shadow');
          swiper.wrapperEl.append(cubeShadowEl);
        }
        cubeShadowEl.style.height = `${swiperWidth}px`;
      } else {
        cubeShadowEl = el.querySelector('.swiper-cube-shadow');
        if (!cubeShadowEl) {
          cubeShadowEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', 'swiper-cube-shadow');
          el.append(cubeShadowEl);
        }
      }
    }
    for (let i = 0; i < slides.length; i += 1) {
      const slideEl = slides[i];
      let slideIndex = i;
      if (isVirtual) {
        slideIndex = parseInt(slideEl.getAttribute('data-swiper-slide-index'), 10);
      }
      let slideAngle = slideIndex * 90;
      let round = Math.floor(slideAngle / 360);
      if (rtl) {
        slideAngle = -slideAngle;
        round = Math.floor(-slideAngle / 360);
      }
      const progress = Math.max(Math.min(slideEl.progress, 1), -1);
      let tx = 0;
      let ty = 0;
      let tz = 0;
      if (slideIndex % 4 === 0) {
        tx = -round * 4 * swiperSize;
        tz = 0;
      } else if ((slideIndex - 1) % 4 === 0) {
        tx = 0;
        tz = -round * 4 * swiperSize;
      } else if ((slideIndex - 2) % 4 === 0) {
        tx = swiperSize + round * 4 * swiperSize;
        tz = swiperSize;
      } else if ((slideIndex - 3) % 4 === 0) {
        tx = -swiperSize;
        tz = 3 * swiperSize + swiperSize * 4 * round;
      }
      if (rtl) {
        tx = -tx;
      }
      if (!isHorizontal) {
        ty = tx;
        tx = 0;
      }
      const transform = `rotateX(${isHorizontal ? 0 : -slideAngle}deg) rotateY(${isHorizontal ? slideAngle : 0}deg) translate3d(${tx}px, ${ty}px, ${tz}px)`;
      if (progress <= 1 && progress > -1) {
        wrapperRotate = slideIndex * 90 + progress * 90;
        if (rtl) wrapperRotate = -slideIndex * 90 - progress * 90;
        if (swiper.browser && swiper.browser.isSafari && Math.abs(wrapperRotate) / 90 % 2 === 1) {
          wrapperRotate += 0.001;
        }
      }
      slideEl.style.transform = transform;
      if (params.slideShadows) {
        createSlideShadows(slideEl, progress, isHorizontal);
      }
    }
    wrapperEl.style.transformOrigin = `50% 50% -${swiperSize / 2}px`;
    wrapperEl.style['-webkit-transform-origin'] = `50% 50% -${swiperSize / 2}px`;
    if (params.shadow) {
      if (isHorizontal) {
        cubeShadowEl.style.transform = `translate3d(0px, ${swiperWidth / 2 + params.shadowOffset}px, ${-swiperWidth / 2}px) rotateX(89.99deg) rotateZ(0deg) scale(${params.shadowScale})`;
      } else {
        const shadowAngle = Math.abs(wrapperRotate) - Math.floor(Math.abs(wrapperRotate) / 90) * 90;
        const multiplier = 1.5 - (Math.sin(shadowAngle * 2 * Math.PI / 360) / 2 + Math.cos(shadowAngle * 2 * Math.PI / 360) / 2);
        const scale1 = params.shadowScale;
        const scale2 = params.shadowScale / multiplier;
        const offset = params.shadowOffset;
        cubeShadowEl.style.transform = `scale3d(${scale1}, 1, ${scale2}) translate3d(0px, ${swiperHeight / 2 + offset}px, ${-swiperHeight / 2 / scale2}px) rotateX(-89.99deg)`;
      }
    }
    const zFactor = (browser.isSafari || browser.isWebView) && browser.needPerspectiveFix ? -swiperSize / 2 : 0;
    wrapperEl.style.transform = `translate3d(0px,0,${zFactor}px) rotateX(${swiper.isHorizontal() ? 0 : wrapperRotate}deg) rotateY(${swiper.isHorizontal() ? -wrapperRotate : 0}deg)`;
    wrapperEl.style.setProperty('--swiper-cube-translate-z', `${zFactor}px`);
  };
  const setTransition = duration => {
    const {
      el,
      slides
    } = swiper;
    slides.forEach(slideEl => {
      slideEl.style.transitionDuration = `${duration}ms`;
      slideEl.querySelectorAll('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').forEach(subEl => {
        subEl.style.transitionDuration = `${duration}ms`;
      });
    });
    if (swiper.params.cubeEffect.shadow && !swiper.isHorizontal()) {
      const shadowEl = el.querySelector('.swiper-cube-shadow');
      if (shadowEl) shadowEl.style.transitionDuration = `${duration}ms`;
    }
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_0__.e)({
    effect: 'cube',
    swiper,
    on,
    setTranslate,
    setTransition,
    recreateShadows,
    getEffectParams: () => swiper.params.cubeEffect,
    perspective: () => true,
    overwriteParams: () => ({
      slidesPerView: 1,
      slidesPerGroup: 1,
      watchSlidesProgress: true,
      resistanceRatio: 0,
      spaceBetween: 0,
      centeredSlides: false,
      virtualTranslate: true
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-fade.mjs":
/*!*****************************************************!*\
  !*** ./node_modules/swiper/modules/effect-fade.mjs ***!
  \*****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectFade)
/* harmony export */ });
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/effect-target.mjs */ "./node_modules/swiper/shared/effect-target.mjs");
/* harmony import */ var _shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/effect-virtual-transition-end.mjs */ "./node_modules/swiper/shared/effect-virtual-transition-end.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");





function EffectFade(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    fadeEffect: {
      crossFade: false
    }
  });
  const setTranslate = () => {
    const {
      slides
    } = swiper;
    const params = swiper.params.fadeEffect;
    for (let i = 0; i < slides.length; i += 1) {
      const slideEl = swiper.slides[i];
      const offset = slideEl.swiperSlideOffset;
      let tx = -offset;
      if (!swiper.params.virtualTranslate) tx -= swiper.translate;
      let ty = 0;
      if (!swiper.isHorizontal()) {
        ty = tx;
        tx = 0;
      }
      const slideOpacity = swiper.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(slideEl.progress), 0) : 1 + Math.min(Math.max(slideEl.progress, -1), 0);
      const targetEl = (0,_shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(params, slideEl);
      targetEl.style.opacity = slideOpacity;
      targetEl.style.transform = `translate3d(${tx}px, ${ty}px, 0px)`;
    }
  };
  const setTransition = duration => {
    const transformElements = swiper.slides.map(slideEl => (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_3__.l)(slideEl));
    transformElements.forEach(el => {
      el.style.transitionDuration = `${duration}ms`;
    });
    (0,_shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_2__.e)({
      swiper,
      duration,
      transformElements,
      allSlides: true
    });
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_0__.e)({
    effect: 'fade',
    swiper,
    on,
    setTranslate,
    setTransition,
    overwriteParams: () => ({
      slidesPerView: 1,
      slidesPerGroup: 1,
      watchSlidesProgress: true,
      spaceBetween: 0,
      virtualTranslate: !swiper.params.cssMode
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/effect-flip.mjs":
/*!*****************************************************!*\
  !*** ./node_modules/swiper/modules/effect-flip.mjs ***!
  \*****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ EffectFlip)
/* harmony export */ });
/* harmony import */ var _shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/create-shadow.mjs */ "./node_modules/swiper/shared/create-shadow.mjs");
/* harmony import */ var _shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/effect-init.mjs */ "./node_modules/swiper/shared/effect-init.mjs");
/* harmony import */ var _shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/effect-target.mjs */ "./node_modules/swiper/shared/effect-target.mjs");
/* harmony import */ var _shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/effect-virtual-transition-end.mjs */ "./node_modules/swiper/shared/effect-virtual-transition-end.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");






function EffectFlip(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    flipEffect: {
      slideShadows: true,
      limitRotation: true
    }
  });
  const createSlideShadows = (slideEl, progress) => {
    let shadowBefore = swiper.isHorizontal() ? slideEl.querySelector('.swiper-slide-shadow-left') : slideEl.querySelector('.swiper-slide-shadow-top');
    let shadowAfter = swiper.isHorizontal() ? slideEl.querySelector('.swiper-slide-shadow-right') : slideEl.querySelector('.swiper-slide-shadow-bottom');
    if (!shadowBefore) {
      shadowBefore = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('flip', slideEl, swiper.isHorizontal() ? 'left' : 'top');
    }
    if (!shadowAfter) {
      shadowAfter = (0,_shared_create_shadow_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('flip', slideEl, swiper.isHorizontal() ? 'right' : 'bottom');
    }
    if (shadowBefore) shadowBefore.style.opacity = Math.max(-progress, 0);
    if (shadowAfter) shadowAfter.style.opacity = Math.max(progress, 0);
  };
  const recreateShadows = () => {
    // Set shadows
    swiper.params.flipEffect;
    swiper.slides.forEach(slideEl => {
      let progress = slideEl.progress;
      if (swiper.params.flipEffect.limitRotation) {
        progress = Math.max(Math.min(slideEl.progress, 1), -1);
      }
      createSlideShadows(slideEl, progress);
    });
  };
  const setTranslate = () => {
    const {
      slides,
      rtlTranslate: rtl
    } = swiper;
    const params = swiper.params.flipEffect;
    for (let i = 0; i < slides.length; i += 1) {
      const slideEl = slides[i];
      let progress = slideEl.progress;
      if (swiper.params.flipEffect.limitRotation) {
        progress = Math.max(Math.min(slideEl.progress, 1), -1);
      }
      const offset = slideEl.swiperSlideOffset;
      const rotate = -180 * progress;
      let rotateY = rotate;
      let rotateX = 0;
      let tx = swiper.params.cssMode ? -offset - swiper.translate : -offset;
      let ty = 0;
      if (!swiper.isHorizontal()) {
        ty = tx;
        tx = 0;
        rotateX = -rotateY;
        rotateY = 0;
      } else if (rtl) {
        rotateY = -rotateY;
      }
      if (swiper.browser && swiper.browser.isSafari) {
        if (Math.abs(rotateY) / 90 % 2 === 1) {
          rotateY += 0.001;
        }
        if (Math.abs(rotateX) / 90 % 2 === 1) {
          rotateX += 0.001;
        }
      }
      slideEl.style.zIndex = -Math.abs(Math.round(progress)) + slides.length;
      if (params.slideShadows) {
        createSlideShadows(slideEl, progress);
      }
      const transform = `translate3d(${tx}px, ${ty}px, 0px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
      const targetEl = (0,_shared_effect_target_mjs__WEBPACK_IMPORTED_MODULE_2__.e)(params, slideEl);
      targetEl.style.transform = transform;
    }
  };
  const setTransition = duration => {
    const transformElements = swiper.slides.map(slideEl => (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_4__.l)(slideEl));
    transformElements.forEach(el => {
      el.style.transitionDuration = `${duration}ms`;
      el.querySelectorAll('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').forEach(shadowEl => {
        shadowEl.style.transitionDuration = `${duration}ms`;
      });
    });
    (0,_shared_effect_virtual_transition_end_mjs__WEBPACK_IMPORTED_MODULE_3__.e)({
      swiper,
      duration,
      transformElements
    });
  };
  (0,_shared_effect_init_mjs__WEBPACK_IMPORTED_MODULE_1__.e)({
    effect: 'flip',
    swiper,
    on,
    setTranslate,
    setTransition,
    recreateShadows,
    getEffectParams: () => swiper.params.flipEffect,
    perspective: () => true,
    overwriteParams: () => ({
      slidesPerView: 1,
      slidesPerGroup: 1,
      watchSlidesProgress: true,
      spaceBetween: 0,
      virtualTranslate: !swiper.params.cssMode
    })
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/free-mode.mjs":
/*!***************************************************!*\
  !*** ./node_modules/swiper/modules/free-mode.mjs ***!
  \***************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ freeMode)
/* harmony export */ });
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function freeMode(_ref) {
  let {
    swiper,
    extendParams,
    emit,
    once
  } = _ref;
  extendParams({
    freeMode: {
      enabled: false,
      momentum: true,
      momentumRatio: 1,
      momentumBounce: true,
      momentumBounceRatio: 1,
      momentumVelocityRatio: 1,
      sticky: false,
      minimumVelocity: 0.02
    }
  });
  function onTouchStart() {
    if (swiper.params.cssMode) return;
    const translate = swiper.getTranslate();
    swiper.setTranslate(translate);
    swiper.setTransition(0);
    swiper.touchEventsData.velocities.length = 0;
    swiper.freeMode.onTouchEnd({
      currentPos: swiper.rtl ? swiper.translate : -swiper.translate
    });
  }
  function onTouchMove() {
    if (swiper.params.cssMode) return;
    const {
      touchEventsData: data,
      touches
    } = swiper;
    // Velocity
    if (data.velocities.length === 0) {
      data.velocities.push({
        position: touches[swiper.isHorizontal() ? 'startX' : 'startY'],
        time: data.touchStartTime
      });
    }
    data.velocities.push({
      position: touches[swiper.isHorizontal() ? 'currentX' : 'currentY'],
      time: (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.d)()
    });
  }
  function onTouchEnd(_ref2) {
    let {
      currentPos
    } = _ref2;
    if (swiper.params.cssMode) return;
    const {
      params,
      wrapperEl,
      rtlTranslate: rtl,
      snapGrid,
      touchEventsData: data
    } = swiper;
    // Time diff
    const touchEndTime = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.d)();
    const timeDiff = touchEndTime - data.touchStartTime;
    if (currentPos < -swiper.minTranslate()) {
      swiper.slideTo(swiper.activeIndex);
      return;
    }
    if (currentPos > -swiper.maxTranslate()) {
      if (swiper.slides.length < snapGrid.length) {
        swiper.slideTo(snapGrid.length - 1);
      } else {
        swiper.slideTo(swiper.slides.length - 1);
      }
      return;
    }
    if (params.freeMode.momentum) {
      if (data.velocities.length > 1) {
        const lastMoveEvent = data.velocities.pop();
        const velocityEvent = data.velocities.pop();
        const distance = lastMoveEvent.position - velocityEvent.position;
        const time = lastMoveEvent.time - velocityEvent.time;
        swiper.velocity = distance / time;
        swiper.velocity /= 2;
        if (Math.abs(swiper.velocity) < params.freeMode.minimumVelocity) {
          swiper.velocity = 0;
        }
        // this implies that the user stopped moving a finger then released.
        // There would be no events with distance zero, so the last event is stale.
        if (time > 150 || (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.d)() - lastMoveEvent.time > 300) {
          swiper.velocity = 0;
        }
      } else {
        swiper.velocity = 0;
      }
      swiper.velocity *= params.freeMode.momentumVelocityRatio;
      data.velocities.length = 0;
      let momentumDuration = 1000 * params.freeMode.momentumRatio;
      const momentumDistance = swiper.velocity * momentumDuration;
      let newPosition = swiper.translate + momentumDistance;
      if (rtl) newPosition = -newPosition;
      let doBounce = false;
      let afterBouncePosition;
      const bounceAmount = Math.abs(swiper.velocity) * 20 * params.freeMode.momentumBounceRatio;
      let needsLoopFix;
      if (newPosition < swiper.maxTranslate()) {
        if (params.freeMode.momentumBounce) {
          if (newPosition + swiper.maxTranslate() < -bounceAmount) {
            newPosition = swiper.maxTranslate() - bounceAmount;
          }
          afterBouncePosition = swiper.maxTranslate();
          doBounce = true;
          data.allowMomentumBounce = true;
        } else {
          newPosition = swiper.maxTranslate();
        }
        if (params.loop && params.centeredSlides) needsLoopFix = true;
      } else if (newPosition > swiper.minTranslate()) {
        if (params.freeMode.momentumBounce) {
          if (newPosition - swiper.minTranslate() > bounceAmount) {
            newPosition = swiper.minTranslate() + bounceAmount;
          }
          afterBouncePosition = swiper.minTranslate();
          doBounce = true;
          data.allowMomentumBounce = true;
        } else {
          newPosition = swiper.minTranslate();
        }
        if (params.loop && params.centeredSlides) needsLoopFix = true;
      } else if (params.freeMode.sticky) {
        let nextSlide;
        for (let j = 0; j < snapGrid.length; j += 1) {
          if (snapGrid[j] > -newPosition) {
            nextSlide = j;
            break;
          }
        }
        if (Math.abs(snapGrid[nextSlide] - newPosition) < Math.abs(snapGrid[nextSlide - 1] - newPosition) || swiper.swipeDirection === 'next') {
          newPosition = snapGrid[nextSlide];
        } else {
          newPosition = snapGrid[nextSlide - 1];
        }
        newPosition = -newPosition;
      }
      if (needsLoopFix) {
        once('transitionEnd', () => {
          swiper.loopFix();
        });
      }
      // Fix duration
      if (swiper.velocity !== 0) {
        if (rtl) {
          momentumDuration = Math.abs((-newPosition - swiper.translate) / swiper.velocity);
        } else {
          momentumDuration = Math.abs((newPosition - swiper.translate) / swiper.velocity);
        }
        if (params.freeMode.sticky) {
          // If freeMode.sticky is active and the user ends a swipe with a slow-velocity
          // event, then durations can be 20+ seconds to slide one (or zero!) slides.
          // It's easy to see this when simulating touch with mouse events. To fix this,
          // limit single-slide swipes to the default slide duration. This also has the
          // nice side effect of matching slide speed if the user stopped moving before
          // lifting finger or mouse vs. moving slowly before lifting the finger/mouse.
          // For faster swipes, also apply limits (albeit higher ones).
          const moveDistance = Math.abs((rtl ? -newPosition : newPosition) - swiper.translate);
          const currentSlideSize = swiper.slidesSizesGrid[swiper.activeIndex];
          if (moveDistance < currentSlideSize) {
            momentumDuration = params.speed;
          } else if (moveDistance < 2 * currentSlideSize) {
            momentumDuration = params.speed * 1.5;
          } else {
            momentumDuration = params.speed * 2.5;
          }
        }
      } else if (params.freeMode.sticky) {
        swiper.slideToClosest();
        return;
      }
      if (params.freeMode.momentumBounce && doBounce) {
        swiper.updateProgress(afterBouncePosition);
        swiper.setTransition(momentumDuration);
        swiper.setTranslate(newPosition);
        swiper.transitionStart(true, swiper.swipeDirection);
        swiper.animating = true;
        (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.j)(wrapperEl, () => {
          if (!swiper || swiper.destroyed || !data.allowMomentumBounce) return;
          emit('momentumBounce');
          swiper.setTransition(params.speed);
          setTimeout(() => {
            swiper.setTranslate(afterBouncePosition);
            (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.j)(wrapperEl, () => {
              if (!swiper || swiper.destroyed) return;
              swiper.transitionEnd();
            });
          }, 0);
        });
      } else if (swiper.velocity) {
        emit('_freeModeNoMomentumRelease');
        swiper.updateProgress(newPosition);
        swiper.setTransition(momentumDuration);
        swiper.setTranslate(newPosition);
        swiper.transitionStart(true, swiper.swipeDirection);
        if (!swiper.animating) {
          swiper.animating = true;
          (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.j)(wrapperEl, () => {
            if (!swiper || swiper.destroyed) return;
            swiper.transitionEnd();
          });
        }
      } else {
        swiper.updateProgress(newPosition);
      }
      swiper.updateActiveIndex();
      swiper.updateSlidesClasses();
    } else if (params.freeMode.sticky) {
      swiper.slideToClosest();
      return;
    } else if (params.freeMode) {
      emit('_freeModeNoMomentumRelease');
    }
    if (!params.freeMode.momentum || timeDiff >= params.longSwipesMs) {
      emit('_freeModeStaticRelease');
      swiper.updateProgress();
      swiper.updateActiveIndex();
      swiper.updateSlidesClasses();
    }
  }
  Object.assign(swiper, {
    freeMode: {
      onTouchStart,
      onTouchMove,
      onTouchEnd
    }
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/grid.mjs":
/*!**********************************************!*\
  !*** ./node_modules/swiper/modules/grid.mjs ***!
  \**********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Grid)
/* harmony export */ });
function Grid(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    grid: {
      rows: 1,
      fill: 'column'
    }
  });
  let slidesNumberEvenToRows;
  let slidesPerRow;
  let numFullColumns;
  let wasMultiRow;
  const getSpaceBetween = () => {
    let spaceBetween = swiper.params.spaceBetween;
    if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
      spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * swiper.size;
    } else if (typeof spaceBetween === 'string') {
      spaceBetween = parseFloat(spaceBetween);
    }
    return spaceBetween;
  };
  const initSlides = slides => {
    const {
      slidesPerView
    } = swiper.params;
    const {
      rows,
      fill
    } = swiper.params.grid;
    const slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : slides.length;
    numFullColumns = Math.floor(slidesLength / rows);
    if (Math.floor(slidesLength / rows) === slidesLength / rows) {
      slidesNumberEvenToRows = slidesLength;
    } else {
      slidesNumberEvenToRows = Math.ceil(slidesLength / rows) * rows;
    }
    if (slidesPerView !== 'auto' && fill === 'row') {
      slidesNumberEvenToRows = Math.max(slidesNumberEvenToRows, slidesPerView * rows);
    }
    slidesPerRow = slidesNumberEvenToRows / rows;
  };
  const unsetSlides = () => {
    if (swiper.slides) {
      swiper.slides.forEach(slide => {
        if (slide.swiperSlideGridSet) {
          slide.style.height = '';
          slide.style[swiper.getDirectionLabel('margin-top')] = '';
        }
      });
    }
  };
  const updateSlide = (i, slide, slides) => {
    const {
      slidesPerGroup
    } = swiper.params;
    const spaceBetween = getSpaceBetween();
    const {
      rows,
      fill
    } = swiper.params.grid;
    const slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : slides.length;
    // Set slides order
    let newSlideOrderIndex;
    let column;
    let row;
    if (fill === 'row' && slidesPerGroup > 1) {
      const groupIndex = Math.floor(i / (slidesPerGroup * rows));
      const slideIndexInGroup = i - rows * slidesPerGroup * groupIndex;
      const columnsInGroup = groupIndex === 0 ? slidesPerGroup : Math.min(Math.ceil((slidesLength - groupIndex * rows * slidesPerGroup) / rows), slidesPerGroup);
      row = Math.floor(slideIndexInGroup / columnsInGroup);
      column = slideIndexInGroup - row * columnsInGroup + groupIndex * slidesPerGroup;
      newSlideOrderIndex = column + row * slidesNumberEvenToRows / rows;
      slide.style.order = newSlideOrderIndex;
    } else if (fill === 'column') {
      column = Math.floor(i / rows);
      row = i - column * rows;
      if (column > numFullColumns || column === numFullColumns && row === rows - 1) {
        row += 1;
        if (row >= rows) {
          row = 0;
          column += 1;
        }
      }
    } else {
      row = Math.floor(i / slidesPerRow);
      column = i - row * slidesPerRow;
    }
    slide.row = row;
    slide.column = column;
    slide.style.height = `calc((100% - ${(rows - 1) * spaceBetween}px) / ${rows})`;
    slide.style[swiper.getDirectionLabel('margin-top')] = row !== 0 ? spaceBetween && `${spaceBetween}px` : '';
    slide.swiperSlideGridSet = true;
  };
  const updateWrapperSize = (slideSize, snapGrid) => {
    const {
      centeredSlides,
      roundLengths
    } = swiper.params;
    const spaceBetween = getSpaceBetween();
    const {
      rows
    } = swiper.params.grid;
    swiper.virtualSize = (slideSize + spaceBetween) * slidesNumberEvenToRows;
    swiper.virtualSize = Math.ceil(swiper.virtualSize / rows) - spaceBetween;
    if (!swiper.params.cssMode) {
      swiper.wrapperEl.style[swiper.getDirectionLabel('width')] = `${swiper.virtualSize + spaceBetween}px`;
    }
    if (centeredSlides) {
      const newSlidesGrid = [];
      for (let i = 0; i < snapGrid.length; i += 1) {
        let slidesGridItem = snapGrid[i];
        if (roundLengths) slidesGridItem = Math.floor(slidesGridItem);
        if (snapGrid[i] < swiper.virtualSize + snapGrid[0]) newSlidesGrid.push(slidesGridItem);
      }
      snapGrid.splice(0, snapGrid.length);
      snapGrid.push(...newSlidesGrid);
    }
  };
  const onInit = () => {
    wasMultiRow = swiper.params.grid && swiper.params.grid.rows > 1;
  };
  const onUpdate = () => {
    const {
      params,
      el
    } = swiper;
    const isMultiRow = params.grid && params.grid.rows > 1;
    if (wasMultiRow && !isMultiRow) {
      el.classList.remove(`${params.containerModifierClass}grid`, `${params.containerModifierClass}grid-column`);
      numFullColumns = 1;
      swiper.emitContainerClasses();
    } else if (!wasMultiRow && isMultiRow) {
      el.classList.add(`${params.containerModifierClass}grid`);
      if (params.grid.fill === 'column') {
        el.classList.add(`${params.containerModifierClass}grid-column`);
      }
      swiper.emitContainerClasses();
    }
    wasMultiRow = isMultiRow;
  };
  on('init', onInit);
  on('update', onUpdate);
  swiper.grid = {
    initSlides,
    unsetSlides,
    updateSlide,
    updateWrapperSize
  };
}




/***/ }),

/***/ "./node_modules/swiper/modules/hash-navigation.mjs":
/*!*********************************************************!*\
  !*** ./node_modules/swiper/modules/hash-navigation.mjs ***!
  \*********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ HashNavigation)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function HashNavigation(_ref) {
  let {
    swiper,
    extendParams,
    emit,
    on
  } = _ref;
  let initialized = false;
  const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  extendParams({
    hashNavigation: {
      enabled: false,
      replaceState: false,
      watchState: false,
      getSlideIndex(_s, hash) {
        if (swiper.virtual && swiper.params.virtual.enabled) {
          const slideWithHash = swiper.slides.filter(slideEl => slideEl.getAttribute('data-hash') === hash)[0];
          if (!slideWithHash) return 0;
          const index = parseInt(slideWithHash.getAttribute('data-swiper-slide-index'), 10);
          return index;
        }
        return swiper.getSlideIndex((0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(swiper.slidesEl, `.${swiper.params.slideClass}[data-hash="${hash}"], swiper-slide[data-hash="${hash}"]`)[0]);
      }
    }
  });
  const onHashChange = () => {
    emit('hashChange');
    const newHash = document.location.hash.replace('#', '');
    const activeSlideEl = swiper.virtual && swiper.params.virtual.enabled ? swiper.slidesEl.querySelector(`[data-swiper-slide-index="${swiper.activeIndex}"]`) : swiper.slides[swiper.activeIndex];
    const activeSlideHash = activeSlideEl ? activeSlideEl.getAttribute('data-hash') : '';
    if (newHash !== activeSlideHash) {
      const newIndex = swiper.params.hashNavigation.getSlideIndex(swiper, newHash);
      if (typeof newIndex === 'undefined' || Number.isNaN(newIndex)) return;
      swiper.slideTo(newIndex);
    }
  };
  const setHash = () => {
    if (!initialized || !swiper.params.hashNavigation.enabled) return;
    const activeSlideEl = swiper.virtual && swiper.params.virtual.enabled ? swiper.slidesEl.querySelector(`[data-swiper-slide-index="${swiper.activeIndex}"]`) : swiper.slides[swiper.activeIndex];
    const activeSlideHash = activeSlideEl ? activeSlideEl.getAttribute('data-hash') || activeSlideEl.getAttribute('data-history') : '';
    if (swiper.params.hashNavigation.replaceState && window.history && window.history.replaceState) {
      window.history.replaceState(null, null, `#${activeSlideHash}` || '');
      emit('hashSet');
    } else {
      document.location.hash = activeSlideHash || '';
      emit('hashSet');
    }
  };
  const init = () => {
    if (!swiper.params.hashNavigation.enabled || swiper.params.history && swiper.params.history.enabled) return;
    initialized = true;
    const hash = document.location.hash.replace('#', '');
    if (hash) {
      const speed = 0;
      const index = swiper.params.hashNavigation.getSlideIndex(swiper, hash);
      swiper.slideTo(index || 0, speed, swiper.params.runCallbacksOnInit, true);
    }
    if (swiper.params.hashNavigation.watchState) {
      window.addEventListener('hashchange', onHashChange);
    }
  };
  const destroy = () => {
    if (swiper.params.hashNavigation.watchState) {
      window.removeEventListener('hashchange', onHashChange);
    }
  };
  on('init', () => {
    if (swiper.params.hashNavigation.enabled) {
      init();
    }
  });
  on('destroy', () => {
    if (swiper.params.hashNavigation.enabled) {
      destroy();
    }
  });
  on('transitionEnd _freeModeNoMomentumRelease', () => {
    if (initialized) {
      setHash();
    }
  });
  on('slideChange', () => {
    if (initialized && swiper.params.cssMode) {
      setHash();
    }
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/history.mjs":
/*!*************************************************!*\
  !*** ./node_modules/swiper/modules/history.mjs ***!
  \*************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ History)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");


function History(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    history: {
      enabled: false,
      root: '',
      replaceState: false,
      key: 'slides',
      keepQuery: false
    }
  });
  let initialized = false;
  let paths = {};
  const slugify = text => {
    return text.toString().replace(/\s+/g, '-').replace(/[^\w-]+/g, '').replace(/--+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
  };
  const getPathValues = urlOverride => {
    const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
    let location;
    if (urlOverride) {
      location = new URL(urlOverride);
    } else {
      location = window.location;
    }
    const pathArray = location.pathname.slice(1).split('/').filter(part => part !== '');
    const total = pathArray.length;
    const key = pathArray[total - 2];
    const value = pathArray[total - 1];
    return {
      key,
      value
    };
  };
  const setHistory = (key, index) => {
    const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
    if (!initialized || !swiper.params.history.enabled) return;
    let location;
    if (swiper.params.url) {
      location = new URL(swiper.params.url);
    } else {
      location = window.location;
    }
    const slide = swiper.slides[index];
    let value = slugify(slide.getAttribute('data-history'));
    if (swiper.params.history.root.length > 0) {
      let root = swiper.params.history.root;
      if (root[root.length - 1] === '/') root = root.slice(0, root.length - 1);
      value = `${root}/${key ? `${key}/` : ''}${value}`;
    } else if (!location.pathname.includes(key)) {
      value = `${key ? `${key}/` : ''}${value}`;
    }
    if (swiper.params.history.keepQuery) {
      value += location.search;
    }
    const currentState = window.history.state;
    if (currentState && currentState.value === value) {
      return;
    }
    if (swiper.params.history.replaceState) {
      window.history.replaceState({
        value
      }, null, value);
    } else {
      window.history.pushState({
        value
      }, null, value);
    }
  };
  const scrollToSlide = (speed, value, runCallbacks) => {
    if (value) {
      for (let i = 0, length = swiper.slides.length; i < length; i += 1) {
        const slide = swiper.slides[i];
        const slideHistory = slugify(slide.getAttribute('data-history'));
        if (slideHistory === value) {
          const index = swiper.getSlideIndex(slide);
          swiper.slideTo(index, speed, runCallbacks);
        }
      }
    } else {
      swiper.slideTo(0, speed, runCallbacks);
    }
  };
  const setHistoryPopState = () => {
    paths = getPathValues(swiper.params.url);
    scrollToSlide(swiper.params.speed, paths.value, false);
  };
  const init = () => {
    const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
    if (!swiper.params.history) return;
    if (!window.history || !window.history.pushState) {
      swiper.params.history.enabled = false;
      swiper.params.hashNavigation.enabled = true;
      return;
    }
    initialized = true;
    paths = getPathValues(swiper.params.url);
    if (!paths.key && !paths.value) {
      if (!swiper.params.history.replaceState) {
        window.addEventListener('popstate', setHistoryPopState);
      }
      return;
    }
    scrollToSlide(0, paths.value, swiper.params.runCallbacksOnInit);
    if (!swiper.params.history.replaceState) {
      window.addEventListener('popstate', setHistoryPopState);
    }
  };
  const destroy = () => {
    const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
    if (!swiper.params.history.replaceState) {
      window.removeEventListener('popstate', setHistoryPopState);
    }
  };
  on('init', () => {
    if (swiper.params.history.enabled) {
      init();
    }
  });
  on('destroy', () => {
    if (swiper.params.history.enabled) {
      destroy();
    }
  });
  on('transitionEnd _freeModeNoMomentumRelease', () => {
    if (initialized) {
      setHistory(swiper.params.history.key, swiper.activeIndex);
    }
  });
  on('slideChange', () => {
    if (initialized && swiper.params.cssMode) {
      setHistory(swiper.params.history.key, swiper.activeIndex);
    }
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/keyboard.mjs":
/*!**************************************************!*\
  !*** ./node_modules/swiper/modules/keyboard.mjs ***!
  \**************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Keyboard)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



/* eslint-disable consistent-return */
function Keyboard(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  swiper.keyboard = {
    enabled: false
  };
  extendParams({
    keyboard: {
      enabled: false,
      onlyInViewport: true,
      pageUpDown: true
    }
  });
  function handle(event) {
    if (!swiper.enabled) return;
    const {
      rtlTranslate: rtl
    } = swiper;
    let e = event;
    if (e.originalEvent) e = e.originalEvent; // jquery fix
    const kc = e.keyCode || e.charCode;
    const pageUpDown = swiper.params.keyboard.pageUpDown;
    const isPageUp = pageUpDown && kc === 33;
    const isPageDown = pageUpDown && kc === 34;
    const isArrowLeft = kc === 37;
    const isArrowRight = kc === 39;
    const isArrowUp = kc === 38;
    const isArrowDown = kc === 40;
    // Directions locks
    if (!swiper.allowSlideNext && (swiper.isHorizontal() && isArrowRight || swiper.isVertical() && isArrowDown || isPageDown)) {
      return false;
    }
    if (!swiper.allowSlidePrev && (swiper.isHorizontal() && isArrowLeft || swiper.isVertical() && isArrowUp || isPageUp)) {
      return false;
    }
    if (e.shiftKey || e.altKey || e.ctrlKey || e.metaKey) {
      return undefined;
    }
    if (document.activeElement && document.activeElement.nodeName && (document.activeElement.nodeName.toLowerCase() === 'input' || document.activeElement.nodeName.toLowerCase() === 'textarea')) {
      return undefined;
    }
    if (swiper.params.keyboard.onlyInViewport && (isPageUp || isPageDown || isArrowLeft || isArrowRight || isArrowUp || isArrowDown)) {
      let inView = false;
      // Check that swiper should be inside of visible area of window
      if ((0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(swiper.el, `.${swiper.params.slideClass}, swiper-slide`).length > 0 && (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(swiper.el, `.${swiper.params.slideActiveClass}`).length === 0) {
        return undefined;
      }
      const el = swiper.el;
      const swiperWidth = el.clientWidth;
      const swiperHeight = el.clientHeight;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const swiperOffset = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.b)(el);
      if (rtl) swiperOffset.left -= el.scrollLeft;
      const swiperCoord = [[swiperOffset.left, swiperOffset.top], [swiperOffset.left + swiperWidth, swiperOffset.top], [swiperOffset.left, swiperOffset.top + swiperHeight], [swiperOffset.left + swiperWidth, swiperOffset.top + swiperHeight]];
      for (let i = 0; i < swiperCoord.length; i += 1) {
        const point = swiperCoord[i];
        if (point[0] >= 0 && point[0] <= windowWidth && point[1] >= 0 && point[1] <= windowHeight) {
          if (point[0] === 0 && point[1] === 0) continue; // eslint-disable-line
          inView = true;
        }
      }
      if (!inView) return undefined;
    }
    if (swiper.isHorizontal()) {
      if (isPageUp || isPageDown || isArrowLeft || isArrowRight) {
        if (e.preventDefault) e.preventDefault();else e.returnValue = false;
      }
      if ((isPageDown || isArrowRight) && !rtl || (isPageUp || isArrowLeft) && rtl) swiper.slideNext();
      if ((isPageUp || isArrowLeft) && !rtl || (isPageDown || isArrowRight) && rtl) swiper.slidePrev();
    } else {
      if (isPageUp || isPageDown || isArrowUp || isArrowDown) {
        if (e.preventDefault) e.preventDefault();else e.returnValue = false;
      }
      if (isPageDown || isArrowDown) swiper.slideNext();
      if (isPageUp || isArrowUp) swiper.slidePrev();
    }
    emit('keyPress', kc);
    return undefined;
  }
  function enable() {
    if (swiper.keyboard.enabled) return;
    document.addEventListener('keydown', handle);
    swiper.keyboard.enabled = true;
  }
  function disable() {
    if (!swiper.keyboard.enabled) return;
    document.removeEventListener('keydown', handle);
    swiper.keyboard.enabled = false;
  }
  on('init', () => {
    if (swiper.params.keyboard.enabled) {
      enable();
    }
  });
  on('destroy', () => {
    if (swiper.keyboard.enabled) {
      disable();
    }
  });
  Object.assign(swiper.keyboard, {
    enable,
    disable
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/manipulation.mjs":
/*!******************************************************!*\
  !*** ./node_modules/swiper/modules/manipulation.mjs ***!
  \******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Manipulation)
/* harmony export */ });
function appendSlide(slides) {
  const swiper = this;
  const {
    params,
    slidesEl
  } = swiper;
  if (params.loop) {
    swiper.loopDestroy();
  }
  const appendElement = slideEl => {
    if (typeof slideEl === 'string') {
      const tempDOM = document.createElement('div');
      tempDOM.innerHTML = slideEl;
      slidesEl.append(tempDOM.children[0]);
      tempDOM.innerHTML = '';
    } else {
      slidesEl.append(slideEl);
    }
  };
  if (typeof slides === 'object' && 'length' in slides) {
    for (let i = 0; i < slides.length; i += 1) {
      if (slides[i]) appendElement(slides[i]);
    }
  } else {
    appendElement(slides);
  }
  swiper.recalcSlides();
  if (params.loop) {
    swiper.loopCreate();
  }
  if (!params.observer || swiper.isElement) {
    swiper.update();
  }
}

function prependSlide(slides) {
  const swiper = this;
  const {
    params,
    activeIndex,
    slidesEl
  } = swiper;
  if (params.loop) {
    swiper.loopDestroy();
  }
  let newActiveIndex = activeIndex + 1;
  const prependElement = slideEl => {
    if (typeof slideEl === 'string') {
      const tempDOM = document.createElement('div');
      tempDOM.innerHTML = slideEl;
      slidesEl.prepend(tempDOM.children[0]);
      tempDOM.innerHTML = '';
    } else {
      slidesEl.prepend(slideEl);
    }
  };
  if (typeof slides === 'object' && 'length' in slides) {
    for (let i = 0; i < slides.length; i += 1) {
      if (slides[i]) prependElement(slides[i]);
    }
    newActiveIndex = activeIndex + slides.length;
  } else {
    prependElement(slides);
  }
  swiper.recalcSlides();
  if (params.loop) {
    swiper.loopCreate();
  }
  if (!params.observer || swiper.isElement) {
    swiper.update();
  }
  swiper.slideTo(newActiveIndex, 0, false);
}

function addSlide(index, slides) {
  const swiper = this;
  const {
    params,
    activeIndex,
    slidesEl
  } = swiper;
  let activeIndexBuffer = activeIndex;
  if (params.loop) {
    activeIndexBuffer -= swiper.loopedSlides;
    swiper.loopDestroy();
    swiper.recalcSlides();
  }
  const baseLength = swiper.slides.length;
  if (index <= 0) {
    swiper.prependSlide(slides);
    return;
  }
  if (index >= baseLength) {
    swiper.appendSlide(slides);
    return;
  }
  let newActiveIndex = activeIndexBuffer > index ? activeIndexBuffer + 1 : activeIndexBuffer;
  const slidesBuffer = [];
  for (let i = baseLength - 1; i >= index; i -= 1) {
    const currentSlide = swiper.slides[i];
    currentSlide.remove();
    slidesBuffer.unshift(currentSlide);
  }
  if (typeof slides === 'object' && 'length' in slides) {
    for (let i = 0; i < slides.length; i += 1) {
      if (slides[i]) slidesEl.append(slides[i]);
    }
    newActiveIndex = activeIndexBuffer > index ? activeIndexBuffer + slides.length : activeIndexBuffer;
  } else {
    slidesEl.append(slides);
  }
  for (let i = 0; i < slidesBuffer.length; i += 1) {
    slidesEl.append(slidesBuffer[i]);
  }
  swiper.recalcSlides();
  if (params.loop) {
    swiper.loopCreate();
  }
  if (!params.observer || swiper.isElement) {
    swiper.update();
  }
  if (params.loop) {
    swiper.slideTo(newActiveIndex + swiper.loopedSlides, 0, false);
  } else {
    swiper.slideTo(newActiveIndex, 0, false);
  }
}

function removeSlide(slidesIndexes) {
  const swiper = this;
  const {
    params,
    activeIndex
  } = swiper;
  let activeIndexBuffer = activeIndex;
  if (params.loop) {
    activeIndexBuffer -= swiper.loopedSlides;
    swiper.loopDestroy();
  }
  let newActiveIndex = activeIndexBuffer;
  let indexToRemove;
  if (typeof slidesIndexes === 'object' && 'length' in slidesIndexes) {
    for (let i = 0; i < slidesIndexes.length; i += 1) {
      indexToRemove = slidesIndexes[i];
      if (swiper.slides[indexToRemove]) swiper.slides[indexToRemove].remove();
      if (indexToRemove < newActiveIndex) newActiveIndex -= 1;
    }
    newActiveIndex = Math.max(newActiveIndex, 0);
  } else {
    indexToRemove = slidesIndexes;
    if (swiper.slides[indexToRemove]) swiper.slides[indexToRemove].remove();
    if (indexToRemove < newActiveIndex) newActiveIndex -= 1;
    newActiveIndex = Math.max(newActiveIndex, 0);
  }
  swiper.recalcSlides();
  if (params.loop) {
    swiper.loopCreate();
  }
  if (!params.observer || swiper.isElement) {
    swiper.update();
  }
  if (params.loop) {
    swiper.slideTo(newActiveIndex + swiper.loopedSlides, 0, false);
  } else {
    swiper.slideTo(newActiveIndex, 0, false);
  }
}

function removeAllSlides() {
  const swiper = this;
  const slidesIndexes = [];
  for (let i = 0; i < swiper.slides.length; i += 1) {
    slidesIndexes.push(i);
  }
  swiper.removeSlide(slidesIndexes);
}

function Manipulation(_ref) {
  let {
    swiper
  } = _ref;
  Object.assign(swiper, {
    appendSlide: appendSlide.bind(swiper),
    prependSlide: prependSlide.bind(swiper),
    addSlide: addSlide.bind(swiper),
    removeSlide: removeSlide.bind(swiper),
    removeAllSlides: removeAllSlides.bind(swiper)
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/mousewheel.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/modules/mousewheel.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Mousewheel)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



/* eslint-disable consistent-return */
function Mousewheel(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  extendParams({
    mousewheel: {
      enabled: false,
      releaseOnEdges: false,
      invert: false,
      forceToAxis: false,
      sensitivity: 1,
      eventsTarget: 'container',
      thresholdDelta: null,
      thresholdTime: null,
      noMousewheelClass: 'swiper-no-mousewheel'
    }
  });
  swiper.mousewheel = {
    enabled: false
  };
  let timeout;
  let lastScrollTime = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)();
  let lastEventBeforeSnap;
  const recentWheelEvents = [];
  function normalize(e) {
    // Reasonable defaults
    const PIXEL_STEP = 10;
    const LINE_HEIGHT = 40;
    const PAGE_HEIGHT = 800;
    let sX = 0;
    let sY = 0; // spinX, spinY
    let pX = 0;
    let pY = 0; // pixelX, pixelY

    // Legacy
    if ('detail' in e) {
      sY = e.detail;
    }
    if ('wheelDelta' in e) {
      sY = -e.wheelDelta / 120;
    }
    if ('wheelDeltaY' in e) {
      sY = -e.wheelDeltaY / 120;
    }
    if ('wheelDeltaX' in e) {
      sX = -e.wheelDeltaX / 120;
    }

    // side scrolling on FF with DOMMouseScroll
    if ('axis' in e && e.axis === e.HORIZONTAL_AXIS) {
      sX = sY;
      sY = 0;
    }
    pX = sX * PIXEL_STEP;
    pY = sY * PIXEL_STEP;
    if ('deltaY' in e) {
      pY = e.deltaY;
    }
    if ('deltaX' in e) {
      pX = e.deltaX;
    }
    if (e.shiftKey && !pX) {
      // if user scrolls with shift he wants horizontal scroll
      pX = pY;
      pY = 0;
    }
    if ((pX || pY) && e.deltaMode) {
      if (e.deltaMode === 1) {
        // delta in LINE units
        pX *= LINE_HEIGHT;
        pY *= LINE_HEIGHT;
      } else {
        // delta in PAGE units
        pX *= PAGE_HEIGHT;
        pY *= PAGE_HEIGHT;
      }
    }

    // Fall-back if spin cannot be determined
    if (pX && !sX) {
      sX = pX < 1 ? -1 : 1;
    }
    if (pY && !sY) {
      sY = pY < 1 ? -1 : 1;
    }
    return {
      spinX: sX,
      spinY: sY,
      pixelX: pX,
      pixelY: pY
    };
  }
  function handleMouseEnter() {
    if (!swiper.enabled) return;
    swiper.mouseEntered = true;
  }
  function handleMouseLeave() {
    if (!swiper.enabled) return;
    swiper.mouseEntered = false;
  }
  function animateSlider(newEvent) {
    if (swiper.params.mousewheel.thresholdDelta && newEvent.delta < swiper.params.mousewheel.thresholdDelta) {
      // Prevent if delta of wheel scroll delta is below configured threshold
      return false;
    }
    if (swiper.params.mousewheel.thresholdTime && (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)() - lastScrollTime < swiper.params.mousewheel.thresholdTime) {
      // Prevent if time between scrolls is below configured threshold
      return false;
    }

    // If the movement is NOT big enough and
    // if the last time the user scrolled was too close to the current one (avoid continuously triggering the slider):
    //   Don't go any further (avoid insignificant scroll movement).
    if (newEvent.delta >= 6 && (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)() - lastScrollTime < 60) {
      // Return false as a default
      return true;
    }
    // If user is scrolling towards the end:
    //   If the slider hasn't hit the latest slide or
    //   if the slider is a loop and
    //   if the slider isn't moving right now:
    //     Go to next slide and
    //     emit a scroll event.
    // Else (the user is scrolling towards the beginning) and
    // if the slider hasn't hit the first slide or
    // if the slider is a loop and
    // if the slider isn't moving right now:
    //   Go to prev slide and
    //   emit a scroll event.
    if (newEvent.direction < 0) {
      if ((!swiper.isEnd || swiper.params.loop) && !swiper.animating) {
        swiper.slideNext();
        emit('scroll', newEvent.raw);
      }
    } else if ((!swiper.isBeginning || swiper.params.loop) && !swiper.animating) {
      swiper.slidePrev();
      emit('scroll', newEvent.raw);
    }
    // If you got here is because an animation has been triggered so store the current time
    lastScrollTime = new window.Date().getTime();
    // Return false as a default
    return false;
  }
  function releaseScroll(newEvent) {
    const params = swiper.params.mousewheel;
    if (newEvent.direction < 0) {
      if (swiper.isEnd && !swiper.params.loop && params.releaseOnEdges) {
        // Return true to animate scroll on edges
        return true;
      }
    } else if (swiper.isBeginning && !swiper.params.loop && params.releaseOnEdges) {
      // Return true to animate scroll on edges
      return true;
    }
    return false;
  }
  function handle(event) {
    let e = event;
    let disableParentSwiper = true;
    if (!swiper.enabled) return;

    // Ignore event if the target or its parents have the swiper-no-mousewheel class
    if (event.target.closest(`.${swiper.params.mousewheel.noMousewheelClass}`)) return;
    const params = swiper.params.mousewheel;
    if (swiper.params.cssMode) {
      e.preventDefault();
    }
    let targetEl = swiper.el;
    if (swiper.params.mousewheel.eventsTarget !== 'container') {
      targetEl = document.querySelector(swiper.params.mousewheel.eventsTarget);
    }
    const targetElContainsTarget = targetEl && targetEl.contains(e.target);
    if (!swiper.mouseEntered && !targetElContainsTarget && !params.releaseOnEdges) return true;
    if (e.originalEvent) e = e.originalEvent; // jquery fix
    let delta = 0;
    const rtlFactor = swiper.rtlTranslate ? -1 : 1;
    const data = normalize(e);
    if (params.forceToAxis) {
      if (swiper.isHorizontal()) {
        if (Math.abs(data.pixelX) > Math.abs(data.pixelY)) delta = -data.pixelX * rtlFactor;else return true;
      } else if (Math.abs(data.pixelY) > Math.abs(data.pixelX)) delta = -data.pixelY;else return true;
    } else {
      delta = Math.abs(data.pixelX) > Math.abs(data.pixelY) ? -data.pixelX * rtlFactor : -data.pixelY;
    }
    if (delta === 0) return true;
    if (params.invert) delta = -delta;

    // Get the scroll positions
    let positions = swiper.getTranslate() + delta * params.sensitivity;
    if (positions >= swiper.minTranslate()) positions = swiper.minTranslate();
    if (positions <= swiper.maxTranslate()) positions = swiper.maxTranslate();

    // When loop is true:
    //     the disableParentSwiper will be true.
    // When loop is false:
    //     if the scroll positions is not on edge,
    //     then the disableParentSwiper will be true.
    //     if the scroll on edge positions,
    //     then the disableParentSwiper will be false.
    disableParentSwiper = swiper.params.loop ? true : !(positions === swiper.minTranslate() || positions === swiper.maxTranslate());
    if (disableParentSwiper && swiper.params.nested) e.stopPropagation();
    if (!swiper.params.freeMode || !swiper.params.freeMode.enabled) {
      // Register the new event in a variable which stores the relevant data
      const newEvent = {
        time: (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)(),
        delta: Math.abs(delta),
        direction: Math.sign(delta),
        raw: event
      };

      // Keep the most recent events
      if (recentWheelEvents.length >= 2) {
        recentWheelEvents.shift(); // only store the last N events
      }

      const prevEvent = recentWheelEvents.length ? recentWheelEvents[recentWheelEvents.length - 1] : undefined;
      recentWheelEvents.push(newEvent);

      // If there is at least one previous recorded event:
      //   If direction has changed or
      //   if the scroll is quicker than the previous one:
      //     Animate the slider.
      // Else (this is the first time the wheel is moved):
      //     Animate the slider.
      if (prevEvent) {
        if (newEvent.direction !== prevEvent.direction || newEvent.delta > prevEvent.delta || newEvent.time > prevEvent.time + 150) {
          animateSlider(newEvent);
        }
      } else {
        animateSlider(newEvent);
      }

      // If it's time to release the scroll:
      //   Return now so you don't hit the preventDefault.
      if (releaseScroll(newEvent)) {
        return true;
      }
    } else {
      // Freemode or scrollContainer:

      // If we recently snapped after a momentum scroll, then ignore wheel events
      // to give time for the deceleration to finish. Stop ignoring after 500 msecs
      // or if it's a new scroll (larger delta or inverse sign as last event before
      // an end-of-momentum snap).
      const newEvent = {
        time: (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)(),
        delta: Math.abs(delta),
        direction: Math.sign(delta)
      };
      const ignoreWheelEvents = lastEventBeforeSnap && newEvent.time < lastEventBeforeSnap.time + 500 && newEvent.delta <= lastEventBeforeSnap.delta && newEvent.direction === lastEventBeforeSnap.direction;
      if (!ignoreWheelEvents) {
        lastEventBeforeSnap = undefined;
        let position = swiper.getTranslate() + delta * params.sensitivity;
        const wasBeginning = swiper.isBeginning;
        const wasEnd = swiper.isEnd;
        if (position >= swiper.minTranslate()) position = swiper.minTranslate();
        if (position <= swiper.maxTranslate()) position = swiper.maxTranslate();
        swiper.setTransition(0);
        swiper.setTranslate(position);
        swiper.updateProgress();
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
        if (!wasBeginning && swiper.isBeginning || !wasEnd && swiper.isEnd) {
          swiper.updateSlidesClasses();
        }
        if (swiper.params.loop) {
          swiper.loopFix({
            direction: newEvent.direction < 0 ? 'next' : 'prev',
            byMousewheel: true
          });
        }
        if (swiper.params.freeMode.sticky) {
          // When wheel scrolling starts with sticky (aka snap) enabled, then detect
          // the end of a momentum scroll by storing recent (N=15?) wheel events.
          // 1. do all N events have decreasing or same (absolute value) delta?
          // 2. did all N events arrive in the last M (M=500?) msecs?
          // 3. does the earliest event have an (absolute value) delta that's
          //    at least P (P=1?) larger than the most recent event's delta?
          // 4. does the latest event have a delta that's smaller than Q (Q=6?) pixels?
          // If 1-4 are "yes" then we're near the end of a momentum scroll deceleration.
          // Snap immediately and ignore remaining wheel events in this scroll.
          // See comment above for "remaining wheel events in this scroll" determination.
          // If 1-4 aren't satisfied, then wait to snap until 500ms after the last event.
          clearTimeout(timeout);
          timeout = undefined;
          if (recentWheelEvents.length >= 15) {
            recentWheelEvents.shift(); // only store the last N events
          }

          const prevEvent = recentWheelEvents.length ? recentWheelEvents[recentWheelEvents.length - 1] : undefined;
          const firstEvent = recentWheelEvents[0];
          recentWheelEvents.push(newEvent);
          if (prevEvent && (newEvent.delta > prevEvent.delta || newEvent.direction !== prevEvent.direction)) {
            // Increasing or reverse-sign delta means the user started scrolling again. Clear the wheel event log.
            recentWheelEvents.splice(0);
          } else if (recentWheelEvents.length >= 15 && newEvent.time - firstEvent.time < 500 && firstEvent.delta - newEvent.delta >= 1 && newEvent.delta <= 6) {
            // We're at the end of the deceleration of a momentum scroll, so there's no need
            // to wait for more events. Snap ASAP on the next tick.
            // Also, because there's some remaining momentum we'll bias the snap in the
            // direction of the ongoing scroll because it's better UX for the scroll to snap
            // in the same direction as the scroll instead of reversing to snap.  Therefore,
            // if it's already scrolled more than 20% in the current direction, keep going.
            const snapToThreshold = delta > 0 ? 0.8 : 0.2;
            lastEventBeforeSnap = newEvent;
            recentWheelEvents.splice(0);
            timeout = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
              swiper.slideToClosest(swiper.params.speed, true, undefined, snapToThreshold);
            }, 0); // no delay; move on next tick
          }

          if (!timeout) {
            // if we get here, then we haven't detected the end of a momentum scroll, so
            // we'll consider a scroll "complete" when there haven't been any wheel events
            // for 500ms.
            timeout = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
              const snapToThreshold = 0.5;
              lastEventBeforeSnap = newEvent;
              recentWheelEvents.splice(0);
              swiper.slideToClosest(swiper.params.speed, true, undefined, snapToThreshold);
            }, 500);
          }
        }

        // Emit event
        if (!ignoreWheelEvents) emit('scroll', e);

        // Stop autoplay
        if (swiper.params.autoplay && swiper.params.autoplayDisableOnInteraction) swiper.autoplay.stop();
        // Return page scroll on edge positions
        if (params.releaseOnEdges && (position === swiper.minTranslate() || position === swiper.maxTranslate())) {
          return true;
        }
      }
    }
    if (e.preventDefault) e.preventDefault();else e.returnValue = false;
    return false;
  }
  function events(method) {
    let targetEl = swiper.el;
    if (swiper.params.mousewheel.eventsTarget !== 'container') {
      targetEl = document.querySelector(swiper.params.mousewheel.eventsTarget);
    }
    targetEl[method]('mouseenter', handleMouseEnter);
    targetEl[method]('mouseleave', handleMouseLeave);
    targetEl[method]('wheel', handle);
  }
  function enable() {
    if (swiper.params.cssMode) {
      swiper.wrapperEl.removeEventListener('wheel', handle);
      return true;
    }
    if (swiper.mousewheel.enabled) return false;
    events('addEventListener');
    swiper.mousewheel.enabled = true;
    return true;
  }
  function disable() {
    if (swiper.params.cssMode) {
      swiper.wrapperEl.addEventListener(event, handle);
      return true;
    }
    if (!swiper.mousewheel.enabled) return false;
    events('removeEventListener');
    swiper.mousewheel.enabled = false;
    return true;
  }
  on('init', () => {
    if (!swiper.params.mousewheel.enabled && swiper.params.cssMode) {
      disable();
    }
    if (swiper.params.mousewheel.enabled) enable();
  });
  on('destroy', () => {
    if (swiper.params.cssMode) {
      enable();
    }
    if (swiper.mousewheel.enabled) disable();
  });
  Object.assign(swiper.mousewheel, {
    enable,
    disable
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/navigation.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/modules/navigation.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Navigation)
/* harmony export */ });
/* harmony import */ var _shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/create-element-if-not-defined.mjs */ "./node_modules/swiper/shared/create-element-if-not-defined.mjs");


function Navigation(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  extendParams({
    navigation: {
      nextEl: null,
      prevEl: null,
      hideOnClick: false,
      disabledClass: 'swiper-button-disabled',
      hiddenClass: 'swiper-button-hidden',
      lockClass: 'swiper-button-lock',
      navigationDisabledClass: 'swiper-navigation-disabled'
    }
  });
  swiper.navigation = {
    nextEl: null,
    prevEl: null
  };
  const makeElementsArray = el => (Array.isArray(el) ? el : [el]).filter(e => !!e);
  function getEl(el) {
    let res;
    if (el && typeof el === 'string' && swiper.isElement) {
      res = swiper.el.querySelector(el);
      if (res) return res;
    }
    if (el) {
      if (typeof el === 'string') res = [...document.querySelectorAll(el)];
      if (swiper.params.uniqueNavElements && typeof el === 'string' && res.length > 1 && swiper.el.querySelectorAll(el).length === 1) {
        res = swiper.el.querySelector(el);
      }
    }
    if (el && !res) return el;
    // if (Array.isArray(res) && res.length === 1) res = res[0];
    return res;
  }
  function toggleEl(el, disabled) {
    const params = swiper.params.navigation;
    el = makeElementsArray(el);
    el.forEach(subEl => {
      if (subEl) {
        subEl.classList[disabled ? 'add' : 'remove'](...params.disabledClass.split(' '));
        if (subEl.tagName === 'BUTTON') subEl.disabled = disabled;
        if (swiper.params.watchOverflow && swiper.enabled) {
          subEl.classList[swiper.isLocked ? 'add' : 'remove'](params.lockClass);
        }
      }
    });
  }
  function update() {
    // Update Navigation Buttons
    const {
      nextEl,
      prevEl
    } = swiper.navigation;
    if (swiper.params.loop) {
      toggleEl(prevEl, false);
      toggleEl(nextEl, false);
      return;
    }
    toggleEl(prevEl, swiper.isBeginning && !swiper.params.rewind);
    toggleEl(nextEl, swiper.isEnd && !swiper.params.rewind);
  }
  function onPrevClick(e) {
    e.preventDefault();
    if (swiper.isBeginning && !swiper.params.loop && !swiper.params.rewind) return;
    swiper.slidePrev();
    emit('navigationPrev');
  }
  function onNextClick(e) {
    e.preventDefault();
    if (swiper.isEnd && !swiper.params.loop && !swiper.params.rewind) return;
    swiper.slideNext();
    emit('navigationNext');
  }
  function init() {
    const params = swiper.params.navigation;
    swiper.params.navigation = (0,_shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(swiper, swiper.originalParams.navigation, swiper.params.navigation, {
      nextEl: 'swiper-button-next',
      prevEl: 'swiper-button-prev'
    });
    if (!(params.nextEl || params.prevEl)) return;
    let nextEl = getEl(params.nextEl);
    let prevEl = getEl(params.prevEl);
    Object.assign(swiper.navigation, {
      nextEl,
      prevEl
    });
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    const initButton = (el, dir) => {
      if (el) {
        el.addEventListener('click', dir === 'next' ? onNextClick : onPrevClick);
      }
      if (!swiper.enabled && el) {
        el.classList.add(...params.lockClass.split(' '));
      }
    };
    nextEl.forEach(el => initButton(el, 'next'));
    prevEl.forEach(el => initButton(el, 'prev'));
  }
  function destroy() {
    let {
      nextEl,
      prevEl
    } = swiper.navigation;
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    const destroyButton = (el, dir) => {
      el.removeEventListener('click', dir === 'next' ? onNextClick : onPrevClick);
      el.classList.remove(...swiper.params.navigation.disabledClass.split(' '));
    };
    nextEl.forEach(el => destroyButton(el, 'next'));
    prevEl.forEach(el => destroyButton(el, 'prev'));
  }
  on('init', () => {
    if (swiper.params.navigation.enabled === false) {
      // eslint-disable-next-line
      disable();
    } else {
      init();
      update();
    }
  });
  on('toEdge fromEdge lock unlock', () => {
    update();
  });
  on('destroy', () => {
    destroy();
  });
  on('enable disable', () => {
    let {
      nextEl,
      prevEl
    } = swiper.navigation;
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    if (swiper.enabled) {
      update();
      return;
    }
    [...nextEl, ...prevEl].filter(el => !!el).forEach(el => el.classList.add(swiper.params.navigation.lockClass));
  });
  on('click', (_s, e) => {
    let {
      nextEl,
      prevEl
    } = swiper.navigation;
    nextEl = makeElementsArray(nextEl);
    prevEl = makeElementsArray(prevEl);
    const targetEl = e.target;
    if (swiper.params.navigation.hideOnClick && !prevEl.includes(targetEl) && !nextEl.includes(targetEl)) {
      if (swiper.pagination && swiper.params.pagination && swiper.params.pagination.clickable && (swiper.pagination.el === targetEl || swiper.pagination.el.contains(targetEl))) return;
      let isHidden;
      if (nextEl.length) {
        isHidden = nextEl[0].classList.contains(swiper.params.navigation.hiddenClass);
      } else if (prevEl.length) {
        isHidden = prevEl[0].classList.contains(swiper.params.navigation.hiddenClass);
      }
      if (isHidden === true) {
        emit('navigationShow');
      } else {
        emit('navigationHide');
      }
      [...nextEl, ...prevEl].filter(el => !!el).forEach(el => el.classList.toggle(swiper.params.navigation.hiddenClass));
    }
  });
  const enable = () => {
    swiper.el.classList.remove(...swiper.params.navigation.navigationDisabledClass.split(' '));
    init();
    update();
  };
  const disable = () => {
    swiper.el.classList.add(...swiper.params.navigation.navigationDisabledClass.split(' '));
    destroy();
  };
  Object.assign(swiper.navigation, {
    enable,
    disable,
    update,
    init,
    destroy
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/pagination.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/modules/pagination.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Pagination)
/* harmony export */ });
/* harmony import */ var _shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/classes-to-selector.mjs */ "./node_modules/swiper/shared/classes-to-selector.mjs");
/* harmony import */ var _shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/create-element-if-not-defined.mjs */ "./node_modules/swiper/shared/create-element-if-not-defined.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");




function Pagination(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const pfx = 'swiper-pagination';
  extendParams({
    pagination: {
      el: null,
      bulletElement: 'span',
      clickable: false,
      hideOnClick: false,
      renderBullet: null,
      renderProgressbar: null,
      renderFraction: null,
      renderCustom: null,
      progressbarOpposite: false,
      type: 'bullets',
      // 'bullets' or 'progressbar' or 'fraction' or 'custom'
      dynamicBullets: false,
      dynamicMainBullets: 1,
      formatFractionCurrent: number => number,
      formatFractionTotal: number => number,
      bulletClass: `${pfx}-bullet`,
      bulletActiveClass: `${pfx}-bullet-active`,
      modifierClass: `${pfx}-`,
      currentClass: `${pfx}-current`,
      totalClass: `${pfx}-total`,
      hiddenClass: `${pfx}-hidden`,
      progressbarFillClass: `${pfx}-progressbar-fill`,
      progressbarOppositeClass: `${pfx}-progressbar-opposite`,
      clickableClass: `${pfx}-clickable`,
      lockClass: `${pfx}-lock`,
      horizontalClass: `${pfx}-horizontal`,
      verticalClass: `${pfx}-vertical`,
      paginationDisabledClass: `${pfx}-disabled`
    }
  });
  swiper.pagination = {
    el: null,
    bullets: []
  };
  let bulletSize;
  let dynamicBulletIndex = 0;
  const makeElementsArray = el => (Array.isArray(el) ? el : [el]).filter(e => !!e);
  function isPaginationDisabled() {
    return !swiper.params.pagination.el || !swiper.pagination.el || Array.isArray(swiper.pagination.el) && swiper.pagination.el.length === 0;
  }
  function setSideBullets(bulletEl, position) {
    const {
      bulletActiveClass
    } = swiper.params.pagination;
    if (!bulletEl) return;
    bulletEl = bulletEl[`${position === 'prev' ? 'previous' : 'next'}ElementSibling`];
    if (bulletEl) {
      bulletEl.classList.add(`${bulletActiveClass}-${position}`);
      bulletEl = bulletEl[`${position === 'prev' ? 'previous' : 'next'}ElementSibling`];
      if (bulletEl) {
        bulletEl.classList.add(`${bulletActiveClass}-${position}-${position}`);
      }
    }
  }
  function onBulletClick(e) {
    const bulletEl = e.target.closest((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(swiper.params.pagination.bulletClass));
    if (!bulletEl) {
      return;
    }
    e.preventDefault();
    const index = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_2__.g)(bulletEl) * swiper.params.slidesPerGroup;
    if (swiper.params.loop) {
      if (swiper.realIndex === index) return;
      swiper.slideToLoop(index);
    } else {
      swiper.slideTo(index);
    }
  }
  function update() {
    // Render || Update Pagination bullets/items
    const rtl = swiper.rtl;
    const params = swiper.params.pagination;
    if (isPaginationDisabled()) return;
    let el = swiper.pagination.el;
    el = makeElementsArray(el);
    // Current/Total
    let current;
    let previousIndex;
    const slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : swiper.slides.length;
    const total = swiper.params.loop ? Math.ceil(slidesLength / swiper.params.slidesPerGroup) : swiper.snapGrid.length;
    if (swiper.params.loop) {
      previousIndex = swiper.previousRealIndex || 0;
      current = swiper.params.slidesPerGroup > 1 ? Math.floor(swiper.realIndex / swiper.params.slidesPerGroup) : swiper.realIndex;
    } else if (typeof swiper.snapIndex !== 'undefined') {
      current = swiper.snapIndex;
      previousIndex = swiper.previousSnapIndex;
    } else {
      previousIndex = swiper.previousIndex || 0;
      current = swiper.activeIndex || 0;
    }
    // Types
    if (params.type === 'bullets' && swiper.pagination.bullets && swiper.pagination.bullets.length > 0) {
      const bullets = swiper.pagination.bullets;
      let firstIndex;
      let lastIndex;
      let midIndex;
      if (params.dynamicBullets) {
        bulletSize = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_2__.f)(bullets[0], swiper.isHorizontal() ? 'width' : 'height', true);
        el.forEach(subEl => {
          subEl.style[swiper.isHorizontal() ? 'width' : 'height'] = `${bulletSize * (params.dynamicMainBullets + 4)}px`;
        });
        if (params.dynamicMainBullets > 1 && previousIndex !== undefined) {
          dynamicBulletIndex += current - (previousIndex || 0);
          if (dynamicBulletIndex > params.dynamicMainBullets - 1) {
            dynamicBulletIndex = params.dynamicMainBullets - 1;
          } else if (dynamicBulletIndex < 0) {
            dynamicBulletIndex = 0;
          }
        }
        firstIndex = Math.max(current - dynamicBulletIndex, 0);
        lastIndex = firstIndex + (Math.min(bullets.length, params.dynamicMainBullets) - 1);
        midIndex = (lastIndex + firstIndex) / 2;
      }
      bullets.forEach(bulletEl => {
        const classesToRemove = [...['', '-next', '-next-next', '-prev', '-prev-prev', '-main'].map(suffix => `${params.bulletActiveClass}${suffix}`)].map(s => typeof s === 'string' && s.includes(' ') ? s.split(' ') : s).flat();
        bulletEl.classList.remove(...classesToRemove);
      });
      if (el.length > 1) {
        bullets.forEach(bullet => {
          const bulletIndex = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_2__.g)(bullet);
          if (bulletIndex === current) {
            bullet.classList.add(...params.bulletActiveClass.split(' '));
          } else if (swiper.isElement) {
            bullet.setAttribute('part', 'bullet');
          }
          if (params.dynamicBullets) {
            if (bulletIndex >= firstIndex && bulletIndex <= lastIndex) {
              bullet.classList.add(...`${params.bulletActiveClass}-main`.split(' '));
            }
            if (bulletIndex === firstIndex) {
              setSideBullets(bullet, 'prev');
            }
            if (bulletIndex === lastIndex) {
              setSideBullets(bullet, 'next');
            }
          }
        });
      } else {
        const bullet = bullets[current];
        if (bullet) {
          bullet.classList.add(...params.bulletActiveClass.split(' '));
        }
        if (swiper.isElement) {
          bullets.forEach((bulletEl, bulletIndex) => {
            bulletEl.setAttribute('part', bulletIndex === current ? 'bullet-active' : 'bullet');
          });
        }
        if (params.dynamicBullets) {
          const firstDisplayedBullet = bullets[firstIndex];
          const lastDisplayedBullet = bullets[lastIndex];
          for (let i = firstIndex; i <= lastIndex; i += 1) {
            if (bullets[i]) {
              bullets[i].classList.add(...`${params.bulletActiveClass}-main`.split(' '));
            }
          }
          setSideBullets(firstDisplayedBullet, 'prev');
          setSideBullets(lastDisplayedBullet, 'next');
        }
      }
      if (params.dynamicBullets) {
        const dynamicBulletsLength = Math.min(bullets.length, params.dynamicMainBullets + 4);
        const bulletsOffset = (bulletSize * dynamicBulletsLength - bulletSize) / 2 - midIndex * bulletSize;
        const offsetProp = rtl ? 'right' : 'left';
        bullets.forEach(bullet => {
          bullet.style[swiper.isHorizontal() ? offsetProp : 'top'] = `${bulletsOffset}px`;
        });
      }
    }
    el.forEach((subEl, subElIndex) => {
      if (params.type === 'fraction') {
        subEl.querySelectorAll((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(params.currentClass)).forEach(fractionEl => {
          fractionEl.textContent = params.formatFractionCurrent(current + 1);
        });
        subEl.querySelectorAll((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(params.totalClass)).forEach(totalEl => {
          totalEl.textContent = params.formatFractionTotal(total);
        });
      }
      if (params.type === 'progressbar') {
        let progressbarDirection;
        if (params.progressbarOpposite) {
          progressbarDirection = swiper.isHorizontal() ? 'vertical' : 'horizontal';
        } else {
          progressbarDirection = swiper.isHorizontal() ? 'horizontal' : 'vertical';
        }
        const scale = (current + 1) / total;
        let scaleX = 1;
        let scaleY = 1;
        if (progressbarDirection === 'horizontal') {
          scaleX = scale;
        } else {
          scaleY = scale;
        }
        subEl.querySelectorAll((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(params.progressbarFillClass)).forEach(progressEl => {
          progressEl.style.transform = `translate3d(0,0,0) scaleX(${scaleX}) scaleY(${scaleY})`;
          progressEl.style.transitionDuration = `${swiper.params.speed}ms`;
        });
      }
      if (params.type === 'custom' && params.renderCustom) {
        subEl.innerHTML = params.renderCustom(swiper, current + 1, total);
        if (subElIndex === 0) emit('paginationRender', subEl);
      } else {
        if (subElIndex === 0) emit('paginationRender', subEl);
        emit('paginationUpdate', subEl);
      }
      if (swiper.params.watchOverflow && swiper.enabled) {
        subEl.classList[swiper.isLocked ? 'add' : 'remove'](params.lockClass);
      }
    });
  }
  function render() {
    // Render Container
    const params = swiper.params.pagination;
    if (isPaginationDisabled()) return;
    const slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : swiper.grid && swiper.params.grid.rows > 1 ? swiper.slides.length / Math.ceil(swiper.params.grid.rows) : swiper.slides.length;
    let el = swiper.pagination.el;
    el = makeElementsArray(el);
    let paginationHTML = '';
    if (params.type === 'bullets') {
      let numberOfBullets = swiper.params.loop ? Math.ceil(slidesLength / swiper.params.slidesPerGroup) : swiper.snapGrid.length;
      if (swiper.params.freeMode && swiper.params.freeMode.enabled && numberOfBullets > slidesLength) {
        numberOfBullets = slidesLength;
      }
      for (let i = 0; i < numberOfBullets; i += 1) {
        if (params.renderBullet) {
          paginationHTML += params.renderBullet.call(swiper, i, params.bulletClass);
        } else {
          // prettier-ignore
          paginationHTML += `<${params.bulletElement} ${swiper.isElement ? 'part="bullet"' : ''} class="${params.bulletClass}"></${params.bulletElement}>`;
        }
      }
    }
    if (params.type === 'fraction') {
      if (params.renderFraction) {
        paginationHTML = params.renderFraction.call(swiper, params.currentClass, params.totalClass);
      } else {
        paginationHTML = `<span class="${params.currentClass}"></span>` + ' / ' + `<span class="${params.totalClass}"></span>`;
      }
    }
    if (params.type === 'progressbar') {
      if (params.renderProgressbar) {
        paginationHTML = params.renderProgressbar.call(swiper, params.progressbarFillClass);
      } else {
        paginationHTML = `<span class="${params.progressbarFillClass}"></span>`;
      }
    }
    swiper.pagination.bullets = [];
    el.forEach(subEl => {
      if (params.type !== 'custom') {
        subEl.innerHTML = paginationHTML || '';
      }
      if (params.type === 'bullets') {
        swiper.pagination.bullets.push(...subEl.querySelectorAll((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_0__.c)(params.bulletClass)));
      }
    });
    if (params.type !== 'custom') {
      emit('paginationRender', el[0]);
    }
  }
  function init() {
    swiper.params.pagination = (0,_shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_1__.c)(swiper, swiper.originalParams.pagination, swiper.params.pagination, {
      el: 'swiper-pagination'
    });
    const params = swiper.params.pagination;
    if (!params.el) return;
    let el;
    if (typeof params.el === 'string' && swiper.isElement) {
      el = swiper.el.querySelector(params.el);
    }
    if (!el && typeof params.el === 'string') {
      el = [...document.querySelectorAll(params.el)];
    }
    if (!el) {
      el = params.el;
    }
    if (!el || el.length === 0) return;
    if (swiper.params.uniqueNavElements && typeof params.el === 'string' && Array.isArray(el) && el.length > 1) {
      el = [...swiper.el.querySelectorAll(params.el)];
      // check if it belongs to another nested Swiper
      if (el.length > 1) {
        el = el.filter(subEl => {
          if ((0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_2__.a)(subEl, '.swiper')[0] !== swiper.el) return false;
          return true;
        })[0];
      }
    }
    if (Array.isArray(el) && el.length === 1) el = el[0];
    Object.assign(swiper.pagination, {
      el
    });
    el = makeElementsArray(el);
    el.forEach(subEl => {
      if (params.type === 'bullets' && params.clickable) {
        subEl.classList.add(...(params.clickableClass || '').split(' '));
      }
      subEl.classList.add(params.modifierClass + params.type);
      subEl.classList.add(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
      if (params.type === 'bullets' && params.dynamicBullets) {
        subEl.classList.add(`${params.modifierClass}${params.type}-dynamic`);
        dynamicBulletIndex = 0;
        if (params.dynamicMainBullets < 1) {
          params.dynamicMainBullets = 1;
        }
      }
      if (params.type === 'progressbar' && params.progressbarOpposite) {
        subEl.classList.add(params.progressbarOppositeClass);
      }
      if (params.clickable) {
        subEl.addEventListener('click', onBulletClick);
      }
      if (!swiper.enabled) {
        subEl.classList.add(params.lockClass);
      }
    });
  }
  function destroy() {
    const params = swiper.params.pagination;
    if (isPaginationDisabled()) return;
    let el = swiper.pagination.el;
    if (el) {
      el = makeElementsArray(el);
      el.forEach(subEl => {
        subEl.classList.remove(params.hiddenClass);
        subEl.classList.remove(params.modifierClass + params.type);
        subEl.classList.remove(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
        if (params.clickable) {
          subEl.classList.remove(...(params.clickableClass || '').split(' '));
          subEl.removeEventListener('click', onBulletClick);
        }
      });
    }
    if (swiper.pagination.bullets) swiper.pagination.bullets.forEach(subEl => subEl.classList.remove(...params.bulletActiveClass.split(' ')));
  }
  on('changeDirection', () => {
    if (!swiper.pagination || !swiper.pagination.el) return;
    const params = swiper.params.pagination;
    let {
      el
    } = swiper.pagination;
    el = makeElementsArray(el);
    el.forEach(subEl => {
      subEl.classList.remove(params.horizontalClass, params.verticalClass);
      subEl.classList.add(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
    });
  });
  on('init', () => {
    if (swiper.params.pagination.enabled === false) {
      // eslint-disable-next-line
      disable();
    } else {
      init();
      render();
      update();
    }
  });
  on('activeIndexChange', () => {
    if (typeof swiper.snapIndex === 'undefined') {
      update();
    }
  });
  on('snapIndexChange', () => {
    update();
  });
  on('snapGridLengthChange', () => {
    render();
    update();
  });
  on('destroy', () => {
    destroy();
  });
  on('enable disable', () => {
    let {
      el
    } = swiper.pagination;
    if (el) {
      el = makeElementsArray(el);
      el.forEach(subEl => subEl.classList[swiper.enabled ? 'remove' : 'add'](swiper.params.pagination.lockClass));
    }
  });
  on('lock unlock', () => {
    update();
  });
  on('click', (_s, e) => {
    const targetEl = e.target;
    const el = makeElementsArray(swiper.pagination.el);
    if (swiper.params.pagination.el && swiper.params.pagination.hideOnClick && el && el.length > 0 && !targetEl.classList.contains(swiper.params.pagination.bulletClass)) {
      if (swiper.navigation && (swiper.navigation.nextEl && targetEl === swiper.navigation.nextEl || swiper.navigation.prevEl && targetEl === swiper.navigation.prevEl)) return;
      const isHidden = el[0].classList.contains(swiper.params.pagination.hiddenClass);
      if (isHidden === true) {
        emit('paginationShow');
      } else {
        emit('paginationHide');
      }
      el.forEach(subEl => subEl.classList.toggle(swiper.params.pagination.hiddenClass));
    }
  });
  const enable = () => {
    swiper.el.classList.remove(swiper.params.pagination.paginationDisabledClass);
    let {
      el
    } = swiper.pagination;
    if (el) {
      el = makeElementsArray(el);
      el.forEach(subEl => subEl.classList.remove(swiper.params.pagination.paginationDisabledClass));
    }
    init();
    render();
    update();
  };
  const disable = () => {
    swiper.el.classList.add(swiper.params.pagination.paginationDisabledClass);
    let {
      el
    } = swiper.pagination;
    if (el) {
      el = makeElementsArray(el);
      el.forEach(subEl => subEl.classList.add(swiper.params.pagination.paginationDisabledClass));
    }
    destroy();
  };
  Object.assign(swiper.pagination, {
    enable,
    disable,
    render,
    update,
    init,
    destroy
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/parallax.mjs":
/*!**************************************************!*\
  !*** ./node_modules/swiper/modules/parallax.mjs ***!
  \**************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Parallax)
/* harmony export */ });
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function Parallax(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    parallax: {
      enabled: false
    }
  });
  const elementsSelector = '[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]';
  const setTransform = (el, progress) => {
    const {
      rtl
    } = swiper;
    const rtlFactor = rtl ? -1 : 1;
    const p = el.getAttribute('data-swiper-parallax') || '0';
    let x = el.getAttribute('data-swiper-parallax-x');
    let y = el.getAttribute('data-swiper-parallax-y');
    const scale = el.getAttribute('data-swiper-parallax-scale');
    const opacity = el.getAttribute('data-swiper-parallax-opacity');
    const rotate = el.getAttribute('data-swiper-parallax-rotate');
    if (x || y) {
      x = x || '0';
      y = y || '0';
    } else if (swiper.isHorizontal()) {
      x = p;
      y = '0';
    } else {
      y = p;
      x = '0';
    }
    if (x.indexOf('%') >= 0) {
      x = `${parseInt(x, 10) * progress * rtlFactor}%`;
    } else {
      x = `${x * progress * rtlFactor}px`;
    }
    if (y.indexOf('%') >= 0) {
      y = `${parseInt(y, 10) * progress}%`;
    } else {
      y = `${y * progress}px`;
    }
    if (typeof opacity !== 'undefined' && opacity !== null) {
      const currentOpacity = opacity - (opacity - 1) * (1 - Math.abs(progress));
      el.style.opacity = currentOpacity;
    }
    let transform = `translate3d(${x}, ${y}, 0px)`;
    if (typeof scale !== 'undefined' && scale !== null) {
      const currentScale = scale - (scale - 1) * (1 - Math.abs(progress));
      transform += ` scale(${currentScale})`;
    }
    if (rotate && typeof rotate !== 'undefined' && rotate !== null) {
      const currentRotate = rotate * progress * -1;
      transform += ` rotate(${currentRotate}deg)`;
    }
    el.style.transform = transform;
  };
  const setTranslate = () => {
    const {
      el,
      slides,
      progress,
      snapGrid,
      isElement
    } = swiper;
    const elements = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.e)(el, elementsSelector);
    if (swiper.isElement) {
      elements.push(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.e)(swiper.hostEl, elementsSelector));
    }
    elements.forEach(subEl => {
      setTransform(subEl, progress);
    });
    slides.forEach((slideEl, slideIndex) => {
      let slideProgress = slideEl.progress;
      if (swiper.params.slidesPerGroup > 1 && swiper.params.slidesPerView !== 'auto') {
        slideProgress += Math.ceil(slideIndex / 2) - progress * (snapGrid.length - 1);
      }
      slideProgress = Math.min(Math.max(slideProgress, -1), 1);
      slideEl.querySelectorAll(`${elementsSelector}, [data-swiper-parallax-rotate]`).forEach(subEl => {
        setTransform(subEl, slideProgress);
      });
    });
  };
  const setTransition = function (duration) {
    if (duration === void 0) {
      duration = swiper.params.speed;
    }
    const {
      el,
      hostEl
    } = swiper;
    const elements = [...el.querySelectorAll(elementsSelector)];
    if (swiper.isElement) {
      elements.push(...hostEl.querySelectorAll(elementsSelector));
    }
    elements.forEach(parallaxEl => {
      let parallaxDuration = parseInt(parallaxEl.getAttribute('data-swiper-parallax-duration'), 10) || duration;
      if (duration === 0) parallaxDuration = 0;
      parallaxEl.style.transitionDuration = `${parallaxDuration}ms`;
    });
  };
  on('beforeInit', () => {
    if (!swiper.params.parallax.enabled) return;
    swiper.params.watchSlidesProgress = true;
    swiper.originalParams.watchSlidesProgress = true;
  });
  on('init', () => {
    if (!swiper.params.parallax.enabled) return;
    setTranslate();
  });
  on('setTranslate', () => {
    if (!swiper.params.parallax.enabled) return;
    setTranslate();
  });
  on('setTransition', (_swiper, duration) => {
    if (!swiper.params.parallax.enabled) return;
    setTransition(duration);
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/scrollbar.mjs":
/*!***************************************************!*\
  !*** ./node_modules/swiper/modules/scrollbar.mjs ***!
  \***************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Scrollbar)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");
/* harmony import */ var _shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../shared/create-element-if-not-defined.mjs */ "./node_modules/swiper/shared/create-element-if-not-defined.mjs");
/* harmony import */ var _shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shared/classes-to-selector.mjs */ "./node_modules/swiper/shared/classes-to-selector.mjs");





function Scrollbar(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  let isTouched = false;
  let timeout = null;
  let dragTimeout = null;
  let dragStartPos;
  let dragSize;
  let trackSize;
  let divider;
  extendParams({
    scrollbar: {
      el: null,
      dragSize: 'auto',
      hide: false,
      draggable: false,
      snapOnRelease: true,
      lockClass: 'swiper-scrollbar-lock',
      dragClass: 'swiper-scrollbar-drag',
      scrollbarDisabledClass: 'swiper-scrollbar-disabled',
      horizontalClass: `swiper-scrollbar-horizontal`,
      verticalClass: `swiper-scrollbar-vertical`
    }
  });
  swiper.scrollbar = {
    el: null,
    dragEl: null
  };
  function setTranslate() {
    if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
    const {
      scrollbar,
      rtlTranslate: rtl
    } = swiper;
    const {
      dragEl,
      el
    } = scrollbar;
    const params = swiper.params.scrollbar;
    const progress = swiper.params.loop ? swiper.progressLoop : swiper.progress;
    let newSize = dragSize;
    let newPos = (trackSize - dragSize) * progress;
    if (rtl) {
      newPos = -newPos;
      if (newPos > 0) {
        newSize = dragSize - newPos;
        newPos = 0;
      } else if (-newPos + dragSize > trackSize) {
        newSize = trackSize + newPos;
      }
    } else if (newPos < 0) {
      newSize = dragSize + newPos;
      newPos = 0;
    } else if (newPos + dragSize > trackSize) {
      newSize = trackSize - newPos;
    }
    if (swiper.isHorizontal()) {
      dragEl.style.transform = `translate3d(${newPos}px, 0, 0)`;
      dragEl.style.width = `${newSize}px`;
    } else {
      dragEl.style.transform = `translate3d(0px, ${newPos}px, 0)`;
      dragEl.style.height = `${newSize}px`;
    }
    if (params.hide) {
      clearTimeout(timeout);
      el.style.opacity = 1;
      timeout = setTimeout(() => {
        el.style.opacity = 0;
        el.style.transitionDuration = '400ms';
      }, 1000);
    }
  }
  function setTransition(duration) {
    if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
    swiper.scrollbar.dragEl.style.transitionDuration = `${duration}ms`;
  }
  function updateSize() {
    if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
    const {
      scrollbar
    } = swiper;
    const {
      dragEl,
      el
    } = scrollbar;
    dragEl.style.width = '';
    dragEl.style.height = '';
    trackSize = swiper.isHorizontal() ? el.offsetWidth : el.offsetHeight;
    divider = swiper.size / (swiper.virtualSize + swiper.params.slidesOffsetBefore - (swiper.params.centeredSlides ? swiper.snapGrid[0] : 0));
    if (swiper.params.scrollbar.dragSize === 'auto') {
      dragSize = trackSize * divider;
    } else {
      dragSize = parseInt(swiper.params.scrollbar.dragSize, 10);
    }
    if (swiper.isHorizontal()) {
      dragEl.style.width = `${dragSize}px`;
    } else {
      dragEl.style.height = `${dragSize}px`;
    }
    if (divider >= 1) {
      el.style.display = 'none';
    } else {
      el.style.display = '';
    }
    if (swiper.params.scrollbar.hide) {
      el.style.opacity = 0;
    }
    if (swiper.params.watchOverflow && swiper.enabled) {
      scrollbar.el.classList[swiper.isLocked ? 'add' : 'remove'](swiper.params.scrollbar.lockClass);
    }
  }
  function getPointerPosition(e) {
    return swiper.isHorizontal() ? e.clientX : e.clientY;
  }
  function setDragPosition(e) {
    const {
      scrollbar,
      rtlTranslate: rtl
    } = swiper;
    const {
      el
    } = scrollbar;
    let positionRatio;
    positionRatio = (getPointerPosition(e) - (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.b)(el)[swiper.isHorizontal() ? 'left' : 'top'] - (dragStartPos !== null ? dragStartPos : dragSize / 2)) / (trackSize - dragSize);
    positionRatio = Math.max(Math.min(positionRatio, 1), 0);
    if (rtl) {
      positionRatio = 1 - positionRatio;
    }
    const position = swiper.minTranslate() + (swiper.maxTranslate() - swiper.minTranslate()) * positionRatio;
    swiper.updateProgress(position);
    swiper.setTranslate(position);
    swiper.updateActiveIndex();
    swiper.updateSlidesClasses();
  }
  function onDragStart(e) {
    const params = swiper.params.scrollbar;
    const {
      scrollbar,
      wrapperEl
    } = swiper;
    const {
      el,
      dragEl
    } = scrollbar;
    isTouched = true;
    dragStartPos = e.target === dragEl ? getPointerPosition(e) - e.target.getBoundingClientRect()[swiper.isHorizontal() ? 'left' : 'top'] : null;
    e.preventDefault();
    e.stopPropagation();
    wrapperEl.style.transitionDuration = '100ms';
    dragEl.style.transitionDuration = '100ms';
    setDragPosition(e);
    clearTimeout(dragTimeout);
    el.style.transitionDuration = '0ms';
    if (params.hide) {
      el.style.opacity = 1;
    }
    if (swiper.params.cssMode) {
      swiper.wrapperEl.style['scroll-snap-type'] = 'none';
    }
    emit('scrollbarDragStart', e);
  }
  function onDragMove(e) {
    const {
      scrollbar,
      wrapperEl
    } = swiper;
    const {
      el,
      dragEl
    } = scrollbar;
    if (!isTouched) return;
    if (e.preventDefault) e.preventDefault();else e.returnValue = false;
    setDragPosition(e);
    wrapperEl.style.transitionDuration = '0ms';
    el.style.transitionDuration = '0ms';
    dragEl.style.transitionDuration = '0ms';
    emit('scrollbarDragMove', e);
  }
  function onDragEnd(e) {
    const params = swiper.params.scrollbar;
    const {
      scrollbar,
      wrapperEl
    } = swiper;
    const {
      el
    } = scrollbar;
    if (!isTouched) return;
    isTouched = false;
    if (swiper.params.cssMode) {
      swiper.wrapperEl.style['scroll-snap-type'] = '';
      wrapperEl.style.transitionDuration = '';
    }
    if (params.hide) {
      clearTimeout(dragTimeout);
      dragTimeout = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
        el.style.opacity = 0;
        el.style.transitionDuration = '400ms';
      }, 1000);
    }
    emit('scrollbarDragEnd', e);
    if (params.snapOnRelease) {
      swiper.slideToClosest();
    }
  }
  function events(method) {
    const {
      scrollbar,
      params
    } = swiper;
    const el = scrollbar.el;
    if (!el) return;
    const target = el;
    const activeListener = params.passiveListeners ? {
      passive: false,
      capture: false
    } : false;
    const passiveListener = params.passiveListeners ? {
      passive: true,
      capture: false
    } : false;
    if (!target) return;
    const eventMethod = method === 'on' ? 'addEventListener' : 'removeEventListener';
    target[eventMethod]('pointerdown', onDragStart, activeListener);
    document[eventMethod]('pointermove', onDragMove, activeListener);
    document[eventMethod]('pointerup', onDragEnd, passiveListener);
  }
  function enableDraggable() {
    if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
    events('on');
  }
  function disableDraggable() {
    if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
    events('off');
  }
  function init() {
    const {
      scrollbar,
      el: swiperEl
    } = swiper;
    swiper.params.scrollbar = (0,_shared_create_element_if_not_defined_mjs__WEBPACK_IMPORTED_MODULE_2__.c)(swiper, swiper.originalParams.scrollbar, swiper.params.scrollbar, {
      el: 'swiper-scrollbar'
    });
    const params = swiper.params.scrollbar;
    if (!params.el) return;
    let el;
    if (typeof params.el === 'string' && swiper.isElement) {
      el = swiper.el.querySelector(params.el);
    }
    if (!el && typeof params.el === 'string') {
      el = document.querySelectorAll(params.el);
      if (!el.length) return;
    } else if (!el) {
      el = params.el;
    }
    if (swiper.params.uniqueNavElements && typeof params.el === 'string' && el.length > 1 && swiperEl.querySelectorAll(params.el).length === 1) {
      el = swiperEl.querySelector(params.el);
    }
    if (el.length > 0) el = el[0];
    el.classList.add(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
    let dragEl;
    if (el) {
      dragEl = el.querySelector((0,_shared_classes_to_selector_mjs__WEBPACK_IMPORTED_MODULE_3__.c)(swiper.params.scrollbar.dragClass));
      if (!dragEl) {
        dragEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', swiper.params.scrollbar.dragClass);
        el.append(dragEl);
      }
    }
    Object.assign(scrollbar, {
      el,
      dragEl
    });
    if (params.draggable) {
      enableDraggable();
    }
    if (el) {
      el.classList[swiper.enabled ? 'remove' : 'add'](...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.lockClass));
    }
  }
  function destroy() {
    const params = swiper.params.scrollbar;
    const el = swiper.scrollbar.el;
    if (el) {
      el.classList.remove(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass));
    }
    disableDraggable();
  }
  on('init', () => {
    if (swiper.params.scrollbar.enabled === false) {
      // eslint-disable-next-line
      disable();
    } else {
      init();
      updateSize();
      setTranslate();
    }
  });
  on('update resize observerUpdate lock unlock', () => {
    updateSize();
  });
  on('setTranslate', () => {
    setTranslate();
  });
  on('setTransition', (_s, duration) => {
    setTransition(duration);
  });
  on('enable disable', () => {
    const {
      el
    } = swiper.scrollbar;
    if (el) {
      el.classList[swiper.enabled ? 'remove' : 'add'](...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.lockClass));
    }
  });
  on('destroy', () => {
    destroy();
  });
  const enable = () => {
    swiper.el.classList.remove(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.scrollbarDisabledClass));
    if (swiper.scrollbar.el) {
      swiper.scrollbar.el.classList.remove(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.scrollbarDisabledClass));
    }
    init();
    updateSize();
    setTranslate();
  };
  const disable = () => {
    swiper.el.classList.add(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.scrollbarDisabledClass));
    if (swiper.scrollbar.el) {
      swiper.scrollbar.el.classList.add(...(0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.h)(swiper.params.scrollbar.scrollbarDisabledClass));
    }
    destroy();
  };
  Object.assign(swiper.scrollbar, {
    enable,
    disable,
    updateSize,
    setTranslate,
    init,
    destroy
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/thumbs.mjs":
/*!************************************************!*\
  !*** ./node_modules/swiper/modules/thumbs.mjs ***!
  \************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Thumb)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function Thumb(_ref) {
  let {
    swiper,
    extendParams,
    on
  } = _ref;
  extendParams({
    thumbs: {
      swiper: null,
      multipleActiveThumbs: true,
      autoScrollOffset: 0,
      slideThumbActiveClass: 'swiper-slide-thumb-active',
      thumbsContainerClass: 'swiper-thumbs'
    }
  });
  let initialized = false;
  let swiperCreated = false;
  swiper.thumbs = {
    swiper: null
  };
  function onThumbClick() {
    const thumbsSwiper = swiper.thumbs.swiper;
    if (!thumbsSwiper || thumbsSwiper.destroyed) return;
    const clickedIndex = thumbsSwiper.clickedIndex;
    const clickedSlide = thumbsSwiper.clickedSlide;
    if (clickedSlide && clickedSlide.classList.contains(swiper.params.thumbs.slideThumbActiveClass)) return;
    if (typeof clickedIndex === 'undefined' || clickedIndex === null) return;
    let slideToIndex;
    if (thumbsSwiper.params.loop) {
      slideToIndex = parseInt(thumbsSwiper.clickedSlide.getAttribute('data-swiper-slide-index'), 10);
    } else {
      slideToIndex = clickedIndex;
    }
    if (swiper.params.loop) {
      swiper.slideToLoop(slideToIndex);
    } else {
      swiper.slideTo(slideToIndex);
    }
  }
  function init() {
    const {
      thumbs: thumbsParams
    } = swiper.params;
    if (initialized) return false;
    initialized = true;
    const SwiperClass = swiper.constructor;
    if (thumbsParams.swiper instanceof SwiperClass) {
      swiper.thumbs.swiper = thumbsParams.swiper;
      Object.assign(swiper.thumbs.swiper.originalParams, {
        watchSlidesProgress: true,
        slideToClickedSlide: false
      });
      Object.assign(swiper.thumbs.swiper.params, {
        watchSlidesProgress: true,
        slideToClickedSlide: false
      });
      swiper.thumbs.swiper.update();
    } else if ((0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.k)(thumbsParams.swiper)) {
      const thumbsSwiperParams = Object.assign({}, thumbsParams.swiper);
      Object.assign(thumbsSwiperParams, {
        watchSlidesProgress: true,
        slideToClickedSlide: false
      });
      swiper.thumbs.swiper = new SwiperClass(thumbsSwiperParams);
      swiperCreated = true;
    }
    swiper.thumbs.swiper.el.classList.add(swiper.params.thumbs.thumbsContainerClass);
    swiper.thumbs.swiper.on('tap', onThumbClick);
    return true;
  }
  function update(initial) {
    const thumbsSwiper = swiper.thumbs.swiper;
    if (!thumbsSwiper || thumbsSwiper.destroyed) return;
    const slidesPerView = thumbsSwiper.params.slidesPerView === 'auto' ? thumbsSwiper.slidesPerViewDynamic() : thumbsSwiper.params.slidesPerView;

    // Activate thumbs
    let thumbsToActivate = 1;
    const thumbActiveClass = swiper.params.thumbs.slideThumbActiveClass;
    if (swiper.params.slidesPerView > 1 && !swiper.params.centeredSlides) {
      thumbsToActivate = swiper.params.slidesPerView;
    }
    if (!swiper.params.thumbs.multipleActiveThumbs) {
      thumbsToActivate = 1;
    }
    thumbsToActivate = Math.floor(thumbsToActivate);
    thumbsSwiper.slides.forEach(slideEl => slideEl.classList.remove(thumbActiveClass));
    if (thumbsSwiper.params.loop || thumbsSwiper.params.virtual && thumbsSwiper.params.virtual.enabled) {
      for (let i = 0; i < thumbsToActivate; i += 1) {
        (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(thumbsSwiper.slidesEl, `[data-swiper-slide-index="${swiper.realIndex + i}"]`).forEach(slideEl => {
          slideEl.classList.add(thumbActiveClass);
        });
      }
    } else {
      for (let i = 0; i < thumbsToActivate; i += 1) {
        if (thumbsSwiper.slides[swiper.realIndex + i]) {
          thumbsSwiper.slides[swiper.realIndex + i].classList.add(thumbActiveClass);
        }
      }
    }
    const autoScrollOffset = swiper.params.thumbs.autoScrollOffset;
    const useOffset = autoScrollOffset && !thumbsSwiper.params.loop;
    if (swiper.realIndex !== thumbsSwiper.realIndex || useOffset) {
      const currentThumbsIndex = thumbsSwiper.activeIndex;
      let newThumbsIndex;
      let direction;
      if (thumbsSwiper.params.loop) {
        const newThumbsSlide = thumbsSwiper.slides.filter(slideEl => slideEl.getAttribute('data-swiper-slide-index') === `${swiper.realIndex}`)[0];
        newThumbsIndex = thumbsSwiper.slides.indexOf(newThumbsSlide);
        direction = swiper.activeIndex > swiper.previousIndex ? 'next' : 'prev';
      } else {
        newThumbsIndex = swiper.realIndex;
        direction = newThumbsIndex > swiper.previousIndex ? 'next' : 'prev';
      }
      if (useOffset) {
        newThumbsIndex += direction === 'next' ? autoScrollOffset : -1 * autoScrollOffset;
      }
      if (thumbsSwiper.visibleSlidesIndexes && thumbsSwiper.visibleSlidesIndexes.indexOf(newThumbsIndex) < 0) {
        if (thumbsSwiper.params.centeredSlides) {
          if (newThumbsIndex > currentThumbsIndex) {
            newThumbsIndex = newThumbsIndex - Math.floor(slidesPerView / 2) + 1;
          } else {
            newThumbsIndex = newThumbsIndex + Math.floor(slidesPerView / 2) - 1;
          }
        } else if (newThumbsIndex > currentThumbsIndex && thumbsSwiper.params.slidesPerGroup === 1) ;
        thumbsSwiper.slideTo(newThumbsIndex, initial ? 0 : undefined);
      }
    }
  }
  on('beforeInit', () => {
    const {
      thumbs
    } = swiper.params;
    if (!thumbs || !thumbs.swiper) return;
    if (typeof thumbs.swiper === 'string' || thumbs.swiper instanceof HTMLElement) {
      const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
      const getThumbsElementAndInit = () => {
        const thumbsElement = typeof thumbs.swiper === 'string' ? document.querySelector(thumbs.swiper) : thumbs.swiper;
        if (thumbsElement && thumbsElement.swiper) {
          thumbs.swiper = thumbsElement.swiper;
          init();
          update(true);
        } else if (thumbsElement) {
          const onThumbsSwiper = e => {
            thumbs.swiper = e.detail[0];
            thumbsElement.removeEventListener('init', onThumbsSwiper);
            init();
            update(true);
            thumbs.swiper.update();
            swiper.update();
          };
          thumbsElement.addEventListener('init', onThumbsSwiper);
        }
        return thumbsElement;
      };
      const watchForThumbsToAppear = () => {
        if (swiper.destroyed) return;
        const thumbsElement = getThumbsElementAndInit();
        if (!thumbsElement) {
          requestAnimationFrame(watchForThumbsToAppear);
        }
      };
      requestAnimationFrame(watchForThumbsToAppear);
    } else {
      init();
      update(true);
    }
  });
  on('slideChange update resize observerUpdate', () => {
    update();
  });
  on('setTransition', (_s, duration) => {
    const thumbsSwiper = swiper.thumbs.swiper;
    if (!thumbsSwiper || thumbsSwiper.destroyed) return;
    thumbsSwiper.setTransition(duration);
  });
  on('beforeDestroy', () => {
    const thumbsSwiper = swiper.thumbs.swiper;
    if (!thumbsSwiper || thumbsSwiper.destroyed) return;
    if (swiperCreated) {
      thumbsSwiper.destroy();
    }
  });
  Object.assign(swiper.thumbs, {
    init,
    update
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/virtual.mjs":
/*!*************************************************!*\
  !*** ./node_modules/swiper/modules/virtual.mjs ***!
  \*************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Virtual)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function Virtual(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  extendParams({
    virtual: {
      enabled: false,
      slides: [],
      cache: true,
      renderSlide: null,
      renderExternal: null,
      renderExternalUpdate: true,
      addSlidesBefore: 0,
      addSlidesAfter: 0
    }
  });
  let cssModeTimeout;
  const document = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  swiper.virtual = {
    cache: {},
    from: undefined,
    to: undefined,
    slides: [],
    offset: 0,
    slidesGrid: []
  };
  const tempDOM = document.createElement('div');
  function renderSlide(slide, index) {
    const params = swiper.params.virtual;
    if (params.cache && swiper.virtual.cache[index]) {
      return swiper.virtual.cache[index];
    }
    // eslint-disable-next-line
    let slideEl;
    if (params.renderSlide) {
      slideEl = params.renderSlide.call(swiper, slide, index);
      if (typeof slideEl === 'string') {
        tempDOM.innerHTML = slideEl;
        slideEl = tempDOM.children[0];
      }
    } else if (swiper.isElement) {
      slideEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('swiper-slide');
    } else {
      slideEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', swiper.params.slideClass);
    }
    slideEl.setAttribute('data-swiper-slide-index', index);
    if (!params.renderSlide) {
      slideEl.innerHTML = slide;
    }
    if (params.cache) {
      swiper.virtual.cache[index] = slideEl;
    }
    return slideEl;
  }
  function update(force) {
    const {
      slidesPerView,
      slidesPerGroup,
      centeredSlides,
      loop: isLoop
    } = swiper.params;
    const {
      addSlidesBefore,
      addSlidesAfter
    } = swiper.params.virtual;
    const {
      from: previousFrom,
      to: previousTo,
      slides,
      slidesGrid: previousSlidesGrid,
      offset: previousOffset
    } = swiper.virtual;
    if (!swiper.params.cssMode) {
      swiper.updateActiveIndex();
    }
    const activeIndex = swiper.activeIndex || 0;
    let offsetProp;
    if (swiper.rtlTranslate) offsetProp = 'right';else offsetProp = swiper.isHorizontal() ? 'left' : 'top';
    let slidesAfter;
    let slidesBefore;
    if (centeredSlides) {
      slidesAfter = Math.floor(slidesPerView / 2) + slidesPerGroup + addSlidesAfter;
      slidesBefore = Math.floor(slidesPerView / 2) + slidesPerGroup + addSlidesBefore;
    } else {
      slidesAfter = slidesPerView + (slidesPerGroup - 1) + addSlidesAfter;
      slidesBefore = (isLoop ? slidesPerView : slidesPerGroup) + addSlidesBefore;
    }
    let from = activeIndex - slidesBefore;
    let to = activeIndex + slidesAfter;
    if (!isLoop) {
      from = Math.max(from, 0);
      to = Math.min(to, slides.length - 1);
    }
    let offset = (swiper.slidesGrid[from] || 0) - (swiper.slidesGrid[0] || 0);
    if (isLoop && activeIndex >= slidesBefore) {
      from -= slidesBefore;
      if (!centeredSlides) offset += swiper.slidesGrid[0];
    } else if (isLoop && activeIndex < slidesBefore) {
      from = -slidesBefore;
      if (centeredSlides) offset += swiper.slidesGrid[0];
    }
    Object.assign(swiper.virtual, {
      from,
      to,
      offset,
      slidesGrid: swiper.slidesGrid,
      slidesBefore,
      slidesAfter
    });
    function onRendered() {
      swiper.updateSlides();
      swiper.updateProgress();
      swiper.updateSlidesClasses();
      emit('virtualUpdate');
    }
    if (previousFrom === from && previousTo === to && !force) {
      if (swiper.slidesGrid !== previousSlidesGrid && offset !== previousOffset) {
        swiper.slides.forEach(slideEl => {
          slideEl.style[offsetProp] = `${offset - Math.abs(swiper.cssOverflowAdjustment())}px`;
        });
      }
      swiper.updateProgress();
      emit('virtualUpdate');
      return;
    }
    if (swiper.params.virtual.renderExternal) {
      swiper.params.virtual.renderExternal.call(swiper, {
        offset,
        from,
        to,
        slides: function getSlides() {
          const slidesToRender = [];
          for (let i = from; i <= to; i += 1) {
            slidesToRender.push(slides[i]);
          }
          return slidesToRender;
        }()
      });
      if (swiper.params.virtual.renderExternalUpdate) {
        onRendered();
      } else {
        emit('virtualUpdate');
      }
      return;
    }
    const prependIndexes = [];
    const appendIndexes = [];
    const getSlideIndex = index => {
      let slideIndex = index;
      if (index < 0) {
        slideIndex = slides.length + index;
      } else if (slideIndex >= slides.length) {
        // eslint-disable-next-line
        slideIndex = slideIndex - slides.length;
      }
      return slideIndex;
    };
    if (force) {
      swiper.slides.filter(el => el.matches(`.${swiper.params.slideClass}, swiper-slide`)).forEach(slideEl => {
        slideEl.remove();
      });
    } else {
      for (let i = previousFrom; i <= previousTo; i += 1) {
        if (i < from || i > to) {
          const slideIndex = getSlideIndex(i);
          swiper.slides.filter(el => el.matches(`.${swiper.params.slideClass}[data-swiper-slide-index="${slideIndex}"], swiper-slide[data-swiper-slide-index="${slideIndex}"]`)).forEach(slideEl => {
            slideEl.remove();
          });
        }
      }
    }
    const loopFrom = isLoop ? -slides.length : 0;
    const loopTo = isLoop ? slides.length * 2 : slides.length;
    for (let i = loopFrom; i < loopTo; i += 1) {
      if (i >= from && i <= to) {
        const slideIndex = getSlideIndex(i);
        if (typeof previousTo === 'undefined' || force) {
          appendIndexes.push(slideIndex);
        } else {
          if (i > previousTo) appendIndexes.push(slideIndex);
          if (i < previousFrom) prependIndexes.push(slideIndex);
        }
      }
    }
    appendIndexes.forEach(index => {
      swiper.slidesEl.append(renderSlide(slides[index], index));
    });
    if (isLoop) {
      for (let i = prependIndexes.length - 1; i >= 0; i -= 1) {
        const index = prependIndexes[i];
        swiper.slidesEl.prepend(renderSlide(slides[index], index));
      }
    } else {
      prependIndexes.sort((a, b) => b - a);
      prependIndexes.forEach(index => {
        swiper.slidesEl.prepend(renderSlide(slides[index], index));
      });
    }
    (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(swiper.slidesEl, '.swiper-slide, swiper-slide').forEach(slideEl => {
      slideEl.style[offsetProp] = `${offset - Math.abs(swiper.cssOverflowAdjustment())}px`;
    });
    onRendered();
  }
  function appendSlide(slides) {
    if (typeof slides === 'object' && 'length' in slides) {
      for (let i = 0; i < slides.length; i += 1) {
        if (slides[i]) swiper.virtual.slides.push(slides[i]);
      }
    } else {
      swiper.virtual.slides.push(slides);
    }
    update(true);
  }
  function prependSlide(slides) {
    const activeIndex = swiper.activeIndex;
    let newActiveIndex = activeIndex + 1;
    let numberOfNewSlides = 1;
    if (Array.isArray(slides)) {
      for (let i = 0; i < slides.length; i += 1) {
        if (slides[i]) swiper.virtual.slides.unshift(slides[i]);
      }
      newActiveIndex = activeIndex + slides.length;
      numberOfNewSlides = slides.length;
    } else {
      swiper.virtual.slides.unshift(slides);
    }
    if (swiper.params.virtual.cache) {
      const cache = swiper.virtual.cache;
      const newCache = {};
      Object.keys(cache).forEach(cachedIndex => {
        const cachedEl = cache[cachedIndex];
        const cachedElIndex = cachedEl.getAttribute('data-swiper-slide-index');
        if (cachedElIndex) {
          cachedEl.setAttribute('data-swiper-slide-index', parseInt(cachedElIndex, 10) + numberOfNewSlides);
        }
        newCache[parseInt(cachedIndex, 10) + numberOfNewSlides] = cachedEl;
      });
      swiper.virtual.cache = newCache;
    }
    update(true);
    swiper.slideTo(newActiveIndex, 0);
  }
  function removeSlide(slidesIndexes) {
    if (typeof slidesIndexes === 'undefined' || slidesIndexes === null) return;
    let activeIndex = swiper.activeIndex;
    if (Array.isArray(slidesIndexes)) {
      for (let i = slidesIndexes.length - 1; i >= 0; i -= 1) {
        if (swiper.params.virtual.cache) {
          delete swiper.virtual.cache[slidesIndexes[i]];
          // shift cache indexes
          Object.keys(swiper.virtual.cache).forEach(key => {
            if (key > slidesIndexes) {
              swiper.virtual.cache[key - 1] = swiper.virtual.cache[key];
              swiper.virtual.cache[key - 1].setAttribute('data-swiper-slide-index', key - 1);
              delete swiper.virtual.cache[key];
            }
          });
        }
        swiper.virtual.slides.splice(slidesIndexes[i], 1);
        if (slidesIndexes[i] < activeIndex) activeIndex -= 1;
        activeIndex = Math.max(activeIndex, 0);
      }
    } else {
      if (swiper.params.virtual.cache) {
        delete swiper.virtual.cache[slidesIndexes];
        // shift cache indexes
        Object.keys(swiper.virtual.cache).forEach(key => {
          if (key > slidesIndexes) {
            swiper.virtual.cache[key - 1] = swiper.virtual.cache[key];
            swiper.virtual.cache[key - 1].setAttribute('data-swiper-slide-index', key - 1);
            delete swiper.virtual.cache[key];
          }
        });
      }
      swiper.virtual.slides.splice(slidesIndexes, 1);
      if (slidesIndexes < activeIndex) activeIndex -= 1;
      activeIndex = Math.max(activeIndex, 0);
    }
    update(true);
    swiper.slideTo(activeIndex, 0);
  }
  function removeAllSlides() {
    swiper.virtual.slides = [];
    if (swiper.params.virtual.cache) {
      swiper.virtual.cache = {};
    }
    update(true);
    swiper.slideTo(0, 0);
  }
  on('beforeInit', () => {
    if (!swiper.params.virtual.enabled) return;
    let domSlidesAssigned;
    if (typeof swiper.passedParams.virtual.slides === 'undefined') {
      const slides = [...swiper.slidesEl.children].filter(el => el.matches(`.${swiper.params.slideClass}, swiper-slide`));
      if (slides && slides.length) {
        swiper.virtual.slides = [...slides];
        domSlidesAssigned = true;
        slides.forEach((slideEl, slideIndex) => {
          slideEl.setAttribute('data-swiper-slide-index', slideIndex);
          swiper.virtual.cache[slideIndex] = slideEl;
          slideEl.remove();
        });
      }
    }
    if (!domSlidesAssigned) {
      swiper.virtual.slides = swiper.params.virtual.slides;
    }
    swiper.classNames.push(`${swiper.params.containerModifierClass}virtual`);
    swiper.params.watchSlidesProgress = true;
    swiper.originalParams.watchSlidesProgress = true;
    update();
  });
  on('setTranslate', () => {
    if (!swiper.params.virtual.enabled) return;
    if (swiper.params.cssMode && !swiper._immediateVirtual) {
      clearTimeout(cssModeTimeout);
      cssModeTimeout = setTimeout(() => {
        update();
      }, 100);
    } else {
      update();
    }
  });
  on('init update resize', () => {
    if (!swiper.params.virtual.enabled) return;
    if (swiper.params.cssMode) {
      (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.s)(swiper.wrapperEl, '--swiper-virtual-size', `${swiper.virtualSize}px`);
    }
  });
  Object.assign(swiper.virtual, {
    appendSlide,
    prependSlide,
    removeSlide,
    removeAllSlides,
    update
  });
}




/***/ }),

/***/ "./node_modules/swiper/modules/zoom.mjs":
/*!**********************************************!*\
  !*** ./node_modules/swiper/modules/zoom.mjs ***!
  \**********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Zoom)
/* harmony export */ });
/* harmony import */ var _shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../shared/ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../shared/utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



function Zoom(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const window = (0,_shared_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  extendParams({
    zoom: {
      enabled: false,
      maxRatio: 3,
      minRatio: 1,
      toggle: true,
      containerClass: 'swiper-zoom-container',
      zoomedSlideClass: 'swiper-slide-zoomed'
    }
  });
  swiper.zoom = {
    enabled: false
  };
  let currentScale = 1;
  let isScaling = false;
  let fakeGestureTouched;
  let fakeGestureMoved;
  const evCache = [];
  const gesture = {
    originX: 0,
    originY: 0,
    slideEl: undefined,
    slideWidth: undefined,
    slideHeight: undefined,
    imageEl: undefined,
    imageWrapEl: undefined,
    maxRatio: 3
  };
  const image = {
    isTouched: undefined,
    isMoved: undefined,
    currentX: undefined,
    currentY: undefined,
    minX: undefined,
    minY: undefined,
    maxX: undefined,
    maxY: undefined,
    width: undefined,
    height: undefined,
    startX: undefined,
    startY: undefined,
    touchesStart: {},
    touchesCurrent: {}
  };
  const velocity = {
    x: undefined,
    y: undefined,
    prevPositionX: undefined,
    prevPositionY: undefined,
    prevTime: undefined
  };
  let scale = 1;
  Object.defineProperty(swiper.zoom, 'scale', {
    get() {
      return scale;
    },
    set(value) {
      if (scale !== value) {
        const imageEl = gesture.imageEl;
        const slideEl = gesture.slideEl;
        emit('zoomChange', value, imageEl, slideEl);
      }
      scale = value;
    }
  });
  function getDistanceBetweenTouches() {
    if (evCache.length < 2) return 1;
    const x1 = evCache[0].pageX;
    const y1 = evCache[0].pageY;
    const x2 = evCache[1].pageX;
    const y2 = evCache[1].pageY;
    const distance = Math.sqrt((x2 - x1) ** 2 + (y2 - y1) ** 2);
    return distance;
  }
  function getScaleOrigin() {
    if (evCache.length < 2) return {
      x: null,
      y: null
    };
    const box = gesture.imageEl.getBoundingClientRect();
    return [(evCache[0].pageX + (evCache[1].pageX - evCache[0].pageX) / 2 - box.x - window.scrollX) / currentScale, (evCache[0].pageY + (evCache[1].pageY - evCache[0].pageY) / 2 - box.y - window.scrollY) / currentScale];
  }
  function getSlideSelector() {
    return swiper.isElement ? `swiper-slide` : `.${swiper.params.slideClass}`;
  }
  function eventWithinSlide(e) {
    const slideSelector = getSlideSelector();
    if (e.target.matches(slideSelector)) return true;
    if (swiper.slides.filter(slideEl => slideEl.contains(e.target)).length > 0) return true;
    return false;
  }
  function eventWithinZoomContainer(e) {
    const selector = `.${swiper.params.zoom.containerClass}`;
    if (e.target.matches(selector)) return true;
    if ([...swiper.hostEl.querySelectorAll(selector)].filter(containerEl => containerEl.contains(e.target)).length > 0) return true;
    return false;
  }

  // Events
  function onGestureStart(e) {
    if (e.pointerType === 'mouse') {
      evCache.splice(0, evCache.length);
    }
    if (!eventWithinSlide(e)) return;
    const params = swiper.params.zoom;
    fakeGestureTouched = false;
    fakeGestureMoved = false;
    evCache.push(e);
    if (evCache.length < 2) {
      return;
    }
    fakeGestureTouched = true;
    gesture.scaleStart = getDistanceBetweenTouches();
    if (!gesture.slideEl) {
      gesture.slideEl = e.target.closest(`.${swiper.params.slideClass}, swiper-slide`);
      if (!gesture.slideEl) gesture.slideEl = swiper.slides[swiper.activeIndex];
      let imageEl = gesture.slideEl.querySelector(`.${params.containerClass}`);
      if (imageEl) {
        imageEl = imageEl.querySelectorAll('picture, img, svg, canvas, .swiper-zoom-target')[0];
      }
      gesture.imageEl = imageEl;
      if (imageEl) {
        gesture.imageWrapEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(gesture.imageEl, `.${params.containerClass}`)[0];
      } else {
        gesture.imageWrapEl = undefined;
      }
      if (!gesture.imageWrapEl) {
        gesture.imageEl = undefined;
        return;
      }
      gesture.maxRatio = gesture.imageWrapEl.getAttribute('data-swiper-zoom') || params.maxRatio;
    }
    if (gesture.imageEl) {
      const [originX, originY] = getScaleOrigin();
      gesture.originX = originX;
      gesture.originY = originY;
      gesture.imageEl.style.transitionDuration = '0ms';
    }
    isScaling = true;
  }
  function onGestureChange(e) {
    if (!eventWithinSlide(e)) return;
    const params = swiper.params.zoom;
    const zoom = swiper.zoom;
    const pointerIndex = evCache.findIndex(cachedEv => cachedEv.pointerId === e.pointerId);
    if (pointerIndex >= 0) evCache[pointerIndex] = e;
    if (evCache.length < 2) {
      return;
    }
    fakeGestureMoved = true;
    gesture.scaleMove = getDistanceBetweenTouches();
    if (!gesture.imageEl) {
      return;
    }
    zoom.scale = gesture.scaleMove / gesture.scaleStart * currentScale;
    if (zoom.scale > gesture.maxRatio) {
      zoom.scale = gesture.maxRatio - 1 + (zoom.scale - gesture.maxRatio + 1) ** 0.5;
    }
    if (zoom.scale < params.minRatio) {
      zoom.scale = params.minRatio + 1 - (params.minRatio - zoom.scale + 1) ** 0.5;
    }
    gesture.imageEl.style.transform = `translate3d(0,0,0) scale(${zoom.scale})`;
  }
  function onGestureEnd(e) {
    if (!eventWithinSlide(e)) return;
    if (e.pointerType === 'mouse' && e.type === 'pointerout') return;
    const params = swiper.params.zoom;
    const zoom = swiper.zoom;
    const pointerIndex = evCache.findIndex(cachedEv => cachedEv.pointerId === e.pointerId);
    if (pointerIndex >= 0) evCache.splice(pointerIndex, 1);
    if (!fakeGestureTouched || !fakeGestureMoved) {
      return;
    }
    fakeGestureTouched = false;
    fakeGestureMoved = false;
    if (!gesture.imageEl) return;
    zoom.scale = Math.max(Math.min(zoom.scale, gesture.maxRatio), params.minRatio);
    gesture.imageEl.style.transitionDuration = `${swiper.params.speed}ms`;
    gesture.imageEl.style.transform = `translate3d(0,0,0) scale(${zoom.scale})`;
    currentScale = zoom.scale;
    isScaling = false;
    if (zoom.scale > 1 && gesture.slideEl) {
      gesture.slideEl.classList.add(`${params.zoomedSlideClass}`);
    } else if (zoom.scale <= 1 && gesture.slideEl) {
      gesture.slideEl.classList.remove(`${params.zoomedSlideClass}`);
    }
    if (zoom.scale === 1) {
      gesture.originX = 0;
      gesture.originY = 0;
      gesture.slideEl = undefined;
    }
  }
  function onTouchStart(e) {
    const device = swiper.device;
    if (!gesture.imageEl) return;
    if (image.isTouched) return;
    if (device.android && e.cancelable) e.preventDefault();
    image.isTouched = true;
    const event = evCache.length > 0 ? evCache[0] : e;
    image.touchesStart.x = event.pageX;
    image.touchesStart.y = event.pageY;
  }
  function onTouchMove(e) {
    if (!eventWithinSlide(e) || !eventWithinZoomContainer(e)) return;
    const zoom = swiper.zoom;
    if (!gesture.imageEl) return;
    if (!image.isTouched || !gesture.slideEl) return;
    if (!image.isMoved) {
      image.width = gesture.imageEl.offsetWidth;
      image.height = gesture.imageEl.offsetHeight;
      image.startX = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.i)(gesture.imageWrapEl, 'x') || 0;
      image.startY = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.i)(gesture.imageWrapEl, 'y') || 0;
      gesture.slideWidth = gesture.slideEl.offsetWidth;
      gesture.slideHeight = gesture.slideEl.offsetHeight;
      gesture.imageWrapEl.style.transitionDuration = '0ms';
    }
    // Define if we need image drag
    const scaledWidth = image.width * zoom.scale;
    const scaledHeight = image.height * zoom.scale;
    if (scaledWidth < gesture.slideWidth && scaledHeight < gesture.slideHeight) return;
    image.minX = Math.min(gesture.slideWidth / 2 - scaledWidth / 2, 0);
    image.maxX = -image.minX;
    image.minY = Math.min(gesture.slideHeight / 2 - scaledHeight / 2, 0);
    image.maxY = -image.minY;
    image.touchesCurrent.x = evCache.length > 0 ? evCache[0].pageX : e.pageX;
    image.touchesCurrent.y = evCache.length > 0 ? evCache[0].pageY : e.pageY;
    const touchesDiff = Math.max(Math.abs(image.touchesCurrent.x - image.touchesStart.x), Math.abs(image.touchesCurrent.y - image.touchesStart.y));
    if (touchesDiff > 5) {
      swiper.allowClick = false;
    }
    if (!image.isMoved && !isScaling) {
      if (swiper.isHorizontal() && (Math.floor(image.minX) === Math.floor(image.startX) && image.touchesCurrent.x < image.touchesStart.x || Math.floor(image.maxX) === Math.floor(image.startX) && image.touchesCurrent.x > image.touchesStart.x)) {
        image.isTouched = false;
        return;
      }
      if (!swiper.isHorizontal() && (Math.floor(image.minY) === Math.floor(image.startY) && image.touchesCurrent.y < image.touchesStart.y || Math.floor(image.maxY) === Math.floor(image.startY) && image.touchesCurrent.y > image.touchesStart.y)) {
        image.isTouched = false;
        return;
      }
    }
    if (e.cancelable) {
      e.preventDefault();
    }
    e.stopPropagation();
    image.isMoved = true;
    const scaleRatio = (zoom.scale - currentScale) / (gesture.maxRatio - swiper.params.zoom.minRatio);
    const {
      originX,
      originY
    } = gesture;
    image.currentX = image.touchesCurrent.x - image.touchesStart.x + image.startX + scaleRatio * (image.width - originX * 2);
    image.currentY = image.touchesCurrent.y - image.touchesStart.y + image.startY + scaleRatio * (image.height - originY * 2);
    if (image.currentX < image.minX) {
      image.currentX = image.minX + 1 - (image.minX - image.currentX + 1) ** 0.8;
    }
    if (image.currentX > image.maxX) {
      image.currentX = image.maxX - 1 + (image.currentX - image.maxX + 1) ** 0.8;
    }
    if (image.currentY < image.minY) {
      image.currentY = image.minY + 1 - (image.minY - image.currentY + 1) ** 0.8;
    }
    if (image.currentY > image.maxY) {
      image.currentY = image.maxY - 1 + (image.currentY - image.maxY + 1) ** 0.8;
    }

    // Velocity
    if (!velocity.prevPositionX) velocity.prevPositionX = image.touchesCurrent.x;
    if (!velocity.prevPositionY) velocity.prevPositionY = image.touchesCurrent.y;
    if (!velocity.prevTime) velocity.prevTime = Date.now();
    velocity.x = (image.touchesCurrent.x - velocity.prevPositionX) / (Date.now() - velocity.prevTime) / 2;
    velocity.y = (image.touchesCurrent.y - velocity.prevPositionY) / (Date.now() - velocity.prevTime) / 2;
    if (Math.abs(image.touchesCurrent.x - velocity.prevPositionX) < 2) velocity.x = 0;
    if (Math.abs(image.touchesCurrent.y - velocity.prevPositionY) < 2) velocity.y = 0;
    velocity.prevPositionX = image.touchesCurrent.x;
    velocity.prevPositionY = image.touchesCurrent.y;
    velocity.prevTime = Date.now();
    gesture.imageWrapEl.style.transform = `translate3d(${image.currentX}px, ${image.currentY}px,0)`;
  }
  function onTouchEnd() {
    const zoom = swiper.zoom;
    if (!gesture.imageEl) return;
    if (!image.isTouched || !image.isMoved) {
      image.isTouched = false;
      image.isMoved = false;
      return;
    }
    image.isTouched = false;
    image.isMoved = false;
    let momentumDurationX = 300;
    let momentumDurationY = 300;
    const momentumDistanceX = velocity.x * momentumDurationX;
    const newPositionX = image.currentX + momentumDistanceX;
    const momentumDistanceY = velocity.y * momentumDurationY;
    const newPositionY = image.currentY + momentumDistanceY;

    // Fix duration
    if (velocity.x !== 0) momentumDurationX = Math.abs((newPositionX - image.currentX) / velocity.x);
    if (velocity.y !== 0) momentumDurationY = Math.abs((newPositionY - image.currentY) / velocity.y);
    const momentumDuration = Math.max(momentumDurationX, momentumDurationY);
    image.currentX = newPositionX;
    image.currentY = newPositionY;
    // Define if we need image drag
    const scaledWidth = image.width * zoom.scale;
    const scaledHeight = image.height * zoom.scale;
    image.minX = Math.min(gesture.slideWidth / 2 - scaledWidth / 2, 0);
    image.maxX = -image.minX;
    image.minY = Math.min(gesture.slideHeight / 2 - scaledHeight / 2, 0);
    image.maxY = -image.minY;
    image.currentX = Math.max(Math.min(image.currentX, image.maxX), image.minX);
    image.currentY = Math.max(Math.min(image.currentY, image.maxY), image.minY);
    gesture.imageWrapEl.style.transitionDuration = `${momentumDuration}ms`;
    gesture.imageWrapEl.style.transform = `translate3d(${image.currentX}px, ${image.currentY}px,0)`;
  }
  function onTransitionEnd() {
    const zoom = swiper.zoom;
    if (gesture.slideEl && swiper.activeIndex !== swiper.slides.indexOf(gesture.slideEl)) {
      if (gesture.imageEl) {
        gesture.imageEl.style.transform = 'translate3d(0,0,0) scale(1)';
      }
      if (gesture.imageWrapEl) {
        gesture.imageWrapEl.style.transform = 'translate3d(0,0,0)';
      }
      gesture.slideEl.classList.remove(`${swiper.params.zoom.zoomedSlideClass}`);
      zoom.scale = 1;
      currentScale = 1;
      gesture.slideEl = undefined;
      gesture.imageEl = undefined;
      gesture.imageWrapEl = undefined;
      gesture.originX = 0;
      gesture.originY = 0;
    }
  }
  function zoomIn(e) {
    const zoom = swiper.zoom;
    const params = swiper.params.zoom;
    if (!gesture.slideEl) {
      if (e && e.target) {
        gesture.slideEl = e.target.closest(`.${swiper.params.slideClass}, swiper-slide`);
      }
      if (!gesture.slideEl) {
        if (swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual) {
          gesture.slideEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(swiper.slidesEl, `.${swiper.params.slideActiveClass}`)[0];
        } else {
          gesture.slideEl = swiper.slides[swiper.activeIndex];
        }
      }
      let imageEl = gesture.slideEl.querySelector(`.${params.containerClass}`);
      if (imageEl) {
        imageEl = imageEl.querySelectorAll('picture, img, svg, canvas, .swiper-zoom-target')[0];
      }
      gesture.imageEl = imageEl;
      if (imageEl) {
        gesture.imageWrapEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(gesture.imageEl, `.${params.containerClass}`)[0];
      } else {
        gesture.imageWrapEl = undefined;
      }
    }
    if (!gesture.imageEl || !gesture.imageWrapEl) return;
    if (swiper.params.cssMode) {
      swiper.wrapperEl.style.overflow = 'hidden';
      swiper.wrapperEl.style.touchAction = 'none';
    }
    gesture.slideEl.classList.add(`${params.zoomedSlideClass}`);
    let touchX;
    let touchY;
    let offsetX;
    let offsetY;
    let diffX;
    let diffY;
    let translateX;
    let translateY;
    let imageWidth;
    let imageHeight;
    let scaledWidth;
    let scaledHeight;
    let translateMinX;
    let translateMinY;
    let translateMaxX;
    let translateMaxY;
    let slideWidth;
    let slideHeight;
    if (typeof image.touchesStart.x === 'undefined' && e) {
      touchX = e.pageX;
      touchY = e.pageY;
    } else {
      touchX = image.touchesStart.x;
      touchY = image.touchesStart.y;
    }
    const forceZoomRatio = typeof e === 'number' ? e : null;
    if (currentScale === 1 && forceZoomRatio) {
      touchX = undefined;
      touchY = undefined;
    }
    zoom.scale = forceZoomRatio || gesture.imageWrapEl.getAttribute('data-swiper-zoom') || params.maxRatio;
    currentScale = forceZoomRatio || gesture.imageWrapEl.getAttribute('data-swiper-zoom') || params.maxRatio;
    if (e && !(currentScale === 1 && forceZoomRatio)) {
      slideWidth = gesture.slideEl.offsetWidth;
      slideHeight = gesture.slideEl.offsetHeight;
      offsetX = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.b)(gesture.slideEl).left + window.scrollX;
      offsetY = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.b)(gesture.slideEl).top + window.scrollY;
      diffX = offsetX + slideWidth / 2 - touchX;
      diffY = offsetY + slideHeight / 2 - touchY;
      imageWidth = gesture.imageEl.offsetWidth;
      imageHeight = gesture.imageEl.offsetHeight;
      scaledWidth = imageWidth * zoom.scale;
      scaledHeight = imageHeight * zoom.scale;
      translateMinX = Math.min(slideWidth / 2 - scaledWidth / 2, 0);
      translateMinY = Math.min(slideHeight / 2 - scaledHeight / 2, 0);
      translateMaxX = -translateMinX;
      translateMaxY = -translateMinY;
      translateX = diffX * zoom.scale;
      translateY = diffY * zoom.scale;
      if (translateX < translateMinX) {
        translateX = translateMinX;
      }
      if (translateX > translateMaxX) {
        translateX = translateMaxX;
      }
      if (translateY < translateMinY) {
        translateY = translateMinY;
      }
      if (translateY > translateMaxY) {
        translateY = translateMaxY;
      }
    } else {
      translateX = 0;
      translateY = 0;
    }
    if (forceZoomRatio && zoom.scale === 1) {
      gesture.originX = 0;
      gesture.originY = 0;
    }
    gesture.imageWrapEl.style.transitionDuration = '300ms';
    gesture.imageWrapEl.style.transform = `translate3d(${translateX}px, ${translateY}px,0)`;
    gesture.imageEl.style.transitionDuration = '300ms';
    gesture.imageEl.style.transform = `translate3d(0,0,0) scale(${zoom.scale})`;
  }
  function zoomOut() {
    const zoom = swiper.zoom;
    const params = swiper.params.zoom;
    if (!gesture.slideEl) {
      if (swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual) {
        gesture.slideEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(swiper.slidesEl, `.${swiper.params.slideActiveClass}`)[0];
      } else {
        gesture.slideEl = swiper.slides[swiper.activeIndex];
      }
      let imageEl = gesture.slideEl.querySelector(`.${params.containerClass}`);
      if (imageEl) {
        imageEl = imageEl.querySelectorAll('picture, img, svg, canvas, .swiper-zoom-target')[0];
      }
      gesture.imageEl = imageEl;
      if (imageEl) {
        gesture.imageWrapEl = (0,_shared_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(gesture.imageEl, `.${params.containerClass}`)[0];
      } else {
        gesture.imageWrapEl = undefined;
      }
    }
    if (!gesture.imageEl || !gesture.imageWrapEl) return;
    if (swiper.params.cssMode) {
      swiper.wrapperEl.style.overflow = '';
      swiper.wrapperEl.style.touchAction = '';
    }
    zoom.scale = 1;
    currentScale = 1;
    gesture.imageWrapEl.style.transitionDuration = '300ms';
    gesture.imageWrapEl.style.transform = 'translate3d(0,0,0)';
    gesture.imageEl.style.transitionDuration = '300ms';
    gesture.imageEl.style.transform = 'translate3d(0,0,0) scale(1)';
    gesture.slideEl.classList.remove(`${params.zoomedSlideClass}`);
    gesture.slideEl = undefined;
    gesture.originX = 0;
    gesture.originY = 0;
  }

  // Toggle Zoom
  function zoomToggle(e) {
    const zoom = swiper.zoom;
    if (zoom.scale && zoom.scale !== 1) {
      // Zoom Out
      zoomOut();
    } else {
      // Zoom In
      zoomIn(e);
    }
  }
  function getListeners() {
    const passiveListener = swiper.params.passiveListeners ? {
      passive: true,
      capture: false
    } : false;
    const activeListenerWithCapture = swiper.params.passiveListeners ? {
      passive: false,
      capture: true
    } : true;
    return {
      passiveListener,
      activeListenerWithCapture
    };
  }

  // Attach/Detach Events
  function enable() {
    const zoom = swiper.zoom;
    if (zoom.enabled) return;
    zoom.enabled = true;
    const {
      passiveListener,
      activeListenerWithCapture
    } = getListeners();

    // Scale image
    swiper.wrapperEl.addEventListener('pointerdown', onGestureStart, passiveListener);
    swiper.wrapperEl.addEventListener('pointermove', onGestureChange, activeListenerWithCapture);
    ['pointerup', 'pointercancel', 'pointerout'].forEach(eventName => {
      swiper.wrapperEl.addEventListener(eventName, onGestureEnd, passiveListener);
    });

    // Move image
    swiper.wrapperEl.addEventListener('pointermove', onTouchMove, activeListenerWithCapture);
  }
  function disable() {
    const zoom = swiper.zoom;
    if (!zoom.enabled) return;
    zoom.enabled = false;
    const {
      passiveListener,
      activeListenerWithCapture
    } = getListeners();

    // Scale image
    swiper.wrapperEl.removeEventListener('pointerdown', onGestureStart, passiveListener);
    swiper.wrapperEl.removeEventListener('pointermove', onGestureChange, activeListenerWithCapture);
    ['pointerup', 'pointercancel', 'pointerout'].forEach(eventName => {
      swiper.wrapperEl.removeEventListener(eventName, onGestureEnd, passiveListener);
    });

    // Move image
    swiper.wrapperEl.removeEventListener('pointermove', onTouchMove, activeListenerWithCapture);
  }
  on('init', () => {
    if (swiper.params.zoom.enabled) {
      enable();
    }
  });
  on('destroy', () => {
    disable();
  });
  on('touchStart', (_s, e) => {
    if (!swiper.zoom.enabled) return;
    onTouchStart(e);
  });
  on('touchEnd', (_s, e) => {
    if (!swiper.zoom.enabled) return;
    onTouchEnd();
  });
  on('doubleTap', (_s, e) => {
    if (!swiper.animating && swiper.params.zoom.enabled && swiper.zoom.enabled && swiper.params.zoom.toggle) {
      zoomToggle(e);
    }
  });
  on('transitionEnd', () => {
    if (swiper.zoom.enabled && swiper.params.zoom.enabled) {
      onTransitionEnd();
    }
  });
  on('slideChange', () => {
    if (swiper.zoom.enabled && swiper.params.zoom.enabled && swiper.params.cssMode) {
      onTransitionEnd();
    }
  });
  Object.assign(swiper.zoom, {
    enable,
    disable,
    in: zoomIn,
    out: zoomOut,
    toggle: zoomToggle
  });
}




/***/ }),

/***/ "./node_modules/swiper/shared/classes-to-selector.mjs":
/*!************************************************************!*\
  !*** ./node_modules/swiper/shared/classes-to-selector.mjs ***!
  \************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   c: () => (/* binding */ classesToSelector)
/* harmony export */ });
function classesToSelector(classes) {
  if (classes === void 0) {
    classes = '';
  }
  return `.${classes.trim().replace(/([\.:!+\/])/g, '\\$1') // eslint-disable-line
  .replace(/ /g, '.')}`;
}




/***/ }),

/***/ "./node_modules/swiper/shared/create-element-if-not-defined.mjs":
/*!**********************************************************************!*\
  !*** ./node_modules/swiper/shared/create-element-if-not-defined.mjs ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   c: () => (/* binding */ createElementIfNotDefined)
/* harmony export */ });
/* harmony import */ var _utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function createElementIfNotDefined(swiper, originalParams, params, checkProps) {
  if (swiper.params.createElements) {
    Object.keys(checkProps).forEach(key => {
      if (!params[key] && params.auto === true) {
        let element = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.e)(swiper.el, `.${checkProps[key]}`)[0];
        if (!element) {
          element = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('div', checkProps[key]);
          element.className = checkProps[key];
          swiper.el.append(element);
        }
        params[key] = element;
        originalParams[key] = element;
      }
    });
  }
  return params;
}




/***/ }),

/***/ "./node_modules/swiper/shared/create-shadow.mjs":
/*!******************************************************!*\
  !*** ./node_modules/swiper/shared/create-shadow.mjs ***!
  \******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   c: () => (/* binding */ createShadow)
/* harmony export */ });
/* harmony import */ var _utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function createShadow(suffix, slideEl, side) {
  const shadowClass = `swiper-slide-shadow${side ? `-${side}` : ''}${suffix ? ` swiper-slide-shadow-${suffix}` : ''}`;
  const shadowContainer = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.l)(slideEl);
  let shadowEl = shadowContainer.querySelector(`.${shadowClass.split(' ').join('.')}`);
  if (!shadowEl) {
    shadowEl = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.c)('div', shadowClass.split(' '));
    shadowContainer.append(shadowEl);
  }
  return shadowEl;
}




/***/ }),

/***/ "./node_modules/swiper/shared/effect-init.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/shared/effect-init.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   e: () => (/* binding */ effectInit)
/* harmony export */ });
function effectInit(params) {
  const {
    effect,
    swiper,
    on,
    setTranslate,
    setTransition,
    overwriteParams,
    perspective,
    recreateShadows,
    getEffectParams
  } = params;
  on('beforeInit', () => {
    if (swiper.params.effect !== effect) return;
    swiper.classNames.push(`${swiper.params.containerModifierClass}${effect}`);
    if (perspective && perspective()) {
      swiper.classNames.push(`${swiper.params.containerModifierClass}3d`);
    }
    const overwriteParamsResult = overwriteParams ? overwriteParams() : {};
    Object.assign(swiper.params, overwriteParamsResult);
    Object.assign(swiper.originalParams, overwriteParamsResult);
  });
  on('setTranslate', () => {
    if (swiper.params.effect !== effect) return;
    setTranslate();
  });
  on('setTransition', (_s, duration) => {
    if (swiper.params.effect !== effect) return;
    setTransition(duration);
  });
  on('transitionEnd', () => {
    if (swiper.params.effect !== effect) return;
    if (recreateShadows) {
      if (!getEffectParams || !getEffectParams().slideShadows) return;
      // remove shadows
      swiper.slides.forEach(slideEl => {
        slideEl.querySelectorAll('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').forEach(shadowEl => shadowEl.remove());
      });
      // create new one
      recreateShadows();
    }
  });
  let requireUpdateOnVirtual;
  on('virtualUpdate', () => {
    if (swiper.params.effect !== effect) return;
    if (!swiper.slides.length) {
      requireUpdateOnVirtual = true;
    }
    requestAnimationFrame(() => {
      if (requireUpdateOnVirtual && swiper.slides && swiper.slides.length) {
        setTranslate();
        requireUpdateOnVirtual = false;
      }
    });
  });
}




/***/ }),

/***/ "./node_modules/swiper/shared/effect-target.mjs":
/*!******************************************************!*\
  !*** ./node_modules/swiper/shared/effect-target.mjs ***!
  \******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   e: () => (/* binding */ effectTarget)
/* harmony export */ });
/* harmony import */ var _utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function effectTarget(effectParams, slideEl) {
  const transformEl = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.l)(slideEl);
  if (transformEl !== slideEl) {
    transformEl.style.backfaceVisibility = 'hidden';
    transformEl.style['-webkit-backface-visibility'] = 'hidden';
  }
  return transformEl;
}




/***/ }),

/***/ "./node_modules/swiper/shared/effect-virtual-transition-end.mjs":
/*!**********************************************************************!*\
  !*** ./node_modules/swiper/shared/effect-virtual-transition-end.mjs ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   e: () => (/* binding */ effectVirtualTransitionEnd)
/* harmony export */ });
/* harmony import */ var _utils_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils.mjs */ "./node_modules/swiper/shared/utils.mjs");


function effectVirtualTransitionEnd(_ref) {
  let {
    swiper,
    duration,
    transformElements,
    allSlides
  } = _ref;
  const {
    activeIndex
  } = swiper;
  const getSlide = el => {
    if (!el.parentElement) {
      // assume shadow root
      const slide = swiper.slides.filter(slideEl => slideEl.shadowRoot && slideEl.shadowRoot === el.parentNode)[0];
      return slide;
    }
    return el.parentElement;
  };
  if (swiper.params.virtualTranslate && duration !== 0) {
    let eventTriggered = false;
    let transitionEndTarget;
    if (allSlides) {
      transitionEndTarget = transformElements;
    } else {
      transitionEndTarget = transformElements.filter(transformEl => {
        const el = transformEl.classList.contains('swiper-slide-transform') ? getSlide(transformEl) : transformEl;
        return swiper.getSlideIndex(el) === activeIndex;
      });
    }
    transitionEndTarget.forEach(el => {
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_0__.j)(el, () => {
        if (eventTriggered) return;
        if (!swiper || swiper.destroyed) return;
        eventTriggered = true;
        swiper.animating = false;
        const evt = new window.CustomEvent('transitionend', {
          bubbles: true,
          cancelable: true
        });
        swiper.wrapperEl.dispatchEvent(evt);
      });
    });
  }
}




/***/ }),

/***/ "./node_modules/swiper/shared/ssr-window.esm.mjs":
/*!*******************************************************!*\
  !*** ./node_modules/swiper/shared/ssr-window.esm.mjs ***!
  \*******************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   a: () => (/* binding */ getWindow),
/* harmony export */   g: () => (/* binding */ getDocument)
/* harmony export */ });
/**
 * SSR Window 4.0.2
 * Better handling for window object in SSR environment
 * https://github.com/nolimits4web/ssr-window
 *
 * Copyright 2021, Vladimir Kharlampidi
 *
 * Licensed under MIT
 *
 * Released on: December 13, 2021
 */
/* eslint-disable no-param-reassign */
function isObject(obj) {
  return obj !== null && typeof obj === 'object' && 'constructor' in obj && obj.constructor === Object;
}
function extend(target, src) {
  if (target === void 0) {
    target = {};
  }
  if (src === void 0) {
    src = {};
  }
  Object.keys(src).forEach(key => {
    if (typeof target[key] === 'undefined') target[key] = src[key];else if (isObject(src[key]) && isObject(target[key]) && Object.keys(src[key]).length > 0) {
      extend(target[key], src[key]);
    }
  });
}
const ssrDocument = {
  body: {},
  addEventListener() {},
  removeEventListener() {},
  activeElement: {
    blur() {},
    nodeName: ''
  },
  querySelector() {
    return null;
  },
  querySelectorAll() {
    return [];
  },
  getElementById() {
    return null;
  },
  createEvent() {
    return {
      initEvent() {}
    };
  },
  createElement() {
    return {
      children: [],
      childNodes: [],
      style: {},
      setAttribute() {},
      getElementsByTagName() {
        return [];
      }
    };
  },
  createElementNS() {
    return {};
  },
  importNode() {
    return null;
  },
  location: {
    hash: '',
    host: '',
    hostname: '',
    href: '',
    origin: '',
    pathname: '',
    protocol: '',
    search: ''
  }
};
function getDocument() {
  const doc = typeof document !== 'undefined' ? document : {};
  extend(doc, ssrDocument);
  return doc;
}
const ssrWindow = {
  document: ssrDocument,
  navigator: {
    userAgent: ''
  },
  location: {
    hash: '',
    host: '',
    hostname: '',
    href: '',
    origin: '',
    pathname: '',
    protocol: '',
    search: ''
  },
  history: {
    replaceState() {},
    pushState() {},
    go() {},
    back() {}
  },
  CustomEvent: function CustomEvent() {
    return this;
  },
  addEventListener() {},
  removeEventListener() {},
  getComputedStyle() {
    return {
      getPropertyValue() {
        return '';
      }
    };
  },
  Image() {},
  Date() {},
  screen: {},
  setTimeout() {},
  clearTimeout() {},
  matchMedia() {
    return {};
  },
  requestAnimationFrame(callback) {
    if (typeof setTimeout === 'undefined') {
      callback();
      return null;
    }
    return setTimeout(callback, 0);
  },
  cancelAnimationFrame(id) {
    if (typeof setTimeout === 'undefined') {
      return;
    }
    clearTimeout(id);
  }
};
function getWindow() {
  const win = typeof window !== 'undefined' ? window : {};
  extend(win, ssrWindow);
  return win;
}




/***/ }),

/***/ "./node_modules/swiper/shared/swiper-core.mjs":
/*!****************************************************!*\
  !*** ./node_modules/swiper/shared/swiper-core.mjs ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   S: () => (/* binding */ Swiper),
/* harmony export */   d: () => (/* binding */ defaults)
/* harmony export */ });
/* harmony import */ var _ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");
/* harmony import */ var _utils_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./utils.mjs */ "./node_modules/swiper/shared/utils.mjs");



let support;
function calcSupport() {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  return {
    smoothScroll: document.documentElement && document.documentElement.style && 'scrollBehavior' in document.documentElement.style,
    touch: !!('ontouchstart' in window || window.DocumentTouch && document instanceof window.DocumentTouch)
  };
}
function getSupport() {
  if (!support) {
    support = calcSupport();
  }
  return support;
}

let deviceCached;
function calcDevice(_temp) {
  let {
    userAgent
  } = _temp === void 0 ? {} : _temp;
  const support = getSupport();
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const platform = window.navigator.platform;
  const ua = userAgent || window.navigator.userAgent;
  const device = {
    ios: false,
    android: false
  };
  const screenWidth = window.screen.width;
  const screenHeight = window.screen.height;
  const android = ua.match(/(Android);?[\s\/]+([\d.]+)?/); // eslint-disable-line
  let ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
  const ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
  const iphone = !ipad && ua.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
  const windows = platform === 'Win32';
  let macos = platform === 'MacIntel';

  // iPadOs 13 fix
  const iPadScreens = ['1024x1366', '1366x1024', '834x1194', '1194x834', '834x1112', '1112x834', '768x1024', '1024x768', '820x1180', '1180x820', '810x1080', '1080x810'];
  if (!ipad && macos && support.touch && iPadScreens.indexOf(`${screenWidth}x${screenHeight}`) >= 0) {
    ipad = ua.match(/(Version)\/([\d.]+)/);
    if (!ipad) ipad = [0, 1, '13_0_0'];
    macos = false;
  }

  // Android
  if (android && !windows) {
    device.os = 'android';
    device.android = true;
  }
  if (ipad || iphone || ipod) {
    device.os = 'ios';
    device.ios = true;
  }

  // Export object
  return device;
}
function getDevice(overrides) {
  if (overrides === void 0) {
    overrides = {};
  }
  if (!deviceCached) {
    deviceCached = calcDevice(overrides);
  }
  return deviceCached;
}

let browser;
function calcBrowser() {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  let needPerspectiveFix = false;
  function isSafari() {
    const ua = window.navigator.userAgent.toLowerCase();
    return ua.indexOf('safari') >= 0 && ua.indexOf('chrome') < 0 && ua.indexOf('android') < 0;
  }
  if (isSafari()) {
    const ua = String(window.navigator.userAgent);
    if (ua.includes('Version/')) {
      const [major, minor] = ua.split('Version/')[1].split(' ')[0].split('.').map(num => Number(num));
      needPerspectiveFix = major < 16 || major === 16 && minor < 2;
    }
  }
  return {
    isSafari: needPerspectiveFix || isSafari(),
    needPerspectiveFix,
    isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent)
  };
}
function getBrowser() {
  if (!browser) {
    browser = calcBrowser();
  }
  return browser;
}

function Resize(_ref) {
  let {
    swiper,
    on,
    emit
  } = _ref;
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  let observer = null;
  let animationFrame = null;
  const resizeHandler = () => {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    emit('beforeResize');
    emit('resize');
  };
  const createObserver = () => {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    observer = new ResizeObserver(entries => {
      animationFrame = window.requestAnimationFrame(() => {
        const {
          width,
          height
        } = swiper;
        let newWidth = width;
        let newHeight = height;
        entries.forEach(_ref2 => {
          let {
            contentBoxSize,
            contentRect,
            target
          } = _ref2;
          if (target && target !== swiper.el) return;
          newWidth = contentRect ? contentRect.width : (contentBoxSize[0] || contentBoxSize).inlineSize;
          newHeight = contentRect ? contentRect.height : (contentBoxSize[0] || contentBoxSize).blockSize;
        });
        if (newWidth !== width || newHeight !== height) {
          resizeHandler();
        }
      });
    });
    observer.observe(swiper.el);
  };
  const removeObserver = () => {
    if (animationFrame) {
      window.cancelAnimationFrame(animationFrame);
    }
    if (observer && observer.unobserve && swiper.el) {
      observer.unobserve(swiper.el);
      observer = null;
    }
  };
  const orientationChangeHandler = () => {
    if (!swiper || swiper.destroyed || !swiper.initialized) return;
    emit('orientationchange');
  };
  on('init', () => {
    if (swiper.params.resizeObserver && typeof window.ResizeObserver !== 'undefined') {
      createObserver();
      return;
    }
    window.addEventListener('resize', resizeHandler);
    window.addEventListener('orientationchange', orientationChangeHandler);
  });
  on('destroy', () => {
    removeObserver();
    window.removeEventListener('resize', resizeHandler);
    window.removeEventListener('orientationchange', orientationChangeHandler);
  });
}

function Observer(_ref) {
  let {
    swiper,
    extendParams,
    on,
    emit
  } = _ref;
  const observers = [];
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const attach = function (target, options) {
    if (options === void 0) {
      options = {};
    }
    const ObserverFunc = window.MutationObserver || window.WebkitMutationObserver;
    const observer = new ObserverFunc(mutations => {
      // The observerUpdate event should only be triggered
      // once despite the number of mutations.  Additional
      // triggers are redundant and are very costly
      if (swiper.__preventObserver__) return;
      if (mutations.length === 1) {
        emit('observerUpdate', mutations[0]);
        return;
      }
      const observerUpdate = function observerUpdate() {
        emit('observerUpdate', mutations[0]);
      };
      if (window.requestAnimationFrame) {
        window.requestAnimationFrame(observerUpdate);
      } else {
        window.setTimeout(observerUpdate, 0);
      }
    });
    observer.observe(target, {
      attributes: typeof options.attributes === 'undefined' ? true : options.attributes,
      childList: typeof options.childList === 'undefined' ? true : options.childList,
      characterData: typeof options.characterData === 'undefined' ? true : options.characterData
    });
    observers.push(observer);
  };
  const init = () => {
    if (!swiper.params.observer) return;
    if (swiper.params.observeParents) {
      const containerParents = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.a)(swiper.hostEl);
      for (let i = 0; i < containerParents.length; i += 1) {
        attach(containerParents[i]);
      }
    }
    // Observe container
    attach(swiper.hostEl, {
      childList: swiper.params.observeSlideChildren
    });

    // Observe wrapper
    attach(swiper.wrapperEl, {
      attributes: false
    });
  };
  const destroy = () => {
    observers.forEach(observer => {
      observer.disconnect();
    });
    observers.splice(0, observers.length);
  };
  extendParams({
    observer: false,
    observeParents: false,
    observeSlideChildren: false
  });
  on('init', init);
  on('destroy', destroy);
}

/* eslint-disable no-underscore-dangle */

var eventsEmitter = {
  on(events, handler, priority) {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (typeof handler !== 'function') return self;
    const method = priority ? 'unshift' : 'push';
    events.split(' ').forEach(event => {
      if (!self.eventsListeners[event]) self.eventsListeners[event] = [];
      self.eventsListeners[event][method](handler);
    });
    return self;
  },
  once(events, handler, priority) {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (typeof handler !== 'function') return self;
    function onceHandler() {
      self.off(events, onceHandler);
      if (onceHandler.__emitterProxy) {
        delete onceHandler.__emitterProxy;
      }
      for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
        args[_key] = arguments[_key];
      }
      handler.apply(self, args);
    }
    onceHandler.__emitterProxy = handler;
    return self.on(events, onceHandler, priority);
  },
  onAny(handler, priority) {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (typeof handler !== 'function') return self;
    const method = priority ? 'unshift' : 'push';
    if (self.eventsAnyListeners.indexOf(handler) < 0) {
      self.eventsAnyListeners[method](handler);
    }
    return self;
  },
  offAny(handler) {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (!self.eventsAnyListeners) return self;
    const index = self.eventsAnyListeners.indexOf(handler);
    if (index >= 0) {
      self.eventsAnyListeners.splice(index, 1);
    }
    return self;
  },
  off(events, handler) {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (!self.eventsListeners) return self;
    events.split(' ').forEach(event => {
      if (typeof handler === 'undefined') {
        self.eventsListeners[event] = [];
      } else if (self.eventsListeners[event]) {
        self.eventsListeners[event].forEach((eventHandler, index) => {
          if (eventHandler === handler || eventHandler.__emitterProxy && eventHandler.__emitterProxy === handler) {
            self.eventsListeners[event].splice(index, 1);
          }
        });
      }
    });
    return self;
  },
  emit() {
    const self = this;
    if (!self.eventsListeners || self.destroyed) return self;
    if (!self.eventsListeners) return self;
    let events;
    let data;
    let context;
    for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
      args[_key2] = arguments[_key2];
    }
    if (typeof args[0] === 'string' || Array.isArray(args[0])) {
      events = args[0];
      data = args.slice(1, args.length);
      context = self;
    } else {
      events = args[0].events;
      data = args[0].data;
      context = args[0].context || self;
    }
    data.unshift(context);
    const eventsArray = Array.isArray(events) ? events : events.split(' ');
    eventsArray.forEach(event => {
      if (self.eventsAnyListeners && self.eventsAnyListeners.length) {
        self.eventsAnyListeners.forEach(eventHandler => {
          eventHandler.apply(context, [event, ...data]);
        });
      }
      if (self.eventsListeners && self.eventsListeners[event]) {
        self.eventsListeners[event].forEach(eventHandler => {
          eventHandler.apply(context, data);
        });
      }
    });
    return self;
  }
};

function updateSize() {
  const swiper = this;
  let width;
  let height;
  const el = swiper.el;
  if (typeof swiper.params.width !== 'undefined' && swiper.params.width !== null) {
    width = swiper.params.width;
  } else {
    width = el.clientWidth;
  }
  if (typeof swiper.params.height !== 'undefined' && swiper.params.height !== null) {
    height = swiper.params.height;
  } else {
    height = el.clientHeight;
  }
  if (width === 0 && swiper.isHorizontal() || height === 0 && swiper.isVertical()) {
    return;
  }

  // Subtract paddings
  width = width - parseInt((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'padding-left') || 0, 10) - parseInt((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'padding-right') || 0, 10);
  height = height - parseInt((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'padding-top') || 0, 10) - parseInt((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'padding-bottom') || 0, 10);
  if (Number.isNaN(width)) width = 0;
  if (Number.isNaN(height)) height = 0;
  Object.assign(swiper, {
    width,
    height,
    size: swiper.isHorizontal() ? width : height
  });
}

function updateSlides() {
  const swiper = this;
  function getDirectionPropertyValue(node, label) {
    return parseFloat(node.getPropertyValue(swiper.getDirectionLabel(label)) || 0);
  }
  const params = swiper.params;
  const {
    wrapperEl,
    slidesEl,
    size: swiperSize,
    rtlTranslate: rtl,
    wrongRTL
  } = swiper;
  const isVirtual = swiper.virtual && params.virtual.enabled;
  const previousSlidesLength = isVirtual ? swiper.virtual.slides.length : swiper.slides.length;
  const slides = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `.${swiper.params.slideClass}, swiper-slide`);
  const slidesLength = isVirtual ? swiper.virtual.slides.length : slides.length;
  let snapGrid = [];
  const slidesGrid = [];
  const slidesSizesGrid = [];
  let offsetBefore = params.slidesOffsetBefore;
  if (typeof offsetBefore === 'function') {
    offsetBefore = params.slidesOffsetBefore.call(swiper);
  }
  let offsetAfter = params.slidesOffsetAfter;
  if (typeof offsetAfter === 'function') {
    offsetAfter = params.slidesOffsetAfter.call(swiper);
  }
  const previousSnapGridLength = swiper.snapGrid.length;
  const previousSlidesGridLength = swiper.slidesGrid.length;
  let spaceBetween = params.spaceBetween;
  let slidePosition = -offsetBefore;
  let prevSlideSize = 0;
  let index = 0;
  if (typeof swiperSize === 'undefined') {
    return;
  }
  if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
    spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * swiperSize;
  } else if (typeof spaceBetween === 'string') {
    spaceBetween = parseFloat(spaceBetween);
  }
  swiper.virtualSize = -spaceBetween;

  // reset margins
  slides.forEach(slideEl => {
    if (rtl) {
      slideEl.style.marginLeft = '';
    } else {
      slideEl.style.marginRight = '';
    }
    slideEl.style.marginBottom = '';
    slideEl.style.marginTop = '';
  });

  // reset cssMode offsets
  if (params.centeredSlides && params.cssMode) {
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.s)(wrapperEl, '--swiper-centered-offset-before', '');
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.s)(wrapperEl, '--swiper-centered-offset-after', '');
  }
  const gridEnabled = params.grid && params.grid.rows > 1 && swiper.grid;
  if (gridEnabled) {
    swiper.grid.initSlides(slides);
  } else if (swiper.grid) {
    swiper.grid.unsetSlides();
  }

  // Calc slides
  let slideSize;
  const shouldResetSlideSize = params.slidesPerView === 'auto' && params.breakpoints && Object.keys(params.breakpoints).filter(key => {
    return typeof params.breakpoints[key].slidesPerView !== 'undefined';
  }).length > 0;
  for (let i = 0; i < slidesLength; i += 1) {
    slideSize = 0;
    let slide;
    if (slides[i]) slide = slides[i];
    if (gridEnabled) {
      swiper.grid.updateSlide(i, slide, slides);
    }
    if (slides[i] && (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(slide, 'display') === 'none') continue; // eslint-disable-line

    if (params.slidesPerView === 'auto') {
      if (shouldResetSlideSize) {
        slides[i].style[swiper.getDirectionLabel('width')] = ``;
      }
      const slideStyles = getComputedStyle(slide);
      const currentTransform = slide.style.transform;
      const currentWebKitTransform = slide.style.webkitTransform;
      if (currentTransform) {
        slide.style.transform = 'none';
      }
      if (currentWebKitTransform) {
        slide.style.webkitTransform = 'none';
      }
      if (params.roundLengths) {
        slideSize = swiper.isHorizontal() ? (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.f)(slide, 'width', true) : (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.f)(slide, 'height', true);
      } else {
        // eslint-disable-next-line
        const width = getDirectionPropertyValue(slideStyles, 'width');
        const paddingLeft = getDirectionPropertyValue(slideStyles, 'padding-left');
        const paddingRight = getDirectionPropertyValue(slideStyles, 'padding-right');
        const marginLeft = getDirectionPropertyValue(slideStyles, 'margin-left');
        const marginRight = getDirectionPropertyValue(slideStyles, 'margin-right');
        const boxSizing = slideStyles.getPropertyValue('box-sizing');
        if (boxSizing && boxSizing === 'border-box') {
          slideSize = width + marginLeft + marginRight;
        } else {
          const {
            clientWidth,
            offsetWidth
          } = slide;
          slideSize = width + paddingLeft + paddingRight + marginLeft + marginRight + (offsetWidth - clientWidth);
        }
      }
      if (currentTransform) {
        slide.style.transform = currentTransform;
      }
      if (currentWebKitTransform) {
        slide.style.webkitTransform = currentWebKitTransform;
      }
      if (params.roundLengths) slideSize = Math.floor(slideSize);
    } else {
      slideSize = (swiperSize - (params.slidesPerView - 1) * spaceBetween) / params.slidesPerView;
      if (params.roundLengths) slideSize = Math.floor(slideSize);
      if (slides[i]) {
        slides[i].style[swiper.getDirectionLabel('width')] = `${slideSize}px`;
      }
    }
    if (slides[i]) {
      slides[i].swiperSlideSize = slideSize;
    }
    slidesSizesGrid.push(slideSize);
    if (params.centeredSlides) {
      slidePosition = slidePosition + slideSize / 2 + prevSlideSize / 2 + spaceBetween;
      if (prevSlideSize === 0 && i !== 0) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
      if (i === 0) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
      if (Math.abs(slidePosition) < 1 / 1000) slidePosition = 0;
      if (params.roundLengths) slidePosition = Math.floor(slidePosition);
      if (index % params.slidesPerGroup === 0) snapGrid.push(slidePosition);
      slidesGrid.push(slidePosition);
    } else {
      if (params.roundLengths) slidePosition = Math.floor(slidePosition);
      if ((index - Math.min(swiper.params.slidesPerGroupSkip, index)) % swiper.params.slidesPerGroup === 0) snapGrid.push(slidePosition);
      slidesGrid.push(slidePosition);
      slidePosition = slidePosition + slideSize + spaceBetween;
    }
    swiper.virtualSize += slideSize + spaceBetween;
    prevSlideSize = slideSize;
    index += 1;
  }
  swiper.virtualSize = Math.max(swiper.virtualSize, swiperSize) + offsetAfter;
  if (rtl && wrongRTL && (params.effect === 'slide' || params.effect === 'coverflow')) {
    wrapperEl.style.width = `${swiper.virtualSize + spaceBetween}px`;
  }
  if (params.setWrapperSize) {
    wrapperEl.style[swiper.getDirectionLabel('width')] = `${swiper.virtualSize + spaceBetween}px`;
  }
  if (gridEnabled) {
    swiper.grid.updateWrapperSize(slideSize, snapGrid);
  }

  // Remove last grid elements depending on width
  if (!params.centeredSlides) {
    const newSlidesGrid = [];
    for (let i = 0; i < snapGrid.length; i += 1) {
      let slidesGridItem = snapGrid[i];
      if (params.roundLengths) slidesGridItem = Math.floor(slidesGridItem);
      if (snapGrid[i] <= swiper.virtualSize - swiperSize) {
        newSlidesGrid.push(slidesGridItem);
      }
    }
    snapGrid = newSlidesGrid;
    if (Math.floor(swiper.virtualSize - swiperSize) - Math.floor(snapGrid[snapGrid.length - 1]) > 1) {
      snapGrid.push(swiper.virtualSize - swiperSize);
    }
  }
  if (isVirtual && params.loop) {
    const size = slidesSizesGrid[0] + spaceBetween;
    if (params.slidesPerGroup > 1) {
      const groups = Math.ceil((swiper.virtual.slidesBefore + swiper.virtual.slidesAfter) / params.slidesPerGroup);
      const groupSize = size * params.slidesPerGroup;
      for (let i = 0; i < groups; i += 1) {
        snapGrid.push(snapGrid[snapGrid.length - 1] + groupSize);
      }
    }
    for (let i = 0; i < swiper.virtual.slidesBefore + swiper.virtual.slidesAfter; i += 1) {
      if (params.slidesPerGroup === 1) {
        snapGrid.push(snapGrid[snapGrid.length - 1] + size);
      }
      slidesGrid.push(slidesGrid[slidesGrid.length - 1] + size);
      swiper.virtualSize += size;
    }
  }
  if (snapGrid.length === 0) snapGrid = [0];
  if (spaceBetween !== 0) {
    const key = swiper.isHorizontal() && rtl ? 'marginLeft' : swiper.getDirectionLabel('marginRight');
    slides.filter((_, slideIndex) => {
      if (!params.cssMode || params.loop) return true;
      if (slideIndex === slides.length - 1) {
        return false;
      }
      return true;
    }).forEach(slideEl => {
      slideEl.style[key] = `${spaceBetween}px`;
    });
  }
  if (params.centeredSlides && params.centeredSlidesBounds) {
    let allSlidesSize = 0;
    slidesSizesGrid.forEach(slideSizeValue => {
      allSlidesSize += slideSizeValue + (spaceBetween || 0);
    });
    allSlidesSize -= spaceBetween;
    const maxSnap = allSlidesSize - swiperSize;
    snapGrid = snapGrid.map(snap => {
      if (snap <= 0) return -offsetBefore;
      if (snap > maxSnap) return maxSnap + offsetAfter;
      return snap;
    });
  }
  if (params.centerInsufficientSlides) {
    let allSlidesSize = 0;
    slidesSizesGrid.forEach(slideSizeValue => {
      allSlidesSize += slideSizeValue + (spaceBetween || 0);
    });
    allSlidesSize -= spaceBetween;
    if (allSlidesSize < swiperSize) {
      const allSlidesOffset = (swiperSize - allSlidesSize) / 2;
      snapGrid.forEach((snap, snapIndex) => {
        snapGrid[snapIndex] = snap - allSlidesOffset;
      });
      slidesGrid.forEach((snap, snapIndex) => {
        slidesGrid[snapIndex] = snap + allSlidesOffset;
      });
    }
  }
  Object.assign(swiper, {
    slides,
    snapGrid,
    slidesGrid,
    slidesSizesGrid
  });
  if (params.centeredSlides && params.cssMode && !params.centeredSlidesBounds) {
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.s)(wrapperEl, '--swiper-centered-offset-before', `${-snapGrid[0]}px`);
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.s)(wrapperEl, '--swiper-centered-offset-after', `${swiper.size / 2 - slidesSizesGrid[slidesSizesGrid.length - 1] / 2}px`);
    const addToSnapGrid = -swiper.snapGrid[0];
    const addToSlidesGrid = -swiper.slidesGrid[0];
    swiper.snapGrid = swiper.snapGrid.map(v => v + addToSnapGrid);
    swiper.slidesGrid = swiper.slidesGrid.map(v => v + addToSlidesGrid);
  }
  if (slidesLength !== previousSlidesLength) {
    swiper.emit('slidesLengthChange');
  }
  if (snapGrid.length !== previousSnapGridLength) {
    if (swiper.params.watchOverflow) swiper.checkOverflow();
    swiper.emit('snapGridLengthChange');
  }
  if (slidesGrid.length !== previousSlidesGridLength) {
    swiper.emit('slidesGridLengthChange');
  }
  if (params.watchSlidesProgress) {
    swiper.updateSlidesOffset();
  }
  swiper.emit('slidesUpdated');
  if (!isVirtual && !params.cssMode && (params.effect === 'slide' || params.effect === 'fade')) {
    const backFaceHiddenClass = `${params.containerModifierClass}backface-hidden`;
    const hasClassBackfaceClassAdded = swiper.el.classList.contains(backFaceHiddenClass);
    if (slidesLength <= params.maxBackfaceHiddenSlides) {
      if (!hasClassBackfaceClassAdded) swiper.el.classList.add(backFaceHiddenClass);
    } else if (hasClassBackfaceClassAdded) {
      swiper.el.classList.remove(backFaceHiddenClass);
    }
  }
}

function updateAutoHeight(speed) {
  const swiper = this;
  const activeSlides = [];
  const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
  let newHeight = 0;
  let i;
  if (typeof speed === 'number') {
    swiper.setTransition(speed);
  } else if (speed === true) {
    swiper.setTransition(swiper.params.speed);
  }
  const getSlideByIndex = index => {
    if (isVirtual) {
      return swiper.slides[swiper.getSlideIndexByData(index)];
    }
    return swiper.slides[index];
  };
  // Find slides currently in view
  if (swiper.params.slidesPerView !== 'auto' && swiper.params.slidesPerView > 1) {
    if (swiper.params.centeredSlides) {
      (swiper.visibleSlides || []).forEach(slide => {
        activeSlides.push(slide);
      });
    } else {
      for (i = 0; i < Math.ceil(swiper.params.slidesPerView); i += 1) {
        const index = swiper.activeIndex + i;
        if (index > swiper.slides.length && !isVirtual) break;
        activeSlides.push(getSlideByIndex(index));
      }
    }
  } else {
    activeSlides.push(getSlideByIndex(swiper.activeIndex));
  }

  // Find new height from highest slide in view
  for (i = 0; i < activeSlides.length; i += 1) {
    if (typeof activeSlides[i] !== 'undefined') {
      const height = activeSlides[i].offsetHeight;
      newHeight = height > newHeight ? height : newHeight;
    }
  }

  // Update Height
  if (newHeight || newHeight === 0) swiper.wrapperEl.style.height = `${newHeight}px`;
}

function updateSlidesOffset() {
  const swiper = this;
  const slides = swiper.slides;
  // eslint-disable-next-line
  const minusOffset = swiper.isElement ? swiper.isHorizontal() ? swiper.wrapperEl.offsetLeft : swiper.wrapperEl.offsetTop : 0;
  for (let i = 0; i < slides.length; i += 1) {
    slides[i].swiperSlideOffset = (swiper.isHorizontal() ? slides[i].offsetLeft : slides[i].offsetTop) - minusOffset - swiper.cssOverflowAdjustment();
  }
}

function updateSlidesProgress(translate) {
  if (translate === void 0) {
    translate = this && this.translate || 0;
  }
  const swiper = this;
  const params = swiper.params;
  const {
    slides,
    rtlTranslate: rtl,
    snapGrid
  } = swiper;
  if (slides.length === 0) return;
  if (typeof slides[0].swiperSlideOffset === 'undefined') swiper.updateSlidesOffset();
  let offsetCenter = -translate;
  if (rtl) offsetCenter = translate;

  // Visible Slides
  slides.forEach(slideEl => {
    slideEl.classList.remove(params.slideVisibleClass, params.slideFullyVisibleClass);
  });
  swiper.visibleSlidesIndexes = [];
  swiper.visibleSlides = [];
  let spaceBetween = params.spaceBetween;
  if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
    spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * swiper.size;
  } else if (typeof spaceBetween === 'string') {
    spaceBetween = parseFloat(spaceBetween);
  }
  for (let i = 0; i < slides.length; i += 1) {
    const slide = slides[i];
    let slideOffset = slide.swiperSlideOffset;
    if (params.cssMode && params.centeredSlides) {
      slideOffset -= slides[0].swiperSlideOffset;
    }
    const slideProgress = (offsetCenter + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + spaceBetween);
    const originalSlideProgress = (offsetCenter - snapGrid[0] + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + spaceBetween);
    const slideBefore = -(offsetCenter - slideOffset);
    const slideAfter = slideBefore + swiper.slidesSizesGrid[i];
    const isFullyVisible = slideBefore >= 0 && slideBefore <= swiper.size - swiper.slidesSizesGrid[i];
    const isVisible = slideBefore >= 0 && slideBefore < swiper.size - 1 || slideAfter > 1 && slideAfter <= swiper.size || slideBefore <= 0 && slideAfter >= swiper.size;
    if (isVisible) {
      swiper.visibleSlides.push(slide);
      swiper.visibleSlidesIndexes.push(i);
      slides[i].classList.add(params.slideVisibleClass);
    }
    if (isFullyVisible) {
      slides[i].classList.add(params.slideFullyVisibleClass);
    }
    slide.progress = rtl ? -slideProgress : slideProgress;
    slide.originalProgress = rtl ? -originalSlideProgress : originalSlideProgress;
  }
}

function updateProgress(translate) {
  const swiper = this;
  if (typeof translate === 'undefined') {
    const multiplier = swiper.rtlTranslate ? -1 : 1;
    // eslint-disable-next-line
    translate = swiper && swiper.translate && swiper.translate * multiplier || 0;
  }
  const params = swiper.params;
  const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
  let {
    progress,
    isBeginning,
    isEnd,
    progressLoop
  } = swiper;
  const wasBeginning = isBeginning;
  const wasEnd = isEnd;
  if (translatesDiff === 0) {
    progress = 0;
    isBeginning = true;
    isEnd = true;
  } else {
    progress = (translate - swiper.minTranslate()) / translatesDiff;
    const isBeginningRounded = Math.abs(translate - swiper.minTranslate()) < 1;
    const isEndRounded = Math.abs(translate - swiper.maxTranslate()) < 1;
    isBeginning = isBeginningRounded || progress <= 0;
    isEnd = isEndRounded || progress >= 1;
    if (isBeginningRounded) progress = 0;
    if (isEndRounded) progress = 1;
  }
  if (params.loop) {
    const firstSlideIndex = swiper.getSlideIndexByData(0);
    const lastSlideIndex = swiper.getSlideIndexByData(swiper.slides.length - 1);
    const firstSlideTranslate = swiper.slidesGrid[firstSlideIndex];
    const lastSlideTranslate = swiper.slidesGrid[lastSlideIndex];
    const translateMax = swiper.slidesGrid[swiper.slidesGrid.length - 1];
    const translateAbs = Math.abs(translate);
    if (translateAbs >= firstSlideTranslate) {
      progressLoop = (translateAbs - firstSlideTranslate) / translateMax;
    } else {
      progressLoop = (translateAbs + translateMax - lastSlideTranslate) / translateMax;
    }
    if (progressLoop > 1) progressLoop -= 1;
  }
  Object.assign(swiper, {
    progress,
    progressLoop,
    isBeginning,
    isEnd
  });
  if (params.watchSlidesProgress || params.centeredSlides && params.autoHeight) swiper.updateSlidesProgress(translate);
  if (isBeginning && !wasBeginning) {
    swiper.emit('reachBeginning toEdge');
  }
  if (isEnd && !wasEnd) {
    swiper.emit('reachEnd toEdge');
  }
  if (wasBeginning && !isBeginning || wasEnd && !isEnd) {
    swiper.emit('fromEdge');
  }
  swiper.emit('progress', progress);
}

function updateSlidesClasses() {
  const swiper = this;
  const {
    slides,
    params,
    slidesEl,
    activeIndex
  } = swiper;
  const isVirtual = swiper.virtual && params.virtual.enabled;
  const gridEnabled = swiper.grid && params.grid && params.grid.rows > 1;
  const getFilteredSlide = selector => {
    return (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `.${params.slideClass}${selector}, swiper-slide${selector}`)[0];
  };
  slides.forEach(slideEl => {
    slideEl.classList.remove(params.slideActiveClass, params.slideNextClass, params.slidePrevClass);
  });
  let activeSlide;
  let prevSlide;
  let nextSlide;
  if (isVirtual) {
    if (params.loop) {
      let slideIndex = activeIndex - swiper.virtual.slidesBefore;
      if (slideIndex < 0) slideIndex = swiper.virtual.slides.length + slideIndex;
      if (slideIndex >= swiper.virtual.slides.length) slideIndex -= swiper.virtual.slides.length;
      activeSlide = getFilteredSlide(`[data-swiper-slide-index="${slideIndex}"]`);
    } else {
      activeSlide = getFilteredSlide(`[data-swiper-slide-index="${activeIndex}"]`);
    }
  } else {
    if (gridEnabled) {
      activeSlide = slides.filter(slideEl => slideEl.column === activeIndex)[0];
      nextSlide = slides.filter(slideEl => slideEl.column === activeIndex + 1)[0];
      prevSlide = slides.filter(slideEl => slideEl.column === activeIndex - 1)[0];
    } else {
      activeSlide = slides[activeIndex];
    }
  }
  if (activeSlide) {
    // Active classes
    activeSlide.classList.add(params.slideActiveClass);
    if (gridEnabled) {
      if (nextSlide) {
        nextSlide.classList.add(params.slideNextClass);
      }
      if (prevSlide) {
        prevSlide.classList.add(params.slidePrevClass);
      }
    } else {
      // Next Slide
      nextSlide = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.o)(activeSlide, `.${params.slideClass}, swiper-slide`)[0];
      if (params.loop && !nextSlide) {
        nextSlide = slides[0];
      }
      if (nextSlide) {
        nextSlide.classList.add(params.slideNextClass);
      }

      // Prev Slide
      prevSlide = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.p)(activeSlide, `.${params.slideClass}, swiper-slide`)[0];
      if (params.loop && !prevSlide === 0) {
        prevSlide = slides[slides.length - 1];
      }
      if (prevSlide) {
        prevSlide.classList.add(params.slidePrevClass);
      }
    }
  }
  swiper.emitSlidesClasses();
}

const processLazyPreloader = (swiper, imageEl) => {
  if (!swiper || swiper.destroyed || !swiper.params) return;
  const slideSelector = () => swiper.isElement ? `swiper-slide` : `.${swiper.params.slideClass}`;
  const slideEl = imageEl.closest(slideSelector());
  if (slideEl) {
    let lazyEl = slideEl.querySelector(`.${swiper.params.lazyPreloaderClass}`);
    if (!lazyEl && swiper.isElement) {
      if (slideEl.shadowRoot) {
        lazyEl = slideEl.shadowRoot.querySelector(`.${swiper.params.lazyPreloaderClass}`);
      } else {
        // init later
        requestAnimationFrame(() => {
          if (slideEl.shadowRoot) {
            lazyEl = slideEl.shadowRoot.querySelector(`.${swiper.params.lazyPreloaderClass}`);
            if (lazyEl) lazyEl.remove();
          }
        });
      }
    }
    if (lazyEl) lazyEl.remove();
  }
};
const unlazy = (swiper, index) => {
  if (!swiper.slides[index]) return;
  const imageEl = swiper.slides[index].querySelector('[loading="lazy"]');
  if (imageEl) imageEl.removeAttribute('loading');
};
const preload = swiper => {
  if (!swiper || swiper.destroyed || !swiper.params) return;
  let amount = swiper.params.lazyPreloadPrevNext;
  const len = swiper.slides.length;
  if (!len || !amount || amount < 0) return;
  amount = Math.min(amount, len);
  const slidesPerView = swiper.params.slidesPerView === 'auto' ? swiper.slidesPerViewDynamic() : Math.ceil(swiper.params.slidesPerView);
  const activeIndex = swiper.activeIndex;
  if (swiper.params.grid && swiper.params.grid.rows > 1) {
    const activeColumn = activeIndex;
    const preloadColumns = [activeColumn - amount];
    preloadColumns.push(...Array.from({
      length: amount
    }).map((_, i) => {
      return activeColumn + slidesPerView + i;
    }));
    swiper.slides.forEach((slideEl, i) => {
      if (preloadColumns.includes(slideEl.column)) unlazy(swiper, i);
    });
    return;
  }
  const slideIndexLastInView = activeIndex + slidesPerView - 1;
  if (swiper.params.rewind || swiper.params.loop) {
    for (let i = activeIndex - amount; i <= slideIndexLastInView + amount; i += 1) {
      const realIndex = (i % len + len) % len;
      if (realIndex < activeIndex || realIndex > slideIndexLastInView) unlazy(swiper, realIndex);
    }
  } else {
    for (let i = Math.max(activeIndex - amount, 0); i <= Math.min(slideIndexLastInView + amount, len - 1); i += 1) {
      if (i !== activeIndex && (i > slideIndexLastInView || i < activeIndex)) {
        unlazy(swiper, i);
      }
    }
  }
};

function getActiveIndexByTranslate(swiper) {
  const {
    slidesGrid,
    params
  } = swiper;
  const translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
  let activeIndex;
  for (let i = 0; i < slidesGrid.length; i += 1) {
    if (typeof slidesGrid[i + 1] !== 'undefined') {
      if (translate >= slidesGrid[i] && translate < slidesGrid[i + 1] - (slidesGrid[i + 1] - slidesGrid[i]) / 2) {
        activeIndex = i;
      } else if (translate >= slidesGrid[i] && translate < slidesGrid[i + 1]) {
        activeIndex = i + 1;
      }
    } else if (translate >= slidesGrid[i]) {
      activeIndex = i;
    }
  }
  // Normalize slideIndex
  if (params.normalizeSlideIndex) {
    if (activeIndex < 0 || typeof activeIndex === 'undefined') activeIndex = 0;
  }
  return activeIndex;
}
function updateActiveIndex(newActiveIndex) {
  const swiper = this;
  const translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
  const {
    snapGrid,
    params,
    activeIndex: previousIndex,
    realIndex: previousRealIndex,
    snapIndex: previousSnapIndex
  } = swiper;
  let activeIndex = newActiveIndex;
  let snapIndex;
  const getVirtualRealIndex = aIndex => {
    let realIndex = aIndex - swiper.virtual.slidesBefore;
    if (realIndex < 0) {
      realIndex = swiper.virtual.slides.length + realIndex;
    }
    if (realIndex >= swiper.virtual.slides.length) {
      realIndex -= swiper.virtual.slides.length;
    }
    return realIndex;
  };
  if (typeof activeIndex === 'undefined') {
    activeIndex = getActiveIndexByTranslate(swiper);
  }
  if (snapGrid.indexOf(translate) >= 0) {
    snapIndex = snapGrid.indexOf(translate);
  } else {
    const skip = Math.min(params.slidesPerGroupSkip, activeIndex);
    snapIndex = skip + Math.floor((activeIndex - skip) / params.slidesPerGroup);
  }
  if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
  if (activeIndex === previousIndex && !swiper.params.loop) {
    if (snapIndex !== previousSnapIndex) {
      swiper.snapIndex = snapIndex;
      swiper.emit('snapIndexChange');
    }
    return;
  }
  if (activeIndex === previousIndex && swiper.params.loop && swiper.virtual && swiper.params.virtual.enabled) {
    swiper.realIndex = getVirtualRealIndex(activeIndex);
    return;
  }
  const gridEnabled = swiper.grid && params.grid && params.grid.rows > 1;

  // Get real index
  let realIndex;
  if (swiper.virtual && params.virtual.enabled && params.loop) {
    realIndex = getVirtualRealIndex(activeIndex);
  } else if (gridEnabled) {
    const firstSlideInColumn = swiper.slides.filter(slideEl => slideEl.column === activeIndex)[0];
    let activeSlideIndex = parseInt(firstSlideInColumn.getAttribute('data-swiper-slide-index'), 10);
    if (Number.isNaN(activeSlideIndex)) {
      activeSlideIndex = Math.max(swiper.slides.indexOf(firstSlideInColumn), 0);
    }
    realIndex = Math.floor(activeSlideIndex / params.grid.rows);
  } else if (swiper.slides[activeIndex]) {
    const slideIndex = swiper.slides[activeIndex].getAttribute('data-swiper-slide-index');
    if (slideIndex) {
      realIndex = parseInt(slideIndex, 10);
    } else {
      realIndex = activeIndex;
    }
  } else {
    realIndex = activeIndex;
  }
  Object.assign(swiper, {
    previousSnapIndex,
    snapIndex,
    previousRealIndex,
    realIndex,
    previousIndex,
    activeIndex
  });
  if (swiper.initialized) {
    preload(swiper);
  }
  swiper.emit('activeIndexChange');
  swiper.emit('snapIndexChange');
  if (swiper.initialized || swiper.params.runCallbacksOnInit) {
    if (previousRealIndex !== realIndex) {
      swiper.emit('realIndexChange');
    }
    swiper.emit('slideChange');
  }
}

function updateClickedSlide(el, path) {
  const swiper = this;
  const params = swiper.params;
  let slide = el.closest(`.${params.slideClass}, swiper-slide`);
  if (!slide && swiper.isElement && path && path.length > 1 && path.includes(el)) {
    [...path.slice(path.indexOf(el) + 1, path.length)].forEach(pathEl => {
      if (!slide && pathEl.matches && pathEl.matches(`.${params.slideClass}, swiper-slide`)) {
        slide = pathEl;
      }
    });
  }
  let slideFound = false;
  let slideIndex;
  if (slide) {
    for (let i = 0; i < swiper.slides.length; i += 1) {
      if (swiper.slides[i] === slide) {
        slideFound = true;
        slideIndex = i;
        break;
      }
    }
  }
  if (slide && slideFound) {
    swiper.clickedSlide = slide;
    if (swiper.virtual && swiper.params.virtual.enabled) {
      swiper.clickedIndex = parseInt(slide.getAttribute('data-swiper-slide-index'), 10);
    } else {
      swiper.clickedIndex = slideIndex;
    }
  } else {
    swiper.clickedSlide = undefined;
    swiper.clickedIndex = undefined;
    return;
  }
  if (params.slideToClickedSlide && swiper.clickedIndex !== undefined && swiper.clickedIndex !== swiper.activeIndex) {
    swiper.slideToClickedSlide();
  }
}

var update = {
  updateSize,
  updateSlides,
  updateAutoHeight,
  updateSlidesOffset,
  updateSlidesProgress,
  updateProgress,
  updateSlidesClasses,
  updateActiveIndex,
  updateClickedSlide
};

function getSwiperTranslate(axis) {
  if (axis === void 0) {
    axis = this.isHorizontal() ? 'x' : 'y';
  }
  const swiper = this;
  const {
    params,
    rtlTranslate: rtl,
    translate,
    wrapperEl
  } = swiper;
  if (params.virtualTranslate) {
    return rtl ? -translate : translate;
  }
  if (params.cssMode) {
    return translate;
  }
  let currentTranslate = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.i)(wrapperEl, axis);
  currentTranslate += swiper.cssOverflowAdjustment();
  if (rtl) currentTranslate = -currentTranslate;
  return currentTranslate || 0;
}

function setTranslate(translate, byController) {
  const swiper = this;
  const {
    rtlTranslate: rtl,
    params,
    wrapperEl,
    progress
  } = swiper;
  let x = 0;
  let y = 0;
  const z = 0;
  if (swiper.isHorizontal()) {
    x = rtl ? -translate : translate;
  } else {
    y = translate;
  }
  if (params.roundLengths) {
    x = Math.floor(x);
    y = Math.floor(y);
  }
  swiper.previousTranslate = swiper.translate;
  swiper.translate = swiper.isHorizontal() ? x : y;
  if (params.cssMode) {
    wrapperEl[swiper.isHorizontal() ? 'scrollLeft' : 'scrollTop'] = swiper.isHorizontal() ? -x : -y;
  } else if (!params.virtualTranslate) {
    if (swiper.isHorizontal()) {
      x -= swiper.cssOverflowAdjustment();
    } else {
      y -= swiper.cssOverflowAdjustment();
    }
    wrapperEl.style.transform = `translate3d(${x}px, ${y}px, ${z}px)`;
  }

  // Check if we need to update progress
  let newProgress;
  const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
  if (translatesDiff === 0) {
    newProgress = 0;
  } else {
    newProgress = (translate - swiper.minTranslate()) / translatesDiff;
  }
  if (newProgress !== progress) {
    swiper.updateProgress(translate);
  }
  swiper.emit('setTranslate', swiper.translate, byController);
}

function minTranslate() {
  return -this.snapGrid[0];
}

function maxTranslate() {
  return -this.snapGrid[this.snapGrid.length - 1];
}

function translateTo(translate, speed, runCallbacks, translateBounds, internal) {
  if (translate === void 0) {
    translate = 0;
  }
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  if (translateBounds === void 0) {
    translateBounds = true;
  }
  const swiper = this;
  const {
    params,
    wrapperEl
  } = swiper;
  if (swiper.animating && params.preventInteractionOnTransition) {
    return false;
  }
  const minTranslate = swiper.minTranslate();
  const maxTranslate = swiper.maxTranslate();
  let newTranslate;
  if (translateBounds && translate > minTranslate) newTranslate = minTranslate;else if (translateBounds && translate < maxTranslate) newTranslate = maxTranslate;else newTranslate = translate;

  // Update progress
  swiper.updateProgress(newTranslate);
  if (params.cssMode) {
    const isH = swiper.isHorizontal();
    if (speed === 0) {
      wrapperEl[isH ? 'scrollLeft' : 'scrollTop'] = -newTranslate;
    } else {
      if (!swiper.support.smoothScroll) {
        (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.q)({
          swiper,
          targetPosition: -newTranslate,
          side: isH ? 'left' : 'top'
        });
        return true;
      }
      wrapperEl.scrollTo({
        [isH ? 'left' : 'top']: -newTranslate,
        behavior: 'smooth'
      });
    }
    return true;
  }
  if (speed === 0) {
    swiper.setTransition(0);
    swiper.setTranslate(newTranslate);
    if (runCallbacks) {
      swiper.emit('beforeTransitionStart', speed, internal);
      swiper.emit('transitionEnd');
    }
  } else {
    swiper.setTransition(speed);
    swiper.setTranslate(newTranslate);
    if (runCallbacks) {
      swiper.emit('beforeTransitionStart', speed, internal);
      swiper.emit('transitionStart');
    }
    if (!swiper.animating) {
      swiper.animating = true;
      if (!swiper.onTranslateToWrapperTransitionEnd) {
        swiper.onTranslateToWrapperTransitionEnd = function transitionEnd(e) {
          if (!swiper || swiper.destroyed) return;
          if (e.target !== this) return;
          swiper.wrapperEl.removeEventListener('transitionend', swiper.onTranslateToWrapperTransitionEnd);
          swiper.onTranslateToWrapperTransitionEnd = null;
          delete swiper.onTranslateToWrapperTransitionEnd;
          if (runCallbacks) {
            swiper.emit('transitionEnd');
          }
        };
      }
      swiper.wrapperEl.addEventListener('transitionend', swiper.onTranslateToWrapperTransitionEnd);
    }
  }
  return true;
}

var translate = {
  getTranslate: getSwiperTranslate,
  setTranslate,
  minTranslate,
  maxTranslate,
  translateTo
};

function setTransition(duration, byController) {
  const swiper = this;
  if (!swiper.params.cssMode) {
    swiper.wrapperEl.style.transitionDuration = `${duration}ms`;
    swiper.wrapperEl.style.transitionDelay = duration === 0 ? `0ms` : '';
  }
  swiper.emit('setTransition', duration, byController);
}

function transitionEmit(_ref) {
  let {
    swiper,
    runCallbacks,
    direction,
    step
  } = _ref;
  const {
    activeIndex,
    previousIndex
  } = swiper;
  let dir = direction;
  if (!dir) {
    if (activeIndex > previousIndex) dir = 'next';else if (activeIndex < previousIndex) dir = 'prev';else dir = 'reset';
  }
  swiper.emit(`transition${step}`);
  if (runCallbacks && activeIndex !== previousIndex) {
    if (dir === 'reset') {
      swiper.emit(`slideResetTransition${step}`);
      return;
    }
    swiper.emit(`slideChangeTransition${step}`);
    if (dir === 'next') {
      swiper.emit(`slideNextTransition${step}`);
    } else {
      swiper.emit(`slidePrevTransition${step}`);
    }
  }
}

function transitionStart(runCallbacks, direction) {
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  const swiper = this;
  const {
    params
  } = swiper;
  if (params.cssMode) return;
  if (params.autoHeight) {
    swiper.updateAutoHeight();
  }
  transitionEmit({
    swiper,
    runCallbacks,
    direction,
    step: 'Start'
  });
}

function transitionEnd(runCallbacks, direction) {
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  const swiper = this;
  const {
    params
  } = swiper;
  swiper.animating = false;
  if (params.cssMode) return;
  swiper.setTransition(0);
  transitionEmit({
    swiper,
    runCallbacks,
    direction,
    step: 'End'
  });
}

var transition = {
  setTransition,
  transitionStart,
  transitionEnd
};

function slideTo(index, speed, runCallbacks, internal, initial) {
  if (index === void 0) {
    index = 0;
  }
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  if (typeof index === 'string') {
    index = parseInt(index, 10);
  }
  const swiper = this;
  let slideIndex = index;
  if (slideIndex < 0) slideIndex = 0;
  const {
    params,
    snapGrid,
    slidesGrid,
    previousIndex,
    activeIndex,
    rtlTranslate: rtl,
    wrapperEl,
    enabled
  } = swiper;
  if (swiper.animating && params.preventInteractionOnTransition || !enabled && !internal && !initial) {
    return false;
  }
  const skip = Math.min(swiper.params.slidesPerGroupSkip, slideIndex);
  let snapIndex = skip + Math.floor((slideIndex - skip) / swiper.params.slidesPerGroup);
  if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
  const translate = -snapGrid[snapIndex];
  // Normalize slideIndex
  if (params.normalizeSlideIndex) {
    for (let i = 0; i < slidesGrid.length; i += 1) {
      const normalizedTranslate = -Math.floor(translate * 100);
      const normalizedGrid = Math.floor(slidesGrid[i] * 100);
      const normalizedGridNext = Math.floor(slidesGrid[i + 1] * 100);
      if (typeof slidesGrid[i + 1] !== 'undefined') {
        if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext - (normalizedGridNext - normalizedGrid) / 2) {
          slideIndex = i;
        } else if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext) {
          slideIndex = i + 1;
        }
      } else if (normalizedTranslate >= normalizedGrid) {
        slideIndex = i;
      }
    }
  }
  // Directions locks
  if (swiper.initialized && slideIndex !== activeIndex) {
    if (!swiper.allowSlideNext && (rtl ? translate > swiper.translate && translate > swiper.minTranslate() : translate < swiper.translate && translate < swiper.minTranslate())) {
      return false;
    }
    if (!swiper.allowSlidePrev && translate > swiper.translate && translate > swiper.maxTranslate()) {
      if ((activeIndex || 0) !== slideIndex) {
        return false;
      }
    }
  }
  if (slideIndex !== (previousIndex || 0) && runCallbacks) {
    swiper.emit('beforeSlideChangeStart');
  }

  // Update progress
  swiper.updateProgress(translate);
  let direction;
  if (slideIndex > activeIndex) direction = 'next';else if (slideIndex < activeIndex) direction = 'prev';else direction = 'reset';

  // Update Index
  if (rtl && -translate === swiper.translate || !rtl && translate === swiper.translate) {
    swiper.updateActiveIndex(slideIndex);
    // Update Height
    if (params.autoHeight) {
      swiper.updateAutoHeight();
    }
    swiper.updateSlidesClasses();
    if (params.effect !== 'slide') {
      swiper.setTranslate(translate);
    }
    if (direction !== 'reset') {
      swiper.transitionStart(runCallbacks, direction);
      swiper.transitionEnd(runCallbacks, direction);
    }
    return false;
  }
  if (params.cssMode) {
    const isH = swiper.isHorizontal();
    const t = rtl ? translate : -translate;
    if (speed === 0) {
      const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
      if (isVirtual) {
        swiper.wrapperEl.style.scrollSnapType = 'none';
        swiper._immediateVirtual = true;
      }
      if (isVirtual && !swiper._cssModeVirtualInitialSet && swiper.params.initialSlide > 0) {
        swiper._cssModeVirtualInitialSet = true;
        requestAnimationFrame(() => {
          wrapperEl[isH ? 'scrollLeft' : 'scrollTop'] = t;
        });
      } else {
        wrapperEl[isH ? 'scrollLeft' : 'scrollTop'] = t;
      }
      if (isVirtual) {
        requestAnimationFrame(() => {
          swiper.wrapperEl.style.scrollSnapType = '';
          swiper._immediateVirtual = false;
        });
      }
    } else {
      if (!swiper.support.smoothScroll) {
        (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.q)({
          swiper,
          targetPosition: t,
          side: isH ? 'left' : 'top'
        });
        return true;
      }
      wrapperEl.scrollTo({
        [isH ? 'left' : 'top']: t,
        behavior: 'smooth'
      });
    }
    return true;
  }
  swiper.setTransition(speed);
  swiper.setTranslate(translate);
  swiper.updateActiveIndex(slideIndex);
  swiper.updateSlidesClasses();
  swiper.emit('beforeTransitionStart', speed, internal);
  swiper.transitionStart(runCallbacks, direction);
  if (speed === 0) {
    swiper.transitionEnd(runCallbacks, direction);
  } else if (!swiper.animating) {
    swiper.animating = true;
    if (!swiper.onSlideToWrapperTransitionEnd) {
      swiper.onSlideToWrapperTransitionEnd = function transitionEnd(e) {
        if (!swiper || swiper.destroyed) return;
        if (e.target !== this) return;
        swiper.wrapperEl.removeEventListener('transitionend', swiper.onSlideToWrapperTransitionEnd);
        swiper.onSlideToWrapperTransitionEnd = null;
        delete swiper.onSlideToWrapperTransitionEnd;
        swiper.transitionEnd(runCallbacks, direction);
      };
    }
    swiper.wrapperEl.addEventListener('transitionend', swiper.onSlideToWrapperTransitionEnd);
  }
  return true;
}

function slideToLoop(index, speed, runCallbacks, internal) {
  if (index === void 0) {
    index = 0;
  }
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  if (typeof index === 'string') {
    const indexAsNumber = parseInt(index, 10);
    index = indexAsNumber;
  }
  const swiper = this;
  const gridEnabled = swiper.grid && swiper.params.grid && swiper.params.grid.rows > 1;
  let newIndex = index;
  if (swiper.params.loop) {
    if (swiper.virtual && swiper.params.virtual.enabled) {
      // eslint-disable-next-line
      newIndex = newIndex + swiper.virtual.slidesBefore;
    } else {
      let targetSlideIndex;
      if (gridEnabled) {
        const slideIndex = newIndex * swiper.params.grid.rows;
        targetSlideIndex = swiper.slides.filter(slideEl => slideEl.getAttribute('data-swiper-slide-index') * 1 === slideIndex)[0].column;
      } else {
        targetSlideIndex = swiper.getSlideIndexByData(newIndex);
      }
      const cols = gridEnabled ? Math.ceil(swiper.slides.length / swiper.params.grid.rows) : swiper.slides.length;
      const {
        centeredSlides
      } = swiper.params;
      let slidesPerView = swiper.params.slidesPerView;
      if (slidesPerView === 'auto') {
        slidesPerView = swiper.slidesPerViewDynamic();
      } else {
        slidesPerView = Math.ceil(parseFloat(swiper.params.slidesPerView, 10));
        if (centeredSlides && slidesPerView % 2 === 0) {
          slidesPerView = slidesPerView + 1;
        }
      }
      let needLoopFix = cols - targetSlideIndex < slidesPerView;
      if (centeredSlides) {
        needLoopFix = needLoopFix || targetSlideIndex < Math.ceil(slidesPerView / 2);
      }
      if (needLoopFix) {
        const direction = centeredSlides ? targetSlideIndex < swiper.activeIndex ? 'prev' : 'next' : targetSlideIndex - swiper.activeIndex - 1 < swiper.params.slidesPerView ? 'next' : 'prev';
        swiper.loopFix({
          direction,
          slideTo: true,
          activeSlideIndex: direction === 'next' ? targetSlideIndex + 1 : targetSlideIndex - cols + 1,
          slideRealIndex: direction === 'next' ? swiper.realIndex : undefined
        });
      }
      if (gridEnabled) {
        const slideIndex = newIndex * swiper.params.grid.rows;
        newIndex = swiper.slides.filter(slideEl => slideEl.getAttribute('data-swiper-slide-index') * 1 === slideIndex)[0].column;
      } else {
        newIndex = swiper.getSlideIndexByData(newIndex);
      }
    }
  }
  requestAnimationFrame(() => {
    swiper.slideTo(newIndex, speed, runCallbacks, internal);
  });
  return swiper;
}

/* eslint no-unused-vars: "off" */
function slideNext(speed, runCallbacks, internal) {
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  const swiper = this;
  const {
    enabled,
    params,
    animating
  } = swiper;
  if (!enabled) return swiper;
  let perGroup = params.slidesPerGroup;
  if (params.slidesPerView === 'auto' && params.slidesPerGroup === 1 && params.slidesPerGroupAuto) {
    perGroup = Math.max(swiper.slidesPerViewDynamic('current', true), 1);
  }
  const increment = swiper.activeIndex < params.slidesPerGroupSkip ? 1 : perGroup;
  const isVirtual = swiper.virtual && params.virtual.enabled;
  if (params.loop) {
    if (animating && !isVirtual && params.loopPreventsSliding) return false;
    swiper.loopFix({
      direction: 'next'
    });
    // eslint-disable-next-line
    swiper._clientLeft = swiper.wrapperEl.clientLeft;
    if (swiper.activeIndex === swiper.slides.length - 1 && params.cssMode) {
      requestAnimationFrame(() => {
        swiper.slideTo(swiper.activeIndex + increment, speed, runCallbacks, internal);
      });
      return true;
    }
  }
  if (params.rewind && swiper.isEnd) {
    return swiper.slideTo(0, speed, runCallbacks, internal);
  }
  return swiper.slideTo(swiper.activeIndex + increment, speed, runCallbacks, internal);
}

/* eslint no-unused-vars: "off" */
function slidePrev(speed, runCallbacks, internal) {
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  const swiper = this;
  const {
    params,
    snapGrid,
    slidesGrid,
    rtlTranslate,
    enabled,
    animating
  } = swiper;
  if (!enabled) return swiper;
  const isVirtual = swiper.virtual && params.virtual.enabled;
  if (params.loop) {
    if (animating && !isVirtual && params.loopPreventsSliding) return false;
    swiper.loopFix({
      direction: 'prev'
    });
    // eslint-disable-next-line
    swiper._clientLeft = swiper.wrapperEl.clientLeft;
  }
  const translate = rtlTranslate ? swiper.translate : -swiper.translate;
  function normalize(val) {
    if (val < 0) return -Math.floor(Math.abs(val));
    return Math.floor(val);
  }
  const normalizedTranslate = normalize(translate);
  const normalizedSnapGrid = snapGrid.map(val => normalize(val));
  let prevSnap = snapGrid[normalizedSnapGrid.indexOf(normalizedTranslate) - 1];
  if (typeof prevSnap === 'undefined' && params.cssMode) {
    let prevSnapIndex;
    snapGrid.forEach((snap, snapIndex) => {
      if (normalizedTranslate >= snap) {
        // prevSnap = snap;
        prevSnapIndex = snapIndex;
      }
    });
    if (typeof prevSnapIndex !== 'undefined') {
      prevSnap = snapGrid[prevSnapIndex > 0 ? prevSnapIndex - 1 : prevSnapIndex];
    }
  }
  let prevIndex = 0;
  if (typeof prevSnap !== 'undefined') {
    prevIndex = slidesGrid.indexOf(prevSnap);
    if (prevIndex < 0) prevIndex = swiper.activeIndex - 1;
    if (params.slidesPerView === 'auto' && params.slidesPerGroup === 1 && params.slidesPerGroupAuto) {
      prevIndex = prevIndex - swiper.slidesPerViewDynamic('previous', true) + 1;
      prevIndex = Math.max(prevIndex, 0);
    }
  }
  if (params.rewind && swiper.isBeginning) {
    const lastIndex = swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1;
    return swiper.slideTo(lastIndex, speed, runCallbacks, internal);
  } else if (params.loop && swiper.activeIndex === 0 && params.cssMode) {
    requestAnimationFrame(() => {
      swiper.slideTo(prevIndex, speed, runCallbacks, internal);
    });
    return true;
  }
  return swiper.slideTo(prevIndex, speed, runCallbacks, internal);
}

/* eslint no-unused-vars: "off" */
function slideReset(speed, runCallbacks, internal) {
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  const swiper = this;
  return swiper.slideTo(swiper.activeIndex, speed, runCallbacks, internal);
}

/* eslint no-unused-vars: "off" */
function slideToClosest(speed, runCallbacks, internal, threshold) {
  if (speed === void 0) {
    speed = this.params.speed;
  }
  if (runCallbacks === void 0) {
    runCallbacks = true;
  }
  if (threshold === void 0) {
    threshold = 0.5;
  }
  const swiper = this;
  let index = swiper.activeIndex;
  const skip = Math.min(swiper.params.slidesPerGroupSkip, index);
  const snapIndex = skip + Math.floor((index - skip) / swiper.params.slidesPerGroup);
  const translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
  if (translate >= swiper.snapGrid[snapIndex]) {
    // The current translate is on or after the current snap index, so the choice
    // is between the current index and the one after it.
    const currentSnap = swiper.snapGrid[snapIndex];
    const nextSnap = swiper.snapGrid[snapIndex + 1];
    if (translate - currentSnap > (nextSnap - currentSnap) * threshold) {
      index += swiper.params.slidesPerGroup;
    }
  } else {
    // The current translate is before the current snap index, so the choice
    // is between the current index and the one before it.
    const prevSnap = swiper.snapGrid[snapIndex - 1];
    const currentSnap = swiper.snapGrid[snapIndex];
    if (translate - prevSnap <= (currentSnap - prevSnap) * threshold) {
      index -= swiper.params.slidesPerGroup;
    }
  }
  index = Math.max(index, 0);
  index = Math.min(index, swiper.slidesGrid.length - 1);
  return swiper.slideTo(index, speed, runCallbacks, internal);
}

function slideToClickedSlide() {
  const swiper = this;
  const {
    params,
    slidesEl
  } = swiper;
  const slidesPerView = params.slidesPerView === 'auto' ? swiper.slidesPerViewDynamic() : params.slidesPerView;
  let slideToIndex = swiper.clickedIndex;
  let realIndex;
  const slideSelector = swiper.isElement ? `swiper-slide` : `.${params.slideClass}`;
  if (params.loop) {
    if (swiper.animating) return;
    realIndex = parseInt(swiper.clickedSlide.getAttribute('data-swiper-slide-index'), 10);
    if (params.centeredSlides) {
      if (slideToIndex < swiper.loopedSlides - slidesPerView / 2 || slideToIndex > swiper.slides.length - swiper.loopedSlides + slidesPerView / 2) {
        swiper.loopFix();
        slideToIndex = swiper.getSlideIndex((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `${slideSelector}[data-swiper-slide-index="${realIndex}"]`)[0]);
        (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
          swiper.slideTo(slideToIndex);
        });
      } else {
        swiper.slideTo(slideToIndex);
      }
    } else if (slideToIndex > swiper.slides.length - slidesPerView) {
      swiper.loopFix();
      slideToIndex = swiper.getSlideIndex((0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `${slideSelector}[data-swiper-slide-index="${realIndex}"]`)[0]);
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
        swiper.slideTo(slideToIndex);
      });
    } else {
      swiper.slideTo(slideToIndex);
    }
  } else {
    swiper.slideTo(slideToIndex);
  }
}

var slide = {
  slideTo,
  slideToLoop,
  slideNext,
  slidePrev,
  slideReset,
  slideToClosest,
  slideToClickedSlide
};

function loopCreate(slideRealIndex) {
  const swiper = this;
  const {
    params,
    slidesEl
  } = swiper;
  if (!params.loop || swiper.virtual && swiper.params.virtual.enabled) return;
  const initSlides = () => {
    const slides = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `.${params.slideClass}, swiper-slide`);
    slides.forEach((el, index) => {
      el.setAttribute('data-swiper-slide-index', index);
    });
  };
  const gridEnabled = swiper.grid && params.grid && params.grid.rows > 1;
  const slidesPerGroup = params.slidesPerGroup * (gridEnabled ? params.grid.rows : 1);
  const shouldFillGroup = swiper.slides.length % slidesPerGroup !== 0;
  const shouldFillGrid = gridEnabled && swiper.slides.length % params.grid.rows !== 0;
  const addBlankSlides = amountOfSlides => {
    for (let i = 0; i < amountOfSlides; i += 1) {
      const slideEl = swiper.isElement ? (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('swiper-slide', [params.slideBlankClass]) : (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', [params.slideClass, params.slideBlankClass]);
      swiper.slidesEl.append(slideEl);
    }
  };
  if (shouldFillGroup) {
    if (params.loopAddBlankSlides) {
      const slidesToAdd = slidesPerGroup - swiper.slides.length % slidesPerGroup;
      addBlankSlides(slidesToAdd);
      swiper.recalcSlides();
      swiper.updateSlides();
    } else {
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.r)('Swiper Loop Warning: The number of slides is not even to slidesPerGroup, loop mode may not function properly. You need to add more slides (or make duplicates, or empty slides)');
    }
    initSlides();
  } else if (shouldFillGrid) {
    if (params.loopAddBlankSlides) {
      const slidesToAdd = params.grid.rows - swiper.slides.length % params.grid.rows;
      addBlankSlides(slidesToAdd);
      swiper.recalcSlides();
      swiper.updateSlides();
    } else {
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.r)('Swiper Loop Warning: The number of slides is not even to grid.rows, loop mode may not function properly. You need to add more slides (or make duplicates, or empty slides)');
    }
    initSlides();
  } else {
    initSlides();
  }
  swiper.loopFix({
    slideRealIndex,
    direction: params.centeredSlides ? undefined : 'next'
  });
}

function loopFix(_temp) {
  let {
    slideRealIndex,
    slideTo = true,
    direction,
    setTranslate,
    activeSlideIndex,
    byController,
    byMousewheel
  } = _temp === void 0 ? {} : _temp;
  const swiper = this;
  if (!swiper.params.loop) return;
  swiper.emit('beforeLoopFix');
  const {
    slides,
    allowSlidePrev,
    allowSlideNext,
    slidesEl,
    params
  } = swiper;
  const {
    centeredSlides
  } = params;
  swiper.allowSlidePrev = true;
  swiper.allowSlideNext = true;
  if (swiper.virtual && params.virtual.enabled) {
    if (slideTo) {
      if (!params.centeredSlides && swiper.snapIndex === 0) {
        swiper.slideTo(swiper.virtual.slides.length, 0, false, true);
      } else if (params.centeredSlides && swiper.snapIndex < params.slidesPerView) {
        swiper.slideTo(swiper.virtual.slides.length + swiper.snapIndex, 0, false, true);
      } else if (swiper.snapIndex === swiper.snapGrid.length - 1) {
        swiper.slideTo(swiper.virtual.slidesBefore, 0, false, true);
      }
    }
    swiper.allowSlidePrev = allowSlidePrev;
    swiper.allowSlideNext = allowSlideNext;
    swiper.emit('loopFix');
    return;
  }
  let slidesPerView = params.slidesPerView;
  if (slidesPerView === 'auto') {
    slidesPerView = swiper.slidesPerViewDynamic();
  } else {
    slidesPerView = Math.ceil(parseFloat(params.slidesPerView, 10));
    if (centeredSlides && slidesPerView % 2 === 0) {
      slidesPerView = slidesPerView + 1;
    }
  }
  const slidesPerGroup = params.slidesPerGroupAuto ? slidesPerView : params.slidesPerGroup;
  let loopedSlides = slidesPerGroup;
  if (loopedSlides % slidesPerGroup !== 0) {
    loopedSlides += slidesPerGroup - loopedSlides % slidesPerGroup;
  }
  loopedSlides += params.loopAdditionalSlides;
  swiper.loopedSlides = loopedSlides;
  const gridEnabled = swiper.grid && params.grid && params.grid.rows > 1;
  if (slides.length < slidesPerView + loopedSlides) {
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.r)('Swiper Loop Warning: The number of slides is not enough for loop mode, it will be disabled and not function properly. You need to add more slides (or make duplicates) or lower the values of slidesPerView and slidesPerGroup parameters');
  } else if (gridEnabled && params.grid.fill === 'row') {
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.r)('Swiper Loop Warning: Loop mode is not compatible with grid.fill = `row`');
  }
  const prependSlidesIndexes = [];
  const appendSlidesIndexes = [];
  let activeIndex = swiper.activeIndex;
  if (typeof activeSlideIndex === 'undefined') {
    activeSlideIndex = swiper.getSlideIndex(slides.filter(el => el.classList.contains(params.slideActiveClass))[0]);
  } else {
    activeIndex = activeSlideIndex;
  }
  const isNext = direction === 'next' || !direction;
  const isPrev = direction === 'prev' || !direction;
  let slidesPrepended = 0;
  let slidesAppended = 0;
  const cols = gridEnabled ? Math.ceil(slides.length / params.grid.rows) : slides.length;
  const activeColIndex = gridEnabled ? slides[activeSlideIndex].column : activeSlideIndex;
  const activeColIndexWithShift = activeColIndex + (centeredSlides && typeof setTranslate === 'undefined' ? -slidesPerView / 2 + 0.5 : 0);
  // prepend last slides before start
  if (activeColIndexWithShift < loopedSlides) {
    slidesPrepended = Math.max(loopedSlides - activeColIndexWithShift, slidesPerGroup);
    for (let i = 0; i < loopedSlides - activeColIndexWithShift; i += 1) {
      const index = i - Math.floor(i / cols) * cols;
      if (gridEnabled) {
        const colIndexToPrepend = cols - index - 1;
        for (let i = slides.length - 1; i >= 0; i -= 1) {
          if (slides[i].column === colIndexToPrepend) prependSlidesIndexes.push(i);
        }
        // slides.forEach((slide, slideIndex) => {
        //   if (slide.column === colIndexToPrepend) prependSlidesIndexes.push(slideIndex);
        // });
      } else {
        prependSlidesIndexes.push(cols - index - 1);
      }
    }
  } else if (activeColIndexWithShift + slidesPerView > cols - loopedSlides) {
    slidesAppended = Math.max(activeColIndexWithShift - (cols - loopedSlides * 2), slidesPerGroup);
    for (let i = 0; i < slidesAppended; i += 1) {
      const index = i - Math.floor(i / cols) * cols;
      if (gridEnabled) {
        slides.forEach((slide, slideIndex) => {
          if (slide.column === index) appendSlidesIndexes.push(slideIndex);
        });
      } else {
        appendSlidesIndexes.push(index);
      }
    }
  }
  swiper.__preventObserver__ = true;
  requestAnimationFrame(() => {
    swiper.__preventObserver__ = false;
  });
  if (isPrev) {
    prependSlidesIndexes.forEach(index => {
      slides[index].swiperLoopMoveDOM = true;
      slidesEl.prepend(slides[index]);
      slides[index].swiperLoopMoveDOM = false;
    });
  }
  if (isNext) {
    appendSlidesIndexes.forEach(index => {
      slides[index].swiperLoopMoveDOM = true;
      slidesEl.append(slides[index]);
      slides[index].swiperLoopMoveDOM = false;
    });
  }
  swiper.recalcSlides();
  if (params.slidesPerView === 'auto') {
    swiper.updateSlides();
  } else if (gridEnabled && (prependSlidesIndexes.length > 0 && isPrev || appendSlidesIndexes.length > 0 && isNext)) {
    swiper.slides.forEach((slide, slideIndex) => {
      swiper.grid.updateSlide(slideIndex, slide, swiper.slides);
    });
  }
  if (params.watchSlidesProgress) {
    swiper.updateSlidesOffset();
  }
  if (slideTo) {
    if (prependSlidesIndexes.length > 0 && isPrev) {
      if (typeof slideRealIndex === 'undefined') {
        const currentSlideTranslate = swiper.slidesGrid[activeIndex];
        const newSlideTranslate = swiper.slidesGrid[activeIndex + slidesPrepended];
        const diff = newSlideTranslate - currentSlideTranslate;
        if (byMousewheel) {
          swiper.setTranslate(swiper.translate - diff);
        } else {
          swiper.slideTo(activeIndex + slidesPrepended, 0, false, true);
          if (setTranslate) {
            swiper.touchEventsData.startTranslate = swiper.touchEventsData.startTranslate - diff;
            swiper.touchEventsData.currentTranslate = swiper.touchEventsData.currentTranslate - diff;
          }
        }
      } else {
        if (setTranslate) {
          const shift = gridEnabled ? prependSlidesIndexes.length / params.grid.rows : prependSlidesIndexes.length;
          swiper.slideTo(swiper.activeIndex + shift, 0, false, true);
          swiper.touchEventsData.currentTranslate = swiper.translate;
        }
      }
    } else if (appendSlidesIndexes.length > 0 && isNext) {
      if (typeof slideRealIndex === 'undefined') {
        const currentSlideTranslate = swiper.slidesGrid[activeIndex];
        const newSlideTranslate = swiper.slidesGrid[activeIndex - slidesAppended];
        const diff = newSlideTranslate - currentSlideTranslate;
        if (byMousewheel) {
          swiper.setTranslate(swiper.translate - diff);
        } else {
          swiper.slideTo(activeIndex - slidesAppended, 0, false, true);
          if (setTranslate) {
            swiper.touchEventsData.startTranslate = swiper.touchEventsData.startTranslate - diff;
            swiper.touchEventsData.currentTranslate = swiper.touchEventsData.currentTranslate - diff;
          }
        }
      } else {
        const shift = gridEnabled ? appendSlidesIndexes.length / params.grid.rows : appendSlidesIndexes.length;
        swiper.slideTo(swiper.activeIndex - shift, 0, false, true);
      }
    }
  }
  swiper.allowSlidePrev = allowSlidePrev;
  swiper.allowSlideNext = allowSlideNext;
  if (swiper.controller && swiper.controller.control && !byController) {
    const loopParams = {
      slideRealIndex,
      direction,
      setTranslate,
      activeSlideIndex,
      byController: true
    };
    if (Array.isArray(swiper.controller.control)) {
      swiper.controller.control.forEach(c => {
        if (!c.destroyed && c.params.loop) c.loopFix({
          ...loopParams,
          slideTo: c.params.slidesPerView === params.slidesPerView ? slideTo : false
        });
      });
    } else if (swiper.controller.control instanceof swiper.constructor && swiper.controller.control.params.loop) {
      swiper.controller.control.loopFix({
        ...loopParams,
        slideTo: swiper.controller.control.params.slidesPerView === params.slidesPerView ? slideTo : false
      });
    }
  }
  swiper.emit('loopFix');
}

function loopDestroy() {
  const swiper = this;
  const {
    params,
    slidesEl
  } = swiper;
  if (!params.loop || swiper.virtual && swiper.params.virtual.enabled) return;
  swiper.recalcSlides();
  const newSlidesOrder = [];
  swiper.slides.forEach(slideEl => {
    const index = typeof slideEl.swiperSlideIndex === 'undefined' ? slideEl.getAttribute('data-swiper-slide-index') * 1 : slideEl.swiperSlideIndex;
    newSlidesOrder[index] = slideEl;
  });
  swiper.slides.forEach(slideEl => {
    slideEl.removeAttribute('data-swiper-slide-index');
  });
  newSlidesOrder.forEach(slideEl => {
    slidesEl.append(slideEl);
  });
  swiper.recalcSlides();
  swiper.slideTo(swiper.realIndex, 0);
}

var loop = {
  loopCreate,
  loopFix,
  loopDestroy
};

function setGrabCursor(moving) {
  const swiper = this;
  if (!swiper.params.simulateTouch || swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) return;
  const el = swiper.params.touchEventsTarget === 'container' ? swiper.el : swiper.wrapperEl;
  if (swiper.isElement) {
    swiper.__preventObserver__ = true;
  }
  el.style.cursor = 'move';
  el.style.cursor = moving ? 'grabbing' : 'grab';
  if (swiper.isElement) {
    requestAnimationFrame(() => {
      swiper.__preventObserver__ = false;
    });
  }
}

function unsetGrabCursor() {
  const swiper = this;
  if (swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) {
    return;
  }
  if (swiper.isElement) {
    swiper.__preventObserver__ = true;
  }
  swiper[swiper.params.touchEventsTarget === 'container' ? 'el' : 'wrapperEl'].style.cursor = '';
  if (swiper.isElement) {
    requestAnimationFrame(() => {
      swiper.__preventObserver__ = false;
    });
  }
}

var grabCursor = {
  setGrabCursor,
  unsetGrabCursor
};

// Modified from https://stackoverflow.com/questions/54520554/custom-element-getrootnode-closest-function-crossing-multiple-parent-shadowd
function closestElement(selector, base) {
  if (base === void 0) {
    base = this;
  }
  function __closestFrom(el) {
    if (!el || el === (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)() || el === (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)()) return null;
    if (el.assignedSlot) el = el.assignedSlot;
    const found = el.closest(selector);
    if (!found && !el.getRootNode) {
      return null;
    }
    return found || __closestFrom(el.getRootNode().host);
  }
  return __closestFrom(base);
}
function preventEdgeSwipe(swiper, event, startX) {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const {
    params
  } = swiper;
  const edgeSwipeDetection = params.edgeSwipeDetection;
  const edgeSwipeThreshold = params.edgeSwipeThreshold;
  if (edgeSwipeDetection && (startX <= edgeSwipeThreshold || startX >= window.innerWidth - edgeSwipeThreshold)) {
    if (edgeSwipeDetection === 'prevent') {
      event.preventDefault();
      return true;
    }
    return false;
  }
  return true;
}
function onTouchStart(event) {
  const swiper = this;
  const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  let e = event;
  if (e.originalEvent) e = e.originalEvent;
  const data = swiper.touchEventsData;
  if (e.type === 'pointerdown') {
    if (data.pointerId !== null && data.pointerId !== e.pointerId) {
      return;
    }
    data.pointerId = e.pointerId;
  } else if (e.type === 'touchstart' && e.targetTouches.length === 1) {
    data.touchId = e.targetTouches[0].identifier;
  }
  if (e.type === 'touchstart') {
    // don't proceed touch event
    preventEdgeSwipe(swiper, e, e.targetTouches[0].pageX);
    return;
  }
  const {
    params,
    touches,
    enabled
  } = swiper;
  if (!enabled) return;
  if (!params.simulateTouch && e.pointerType === 'mouse') return;
  if (swiper.animating && params.preventInteractionOnTransition) {
    return;
  }
  if (!swiper.animating && params.cssMode && params.loop) {
    swiper.loopFix();
  }
  let targetEl = e.target;
  if (params.touchEventsTarget === 'wrapper') {
    if (!swiper.wrapperEl.contains(targetEl)) return;
  }
  if ('which' in e && e.which === 3) return;
  if ('button' in e && e.button > 0) return;
  if (data.isTouched && data.isMoved) return;

  // change target el for shadow root component
  const swipingClassHasValue = !!params.noSwipingClass && params.noSwipingClass !== '';
  // eslint-disable-next-line
  const eventPath = e.composedPath ? e.composedPath() : e.path;
  if (swipingClassHasValue && e.target && e.target.shadowRoot && eventPath) {
    targetEl = eventPath[0];
  }
  const noSwipingSelector = params.noSwipingSelector ? params.noSwipingSelector : `.${params.noSwipingClass}`;
  const isTargetShadow = !!(e.target && e.target.shadowRoot);

  // use closestElement for shadow root element to get the actual closest for nested shadow root element
  if (params.noSwiping && (isTargetShadow ? closestElement(noSwipingSelector, targetEl) : targetEl.closest(noSwipingSelector))) {
    swiper.allowClick = true;
    return;
  }
  if (params.swipeHandler) {
    if (!targetEl.closest(params.swipeHandler)) return;
  }
  touches.currentX = e.pageX;
  touches.currentY = e.pageY;
  const startX = touches.currentX;
  const startY = touches.currentY;

  // Do NOT start if iOS edge swipe is detected. Otherwise iOS app cannot swipe-to-go-back anymore

  if (!preventEdgeSwipe(swiper, e, startX)) {
    return;
  }
  Object.assign(data, {
    isTouched: true,
    isMoved: false,
    allowTouchCallbacks: true,
    isScrolling: undefined,
    startMoving: undefined
  });
  touches.startX = startX;
  touches.startY = startY;
  data.touchStartTime = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)();
  swiper.allowClick = true;
  swiper.updateSize();
  swiper.swipeDirection = undefined;
  if (params.threshold > 0) data.allowThresholdMove = false;
  let preventDefault = true;
  if (targetEl.matches(data.focusableElements)) {
    preventDefault = false;
    if (targetEl.nodeName === 'SELECT') {
      data.isTouched = false;
    }
  }
  if (document.activeElement && document.activeElement.matches(data.focusableElements) && document.activeElement !== targetEl) {
    document.activeElement.blur();
  }
  const shouldPreventDefault = preventDefault && swiper.allowTouchMove && params.touchStartPreventDefault;
  if ((params.touchStartForcePreventDefault || shouldPreventDefault) && !targetEl.isContentEditable) {
    e.preventDefault();
  }
  if (params.freeMode && params.freeMode.enabled && swiper.freeMode && swiper.animating && !params.cssMode) {
    swiper.freeMode.onTouchStart();
  }
  swiper.emit('touchStart', e);
}

function onTouchMove(event) {
  const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  const swiper = this;
  const data = swiper.touchEventsData;
  const {
    params,
    touches,
    rtlTranslate: rtl,
    enabled
  } = swiper;
  if (!enabled) return;
  if (!params.simulateTouch && event.pointerType === 'mouse') return;
  let e = event;
  if (e.originalEvent) e = e.originalEvent;
  if (e.type === 'pointermove') {
    if (data.touchId !== null) return; // return from pointer if we use touch
    const id = e.pointerId;
    if (id !== data.pointerId) return;
  }
  let targetTouch;
  if (e.type === 'touchmove') {
    targetTouch = [...e.changedTouches].filter(t => t.identifier === data.touchId)[0];
    if (!targetTouch || targetTouch.identifier !== data.touchId) return;
  } else {
    targetTouch = e;
  }
  if (!data.isTouched) {
    if (data.startMoving && data.isScrolling) {
      swiper.emit('touchMoveOpposite', e);
    }
    return;
  }
  const pageX = targetTouch.pageX;
  const pageY = targetTouch.pageY;
  if (e.preventedByNestedSwiper) {
    touches.startX = pageX;
    touches.startY = pageY;
    return;
  }
  if (!swiper.allowTouchMove) {
    if (!e.target.matches(data.focusableElements)) {
      swiper.allowClick = false;
    }
    if (data.isTouched) {
      Object.assign(touches, {
        startX: pageX,
        startY: pageY,
        currentX: pageX,
        currentY: pageY
      });
      data.touchStartTime = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)();
    }
    return;
  }
  if (params.touchReleaseOnEdges && !params.loop) {
    if (swiper.isVertical()) {
      // Vertical
      if (pageY < touches.startY && swiper.translate <= swiper.maxTranslate() || pageY > touches.startY && swiper.translate >= swiper.minTranslate()) {
        data.isTouched = false;
        data.isMoved = false;
        return;
      }
    } else if (pageX < touches.startX && swiper.translate <= swiper.maxTranslate() || pageX > touches.startX && swiper.translate >= swiper.minTranslate()) {
      return;
    }
  }
  if (document.activeElement) {
    if (e.target === document.activeElement && e.target.matches(data.focusableElements)) {
      data.isMoved = true;
      swiper.allowClick = false;
      return;
    }
  }
  if (data.allowTouchCallbacks) {
    swiper.emit('touchMove', e);
  }
  touches.previousX = touches.currentX;
  touches.previousY = touches.currentY;
  touches.currentX = pageX;
  touches.currentY = pageY;
  const diffX = touches.currentX - touches.startX;
  const diffY = touches.currentY - touches.startY;
  if (swiper.params.threshold && Math.sqrt(diffX ** 2 + diffY ** 2) < swiper.params.threshold) return;
  if (typeof data.isScrolling === 'undefined') {
    let touchAngle;
    if (swiper.isHorizontal() && touches.currentY === touches.startY || swiper.isVertical() && touches.currentX === touches.startX) {
      data.isScrolling = false;
    } else {
      // eslint-disable-next-line
      if (diffX * diffX + diffY * diffY >= 25) {
        touchAngle = Math.atan2(Math.abs(diffY), Math.abs(diffX)) * 180 / Math.PI;
        data.isScrolling = swiper.isHorizontal() ? touchAngle > params.touchAngle : 90 - touchAngle > params.touchAngle;
      }
    }
  }
  if (data.isScrolling) {
    swiper.emit('touchMoveOpposite', e);
  }
  if (typeof data.startMoving === 'undefined') {
    if (touches.currentX !== touches.startX || touches.currentY !== touches.startY) {
      data.startMoving = true;
    }
  }
  if (data.isScrolling) {
    data.isTouched = false;
    return;
  }
  if (!data.startMoving) {
    return;
  }
  swiper.allowClick = false;
  if (!params.cssMode && e.cancelable) {
    e.preventDefault();
  }
  if (params.touchMoveStopPropagation && !params.nested) {
    e.stopPropagation();
  }
  let diff = swiper.isHorizontal() ? diffX : diffY;
  let touchesDiff = swiper.isHorizontal() ? touches.currentX - touches.previousX : touches.currentY - touches.previousY;
  if (params.oneWayMovement) {
    diff = Math.abs(diff) * (rtl ? 1 : -1);
    touchesDiff = Math.abs(touchesDiff) * (rtl ? 1 : -1);
  }
  touches.diff = diff;
  diff *= params.touchRatio;
  if (rtl) {
    diff = -diff;
    touchesDiff = -touchesDiff;
  }
  const prevTouchesDirection = swiper.touchesDirection;
  swiper.swipeDirection = diff > 0 ? 'prev' : 'next';
  swiper.touchesDirection = touchesDiff > 0 ? 'prev' : 'next';
  const isLoop = swiper.params.loop && !params.cssMode;
  const allowLoopFix = swiper.touchesDirection === 'next' && swiper.allowSlideNext || swiper.touchesDirection === 'prev' && swiper.allowSlidePrev;
  if (!data.isMoved) {
    if (isLoop && allowLoopFix) {
      swiper.loopFix({
        direction: swiper.swipeDirection
      });
    }
    data.startTranslate = swiper.getTranslate();
    swiper.setTransition(0);
    if (swiper.animating) {
      const evt = new window.CustomEvent('transitionend', {
        bubbles: true,
        cancelable: true
      });
      swiper.wrapperEl.dispatchEvent(evt);
    }
    data.allowMomentumBounce = false;
    // Grab Cursor
    if (params.grabCursor && (swiper.allowSlideNext === true || swiper.allowSlidePrev === true)) {
      swiper.setGrabCursor(true);
    }
    swiper.emit('sliderFirstMove', e);
  }
  let loopFixed;
  new Date().getTime();
  if (data.isMoved && data.allowThresholdMove && prevTouchesDirection !== swiper.touchesDirection && isLoop && allowLoopFix && Math.abs(diff) >= 1) {
    Object.assign(touches, {
      startX: pageX,
      startY: pageY,
      currentX: pageX,
      currentY: pageY,
      startTranslate: data.currentTranslate
    });
    data.loopSwapReset = true;
    data.startTranslate = data.currentTranslate;
    return;
  }
  swiper.emit('sliderMove', e);
  data.isMoved = true;
  data.currentTranslate = diff + data.startTranslate;
  let disableParentSwiper = true;
  let resistanceRatio = params.resistanceRatio;
  if (params.touchReleaseOnEdges) {
    resistanceRatio = 0;
  }
  if (diff > 0) {
    if (isLoop && allowLoopFix && !loopFixed && data.allowThresholdMove && data.currentTranslate > (params.centeredSlides ? swiper.minTranslate() - swiper.slidesSizesGrid[swiper.activeIndex + 1] : swiper.minTranslate())) {
      swiper.loopFix({
        direction: 'prev',
        setTranslate: true,
        activeSlideIndex: 0
      });
    }
    if (data.currentTranslate > swiper.minTranslate()) {
      disableParentSwiper = false;
      if (params.resistance) {
        data.currentTranslate = swiper.minTranslate() - 1 + (-swiper.minTranslate() + data.startTranslate + diff) ** resistanceRatio;
      }
    }
  } else if (diff < 0) {
    if (isLoop && allowLoopFix && !loopFixed && data.allowThresholdMove && data.currentTranslate < (params.centeredSlides ? swiper.maxTranslate() + swiper.slidesSizesGrid[swiper.slidesSizesGrid.length - 1] : swiper.maxTranslate())) {
      swiper.loopFix({
        direction: 'next',
        setTranslate: true,
        activeSlideIndex: swiper.slides.length - (params.slidesPerView === 'auto' ? swiper.slidesPerViewDynamic() : Math.ceil(parseFloat(params.slidesPerView, 10)))
      });
    }
    if (data.currentTranslate < swiper.maxTranslate()) {
      disableParentSwiper = false;
      if (params.resistance) {
        data.currentTranslate = swiper.maxTranslate() + 1 - (swiper.maxTranslate() - data.startTranslate - diff) ** resistanceRatio;
      }
    }
  }
  if (disableParentSwiper) {
    e.preventedByNestedSwiper = true;
  }

  // Directions locks
  if (!swiper.allowSlideNext && swiper.swipeDirection === 'next' && data.currentTranslate < data.startTranslate) {
    data.currentTranslate = data.startTranslate;
  }
  if (!swiper.allowSlidePrev && swiper.swipeDirection === 'prev' && data.currentTranslate > data.startTranslate) {
    data.currentTranslate = data.startTranslate;
  }
  if (!swiper.allowSlidePrev && !swiper.allowSlideNext) {
    data.currentTranslate = data.startTranslate;
  }

  // Threshold
  if (params.threshold > 0) {
    if (Math.abs(diff) > params.threshold || data.allowThresholdMove) {
      if (!data.allowThresholdMove) {
        data.allowThresholdMove = true;
        touches.startX = touches.currentX;
        touches.startY = touches.currentY;
        data.currentTranslate = data.startTranslate;
        touches.diff = swiper.isHorizontal() ? touches.currentX - touches.startX : touches.currentY - touches.startY;
        return;
      }
    } else {
      data.currentTranslate = data.startTranslate;
      return;
    }
  }
  if (!params.followFinger || params.cssMode) return;

  // Update active index in free mode
  if (params.freeMode && params.freeMode.enabled && swiper.freeMode || params.watchSlidesProgress) {
    swiper.updateActiveIndex();
    swiper.updateSlidesClasses();
  }
  if (params.freeMode && params.freeMode.enabled && swiper.freeMode) {
    swiper.freeMode.onTouchMove();
  }
  // Update progress
  swiper.updateProgress(data.currentTranslate);
  // Update translate
  swiper.setTranslate(data.currentTranslate);
}

function onTouchEnd(event) {
  const swiper = this;
  const data = swiper.touchEventsData;
  let e = event;
  if (e.originalEvent) e = e.originalEvent;
  let targetTouch;
  const isTouchEvent = e.type === 'touchend' || e.type === 'touchcancel';
  if (!isTouchEvent) {
    if (data.touchId !== null) return; // return from pointer if we use touch
    if (e.pointerId !== data.pointerId) return;
    targetTouch = e;
  } else {
    targetTouch = [...e.changedTouches].filter(t => t.identifier === data.touchId)[0];
    if (!targetTouch || targetTouch.identifier !== data.touchId) return;
  }
  if (['pointercancel', 'pointerout', 'pointerleave', 'contextmenu'].includes(e.type)) {
    const proceed = ['pointercancel', 'contextmenu'].includes(e.type) && (swiper.browser.isSafari || swiper.browser.isWebView);
    if (!proceed) {
      return;
    }
  }
  data.pointerId = null;
  data.touchId = null;
  const {
    params,
    touches,
    rtlTranslate: rtl,
    slidesGrid,
    enabled
  } = swiper;
  if (!enabled) return;
  if (!params.simulateTouch && e.pointerType === 'mouse') return;
  if (data.allowTouchCallbacks) {
    swiper.emit('touchEnd', e);
  }
  data.allowTouchCallbacks = false;
  if (!data.isTouched) {
    if (data.isMoved && params.grabCursor) {
      swiper.setGrabCursor(false);
    }
    data.isMoved = false;
    data.startMoving = false;
    return;
  }

  // Return Grab Cursor
  if (params.grabCursor && data.isMoved && data.isTouched && (swiper.allowSlideNext === true || swiper.allowSlidePrev === true)) {
    swiper.setGrabCursor(false);
  }

  // Time diff
  const touchEndTime = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)();
  const timeDiff = touchEndTime - data.touchStartTime;

  // Tap, doubleTap, Click
  if (swiper.allowClick) {
    const pathTree = e.path || e.composedPath && e.composedPath();
    swiper.updateClickedSlide(pathTree && pathTree[0] || e.target, pathTree);
    swiper.emit('tap click', e);
    if (timeDiff < 300 && touchEndTime - data.lastClickTime < 300) {
      swiper.emit('doubleTap doubleClick', e);
    }
  }
  data.lastClickTime = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.d)();
  (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.n)(() => {
    if (!swiper.destroyed) swiper.allowClick = true;
  });
  if (!data.isTouched || !data.isMoved || !swiper.swipeDirection || touches.diff === 0 && !data.loopSwapReset || data.currentTranslate === data.startTranslate && !data.loopSwapReset) {
    data.isTouched = false;
    data.isMoved = false;
    data.startMoving = false;
    return;
  }
  data.isTouched = false;
  data.isMoved = false;
  data.startMoving = false;
  let currentPos;
  if (params.followFinger) {
    currentPos = rtl ? swiper.translate : -swiper.translate;
  } else {
    currentPos = -data.currentTranslate;
  }
  if (params.cssMode) {
    return;
  }
  if (params.freeMode && params.freeMode.enabled) {
    swiper.freeMode.onTouchEnd({
      currentPos
    });
    return;
  }

  // Find current slide
  const swipeToLast = currentPos >= -swiper.maxTranslate() && !swiper.params.loop;
  let stopIndex = 0;
  let groupSize = swiper.slidesSizesGrid[0];
  for (let i = 0; i < slidesGrid.length; i += i < params.slidesPerGroupSkip ? 1 : params.slidesPerGroup) {
    const increment = i < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
    if (typeof slidesGrid[i + increment] !== 'undefined') {
      if (swipeToLast || currentPos >= slidesGrid[i] && currentPos < slidesGrid[i + increment]) {
        stopIndex = i;
        groupSize = slidesGrid[i + increment] - slidesGrid[i];
      }
    } else if (swipeToLast || currentPos >= slidesGrid[i]) {
      stopIndex = i;
      groupSize = slidesGrid[slidesGrid.length - 1] - slidesGrid[slidesGrid.length - 2];
    }
  }
  let rewindFirstIndex = null;
  let rewindLastIndex = null;
  if (params.rewind) {
    if (swiper.isBeginning) {
      rewindLastIndex = params.virtual && params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1;
    } else if (swiper.isEnd) {
      rewindFirstIndex = 0;
    }
  }
  // Find current slide size
  const ratio = (currentPos - slidesGrid[stopIndex]) / groupSize;
  const increment = stopIndex < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
  if (timeDiff > params.longSwipesMs) {
    // Long touches
    if (!params.longSwipes) {
      swiper.slideTo(swiper.activeIndex);
      return;
    }
    if (swiper.swipeDirection === 'next') {
      if (ratio >= params.longSwipesRatio) swiper.slideTo(params.rewind && swiper.isEnd ? rewindFirstIndex : stopIndex + increment);else swiper.slideTo(stopIndex);
    }
    if (swiper.swipeDirection === 'prev') {
      if (ratio > 1 - params.longSwipesRatio) {
        swiper.slideTo(stopIndex + increment);
      } else if (rewindLastIndex !== null && ratio < 0 && Math.abs(ratio) > params.longSwipesRatio) {
        swiper.slideTo(rewindLastIndex);
      } else {
        swiper.slideTo(stopIndex);
      }
    }
  } else {
    // Short swipes
    if (!params.shortSwipes) {
      swiper.slideTo(swiper.activeIndex);
      return;
    }
    const isNavButtonTarget = swiper.navigation && (e.target === swiper.navigation.nextEl || e.target === swiper.navigation.prevEl);
    if (!isNavButtonTarget) {
      if (swiper.swipeDirection === 'next') {
        swiper.slideTo(rewindFirstIndex !== null ? rewindFirstIndex : stopIndex + increment);
      }
      if (swiper.swipeDirection === 'prev') {
        swiper.slideTo(rewindLastIndex !== null ? rewindLastIndex : stopIndex);
      }
    } else if (e.target === swiper.navigation.nextEl) {
      swiper.slideTo(stopIndex + increment);
    } else {
      swiper.slideTo(stopIndex);
    }
  }
}

function onResize() {
  const swiper = this;
  const {
    params,
    el
  } = swiper;
  if (el && el.offsetWidth === 0) return;

  // Breakpoints
  if (params.breakpoints) {
    swiper.setBreakpoint();
  }

  // Save locks
  const {
    allowSlideNext,
    allowSlidePrev,
    snapGrid
  } = swiper;
  const isVirtual = swiper.virtual && swiper.params.virtual.enabled;

  // Disable locks on resize
  swiper.allowSlideNext = true;
  swiper.allowSlidePrev = true;
  swiper.updateSize();
  swiper.updateSlides();
  swiper.updateSlidesClasses();
  const isVirtualLoop = isVirtual && params.loop;
  if ((params.slidesPerView === 'auto' || params.slidesPerView > 1) && swiper.isEnd && !swiper.isBeginning && !swiper.params.centeredSlides && !isVirtualLoop) {
    swiper.slideTo(swiper.slides.length - 1, 0, false, true);
  } else {
    if (swiper.params.loop && !isVirtual) {
      swiper.slideToLoop(swiper.realIndex, 0, false, true);
    } else {
      swiper.slideTo(swiper.activeIndex, 0, false, true);
    }
  }
  if (swiper.autoplay && swiper.autoplay.running && swiper.autoplay.paused) {
    clearTimeout(swiper.autoplay.resizeTimeout);
    swiper.autoplay.resizeTimeout = setTimeout(() => {
      if (swiper.autoplay && swiper.autoplay.running && swiper.autoplay.paused) {
        swiper.autoplay.resume();
      }
    }, 500);
  }
  // Return locks after resize
  swiper.allowSlidePrev = allowSlidePrev;
  swiper.allowSlideNext = allowSlideNext;
  if (swiper.params.watchOverflow && snapGrid !== swiper.snapGrid) {
    swiper.checkOverflow();
  }
}

function onClick(e) {
  const swiper = this;
  if (!swiper.enabled) return;
  if (!swiper.allowClick) {
    if (swiper.params.preventClicks) e.preventDefault();
    if (swiper.params.preventClicksPropagation && swiper.animating) {
      e.stopPropagation();
      e.stopImmediatePropagation();
    }
  }
}

function onScroll() {
  const swiper = this;
  const {
    wrapperEl,
    rtlTranslate,
    enabled
  } = swiper;
  if (!enabled) return;
  swiper.previousTranslate = swiper.translate;
  if (swiper.isHorizontal()) {
    swiper.translate = -wrapperEl.scrollLeft;
  } else {
    swiper.translate = -wrapperEl.scrollTop;
  }
  // eslint-disable-next-line
  if (swiper.translate === 0) swiper.translate = 0;
  swiper.updateActiveIndex();
  swiper.updateSlidesClasses();
  let newProgress;
  const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
  if (translatesDiff === 0) {
    newProgress = 0;
  } else {
    newProgress = (swiper.translate - swiper.minTranslate()) / translatesDiff;
  }
  if (newProgress !== swiper.progress) {
    swiper.updateProgress(rtlTranslate ? -swiper.translate : swiper.translate);
  }
  swiper.emit('setTranslate', swiper.translate, false);
}

function onLoad(e) {
  const swiper = this;
  processLazyPreloader(swiper, e.target);
  if (swiper.params.cssMode || swiper.params.slidesPerView !== 'auto' && !swiper.params.autoHeight) {
    return;
  }
  swiper.update();
}

function onDocumentTouchStart() {
  const swiper = this;
  if (swiper.documentTouchHandlerProceeded) return;
  swiper.documentTouchHandlerProceeded = true;
  if (swiper.params.touchReleaseOnEdges) {
    swiper.el.style.touchAction = 'auto';
  }
}

const events = (swiper, method) => {
  const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  const {
    params,
    el,
    wrapperEl,
    device
  } = swiper;
  const capture = !!params.nested;
  const domMethod = method === 'on' ? 'addEventListener' : 'removeEventListener';
  const swiperMethod = method;

  // Touch Events
  document[domMethod]('touchstart', swiper.onDocumentTouchStart, {
    passive: false,
    capture
  });
  el[domMethod]('touchstart', swiper.onTouchStart, {
    passive: false
  });
  el[domMethod]('pointerdown', swiper.onTouchStart, {
    passive: false
  });
  document[domMethod]('touchmove', swiper.onTouchMove, {
    passive: false,
    capture
  });
  document[domMethod]('pointermove', swiper.onTouchMove, {
    passive: false,
    capture
  });
  document[domMethod]('touchend', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('pointerup', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('pointercancel', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('touchcancel', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('pointerout', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('pointerleave', swiper.onTouchEnd, {
    passive: true
  });
  document[domMethod]('contextmenu', swiper.onTouchEnd, {
    passive: true
  });

  // Prevent Links Clicks
  if (params.preventClicks || params.preventClicksPropagation) {
    el[domMethod]('click', swiper.onClick, true);
  }
  if (params.cssMode) {
    wrapperEl[domMethod]('scroll', swiper.onScroll);
  }

  // Resize handler
  if (params.updateOnWindowResize) {
    swiper[swiperMethod](device.ios || device.android ? 'resize orientationchange observerUpdate' : 'resize observerUpdate', onResize, true);
  } else {
    swiper[swiperMethod]('observerUpdate', onResize, true);
  }

  // Images loader
  el[domMethod]('load', swiper.onLoad, {
    capture: true
  });
};
function attachEvents() {
  const swiper = this;
  const {
    params
  } = swiper;
  swiper.onTouchStart = onTouchStart.bind(swiper);
  swiper.onTouchMove = onTouchMove.bind(swiper);
  swiper.onTouchEnd = onTouchEnd.bind(swiper);
  swiper.onDocumentTouchStart = onDocumentTouchStart.bind(swiper);
  if (params.cssMode) {
    swiper.onScroll = onScroll.bind(swiper);
  }
  swiper.onClick = onClick.bind(swiper);
  swiper.onLoad = onLoad.bind(swiper);
  events(swiper, 'on');
}
function detachEvents() {
  const swiper = this;
  events(swiper, 'off');
}
var events$1 = {
  attachEvents,
  detachEvents
};

const isGridEnabled = (swiper, params) => {
  return swiper.grid && params.grid && params.grid.rows > 1;
};
function setBreakpoint() {
  const swiper = this;
  const {
    realIndex,
    initialized,
    params,
    el
  } = swiper;
  const breakpoints = params.breakpoints;
  if (!breakpoints || breakpoints && Object.keys(breakpoints).length === 0) return;

  // Get breakpoint for window width and update parameters
  const breakpoint = swiper.getBreakpoint(breakpoints, swiper.params.breakpointsBase, swiper.el);
  if (!breakpoint || swiper.currentBreakpoint === breakpoint) return;
  const breakpointOnlyParams = breakpoint in breakpoints ? breakpoints[breakpoint] : undefined;
  const breakpointParams = breakpointOnlyParams || swiper.originalParams;
  const wasMultiRow = isGridEnabled(swiper, params);
  const isMultiRow = isGridEnabled(swiper, breakpointParams);
  const wasEnabled = params.enabled;
  if (wasMultiRow && !isMultiRow) {
    el.classList.remove(`${params.containerModifierClass}grid`, `${params.containerModifierClass}grid-column`);
    swiper.emitContainerClasses();
  } else if (!wasMultiRow && isMultiRow) {
    el.classList.add(`${params.containerModifierClass}grid`);
    if (breakpointParams.grid.fill && breakpointParams.grid.fill === 'column' || !breakpointParams.grid.fill && params.grid.fill === 'column') {
      el.classList.add(`${params.containerModifierClass}grid-column`);
    }
    swiper.emitContainerClasses();
  }

  // Toggle navigation, pagination, scrollbar
  ['navigation', 'pagination', 'scrollbar'].forEach(prop => {
    if (typeof breakpointParams[prop] === 'undefined') return;
    const wasModuleEnabled = params[prop] && params[prop].enabled;
    const isModuleEnabled = breakpointParams[prop] && breakpointParams[prop].enabled;
    if (wasModuleEnabled && !isModuleEnabled) {
      swiper[prop].disable();
    }
    if (!wasModuleEnabled && isModuleEnabled) {
      swiper[prop].enable();
    }
  });
  const directionChanged = breakpointParams.direction && breakpointParams.direction !== params.direction;
  const needsReLoop = params.loop && (breakpointParams.slidesPerView !== params.slidesPerView || directionChanged);
  const wasLoop = params.loop;
  if (directionChanged && initialized) {
    swiper.changeDirection();
  }
  (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)(swiper.params, breakpointParams);
  const isEnabled = swiper.params.enabled;
  const hasLoop = swiper.params.loop;
  Object.assign(swiper, {
    allowTouchMove: swiper.params.allowTouchMove,
    allowSlideNext: swiper.params.allowSlideNext,
    allowSlidePrev: swiper.params.allowSlidePrev
  });
  if (wasEnabled && !isEnabled) {
    swiper.disable();
  } else if (!wasEnabled && isEnabled) {
    swiper.enable();
  }
  swiper.currentBreakpoint = breakpoint;
  swiper.emit('_beforeBreakpoint', breakpointParams);
  if (initialized) {
    if (needsReLoop) {
      swiper.loopDestroy();
      swiper.loopCreate(realIndex);
      swiper.updateSlides();
    } else if (!wasLoop && hasLoop) {
      swiper.loopCreate(realIndex);
      swiper.updateSlides();
    } else if (wasLoop && !hasLoop) {
      swiper.loopDestroy();
    }
  }
  swiper.emit('breakpoint', breakpointParams);
}

function getBreakpoint(breakpoints, base, containerEl) {
  if (base === void 0) {
    base = 'window';
  }
  if (!breakpoints || base === 'container' && !containerEl) return undefined;
  let breakpoint = false;
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const currentHeight = base === 'window' ? window.innerHeight : containerEl.clientHeight;
  const points = Object.keys(breakpoints).map(point => {
    if (typeof point === 'string' && point.indexOf('@') === 0) {
      const minRatio = parseFloat(point.substr(1));
      const value = currentHeight * minRatio;
      return {
        value,
        point
      };
    }
    return {
      value: point,
      point
    };
  });
  points.sort((a, b) => parseInt(a.value, 10) - parseInt(b.value, 10));
  for (let i = 0; i < points.length; i += 1) {
    const {
      point,
      value
    } = points[i];
    if (base === 'window') {
      if (window.matchMedia(`(min-width: ${value}px)`).matches) {
        breakpoint = point;
      }
    } else if (value <= containerEl.clientWidth) {
      breakpoint = point;
    }
  }
  return breakpoint || 'max';
}

var breakpoints = {
  setBreakpoint,
  getBreakpoint
};

function prepareClasses(entries, prefix) {
  const resultClasses = [];
  entries.forEach(item => {
    if (typeof item === 'object') {
      Object.keys(item).forEach(classNames => {
        if (item[classNames]) {
          resultClasses.push(prefix + classNames);
        }
      });
    } else if (typeof item === 'string') {
      resultClasses.push(prefix + item);
    }
  });
  return resultClasses;
}
function addClasses() {
  const swiper = this;
  const {
    classNames,
    params,
    rtl,
    el,
    device
  } = swiper;
  // prettier-ignore
  const suffixes = prepareClasses(['initialized', params.direction, {
    'free-mode': swiper.params.freeMode && params.freeMode.enabled
  }, {
    'autoheight': params.autoHeight
  }, {
    'rtl': rtl
  }, {
    'grid': params.grid && params.grid.rows > 1
  }, {
    'grid-column': params.grid && params.grid.rows > 1 && params.grid.fill === 'column'
  }, {
    'android': device.android
  }, {
    'ios': device.ios
  }, {
    'css-mode': params.cssMode
  }, {
    'centered': params.cssMode && params.centeredSlides
  }, {
    'watch-progress': params.watchSlidesProgress
  }], params.containerModifierClass);
  classNames.push(...suffixes);
  el.classList.add(...classNames);
  swiper.emitContainerClasses();
}

function removeClasses() {
  const swiper = this;
  const {
    el,
    classNames
  } = swiper;
  el.classList.remove(...classNames);
  swiper.emitContainerClasses();
}

var classes = {
  addClasses,
  removeClasses
};

function checkOverflow() {
  const swiper = this;
  const {
    isLocked: wasLocked,
    params
  } = swiper;
  const {
    slidesOffsetBefore
  } = params;
  if (slidesOffsetBefore) {
    const lastSlideIndex = swiper.slides.length - 1;
    const lastSlideRightEdge = swiper.slidesGrid[lastSlideIndex] + swiper.slidesSizesGrid[lastSlideIndex] + slidesOffsetBefore * 2;
    swiper.isLocked = swiper.size > lastSlideRightEdge;
  } else {
    swiper.isLocked = swiper.snapGrid.length === 1;
  }
  if (params.allowSlideNext === true) {
    swiper.allowSlideNext = !swiper.isLocked;
  }
  if (params.allowSlidePrev === true) {
    swiper.allowSlidePrev = !swiper.isLocked;
  }
  if (wasLocked && wasLocked !== swiper.isLocked) {
    swiper.isEnd = false;
  }
  if (wasLocked !== swiper.isLocked) {
    swiper.emit(swiper.isLocked ? 'lock' : 'unlock');
  }
}
var checkOverflow$1 = {
  checkOverflow
};

var defaults = {
  init: true,
  direction: 'horizontal',
  oneWayMovement: false,
  touchEventsTarget: 'wrapper',
  initialSlide: 0,
  speed: 300,
  cssMode: false,
  updateOnWindowResize: true,
  resizeObserver: true,
  nested: false,
  createElements: false,
  eventsPrefix: 'swiper',
  enabled: true,
  focusableElements: 'input, select, option, textarea, button, video, label',
  // Overrides
  width: null,
  height: null,
  //
  preventInteractionOnTransition: false,
  // ssr
  userAgent: null,
  url: null,
  // To support iOS's swipe-to-go-back gesture (when being used in-app).
  edgeSwipeDetection: false,
  edgeSwipeThreshold: 20,
  // Autoheight
  autoHeight: false,
  // Set wrapper width
  setWrapperSize: false,
  // Virtual Translate
  virtualTranslate: false,
  // Effects
  effect: 'slide',
  // 'slide' or 'fade' or 'cube' or 'coverflow' or 'flip'

  // Breakpoints
  breakpoints: undefined,
  breakpointsBase: 'window',
  // Slides grid
  spaceBetween: 0,
  slidesPerView: 1,
  slidesPerGroup: 1,
  slidesPerGroupSkip: 0,
  slidesPerGroupAuto: false,
  centeredSlides: false,
  centeredSlidesBounds: false,
  slidesOffsetBefore: 0,
  // in px
  slidesOffsetAfter: 0,
  // in px
  normalizeSlideIndex: true,
  centerInsufficientSlides: false,
  // Disable swiper and hide navigation when container not overflow
  watchOverflow: true,
  // Round length
  roundLengths: false,
  // Touches
  touchRatio: 1,
  touchAngle: 45,
  simulateTouch: true,
  shortSwipes: true,
  longSwipes: true,
  longSwipesRatio: 0.5,
  longSwipesMs: 300,
  followFinger: true,
  allowTouchMove: true,
  threshold: 5,
  touchMoveStopPropagation: false,
  touchStartPreventDefault: true,
  touchStartForcePreventDefault: false,
  touchReleaseOnEdges: false,
  // Unique Navigation Elements
  uniqueNavElements: true,
  // Resistance
  resistance: true,
  resistanceRatio: 0.85,
  // Progress
  watchSlidesProgress: false,
  // Cursor
  grabCursor: false,
  // Clicks
  preventClicks: true,
  preventClicksPropagation: true,
  slideToClickedSlide: false,
  // loop
  loop: false,
  loopAddBlankSlides: true,
  loopAdditionalSlides: 0,
  loopPreventsSliding: true,
  // rewind
  rewind: false,
  // Swiping/no swiping
  allowSlidePrev: true,
  allowSlideNext: true,
  swipeHandler: null,
  // '.swipe-handler',
  noSwiping: true,
  noSwipingClass: 'swiper-no-swiping',
  noSwipingSelector: null,
  // Passive Listeners
  passiveListeners: true,
  maxBackfaceHiddenSlides: 10,
  // NS
  containerModifierClass: 'swiper-',
  // NEW
  slideClass: 'swiper-slide',
  slideBlankClass: 'swiper-slide-blank',
  slideActiveClass: 'swiper-slide-active',
  slideVisibleClass: 'swiper-slide-visible',
  slideFullyVisibleClass: 'swiper-slide-fully-visible',
  slideNextClass: 'swiper-slide-next',
  slidePrevClass: 'swiper-slide-prev',
  wrapperClass: 'swiper-wrapper',
  lazyPreloaderClass: 'swiper-lazy-preloader',
  lazyPreloadPrevNext: 0,
  // Callbacks
  runCallbacksOnInit: true,
  // Internals
  _emitClasses: false
};

function moduleExtendParams(params, allModulesParams) {
  return function extendParams(obj) {
    if (obj === void 0) {
      obj = {};
    }
    const moduleParamName = Object.keys(obj)[0];
    const moduleParams = obj[moduleParamName];
    if (typeof moduleParams !== 'object' || moduleParams === null) {
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)(allModulesParams, obj);
      return;
    }
    if (params[moduleParamName] === true) {
      params[moduleParamName] = {
        enabled: true
      };
    }
    if (moduleParamName === 'navigation' && params[moduleParamName] && params[moduleParamName].enabled && !params[moduleParamName].prevEl && !params[moduleParamName].nextEl) {
      params[moduleParamName].auto = true;
    }
    if (['pagination', 'scrollbar'].indexOf(moduleParamName) >= 0 && params[moduleParamName] && params[moduleParamName].enabled && !params[moduleParamName].el) {
      params[moduleParamName].auto = true;
    }
    if (!(moduleParamName in params && 'enabled' in moduleParams)) {
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)(allModulesParams, obj);
      return;
    }
    if (typeof params[moduleParamName] === 'object' && !('enabled' in params[moduleParamName])) {
      params[moduleParamName].enabled = true;
    }
    if (!params[moduleParamName]) params[moduleParamName] = {
      enabled: false
    };
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)(allModulesParams, obj);
  };
}

/* eslint no-param-reassign: "off" */
const prototypes = {
  eventsEmitter,
  update,
  translate,
  transition,
  slide,
  loop,
  grabCursor,
  events: events$1,
  breakpoints,
  checkOverflow: checkOverflow$1,
  classes
};
const extendedDefaults = {};
class Swiper {
  constructor() {
    let el;
    let params;
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }
    if (args.length === 1 && args[0].constructor && Object.prototype.toString.call(args[0]).slice(8, -1) === 'Object') {
      params = args[0];
    } else {
      [el, params] = args;
    }
    if (!params) params = {};
    params = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, params);
    if (el && !params.el) params.el = el;
    const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
    if (params.el && typeof params.el === 'string' && document.querySelectorAll(params.el).length > 1) {
      const swipers = [];
      document.querySelectorAll(params.el).forEach(containerEl => {
        const newParams = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, params, {
          el: containerEl
        });
        swipers.push(new Swiper(newParams));
      });
      // eslint-disable-next-line no-constructor-return
      return swipers;
    }

    // Swiper Instance
    const swiper = this;
    swiper.__swiper__ = true;
    swiper.support = getSupport();
    swiper.device = getDevice({
      userAgent: params.userAgent
    });
    swiper.browser = getBrowser();
    swiper.eventsListeners = {};
    swiper.eventsAnyListeners = [];
    swiper.modules = [...swiper.__modules__];
    if (params.modules && Array.isArray(params.modules)) {
      swiper.modules.push(...params.modules);
    }
    const allModulesParams = {};
    swiper.modules.forEach(mod => {
      mod({
        params,
        swiper,
        extendParams: moduleExtendParams(params, allModulesParams),
        on: swiper.on.bind(swiper),
        once: swiper.once.bind(swiper),
        off: swiper.off.bind(swiper),
        emit: swiper.emit.bind(swiper)
      });
    });

    // Extend defaults with modules params
    const swiperParams = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, defaults, allModulesParams);

    // Extend defaults with passed params
    swiper.params = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, swiperParams, extendedDefaults, params);
    swiper.originalParams = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, swiper.params);
    swiper.passedParams = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)({}, params);

    // add event listeners
    if (swiper.params && swiper.params.on) {
      Object.keys(swiper.params.on).forEach(eventName => {
        swiper.on(eventName, swiper.params.on[eventName]);
      });
    }
    if (swiper.params && swiper.params.onAny) {
      swiper.onAny(swiper.params.onAny);
    }

    // Extend Swiper
    Object.assign(swiper, {
      enabled: swiper.params.enabled,
      el,
      // Classes
      classNames: [],
      // Slides
      slides: [],
      slidesGrid: [],
      snapGrid: [],
      slidesSizesGrid: [],
      // isDirection
      isHorizontal() {
        return swiper.params.direction === 'horizontal';
      },
      isVertical() {
        return swiper.params.direction === 'vertical';
      },
      // Indexes
      activeIndex: 0,
      realIndex: 0,
      //
      isBeginning: true,
      isEnd: false,
      // Props
      translate: 0,
      previousTranslate: 0,
      progress: 0,
      velocity: 0,
      animating: false,
      cssOverflowAdjustment() {
        // Returns 0 unless `translate` is > 2**23
        // Should be subtracted from css values to prevent overflow
        return Math.trunc(this.translate / 2 ** 23) * 2 ** 23;
      },
      // Locks
      allowSlideNext: swiper.params.allowSlideNext,
      allowSlidePrev: swiper.params.allowSlidePrev,
      // Touch Events
      touchEventsData: {
        isTouched: undefined,
        isMoved: undefined,
        allowTouchCallbacks: undefined,
        touchStartTime: undefined,
        isScrolling: undefined,
        currentTranslate: undefined,
        startTranslate: undefined,
        allowThresholdMove: undefined,
        // Form elements to match
        focusableElements: swiper.params.focusableElements,
        // Last click time
        lastClickTime: 0,
        clickTimeout: undefined,
        // Velocities
        velocities: [],
        allowMomentumBounce: undefined,
        startMoving: undefined,
        pointerId: null,
        touchId: null
      },
      // Clicks
      allowClick: true,
      // Touches
      allowTouchMove: swiper.params.allowTouchMove,
      touches: {
        startX: 0,
        startY: 0,
        currentX: 0,
        currentY: 0,
        diff: 0
      },
      // Images
      imagesToLoad: [],
      imagesLoaded: 0
    });
    swiper.emit('_swiper');

    // Init
    if (swiper.params.init) {
      swiper.init();
    }

    // Return app instance
    // eslint-disable-next-line no-constructor-return
    return swiper;
  }
  getDirectionLabel(property) {
    if (this.isHorizontal()) {
      return property;
    }
    // prettier-ignore
    return {
      'width': 'height',
      'margin-top': 'margin-left',
      'margin-bottom ': 'margin-right',
      'margin-left': 'margin-top',
      'margin-right': 'margin-bottom',
      'padding-left': 'padding-top',
      'padding-right': 'padding-bottom',
      'marginRight': 'marginBottom'
    }[property];
  }
  getSlideIndex(slideEl) {
    const {
      slidesEl,
      params
    } = this;
    const slides = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `.${params.slideClass}, swiper-slide`);
    const firstSlideIndex = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.g)(slides[0]);
    return (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.g)(slideEl) - firstSlideIndex;
  }
  getSlideIndexByData(index) {
    return this.getSlideIndex(this.slides.filter(slideEl => slideEl.getAttribute('data-swiper-slide-index') * 1 === index)[0]);
  }
  recalcSlides() {
    const swiper = this;
    const {
      slidesEl,
      params
    } = swiper;
    swiper.slides = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(slidesEl, `.${params.slideClass}, swiper-slide`);
  }
  enable() {
    const swiper = this;
    if (swiper.enabled) return;
    swiper.enabled = true;
    if (swiper.params.grabCursor) {
      swiper.setGrabCursor();
    }
    swiper.emit('enable');
  }
  disable() {
    const swiper = this;
    if (!swiper.enabled) return;
    swiper.enabled = false;
    if (swiper.params.grabCursor) {
      swiper.unsetGrabCursor();
    }
    swiper.emit('disable');
  }
  setProgress(progress, speed) {
    const swiper = this;
    progress = Math.min(Math.max(progress, 0), 1);
    const min = swiper.minTranslate();
    const max = swiper.maxTranslate();
    const current = (max - min) * progress + min;
    swiper.translateTo(current, typeof speed === 'undefined' ? 0 : speed);
    swiper.updateActiveIndex();
    swiper.updateSlidesClasses();
  }
  emitContainerClasses() {
    const swiper = this;
    if (!swiper.params._emitClasses || !swiper.el) return;
    const cls = swiper.el.className.split(' ').filter(className => {
      return className.indexOf('swiper') === 0 || className.indexOf(swiper.params.containerModifierClass) === 0;
    });
    swiper.emit('_containerClasses', cls.join(' '));
  }
  getSlideClasses(slideEl) {
    const swiper = this;
    if (swiper.destroyed) return '';
    return slideEl.className.split(' ').filter(className => {
      return className.indexOf('swiper-slide') === 0 || className.indexOf(swiper.params.slideClass) === 0;
    }).join(' ');
  }
  emitSlidesClasses() {
    const swiper = this;
    if (!swiper.params._emitClasses || !swiper.el) return;
    const updates = [];
    swiper.slides.forEach(slideEl => {
      const classNames = swiper.getSlideClasses(slideEl);
      updates.push({
        slideEl,
        classNames
      });
      swiper.emit('_slideClass', slideEl, classNames);
    });
    swiper.emit('_slideClasses', updates);
  }
  slidesPerViewDynamic(view, exact) {
    if (view === void 0) {
      view = 'current';
    }
    if (exact === void 0) {
      exact = false;
    }
    const swiper = this;
    const {
      params,
      slides,
      slidesGrid,
      slidesSizesGrid,
      size: swiperSize,
      activeIndex
    } = swiper;
    let spv = 1;
    if (typeof params.slidesPerView === 'number') return params.slidesPerView;
    if (params.centeredSlides) {
      let slideSize = slides[activeIndex] ? slides[activeIndex].swiperSlideSize : 0;
      let breakLoop;
      for (let i = activeIndex + 1; i < slides.length; i += 1) {
        if (slides[i] && !breakLoop) {
          slideSize += slides[i].swiperSlideSize;
          spv += 1;
          if (slideSize > swiperSize) breakLoop = true;
        }
      }
      for (let i = activeIndex - 1; i >= 0; i -= 1) {
        if (slides[i] && !breakLoop) {
          slideSize += slides[i].swiperSlideSize;
          spv += 1;
          if (slideSize > swiperSize) breakLoop = true;
        }
      }
    } else {
      // eslint-disable-next-line
      if (view === 'current') {
        for (let i = activeIndex + 1; i < slides.length; i += 1) {
          const slideInView = exact ? slidesGrid[i] + slidesSizesGrid[i] - slidesGrid[activeIndex] < swiperSize : slidesGrid[i] - slidesGrid[activeIndex] < swiperSize;
          if (slideInView) {
            spv += 1;
          }
        }
      } else {
        // previous
        for (let i = activeIndex - 1; i >= 0; i -= 1) {
          const slideInView = slidesGrid[activeIndex] - slidesGrid[i] < swiperSize;
          if (slideInView) {
            spv += 1;
          }
        }
      }
    }
    return spv;
  }
  update() {
    const swiper = this;
    if (!swiper || swiper.destroyed) return;
    const {
      snapGrid,
      params
    } = swiper;
    // Breakpoints
    if (params.breakpoints) {
      swiper.setBreakpoint();
    }
    [...swiper.el.querySelectorAll('[loading="lazy"]')].forEach(imageEl => {
      if (imageEl.complete) {
        processLazyPreloader(swiper, imageEl);
      }
    });
    swiper.updateSize();
    swiper.updateSlides();
    swiper.updateProgress();
    swiper.updateSlidesClasses();
    function setTranslate() {
      const translateValue = swiper.rtlTranslate ? swiper.translate * -1 : swiper.translate;
      const newTranslate = Math.min(Math.max(translateValue, swiper.maxTranslate()), swiper.minTranslate());
      swiper.setTranslate(newTranslate);
      swiper.updateActiveIndex();
      swiper.updateSlidesClasses();
    }
    let translated;
    if (params.freeMode && params.freeMode.enabled && !params.cssMode) {
      setTranslate();
      if (params.autoHeight) {
        swiper.updateAutoHeight();
      }
    } else {
      if ((params.slidesPerView === 'auto' || params.slidesPerView > 1) && swiper.isEnd && !params.centeredSlides) {
        const slides = swiper.virtual && params.virtual.enabled ? swiper.virtual.slides : swiper.slides;
        translated = swiper.slideTo(slides.length - 1, 0, false, true);
      } else {
        translated = swiper.slideTo(swiper.activeIndex, 0, false, true);
      }
      if (!translated) {
        setTranslate();
      }
    }
    if (params.watchOverflow && snapGrid !== swiper.snapGrid) {
      swiper.checkOverflow();
    }
    swiper.emit('update');
  }
  changeDirection(newDirection, needUpdate) {
    if (needUpdate === void 0) {
      needUpdate = true;
    }
    const swiper = this;
    const currentDirection = swiper.params.direction;
    if (!newDirection) {
      // eslint-disable-next-line
      newDirection = currentDirection === 'horizontal' ? 'vertical' : 'horizontal';
    }
    if (newDirection === currentDirection || newDirection !== 'horizontal' && newDirection !== 'vertical') {
      return swiper;
    }
    swiper.el.classList.remove(`${swiper.params.containerModifierClass}${currentDirection}`);
    swiper.el.classList.add(`${swiper.params.containerModifierClass}${newDirection}`);
    swiper.emitContainerClasses();
    swiper.params.direction = newDirection;
    swiper.slides.forEach(slideEl => {
      if (newDirection === 'vertical') {
        slideEl.style.width = '';
      } else {
        slideEl.style.height = '';
      }
    });
    swiper.emit('changeDirection');
    if (needUpdate) swiper.update();
    return swiper;
  }
  changeLanguageDirection(direction) {
    const swiper = this;
    if (swiper.rtl && direction === 'rtl' || !swiper.rtl && direction === 'ltr') return;
    swiper.rtl = direction === 'rtl';
    swiper.rtlTranslate = swiper.params.direction === 'horizontal' && swiper.rtl;
    if (swiper.rtl) {
      swiper.el.classList.add(`${swiper.params.containerModifierClass}rtl`);
      swiper.el.dir = 'rtl';
    } else {
      swiper.el.classList.remove(`${swiper.params.containerModifierClass}rtl`);
      swiper.el.dir = 'ltr';
    }
    swiper.update();
  }
  mount(element) {
    const swiper = this;
    if (swiper.mounted) return true;

    // Find el
    let el = element || swiper.params.el;
    if (typeof el === 'string') {
      el = document.querySelector(el);
    }
    if (!el) {
      return false;
    }
    el.swiper = swiper;
    if (el.parentNode && el.parentNode.host && el.parentNode.host.nodeName === 'SWIPER-CONTAINER') {
      swiper.isElement = true;
    }
    const getWrapperSelector = () => {
      return `.${(swiper.params.wrapperClass || '').trim().split(' ').join('.')}`;
    };
    const getWrapper = () => {
      if (el && el.shadowRoot && el.shadowRoot.querySelector) {
        const res = el.shadowRoot.querySelector(getWrapperSelector());
        // Children needs to return slot items
        return res;
      }
      return (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(el, getWrapperSelector())[0];
    };
    // Find Wrapper
    let wrapperEl = getWrapper();
    if (!wrapperEl && swiper.params.createElements) {
      wrapperEl = (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.c)('div', swiper.params.wrapperClass);
      el.append(wrapperEl);
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.e)(el, `.${swiper.params.slideClass}`).forEach(slideEl => {
        wrapperEl.append(slideEl);
      });
    }
    Object.assign(swiper, {
      el,
      wrapperEl,
      slidesEl: swiper.isElement && !el.parentNode.host.slideSlots ? el.parentNode.host : wrapperEl,
      hostEl: swiper.isElement ? el.parentNode.host : el,
      mounted: true,
      // RTL
      rtl: el.dir.toLowerCase() === 'rtl' || (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'direction') === 'rtl',
      rtlTranslate: swiper.params.direction === 'horizontal' && (el.dir.toLowerCase() === 'rtl' || (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(el, 'direction') === 'rtl'),
      wrongRTL: (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.m)(wrapperEl, 'display') === '-webkit-box'
    });
    return true;
  }
  init(el) {
    const swiper = this;
    if (swiper.initialized) return swiper;
    const mounted = swiper.mount(el);
    if (mounted === false) return swiper;
    swiper.emit('beforeInit');

    // Set breakpoint
    if (swiper.params.breakpoints) {
      swiper.setBreakpoint();
    }

    // Add Classes
    swiper.addClasses();

    // Update size
    swiper.updateSize();

    // Update slides
    swiper.updateSlides();
    if (swiper.params.watchOverflow) {
      swiper.checkOverflow();
    }

    // Set Grab Cursor
    if (swiper.params.grabCursor && swiper.enabled) {
      swiper.setGrabCursor();
    }

    // Slide To Initial Slide
    if (swiper.params.loop && swiper.virtual && swiper.params.virtual.enabled) {
      swiper.slideTo(swiper.params.initialSlide + swiper.virtual.slidesBefore, 0, swiper.params.runCallbacksOnInit, false, true);
    } else {
      swiper.slideTo(swiper.params.initialSlide, 0, swiper.params.runCallbacksOnInit, false, true);
    }

    // Create loop
    if (swiper.params.loop) {
      swiper.loopCreate();
    }

    // Attach events
    swiper.attachEvents();
    const lazyElements = [...swiper.el.querySelectorAll('[loading="lazy"]')];
    if (swiper.isElement) {
      lazyElements.push(...swiper.hostEl.querySelectorAll('[loading="lazy"]'));
    }
    lazyElements.forEach(imageEl => {
      if (imageEl.complete) {
        processLazyPreloader(swiper, imageEl);
      } else {
        imageEl.addEventListener('load', e => {
          processLazyPreloader(swiper, e.target);
        });
      }
    });
    preload(swiper);

    // Init Flag
    swiper.initialized = true;
    preload(swiper);

    // Emit
    swiper.emit('init');
    swiper.emit('afterInit');
    return swiper;
  }
  destroy(deleteInstance, cleanStyles) {
    if (deleteInstance === void 0) {
      deleteInstance = true;
    }
    if (cleanStyles === void 0) {
      cleanStyles = true;
    }
    const swiper = this;
    const {
      params,
      el,
      wrapperEl,
      slides
    } = swiper;
    if (typeof swiper.params === 'undefined' || swiper.destroyed) {
      return null;
    }
    swiper.emit('beforeDestroy');

    // Init Flag
    swiper.initialized = false;

    // Detach events
    swiper.detachEvents();

    // Destroy loop
    if (params.loop) {
      swiper.loopDestroy();
    }

    // Cleanup styles
    if (cleanStyles) {
      swiper.removeClasses();
      el.removeAttribute('style');
      wrapperEl.removeAttribute('style');
      if (slides && slides.length) {
        slides.forEach(slideEl => {
          slideEl.classList.remove(params.slideVisibleClass, params.slideFullyVisibleClass, params.slideActiveClass, params.slideNextClass, params.slidePrevClass);
          slideEl.removeAttribute('style');
          slideEl.removeAttribute('data-swiper-slide-index');
        });
      }
    }
    swiper.emit('destroy');

    // Detach emitter events
    Object.keys(swiper.eventsListeners).forEach(eventName => {
      swiper.off(eventName);
    });
    if (deleteInstance !== false) {
      swiper.el.swiper = null;
      (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.u)(swiper);
    }
    swiper.destroyed = true;
    return null;
  }
  static extendDefaults(newDefaults) {
    (0,_utils_mjs__WEBPACK_IMPORTED_MODULE_1__.t)(extendedDefaults, newDefaults);
  }
  static get extendedDefaults() {
    return extendedDefaults;
  }
  static get defaults() {
    return defaults;
  }
  static installModule(mod) {
    if (!Swiper.prototype.__modules__) Swiper.prototype.__modules__ = [];
    const modules = Swiper.prototype.__modules__;
    if (typeof mod === 'function' && modules.indexOf(mod) < 0) {
      modules.push(mod);
    }
  }
  static use(module) {
    if (Array.isArray(module)) {
      module.forEach(m => Swiper.installModule(m));
      return Swiper;
    }
    Swiper.installModule(module);
    return Swiper;
  }
}
Object.keys(prototypes).forEach(prototypeGroup => {
  Object.keys(prototypes[prototypeGroup]).forEach(protoMethod => {
    Swiper.prototype[protoMethod] = prototypes[prototypeGroup][protoMethod];
  });
});
Swiper.use([Resize, Observer]);




/***/ }),

/***/ "./node_modules/swiper/shared/utils.mjs":
/*!**********************************************!*\
  !*** ./node_modules/swiper/shared/utils.mjs ***!
  \**********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   a: () => (/* binding */ elementParents),
/* harmony export */   b: () => (/* binding */ elementOffset),
/* harmony export */   c: () => (/* binding */ createElement),
/* harmony export */   d: () => (/* binding */ now),
/* harmony export */   e: () => (/* binding */ elementChildren),
/* harmony export */   f: () => (/* binding */ elementOuterSize),
/* harmony export */   g: () => (/* binding */ elementIndex),
/* harmony export */   h: () => (/* binding */ classesToTokens),
/* harmony export */   i: () => (/* binding */ getTranslate),
/* harmony export */   j: () => (/* binding */ elementTransitionEnd),
/* harmony export */   k: () => (/* binding */ isObject),
/* harmony export */   l: () => (/* binding */ getSlideTransformEl),
/* harmony export */   m: () => (/* binding */ elementStyle),
/* harmony export */   n: () => (/* binding */ nextTick),
/* harmony export */   o: () => (/* binding */ elementNextAll),
/* harmony export */   p: () => (/* binding */ elementPrevAll),
/* harmony export */   q: () => (/* binding */ animateCSSModeScroll),
/* harmony export */   r: () => (/* binding */ showWarning),
/* harmony export */   s: () => (/* binding */ setCSSProperty),
/* harmony export */   t: () => (/* binding */ extend),
/* harmony export */   u: () => (/* binding */ deleteProps)
/* harmony export */ });
/* harmony import */ var _ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ssr-window.esm.mjs */ "./node_modules/swiper/shared/ssr-window.esm.mjs");


function classesToTokens(classes) {
  if (classes === void 0) {
    classes = '';
  }
  return classes.trim().split(' ').filter(c => !!c.trim());
}

function deleteProps(obj) {
  const object = obj;
  Object.keys(object).forEach(key => {
    try {
      object[key] = null;
    } catch (e) {
      // no getter for object
    }
    try {
      delete object[key];
    } catch (e) {
      // something got wrong
    }
  });
}
function nextTick(callback, delay) {
  if (delay === void 0) {
    delay = 0;
  }
  return setTimeout(callback, delay);
}
function now() {
  return Date.now();
}
function getComputedStyle(el) {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  let style;
  if (window.getComputedStyle) {
    style = window.getComputedStyle(el, null);
  }
  if (!style && el.currentStyle) {
    style = el.currentStyle;
  }
  if (!style) {
    style = el.style;
  }
  return style;
}
function getTranslate(el, axis) {
  if (axis === void 0) {
    axis = 'x';
  }
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  let matrix;
  let curTransform;
  let transformMatrix;
  const curStyle = getComputedStyle(el);
  if (window.WebKitCSSMatrix) {
    curTransform = curStyle.transform || curStyle.webkitTransform;
    if (curTransform.split(',').length > 6) {
      curTransform = curTransform.split(', ').map(a => a.replace(',', '.')).join(', ');
    }
    // Some old versions of Webkit choke when 'none' is passed; pass
    // empty string instead in this case
    transformMatrix = new window.WebKitCSSMatrix(curTransform === 'none' ? '' : curTransform);
  } else {
    transformMatrix = curStyle.MozTransform || curStyle.OTransform || curStyle.MsTransform || curStyle.msTransform || curStyle.transform || curStyle.getPropertyValue('transform').replace('translate(', 'matrix(1, 0, 0, 1,');
    matrix = transformMatrix.toString().split(',');
  }
  if (axis === 'x') {
    // Latest Chrome and webkits Fix
    if (window.WebKitCSSMatrix) curTransform = transformMatrix.m41;
    // Crazy IE10 Matrix
    else if (matrix.length === 16) curTransform = parseFloat(matrix[12]);
    // Normal Browsers
    else curTransform = parseFloat(matrix[4]);
  }
  if (axis === 'y') {
    // Latest Chrome and webkits Fix
    if (window.WebKitCSSMatrix) curTransform = transformMatrix.m42;
    // Crazy IE10 Matrix
    else if (matrix.length === 16) curTransform = parseFloat(matrix[13]);
    // Normal Browsers
    else curTransform = parseFloat(matrix[5]);
  }
  return curTransform || 0;
}
function isObject(o) {
  return typeof o === 'object' && o !== null && o.constructor && Object.prototype.toString.call(o).slice(8, -1) === 'Object';
}
function isNode(node) {
  // eslint-disable-next-line
  if (typeof window !== 'undefined' && typeof window.HTMLElement !== 'undefined') {
    return node instanceof HTMLElement;
  }
  return node && (node.nodeType === 1 || node.nodeType === 11);
}
function extend() {
  const to = Object(arguments.length <= 0 ? undefined : arguments[0]);
  const noExtend = ['__proto__', 'constructor', 'prototype'];
  for (let i = 1; i < arguments.length; i += 1) {
    const nextSource = i < 0 || arguments.length <= i ? undefined : arguments[i];
    if (nextSource !== undefined && nextSource !== null && !isNode(nextSource)) {
      const keysArray = Object.keys(Object(nextSource)).filter(key => noExtend.indexOf(key) < 0);
      for (let nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex += 1) {
        const nextKey = keysArray[nextIndex];
        const desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);
        if (desc !== undefined && desc.enumerable) {
          if (isObject(to[nextKey]) && isObject(nextSource[nextKey])) {
            if (nextSource[nextKey].__swiper__) {
              to[nextKey] = nextSource[nextKey];
            } else {
              extend(to[nextKey], nextSource[nextKey]);
            }
          } else if (!isObject(to[nextKey]) && isObject(nextSource[nextKey])) {
            to[nextKey] = {};
            if (nextSource[nextKey].__swiper__) {
              to[nextKey] = nextSource[nextKey];
            } else {
              extend(to[nextKey], nextSource[nextKey]);
            }
          } else {
            to[nextKey] = nextSource[nextKey];
          }
        }
      }
    }
  }
  return to;
}
function setCSSProperty(el, varName, varValue) {
  el.style.setProperty(varName, varValue);
}
function animateCSSModeScroll(_ref) {
  let {
    swiper,
    targetPosition,
    side
  } = _ref;
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const startPosition = -swiper.translate;
  let startTime = null;
  let time;
  const duration = swiper.params.speed;
  swiper.wrapperEl.style.scrollSnapType = 'none';
  window.cancelAnimationFrame(swiper.cssModeFrameID);
  const dir = targetPosition > startPosition ? 'next' : 'prev';
  const isOutOfBound = (current, target) => {
    return dir === 'next' && current >= target || dir === 'prev' && current <= target;
  };
  const animate = () => {
    time = new Date().getTime();
    if (startTime === null) {
      startTime = time;
    }
    const progress = Math.max(Math.min((time - startTime) / duration, 1), 0);
    const easeProgress = 0.5 - Math.cos(progress * Math.PI) / 2;
    let currentPosition = startPosition + easeProgress * (targetPosition - startPosition);
    if (isOutOfBound(currentPosition, targetPosition)) {
      currentPosition = targetPosition;
    }
    swiper.wrapperEl.scrollTo({
      [side]: currentPosition
    });
    if (isOutOfBound(currentPosition, targetPosition)) {
      swiper.wrapperEl.style.overflow = 'hidden';
      swiper.wrapperEl.style.scrollSnapType = '';
      setTimeout(() => {
        swiper.wrapperEl.style.overflow = '';
        swiper.wrapperEl.scrollTo({
          [side]: currentPosition
        });
      });
      window.cancelAnimationFrame(swiper.cssModeFrameID);
      return;
    }
    swiper.cssModeFrameID = window.requestAnimationFrame(animate);
  };
  animate();
}
function getSlideTransformEl(slideEl) {
  return slideEl.querySelector('.swiper-slide-transform') || slideEl.shadowRoot && slideEl.shadowRoot.querySelector('.swiper-slide-transform') || slideEl;
}
function elementChildren(element, selector) {
  if (selector === void 0) {
    selector = '';
  }
  return [...element.children].filter(el => el.matches(selector));
}
function showWarning(text) {
  try {
    console.warn(text);
    return;
  } catch (err) {
    // err
  }
}
function createElement(tag, classes) {
  if (classes === void 0) {
    classes = [];
  }
  const el = document.createElement(tag);
  el.classList.add(...(Array.isArray(classes) ? classes : classesToTokens(classes)));
  return el;
}
function elementOffset(el) {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  const document = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.g)();
  const box = el.getBoundingClientRect();
  const body = document.body;
  const clientTop = el.clientTop || body.clientTop || 0;
  const clientLeft = el.clientLeft || body.clientLeft || 0;
  const scrollTop = el === window ? window.scrollY : el.scrollTop;
  const scrollLeft = el === window ? window.scrollX : el.scrollLeft;
  return {
    top: box.top + scrollTop - clientTop,
    left: box.left + scrollLeft - clientLeft
  };
}
function elementPrevAll(el, selector) {
  const prevEls = [];
  while (el.previousElementSibling) {
    const prev = el.previousElementSibling; // eslint-disable-line
    if (selector) {
      if (prev.matches(selector)) prevEls.push(prev);
    } else prevEls.push(prev);
    el = prev;
  }
  return prevEls;
}
function elementNextAll(el, selector) {
  const nextEls = [];
  while (el.nextElementSibling) {
    const next = el.nextElementSibling; // eslint-disable-line
    if (selector) {
      if (next.matches(selector)) nextEls.push(next);
    } else nextEls.push(next);
    el = next;
  }
  return nextEls;
}
function elementStyle(el, prop) {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  return window.getComputedStyle(el, null).getPropertyValue(prop);
}
function elementIndex(el) {
  let child = el;
  let i;
  if (child) {
    i = 0;
    // eslint-disable-next-line
    while ((child = child.previousSibling) !== null) {
      if (child.nodeType === 1) i += 1;
    }
    return i;
  }
  return undefined;
}
function elementParents(el, selector) {
  const parents = []; // eslint-disable-line
  let parent = el.parentElement; // eslint-disable-line
  while (parent) {
    if (selector) {
      if (parent.matches(selector)) parents.push(parent);
    } else {
      parents.push(parent);
    }
    parent = parent.parentElement;
  }
  return parents;
}
function elementTransitionEnd(el, callback) {
  function fireCallBack(e) {
    if (e.target !== el) return;
    callback.call(el, e);
    el.removeEventListener('transitionend', fireCallBack);
  }
  if (callback) {
    el.addEventListener('transitionend', fireCallBack);
  }
}
function elementOuterSize(el, size, includeMargins) {
  const window = (0,_ssr_window_esm_mjs__WEBPACK_IMPORTED_MODULE_0__.a)();
  if (includeMargins) {
    return el[size === 'width' ? 'offsetWidth' : 'offsetHeight'] + parseFloat(window.getComputedStyle(el, null).getPropertyValue(size === 'width' ? 'margin-right' : 'margin-top')) + parseFloat(window.getComputedStyle(el, null).getPropertyValue(size === 'width' ? 'margin-left' : 'margin-bottom'));
  }
  return el.offsetWidth;
}




/***/ }),

/***/ "./node_modules/swiper/swiper-bundle.mjs":
/*!***********************************************!*\
  !*** ./node_modules/swiper/swiper-bundle.mjs ***!
  \***********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Swiper: () => (/* reexport safe */ _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__.S),
/* harmony export */   "default": () => (/* reexport safe */ _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__.S)
/* harmony export */ });
/* harmony import */ var _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./shared/swiper-core.mjs */ "./node_modules/swiper/shared/swiper-core.mjs");
/* harmony import */ var _modules_virtual_mjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/virtual.mjs */ "./node_modules/swiper/modules/virtual.mjs");
/* harmony import */ var _modules_keyboard_mjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/keyboard.mjs */ "./node_modules/swiper/modules/keyboard.mjs");
/* harmony import */ var _modules_mousewheel_mjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/mousewheel.mjs */ "./node_modules/swiper/modules/mousewheel.mjs");
/* harmony import */ var _modules_navigation_mjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/navigation.mjs */ "./node_modules/swiper/modules/navigation.mjs");
/* harmony import */ var _modules_pagination_mjs__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/pagination.mjs */ "./node_modules/swiper/modules/pagination.mjs");
/* harmony import */ var _modules_scrollbar_mjs__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/scrollbar.mjs */ "./node_modules/swiper/modules/scrollbar.mjs");
/* harmony import */ var _modules_parallax_mjs__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./modules/parallax.mjs */ "./node_modules/swiper/modules/parallax.mjs");
/* harmony import */ var _modules_zoom_mjs__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./modules/zoom.mjs */ "./node_modules/swiper/modules/zoom.mjs");
/* harmony import */ var _modules_controller_mjs__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./modules/controller.mjs */ "./node_modules/swiper/modules/controller.mjs");
/* harmony import */ var _modules_a11y_mjs__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./modules/a11y.mjs */ "./node_modules/swiper/modules/a11y.mjs");
/* harmony import */ var _modules_history_mjs__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./modules/history.mjs */ "./node_modules/swiper/modules/history.mjs");
/* harmony import */ var _modules_hash_navigation_mjs__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./modules/hash-navigation.mjs */ "./node_modules/swiper/modules/hash-navigation.mjs");
/* harmony import */ var _modules_autoplay_mjs__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./modules/autoplay.mjs */ "./node_modules/swiper/modules/autoplay.mjs");
/* harmony import */ var _modules_thumbs_mjs__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./modules/thumbs.mjs */ "./node_modules/swiper/modules/thumbs.mjs");
/* harmony import */ var _modules_free_mode_mjs__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./modules/free-mode.mjs */ "./node_modules/swiper/modules/free-mode.mjs");
/* harmony import */ var _modules_grid_mjs__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./modules/grid.mjs */ "./node_modules/swiper/modules/grid.mjs");
/* harmony import */ var _modules_manipulation_mjs__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./modules/manipulation.mjs */ "./node_modules/swiper/modules/manipulation.mjs");
/* harmony import */ var _modules_effect_fade_mjs__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./modules/effect-fade.mjs */ "./node_modules/swiper/modules/effect-fade.mjs");
/* harmony import */ var _modules_effect_cube_mjs__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./modules/effect-cube.mjs */ "./node_modules/swiper/modules/effect-cube.mjs");
/* harmony import */ var _modules_effect_flip_mjs__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./modules/effect-flip.mjs */ "./node_modules/swiper/modules/effect-flip.mjs");
/* harmony import */ var _modules_effect_coverflow_mjs__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./modules/effect-coverflow.mjs */ "./node_modules/swiper/modules/effect-coverflow.mjs");
/* harmony import */ var _modules_effect_creative_mjs__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./modules/effect-creative.mjs */ "./node_modules/swiper/modules/effect-creative.mjs");
/* harmony import */ var _modules_effect_cards_mjs__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./modules/effect-cards.mjs */ "./node_modules/swiper/modules/effect-cards.mjs");
/**
 * Swiper 11.0.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2023 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 22, 2023
 */


























// Swiper Class
const modules = [_modules_virtual_mjs__WEBPACK_IMPORTED_MODULE_1__["default"], _modules_keyboard_mjs__WEBPACK_IMPORTED_MODULE_2__["default"], _modules_mousewheel_mjs__WEBPACK_IMPORTED_MODULE_3__["default"], _modules_navigation_mjs__WEBPACK_IMPORTED_MODULE_4__["default"], _modules_pagination_mjs__WEBPACK_IMPORTED_MODULE_5__["default"], _modules_scrollbar_mjs__WEBPACK_IMPORTED_MODULE_6__["default"], _modules_parallax_mjs__WEBPACK_IMPORTED_MODULE_7__["default"], _modules_zoom_mjs__WEBPACK_IMPORTED_MODULE_8__["default"], _modules_controller_mjs__WEBPACK_IMPORTED_MODULE_9__["default"], _modules_a11y_mjs__WEBPACK_IMPORTED_MODULE_10__["default"], _modules_history_mjs__WEBPACK_IMPORTED_MODULE_11__["default"], _modules_hash_navigation_mjs__WEBPACK_IMPORTED_MODULE_12__["default"], _modules_autoplay_mjs__WEBPACK_IMPORTED_MODULE_13__["default"], _modules_thumbs_mjs__WEBPACK_IMPORTED_MODULE_14__["default"], _modules_free_mode_mjs__WEBPACK_IMPORTED_MODULE_15__["default"], _modules_grid_mjs__WEBPACK_IMPORTED_MODULE_16__["default"], _modules_manipulation_mjs__WEBPACK_IMPORTED_MODULE_17__["default"], _modules_effect_fade_mjs__WEBPACK_IMPORTED_MODULE_18__["default"], _modules_effect_cube_mjs__WEBPACK_IMPORTED_MODULE_19__["default"], _modules_effect_flip_mjs__WEBPACK_IMPORTED_MODULE_20__["default"], _modules_effect_coverflow_mjs__WEBPACK_IMPORTED_MODULE_21__["default"], _modules_effect_creative_mjs__WEBPACK_IMPORTED_MODULE_22__["default"], _modules_effect_cards_mjs__WEBPACK_IMPORTED_MODULE_23__["default"]];
_shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__.S.use(modules);




/***/ }),

/***/ "./node_modules/swiper/swiper.mjs":
/*!****************************************!*\
  !*** ./node_modules/swiper/swiper.mjs ***!
  \****************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Swiper: () => (/* reexport safe */ _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__.S),
/* harmony export */   "default": () => (/* reexport safe */ _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__.S)
/* harmony export */ });
/* harmony import */ var _shared_swiper_core_mjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./shared/swiper-core.mjs */ "./node_modules/swiper/shared/swiper-core.mjs");
/**
 * Swiper 11.0.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2023 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 22, 2023
 */




/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/node module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.nmd = (module) => {
/******/ 			module.paths = [];
/******/ 			if (!module.children) module.children = [];
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/tailwind/js/app": 0,
/******/ 			"tailwind/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/nonce */
/******/ 	(() => {
/******/ 		__webpack_require__.nc = undefined;
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["tailwind/css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["tailwind/css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
=======
(()=>{var Ve={"./resources/js/app.js":(te,U,S)=>{S.r(U),S("./node_modules/swiper/swiper.mjs");var G=S("./node_modules/swiper/swiper-bundle.mjs");S("./resources/plugins/intl-tel-input/build/js/intlTelInput.js");function D(m){"@babel/helpers - typeof";return D=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(z){return typeof z}:function(z){return z&&typeof Symbol=="function"&&z.constructor===Symbol&&z!==Symbol.prototype?"symbol":typeof z},D(m)}function $(m,z){var k=Object.keys(m);if(Object.getOwnPropertySymbols){var R=Object.getOwnPropertySymbols(m);z&&(R=R.filter(function(O){return Object.getOwnPropertyDescriptor(m,O).enumerable})),k.push.apply(k,R)}return k}function n(m){for(var z=1;z<arguments.length;z++){var k=arguments[z]!=null?arguments[z]:{};z%2?$(Object(k),!0).forEach(function(R){s(m,R,k[R])}):Object.getOwnPropertyDescriptors?Object.defineProperties(m,Object.getOwnPropertyDescriptors(k)):$(Object(k)).forEach(function(R){Object.defineProperty(m,R,Object.getOwnPropertyDescriptor(k,R))})}return m}function s(m,z,k){return z=E(z),z in m?Object.defineProperty(m,z,{value:k,enumerable:!0,configurable:!0,writable:!0}):m[z]=k,m}function E(m){var z=p(m,"string");return D(z)==="symbol"?z:String(z)}function p(m,z){if(D(m)!=="object"||m===null)return m;var k=m[Symbol.toPrimitive];if(k!==void 0){var R=k.call(m,z||"default");if(D(R)!=="object")return R;throw new TypeError("@@toPrimitive must return a primitive value.")}return(z==="string"?String:Number)(m)}document.addEventListener("DOMContentLoaded",function(){m({spaceBetween:5,slidesPerView:2});function m(){var z=arguments.length>0&&arguments[0]!==void 0?arguments[0]:{},k=arguments.length>1&&arguments[1]!==void 0?arguments[1]:".swiper";document.querySelectorAll(k).forEach(function(R){var O=n(n({},z),JSON.parse(R.dataset.swiper||"{}"));O.on=n(n({},O.on),{},{transitionStart:function(){var T=document.querySelectorAll("video");Array.prototype.forEach.call(T,function(f){f.pause()})},transitionEnd:function(){var T=this.activeIndex,f=document.getElementsByClassName("swiper-slide")[T],c=f.getElementsByTagName("video")[0];c&&c.play()}}),new G.default(R,O)})}})},"./resources/plugins/intl-tel-input/build/js/intlTelInput.js":(te,U,S)=>{te=S.nmd(te);function G(D){"@babel/helpers - typeof";return G=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function($){return typeof $}:function($){return $&&typeof Symbol=="function"&&$.constructor===Symbol&&$!==Symbol.prototype?"symbol":typeof $},G(D)}(function(D){G(te)==="object"&&te.exports?te.exports=D():window.intlTelInput=D()})(function(D){return function(){for(var $=[["Afghanistan (‫افغانستان‬‎)","af","93"],["Albania (Shqipëri)","al","355"],["Algeria (‫الجزائر‬‎)","dz","213"],["American Samoa","as","1",5,["684"]],["Andorra","ad","376"],["Angola","ao","244"],["Anguilla","ai","1",6,["264"]],["Antigua and Barbuda","ag","1",7,["268"]],["Argentina","ar","54"],["Armenia (Հայաստան)","am","374"],["Aruba","aw","297"],["Ascension Island","ac","247"],["Australia","au","61",0],["Austria (Österreich)","at","43"],["Azerbaijan (Azərbaycan)","az","994"],["Bahamas","bs","1",8,["242"]],["Bahrain (‫البحرين‬‎)","bh","973"],["Bangladesh (বাংলাদেশ)","bd","880"],["Barbados","bb","1",9,["246"]],["Belarus (Беларусь)","by","375"],["Belgium (België)","be","32"],["Belize","bz","501"],["Benin (Bénin)","bj","229"],["Bermuda","bm","1",10,["441"]],["Bhutan (འབྲུག)","bt","975"],["Bolivia","bo","591"],["Bosnia and Herzegovina (Босна и Херцеговина)","ba","387"],["Botswana","bw","267"],["Brazil (Brasil)","br","55"],["British Indian Ocean Territory","io","246"],["British Virgin Islands","vg","1",11,["284"]],["Brunei","bn","673"],["Bulgaria (България)","bg","359"],["Burkina Faso","bf","226"],["Burundi (Uburundi)","bi","257"],["Cambodia (កម្ពុជា)","kh","855"],["Cameroon (Cameroun)","cm","237"],["Canada","ca","1",1,["204","226","236","249","250","263","289","306","343","354","365","367","368","382","387","403","416","418","428","431","437","438","450","584","468","474","506","514","519","548","579","581","584","587","604","613","639","647","672","683","705","709","742","753","778","780","782","807","819","825","867","873","902","905"]],["Cape Verde (Kabu Verdi)","cv","238"],["Caribbean Netherlands","bq","599",1,["3","4","7"]],["Cayman Islands","ky","1",12,["345"]],["Central African Republic (République centrafricaine)","cf","236"],["Chad (Tchad)","td","235"],["Chile","cl","56"],["China (中国)","cn","86"],["Christmas Island","cx","61",2,["89164"]],["Cocos (Keeling) Islands","cc","61",1,["89162"]],["Colombia","co","57"],["Comoros (‫جزر القمر‬‎)","km","269"],["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)","cd","243"],["Congo (Republic) (Congo-Brazzaville)","cg","242"],["Cook Islands","ck","682"],["Costa Rica","cr","506"],["Côte d’Ivoire","ci","225"],["Croatia (Hrvatska)","hr","385"],["Cuba","cu","53"],["Curaçao","cw","599",0],["Cyprus (Κύπρος)","cy","357"],["Czech Republic (Česká republika)","cz","420"],["Denmark (Danmark)","dk","45"],["Djibouti","dj","253"],["Dominica","dm","1",13,["767"]],["Dominican Republic (República Dominicana)","do","1",2,["809","829","849"]],["Ecuador","ec","593"],["Egypt (‫مصر‬‎)","eg","20"],["El Salvador","sv","503"],["Equatorial Guinea (Guinea Ecuatorial)","gq","240"],["Eritrea","er","291"],["Estonia (Eesti)","ee","372"],["Eswatini","sz","268"],["Ethiopia","et","251"],["Falkland Islands (Islas Malvinas)","fk","500"],["Faroe Islands (Føroyar)","fo","298"],["Fiji","fj","679"],["Finland (Suomi)","fi","358",0],["France","fr","33"],["French Guiana (Guyane française)","gf","594"],["French Polynesia (Polynésie française)","pf","689"],["Gabon","ga","241"],["Gambia","gm","220"],["Georgia (საქართველო)","ge","995"],["Germany (Deutschland)","de","49"],["Ghana (Gaana)","gh","233"],["Gibraltar","gi","350"],["Greece (Ελλάδα)","gr","30"],["Greenland (Kalaallit Nunaat)","gl","299"],["Grenada","gd","1",14,["473"]],["Guadeloupe","gp","590",0],["Guam","gu","1",15,["671"]],["Guatemala","gt","502"],["Guernsey","gg","44",1,["1481","7781","7839","7911"]],["Guinea (Guinée)","gn","224"],["Guinea-Bissau (Guiné Bissau)","gw","245"],["Guyana","gy","592"],["Haiti","ht","509"],["Honduras","hn","504"],["Hong Kong (香港)","hk","852"],["Hungary (Magyarország)","hu","36"],["Iceland (Ísland)","is","354"],["India (भारत)","in","91"],["Indonesia","id","62"],["Iran (‫ایران‬‎)","ir","98"],["Iraq (‫العراق‬‎)","iq","964"],["Ireland","ie","353"],["Isle of Man","im","44",2,["1624","74576","7524","7924","7624"]],["Israel (‫ישראל‬‎)","il","972"],["Italy (Italia)","it","39",0],["Jamaica","jm","1",4,["876","658"]],["Japan (日本)","jp","81"],["Jersey","je","44",3,["1534","7509","7700","7797","7829","7937"]],["Jordan (‫الأردن‬‎)","jo","962"],["Kazakhstan (Казахстан)","kz","7",1,["33","7"]],["Kenya","ke","254"],["Kiribati","ki","686"],["Kosovo","xk","383"],["Kuwait (‫الكويت‬‎)","kw","965"],["Kyrgyzstan (Кыргызстан)","kg","996"],["Laos (ລາວ)","la","856"],["Latvia (Latvija)","lv","371"],["Lebanon (‫لبنان‬‎)","lb","961"],["Lesotho","ls","266"],["Liberia","lr","231"],["Libya (‫ليبيا‬‎)","ly","218"],["Liechtenstein","li","423"],["Lithuania (Lietuva)","lt","370"],["Luxembourg","lu","352"],["Macau (澳門)","mo","853"],["Madagascar (Madagasikara)","mg","261"],["Malawi","mw","265"],["Malaysia","my","60"],["Maldives","mv","960"],["Mali","ml","223"],["Malta","mt","356"],["Marshall Islands","mh","692"],["Martinique","mq","596"],["Mauritania (‫موريتانيا‬‎)","mr","222"],["Mauritius (Moris)","mu","230"],["Mayotte","yt","262",1,["269","639"]],["Mexico (México)","mx","52"],["Micronesia","fm","691"],["Moldova (Republica Moldova)","md","373"],["Monaco","mc","377"],["Mongolia (Монгол)","mn","976"],["Montenegro (Crna Gora)","me","382"],["Montserrat","ms","1",16,["664"]],["Morocco (‫المغرب‬‎)","ma","212",0],["Mozambique (Moçambique)","mz","258"],["Myanmar (Burma) (မြန်မာ)","mm","95"],["Namibia (Namibië)","na","264"],["Nauru","nr","674"],["Nepal (नेपाल)","np","977"],["Netherlands (Nederland)","nl","31"],["New Caledonia (Nouvelle-Calédonie)","nc","687"],["New Zealand","nz","64"],["Nicaragua","ni","505"],["Niger (Nijar)","ne","227"],["Nigeria","ng","234"],["Niue","nu","683"],["Norfolk Island","nf","672"],["North Korea (조선 민주주의 인민 공화국)","kp","850"],["North Macedonia (Северна Македонија)","mk","389"],["Northern Mariana Islands","mp","1",17,["670"]],["Norway (Norge)","no","47",0],["Oman (‫عُمان‬‎)","om","968"],["Pakistan (‫پاکستان‬‎)","pk","92"],["Palau","pw","680"],["Palestine (‫فلسطين‬‎)","ps","970"],["Panama (Panamá)","pa","507"],["Papua New Guinea","pg","675"],["Paraguay","py","595"],["Peru (Perú)","pe","51"],["Philippines","ph","63"],["Poland (Polska)","pl","48"],["Portugal","pt","351"],["Puerto Rico","pr","1",3,["787","939"]],["Qatar (‫قطر‬‎)","qa","974"],["Réunion (La Réunion)","re","262",0],["Romania (România)","ro","40"],["Russia (Россия)","ru","7",0],["Rwanda","rw","250"],["Saint Barthélemy","bl","590",1],["Saint Helena","sh","290"],["Saint Kitts and Nevis","kn","1",18,["869"]],["Saint Lucia","lc","1",19,["758"]],["Saint Martin (Saint-Martin (partie française))","mf","590",2],["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)","pm","508"],["Saint Vincent and the Grenadines","vc","1",20,["784"]],["Samoa","ws","685"],["San Marino","sm","378"],["São Tomé and Príncipe (São Tomé e Príncipe)","st","239"],["Saudi Arabia (‫المملكة العربية السعودية‬‎)","sa","966"],["Senegal (Sénégal)","sn","221"],["Serbia (Србија)","rs","381"],["Seychelles","sc","248"],["Sierra Leone","sl","232"],["Singapore","sg","65"],["Sint Maarten","sx","1",21,["721"]],["Slovakia (Slovensko)","sk","421"],["Slovenia (Slovenija)","si","386"],["Solomon Islands","sb","677"],["Somalia (Soomaaliya)","so","252"],["South Africa","za","27"],["South Korea (대한민국)","kr","82"],["South Sudan (‫جنوب السودان‬‎)","ss","211"],["Spain (España)","es","34"],["Sri Lanka (ශ්‍රී ලංකාව)","lk","94"],["Sudan (‫السودان‬‎)","sd","249"],["Suriname","sr","597"],["Svalbard and Jan Mayen","sj","47",1,["79"]],["Sweden (Sverige)","se","46"],["Switzerland (Schweiz)","ch","41"],["Syria (‫سوريا‬‎)","sy","963"],["Taiwan (台灣)","tw","886"],["Tajikistan","tj","992"],["Tanzania","tz","255"],["Thailand (ไทย)","th","66"],["Timor-Leste","tl","670"],["Togo","tg","228"],["Tokelau","tk","690"],["Tonga","to","676"],["Trinidad and Tobago","tt","1",22,["868"]],["Tunisia (‫تونس‬‎)","tn","216"],["Turkey (Türkiye)","tr","90"],["Turkmenistan","tm","993"],["Turks and Caicos Islands","tc","1",23,["649"]],["Tuvalu","tv","688"],["U.S. Virgin Islands","vi","1",24,["340"]],["Uganda","ug","256"],["Ukraine (Україна)","ua","380"],["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)","ae","971"],["United Kingdom","gb","44",0],["United States","us","1",0],["Uruguay","uy","598"],["Uzbekistan (Oʻzbekiston)","uz","998"],["Vanuatu","vu","678"],["Vatican City (Città del Vaticano)","va","39",1,["06698"]],["Venezuela","ve","58"],["Vietnam (Việt Nam)","vn","84"],["Wallis and Futuna (Wallis-et-Futuna)","wf","681"],["Western Sahara (‫الصحراء الغربية‬‎)","eh","212",1,["5288","5289"]],["Yemen (‫اليمن‬‎)","ye","967"],["Zambia","zm","260"],["Zimbabwe","zw","263"],["Åland Islands","ax","358",1,["18"]]],n=0;n<$.length;n++){var s=$[n];$[n]={name:s[0],iso2:s[1],dialCode:s[2],priority:s[3]||0,areaCodes:s[4]||null}}function E(x){for(var g=1;g<arguments.length;g++){var a=arguments[g]!=null?Object(arguments[g]):{},l=Object.keys(a);typeof Object.getOwnPropertySymbols=="function"&&l.push.apply(l,Object.getOwnPropertySymbols(a).filter(function(u){return Object.getOwnPropertyDescriptor(a,u).enumerable})),l.forEach(function(u){p(x,u,a[u])})}return x}function p(x,g,a){return g=R(g),g in x?Object.defineProperty(x,g,{value:a,enumerable:!0,configurable:!0,writable:!0}):x[g]=a,x}function m(x,g){if(!(x instanceof g))throw new TypeError("Cannot call a class as a function")}function z(x,g){for(var a=0;a<g.length;a++){var l=g[a];l.enumerable=l.enumerable||!1,l.configurable=!0,"value"in l&&(l.writable=!0),Object.defineProperty(x,R(l.key),l)}}function k(x,g,a){return g&&z(x.prototype,g),a&&z(x,a),Object.defineProperty(x,"prototype",{writable:!1}),x}function R(x){var g=O(x,"string");return G(g)==="symbol"?g:String(g)}function O(x,g){if(G(x)!=="object"||x===null)return x;var a=x[Symbol.toPrimitive];if(a!==D){var l=a.call(x,g||"default");if(G(l)!=="object")return l;throw new TypeError("@@toPrimitive must return a primitive value.")}return(g==="string"?String:Number)(x)}var y={getInstance:function(g){var a=g.getAttribute("data-intl-tel-input-id");return window.intlTelInputGlobals.instances[a]},instances:{},documentReady:function(){return document.readyState==="complete"}};(typeof window>"u"?"undefined":G(window))==="object"&&(window.intlTelInputGlobals=y);var T=0,f={allowDropdown:!0,autoInsertDialCode:!1,autoPlaceholder:"polite",customContainer:"",customPlaceholder:null,dropdownContainer:null,excludeCountries:[],formatOnDisplay:!0,geoIpLookup:null,hiddenInput:"",initialCountry:"",localizedCountries:null,nationalMode:!0,onlyCountries:[],placeholderNumberType:"MOBILE",preferredCountries:["us","gb"],separateDialCode:!1,showFlags:!0,useFullscreenPopup:/Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)||window.innerWidth<=500,utilsScript:""},c=["800","822","833","844","855","866","877","880","881","882","883","884","885","886","887","888","889"],w=function(g,a){for(var l=Object.keys(g),u=0;u<l.length;u++)a(l[u],g[l[u]])},b=function(g){w(window.intlTelInputGlobals.instances,function(a){window.intlTelInputGlobals.instances[a][g]()})},I=function(){function x(g,a){var l=this;m(this,x),this.id=T++,this.telInput=g,this.activeItem=null,this.highlightedItem=null;var u=a||{};this.options={},w(f,function(h,_){l.options[h]=u.hasOwnProperty(h)?u[h]:_}),this.hadInitialPlaceholder=!!g.getAttribute("placeholder")}return k(x,[{key:"_init",value:function(){var a=this;this.options.nationalMode&&(this.options.autoInsertDialCode=!1),this.options.separateDialCode&&(this.options.autoInsertDialCode=!1);var l=this.options.allowDropdown&&!this.options.separateDialCode;if(!this.options.showFlags&&l&&(this.options.showFlags=!0),this.options.useFullscreenPopup&&(document.body.classList.add("iti-fullscreen-popup"),this.options.dropdownContainer||(this.options.dropdownContainer=document.body)),this.isRTL=!!this.telInput.closest("[dir=rtl]"),typeof Promise<"u"){var u=new Promise(function(_,L){a.resolveAutoCountryPromise=_,a.rejectAutoCountryPromise=L}),h=new Promise(function(_,L){a.resolveUtilsScriptPromise=_,a.rejectUtilsScriptPromise=L});this.promise=Promise.all([u,h])}else this.resolveAutoCountryPromise=this.rejectAutoCountryPromise=function(){},this.resolveUtilsScriptPromise=this.rejectUtilsScriptPromise=function(){};this.selectedCountryData={},this._processCountryData(),this._generateMarkup(),this._setInitialState(),this._initListeners(),this._initRequests()}},{key:"_processCountryData",value:function(){this._processAllCountries(),this._processCountryCodes(),this._processPreferredCountries(),this.options.localizedCountries&&this._translateCountriesByLocale(),(this.options.onlyCountries.length||this.options.localizedCountries)&&this.countries.sort(this._countryNameSort)}},{key:"_addCountryCode",value:function(a,l,u){l.length>this.countryCodeMaxLen&&(this.countryCodeMaxLen=l.length),this.countryCodes.hasOwnProperty(l)||(this.countryCodes[l]=[]);for(var h=0;h<this.countryCodes[l].length;h++)if(this.countryCodes[l][h]===a)return;var _=u!==D?u:this.countryCodes[l].length;this.countryCodes[l][_]=a}},{key:"_processAllCountries",value:function(){if(this.options.onlyCountries.length){var a=this.options.onlyCountries.map(function(u){return u.toLowerCase()});this.countries=$.filter(function(u){return a.indexOf(u.iso2)>-1})}else if(this.options.excludeCountries.length){var l=this.options.excludeCountries.map(function(u){return u.toLowerCase()});this.countries=$.filter(function(u){return l.indexOf(u.iso2)===-1})}else this.countries=$}},{key:"_translateCountriesByLocale",value:function(){for(var a=0;a<this.countries.length;a++){var l=this.countries[a].iso2.toLowerCase();this.options.localizedCountries.hasOwnProperty(l)&&(this.countries[a].name=this.options.localizedCountries[l])}}},{key:"_countryNameSort",value:function(a,l){return a.name<l.name?-1:a.name>l.name?1:0}},{key:"_processCountryCodes",value:function(){this.countryCodeMaxLen=0,this.dialCodes={},this.countryCodes={};for(var a=0;a<this.countries.length;a++){var l=this.countries[a];this.dialCodes[l.dialCode]||(this.dialCodes[l.dialCode]=!0),this._addCountryCode(l.iso2,l.dialCode,l.priority)}for(var u=0;u<this.countries.length;u++){var h=this.countries[u];if(h.areaCodes)for(var _=this.countryCodes[h.dialCode][0],L=0;L<h.areaCodes.length;L++){for(var N=h.areaCodes[L],F=1;F<N.length;F++){var Z=h.dialCode+N.substr(0,F);this._addCountryCode(_,Z),this._addCountryCode(h.iso2,Z)}this._addCountryCode(h.iso2,h.dialCode+N)}}}},{key:"_processPreferredCountries",value:function(){this.preferredCountries=[];for(var a=0;a<this.options.preferredCountries.length;a++){var l=this.options.preferredCountries[a].toLowerCase(),u=this._getCountryData(l,!1,!0);u&&this.preferredCountries.push(u)}}},{key:"_createEl",value:function(a,l,u){var h=document.createElement(a);return l&&w(l,function(_,L){return h.setAttribute(_,L)}),u&&u.appendChild(h),h}},{key:"_generateMarkup",value:function(){!this.telInput.hasAttribute("autocomplete")&&!(this.telInput.form&&this.telInput.form.hasAttribute("autocomplete"))&&this.telInput.setAttribute("autocomplete","off");var a=this.options,l=a.allowDropdown,u=a.separateDialCode,h=a.showFlags,_=a.customContainer,L=a.hiddenInput,N=a.dropdownContainer,F="iti";l&&(F+=" iti--allow-dropdown"),u&&(F+=" iti--separate-dial-code"),h&&(F+=" iti--show-flags"),_&&(F+=" ".concat(_));var Z=this._createEl("div",{class:F});this.telInput.parentNode.insertBefore(Z,this.telInput);var J=l||h||u;if(J&&(this.flagsContainer=this._createEl("div",{class:"iti__flag-container"},Z)),Z.appendChild(this.telInput),J&&(this.selectedFlag=this._createEl("div",E({class:"iti__selected-flag"},l&&{role:"combobox","aria-haspopup":"listbox","aria-controls":"iti-".concat(this.id,"__country-listbox"),"aria-expanded":"false","aria-label":"Telephone country code"}),this.flagsContainer)),h&&(this.selectedFlagInner=this._createEl("div",{class:"iti__flag"},this.selectedFlag)),this.selectedFlag&&this.telInput.disabled&&this.selectedFlag.setAttribute("aria-disabled","true"),u&&(this.selectedDialCode=this._createEl("div",{class:"iti__selected-dial-code"},this.selectedFlag)),l&&(this.telInput.disabled||this.selectedFlag.setAttribute("tabindex","0"),this.dropdownArrow=this._createEl("div",{class:"iti__arrow"},this.selectedFlag),this.countryList=this._createEl("ul",{class:"iti__country-list iti__hide",id:"iti-".concat(this.id,"__country-listbox"),role:"listbox","aria-label":"List of countries"}),this.preferredCountries.length&&(this._appendListItems(this.preferredCountries,"iti__preferred",!0),this._createEl("li",{class:"iti__divider","aria-hidden":"true"},this.countryList)),this._appendListItems(this.countries,"iti__standard"),N?(this.dropdown=this._createEl("div",{class:"iti iti--container"}),this.dropdown.appendChild(this.countryList)):this.flagsContainer.appendChild(this.countryList)),L){var ee=L,C=this.telInput.getAttribute("name");if(C){var B=C.lastIndexOf("[");B!==-1&&(ee="".concat(C.substr(0,B),"[").concat(ee,"]"))}this.hiddenInput=this._createEl("input",{type:"hidden",name:ee}),Z.appendChild(this.hiddenInput)}}},{key:"_appendListItems",value:function(a,l,u){for(var h="",_=0;_<a.length;_++){var L=a[_],N=u?"-preferred":"";h+="<li class='iti__country ".concat(l,"' tabIndex='-1' id='iti-").concat(this.id,"__item-").concat(L.iso2).concat(N,"' role='option' data-dial-code='").concat(L.dialCode,"' data-country-code='").concat(L.iso2,"' aria-selected='false'>"),this.options.showFlags&&(h+="<div class='iti__flag-box'><div class='iti__flag iti__".concat(L.iso2,"'></div></div>")),h+="<span class='iti__country-name'>".concat(L.name,"</span>"),h+="<span class='iti__dial-code'>+".concat(L.dialCode,"</span>"),h+="</li>"}this.countryList.insertAdjacentHTML("beforeend",h)}},{key:"_setInitialState",value:function(){var a=this.telInput.getAttribute("value"),l=this.telInput.value,u=a&&a.charAt(0)==="+"&&(!l||l.charAt(0)!=="+"),h=u?a:l,_=this._getDialCode(h),L=this._isRegionlessNanp(h),N=this.options,F=N.initialCountry,Z=N.autoInsertDialCode;_&&!L?this._updateFlagFromNumber(h):F!=="auto"&&(F?this._setFlag(F.toLowerCase()):_&&L?this._setFlag("us"):(this.defaultCountry=this.preferredCountries.length?this.preferredCountries[0].iso2:this.countries[0].iso2,h||this._setFlag(this.defaultCountry)),!h&&Z&&(this.telInput.value="+".concat(this.selectedCountryData.dialCode))),h&&this._updateValFromNumber(h)}},{key:"_initListeners",value:function(){this._initKeyListeners(),this.options.autoInsertDialCode&&this._initBlurListeners(),this.options.allowDropdown&&this._initDropdownListeners(),this.hiddenInput&&this._initHiddenInputListener()}},{key:"_initHiddenInputListener",value:function(){var a=this;this._handleHiddenInputSubmit=function(){a.hiddenInput.value=a.getNumber()},this.telInput.form&&this.telInput.form.addEventListener("submit",this._handleHiddenInputSubmit)}},{key:"_getClosestLabel",value:function(){for(var a=this.telInput;a&&a.tagName!=="LABEL";)a=a.parentNode;return a}},{key:"_initDropdownListeners",value:function(){var a=this;this._handleLabelClick=function(u){a.countryList.classList.contains("iti__hide")?a.telInput.focus():u.preventDefault()};var l=this._getClosestLabel();l&&l.addEventListener("click",this._handleLabelClick),this._handleClickSelectedFlag=function(){a.countryList.classList.contains("iti__hide")&&!a.telInput.disabled&&!a.telInput.readOnly&&a._showDropdown()},this.selectedFlag.addEventListener("click",this._handleClickSelectedFlag),this._handleFlagsContainerKeydown=function(u){var h=a.countryList.classList.contains("iti__hide");h&&["ArrowUp","Up","ArrowDown","Down"," ","Enter"].indexOf(u.key)!==-1&&(u.preventDefault(),u.stopPropagation(),a._showDropdown()),u.key==="Tab"&&a._closeDropdown()},this.flagsContainer.addEventListener("keydown",this._handleFlagsContainerKeydown)}},{key:"_initRequests",value:function(){var a=this;this.options.utilsScript&&!window.intlTelInputUtils?window.intlTelInputGlobals.documentReady()?window.intlTelInputGlobals.loadUtils(this.options.utilsScript):window.addEventListener("load",function(){window.intlTelInputGlobals.loadUtils(a.options.utilsScript)}):this.resolveUtilsScriptPromise(),this.options.initialCountry==="auto"?this._loadAutoCountry():this.resolveAutoCountryPromise()}},{key:"_loadAutoCountry",value:function(){window.intlTelInputGlobals.autoCountry?this.handleAutoCountry():window.intlTelInputGlobals.startedLoadingAutoCountry||(window.intlTelInputGlobals.startedLoadingAutoCountry=!0,typeof this.options.geoIpLookup=="function"&&this.options.geoIpLookup(function(a){window.intlTelInputGlobals.autoCountry=a.toLowerCase(),setTimeout(function(){return b("handleAutoCountry")})},function(){return b("rejectAutoCountryPromise")}))}},{key:"_initKeyListeners",value:function(){var a=this;this._handleKeyupEvent=function(){a._updateFlagFromNumber(a.telInput.value)&&a._triggerCountryChange()},this.telInput.addEventListener("keyup",this._handleKeyupEvent),this._handleClipboardEvent=function(){setTimeout(a._handleKeyupEvent)},this.telInput.addEventListener("cut",this._handleClipboardEvent),this.telInput.addEventListener("paste",this._handleClipboardEvent)}},{key:"_cap",value:function(a){var l=this.telInput.getAttribute("maxlength");return l&&a.length>l?a.substr(0,l):a}},{key:"_initBlurListeners",value:function(){var a=this;this._handleSubmitOrBlurEvent=function(){a._removeEmptyDialCode()},this.telInput.form&&this.telInput.form.addEventListener("submit",this._handleSubmitOrBlurEvent),this.telInput.addEventListener("blur",this._handleSubmitOrBlurEvent)}},{key:"_removeEmptyDialCode",value:function(){if(this.telInput.value.charAt(0)==="+"){var a=this._getNumeric(this.telInput.value);(!a||this.selectedCountryData.dialCode===a)&&(this.telInput.value="")}}},{key:"_getNumeric",value:function(a){return a.replace(/\D/g,"")}},{key:"_trigger",value:function(a){var l=document.createEvent("Event");l.initEvent(a,!0,!0),this.telInput.dispatchEvent(l)}},{key:"_showDropdown",value:function(){this.countryList.classList.remove("iti__hide"),this.selectedFlag.setAttribute("aria-expanded","true"),this._setDropdownPosition(),this.activeItem&&(this._highlightListItem(this.activeItem,!1),this._scrollTo(this.activeItem,!0)),this._bindDropdownListeners(),this.dropdownArrow.classList.add("iti__arrow--up"),this._trigger("open:countrydropdown")}},{key:"_toggleClass",value:function(a,l,u){u&&!a.classList.contains(l)?a.classList.add(l):!u&&a.classList.contains(l)&&a.classList.remove(l)}},{key:"_setDropdownPosition",value:function(){var a=this;if(this.options.dropdownContainer&&this.options.dropdownContainer.appendChild(this.dropdown),!this.options.useFullscreenPopup){var l=this.telInput.getBoundingClientRect(),u=window.pageYOffset||document.documentElement.scrollTop,h=l.top+u,_=this.countryList.offsetHeight,L=h+this.telInput.offsetHeight+_<u+window.innerHeight,N=h-_>u;if(this._toggleClass(this.countryList,"iti__country-list--dropup",!L&&N),this.options.dropdownContainer){var F=!L&&N?0:this.telInput.offsetHeight;this.dropdown.style.top="".concat(h+F,"px"),this.dropdown.style.left="".concat(l.left+document.body.scrollLeft,"px"),this._handleWindowScroll=function(){return a._closeDropdown()},window.addEventListener("scroll",this._handleWindowScroll)}}}},{key:"_getClosestListItem",value:function(a){for(var l=a;l&&l!==this.countryList&&!l.classList.contains("iti__country");)l=l.parentNode;return l===this.countryList?null:l}},{key:"_bindDropdownListeners",value:function(){var a=this;this._handleMouseoverCountryList=function(_){var L=a._getClosestListItem(_.target);L&&a._highlightListItem(L,!1)},this.countryList.addEventListener("mouseover",this._handleMouseoverCountryList),this._handleClickCountryList=function(_){var L=a._getClosestListItem(_.target);L&&a._selectListItem(L)},this.countryList.addEventListener("click",this._handleClickCountryList);var l=!0;this._handleClickOffToClose=function(){l||a._closeDropdown(),l=!1},document.documentElement.addEventListener("click",this._handleClickOffToClose);var u="",h=null;this._handleKeydownOnDropdown=function(_){_.preventDefault(),_.key==="ArrowUp"||_.key==="Up"||_.key==="ArrowDown"||_.key==="Down"?a._handleUpDownKey(_.key):_.key==="Enter"?a._handleEnterKey():_.key==="Escape"?a._closeDropdown():/^[a-zA-ZÀ-ÿа-яА-Я ]$/.test(_.key)&&(h&&clearTimeout(h),u+=_.key.toLowerCase(),a._searchForCountry(u),h=setTimeout(function(){u=""},1e3))},document.addEventListener("keydown",this._handleKeydownOnDropdown)}},{key:"_handleUpDownKey",value:function(a){var l=a==="ArrowUp"||a==="Up"?this.highlightedItem.previousElementSibling:this.highlightedItem.nextElementSibling;l&&(l.classList.contains("iti__divider")&&(l=a==="ArrowUp"||a==="Up"?l.previousElementSibling:l.nextElementSibling),this._highlightListItem(l,!0))}},{key:"_handleEnterKey",value:function(){this.highlightedItem&&this._selectListItem(this.highlightedItem)}},{key:"_searchForCountry",value:function(a){for(var l=0;l<this.countries.length;l++)if(this._startsWith(this.countries[l].name,a)){var u=this.countryList.querySelector("#iti-".concat(this.id,"__item-").concat(this.countries[l].iso2));this._highlightListItem(u,!1),this._scrollTo(u,!0);break}}},{key:"_startsWith",value:function(a,l){return a.substr(0,l.length).toLowerCase()===l}},{key:"_updateValFromNumber",value:function(a){var l=a;if(this.options.formatOnDisplay&&window.intlTelInputUtils&&this.selectedCountryData){var u=this.options.nationalMode||l.charAt(0)!=="+"&&!this.options.separateDialCode,h=intlTelInputUtils.numberFormat,_=h.NATIONAL,L=h.INTERNATIONAL,N=u?_:L;l=intlTelInputUtils.formatNumber(l,this.selectedCountryData.iso2,N)}l=this._beforeSetNumber(l),this.telInput.value=l}},{key:"_updateFlagFromNumber",value:function(a){var l=a,u=this.selectedCountryData.dialCode,h=u==="1";l&&h&&l.charAt(0)!=="+"&&(l.charAt(0)!=="1"&&(l="1".concat(l)),l="+".concat(l)),this.options.separateDialCode&&u&&l.charAt(0)!=="+"&&(l="+".concat(u).concat(l));var _=this._getDialCode(l,!0),L=this._getNumeric(l),N=null;if(_){var F=this.countryCodes[this._getNumeric(_)],Z=F.indexOf(this.selectedCountryData.iso2)!==-1&&L.length<=_.length-1,J=u==="1"&&this._isRegionlessNanp(L);if(!J&&!Z){for(var ee=0;ee<F.length;ee++)if(F[ee]){N=F[ee];break}}}else l.charAt(0)==="+"&&L.length?N="":(!l||l==="+")&&(N=this.defaultCountry);return N!==null?this._setFlag(N):!1}},{key:"_isRegionlessNanp",value:function(a){var l=this._getNumeric(a);if(l.charAt(0)==="1"){var u=l.substr(1,3);return c.indexOf(u)!==-1}return!1}},{key:"_highlightListItem",value:function(a,l){var u=this.highlightedItem;u&&u.classList.remove("iti__highlight"),this.highlightedItem=a,this.highlightedItem.classList.add("iti__highlight"),this.selectedFlag.setAttribute("aria-activedescendant",a.getAttribute("id")),l&&this.highlightedItem.focus()}},{key:"_getCountryData",value:function(a,l,u){for(var h=l?$:this.countries,_=0;_<h.length;_++)if(h[_].iso2===a)return h[_];if(u)return null;throw new Error("No country data for '".concat(a,"'"))}},{key:"_setFlag",value:function(a){var l=this.options,u=l.allowDropdown,h=l.separateDialCode,_=l.showFlags,L=this.selectedCountryData.iso2?this.selectedCountryData:{};if(this.selectedCountryData=a?this._getCountryData(a,!1,!1):{},this.selectedCountryData.iso2&&(this.defaultCountry=this.selectedCountryData.iso2),_&&this.selectedFlagInner.setAttribute("class","iti__flag iti__".concat(a)),this._setSelectedCountryFlagTitleAttribute(a,h),h){var N=this.selectedCountryData.dialCode?"+".concat(this.selectedCountryData.dialCode):"";this.selectedDialCode.innerHTML=N;var F=this.selectedFlag.offsetWidth||this._getHiddenSelectedFlagWidth();this.isRTL?this.telInput.style.paddingRight="".concat(F+6,"px"):this.telInput.style.paddingLeft="".concat(F+6,"px")}if(this._updatePlaceholder(),u){var Z=this.activeItem;if(Z&&(Z.classList.remove("iti__active"),Z.setAttribute("aria-selected","false")),a){var J=this.countryList.querySelector("#iti-".concat(this.id,"__item-").concat(a,"-preferred"))||this.countryList.querySelector("#iti-".concat(this.id,"__item-").concat(a));J.setAttribute("aria-selected","true"),J.classList.add("iti__active"),this.activeItem=J}}return L.iso2!==a}},{key:"_setSelectedCountryFlagTitleAttribute",value:function(a,l){if(this.selectedFlag){var u;a&&!l?u="".concat(this.selectedCountryData.name,": +").concat(this.selectedCountryData.dialCode):a?u=this.selectedCountryData.name:u="Unknown",this.selectedFlag.setAttribute("title",u)}}},{key:"_getHiddenSelectedFlagWidth",value:function(){var a=this.telInput.parentNode.cloneNode();a.style.visibility="hidden",document.body.appendChild(a);var l=this.flagsContainer.cloneNode();a.appendChild(l);var u=this.selectedFlag.cloneNode(!0);l.appendChild(u);var h=u.offsetWidth;return a.parentNode.removeChild(a),h}},{key:"_updatePlaceholder",value:function(){var a=this.options.autoPlaceholder==="aggressive"||!this.hadInitialPlaceholder&&this.options.autoPlaceholder==="polite";if(window.intlTelInputUtils&&a){var l=intlTelInputUtils.numberType[this.options.placeholderNumberType],u=this.selectedCountryData.iso2?intlTelInputUtils.getExampleNumber(this.selectedCountryData.iso2,this.options.nationalMode,l):"";u=this._beforeSetNumber(u),typeof this.options.customPlaceholder=="function"&&(u=this.options.customPlaceholder(u,this.selectedCountryData)),this.telInput.setAttribute("placeholder",u)}}},{key:"_selectListItem",value:function(a){var l=this._setFlag(a.getAttribute("data-country-code"));this._closeDropdown(),this._updateDialCode(a.getAttribute("data-dial-code")),this.telInput.focus();var u=this.telInput.value.length;this.telInput.setSelectionRange(u,u),l&&this._triggerCountryChange()}},{key:"_closeDropdown",value:function(){this.countryList.classList.add("iti__hide"),this.selectedFlag.setAttribute("aria-expanded","false"),this.selectedFlag.removeAttribute("aria-activedescendant"),this.dropdownArrow.classList.remove("iti__arrow--up"),document.removeEventListener("keydown",this._handleKeydownOnDropdown),document.documentElement.removeEventListener("click",this._handleClickOffToClose),this.countryList.removeEventListener("mouseover",this._handleMouseoverCountryList),this.countryList.removeEventListener("click",this._handleClickCountryList),this.options.dropdownContainer&&(this.options.useFullscreenPopup||window.removeEventListener("scroll",this._handleWindowScroll),this.dropdown.parentNode&&this.dropdown.parentNode.removeChild(this.dropdown)),this._trigger("close:countrydropdown")}},{key:"_scrollTo",value:function(a,l){var u=this.countryList,h=window.pageYOffset||document.documentElement.scrollTop,_=u.offsetHeight,L=u.getBoundingClientRect().top+h,N=L+_,F=a.offsetHeight,Z=a.getBoundingClientRect().top+h,J=Z+F,ee=Z-L+u.scrollTop,C=_/2-F/2;if(Z<L)l&&(ee-=C),u.scrollTop=ee;else if(J>N){l&&(ee+=C);var B=_-F;u.scrollTop=ee-B}}},{key:"_updateDialCode",value:function(a){var l=this.telInput.value,u="+".concat(a),h;if(l.charAt(0)==="+"){var _=this._getDialCode(l);_?h=l.replace(_,u):h=u,this.telInput.value=h}else this.options.autoInsertDialCode&&(l?h=u+l:h=u,this.telInput.value=h)}},{key:"_getDialCode",value:function(a,l){var u="";if(a.charAt(0)==="+")for(var h="",_=0;_<a.length;_++){var L=a.charAt(_);if(!isNaN(parseInt(L,10))){if(h+=L,l)this.countryCodes[h]&&(u=a.substr(0,_+1));else if(this.dialCodes[h]){u=a.substr(0,_+1);break}if(h.length===this.countryCodeMaxLen)break}}return u}},{key:"_getFullNumber",value:function(){var a=this.telInput.value.trim(),l=this.selectedCountryData.dialCode,u,h=this._getNumeric(a);return this.options.separateDialCode&&a.charAt(0)!=="+"&&l&&h?u="+".concat(l):u="",u+a}},{key:"_beforeSetNumber",value:function(a){var l=a;if(this.options.separateDialCode){var u=this._getDialCode(l);if(u){u="+".concat(this.selectedCountryData.dialCode);var h=l[u.length]===" "||l[u.length]==="-"?u.length+1:u.length;l=l.substr(h)}}return this._cap(l)}},{key:"_triggerCountryChange",value:function(){this._trigger("countrychange")}},{key:"handleAutoCountry",value:function(){this.options.initialCountry==="auto"&&(this.defaultCountry=window.intlTelInputGlobals.autoCountry,this.telInput.value||this.setCountry(this.defaultCountry),this.resolveAutoCountryPromise())}},{key:"handleUtils",value:function(){window.intlTelInputUtils&&(this.telInput.value&&this._updateValFromNumber(this.telInput.value),this._updatePlaceholder()),this.resolveUtilsScriptPromise()}},{key:"destroy",value:function(){var a=this.telInput.form;if(this.options.allowDropdown){this._closeDropdown(),this.selectedFlag.removeEventListener("click",this._handleClickSelectedFlag),this.flagsContainer.removeEventListener("keydown",this._handleFlagsContainerKeydown);var l=this._getClosestLabel();l&&l.removeEventListener("click",this._handleLabelClick)}this.hiddenInput&&a&&a.removeEventListener("submit",this._handleHiddenInputSubmit),this.options.autoInsertDialCode&&(a&&a.removeEventListener("submit",this._handleSubmitOrBlurEvent),this.telInput.removeEventListener("blur",this._handleSubmitOrBlurEvent)),this.telInput.removeEventListener("keyup",this._handleKeyupEvent),this.telInput.removeEventListener("cut",this._handleClipboardEvent),this.telInput.removeEventListener("paste",this._handleClipboardEvent),this.telInput.removeAttribute("data-intl-tel-input-id");var u=this.telInput.parentNode;u.parentNode.insertBefore(this.telInput,u),u.parentNode.removeChild(u),delete window.intlTelInputGlobals.instances[this.id]}},{key:"getExtension",value:function(){return window.intlTelInputUtils?intlTelInputUtils.getExtension(this._getFullNumber(),this.selectedCountryData.iso2):""}},{key:"getNumber",value:function(a){if(window.intlTelInputUtils){var l=this.selectedCountryData.iso2;return intlTelInputUtils.formatNumber(this._getFullNumber(),l,a)}return""}},{key:"getNumberType",value:function(){return window.intlTelInputUtils?intlTelInputUtils.getNumberType(this._getFullNumber(),this.selectedCountryData.iso2):-99}},{key:"getSelectedCountryData",value:function(){return this.selectedCountryData}},{key:"getValidationError",value:function(){if(window.intlTelInputUtils){var a=this.selectedCountryData.iso2;return intlTelInputUtils.getValidationError(this._getFullNumber(),a)}return-99}},{key:"isValidNumber",value:function(){var a=this._getFullNumber().trim();return window.intlTelInputUtils?intlTelInputUtils.isValidNumber(a,this.selectedCountryData.iso2):null}},{key:"isPossibleNumber",value:function(){var a=this._getFullNumber().trim();return window.intlTelInputUtils?intlTelInputUtils.isPossibleNumber(a,this.selectedCountryData.iso2):null}},{key:"setCountry",value:function(a){var l=a.toLowerCase();this.selectedCountryData.iso2!==l&&(this._setFlag(l),this._updateDialCode(this.selectedCountryData.dialCode),this._triggerCountryChange())}},{key:"setNumber",value:function(a){var l=this._updateFlagFromNumber(a);this._updateValFromNumber(a),l&&this._triggerCountryChange()}},{key:"setPlaceholderNumberType",value:function(a){this.options.placeholderNumberType=a,this._updatePlaceholder()}}]),x}();y.getCountryData=function(){return $};var A=function(g,a,l){var u=document.createElement("script");u.onload=function(){b("handleUtils"),a&&a()},u.onerror=function(){b("rejectUtilsScriptPromise"),l&&l()},u.className="iti-load-utils",u.async=!0,u.src=g,document.body.appendChild(u)};return y.loadUtils=function(x){if(!window.intlTelInputUtils&&!window.intlTelInputGlobals.startedLoadingUtilsScript){if(window.intlTelInputGlobals.startedLoadingUtilsScript=!0,typeof Promise<"u")return new Promise(function(g,a){return A(x,g,a)});A(x)}return null},y.defaults=f,y.version="18.3.3",function(x,g){var a=new I(x,g);return a._init(),x.setAttribute("data-intl-tel-input-id",a.id),window.intlTelInputGlobals.instances[a.id]=a,a}}()})},"./resources/sass/app.scss":(te,U,S)=>{S.r(U)},"./node_modules/swiper/modules/a11y.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/classes-to-selector.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p}=n;E({a11y:{enabled:!0,notificationClass:"swiper-notification",prevSlideMessage:"Previous slide",nextSlideMessage:"Next slide",firstSlideMessage:"This is the first slide",lastSlideMessage:"This is the last slide",paginationBulletMessage:"Go to slide {{index}}",slideLabelMessage:"{{index}} / {{slidesLength}}",containerMessage:null,containerRoleDescriptionMessage:null,itemRoleDescriptionMessage:null,slideRole:"group",id:null}}),s.a11y={clicked:!1};let m=null;function z(C){const B=m;B.length!==0&&(B.innerHTML="",B.innerHTML=C)}const k=C=>(Array.isArray(C)?C:[C]).filter(B=>!!B);function R(C){C===void 0&&(C=16);const B=()=>Math.round(16*Math.random()).toString(16);return"x".repeat(C).replace(/x/g,B)}function O(C){C=k(C),C.forEach(B=>{B.setAttribute("tabIndex","0")})}function y(C){C=k(C),C.forEach(B=>{B.setAttribute("tabIndex","-1")})}function T(C,B){C=k(C),C.forEach(X=>{X.setAttribute("role",B)})}function f(C,B){C=k(C),C.forEach(X=>{X.setAttribute("aria-roledescription",B)})}function c(C,B){C=k(C),C.forEach(X=>{X.setAttribute("aria-controls",B)})}function w(C,B){C=k(C),C.forEach(X=>{X.setAttribute("aria-label",B)})}function b(C,B){C=k(C),C.forEach(X=>{X.setAttribute("id",B)})}function I(C,B){C=k(C),C.forEach(X=>{X.setAttribute("aria-live",B)})}function A(C){C=k(C),C.forEach(B=>{B.setAttribute("aria-disabled",!0)})}function x(C){C=k(C),C.forEach(B=>{B.setAttribute("aria-disabled",!1)})}function g(C){if(C.keyCode!==13&&C.keyCode!==32)return;const B=s.params.a11y,X=C.target;s.pagination&&s.pagination.el&&(X===s.pagination.el||s.pagination.el.contains(C.target))&&!C.target.matches((0,G.c)(s.params.pagination.bulletClass))||(s.navigation&&s.navigation.nextEl&&X===s.navigation.nextEl&&(s.isEnd&&!s.params.loop||s.slideNext(),s.isEnd?z(B.lastSlideMessage):z(B.nextSlideMessage)),s.navigation&&s.navigation.prevEl&&X===s.navigation.prevEl&&(s.isBeginning&&!s.params.loop||s.slidePrev(),s.isBeginning?z(B.firstSlideMessage):z(B.prevSlideMessage)),s.pagination&&X.matches((0,G.c)(s.params.pagination.bulletClass))&&X.click())}function a(){if(s.params.loop||s.params.rewind||!s.navigation)return;const{nextEl:C,prevEl:B}=s.navigation;B&&(s.isBeginning?(A(B),y(B)):(x(B),O(B))),C&&(s.isEnd?(A(C),y(C)):(x(C),O(C)))}function l(){return s.pagination&&s.pagination.bullets&&s.pagination.bullets.length}function u(){return l()&&s.params.pagination.clickable}function h(){const C=s.params.a11y;l()&&s.pagination.bullets.forEach(B=>{s.params.pagination.clickable&&(O(B),s.params.pagination.renderBullet||(T(B,"button"),w(B,C.paginationBulletMessage.replace(/\{\{index\}\}/,(0,D.g)(B)+1)))),B.matches((0,G.c)(s.params.pagination.bulletActiveClass))?B.setAttribute("aria-current","true"):B.removeAttribute("aria-current")})}const _=(C,B,X)=>{O(C),C.tagName!=="BUTTON"&&(T(C,"button"),C.addEventListener("keydown",g)),w(C,X),c(C,B)},L=()=>{s.a11y.clicked=!0},N=()=>{requestAnimationFrame(()=>{requestAnimationFrame(()=>{s.destroyed||(s.a11y.clicked=!1)})})},F=C=>{if(s.a11y.clicked)return;const B=C.target.closest(`.${s.params.slideClass}, swiper-slide`);if(!B||!s.slides.includes(B))return;const X=s.slides.indexOf(B)===s.activeIndex,j=s.params.watchSlidesProgress&&s.visibleSlides&&s.visibleSlides.includes(B);X||j||C.sourceCapabilities&&C.sourceCapabilities.firesTouchEvents||(s.isHorizontal()?s.el.scrollLeft=0:s.el.scrollTop=0,s.slideTo(s.slides.indexOf(B),0))},Z=()=>{const C=s.params.a11y;C.itemRoleDescriptionMessage&&f(s.slides,C.itemRoleDescriptionMessage),C.slideRole&&T(s.slides,C.slideRole);const B=s.slides.length;C.slideLabelMessage&&s.slides.forEach((X,j)=>{const V=s.params.loop?parseInt(X.getAttribute("data-swiper-slide-index"),10):j,Y=C.slideLabelMessage.replace(/\{\{index\}\}/,V+1).replace(/\{\{slidesLength\}\}/,B);w(X,Y)})},J=()=>{const C=s.params.a11y;s.el.append(m);const B=s.el;C.containerRoleDescriptionMessage&&f(B,C.containerRoleDescriptionMessage),C.containerMessage&&w(B,C.containerMessage);const X=s.wrapperEl,j=C.id||X.getAttribute("id")||`swiper-wrapper-${R(16)}`,V=s.params.autoplay&&s.params.autoplay.enabled?"off":"polite";b(X,j),I(X,V),Z();let{nextEl:Y,prevEl:le}=s.navigation?s.navigation:{};Y=k(Y),le=k(le),Y&&Y.forEach(ce=>_(ce,j,C.nextSlideMessage)),le&&le.forEach(ce=>_(ce,j,C.prevSlideMessage)),u()&&k(s.pagination.el).forEach(Te=>{Te.addEventListener("keydown",g)}),s.el.addEventListener("focus",F,!0),s.el.addEventListener("pointerdown",L,!0),s.el.addEventListener("pointerup",N,!0)};function ee(){m&&m.remove();let{nextEl:C,prevEl:B}=s.navigation?s.navigation:{};C=k(C),B=k(B),C&&C.forEach(X=>X.removeEventListener("keydown",g)),B&&B.forEach(X=>X.removeEventListener("keydown",g)),u()&&k(s.pagination.el).forEach(j=>{j.removeEventListener("keydown",g)}),s.el.removeEventListener("focus",F,!0),s.el.removeEventListener("pointerdown",L,!0),s.el.removeEventListener("pointerup",N,!0)}p("beforeInit",()=>{m=(0,D.c)("span",s.params.a11y.notificationClass),m.setAttribute("aria-live","assertive"),m.setAttribute("aria-atomic","true")}),p("afterInit",()=>{s.params.a11y.enabled&&J()}),p("slidesLengthChange snapGridLengthChange slidesGridLengthChange",()=>{s.params.a11y.enabled&&Z()}),p("fromEdge toEdge afterInit lock unlock",()=>{s.params.a11y.enabled&&a()}),p("paginationUpdate",()=>{s.params.a11y.enabled&&h()}),p("destroy",()=>{s.params.a11y.enabled&&ee()})}},"./node_modules/swiper/modules/autoplay.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs");function D($){let{swiper:n,extendParams:s,on:E,emit:p,params:m}=$;n.autoplay={running:!1,paused:!1,timeLeft:0},s({autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!1,stopOnLastSlide:!1,reverseDirection:!1,pauseOnMouseEnter:!1}});let z,k,R=m&&m.autoplay?m.autoplay.delay:3e3,O=m&&m.autoplay?m.autoplay.delay:3e3,y,T=new Date().getTime(),f,c,w,b,I,A,x;function g(j){!n||n.destroyed||!n.wrapperEl||j.target===n.wrapperEl&&(n.wrapperEl.removeEventListener("transitionend",g),!x&&N())}const a=()=>{if(n.destroyed||!n.autoplay.running)return;n.autoplay.paused?f=!0:f&&(O=y,f=!1);const j=n.autoplay.paused?y:T+O-new Date().getTime();n.autoplay.timeLeft=j,p("autoplayTimeLeft",j,j/R),k=requestAnimationFrame(()=>{a()})},l=()=>{let j;return n.virtual&&n.params.virtual.enabled?j=n.slides.filter(Y=>Y.classList.contains("swiper-slide-active"))[0]:j=n.slides[n.activeIndex],j?parseInt(j.getAttribute("data-swiper-autoplay"),10):void 0},u=j=>{if(n.destroyed||!n.autoplay.running)return;cancelAnimationFrame(k),a();let V=typeof j>"u"?n.params.autoplay.delay:j;R=n.params.autoplay.delay,O=n.params.autoplay.delay;const Y=l();!Number.isNaN(Y)&&Y>0&&typeof j>"u"&&(V=Y,R=Y,O=Y),y=V;const le=n.params.speed,ce=()=>{!n||n.destroyed||(n.params.autoplay.reverseDirection?!n.isBeginning||n.params.loop||n.params.rewind?(n.slidePrev(le,!0,!0),p("autoplay")):n.params.autoplay.stopOnLastSlide||(n.slideTo(n.slides.length-1,le,!0,!0),p("autoplay")):!n.isEnd||n.params.loop||n.params.rewind?(n.slideNext(le,!0,!0),p("autoplay")):n.params.autoplay.stopOnLastSlide||(n.slideTo(0,le,!0,!0),p("autoplay")),n.params.cssMode&&(T=new Date().getTime(),requestAnimationFrame(()=>{u()})))};return V>0?(clearTimeout(z),z=setTimeout(()=>{ce()},V)):requestAnimationFrame(()=>{ce()}),V},h=()=>{T=new Date().getTime(),n.autoplay.running=!0,u(),p("autoplayStart")},_=()=>{n.autoplay.running=!1,clearTimeout(z),cancelAnimationFrame(k),p("autoplayStop")},L=(j,V)=>{if(n.destroyed||!n.autoplay.running)return;clearTimeout(z),j||(A=!0);const Y=()=>{p("autoplayPause"),n.params.autoplay.waitForTransition?n.wrapperEl.addEventListener("transitionend",g):N()};if(n.autoplay.paused=!0,V){I&&(y=n.params.autoplay.delay),I=!1,Y();return}y=(y||n.params.autoplay.delay)-(new Date().getTime()-T),!(n.isEnd&&y<0&&!n.params.loop)&&(y<0&&(y=0),Y())},N=()=>{n.isEnd&&y<0&&!n.params.loop||n.destroyed||!n.autoplay.running||(T=new Date().getTime(),A?(A=!1,u(y)):u(),n.autoplay.paused=!1,p("autoplayResume"))},F=()=>{if(n.destroyed||!n.autoplay.running)return;const j=(0,G.g)();j.visibilityState==="hidden"&&(A=!0,L(!0)),j.visibilityState==="visible"&&N()},Z=j=>{j.pointerType==="mouse"&&(A=!0,x=!0,!(n.animating||n.autoplay.paused)&&L(!0))},J=j=>{j.pointerType==="mouse"&&(x=!1,n.autoplay.paused&&N())},ee=()=>{n.params.autoplay.pauseOnMouseEnter&&(n.el.addEventListener("pointerenter",Z),n.el.addEventListener("pointerleave",J))},C=()=>{n.el.removeEventListener("pointerenter",Z),n.el.removeEventListener("pointerleave",J)},B=()=>{(0,G.g)().addEventListener("visibilitychange",F)},X=()=>{(0,G.g)().removeEventListener("visibilitychange",F)};E("init",()=>{n.params.autoplay.enabled&&(ee(),B(),h())}),E("destroy",()=>{C(),X(),n.autoplay.running&&_()}),E("_freeModeStaticRelease",()=>{(w||A)&&N()}),E("_freeModeNoMomentumRelease",()=>{n.params.autoplay.disableOnInteraction?_():L(!0,!0)}),E("beforeTransitionStart",(j,V,Y)=>{n.destroyed||!n.autoplay.running||(Y||!n.params.autoplay.disableOnInteraction?L(!0,!0):_())}),E("sliderFirstMove",()=>{if(!(n.destroyed||!n.autoplay.running)){if(n.params.autoplay.disableOnInteraction){_();return}c=!0,w=!1,A=!1,b=setTimeout(()=>{A=!0,w=!0,L(!0)},200)}}),E("touchEnd",()=>{if(!(n.destroyed||!n.autoplay.running||!c)){if(clearTimeout(b),clearTimeout(z),n.params.autoplay.disableOnInteraction){w=!1,c=!1;return}w&&n.params.cssMode&&N(),w=!1,c=!1}}),E("slideChange",()=>{n.destroyed||!n.autoplay.running||(I=!0)}),Object.assign(n.autoplay,{start:h,stop:_,pause:L,resume:N})}},"./node_modules/swiper/modules/controller.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($){let{swiper:n,extendParams:s,on:E}=$;s({controller:{control:void 0,inverse:!1,by:"slide"}}),n.controller={control:void 0};function p(O,y){const T=function(){let b,I,A;return(x,g)=>{for(I=-1,b=x.length;b-I>1;)A=b+I>>1,x[A]<=g?I=A:b=A;return b}}();this.x=O,this.y=y,this.lastIndex=O.length-1;let f,c;return this.interpolate=function(b){return b?(c=T(this.x,b),f=c-1,(b-this.x[f])*(this.y[c]-this.y[f])/(this.x[c]-this.x[f])+this.y[f]):0},this}function m(O){n.controller.spline=n.params.loop?new p(n.slidesGrid,O.slidesGrid):new p(n.snapGrid,O.snapGrid)}function z(O,y){const T=n.controller.control;let f,c;const w=n.constructor;function b(I){if(I.destroyed)return;const A=n.rtlTranslate?-n.translate:n.translate;n.params.controller.by==="slide"&&(m(I),c=-n.controller.spline.interpolate(-A)),(!c||n.params.controller.by==="container")&&(f=(I.maxTranslate()-I.minTranslate())/(n.maxTranslate()-n.minTranslate()),(Number.isNaN(f)||!Number.isFinite(f))&&(f=1),c=(A-n.minTranslate())*f+I.minTranslate()),n.params.controller.inverse&&(c=I.maxTranslate()-c),I.updateProgress(c),I.setTranslate(c,n),I.updateActiveIndex(),I.updateSlidesClasses()}if(Array.isArray(T))for(let I=0;I<T.length;I+=1)T[I]!==y&&T[I]instanceof w&&b(T[I]);else T instanceof w&&y!==T&&b(T)}function k(O,y){const T=n.constructor,f=n.controller.control;let c;function w(b){b.destroyed||(b.setTransition(O,n),O!==0&&(b.transitionStart(),b.params.autoHeight&&(0,G.n)(()=>{b.updateAutoHeight()}),(0,G.j)(b.wrapperEl,()=>{f&&b.transitionEnd()})))}if(Array.isArray(f))for(c=0;c<f.length;c+=1)f[c]!==y&&f[c]instanceof T&&w(f[c]);else f instanceof T&&y!==f&&w(f)}function R(){n.controller.control&&n.controller.spline&&(n.controller.spline=void 0,delete n.controller.spline)}E("beforeInit",()=>{if(typeof window<"u"&&(typeof n.params.controller.control=="string"||n.params.controller.control instanceof HTMLElement)){const O=document.querySelector(n.params.controller.control);if(O&&O.swiper)n.controller.control=O.swiper;else if(O){const y=T=>{n.controller.control=T.detail[0],n.update(),O.removeEventListener("init",y)};O.addEventListener("init",y)}return}n.controller.control=n.params.controller.control}),E("update",()=>{R()}),E("resize",()=>{R()}),E("observerUpdate",()=>{R()}),E("setTranslate",(O,y,T)=>{!n.controller.control||n.controller.control.destroyed||n.controller.setTranslate(y,T)}),E("setTransition",(O,y,T)=>{!n.controller.control||n.controller.control.destroyed||n.controller.setTransition(y,T)}),Object.assign(n.controller,{setTranslate:z,setTransition:k})}},"./node_modules/swiper/modules/effect-cards.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>E});var G=S("./node_modules/swiper/shared/create-shadow.mjs"),D=S("./node_modules/swiper/shared/effect-init.mjs"),$=S("./node_modules/swiper/shared/effect-target.mjs"),n=S("./node_modules/swiper/shared/effect-virtual-transition-end.mjs"),s=S("./node_modules/swiper/shared/utils.mjs");function E(p){let{swiper:m,extendParams:z,on:k}=p;z({cardsEffect:{slideShadows:!0,rotate:!0,perSlideRotate:2,perSlideOffset:8}});const R=()=>{const{slides:y,activeIndex:T,rtlTranslate:f}=m,c=m.params.cardsEffect,{startTranslate:w,isTouched:b}=m.touchEventsData,I=f?-m.translate:m.translate;for(let A=0;A<y.length;A+=1){const x=y[A],g=x.progress,a=Math.min(Math.max(g,-4),4);let l=x.swiperSlideOffset;m.params.centeredSlides&&!m.params.cssMode&&(m.wrapperEl.style.transform=`translateX(${m.minTranslate()}px)`),m.params.centeredSlides&&m.params.cssMode&&(l-=y[0].swiperSlideOffset);let u=m.params.cssMode?-l-m.translate:-l,h=0;const _=-100*Math.abs(a);let L=1,N=-c.perSlideRotate*a,F=c.perSlideOffset-Math.abs(a)*.75;const Z=m.virtual&&m.params.virtual.enabled?m.virtual.from+A:A,J=(Z===T||Z===T-1)&&a>0&&a<1&&(b||m.params.cssMode)&&I<w,ee=(Z===T||Z===T+1)&&a<0&&a>-1&&(b||m.params.cssMode)&&I>w;if(J||ee){const j=(1-Math.abs((Math.abs(a)-.5)/.5))**.5;N+=-28*a*j,L+=-.5*j,F+=96*j,h=`${-25*j*Math.abs(a)}%`}if(a<0?u=`calc(${u}px ${f?"-":"+"} (${F*Math.abs(a)}%))`:a>0?u=`calc(${u}px ${f?"-":"+"} (-${F*Math.abs(a)}%))`:u=`${u}px`,!m.isHorizontal()){const j=h;h=u,u=j}const C=a<0?`${1+(1-L)*a}`:`${1-(1-L)*a}`,B=`
        translate3d(${u}, ${h}, ${_}px)
        rotateZ(${c.rotate?f?-N:N:0}deg)
        scale(${C})
      `;if(c.slideShadows){let j=x.querySelector(".swiper-slide-shadow");j||(j=(0,G.c)("cards",x)),j&&(j.style.opacity=Math.min(Math.max((Math.abs(a)-.5)/.5,0),1))}x.style.zIndex=-Math.abs(Math.round(g))+y.length;const X=(0,$.e)(c,x);X.style.transform=B}},O=y=>{const T=m.slides.map(f=>(0,s.l)(f));T.forEach(f=>{f.style.transitionDuration=`${y}ms`,f.querySelectorAll(".swiper-slide-shadow").forEach(c=>{c.style.transitionDuration=`${y}ms`})}),(0,n.e)({swiper:m,duration:y,transformElements:T})};(0,D.e)({effect:"cards",swiper:m,on:k,setTranslate:R,setTransition:O,perspective:()=>!0,overwriteParams:()=>({watchSlidesProgress:!0,virtualTranslate:!m.params.cssMode})})}},"./node_modules/swiper/modules/effect-coverflow.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>s});var G=S("./node_modules/swiper/shared/create-shadow.mjs"),D=S("./node_modules/swiper/shared/effect-init.mjs"),$=S("./node_modules/swiper/shared/effect-target.mjs"),n=S("./node_modules/swiper/shared/utils.mjs");function s(E){let{swiper:p,extendParams:m,on:z}=E;m({coverflowEffect:{rotate:50,stretch:0,depth:100,scale:1,modifier:1,slideShadows:!0}});const k=()=>{const{width:O,height:y,slides:T,slidesSizesGrid:f}=p,c=p.params.coverflowEffect,w=p.isHorizontal(),b=p.translate,I=w?-b+O/2:-b+y/2,A=w?c.rotate:-c.rotate,x=c.depth;for(let g=0,a=T.length;g<a;g+=1){const l=T[g],u=f[g],h=l.swiperSlideOffset,_=(I-h-u/2)/u,L=typeof c.modifier=="function"?c.modifier(_):_*c.modifier;let N=w?A*L:0,F=w?0:A*L,Z=-x*Math.abs(L),J=c.stretch;typeof J=="string"&&J.indexOf("%")!==-1&&(J=parseFloat(c.stretch)/100*u);let ee=w?0:J*L,C=w?J*L:0,B=1-(1-c.scale)*Math.abs(L);Math.abs(C)<.001&&(C=0),Math.abs(ee)<.001&&(ee=0),Math.abs(Z)<.001&&(Z=0),Math.abs(N)<.001&&(N=0),Math.abs(F)<.001&&(F=0),Math.abs(B)<.001&&(B=0),p.browser&&p.browser.isSafari&&(Math.abs(N)/90%2===1&&(N+=.001),Math.abs(F)/90%2===1&&(F+=.001));const X=`translate3d(${C}px,${ee}px,${Z}px)  rotateX(${F}deg) rotateY(${N}deg) scale(${B})`,j=(0,$.e)(c,l);if(j.style.transform=X,l.style.zIndex=-Math.abs(Math.round(L))+1,c.slideShadows){let V=w?l.querySelector(".swiper-slide-shadow-left"):l.querySelector(".swiper-slide-shadow-top"),Y=w?l.querySelector(".swiper-slide-shadow-right"):l.querySelector(".swiper-slide-shadow-bottom");V||(V=(0,G.c)("coverflow",l,w?"left":"top")),Y||(Y=(0,G.c)("coverflow",l,w?"right":"bottom")),V&&(V.style.opacity=L>0?L:0),Y&&(Y.style.opacity=-L>0?-L:0)}}},R=O=>{p.slides.map(T=>(0,n.l)(T)).forEach(T=>{T.style.transitionDuration=`${O}ms`,T.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(f=>{f.style.transitionDuration=`${O}ms`})})};(0,D.e)({effect:"coverflow",swiper:p,on:z,setTranslate:k,setTransition:R,perspective:()=>!0,overwriteParams:()=>({watchSlidesProgress:!0})})}},"./node_modules/swiper/modules/effect-creative.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>E});var G=S("./node_modules/swiper/shared/create-shadow.mjs"),D=S("./node_modules/swiper/shared/effect-init.mjs"),$=S("./node_modules/swiper/shared/effect-target.mjs"),n=S("./node_modules/swiper/shared/effect-virtual-transition-end.mjs"),s=S("./node_modules/swiper/shared/utils.mjs");function E(p){let{swiper:m,extendParams:z,on:k}=p;z({creativeEffect:{limitProgress:1,shadowPerProgress:!1,progressMultiplier:1,perspective:!0,prev:{translate:[0,0,0],rotate:[0,0,0],opacity:1,scale:1},next:{translate:[0,0,0],rotate:[0,0,0],opacity:1,scale:1}}});const R=T=>typeof T=="string"?T:`${T}px`,O=()=>{const{slides:T,wrapperEl:f,slidesSizesGrid:c}=m,w=m.params.creativeEffect,{progressMultiplier:b}=w,I=m.params.centeredSlides;if(I){const A=c[0]/2-m.params.slidesOffsetBefore||0;f.style.transform=`translateX(calc(50% - ${A}px))`}for(let A=0;A<T.length;A+=1){const x=T[A],g=x.progress,a=Math.min(Math.max(x.progress,-w.limitProgress),w.limitProgress);let l=a;I||(l=Math.min(Math.max(x.originalProgress,-w.limitProgress),w.limitProgress));const u=x.swiperSlideOffset,h=[m.params.cssMode?-u-m.translate:-u,0,0],_=[0,0,0];let L=!1;m.isHorizontal()||(h[1]=h[0],h[0]=0);let N={translate:[0,0,0],rotate:[0,0,0],scale:1,opacity:1};a<0?(N=w.next,L=!0):a>0&&(N=w.prev,L=!0),h.forEach((X,j)=>{h[j]=`calc(${X}px + (${R(N.translate[j])} * ${Math.abs(a*b)}))`}),_.forEach((X,j)=>{let V=N.rotate[j]*Math.abs(a*b);m.browser&&m.browser.isSafari&&Math.abs(V)/90%2===1&&(V+=.001),_[j]=V}),x.style.zIndex=-Math.abs(Math.round(g))+T.length;const F=h.join(", "),Z=`rotateX(${_[0]}deg) rotateY(${_[1]}deg) rotateZ(${_[2]}deg)`,J=l<0?`scale(${1+(1-N.scale)*l*b})`:`scale(${1-(1-N.scale)*l*b})`,ee=l<0?1+(1-N.opacity)*l*b:1-(1-N.opacity)*l*b,C=`translate3d(${F}) ${Z} ${J}`;if(L&&N.shadow||!L){let X=x.querySelector(".swiper-slide-shadow");if(!X&&N.shadow&&(X=(0,G.c)("creative",x)),X){const j=w.shadowPerProgress?a*(1/w.limitProgress):a;X.style.opacity=Math.min(Math.max(Math.abs(j),0),1)}}const B=(0,$.e)(w,x);B.style.transform=C,B.style.opacity=ee,N.origin&&(B.style.transformOrigin=N.origin)}},y=T=>{const f=m.slides.map(c=>(0,s.l)(c));f.forEach(c=>{c.style.transitionDuration=`${T}ms`,c.querySelectorAll(".swiper-slide-shadow").forEach(w=>{w.style.transitionDuration=`${T}ms`})}),(0,n.e)({swiper:m,duration:T,transformElements:f,allSlides:!0})};(0,D.e)({effect:"creative",swiper:m,on:k,setTranslate:O,setTransition:y,perspective:()=>m.params.creativeEffect.perspective,overwriteParams:()=>({watchSlidesProgress:!0,virtualTranslate:!m.params.cssMode})})}},"./node_modules/swiper/modules/effect-cube.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/effect-init.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p}=n;E({cubeEffect:{slideShadows:!0,shadow:!0,shadowOffset:20,shadowScale:.94}});const m=(O,y,T)=>{let f=T?O.querySelector(".swiper-slide-shadow-left"):O.querySelector(".swiper-slide-shadow-top"),c=T?O.querySelector(".swiper-slide-shadow-right"):O.querySelector(".swiper-slide-shadow-bottom");f||(f=(0,D.c)("div",`swiper-slide-shadow-cube swiper-slide-shadow-${T?"left":"top"}`.split(" ")),O.append(f)),c||(c=(0,D.c)("div",`swiper-slide-shadow-cube swiper-slide-shadow-${T?"right":"bottom"}`.split(" ")),O.append(c)),f&&(f.style.opacity=Math.max(-y,0)),c&&(c.style.opacity=Math.max(y,0))},z=()=>{const O=s.isHorizontal();s.slides.forEach(y=>{const T=Math.max(Math.min(y.progress,1),-1);m(y,T,O)})},k=()=>{const{el:O,wrapperEl:y,slides:T,width:f,height:c,rtlTranslate:w,size:b,browser:I}=s,A=s.params.cubeEffect,x=s.isHorizontal(),g=s.virtual&&s.params.virtual.enabled;let a=0,l;A.shadow&&(x?(l=s.wrapperEl.querySelector(".swiper-cube-shadow"),l||(l=(0,D.c)("div","swiper-cube-shadow"),s.wrapperEl.append(l)),l.style.height=`${f}px`):(l=O.querySelector(".swiper-cube-shadow"),l||(l=(0,D.c)("div","swiper-cube-shadow"),O.append(l))));for(let h=0;h<T.length;h+=1){const _=T[h];let L=h;g&&(L=parseInt(_.getAttribute("data-swiper-slide-index"),10));let N=L*90,F=Math.floor(N/360);w&&(N=-N,F=Math.floor(-N/360));const Z=Math.max(Math.min(_.progress,1),-1);let J=0,ee=0,C=0;L%4===0?(J=-F*4*b,C=0):(L-1)%4===0?(J=0,C=-F*4*b):(L-2)%4===0?(J=b+F*4*b,C=b):(L-3)%4===0&&(J=-b,C=3*b+b*4*F),w&&(J=-J),x||(ee=J,J=0);const B=`rotateX(${x?0:-N}deg) rotateY(${x?N:0}deg) translate3d(${J}px, ${ee}px, ${C}px)`;Z<=1&&Z>-1&&(a=L*90+Z*90,w&&(a=-L*90-Z*90),s.browser&&s.browser.isSafari&&Math.abs(a)/90%2===1&&(a+=.001)),_.style.transform=B,A.slideShadows&&m(_,Z,x)}if(y.style.transformOrigin=`50% 50% -${b/2}px`,y.style["-webkit-transform-origin"]=`50% 50% -${b/2}px`,A.shadow)if(x)l.style.transform=`translate3d(0px, ${f/2+A.shadowOffset}px, ${-f/2}px) rotateX(89.99deg) rotateZ(0deg) scale(${A.shadowScale})`;else{const h=Math.abs(a)-Math.floor(Math.abs(a)/90)*90,_=1.5-(Math.sin(h*2*Math.PI/360)/2+Math.cos(h*2*Math.PI/360)/2),L=A.shadowScale,N=A.shadowScale/_,F=A.shadowOffset;l.style.transform=`scale3d(${L}, 1, ${N}) translate3d(0px, ${c/2+F}px, ${-c/2/N}px) rotateX(-89.99deg)`}const u=(I.isSafari||I.isWebView)&&I.needPerspectiveFix?-b/2:0;y.style.transform=`translate3d(0px,0,${u}px) rotateX(${s.isHorizontal()?0:a}deg) rotateY(${s.isHorizontal()?-a:0}deg)`,y.style.setProperty("--swiper-cube-translate-z",`${u}px`)},R=O=>{const{el:y,slides:T}=s;if(T.forEach(f=>{f.style.transitionDuration=`${O}ms`,f.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(c=>{c.style.transitionDuration=`${O}ms`})}),s.params.cubeEffect.shadow&&!s.isHorizontal()){const f=y.querySelector(".swiper-cube-shadow");f&&(f.style.transitionDuration=`${O}ms`)}};(0,G.e)({effect:"cube",swiper:s,on:p,setTranslate:k,setTransition:R,recreateShadows:z,getEffectParams:()=>s.params.cubeEffect,perspective:()=>!0,overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,resistanceRatio:0,spaceBetween:0,centeredSlides:!1,virtualTranslate:!0})})}},"./node_modules/swiper/modules/effect-fade.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>s});var G=S("./node_modules/swiper/shared/effect-init.mjs"),D=S("./node_modules/swiper/shared/effect-target.mjs"),$=S("./node_modules/swiper/shared/effect-virtual-transition-end.mjs"),n=S("./node_modules/swiper/shared/utils.mjs");function s(E){let{swiper:p,extendParams:m,on:z}=E;m({fadeEffect:{crossFade:!1}});const k=()=>{const{slides:O}=p,y=p.params.fadeEffect;for(let T=0;T<O.length;T+=1){const f=p.slides[T];let w=-f.swiperSlideOffset;p.params.virtualTranslate||(w-=p.translate);let b=0;p.isHorizontal()||(b=w,w=0);const I=p.params.fadeEffect.crossFade?Math.max(1-Math.abs(f.progress),0):1+Math.min(Math.max(f.progress,-1),0),A=(0,D.e)(y,f);A.style.opacity=I,A.style.transform=`translate3d(${w}px, ${b}px, 0px)`}},R=O=>{const y=p.slides.map(T=>(0,n.l)(T));y.forEach(T=>{T.style.transitionDuration=`${O}ms`}),(0,$.e)({swiper:p,duration:O,transformElements:y,allSlides:!0})};(0,G.e)({effect:"fade",swiper:p,on:z,setTranslate:k,setTransition:R,overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!p.params.cssMode})})}},"./node_modules/swiper/modules/effect-flip.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>E});var G=S("./node_modules/swiper/shared/create-shadow.mjs"),D=S("./node_modules/swiper/shared/effect-init.mjs"),$=S("./node_modules/swiper/shared/effect-target.mjs"),n=S("./node_modules/swiper/shared/effect-virtual-transition-end.mjs"),s=S("./node_modules/swiper/shared/utils.mjs");function E(p){let{swiper:m,extendParams:z,on:k}=p;z({flipEffect:{slideShadows:!0,limitRotation:!0}});const R=(f,c)=>{let w=m.isHorizontal()?f.querySelector(".swiper-slide-shadow-left"):f.querySelector(".swiper-slide-shadow-top"),b=m.isHorizontal()?f.querySelector(".swiper-slide-shadow-right"):f.querySelector(".swiper-slide-shadow-bottom");w||(w=(0,G.c)("flip",f,m.isHorizontal()?"left":"top")),b||(b=(0,G.c)("flip",f,m.isHorizontal()?"right":"bottom")),w&&(w.style.opacity=Math.max(-c,0)),b&&(b.style.opacity=Math.max(c,0))},O=()=>{m.params.flipEffect,m.slides.forEach(f=>{let c=f.progress;m.params.flipEffect.limitRotation&&(c=Math.max(Math.min(f.progress,1),-1)),R(f,c)})},y=()=>{const{slides:f,rtlTranslate:c}=m,w=m.params.flipEffect;for(let b=0;b<f.length;b+=1){const I=f[b];let A=I.progress;m.params.flipEffect.limitRotation&&(A=Math.max(Math.min(I.progress,1),-1));const x=I.swiperSlideOffset;let a=-180*A,l=0,u=m.params.cssMode?-x-m.translate:-x,h=0;m.isHorizontal()?c&&(a=-a):(h=u,u=0,l=-a,a=0),m.browser&&m.browser.isSafari&&(Math.abs(a)/90%2===1&&(a+=.001),Math.abs(l)/90%2===1&&(l+=.001)),I.style.zIndex=-Math.abs(Math.round(A))+f.length,w.slideShadows&&R(I,A);const _=`translate3d(${u}px, ${h}px, 0px) rotateX(${l}deg) rotateY(${a}deg)`,L=(0,$.e)(w,I);L.style.transform=_}},T=f=>{const c=m.slides.map(w=>(0,s.l)(w));c.forEach(w=>{w.style.transitionDuration=`${f}ms`,w.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(b=>{b.style.transitionDuration=`${f}ms`})}),(0,n.e)({swiper:m,duration:f,transformElements:c})};(0,D.e)({effect:"flip",swiper:m,on:k,setTranslate:y,setTransition:T,recreateShadows:O,getEffectParams:()=>m.params.flipEffect,perspective:()=>!0,overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!m.params.cssMode})})}},"./node_modules/swiper/modules/free-mode.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($){let{swiper:n,extendParams:s,emit:E,once:p}=$;s({freeMode:{enabled:!1,momentum:!0,momentumRatio:1,momentumBounce:!0,momentumBounceRatio:1,momentumVelocityRatio:1,sticky:!1,minimumVelocity:.02}});function m(){if(n.params.cssMode)return;const R=n.getTranslate();n.setTranslate(R),n.setTransition(0),n.touchEventsData.velocities.length=0,n.freeMode.onTouchEnd({currentPos:n.rtl?n.translate:-n.translate})}function z(){if(n.params.cssMode)return;const{touchEventsData:R,touches:O}=n;R.velocities.length===0&&R.velocities.push({position:O[n.isHorizontal()?"startX":"startY"],time:R.touchStartTime}),R.velocities.push({position:O[n.isHorizontal()?"currentX":"currentY"],time:(0,G.d)()})}function k(R){let{currentPos:O}=R;if(n.params.cssMode)return;const{params:y,wrapperEl:T,rtlTranslate:f,snapGrid:c,touchEventsData:w}=n,I=(0,G.d)()-w.touchStartTime;if(O<-n.minTranslate()){n.slideTo(n.activeIndex);return}if(O>-n.maxTranslate()){n.slides.length<c.length?n.slideTo(c.length-1):n.slideTo(n.slides.length-1);return}if(y.freeMode.momentum){if(w.velocities.length>1){const _=w.velocities.pop(),L=w.velocities.pop(),N=_.position-L.position,F=_.time-L.time;n.velocity=N/F,n.velocity/=2,Math.abs(n.velocity)<y.freeMode.minimumVelocity&&(n.velocity=0),(F>150||(0,G.d)()-_.time>300)&&(n.velocity=0)}else n.velocity=0;n.velocity*=y.freeMode.momentumVelocityRatio,w.velocities.length=0;let A=1e3*y.freeMode.momentumRatio;const x=n.velocity*A;let g=n.translate+x;f&&(g=-g);let a=!1,l;const u=Math.abs(n.velocity)*20*y.freeMode.momentumBounceRatio;let h;if(g<n.maxTranslate())y.freeMode.momentumBounce?(g+n.maxTranslate()<-u&&(g=n.maxTranslate()-u),l=n.maxTranslate(),a=!0,w.allowMomentumBounce=!0):g=n.maxTranslate(),y.loop&&y.centeredSlides&&(h=!0);else if(g>n.minTranslate())y.freeMode.momentumBounce?(g-n.minTranslate()>u&&(g=n.minTranslate()+u),l=n.minTranslate(),a=!0,w.allowMomentumBounce=!0):g=n.minTranslate(),y.loop&&y.centeredSlides&&(h=!0);else if(y.freeMode.sticky){let _;for(let L=0;L<c.length;L+=1)if(c[L]>-g){_=L;break}Math.abs(c[_]-g)<Math.abs(c[_-1]-g)||n.swipeDirection==="next"?g=c[_]:g=c[_-1],g=-g}if(h&&p("transitionEnd",()=>{n.loopFix()}),n.velocity!==0){if(f?A=Math.abs((-g-n.translate)/n.velocity):A=Math.abs((g-n.translate)/n.velocity),y.freeMode.sticky){const _=Math.abs((f?-g:g)-n.translate),L=n.slidesSizesGrid[n.activeIndex];_<L?A=y.speed:_<2*L?A=y.speed*1.5:A=y.speed*2.5}}else if(y.freeMode.sticky){n.slideToClosest();return}y.freeMode.momentumBounce&&a?(n.updateProgress(l),n.setTransition(A),n.setTranslate(g),n.transitionStart(!0,n.swipeDirection),n.animating=!0,(0,G.j)(T,()=>{!n||n.destroyed||!w.allowMomentumBounce||(E("momentumBounce"),n.setTransition(y.speed),setTimeout(()=>{n.setTranslate(l),(0,G.j)(T,()=>{!n||n.destroyed||n.transitionEnd()})},0))})):n.velocity?(E("_freeModeNoMomentumRelease"),n.updateProgress(g),n.setTransition(A),n.setTranslate(g),n.transitionStart(!0,n.swipeDirection),n.animating||(n.animating=!0,(0,G.j)(T,()=>{!n||n.destroyed||n.transitionEnd()}))):n.updateProgress(g),n.updateActiveIndex(),n.updateSlidesClasses()}else if(y.freeMode.sticky){n.slideToClosest();return}else y.freeMode&&E("_freeModeNoMomentumRelease");(!y.freeMode.momentum||I>=y.longSwipesMs)&&(E("_freeModeStaticRelease"),n.updateProgress(),n.updateActiveIndex(),n.updateSlidesClasses())}Object.assign(n,{freeMode:{onTouchStart:m,onTouchMove:z,onTouchEnd:k}})}},"./node_modules/swiper/modules/grid.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>G});function G(D){let{swiper:$,extendParams:n,on:s}=D;n({grid:{rows:1,fill:"column"}});let E,p,m,z;const k=()=>{let w=$.params.spaceBetween;return typeof w=="string"&&w.indexOf("%")>=0?w=parseFloat(w.replace("%",""))/100*$.size:typeof w=="string"&&(w=parseFloat(w)),w},R=w=>{const{slidesPerView:b}=$.params,{rows:I,fill:A}=$.params.grid,x=$.virtual&&$.params.virtual.enabled?$.virtual.slides.length:w.length;m=Math.floor(x/I),Math.floor(x/I)===x/I?E=x:E=Math.ceil(x/I)*I,b!=="auto"&&A==="row"&&(E=Math.max(E,b*I)),p=E/I},O=()=>{$.slides&&$.slides.forEach(w=>{w.swiperSlideGridSet&&(w.style.height="",w.style[$.getDirectionLabel("margin-top")]="")})},y=(w,b,I)=>{const{slidesPerGroup:A}=$.params,x=k(),{rows:g,fill:a}=$.params.grid,l=$.virtual&&$.params.virtual.enabled?$.virtual.slides.length:I.length;let u,h,_;if(a==="row"&&A>1){const L=Math.floor(w/(A*g)),N=w-g*A*L,F=L===0?A:Math.min(Math.ceil((l-L*g*A)/g),A);_=Math.floor(N/F),h=N-_*F+L*A,u=h+_*E/g,b.style.order=u}else a==="column"?(h=Math.floor(w/g),_=w-h*g,(h>m||h===m&&_===g-1)&&(_+=1,_>=g&&(_=0,h+=1))):(_=Math.floor(w/p),h=w-_*p);b.row=_,b.column=h,b.style.height=`calc((100% - ${(g-1)*x}px) / ${g})`,b.style[$.getDirectionLabel("margin-top")]=_!==0?x&&`${x}px`:"",b.swiperSlideGridSet=!0},T=(w,b)=>{const{centeredSlides:I,roundLengths:A}=$.params,x=k(),{rows:g}=$.params.grid;if($.virtualSize=(w+x)*E,$.virtualSize=Math.ceil($.virtualSize/g)-x,$.params.cssMode||($.wrapperEl.style[$.getDirectionLabel("width")]=`${$.virtualSize+x}px`),I){const a=[];for(let l=0;l<b.length;l+=1){let u=b[l];A&&(u=Math.floor(u)),b[l]<$.virtualSize+b[0]&&a.push(u)}b.splice(0,b.length),b.push(...a)}},f=()=>{z=$.params.grid&&$.params.grid.rows>1},c=()=>{const{params:w,el:b}=$,I=w.grid&&w.grid.rows>1;z&&!I?(b.classList.remove(`${w.containerModifierClass}grid`,`${w.containerModifierClass}grid-column`),m=1,$.emitContainerClasses()):!z&&I&&(b.classList.add(`${w.containerModifierClass}grid`),w.grid.fill==="column"&&b.classList.add(`${w.containerModifierClass}grid-column`),$.emitContainerClasses()),z=I};s("init",f),s("update",c),$.grid={initSlides:R,unsetSlides:O,updateSlide:y,updateWrapperSize:T}}},"./node_modules/swiper/modules/hash-navigation.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,emit:p,on:m}=n,z=!1;const k=(0,G.g)(),R=(0,G.a)();E({hashNavigation:{enabled:!1,replaceState:!1,watchState:!1,getSlideIndex(c,w){if(s.virtual&&s.params.virtual.enabled){const b=s.slides.filter(A=>A.getAttribute("data-hash")===w)[0];return b?parseInt(b.getAttribute("data-swiper-slide-index"),10):0}return s.getSlideIndex((0,D.e)(s.slidesEl,`.${s.params.slideClass}[data-hash="${w}"], swiper-slide[data-hash="${w}"]`)[0])}}});const O=()=>{p("hashChange");const c=k.location.hash.replace("#",""),w=s.virtual&&s.params.virtual.enabled?s.slidesEl.querySelector(`[data-swiper-slide-index="${s.activeIndex}"]`):s.slides[s.activeIndex],b=w?w.getAttribute("data-hash"):"";if(c!==b){const I=s.params.hashNavigation.getSlideIndex(s,c);if(typeof I>"u"||Number.isNaN(I))return;s.slideTo(I)}},y=()=>{if(!z||!s.params.hashNavigation.enabled)return;const c=s.virtual&&s.params.virtual.enabled?s.slidesEl.querySelector(`[data-swiper-slide-index="${s.activeIndex}"]`):s.slides[s.activeIndex],w=c?c.getAttribute("data-hash")||c.getAttribute("data-history"):"";s.params.hashNavigation.replaceState&&R.history&&R.history.replaceState?(R.history.replaceState(null,null,`#${w}`||""),p("hashSet")):(k.location.hash=w||"",p("hashSet"))},T=()=>{if(!s.params.hashNavigation.enabled||s.params.history&&s.params.history.enabled)return;z=!0;const c=k.location.hash.replace("#","");if(c){const b=s.params.hashNavigation.getSlideIndex(s,c);s.slideTo(b||0,0,s.params.runCallbacksOnInit,!0)}s.params.hashNavigation.watchState&&R.addEventListener("hashchange",O)},f=()=>{s.params.hashNavigation.watchState&&R.removeEventListener("hashchange",O)};m("init",()=>{s.params.hashNavigation.enabled&&T()}),m("destroy",()=>{s.params.hashNavigation.enabled&&f()}),m("transitionEnd _freeModeNoMomentumRelease",()=>{z&&y()}),m("slideChange",()=>{z&&s.params.cssMode&&y()})}},"./node_modules/swiper/modules/history.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs");function D($){let{swiper:n,extendParams:s,on:E}=$;s({history:{enabled:!1,root:"",replaceState:!1,key:"slides",keepQuery:!1}});let p=!1,m={};const z=c=>c.toString().replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,""),k=c=>{const w=(0,G.a)();let b;c?b=new URL(c):b=w.location;const I=b.pathname.slice(1).split("/").filter(a=>a!==""),A=I.length,x=I[A-2],g=I[A-1];return{key:x,value:g}},R=(c,w)=>{const b=(0,G.a)();if(!p||!n.params.history.enabled)return;let I;n.params.url?I=new URL(n.params.url):I=b.location;const A=n.slides[w];let x=z(A.getAttribute("data-history"));if(n.params.history.root.length>0){let a=n.params.history.root;a[a.length-1]==="/"&&(a=a.slice(0,a.length-1)),x=`${a}/${c?`${c}/`:""}${x}`}else I.pathname.includes(c)||(x=`${c?`${c}/`:""}${x}`);n.params.history.keepQuery&&(x+=I.search);const g=b.history.state;g&&g.value===x||(n.params.history.replaceState?b.history.replaceState({value:x},null,x):b.history.pushState({value:x},null,x))},O=(c,w,b)=>{if(w)for(let I=0,A=n.slides.length;I<A;I+=1){const x=n.slides[I];if(z(x.getAttribute("data-history"))===w){const a=n.getSlideIndex(x);n.slideTo(a,c,b)}}else n.slideTo(0,c,b)},y=()=>{m=k(n.params.url),O(n.params.speed,m.value,!1)},T=()=>{const c=(0,G.a)();if(n.params.history){if(!c.history||!c.history.pushState){n.params.history.enabled=!1,n.params.hashNavigation.enabled=!0;return}if(p=!0,m=k(n.params.url),!m.key&&!m.value){n.params.history.replaceState||c.addEventListener("popstate",y);return}O(0,m.value,n.params.runCallbacksOnInit),n.params.history.replaceState||c.addEventListener("popstate",y)}},f=()=>{const c=(0,G.a)();n.params.history.replaceState||c.removeEventListener("popstate",y)};E("init",()=>{n.params.history.enabled&&T()}),E("destroy",()=>{n.params.history.enabled&&f()}),E("transitionEnd _freeModeNoMomentumRelease",()=>{p&&R(n.params.history.key,n.activeIndex)}),E("slideChange",()=>{p&&n.params.cssMode&&R(n.params.history.key,n.activeIndex)})}},"./node_modules/swiper/modules/keyboard.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p,emit:m}=n;const z=(0,G.g)(),k=(0,G.a)();s.keyboard={enabled:!1},E({keyboard:{enabled:!1,onlyInViewport:!0,pageUpDown:!0}});function R(T){if(!s.enabled)return;const{rtlTranslate:f}=s;let c=T;c.originalEvent&&(c=c.originalEvent);const w=c.keyCode||c.charCode,b=s.params.keyboard.pageUpDown,I=b&&w===33,A=b&&w===34,x=w===37,g=w===39,a=w===38,l=w===40;if(!s.allowSlideNext&&(s.isHorizontal()&&g||s.isVertical()&&l||A)||!s.allowSlidePrev&&(s.isHorizontal()&&x||s.isVertical()&&a||I))return!1;if(!(c.shiftKey||c.altKey||c.ctrlKey||c.metaKey)&&!(z.activeElement&&z.activeElement.nodeName&&(z.activeElement.nodeName.toLowerCase()==="input"||z.activeElement.nodeName.toLowerCase()==="textarea"))){if(s.params.keyboard.onlyInViewport&&(I||A||x||g||a||l)){let u=!1;if((0,D.a)(s.el,`.${s.params.slideClass}, swiper-slide`).length>0&&(0,D.a)(s.el,`.${s.params.slideActiveClass}`).length===0)return;const h=s.el,_=h.clientWidth,L=h.clientHeight,N=k.innerWidth,F=k.innerHeight,Z=(0,D.b)(h);f&&(Z.left-=h.scrollLeft);const J=[[Z.left,Z.top],[Z.left+_,Z.top],[Z.left,Z.top+L],[Z.left+_,Z.top+L]];for(let ee=0;ee<J.length;ee+=1){const C=J[ee];if(C[0]>=0&&C[0]<=N&&C[1]>=0&&C[1]<=F){if(C[0]===0&&C[1]===0)continue;u=!0}}if(!u)return}s.isHorizontal()?((I||A||x||g)&&(c.preventDefault?c.preventDefault():c.returnValue=!1),((A||g)&&!f||(I||x)&&f)&&s.slideNext(),((I||x)&&!f||(A||g)&&f)&&s.slidePrev()):((I||A||a||l)&&(c.preventDefault?c.preventDefault():c.returnValue=!1),(A||l)&&s.slideNext(),(I||a)&&s.slidePrev()),m("keyPress",w)}}function O(){s.keyboard.enabled||(z.addEventListener("keydown",R),s.keyboard.enabled=!0)}function y(){s.keyboard.enabled&&(z.removeEventListener("keydown",R),s.keyboard.enabled=!1)}p("init",()=>{s.params.keyboard.enabled&&O()}),p("destroy",()=>{s.keyboard.enabled&&y()}),Object.assign(s.keyboard,{enable:O,disable:y})}},"./node_modules/swiper/modules/manipulation.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>E});function G(p){const m=this,{params:z,slidesEl:k}=m;z.loop&&m.loopDestroy();const R=O=>{if(typeof O=="string"){const y=document.createElement("div");y.innerHTML=O,k.append(y.children[0]),y.innerHTML=""}else k.append(O)};if(typeof p=="object"&&"length"in p)for(let O=0;O<p.length;O+=1)p[O]&&R(p[O]);else R(p);m.recalcSlides(),z.loop&&m.loopCreate(),(!z.observer||m.isElement)&&m.update()}function D(p){const m=this,{params:z,activeIndex:k,slidesEl:R}=m;z.loop&&m.loopDestroy();let O=k+1;const y=T=>{if(typeof T=="string"){const f=document.createElement("div");f.innerHTML=T,R.prepend(f.children[0]),f.innerHTML=""}else R.prepend(T)};if(typeof p=="object"&&"length"in p){for(let T=0;T<p.length;T+=1)p[T]&&y(p[T]);O=k+p.length}else y(p);m.recalcSlides(),z.loop&&m.loopCreate(),(!z.observer||m.isElement)&&m.update(),m.slideTo(O,0,!1)}function $(p,m){const z=this,{params:k,activeIndex:R,slidesEl:O}=z;let y=R;k.loop&&(y-=z.loopedSlides,z.loopDestroy(),z.recalcSlides());const T=z.slides.length;if(p<=0){z.prependSlide(m);return}if(p>=T){z.appendSlide(m);return}let f=y>p?y+1:y;const c=[];for(let w=T-1;w>=p;w-=1){const b=z.slides[w];b.remove(),c.unshift(b)}if(typeof m=="object"&&"length"in m){for(let w=0;w<m.length;w+=1)m[w]&&O.append(m[w]);f=y>p?y+m.length:y}else O.append(m);for(let w=0;w<c.length;w+=1)O.append(c[w]);z.recalcSlides(),k.loop&&z.loopCreate(),(!k.observer||z.isElement)&&z.update(),k.loop?z.slideTo(f+z.loopedSlides,0,!1):z.slideTo(f,0,!1)}function n(p){const m=this,{params:z,activeIndex:k}=m;let R=k;z.loop&&(R-=m.loopedSlides,m.loopDestroy());let O=R,y;if(typeof p=="object"&&"length"in p){for(let T=0;T<p.length;T+=1)y=p[T],m.slides[y]&&m.slides[y].remove(),y<O&&(O-=1);O=Math.max(O,0)}else y=p,m.slides[y]&&m.slides[y].remove(),y<O&&(O-=1),O=Math.max(O,0);m.recalcSlides(),z.loop&&m.loopCreate(),(!z.observer||m.isElement)&&m.update(),z.loop?m.slideTo(O+m.loopedSlides,0,!1):m.slideTo(O,0,!1)}function s(){const p=this,m=[];for(let z=0;z<p.slides.length;z+=1)m.push(z);p.removeSlide(m)}function E(p){let{swiper:m}=p;Object.assign(m,{appendSlide:G.bind(m),prependSlide:D.bind(m),addSlide:$.bind(m),removeSlide:n.bind(m),removeAllSlides:s.bind(m)})}},"./node_modules/swiper/modules/mousewheel.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p,emit:m}=n;const z=(0,G.a)();E({mousewheel:{enabled:!1,releaseOnEdges:!1,invert:!1,forceToAxis:!1,sensitivity:1,eventsTarget:"container",thresholdDelta:null,thresholdTime:null,noMousewheelClass:"swiper-no-mousewheel"}}),s.mousewheel={enabled:!1};let k,R=(0,D.d)(),O;const y=[];function T(a){let _=0,L=0,N=0,F=0;return"detail"in a&&(L=a.detail),"wheelDelta"in a&&(L=-a.wheelDelta/120),"wheelDeltaY"in a&&(L=-a.wheelDeltaY/120),"wheelDeltaX"in a&&(_=-a.wheelDeltaX/120),"axis"in a&&a.axis===a.HORIZONTAL_AXIS&&(_=L,L=0),N=_*10,F=L*10,"deltaY"in a&&(F=a.deltaY),"deltaX"in a&&(N=a.deltaX),a.shiftKey&&!N&&(N=F,F=0),(N||F)&&a.deltaMode&&(a.deltaMode===1?(N*=40,F*=40):(N*=800,F*=800)),N&&!_&&(_=N<1?-1:1),F&&!L&&(L=F<1?-1:1),{spinX:_,spinY:L,pixelX:N,pixelY:F}}function f(){s.enabled&&(s.mouseEntered=!0)}function c(){s.enabled&&(s.mouseEntered=!1)}function w(a){return s.params.mousewheel.thresholdDelta&&a.delta<s.params.mousewheel.thresholdDelta||s.params.mousewheel.thresholdTime&&(0,D.d)()-R<s.params.mousewheel.thresholdTime?!1:a.delta>=6&&(0,D.d)()-R<60?!0:(a.direction<0?(!s.isEnd||s.params.loop)&&!s.animating&&(s.slideNext(),m("scroll",a.raw)):(!s.isBeginning||s.params.loop)&&!s.animating&&(s.slidePrev(),m("scroll",a.raw)),R=new z.Date().getTime(),!1)}function b(a){const l=s.params.mousewheel;if(a.direction<0){if(s.isEnd&&!s.params.loop&&l.releaseOnEdges)return!0}else if(s.isBeginning&&!s.params.loop&&l.releaseOnEdges)return!0;return!1}function I(a){let l=a,u=!0;if(!s.enabled||a.target.closest(`.${s.params.mousewheel.noMousewheelClass}`))return;const h=s.params.mousewheel;s.params.cssMode&&l.preventDefault();let _=s.el;s.params.mousewheel.eventsTarget!=="container"&&(_=document.querySelector(s.params.mousewheel.eventsTarget));const L=_&&_.contains(l.target);if(!s.mouseEntered&&!L&&!h.releaseOnEdges)return!0;l.originalEvent&&(l=l.originalEvent);let N=0;const F=s.rtlTranslate?-1:1,Z=T(l);if(h.forceToAxis)if(s.isHorizontal())if(Math.abs(Z.pixelX)>Math.abs(Z.pixelY))N=-Z.pixelX*F;else return!0;else if(Math.abs(Z.pixelY)>Math.abs(Z.pixelX))N=-Z.pixelY;else return!0;else N=Math.abs(Z.pixelX)>Math.abs(Z.pixelY)?-Z.pixelX*F:-Z.pixelY;if(N===0)return!0;h.invert&&(N=-N);let J=s.getTranslate()+N*h.sensitivity;if(J>=s.minTranslate()&&(J=s.minTranslate()),J<=s.maxTranslate()&&(J=s.maxTranslate()),u=s.params.loop?!0:!(J===s.minTranslate()||J===s.maxTranslate()),u&&s.params.nested&&l.stopPropagation(),!s.params.freeMode||!s.params.freeMode.enabled){const ee={time:(0,D.d)(),delta:Math.abs(N),direction:Math.sign(N),raw:a};y.length>=2&&y.shift();const C=y.length?y[y.length-1]:void 0;if(y.push(ee),C?(ee.direction!==C.direction||ee.delta>C.delta||ee.time>C.time+150)&&w(ee):w(ee),b(ee))return!0}else{const ee={time:(0,D.d)(),delta:Math.abs(N),direction:Math.sign(N)},C=O&&ee.time<O.time+500&&ee.delta<=O.delta&&ee.direction===O.direction;if(!C){O=void 0;let B=s.getTranslate()+N*h.sensitivity;const X=s.isBeginning,j=s.isEnd;if(B>=s.minTranslate()&&(B=s.minTranslate()),B<=s.maxTranslate()&&(B=s.maxTranslate()),s.setTransition(0),s.setTranslate(B),s.updateProgress(),s.updateActiveIndex(),s.updateSlidesClasses(),(!X&&s.isBeginning||!j&&s.isEnd)&&s.updateSlidesClasses(),s.params.loop&&s.loopFix({direction:ee.direction<0?"next":"prev",byMousewheel:!0}),s.params.freeMode.sticky){clearTimeout(k),k=void 0,y.length>=15&&y.shift();const V=y.length?y[y.length-1]:void 0,Y=y[0];if(y.push(ee),V&&(ee.delta>V.delta||ee.direction!==V.direction))y.splice(0);else if(y.length>=15&&ee.time-Y.time<500&&Y.delta-ee.delta>=1&&ee.delta<=6){const le=N>0?.8:.2;O=ee,y.splice(0),k=(0,D.n)(()=>{s.slideToClosest(s.params.speed,!0,void 0,le)},0)}k||(k=(0,D.n)(()=>{O=ee,y.splice(0),s.slideToClosest(s.params.speed,!0,void 0,.5)},500))}if(C||m("scroll",l),s.params.autoplay&&s.params.autoplayDisableOnInteraction&&s.autoplay.stop(),h.releaseOnEdges&&(B===s.minTranslate()||B===s.maxTranslate()))return!0}}return l.preventDefault?l.preventDefault():l.returnValue=!1,!1}function A(a){let l=s.el;s.params.mousewheel.eventsTarget!=="container"&&(l=document.querySelector(s.params.mousewheel.eventsTarget)),l[a]("mouseenter",f),l[a]("mouseleave",c),l[a]("wheel",I)}function x(){return s.params.cssMode?(s.wrapperEl.removeEventListener("wheel",I),!0):s.mousewheel.enabled?!1:(A("addEventListener"),s.mousewheel.enabled=!0,!0)}function g(){return s.params.cssMode?(s.wrapperEl.addEventListener(event,I),!0):s.mousewheel.enabled?(A("removeEventListener"),s.mousewheel.enabled=!1,!0):!1}p("init",()=>{!s.params.mousewheel.enabled&&s.params.cssMode&&g(),s.params.mousewheel.enabled&&x()}),p("destroy",()=>{s.params.cssMode&&x(),s.mousewheel.enabled&&g()}),Object.assign(s.mousewheel,{enable:x,disable:g})}},"./node_modules/swiper/modules/navigation.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/create-element-if-not-defined.mjs");function D($){let{swiper:n,extendParams:s,on:E,emit:p}=$;s({navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden",lockClass:"swiper-button-lock",navigationDisabledClass:"swiper-navigation-disabled"}}),n.navigation={nextEl:null,prevEl:null};const m=b=>(Array.isArray(b)?b:[b]).filter(I=>!!I);function z(b){let I;return b&&typeof b=="string"&&n.isElement&&(I=n.el.querySelector(b),I)?I:(b&&(typeof b=="string"&&(I=[...document.querySelectorAll(b)]),n.params.uniqueNavElements&&typeof b=="string"&&I.length>1&&n.el.querySelectorAll(b).length===1&&(I=n.el.querySelector(b))),b&&!I?b:I)}function k(b,I){const A=n.params.navigation;b=m(b),b.forEach(x=>{x&&(x.classList[I?"add":"remove"](...A.disabledClass.split(" ")),x.tagName==="BUTTON"&&(x.disabled=I),n.params.watchOverflow&&n.enabled&&x.classList[n.isLocked?"add":"remove"](A.lockClass))})}function R(){const{nextEl:b,prevEl:I}=n.navigation;if(n.params.loop){k(I,!1),k(b,!1);return}k(I,n.isBeginning&&!n.params.rewind),k(b,n.isEnd&&!n.params.rewind)}function O(b){b.preventDefault(),!(n.isBeginning&&!n.params.loop&&!n.params.rewind)&&(n.slidePrev(),p("navigationPrev"))}function y(b){b.preventDefault(),!(n.isEnd&&!n.params.loop&&!n.params.rewind)&&(n.slideNext(),p("navigationNext"))}function T(){const b=n.params.navigation;if(n.params.navigation=(0,G.c)(n,n.originalParams.navigation,n.params.navigation,{nextEl:"swiper-button-next",prevEl:"swiper-button-prev"}),!(b.nextEl||b.prevEl))return;let I=z(b.nextEl),A=z(b.prevEl);Object.assign(n.navigation,{nextEl:I,prevEl:A}),I=m(I),A=m(A);const x=(g,a)=>{g&&g.addEventListener("click",a==="next"?y:O),!n.enabled&&g&&g.classList.add(...b.lockClass.split(" "))};I.forEach(g=>x(g,"next")),A.forEach(g=>x(g,"prev"))}function f(){let{nextEl:b,prevEl:I}=n.navigation;b=m(b),I=m(I);const A=(x,g)=>{x.removeEventListener("click",g==="next"?y:O),x.classList.remove(...n.params.navigation.disabledClass.split(" "))};b.forEach(x=>A(x,"next")),I.forEach(x=>A(x,"prev"))}E("init",()=>{n.params.navigation.enabled===!1?w():(T(),R())}),E("toEdge fromEdge lock unlock",()=>{R()}),E("destroy",()=>{f()}),E("enable disable",()=>{let{nextEl:b,prevEl:I}=n.navigation;if(b=m(b),I=m(I),n.enabled){R();return}[...b,...I].filter(A=>!!A).forEach(A=>A.classList.add(n.params.navigation.lockClass))}),E("click",(b,I)=>{let{nextEl:A,prevEl:x}=n.navigation;A=m(A),x=m(x);const g=I.target;if(n.params.navigation.hideOnClick&&!x.includes(g)&&!A.includes(g)){if(n.pagination&&n.params.pagination&&n.params.pagination.clickable&&(n.pagination.el===g||n.pagination.el.contains(g)))return;let a;A.length?a=A[0].classList.contains(n.params.navigation.hiddenClass):x.length&&(a=x[0].classList.contains(n.params.navigation.hiddenClass)),p(a===!0?"navigationShow":"navigationHide"),[...A,...x].filter(l=>!!l).forEach(l=>l.classList.toggle(n.params.navigation.hiddenClass))}});const c=()=>{n.el.classList.remove(...n.params.navigation.navigationDisabledClass.split(" ")),T(),R()},w=()=>{n.el.classList.add(...n.params.navigation.navigationDisabledClass.split(" ")),f()};Object.assign(n.navigation,{enable:c,disable:w,update:R,init:T,destroy:f})}},"./node_modules/swiper/modules/pagination.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>n});var G=S("./node_modules/swiper/shared/classes-to-selector.mjs"),D=S("./node_modules/swiper/shared/create-element-if-not-defined.mjs"),$=S("./node_modules/swiper/shared/utils.mjs");function n(s){let{swiper:E,extendParams:p,on:m,emit:z}=s;const k="swiper-pagination";p({pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:a=>a,formatFractionTotal:a=>a,bulletClass:`${k}-bullet`,bulletActiveClass:`${k}-bullet-active`,modifierClass:`${k}-`,currentClass:`${k}-current`,totalClass:`${k}-total`,hiddenClass:`${k}-hidden`,progressbarFillClass:`${k}-progressbar-fill`,progressbarOppositeClass:`${k}-progressbar-opposite`,clickableClass:`${k}-clickable`,lockClass:`${k}-lock`,horizontalClass:`${k}-horizontal`,verticalClass:`${k}-vertical`,paginationDisabledClass:`${k}-disabled`}}),E.pagination={el:null,bullets:[]};let R,O=0;const y=a=>(Array.isArray(a)?a:[a]).filter(l=>!!l);function T(){return!E.params.pagination.el||!E.pagination.el||Array.isArray(E.pagination.el)&&E.pagination.el.length===0}function f(a,l){const{bulletActiveClass:u}=E.params.pagination;a&&(a=a[`${l==="prev"?"previous":"next"}ElementSibling`],a&&(a.classList.add(`${u}-${l}`),a=a[`${l==="prev"?"previous":"next"}ElementSibling`],a&&a.classList.add(`${u}-${l}-${l}`)))}function c(a){const l=a.target.closest((0,G.c)(E.params.pagination.bulletClass));if(!l)return;a.preventDefault();const u=(0,$.g)(l)*E.params.slidesPerGroup;if(E.params.loop){if(E.realIndex===u)return;E.slideToLoop(u)}else E.slideTo(u)}function w(){const a=E.rtl,l=E.params.pagination;if(T())return;let u=E.pagination.el;u=y(u);let h,_;const L=E.virtual&&E.params.virtual.enabled?E.virtual.slides.length:E.slides.length,N=E.params.loop?Math.ceil(L/E.params.slidesPerGroup):E.snapGrid.length;if(E.params.loop?(_=E.previousRealIndex||0,h=E.params.slidesPerGroup>1?Math.floor(E.realIndex/E.params.slidesPerGroup):E.realIndex):typeof E.snapIndex<"u"?(h=E.snapIndex,_=E.previousSnapIndex):(_=E.previousIndex||0,h=E.activeIndex||0),l.type==="bullets"&&E.pagination.bullets&&E.pagination.bullets.length>0){const F=E.pagination.bullets;let Z,J,ee;if(l.dynamicBullets&&(R=(0,$.f)(F[0],E.isHorizontal()?"width":"height",!0),u.forEach(C=>{C.style[E.isHorizontal()?"width":"height"]=`${R*(l.dynamicMainBullets+4)}px`}),l.dynamicMainBullets>1&&_!==void 0&&(O+=h-(_||0),O>l.dynamicMainBullets-1?O=l.dynamicMainBullets-1:O<0&&(O=0)),Z=Math.max(h-O,0),J=Z+(Math.min(F.length,l.dynamicMainBullets)-1),ee=(J+Z)/2),F.forEach(C=>{const B=[...["","-next","-next-next","-prev","-prev-prev","-main"].map(X=>`${l.bulletActiveClass}${X}`)].map(X=>typeof X=="string"&&X.includes(" ")?X.split(" "):X).flat();C.classList.remove(...B)}),u.length>1)F.forEach(C=>{const B=(0,$.g)(C);B===h?C.classList.add(...l.bulletActiveClass.split(" ")):E.isElement&&C.setAttribute("part","bullet"),l.dynamicBullets&&(B>=Z&&B<=J&&C.classList.add(...`${l.bulletActiveClass}-main`.split(" ")),B===Z&&f(C,"prev"),B===J&&f(C,"next"))});else{const C=F[h];if(C&&C.classList.add(...l.bulletActiveClass.split(" ")),E.isElement&&F.forEach((B,X)=>{B.setAttribute("part",X===h?"bullet-active":"bullet")}),l.dynamicBullets){const B=F[Z],X=F[J];for(let j=Z;j<=J;j+=1)F[j]&&F[j].classList.add(...`${l.bulletActiveClass}-main`.split(" "));f(B,"prev"),f(X,"next")}}if(l.dynamicBullets){const C=Math.min(F.length,l.dynamicMainBullets+4),B=(R*C-R)/2-ee*R,X=a?"right":"left";F.forEach(j=>{j.style[E.isHorizontal()?X:"top"]=`${B}px`})}}u.forEach((F,Z)=>{if(l.type==="fraction"&&(F.querySelectorAll((0,G.c)(l.currentClass)).forEach(J=>{J.textContent=l.formatFractionCurrent(h+1)}),F.querySelectorAll((0,G.c)(l.totalClass)).forEach(J=>{J.textContent=l.formatFractionTotal(N)})),l.type==="progressbar"){let J;l.progressbarOpposite?J=E.isHorizontal()?"vertical":"horizontal":J=E.isHorizontal()?"horizontal":"vertical";const ee=(h+1)/N;let C=1,B=1;J==="horizontal"?C=ee:B=ee,F.querySelectorAll((0,G.c)(l.progressbarFillClass)).forEach(X=>{X.style.transform=`translate3d(0,0,0) scaleX(${C}) scaleY(${B})`,X.style.transitionDuration=`${E.params.speed}ms`})}l.type==="custom"&&l.renderCustom?(F.innerHTML=l.renderCustom(E,h+1,N),Z===0&&z("paginationRender",F)):(Z===0&&z("paginationRender",F),z("paginationUpdate",F)),E.params.watchOverflow&&E.enabled&&F.classList[E.isLocked?"add":"remove"](l.lockClass)})}function b(){const a=E.params.pagination;if(T())return;const l=E.virtual&&E.params.virtual.enabled?E.virtual.slides.length:E.grid&&E.params.grid.rows>1?E.slides.length/Math.ceil(E.params.grid.rows):E.slides.length;let u=E.pagination.el;u=y(u);let h="";if(a.type==="bullets"){let _=E.params.loop?Math.ceil(l/E.params.slidesPerGroup):E.snapGrid.length;E.params.freeMode&&E.params.freeMode.enabled&&_>l&&(_=l);for(let L=0;L<_;L+=1)a.renderBullet?h+=a.renderBullet.call(E,L,a.bulletClass):h+=`<${a.bulletElement} ${E.isElement?'part="bullet"':""} class="${a.bulletClass}"></${a.bulletElement}>`}a.type==="fraction"&&(a.renderFraction?h=a.renderFraction.call(E,a.currentClass,a.totalClass):h=`<span class="${a.currentClass}"></span> / <span class="${a.totalClass}"></span>`),a.type==="progressbar"&&(a.renderProgressbar?h=a.renderProgressbar.call(E,a.progressbarFillClass):h=`<span class="${a.progressbarFillClass}"></span>`),E.pagination.bullets=[],u.forEach(_=>{a.type!=="custom"&&(_.innerHTML=h||""),a.type==="bullets"&&E.pagination.bullets.push(..._.querySelectorAll((0,G.c)(a.bulletClass)))}),a.type!=="custom"&&z("paginationRender",u[0])}function I(){E.params.pagination=(0,D.c)(E,E.originalParams.pagination,E.params.pagination,{el:"swiper-pagination"});const a=E.params.pagination;if(!a.el)return;let l;typeof a.el=="string"&&E.isElement&&(l=E.el.querySelector(a.el)),!l&&typeof a.el=="string"&&(l=[...document.querySelectorAll(a.el)]),l||(l=a.el),!(!l||l.length===0)&&(E.params.uniqueNavElements&&typeof a.el=="string"&&Array.isArray(l)&&l.length>1&&(l=[...E.el.querySelectorAll(a.el)],l.length>1&&(l=l.filter(u=>(0,$.a)(u,".swiper")[0]===E.el)[0])),Array.isArray(l)&&l.length===1&&(l=l[0]),Object.assign(E.pagination,{el:l}),l=y(l),l.forEach(u=>{a.type==="bullets"&&a.clickable&&u.classList.add(...(a.clickableClass||"").split(" ")),u.classList.add(a.modifierClass+a.type),u.classList.add(E.isHorizontal()?a.horizontalClass:a.verticalClass),a.type==="bullets"&&a.dynamicBullets&&(u.classList.add(`${a.modifierClass}${a.type}-dynamic`),O=0,a.dynamicMainBullets<1&&(a.dynamicMainBullets=1)),a.type==="progressbar"&&a.progressbarOpposite&&u.classList.add(a.progressbarOppositeClass),a.clickable&&u.addEventListener("click",c),E.enabled||u.classList.add(a.lockClass)}))}function A(){const a=E.params.pagination;if(T())return;let l=E.pagination.el;l&&(l=y(l),l.forEach(u=>{u.classList.remove(a.hiddenClass),u.classList.remove(a.modifierClass+a.type),u.classList.remove(E.isHorizontal()?a.horizontalClass:a.verticalClass),a.clickable&&(u.classList.remove(...(a.clickableClass||"").split(" ")),u.removeEventListener("click",c))})),E.pagination.bullets&&E.pagination.bullets.forEach(u=>u.classList.remove(...a.bulletActiveClass.split(" ")))}m("changeDirection",()=>{if(!E.pagination||!E.pagination.el)return;const a=E.params.pagination;let{el:l}=E.pagination;l=y(l),l.forEach(u=>{u.classList.remove(a.horizontalClass,a.verticalClass),u.classList.add(E.isHorizontal()?a.horizontalClass:a.verticalClass)})}),m("init",()=>{E.params.pagination.enabled===!1?g():(I(),b(),w())}),m("activeIndexChange",()=>{typeof E.snapIndex>"u"&&w()}),m("snapIndexChange",()=>{w()}),m("snapGridLengthChange",()=>{b(),w()}),m("destroy",()=>{A()}),m("enable disable",()=>{let{el:a}=E.pagination;a&&(a=y(a),a.forEach(l=>l.classList[E.enabled?"remove":"add"](E.params.pagination.lockClass)))}),m("lock unlock",()=>{w()}),m("click",(a,l)=>{const u=l.target,h=y(E.pagination.el);if(E.params.pagination.el&&E.params.pagination.hideOnClick&&h&&h.length>0&&!u.classList.contains(E.params.pagination.bulletClass)){if(E.navigation&&(E.navigation.nextEl&&u===E.navigation.nextEl||E.navigation.prevEl&&u===E.navigation.prevEl))return;const _=h[0].classList.contains(E.params.pagination.hiddenClass);z(_===!0?"paginationShow":"paginationHide"),h.forEach(L=>L.classList.toggle(E.params.pagination.hiddenClass))}});const x=()=>{E.el.classList.remove(E.params.pagination.paginationDisabledClass);let{el:a}=E.pagination;a&&(a=y(a),a.forEach(l=>l.classList.remove(E.params.pagination.paginationDisabledClass))),I(),b(),w()},g=()=>{E.el.classList.add(E.params.pagination.paginationDisabledClass);let{el:a}=E.pagination;a&&(a=y(a),a.forEach(l=>l.classList.add(E.params.pagination.paginationDisabledClass))),A()};Object.assign(E.pagination,{enable:x,disable:g,render:b,update:w,init:I,destroy:A})}},"./node_modules/swiper/modules/parallax.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($){let{swiper:n,extendParams:s,on:E}=$;s({parallax:{enabled:!1}});const p="[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]",m=(R,O)=>{const{rtl:y}=n,T=y?-1:1,f=R.getAttribute("data-swiper-parallax")||"0";let c=R.getAttribute("data-swiper-parallax-x"),w=R.getAttribute("data-swiper-parallax-y");const b=R.getAttribute("data-swiper-parallax-scale"),I=R.getAttribute("data-swiper-parallax-opacity"),A=R.getAttribute("data-swiper-parallax-rotate");if(c||w?(c=c||"0",w=w||"0"):n.isHorizontal()?(c=f,w="0"):(w=f,c="0"),c.indexOf("%")>=0?c=`${parseInt(c,10)*O*T}%`:c=`${c*O*T}px`,w.indexOf("%")>=0?w=`${parseInt(w,10)*O}%`:w=`${w*O}px`,typeof I<"u"&&I!==null){const g=I-(I-1)*(1-Math.abs(O));R.style.opacity=g}let x=`translate3d(${c}, ${w}, 0px)`;if(typeof b<"u"&&b!==null){const g=b-(b-1)*(1-Math.abs(O));x+=` scale(${g})`}if(A&&typeof A<"u"&&A!==null){const g=A*O*-1;x+=` rotate(${g}deg)`}R.style.transform=x},z=()=>{const{el:R,slides:O,progress:y,snapGrid:T,isElement:f}=n,c=(0,G.e)(R,p);n.isElement&&c.push(...(0,G.e)(n.hostEl,p)),c.forEach(w=>{m(w,y)}),O.forEach((w,b)=>{let I=w.progress;n.params.slidesPerGroup>1&&n.params.slidesPerView!=="auto"&&(I+=Math.ceil(b/2)-y*(T.length-1)),I=Math.min(Math.max(I,-1),1),w.querySelectorAll(`${p}, [data-swiper-parallax-rotate]`).forEach(A=>{m(A,I)})})},k=function(R){R===void 0&&(R=n.params.speed);const{el:O,hostEl:y}=n,T=[...O.querySelectorAll(p)];n.isElement&&T.push(...y.querySelectorAll(p)),T.forEach(f=>{let c=parseInt(f.getAttribute("data-swiper-parallax-duration"),10)||R;R===0&&(c=0),f.style.transitionDuration=`${c}ms`})};E("beforeInit",()=>{n.params.parallax.enabled&&(n.params.watchSlidesProgress=!0,n.originalParams.watchSlidesProgress=!0)}),E("init",()=>{n.params.parallax.enabled&&z()}),E("setTranslate",()=>{n.params.parallax.enabled&&z()}),E("setTransition",(R,O)=>{n.params.parallax.enabled&&k(O)})}},"./node_modules/swiper/modules/scrollbar.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>s});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs"),$=S("./node_modules/swiper/shared/create-element-if-not-defined.mjs"),n=S("./node_modules/swiper/shared/classes-to-selector.mjs");function s(E){let{swiper:p,extendParams:m,on:z,emit:k}=E;const R=(0,G.g)();let O=!1,y=null,T=null,f,c,w,b;m({scrollbar:{el:null,dragSize:"auto",hide:!1,draggable:!1,snapOnRelease:!0,lockClass:"swiper-scrollbar-lock",dragClass:"swiper-scrollbar-drag",scrollbarDisabledClass:"swiper-scrollbar-disabled",horizontalClass:"swiper-scrollbar-horizontal",verticalClass:"swiper-scrollbar-vertical"}}),p.scrollbar={el:null,dragEl:null};function I(){if(!p.params.scrollbar.el||!p.scrollbar.el)return;const{scrollbar:C,rtlTranslate:B}=p,{dragEl:X,el:j}=C,V=p.params.scrollbar,Y=p.params.loop?p.progressLoop:p.progress;let le=c,ce=(w-c)*Y;B?(ce=-ce,ce>0?(le=c-ce,ce=0):-ce+c>w&&(le=w+ce)):ce<0?(le=c+ce,ce=0):ce+c>w&&(le=w-ce),p.isHorizontal()?(X.style.transform=`translate3d(${ce}px, 0, 0)`,X.style.width=`${le}px`):(X.style.transform=`translate3d(0px, ${ce}px, 0)`,X.style.height=`${le}px`),V.hide&&(clearTimeout(y),j.style.opacity=1,y=setTimeout(()=>{j.style.opacity=0,j.style.transitionDuration="400ms"},1e3))}function A(C){!p.params.scrollbar.el||!p.scrollbar.el||(p.scrollbar.dragEl.style.transitionDuration=`${C}ms`)}function x(){if(!p.params.scrollbar.el||!p.scrollbar.el)return;const{scrollbar:C}=p,{dragEl:B,el:X}=C;B.style.width="",B.style.height="",w=p.isHorizontal()?X.offsetWidth:X.offsetHeight,b=p.size/(p.virtualSize+p.params.slidesOffsetBefore-(p.params.centeredSlides?p.snapGrid[0]:0)),p.params.scrollbar.dragSize==="auto"?c=w*b:c=parseInt(p.params.scrollbar.dragSize,10),p.isHorizontal()?B.style.width=`${c}px`:B.style.height=`${c}px`,b>=1?X.style.display="none":X.style.display="",p.params.scrollbar.hide&&(X.style.opacity=0),p.params.watchOverflow&&p.enabled&&C.el.classList[p.isLocked?"add":"remove"](p.params.scrollbar.lockClass)}function g(C){return p.isHorizontal()?C.clientX:C.clientY}function a(C){const{scrollbar:B,rtlTranslate:X}=p,{el:j}=B;let V;V=(g(C)-(0,D.b)(j)[p.isHorizontal()?"left":"top"]-(f!==null?f:c/2))/(w-c),V=Math.max(Math.min(V,1),0),X&&(V=1-V);const Y=p.minTranslate()+(p.maxTranslate()-p.minTranslate())*V;p.updateProgress(Y),p.setTranslate(Y),p.updateActiveIndex(),p.updateSlidesClasses()}function l(C){const B=p.params.scrollbar,{scrollbar:X,wrapperEl:j}=p,{el:V,dragEl:Y}=X;O=!0,f=C.target===Y?g(C)-C.target.getBoundingClientRect()[p.isHorizontal()?"left":"top"]:null,C.preventDefault(),C.stopPropagation(),j.style.transitionDuration="100ms",Y.style.transitionDuration="100ms",a(C),clearTimeout(T),V.style.transitionDuration="0ms",B.hide&&(V.style.opacity=1),p.params.cssMode&&(p.wrapperEl.style["scroll-snap-type"]="none"),k("scrollbarDragStart",C)}function u(C){const{scrollbar:B,wrapperEl:X}=p,{el:j,dragEl:V}=B;O&&(C.preventDefault?C.preventDefault():C.returnValue=!1,a(C),X.style.transitionDuration="0ms",j.style.transitionDuration="0ms",V.style.transitionDuration="0ms",k("scrollbarDragMove",C))}function h(C){const B=p.params.scrollbar,{scrollbar:X,wrapperEl:j}=p,{el:V}=X;O&&(O=!1,p.params.cssMode&&(p.wrapperEl.style["scroll-snap-type"]="",j.style.transitionDuration=""),B.hide&&(clearTimeout(T),T=(0,D.n)(()=>{V.style.opacity=0,V.style.transitionDuration="400ms"},1e3)),k("scrollbarDragEnd",C),B.snapOnRelease&&p.slideToClosest())}function _(C){const{scrollbar:B,params:X}=p,j=B.el;if(!j)return;const V=j,Y=X.passiveListeners?{passive:!1,capture:!1}:!1,le=X.passiveListeners?{passive:!0,capture:!1}:!1;if(!V)return;const ce=C==="on"?"addEventListener":"removeEventListener";V[ce]("pointerdown",l,Y),R[ce]("pointermove",u,Y),R[ce]("pointerup",h,le)}function L(){!p.params.scrollbar.el||!p.scrollbar.el||_("on")}function N(){!p.params.scrollbar.el||!p.scrollbar.el||_("off")}function F(){const{scrollbar:C,el:B}=p;p.params.scrollbar=(0,$.c)(p,p.originalParams.scrollbar,p.params.scrollbar,{el:"swiper-scrollbar"});const X=p.params.scrollbar;if(!X.el)return;let j;if(typeof X.el=="string"&&p.isElement&&(j=p.el.querySelector(X.el)),!j&&typeof X.el=="string"){if(j=R.querySelectorAll(X.el),!j.length)return}else j||(j=X.el);p.params.uniqueNavElements&&typeof X.el=="string"&&j.length>1&&B.querySelectorAll(X.el).length===1&&(j=B.querySelector(X.el)),j.length>0&&(j=j[0]),j.classList.add(p.isHorizontal()?X.horizontalClass:X.verticalClass);let V;j&&(V=j.querySelector((0,n.c)(p.params.scrollbar.dragClass)),V||(V=(0,D.c)("div",p.params.scrollbar.dragClass),j.append(V))),Object.assign(C,{el:j,dragEl:V}),X.draggable&&L(),j&&j.classList[p.enabled?"remove":"add"](...(0,D.h)(p.params.scrollbar.lockClass))}function Z(){const C=p.params.scrollbar,B=p.scrollbar.el;B&&B.classList.remove(...(0,D.h)(p.isHorizontal()?C.horizontalClass:C.verticalClass)),N()}z("init",()=>{p.params.scrollbar.enabled===!1?ee():(F(),x(),I())}),z("update resize observerUpdate lock unlock",()=>{x()}),z("setTranslate",()=>{I()}),z("setTransition",(C,B)=>{A(B)}),z("enable disable",()=>{const{el:C}=p.scrollbar;C&&C.classList[p.enabled?"remove":"add"](...(0,D.h)(p.params.scrollbar.lockClass))}),z("destroy",()=>{Z()});const J=()=>{p.el.classList.remove(...(0,D.h)(p.params.scrollbar.scrollbarDisabledClass)),p.scrollbar.el&&p.scrollbar.el.classList.remove(...(0,D.h)(p.params.scrollbar.scrollbarDisabledClass)),F(),x(),I()},ee=()=>{p.el.classList.add(...(0,D.h)(p.params.scrollbar.scrollbarDisabledClass)),p.scrollbar.el&&p.scrollbar.el.classList.add(...(0,D.h)(p.params.scrollbar.scrollbarDisabledClass)),Z()};Object.assign(p.scrollbar,{enable:J,disable:ee,updateSize:x,setTranslate:I,init:F,destroy:Z})}},"./node_modules/swiper/modules/thumbs.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p}=n;E({thumbs:{swiper:null,multipleActiveThumbs:!0,autoScrollOffset:0,slideThumbActiveClass:"swiper-slide-thumb-active",thumbsContainerClass:"swiper-thumbs"}});let m=!1,z=!1;s.thumbs={swiper:null};function k(){const y=s.thumbs.swiper;if(!y||y.destroyed)return;const T=y.clickedIndex,f=y.clickedSlide;if(f&&f.classList.contains(s.params.thumbs.slideThumbActiveClass)||typeof T>"u"||T===null)return;let c;y.params.loop?c=parseInt(y.clickedSlide.getAttribute("data-swiper-slide-index"),10):c=T,s.params.loop?s.slideToLoop(c):s.slideTo(c)}function R(){const{thumbs:y}=s.params;if(m)return!1;m=!0;const T=s.constructor;if(y.swiper instanceof T)s.thumbs.swiper=y.swiper,Object.assign(s.thumbs.swiper.originalParams,{watchSlidesProgress:!0,slideToClickedSlide:!1}),Object.assign(s.thumbs.swiper.params,{watchSlidesProgress:!0,slideToClickedSlide:!1}),s.thumbs.swiper.update();else if((0,D.k)(y.swiper)){const f=Object.assign({},y.swiper);Object.assign(f,{watchSlidesProgress:!0,slideToClickedSlide:!1}),s.thumbs.swiper=new T(f),z=!0}return s.thumbs.swiper.el.classList.add(s.params.thumbs.thumbsContainerClass),s.thumbs.swiper.on("tap",k),!0}function O(y){const T=s.thumbs.swiper;if(!T||T.destroyed)return;const f=T.params.slidesPerView==="auto"?T.slidesPerViewDynamic():T.params.slidesPerView;let c=1;const w=s.params.thumbs.slideThumbActiveClass;if(s.params.slidesPerView>1&&!s.params.centeredSlides&&(c=s.params.slidesPerView),s.params.thumbs.multipleActiveThumbs||(c=1),c=Math.floor(c),T.slides.forEach(A=>A.classList.remove(w)),T.params.loop||T.params.virtual&&T.params.virtual.enabled)for(let A=0;A<c;A+=1)(0,D.e)(T.slidesEl,`[data-swiper-slide-index="${s.realIndex+A}"]`).forEach(x=>{x.classList.add(w)});else for(let A=0;A<c;A+=1)T.slides[s.realIndex+A]&&T.slides[s.realIndex+A].classList.add(w);const b=s.params.thumbs.autoScrollOffset,I=b&&!T.params.loop;if(s.realIndex!==T.realIndex||I){const A=T.activeIndex;let x,g;if(T.params.loop){const a=T.slides.filter(l=>l.getAttribute("data-swiper-slide-index")===`${s.realIndex}`)[0];x=T.slides.indexOf(a),g=s.activeIndex>s.previousIndex?"next":"prev"}else x=s.realIndex,g=x>s.previousIndex?"next":"prev";I&&(x+=g==="next"?b:-1*b),T.visibleSlidesIndexes&&T.visibleSlidesIndexes.indexOf(x)<0&&(T.params.centeredSlides?x>A?x=x-Math.floor(f/2)+1:x=x+Math.floor(f/2)-1:x>A&&T.params.slidesPerGroup,T.slideTo(x,y?0:void 0))}}p("beforeInit",()=>{const{thumbs:y}=s.params;if(!(!y||!y.swiper))if(typeof y.swiper=="string"||y.swiper instanceof HTMLElement){const T=(0,G.g)(),f=()=>{const w=typeof y.swiper=="string"?T.querySelector(y.swiper):y.swiper;if(w&&w.swiper)y.swiper=w.swiper,R(),O(!0);else if(w){const b=I=>{y.swiper=I.detail[0],w.removeEventListener("init",b),R(),O(!0),y.swiper.update(),s.update()};w.addEventListener("init",b)}return w},c=()=>{if(s.destroyed)return;f()||requestAnimationFrame(c)};requestAnimationFrame(c)}else R(),O(!0)}),p("slideChange update resize observerUpdate",()=>{O()}),p("setTransition",(y,T)=>{const f=s.thumbs.swiper;!f||f.destroyed||f.setTransition(T)}),p("beforeDestroy",()=>{const y=s.thumbs.swiper;!y||y.destroyed||z&&y.destroy()}),Object.assign(s.thumbs,{init:R,update:O})}},"./node_modules/swiper/modules/virtual.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p,emit:m}=n;E({virtual:{enabled:!1,slides:[],cache:!0,renderSlide:null,renderExternal:null,renderExternalUpdate:!0,addSlidesBefore:0,addSlidesAfter:0}});let z;const k=(0,G.g)();s.virtual={cache:{},from:void 0,to:void 0,slides:[],offset:0,slidesGrid:[]};const R=k.createElement("div");function O(b,I){const A=s.params.virtual;if(A.cache&&s.virtual.cache[I])return s.virtual.cache[I];let x;return A.renderSlide?(x=A.renderSlide.call(s,b,I),typeof x=="string"&&(R.innerHTML=x,x=R.children[0])):s.isElement?x=(0,D.c)("swiper-slide"):x=(0,D.c)("div",s.params.slideClass),x.setAttribute("data-swiper-slide-index",I),A.renderSlide||(x.innerHTML=b),A.cache&&(s.virtual.cache[I]=x),x}function y(b){const{slidesPerView:I,slidesPerGroup:A,centeredSlides:x,loop:g}=s.params,{addSlidesBefore:a,addSlidesAfter:l}=s.params.virtual,{from:u,to:h,slides:_,slidesGrid:L,offset:N}=s.virtual;s.params.cssMode||s.updateActiveIndex();const F=s.activeIndex||0;let Z;s.rtlTranslate?Z="right":Z=s.isHorizontal()?"left":"top";let J,ee;x?(J=Math.floor(I/2)+A+l,ee=Math.floor(I/2)+A+a):(J=I+(A-1)+l,ee=(g?I:A)+a);let C=F-ee,B=F+J;g||(C=Math.max(C,0),B=Math.min(B,_.length-1));let X=(s.slidesGrid[C]||0)-(s.slidesGrid[0]||0);g&&F>=ee?(C-=ee,x||(X+=s.slidesGrid[0])):g&&F<ee&&(C=-ee,x&&(X+=s.slidesGrid[0])),Object.assign(s.virtual,{from:C,to:B,offset:X,slidesGrid:s.slidesGrid,slidesBefore:ee,slidesAfter:J});function j(){s.updateSlides(),s.updateProgress(),s.updateSlidesClasses(),m("virtualUpdate")}if(u===C&&h===B&&!b){s.slidesGrid!==L&&X!==N&&s.slides.forEach(oe=>{oe.style[Z]=`${X-Math.abs(s.cssOverflowAdjustment())}px`}),s.updateProgress(),m("virtualUpdate");return}if(s.params.virtual.renderExternal){s.params.virtual.renderExternal.call(s,{offset:X,from:C,to:B,slides:function(){const ve=[];for(let _e=C;_e<=B;_e+=1)ve.push(_[_e]);return ve}()}),s.params.virtual.renderExternalUpdate?j():m("virtualUpdate");return}const V=[],Y=[],le=oe=>{let ve=oe;return oe<0?ve=_.length+oe:ve>=_.length&&(ve=ve-_.length),ve};if(b)s.slides.filter(oe=>oe.matches(`.${s.params.slideClass}, swiper-slide`)).forEach(oe=>{oe.remove()});else for(let oe=u;oe<=h;oe+=1)if(oe<C||oe>B){const ve=le(oe);s.slides.filter(_e=>_e.matches(`.${s.params.slideClass}[data-swiper-slide-index="${ve}"], swiper-slide[data-swiper-slide-index="${ve}"]`)).forEach(_e=>{_e.remove()})}const ce=g?-_.length:0,Te=g?_.length*2:_.length;for(let oe=ce;oe<Te;oe+=1)if(oe>=C&&oe<=B){const ve=le(oe);typeof h>"u"||b?Y.push(ve):(oe>h&&Y.push(ve),oe<u&&V.push(ve))}if(Y.forEach(oe=>{s.slidesEl.append(O(_[oe],oe))}),g)for(let oe=V.length-1;oe>=0;oe-=1){const ve=V[oe];s.slidesEl.prepend(O(_[ve],ve))}else V.sort((oe,ve)=>ve-oe),V.forEach(oe=>{s.slidesEl.prepend(O(_[oe],oe))});(0,D.e)(s.slidesEl,".swiper-slide, swiper-slide").forEach(oe=>{oe.style[Z]=`${X-Math.abs(s.cssOverflowAdjustment())}px`}),j()}function T(b){if(typeof b=="object"&&"length"in b)for(let I=0;I<b.length;I+=1)b[I]&&s.virtual.slides.push(b[I]);else s.virtual.slides.push(b);y(!0)}function f(b){const I=s.activeIndex;let A=I+1,x=1;if(Array.isArray(b)){for(let g=0;g<b.length;g+=1)b[g]&&s.virtual.slides.unshift(b[g]);A=I+b.length,x=b.length}else s.virtual.slides.unshift(b);if(s.params.virtual.cache){const g=s.virtual.cache,a={};Object.keys(g).forEach(l=>{const u=g[l],h=u.getAttribute("data-swiper-slide-index");h&&u.setAttribute("data-swiper-slide-index",parseInt(h,10)+x),a[parseInt(l,10)+x]=u}),s.virtual.cache=a}y(!0),s.slideTo(A,0)}function c(b){if(typeof b>"u"||b===null)return;let I=s.activeIndex;if(Array.isArray(b))for(let A=b.length-1;A>=0;A-=1)s.params.virtual.cache&&(delete s.virtual.cache[b[A]],Object.keys(s.virtual.cache).forEach(x=>{x>b&&(s.virtual.cache[x-1]=s.virtual.cache[x],s.virtual.cache[x-1].setAttribute("data-swiper-slide-index",x-1),delete s.virtual.cache[x])})),s.virtual.slides.splice(b[A],1),b[A]<I&&(I-=1),I=Math.max(I,0);else s.params.virtual.cache&&(delete s.virtual.cache[b],Object.keys(s.virtual.cache).forEach(A=>{A>b&&(s.virtual.cache[A-1]=s.virtual.cache[A],s.virtual.cache[A-1].setAttribute("data-swiper-slide-index",A-1),delete s.virtual.cache[A])})),s.virtual.slides.splice(b,1),b<I&&(I-=1),I=Math.max(I,0);y(!0),s.slideTo(I,0)}function w(){s.virtual.slides=[],s.params.virtual.cache&&(s.virtual.cache={}),y(!0),s.slideTo(0,0)}p("beforeInit",()=>{if(!s.params.virtual.enabled)return;let b;if(typeof s.passedParams.virtual.slides>"u"){const I=[...s.slidesEl.children].filter(A=>A.matches(`.${s.params.slideClass}, swiper-slide`));I&&I.length&&(s.virtual.slides=[...I],b=!0,I.forEach((A,x)=>{A.setAttribute("data-swiper-slide-index",x),s.virtual.cache[x]=A,A.remove()}))}b||(s.virtual.slides=s.params.virtual.slides),s.classNames.push(`${s.params.containerModifierClass}virtual`),s.params.watchSlidesProgress=!0,s.originalParams.watchSlidesProgress=!0,y()}),p("setTranslate",()=>{s.params.virtual.enabled&&(s.params.cssMode&&!s._immediateVirtual?(clearTimeout(z),z=setTimeout(()=>{y()},100)):y())}),p("init update resize",()=>{s.params.virtual.enabled&&s.params.cssMode&&(0,D.s)(s.wrapperEl,"--swiper-virtual-size",`${s.virtualSize}px`)}),Object.assign(s.virtual,{appendSlide:T,prependSlide:f,removeSlide:c,removeAllSlides:w,update:y})}},"./node_modules/swiper/modules/zoom.mjs":(te,U,S)=>{S.r(U),S.d(U,{default:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");function $(n){let{swiper:s,extendParams:E,on:p,emit:m}=n;const z=(0,G.a)();E({zoom:{enabled:!1,maxRatio:3,minRatio:1,toggle:!0,containerClass:"swiper-zoom-container",zoomedSlideClass:"swiper-slide-zoomed"}}),s.zoom={enabled:!1};let k=1,R=!1,O,y;const T=[],f={originX:0,originY:0,slideEl:void 0,slideWidth:void 0,slideHeight:void 0,imageEl:void 0,imageWrapEl:void 0,maxRatio:3},c={isTouched:void 0,isMoved:void 0,currentX:void 0,currentY:void 0,minX:void 0,minY:void 0,maxX:void 0,maxY:void 0,width:void 0,height:void 0,startX:void 0,startY:void 0,touchesStart:{},touchesCurrent:{}},w={x:void 0,y:void 0,prevPositionX:void 0,prevPositionY:void 0,prevTime:void 0};let b=1;Object.defineProperty(s.zoom,"scale",{get(){return b},set(j){if(b!==j){const V=f.imageEl,Y=f.slideEl;m("zoomChange",j,V,Y)}b=j}});function I(){if(T.length<2)return 1;const j=T[0].pageX,V=T[0].pageY,Y=T[1].pageX,le=T[1].pageY;return Math.sqrt((Y-j)**2+(le-V)**2)}function A(){if(T.length<2)return{x:null,y:null};const j=f.imageEl.getBoundingClientRect();return[(T[0].pageX+(T[1].pageX-T[0].pageX)/2-j.x-z.scrollX)/k,(T[0].pageY+(T[1].pageY-T[0].pageY)/2-j.y-z.scrollY)/k]}function x(){return s.isElement?"swiper-slide":`.${s.params.slideClass}`}function g(j){const V=x();return!!(j.target.matches(V)||s.slides.filter(Y=>Y.contains(j.target)).length>0)}function a(j){const V=`.${s.params.zoom.containerClass}`;return!!(j.target.matches(V)||[...s.hostEl.querySelectorAll(V)].filter(Y=>Y.contains(j.target)).length>0)}function l(j){if(j.pointerType==="mouse"&&T.splice(0,T.length),!g(j))return;const V=s.params.zoom;if(O=!1,y=!1,T.push(j),!(T.length<2)){if(O=!0,f.scaleStart=I(),!f.slideEl){f.slideEl=j.target.closest(`.${s.params.slideClass}, swiper-slide`),f.slideEl||(f.slideEl=s.slides[s.activeIndex]);let Y=f.slideEl.querySelector(`.${V.containerClass}`);if(Y&&(Y=Y.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]),f.imageEl=Y,Y?f.imageWrapEl=(0,D.a)(f.imageEl,`.${V.containerClass}`)[0]:f.imageWrapEl=void 0,!f.imageWrapEl){f.imageEl=void 0;return}f.maxRatio=f.imageWrapEl.getAttribute("data-swiper-zoom")||V.maxRatio}if(f.imageEl){const[Y,le]=A();f.originX=Y,f.originY=le,f.imageEl.style.transitionDuration="0ms"}R=!0}}function u(j){if(!g(j))return;const V=s.params.zoom,Y=s.zoom,le=T.findIndex(ce=>ce.pointerId===j.pointerId);le>=0&&(T[le]=j),!(T.length<2)&&(y=!0,f.scaleMove=I(),f.imageEl&&(Y.scale=f.scaleMove/f.scaleStart*k,Y.scale>f.maxRatio&&(Y.scale=f.maxRatio-1+(Y.scale-f.maxRatio+1)**.5),Y.scale<V.minRatio&&(Y.scale=V.minRatio+1-(V.minRatio-Y.scale+1)**.5),f.imageEl.style.transform=`translate3d(0,0,0) scale(${Y.scale})`))}function h(j){if(!g(j)||j.pointerType==="mouse"&&j.type==="pointerout")return;const V=s.params.zoom,Y=s.zoom,le=T.findIndex(ce=>ce.pointerId===j.pointerId);le>=0&&T.splice(le,1),!(!O||!y)&&(O=!1,y=!1,f.imageEl&&(Y.scale=Math.max(Math.min(Y.scale,f.maxRatio),V.minRatio),f.imageEl.style.transitionDuration=`${s.params.speed}ms`,f.imageEl.style.transform=`translate3d(0,0,0) scale(${Y.scale})`,k=Y.scale,R=!1,Y.scale>1&&f.slideEl?f.slideEl.classList.add(`${V.zoomedSlideClass}`):Y.scale<=1&&f.slideEl&&f.slideEl.classList.remove(`${V.zoomedSlideClass}`),Y.scale===1&&(f.originX=0,f.originY=0,f.slideEl=void 0)))}function _(j){const V=s.device;if(!f.imageEl||c.isTouched)return;V.android&&j.cancelable&&j.preventDefault(),c.isTouched=!0;const Y=T.length>0?T[0]:j;c.touchesStart.x=Y.pageX,c.touchesStart.y=Y.pageY}function L(j){if(!g(j)||!a(j))return;const V=s.zoom;if(!f.imageEl||!c.isTouched||!f.slideEl)return;c.isMoved||(c.width=f.imageEl.offsetWidth,c.height=f.imageEl.offsetHeight,c.startX=(0,D.i)(f.imageWrapEl,"x")||0,c.startY=(0,D.i)(f.imageWrapEl,"y")||0,f.slideWidth=f.slideEl.offsetWidth,f.slideHeight=f.slideEl.offsetHeight,f.imageWrapEl.style.transitionDuration="0ms");const Y=c.width*V.scale,le=c.height*V.scale;if(Y<f.slideWidth&&le<f.slideHeight)return;if(c.minX=Math.min(f.slideWidth/2-Y/2,0),c.maxX=-c.minX,c.minY=Math.min(f.slideHeight/2-le/2,0),c.maxY=-c.minY,c.touchesCurrent.x=T.length>0?T[0].pageX:j.pageX,c.touchesCurrent.y=T.length>0?T[0].pageY:j.pageY,Math.max(Math.abs(c.touchesCurrent.x-c.touchesStart.x),Math.abs(c.touchesCurrent.y-c.touchesStart.y))>5&&(s.allowClick=!1),!c.isMoved&&!R){if(s.isHorizontal()&&(Math.floor(c.minX)===Math.floor(c.startX)&&c.touchesCurrent.x<c.touchesStart.x||Math.floor(c.maxX)===Math.floor(c.startX)&&c.touchesCurrent.x>c.touchesStart.x)){c.isTouched=!1;return}if(!s.isHorizontal()&&(Math.floor(c.minY)===Math.floor(c.startY)&&c.touchesCurrent.y<c.touchesStart.y||Math.floor(c.maxY)===Math.floor(c.startY)&&c.touchesCurrent.y>c.touchesStart.y)){c.isTouched=!1;return}}j.cancelable&&j.preventDefault(),j.stopPropagation(),c.isMoved=!0;const Te=(V.scale-k)/(f.maxRatio-s.params.zoom.minRatio),{originX:oe,originY:ve}=f;c.currentX=c.touchesCurrent.x-c.touchesStart.x+c.startX+Te*(c.width-oe*2),c.currentY=c.touchesCurrent.y-c.touchesStart.y+c.startY+Te*(c.height-ve*2),c.currentX<c.minX&&(c.currentX=c.minX+1-(c.minX-c.currentX+1)**.8),c.currentX>c.maxX&&(c.currentX=c.maxX-1+(c.currentX-c.maxX+1)**.8),c.currentY<c.minY&&(c.currentY=c.minY+1-(c.minY-c.currentY+1)**.8),c.currentY>c.maxY&&(c.currentY=c.maxY-1+(c.currentY-c.maxY+1)**.8),w.prevPositionX||(w.prevPositionX=c.touchesCurrent.x),w.prevPositionY||(w.prevPositionY=c.touchesCurrent.y),w.prevTime||(w.prevTime=Date.now()),w.x=(c.touchesCurrent.x-w.prevPositionX)/(Date.now()-w.prevTime)/2,w.y=(c.touchesCurrent.y-w.prevPositionY)/(Date.now()-w.prevTime)/2,Math.abs(c.touchesCurrent.x-w.prevPositionX)<2&&(w.x=0),Math.abs(c.touchesCurrent.y-w.prevPositionY)<2&&(w.y=0),w.prevPositionX=c.touchesCurrent.x,w.prevPositionY=c.touchesCurrent.y,w.prevTime=Date.now(),f.imageWrapEl.style.transform=`translate3d(${c.currentX}px, ${c.currentY}px,0)`}function N(){const j=s.zoom;if(!f.imageEl)return;if(!c.isTouched||!c.isMoved){c.isTouched=!1,c.isMoved=!1;return}c.isTouched=!1,c.isMoved=!1;let V=300,Y=300;const le=w.x*V,ce=c.currentX+le,Te=w.y*Y,oe=c.currentY+Te;w.x!==0&&(V=Math.abs((ce-c.currentX)/w.x)),w.y!==0&&(Y=Math.abs((oe-c.currentY)/w.y));const ve=Math.max(V,Y);c.currentX=ce,c.currentY=oe;const _e=c.width*j.scale,Me=c.height*j.scale;c.minX=Math.min(f.slideWidth/2-_e/2,0),c.maxX=-c.minX,c.minY=Math.min(f.slideHeight/2-Me/2,0),c.maxY=-c.minY,c.currentX=Math.max(Math.min(c.currentX,c.maxX),c.minX),c.currentY=Math.max(Math.min(c.currentY,c.maxY),c.minY),f.imageWrapEl.style.transitionDuration=`${ve}ms`,f.imageWrapEl.style.transform=`translate3d(${c.currentX}px, ${c.currentY}px,0)`}function F(){const j=s.zoom;f.slideEl&&s.activeIndex!==s.slides.indexOf(f.slideEl)&&(f.imageEl&&(f.imageEl.style.transform="translate3d(0,0,0) scale(1)"),f.imageWrapEl&&(f.imageWrapEl.style.transform="translate3d(0,0,0)"),f.slideEl.classList.remove(`${s.params.zoom.zoomedSlideClass}`),j.scale=1,k=1,f.slideEl=void 0,f.imageEl=void 0,f.imageWrapEl=void 0,f.originX=0,f.originY=0)}function Z(j){const V=s.zoom,Y=s.params.zoom;if(!f.slideEl){j&&j.target&&(f.slideEl=j.target.closest(`.${s.params.slideClass}, swiper-slide`)),f.slideEl||(s.params.virtual&&s.params.virtual.enabled&&s.virtual?f.slideEl=(0,D.e)(s.slidesEl,`.${s.params.slideActiveClass}`)[0]:f.slideEl=s.slides[s.activeIndex]);let Le=f.slideEl.querySelector(`.${Y.containerClass}`);Le&&(Le=Le.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]),f.imageEl=Le,Le?f.imageWrapEl=(0,D.a)(f.imageEl,`.${Y.containerClass}`)[0]:f.imageWrapEl=void 0}if(!f.imageEl||!f.imageWrapEl)return;s.params.cssMode&&(s.wrapperEl.style.overflow="hidden",s.wrapperEl.style.touchAction="none"),f.slideEl.classList.add(`${Y.zoomedSlideClass}`);let le,ce,Te,oe,ve,_e,Me,xe,Re,Ne,Ge,Fe,Oe,Ae,Be,ke,je,$e;typeof c.touchesStart.x>"u"&&j?(le=j.pageX,ce=j.pageY):(le=c.touchesStart.x,ce=c.touchesStart.y);const Ie=typeof j=="number"?j:null;k===1&&Ie&&(le=void 0,ce=void 0),V.scale=Ie||f.imageWrapEl.getAttribute("data-swiper-zoom")||Y.maxRatio,k=Ie||f.imageWrapEl.getAttribute("data-swiper-zoom")||Y.maxRatio,j&&!(k===1&&Ie)?(je=f.slideEl.offsetWidth,$e=f.slideEl.offsetHeight,Te=(0,D.b)(f.slideEl).left+z.scrollX,oe=(0,D.b)(f.slideEl).top+z.scrollY,ve=Te+je/2-le,_e=oe+$e/2-ce,Re=f.imageEl.offsetWidth,Ne=f.imageEl.offsetHeight,Ge=Re*V.scale,Fe=Ne*V.scale,Oe=Math.min(je/2-Ge/2,0),Ae=Math.min($e/2-Fe/2,0),Be=-Oe,ke=-Ae,Me=ve*V.scale,xe=_e*V.scale,Me<Oe&&(Me=Oe),Me>Be&&(Me=Be),xe<Ae&&(xe=Ae),xe>ke&&(xe=ke)):(Me=0,xe=0),Ie&&V.scale===1&&(f.originX=0,f.originY=0),f.imageWrapEl.style.transitionDuration="300ms",f.imageWrapEl.style.transform=`translate3d(${Me}px, ${xe}px,0)`,f.imageEl.style.transitionDuration="300ms",f.imageEl.style.transform=`translate3d(0,0,0) scale(${V.scale})`}function J(){const j=s.zoom,V=s.params.zoom;if(!f.slideEl){s.params.virtual&&s.params.virtual.enabled&&s.virtual?f.slideEl=(0,D.e)(s.slidesEl,`.${s.params.slideActiveClass}`)[0]:f.slideEl=s.slides[s.activeIndex];let Y=f.slideEl.querySelector(`.${V.containerClass}`);Y&&(Y=Y.querySelectorAll("picture, img, svg, canvas, .swiper-zoom-target")[0]),f.imageEl=Y,Y?f.imageWrapEl=(0,D.a)(f.imageEl,`.${V.containerClass}`)[0]:f.imageWrapEl=void 0}!f.imageEl||!f.imageWrapEl||(s.params.cssMode&&(s.wrapperEl.style.overflow="",s.wrapperEl.style.touchAction=""),j.scale=1,k=1,f.imageWrapEl.style.transitionDuration="300ms",f.imageWrapEl.style.transform="translate3d(0,0,0)",f.imageEl.style.transitionDuration="300ms",f.imageEl.style.transform="translate3d(0,0,0) scale(1)",f.slideEl.classList.remove(`${V.zoomedSlideClass}`),f.slideEl=void 0,f.originX=0,f.originY=0)}function ee(j){const V=s.zoom;V.scale&&V.scale!==1?J():Z(j)}function C(){const j=s.params.passiveListeners?{passive:!0,capture:!1}:!1,V=s.params.passiveListeners?{passive:!1,capture:!0}:!0;return{passiveListener:j,activeListenerWithCapture:V}}function B(){const j=s.zoom;if(j.enabled)return;j.enabled=!0;const{passiveListener:V,activeListenerWithCapture:Y}=C();s.wrapperEl.addEventListener("pointerdown",l,V),s.wrapperEl.addEventListener("pointermove",u,Y),["pointerup","pointercancel","pointerout"].forEach(le=>{s.wrapperEl.addEventListener(le,h,V)}),s.wrapperEl.addEventListener("pointermove",L,Y)}function X(){const j=s.zoom;if(!j.enabled)return;j.enabled=!1;const{passiveListener:V,activeListenerWithCapture:Y}=C();s.wrapperEl.removeEventListener("pointerdown",l,V),s.wrapperEl.removeEventListener("pointermove",u,Y),["pointerup","pointercancel","pointerout"].forEach(le=>{s.wrapperEl.removeEventListener(le,h,V)}),s.wrapperEl.removeEventListener("pointermove",L,Y)}p("init",()=>{s.params.zoom.enabled&&B()}),p("destroy",()=>{X()}),p("touchStart",(j,V)=>{s.zoom.enabled&&_(V)}),p("touchEnd",(j,V)=>{s.zoom.enabled&&N()}),p("doubleTap",(j,V)=>{!s.animating&&s.params.zoom.enabled&&s.zoom.enabled&&s.params.zoom.toggle&&ee(V)}),p("transitionEnd",()=>{s.zoom.enabled&&s.params.zoom.enabled&&F()}),p("slideChange",()=>{s.zoom.enabled&&s.params.zoom.enabled&&s.params.cssMode&&F()}),Object.assign(s.zoom,{enable:B,disable:X,in:Z,out:J,toggle:ee})}},"./node_modules/swiper/shared/classes-to-selector.mjs":(te,U,S)=>{S.r(U),S.d(U,{c:()=>G});function G(D){return D===void 0&&(D=""),`.${D.trim().replace(/([\.:!+\/])/g,"\\$1").replace(/ /g,".")}`}},"./node_modules/swiper/shared/create-element-if-not-defined.mjs":(te,U,S)=>{S.r(U),S.d(U,{c:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($,n,s,E){return $.params.createElements&&Object.keys(E).forEach(p=>{if(!s[p]&&s.auto===!0){let m=(0,G.e)($.el,`.${E[p]}`)[0];m||(m=(0,G.c)("div",E[p]),m.className=E[p],$.el.append(m)),s[p]=m,n[p]=m}}),s}},"./node_modules/swiper/shared/create-shadow.mjs":(te,U,S)=>{S.r(U),S.d(U,{c:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($,n,s){const E=`swiper-slide-shadow${s?`-${s}`:""}${$?` swiper-slide-shadow-${$}`:""}`,p=(0,G.l)(n);let m=p.querySelector(`.${E.split(" ").join(".")}`);return m||(m=(0,G.c)("div",E.split(" ")),p.append(m)),m}},"./node_modules/swiper/shared/effect-init.mjs":(te,U,S)=>{S.r(U),S.d(U,{e:()=>G});function G(D){const{effect:$,swiper:n,on:s,setTranslate:E,setTransition:p,overwriteParams:m,perspective:z,recreateShadows:k,getEffectParams:R}=D;s("beforeInit",()=>{if(n.params.effect!==$)return;n.classNames.push(`${n.params.containerModifierClass}${$}`),z&&z()&&n.classNames.push(`${n.params.containerModifierClass}3d`);const y=m?m():{};Object.assign(n.params,y),Object.assign(n.originalParams,y)}),s("setTranslate",()=>{n.params.effect===$&&E()}),s("setTransition",(y,T)=>{n.params.effect===$&&p(T)}),s("transitionEnd",()=>{if(n.params.effect===$&&k){if(!R||!R().slideShadows)return;n.slides.forEach(y=>{y.querySelectorAll(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").forEach(T=>T.remove())}),k()}});let O;s("virtualUpdate",()=>{n.params.effect===$&&(n.slides.length||(O=!0),requestAnimationFrame(()=>{O&&n.slides&&n.slides.length&&(E(),O=!1)}))})}},"./node_modules/swiper/shared/effect-target.mjs":(te,U,S)=>{S.r(U),S.d(U,{e:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($,n){const s=(0,G.l)(n);return s!==n&&(s.style.backfaceVisibility="hidden",s.style["-webkit-backface-visibility"]="hidden"),s}},"./node_modules/swiper/shared/effect-virtual-transition-end.mjs":(te,U,S)=>{S.r(U),S.d(U,{e:()=>D});var G=S("./node_modules/swiper/shared/utils.mjs");function D($){let{swiper:n,duration:s,transformElements:E,allSlides:p}=$;const{activeIndex:m}=n,z=k=>k.parentElement?k.parentElement:n.slides.filter(O=>O.shadowRoot&&O.shadowRoot===k.parentNode)[0];if(n.params.virtualTranslate&&s!==0){let k=!1,R;p?R=E:R=E.filter(O=>{const y=O.classList.contains("swiper-slide-transform")?z(O):O;return n.getSlideIndex(y)===m}),R.forEach(O=>{(0,G.j)(O,()=>{if(k||!n||n.destroyed)return;k=!0,n.animating=!1;const y=new window.CustomEvent("transitionend",{bubbles:!0,cancelable:!0});n.wrapperEl.dispatchEvent(y)})})}}},"./node_modules/swiper/shared/ssr-window.esm.mjs":(te,U,S)=>{S.r(U),S.d(U,{a:()=>E,g:()=>n});function G(p){return p!==null&&typeof p=="object"&&"constructor"in p&&p.constructor===Object}function D(p,m){p===void 0&&(p={}),m===void 0&&(m={}),Object.keys(m).forEach(z=>{typeof p[z]>"u"?p[z]=m[z]:G(m[z])&&G(p[z])&&Object.keys(m[z]).length>0&&D(p[z],m[z])})}const $={body:{},addEventListener(){},removeEventListener(){},activeElement:{blur(){},nodeName:""},querySelector(){return null},querySelectorAll(){return[]},getElementById(){return null},createEvent(){return{initEvent(){}}},createElement(){return{children:[],childNodes:[],style:{},setAttribute(){},getElementsByTagName(){return[]}}},createElementNS(){return{}},importNode(){return null},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""}};function n(){const p=typeof document<"u"?document:{};return D(p,$),p}const s={document:$,navigator:{userAgent:""},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""},history:{replaceState(){},pushState(){},go(){},back(){}},CustomEvent:function(){return this},addEventListener(){},removeEventListener(){},getComputedStyle(){return{getPropertyValue(){return""}}},Image(){},Date(){},screen:{},setTimeout(){},clearTimeout(){},matchMedia(){return{}},requestAnimationFrame(p){return typeof setTimeout>"u"?(p(),null):setTimeout(p,0)},cancelAnimationFrame(p){typeof setTimeout>"u"||clearTimeout(p)}};function E(){const p=typeof window<"u"?window:{};return D(p,s),p}},"./node_modules/swiper/shared/swiper-core.mjs":(te,U,S)=>{S.r(U),S.d(U,{S:()=>Ce,d:()=>We});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs"),D=S("./node_modules/swiper/shared/utils.mjs");let $;function n(){const i=(0,G.a)(),t=(0,G.g)();return{smoothScroll:t.documentElement&&t.documentElement.style&&"scrollBehavior"in t.documentElement.style,touch:!!("ontouchstart"in i||i.DocumentTouch&&t instanceof i.DocumentTouch)}}function s(){return $||($=n()),$}let E;function p(i){let{userAgent:t}=i===void 0?{}:i;const e=s(),r=(0,G.a)(),d=r.navigator.platform,o=t||r.navigator.userAgent,M={ios:!1,android:!1},P=r.screen.width,v=r.screen.height,W=o.match(/(Android);?[\s\/]+([\d.]+)?/);let H=o.match(/(iPad).*OS\s([\d_]+)/);const K=o.match(/(iPod)(.*OS\s([\d_]+))?/),Q=!H&&o.match(/(iPhone\sOS|iOS)\s([\d_]+)/),q=d==="Win32";let se=d==="MacIntel";const ae=["1024x1366","1366x1024","834x1194","1194x834","834x1112","1112x834","768x1024","1024x768","820x1180","1180x820","810x1080","1080x810"];return!H&&se&&e.touch&&ae.indexOf(`${P}x${v}`)>=0&&(H=o.match(/(Version)\/([\d.]+)/),H||(H=[0,1,"13_0_0"]),se=!1),W&&!q&&(M.os="android",M.android=!0),(H||Q||K)&&(M.os="ios",M.ios=!0),M}function m(i){return i===void 0&&(i={}),E||(E=p(i)),E}let z;function k(){const i=(0,G.a)();let t=!1;function e(){const r=i.navigator.userAgent.toLowerCase();return r.indexOf("safari")>=0&&r.indexOf("chrome")<0&&r.indexOf("android")<0}if(e()){const r=String(i.navigator.userAgent);if(r.includes("Version/")){const[d,o]=r.split("Version/")[1].split(" ")[0].split(".").map(M=>Number(M));t=d<16||d===16&&o<2}}return{isSafari:t||e(),needPerspectiveFix:t,isWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(i.navigator.userAgent)}}function R(){return z||(z=k()),z}function O(i){let{swiper:t,on:e,emit:r}=i;const d=(0,G.a)();let o=null,M=null;const P=()=>{!t||t.destroyed||!t.initialized||(r("beforeResize"),r("resize"))},v=()=>{!t||t.destroyed||!t.initialized||(o=new ResizeObserver(K=>{M=d.requestAnimationFrame(()=>{const{width:Q,height:q}=t;let se=Q,ae=q;K.forEach(he=>{let{contentBoxSize:ie,contentRect:me,target:re}=he;re&&re!==t.el||(se=me?me.width:(ie[0]||ie).inlineSize,ae=me?me.height:(ie[0]||ie).blockSize)}),(se!==Q||ae!==q)&&P()})}),o.observe(t.el))},W=()=>{M&&d.cancelAnimationFrame(M),o&&o.unobserve&&t.el&&(o.unobserve(t.el),o=null)},H=()=>{!t||t.destroyed||!t.initialized||r("orientationchange")};e("init",()=>{if(t.params.resizeObserver&&typeof d.ResizeObserver<"u"){v();return}d.addEventListener("resize",P),d.addEventListener("orientationchange",H)}),e("destroy",()=>{W(),d.removeEventListener("resize",P),d.removeEventListener("orientationchange",H)})}function y(i){let{swiper:t,extendParams:e,on:r,emit:d}=i;const o=[],M=(0,G.a)(),P=function(H,K){K===void 0&&(K={});const Q=M.MutationObserver||M.WebkitMutationObserver,q=new Q(se=>{if(t.__preventObserver__)return;if(se.length===1){d("observerUpdate",se[0]);return}const ae=function(){d("observerUpdate",se[0])};M.requestAnimationFrame?M.requestAnimationFrame(ae):M.setTimeout(ae,0)});q.observe(H,{attributes:typeof K.attributes>"u"?!0:K.attributes,childList:typeof K.childList>"u"?!0:K.childList,characterData:typeof K.characterData>"u"?!0:K.characterData}),o.push(q)},v=()=>{if(t.params.observer){if(t.params.observeParents){const H=(0,D.a)(t.hostEl);for(let K=0;K<H.length;K+=1)P(H[K])}P(t.hostEl,{childList:t.params.observeSlideChildren}),P(t.wrapperEl,{attributes:!1})}},W=()=>{o.forEach(H=>{H.disconnect()}),o.splice(0,o.length)};e({observer:!1,observeParents:!1,observeSlideChildren:!1}),r("init",v),r("destroy",W)}var T={on(i,t,e){const r=this;if(!r.eventsListeners||r.destroyed||typeof t!="function")return r;const d=e?"unshift":"push";return i.split(" ").forEach(o=>{r.eventsListeners[o]||(r.eventsListeners[o]=[]),r.eventsListeners[o][d](t)}),r},once(i,t,e){const r=this;if(!r.eventsListeners||r.destroyed||typeof t!="function")return r;function d(){r.off(i,d),d.__emitterProxy&&delete d.__emitterProxy;for(var o=arguments.length,M=new Array(o),P=0;P<o;P++)M[P]=arguments[P];t.apply(r,M)}return d.__emitterProxy=t,r.on(i,d,e)},onAny(i,t){const e=this;if(!e.eventsListeners||e.destroyed||typeof i!="function")return e;const r=t?"unshift":"push";return e.eventsAnyListeners.indexOf(i)<0&&e.eventsAnyListeners[r](i),e},offAny(i){const t=this;if(!t.eventsListeners||t.destroyed||!t.eventsAnyListeners)return t;const e=t.eventsAnyListeners.indexOf(i);return e>=0&&t.eventsAnyListeners.splice(e,1),t},off(i,t){const e=this;return!e.eventsListeners||e.destroyed||!e.eventsListeners||i.split(" ").forEach(r=>{typeof t>"u"?e.eventsListeners[r]=[]:e.eventsListeners[r]&&e.eventsListeners[r].forEach((d,o)=>{(d===t||d.__emitterProxy&&d.__emitterProxy===t)&&e.eventsListeners[r].splice(o,1)})}),e},emit(){const i=this;if(!i.eventsListeners||i.destroyed||!i.eventsListeners)return i;let t,e,r;for(var d=arguments.length,o=new Array(d),M=0;M<d;M++)o[M]=arguments[M];return typeof o[0]=="string"||Array.isArray(o[0])?(t=o[0],e=o.slice(1,o.length),r=i):(t=o[0].events,e=o[0].data,r=o[0].context||i),e.unshift(r),(Array.isArray(t)?t:t.split(" ")).forEach(v=>{i.eventsAnyListeners&&i.eventsAnyListeners.length&&i.eventsAnyListeners.forEach(W=>{W.apply(r,[v,...e])}),i.eventsListeners&&i.eventsListeners[v]&&i.eventsListeners[v].forEach(W=>{W.apply(r,e)})}),i}};function f(){const i=this;let t,e;const r=i.el;typeof i.params.width<"u"&&i.params.width!==null?t=i.params.width:t=r.clientWidth,typeof i.params.height<"u"&&i.params.height!==null?e=i.params.height:e=r.clientHeight,!(t===0&&i.isHorizontal()||e===0&&i.isVertical())&&(t=t-parseInt((0,D.m)(r,"padding-left")||0,10)-parseInt((0,D.m)(r,"padding-right")||0,10),e=e-parseInt((0,D.m)(r,"padding-top")||0,10)-parseInt((0,D.m)(r,"padding-bottom")||0,10),Number.isNaN(t)&&(t=0),Number.isNaN(e)&&(e=0),Object.assign(i,{width:t,height:e,size:i.isHorizontal()?t:e}))}function c(){const i=this;function t(ne,pe){return parseFloat(ne.getPropertyValue(i.getDirectionLabel(pe))||0)}const e=i.params,{wrapperEl:r,slidesEl:d,size:o,rtlTranslate:M,wrongRTL:P}=i,v=i.virtual&&e.virtual.enabled,W=v?i.virtual.slides.length:i.slides.length,H=(0,D.e)(d,`.${i.params.slideClass}, swiper-slide`),K=v?i.virtual.slides.length:H.length;let Q=[];const q=[],se=[];let ae=e.slidesOffsetBefore;typeof ae=="function"&&(ae=e.slidesOffsetBefore.call(i));let he=e.slidesOffsetAfter;typeof he=="function"&&(he=e.slidesOffsetAfter.call(i));const ie=i.snapGrid.length,me=i.slidesGrid.length;let re=e.spaceBetween,de=-ae,ue=0,we=0;if(typeof o>"u")return;typeof re=="string"&&re.indexOf("%")>=0?re=parseFloat(re.replace("%",""))/100*o:typeof re=="string"&&(re=parseFloat(re)),i.virtualSize=-re,H.forEach(ne=>{M?ne.style.marginLeft="":ne.style.marginRight="",ne.style.marginBottom="",ne.style.marginTop=""}),e.centeredSlides&&e.cssMode&&((0,D.s)(r,"--swiper-centered-offset-before",""),(0,D.s)(r,"--swiper-centered-offset-after",""));const De=e.grid&&e.grid.rows>1&&i.grid;De?i.grid.initSlides(H):i.grid&&i.grid.unsetSlides();let be;const ze=e.slidesPerView==="auto"&&e.breakpoints&&Object.keys(e.breakpoints).filter(ne=>typeof e.breakpoints[ne].slidesPerView<"u").length>0;for(let ne=0;ne<K;ne+=1){be=0;let pe;if(H[ne]&&(pe=H[ne]),De&&i.grid.updateSlide(ne,pe,H),!(H[ne]&&(0,D.m)(pe,"display")==="none")){if(e.slidesPerView==="auto"){ze&&(H[ne].style[i.getDirectionLabel("width")]="");const ge=getComputedStyle(pe),fe=pe.style.transform,Ee=pe.style.webkitTransform;if(fe&&(pe.style.transform="none"),Ee&&(pe.style.webkitTransform="none"),e.roundLengths)be=i.isHorizontal()?(0,D.f)(pe,"width",!0):(0,D.f)(pe,"height",!0);else{const Se=t(ge,"width"),Pe=t(ge,"padding-left"),wt=t(ge,"padding-right"),Je=t(ge,"margin-left"),Qe=t(ge,"margin-right"),et=ge.getPropertyValue("box-sizing");if(et&&et==="border-box")be=Se+Je+Qe;else{const{clientWidth:yt,offsetWidth:bt}=pe;be=Se+Pe+wt+Je+Qe+(bt-yt)}}fe&&(pe.style.transform=fe),Ee&&(pe.style.webkitTransform=Ee),e.roundLengths&&(be=Math.floor(be))}else be=(o-(e.slidesPerView-1)*re)/e.slidesPerView,e.roundLengths&&(be=Math.floor(be)),H[ne]&&(H[ne].style[i.getDirectionLabel("width")]=`${be}px`);H[ne]&&(H[ne].swiperSlideSize=be),se.push(be),e.centeredSlides?(de=de+be/2+ue/2+re,ue===0&&ne!==0&&(de=de-o/2-re),ne===0&&(de=de-o/2-re),Math.abs(de)<.001&&(de=0),e.roundLengths&&(de=Math.floor(de)),we%e.slidesPerGroup===0&&Q.push(de),q.push(de)):(e.roundLengths&&(de=Math.floor(de)),(we-Math.min(i.params.slidesPerGroupSkip,we))%i.params.slidesPerGroup===0&&Q.push(de),q.push(de),de=de+be+re),i.virtualSize+=be+re,ue=be,we+=1}}if(i.virtualSize=Math.max(i.virtualSize,o)+he,M&&P&&(e.effect==="slide"||e.effect==="coverflow")&&(r.style.width=`${i.virtualSize+re}px`),e.setWrapperSize&&(r.style[i.getDirectionLabel("width")]=`${i.virtualSize+re}px`),De&&i.grid.updateWrapperSize(be,Q),!e.centeredSlides){const ne=[];for(let pe=0;pe<Q.length;pe+=1){let ge=Q[pe];e.roundLengths&&(ge=Math.floor(ge)),Q[pe]<=i.virtualSize-o&&ne.push(ge)}Q=ne,Math.floor(i.virtualSize-o)-Math.floor(Q[Q.length-1])>1&&Q.push(i.virtualSize-o)}if(v&&e.loop){const ne=se[0]+re;if(e.slidesPerGroup>1){const pe=Math.ceil((i.virtual.slidesBefore+i.virtual.slidesAfter)/e.slidesPerGroup),ge=ne*e.slidesPerGroup;for(let fe=0;fe<pe;fe+=1)Q.push(Q[Q.length-1]+ge)}for(let pe=0;pe<i.virtual.slidesBefore+i.virtual.slidesAfter;pe+=1)e.slidesPerGroup===1&&Q.push(Q[Q.length-1]+ne),q.push(q[q.length-1]+ne),i.virtualSize+=ne}if(Q.length===0&&(Q=[0]),re!==0){const ne=i.isHorizontal()&&M?"marginLeft":i.getDirectionLabel("marginRight");H.filter((pe,ge)=>!e.cssMode||e.loop?!0:ge!==H.length-1).forEach(pe=>{pe.style[ne]=`${re}px`})}if(e.centeredSlides&&e.centeredSlidesBounds){let ne=0;se.forEach(ge=>{ne+=ge+(re||0)}),ne-=re;const pe=ne-o;Q=Q.map(ge=>ge<=0?-ae:ge>pe?pe+he:ge)}if(e.centerInsufficientSlides){let ne=0;if(se.forEach(pe=>{ne+=pe+(re||0)}),ne-=re,ne<o){const pe=(o-ne)/2;Q.forEach((ge,fe)=>{Q[fe]=ge-pe}),q.forEach((ge,fe)=>{q[fe]=ge+pe})}}if(Object.assign(i,{slides:H,snapGrid:Q,slidesGrid:q,slidesSizesGrid:se}),e.centeredSlides&&e.cssMode&&!e.centeredSlidesBounds){(0,D.s)(r,"--swiper-centered-offset-before",`${-Q[0]}px`),(0,D.s)(r,"--swiper-centered-offset-after",`${i.size/2-se[se.length-1]/2}px`);const ne=-i.snapGrid[0],pe=-i.slidesGrid[0];i.snapGrid=i.snapGrid.map(ge=>ge+ne),i.slidesGrid=i.slidesGrid.map(ge=>ge+pe)}if(K!==W&&i.emit("slidesLengthChange"),Q.length!==ie&&(i.params.watchOverflow&&i.checkOverflow(),i.emit("snapGridLengthChange")),q.length!==me&&i.emit("slidesGridLengthChange"),e.watchSlidesProgress&&i.updateSlidesOffset(),i.emit("slidesUpdated"),!v&&!e.cssMode&&(e.effect==="slide"||e.effect==="fade")){const ne=`${e.containerModifierClass}backface-hidden`,pe=i.el.classList.contains(ne);K<=e.maxBackfaceHiddenSlides?pe||i.el.classList.add(ne):pe&&i.el.classList.remove(ne)}}function w(i){const t=this,e=[],r=t.virtual&&t.params.virtual.enabled;let d=0,o;typeof i=="number"?t.setTransition(i):i===!0&&t.setTransition(t.params.speed);const M=P=>r?t.slides[t.getSlideIndexByData(P)]:t.slides[P];if(t.params.slidesPerView!=="auto"&&t.params.slidesPerView>1)if(t.params.centeredSlides)(t.visibleSlides||[]).forEach(P=>{e.push(P)});else for(o=0;o<Math.ceil(t.params.slidesPerView);o+=1){const P=t.activeIndex+o;if(P>t.slides.length&&!r)break;e.push(M(P))}else e.push(M(t.activeIndex));for(o=0;o<e.length;o+=1)if(typeof e[o]<"u"){const P=e[o].offsetHeight;d=P>d?P:d}(d||d===0)&&(t.wrapperEl.style.height=`${d}px`)}function b(){const i=this,t=i.slides,e=i.isElement?i.isHorizontal()?i.wrapperEl.offsetLeft:i.wrapperEl.offsetTop:0;for(let r=0;r<t.length;r+=1)t[r].swiperSlideOffset=(i.isHorizontal()?t[r].offsetLeft:t[r].offsetTop)-e-i.cssOverflowAdjustment()}function I(i){i===void 0&&(i=this&&this.translate||0);const t=this,e=t.params,{slides:r,rtlTranslate:d,snapGrid:o}=t;if(r.length===0)return;typeof r[0].swiperSlideOffset>"u"&&t.updateSlidesOffset();let M=-i;d&&(M=i),r.forEach(v=>{v.classList.remove(e.slideVisibleClass,e.slideFullyVisibleClass)}),t.visibleSlidesIndexes=[],t.visibleSlides=[];let P=e.spaceBetween;typeof P=="string"&&P.indexOf("%")>=0?P=parseFloat(P.replace("%",""))/100*t.size:typeof P=="string"&&(P=parseFloat(P));for(let v=0;v<r.length;v+=1){const W=r[v];let H=W.swiperSlideOffset;e.cssMode&&e.centeredSlides&&(H-=r[0].swiperSlideOffset);const K=(M+(e.centeredSlides?t.minTranslate():0)-H)/(W.swiperSlideSize+P),Q=(M-o[0]+(e.centeredSlides?t.minTranslate():0)-H)/(W.swiperSlideSize+P),q=-(M-H),se=q+t.slidesSizesGrid[v],ae=q>=0&&q<=t.size-t.slidesSizesGrid[v];(q>=0&&q<t.size-1||se>1&&se<=t.size||q<=0&&se>=t.size)&&(t.visibleSlides.push(W),t.visibleSlidesIndexes.push(v),r[v].classList.add(e.slideVisibleClass)),ae&&r[v].classList.add(e.slideFullyVisibleClass),W.progress=d?-K:K,W.originalProgress=d?-Q:Q}}function A(i){const t=this;if(typeof i>"u"){const H=t.rtlTranslate?-1:1;i=t&&t.translate&&t.translate*H||0}const e=t.params,r=t.maxTranslate()-t.minTranslate();let{progress:d,isBeginning:o,isEnd:M,progressLoop:P}=t;const v=o,W=M;if(r===0)d=0,o=!0,M=!0;else{d=(i-t.minTranslate())/r;const H=Math.abs(i-t.minTranslate())<1,K=Math.abs(i-t.maxTranslate())<1;o=H||d<=0,M=K||d>=1,H&&(d=0),K&&(d=1)}if(e.loop){const H=t.getSlideIndexByData(0),K=t.getSlideIndexByData(t.slides.length-1),Q=t.slidesGrid[H],q=t.slidesGrid[K],se=t.slidesGrid[t.slidesGrid.length-1],ae=Math.abs(i);ae>=Q?P=(ae-Q)/se:P=(ae+se-q)/se,P>1&&(P-=1)}Object.assign(t,{progress:d,progressLoop:P,isBeginning:o,isEnd:M}),(e.watchSlidesProgress||e.centeredSlides&&e.autoHeight)&&t.updateSlidesProgress(i),o&&!v&&t.emit("reachBeginning toEdge"),M&&!W&&t.emit("reachEnd toEdge"),(v&&!o||W&&!M)&&t.emit("fromEdge"),t.emit("progress",d)}function x(){const i=this,{slides:t,params:e,slidesEl:r,activeIndex:d}=i,o=i.virtual&&e.virtual.enabled,M=i.grid&&e.grid&&e.grid.rows>1,P=K=>(0,D.e)(r,`.${e.slideClass}${K}, swiper-slide${K}`)[0];t.forEach(K=>{K.classList.remove(e.slideActiveClass,e.slideNextClass,e.slidePrevClass)});let v,W,H;if(o)if(e.loop){let K=d-i.virtual.slidesBefore;K<0&&(K=i.virtual.slides.length+K),K>=i.virtual.slides.length&&(K-=i.virtual.slides.length),v=P(`[data-swiper-slide-index="${K}"]`)}else v=P(`[data-swiper-slide-index="${d}"]`);else M?(v=t.filter(K=>K.column===d)[0],H=t.filter(K=>K.column===d+1)[0],W=t.filter(K=>K.column===d-1)[0]):v=t[d];v&&(v.classList.add(e.slideActiveClass),M?(H&&H.classList.add(e.slideNextClass),W&&W.classList.add(e.slidePrevClass)):(H=(0,D.o)(v,`.${e.slideClass}, swiper-slide`)[0],e.loop&&!H&&(H=t[0]),H&&H.classList.add(e.slideNextClass),W=(0,D.p)(v,`.${e.slideClass}, swiper-slide`)[0],e.loop&&!W===0&&(W=t[t.length-1]),W&&W.classList.add(e.slidePrevClass))),i.emitSlidesClasses()}const g=(i,t)=>{if(!i||i.destroyed||!i.params)return;const e=()=>i.isElement?"swiper-slide":`.${i.params.slideClass}`,r=t.closest(e());if(r){let d=r.querySelector(`.${i.params.lazyPreloaderClass}`);!d&&i.isElement&&(r.shadowRoot?d=r.shadowRoot.querySelector(`.${i.params.lazyPreloaderClass}`):requestAnimationFrame(()=>{r.shadowRoot&&(d=r.shadowRoot.querySelector(`.${i.params.lazyPreloaderClass}`),d&&d.remove())})),d&&d.remove()}},a=(i,t)=>{if(!i.slides[t])return;const e=i.slides[t].querySelector('[loading="lazy"]');e&&e.removeAttribute("loading")},l=i=>{if(!i||i.destroyed||!i.params)return;let t=i.params.lazyPreloadPrevNext;const e=i.slides.length;if(!e||!t||t<0)return;t=Math.min(t,e);const r=i.params.slidesPerView==="auto"?i.slidesPerViewDynamic():Math.ceil(i.params.slidesPerView),d=i.activeIndex;if(i.params.grid&&i.params.grid.rows>1){const M=d,P=[M-t];P.push(...Array.from({length:t}).map((v,W)=>M+r+W)),i.slides.forEach((v,W)=>{P.includes(v.column)&&a(i,W)});return}const o=d+r-1;if(i.params.rewind||i.params.loop)for(let M=d-t;M<=o+t;M+=1){const P=(M%e+e)%e;(P<d||P>o)&&a(i,P)}else for(let M=Math.max(d-t,0);M<=Math.min(o+t,e-1);M+=1)M!==d&&(M>o||M<d)&&a(i,M)};function u(i){const{slidesGrid:t,params:e}=i,r=i.rtlTranslate?i.translate:-i.translate;let d;for(let o=0;o<t.length;o+=1)typeof t[o+1]<"u"?r>=t[o]&&r<t[o+1]-(t[o+1]-t[o])/2?d=o:r>=t[o]&&r<t[o+1]&&(d=o+1):r>=t[o]&&(d=o);return e.normalizeSlideIndex&&(d<0||typeof d>"u")&&(d=0),d}function h(i){const t=this,e=t.rtlTranslate?t.translate:-t.translate,{snapGrid:r,params:d,activeIndex:o,realIndex:M,snapIndex:P}=t;let v=i,W;const H=q=>{let se=q-t.virtual.slidesBefore;return se<0&&(se=t.virtual.slides.length+se),se>=t.virtual.slides.length&&(se-=t.virtual.slides.length),se};if(typeof v>"u"&&(v=u(t)),r.indexOf(e)>=0)W=r.indexOf(e);else{const q=Math.min(d.slidesPerGroupSkip,v);W=q+Math.floor((v-q)/d.slidesPerGroup)}if(W>=r.length&&(W=r.length-1),v===o&&!t.params.loop){W!==P&&(t.snapIndex=W,t.emit("snapIndexChange"));return}if(v===o&&t.params.loop&&t.virtual&&t.params.virtual.enabled){t.realIndex=H(v);return}const K=t.grid&&d.grid&&d.grid.rows>1;let Q;if(t.virtual&&d.virtual.enabled&&d.loop)Q=H(v);else if(K){const q=t.slides.filter(ae=>ae.column===v)[0];let se=parseInt(q.getAttribute("data-swiper-slide-index"),10);Number.isNaN(se)&&(se=Math.max(t.slides.indexOf(q),0)),Q=Math.floor(se/d.grid.rows)}else if(t.slides[v]){const q=t.slides[v].getAttribute("data-swiper-slide-index");q?Q=parseInt(q,10):Q=v}else Q=v;Object.assign(t,{previousSnapIndex:P,snapIndex:W,previousRealIndex:M,realIndex:Q,previousIndex:o,activeIndex:v}),t.initialized&&l(t),t.emit("activeIndexChange"),t.emit("snapIndexChange"),(t.initialized||t.params.runCallbacksOnInit)&&(M!==Q&&t.emit("realIndexChange"),t.emit("slideChange"))}function _(i,t){const e=this,r=e.params;let d=i.closest(`.${r.slideClass}, swiper-slide`);!d&&e.isElement&&t&&t.length>1&&t.includes(i)&&[...t.slice(t.indexOf(i)+1,t.length)].forEach(P=>{!d&&P.matches&&P.matches(`.${r.slideClass}, swiper-slide`)&&(d=P)});let o=!1,M;if(d){for(let P=0;P<e.slides.length;P+=1)if(e.slides[P]===d){o=!0,M=P;break}}if(d&&o)e.clickedSlide=d,e.virtual&&e.params.virtual.enabled?e.clickedIndex=parseInt(d.getAttribute("data-swiper-slide-index"),10):e.clickedIndex=M;else{e.clickedSlide=void 0,e.clickedIndex=void 0;return}r.slideToClickedSlide&&e.clickedIndex!==void 0&&e.clickedIndex!==e.activeIndex&&e.slideToClickedSlide()}var L={updateSize:f,updateSlides:c,updateAutoHeight:w,updateSlidesOffset:b,updateSlidesProgress:I,updateProgress:A,updateSlidesClasses:x,updateActiveIndex:h,updateClickedSlide:_};function N(i){i===void 0&&(i=this.isHorizontal()?"x":"y");const t=this,{params:e,rtlTranslate:r,translate:d,wrapperEl:o}=t;if(e.virtualTranslate)return r?-d:d;if(e.cssMode)return d;let M=(0,D.i)(o,i);return M+=t.cssOverflowAdjustment(),r&&(M=-M),M||0}function F(i,t){const e=this,{rtlTranslate:r,params:d,wrapperEl:o,progress:M}=e;let P=0,v=0;const W=0;e.isHorizontal()?P=r?-i:i:v=i,d.roundLengths&&(P=Math.floor(P),v=Math.floor(v)),e.previousTranslate=e.translate,e.translate=e.isHorizontal()?P:v,d.cssMode?o[e.isHorizontal()?"scrollLeft":"scrollTop"]=e.isHorizontal()?-P:-v:d.virtualTranslate||(e.isHorizontal()?P-=e.cssOverflowAdjustment():v-=e.cssOverflowAdjustment(),o.style.transform=`translate3d(${P}px, ${v}px, ${W}px)`);let H;const K=e.maxTranslate()-e.minTranslate();K===0?H=0:H=(i-e.minTranslate())/K,H!==M&&e.updateProgress(i),e.emit("setTranslate",e.translate,t)}function Z(){return-this.snapGrid[0]}function J(){return-this.snapGrid[this.snapGrid.length-1]}function ee(i,t,e,r,d){i===void 0&&(i=0),t===void 0&&(t=this.params.speed),e===void 0&&(e=!0),r===void 0&&(r=!0);const o=this,{params:M,wrapperEl:P}=o;if(o.animating&&M.preventInteractionOnTransition)return!1;const v=o.minTranslate(),W=o.maxTranslate();let H;if(r&&i>v?H=v:r&&i<W?H=W:H=i,o.updateProgress(H),M.cssMode){const K=o.isHorizontal();if(t===0)P[K?"scrollLeft":"scrollTop"]=-H;else{if(!o.support.smoothScroll)return(0,D.q)({swiper:o,targetPosition:-H,side:K?"left":"top"}),!0;P.scrollTo({[K?"left":"top"]:-H,behavior:"smooth"})}return!0}return t===0?(o.setTransition(0),o.setTranslate(H),e&&(o.emit("beforeTransitionStart",t,d),o.emit("transitionEnd"))):(o.setTransition(t),o.setTranslate(H),e&&(o.emit("beforeTransitionStart",t,d),o.emit("transitionStart")),o.animating||(o.animating=!0,o.onTranslateToWrapperTransitionEnd||(o.onTranslateToWrapperTransitionEnd=function(Q){!o||o.destroyed||Q.target===this&&(o.wrapperEl.removeEventListener("transitionend",o.onTranslateToWrapperTransitionEnd),o.onTranslateToWrapperTransitionEnd=null,delete o.onTranslateToWrapperTransitionEnd,e&&o.emit("transitionEnd"))}),o.wrapperEl.addEventListener("transitionend",o.onTranslateToWrapperTransitionEnd))),!0}var C={getTranslate:N,setTranslate:F,minTranslate:Z,maxTranslate:J,translateTo:ee};function B(i,t){const e=this;e.params.cssMode||(e.wrapperEl.style.transitionDuration=`${i}ms`,e.wrapperEl.style.transitionDelay=i===0?"0ms":""),e.emit("setTransition",i,t)}function X(i){let{swiper:t,runCallbacks:e,direction:r,step:d}=i;const{activeIndex:o,previousIndex:M}=t;let P=r;if(P||(o>M?P="next":o<M?P="prev":P="reset"),t.emit(`transition${d}`),e&&o!==M){if(P==="reset"){t.emit(`slideResetTransition${d}`);return}t.emit(`slideChangeTransition${d}`),P==="next"?t.emit(`slideNextTransition${d}`):t.emit(`slidePrevTransition${d}`)}}function j(i,t){i===void 0&&(i=!0);const e=this,{params:r}=e;r.cssMode||(r.autoHeight&&e.updateAutoHeight(),X({swiper:e,runCallbacks:i,direction:t,step:"Start"}))}function V(i,t){i===void 0&&(i=!0);const e=this,{params:r}=e;e.animating=!1,!r.cssMode&&(e.setTransition(0),X({swiper:e,runCallbacks:i,direction:t,step:"End"}))}var Y={setTransition:B,transitionStart:j,transitionEnd:V};function le(i,t,e,r,d){i===void 0&&(i=0),t===void 0&&(t=this.params.speed),e===void 0&&(e=!0),typeof i=="string"&&(i=parseInt(i,10));const o=this;let M=i;M<0&&(M=0);const{params:P,snapGrid:v,slidesGrid:W,previousIndex:H,activeIndex:K,rtlTranslate:Q,wrapperEl:q,enabled:se}=o;if(o.animating&&P.preventInteractionOnTransition||!se&&!r&&!d)return!1;const ae=Math.min(o.params.slidesPerGroupSkip,M);let he=ae+Math.floor((M-ae)/o.params.slidesPerGroup);he>=v.length&&(he=v.length-1);const ie=-v[he];if(P.normalizeSlideIndex)for(let re=0;re<W.length;re+=1){const de=-Math.floor(ie*100),ue=Math.floor(W[re]*100),we=Math.floor(W[re+1]*100);typeof W[re+1]<"u"?de>=ue&&de<we-(we-ue)/2?M=re:de>=ue&&de<we&&(M=re+1):de>=ue&&(M=re)}if(o.initialized&&M!==K&&(!o.allowSlideNext&&(Q?ie>o.translate&&ie>o.minTranslate():ie<o.translate&&ie<o.minTranslate())||!o.allowSlidePrev&&ie>o.translate&&ie>o.maxTranslate()&&(K||0)!==M))return!1;M!==(H||0)&&e&&o.emit("beforeSlideChangeStart"),o.updateProgress(ie);let me;if(M>K?me="next":M<K?me="prev":me="reset",Q&&-ie===o.translate||!Q&&ie===o.translate)return o.updateActiveIndex(M),P.autoHeight&&o.updateAutoHeight(),o.updateSlidesClasses(),P.effect!=="slide"&&o.setTranslate(ie),me!=="reset"&&(o.transitionStart(e,me),o.transitionEnd(e,me)),!1;if(P.cssMode){const re=o.isHorizontal(),de=Q?ie:-ie;if(t===0){const ue=o.virtual&&o.params.virtual.enabled;ue&&(o.wrapperEl.style.scrollSnapType="none",o._immediateVirtual=!0),ue&&!o._cssModeVirtualInitialSet&&o.params.initialSlide>0?(o._cssModeVirtualInitialSet=!0,requestAnimationFrame(()=>{q[re?"scrollLeft":"scrollTop"]=de})):q[re?"scrollLeft":"scrollTop"]=de,ue&&requestAnimationFrame(()=>{o.wrapperEl.style.scrollSnapType="",o._immediateVirtual=!1})}else{if(!o.support.smoothScroll)return(0,D.q)({swiper:o,targetPosition:de,side:re?"left":"top"}),!0;q.scrollTo({[re?"left":"top"]:de,behavior:"smooth"})}return!0}return o.setTransition(t),o.setTranslate(ie),o.updateActiveIndex(M),o.updateSlidesClasses(),o.emit("beforeTransitionStart",t,r),o.transitionStart(e,me),t===0?o.transitionEnd(e,me):o.animating||(o.animating=!0,o.onSlideToWrapperTransitionEnd||(o.onSlideToWrapperTransitionEnd=function(de){!o||o.destroyed||de.target===this&&(o.wrapperEl.removeEventListener("transitionend",o.onSlideToWrapperTransitionEnd),o.onSlideToWrapperTransitionEnd=null,delete o.onSlideToWrapperTransitionEnd,o.transitionEnd(e,me))}),o.wrapperEl.addEventListener("transitionend",o.onSlideToWrapperTransitionEnd)),!0}function ce(i,t,e,r){i===void 0&&(i=0),t===void 0&&(t=this.params.speed),e===void 0&&(e=!0),typeof i=="string"&&(i=parseInt(i,10));const d=this,o=d.grid&&d.params.grid&&d.params.grid.rows>1;let M=i;if(d.params.loop)if(d.virtual&&d.params.virtual.enabled)M=M+d.virtual.slidesBefore;else{let P;if(o){const Q=M*d.params.grid.rows;P=d.slides.filter(q=>q.getAttribute("data-swiper-slide-index")*1===Q)[0].column}else P=d.getSlideIndexByData(M);const v=o?Math.ceil(d.slides.length/d.params.grid.rows):d.slides.length,{centeredSlides:W}=d.params;let H=d.params.slidesPerView;H==="auto"?H=d.slidesPerViewDynamic():(H=Math.ceil(parseFloat(d.params.slidesPerView,10)),W&&H%2===0&&(H=H+1));let K=v-P<H;if(W&&(K=K||P<Math.ceil(H/2)),K){const Q=W?P<d.activeIndex?"prev":"next":P-d.activeIndex-1<d.params.slidesPerView?"next":"prev";d.loopFix({direction:Q,slideTo:!0,activeSlideIndex:Q==="next"?P+1:P-v+1,slideRealIndex:Q==="next"?d.realIndex:void 0})}if(o){const Q=M*d.params.grid.rows;M=d.slides.filter(q=>q.getAttribute("data-swiper-slide-index")*1===Q)[0].column}else M=d.getSlideIndexByData(M)}return requestAnimationFrame(()=>{d.slideTo(M,t,e,r)}),d}function Te(i,t,e){i===void 0&&(i=this.params.speed),t===void 0&&(t=!0);const r=this,{enabled:d,params:o,animating:M}=r;if(!d)return r;let P=o.slidesPerGroup;o.slidesPerView==="auto"&&o.slidesPerGroup===1&&o.slidesPerGroupAuto&&(P=Math.max(r.slidesPerViewDynamic("current",!0),1));const v=r.activeIndex<o.slidesPerGroupSkip?1:P,W=r.virtual&&o.virtual.enabled;if(o.loop){if(M&&!W&&o.loopPreventsSliding)return!1;if(r.loopFix({direction:"next"}),r._clientLeft=r.wrapperEl.clientLeft,r.activeIndex===r.slides.length-1&&o.cssMode)return requestAnimationFrame(()=>{r.slideTo(r.activeIndex+v,i,t,e)}),!0}return o.rewind&&r.isEnd?r.slideTo(0,i,t,e):r.slideTo(r.activeIndex+v,i,t,e)}function oe(i,t,e){i===void 0&&(i=this.params.speed),t===void 0&&(t=!0);const r=this,{params:d,snapGrid:o,slidesGrid:M,rtlTranslate:P,enabled:v,animating:W}=r;if(!v)return r;const H=r.virtual&&d.virtual.enabled;if(d.loop){if(W&&!H&&d.loopPreventsSliding)return!1;r.loopFix({direction:"prev"}),r._clientLeft=r.wrapperEl.clientLeft}const K=P?r.translate:-r.translate;function Q(ie){return ie<0?-Math.floor(Math.abs(ie)):Math.floor(ie)}const q=Q(K),se=o.map(ie=>Q(ie));let ae=o[se.indexOf(q)-1];if(typeof ae>"u"&&d.cssMode){let ie;o.forEach((me,re)=>{q>=me&&(ie=re)}),typeof ie<"u"&&(ae=o[ie>0?ie-1:ie])}let he=0;if(typeof ae<"u"&&(he=M.indexOf(ae),he<0&&(he=r.activeIndex-1),d.slidesPerView==="auto"&&d.slidesPerGroup===1&&d.slidesPerGroupAuto&&(he=he-r.slidesPerViewDynamic("previous",!0)+1,he=Math.max(he,0))),d.rewind&&r.isBeginning){const ie=r.params.virtual&&r.params.virtual.enabled&&r.virtual?r.virtual.slides.length-1:r.slides.length-1;return r.slideTo(ie,i,t,e)}else if(d.loop&&r.activeIndex===0&&d.cssMode)return requestAnimationFrame(()=>{r.slideTo(he,i,t,e)}),!0;return r.slideTo(he,i,t,e)}function ve(i,t,e){i===void 0&&(i=this.params.speed),t===void 0&&(t=!0);const r=this;return r.slideTo(r.activeIndex,i,t,e)}function _e(i,t,e,r){i===void 0&&(i=this.params.speed),t===void 0&&(t=!0),r===void 0&&(r=.5);const d=this;let o=d.activeIndex;const M=Math.min(d.params.slidesPerGroupSkip,o),P=M+Math.floor((o-M)/d.params.slidesPerGroup),v=d.rtlTranslate?d.translate:-d.translate;if(v>=d.snapGrid[P]){const W=d.snapGrid[P],H=d.snapGrid[P+1];v-W>(H-W)*r&&(o+=d.params.slidesPerGroup)}else{const W=d.snapGrid[P-1],H=d.snapGrid[P];v-W<=(H-W)*r&&(o-=d.params.slidesPerGroup)}return o=Math.max(o,0),o=Math.min(o,d.slidesGrid.length-1),d.slideTo(o,i,t,e)}function Me(){const i=this,{params:t,slidesEl:e}=i,r=t.slidesPerView==="auto"?i.slidesPerViewDynamic():t.slidesPerView;let d=i.clickedIndex,o;const M=i.isElement?"swiper-slide":`.${t.slideClass}`;if(t.loop){if(i.animating)return;o=parseInt(i.clickedSlide.getAttribute("data-swiper-slide-index"),10),t.centeredSlides?d<i.loopedSlides-r/2||d>i.slides.length-i.loopedSlides+r/2?(i.loopFix(),d=i.getSlideIndex((0,D.e)(e,`${M}[data-swiper-slide-index="${o}"]`)[0]),(0,D.n)(()=>{i.slideTo(d)})):i.slideTo(d):d>i.slides.length-r?(i.loopFix(),d=i.getSlideIndex((0,D.e)(e,`${M}[data-swiper-slide-index="${o}"]`)[0]),(0,D.n)(()=>{i.slideTo(d)})):i.slideTo(d)}else i.slideTo(d)}var xe={slideTo:le,slideToLoop:ce,slideNext:Te,slidePrev:oe,slideReset:ve,slideToClosest:_e,slideToClickedSlide:Me};function Re(i){const t=this,{params:e,slidesEl:r}=t;if(!e.loop||t.virtual&&t.params.virtual.enabled)return;const d=()=>{(0,D.e)(r,`.${e.slideClass}, swiper-slide`).forEach((K,Q)=>{K.setAttribute("data-swiper-slide-index",Q)})},o=t.grid&&e.grid&&e.grid.rows>1,M=e.slidesPerGroup*(o?e.grid.rows:1),P=t.slides.length%M!==0,v=o&&t.slides.length%e.grid.rows!==0,W=H=>{for(let K=0;K<H;K+=1){const Q=t.isElement?(0,D.c)("swiper-slide",[e.slideBlankClass]):(0,D.c)("div",[e.slideClass,e.slideBlankClass]);t.slidesEl.append(Q)}};if(P){if(e.loopAddBlankSlides){const H=M-t.slides.length%M;W(H),t.recalcSlides(),t.updateSlides()}else(0,D.r)("Swiper Loop Warning: The number of slides is not even to slidesPerGroup, loop mode may not function properly. You need to add more slides (or make duplicates, or empty slides)");d()}else if(v){if(e.loopAddBlankSlides){const H=e.grid.rows-t.slides.length%e.grid.rows;W(H),t.recalcSlides(),t.updateSlides()}else(0,D.r)("Swiper Loop Warning: The number of slides is not even to grid.rows, loop mode may not function properly. You need to add more slides (or make duplicates, or empty slides)");d()}else d();t.loopFix({slideRealIndex:i,direction:e.centeredSlides?void 0:"next"})}function Ne(i){let{slideRealIndex:t,slideTo:e=!0,direction:r,setTranslate:d,activeSlideIndex:o,byController:M,byMousewheel:P}=i===void 0?{}:i;const v=this;if(!v.params.loop)return;v.emit("beforeLoopFix");const{slides:W,allowSlidePrev:H,allowSlideNext:K,slidesEl:Q,params:q}=v,{centeredSlides:se}=q;if(v.allowSlidePrev=!0,v.allowSlideNext=!0,v.virtual&&q.virtual.enabled){e&&(!q.centeredSlides&&v.snapIndex===0?v.slideTo(v.virtual.slides.length,0,!1,!0):q.centeredSlides&&v.snapIndex<q.slidesPerView?v.slideTo(v.virtual.slides.length+v.snapIndex,0,!1,!0):v.snapIndex===v.snapGrid.length-1&&v.slideTo(v.virtual.slidesBefore,0,!1,!0)),v.allowSlidePrev=H,v.allowSlideNext=K,v.emit("loopFix");return}let ae=q.slidesPerView;ae==="auto"?ae=v.slidesPerViewDynamic():(ae=Math.ceil(parseFloat(q.slidesPerView,10)),se&&ae%2===0&&(ae=ae+1));const he=q.slidesPerGroupAuto?ae:q.slidesPerGroup;let ie=he;ie%he!==0&&(ie+=he-ie%he),ie+=q.loopAdditionalSlides,v.loopedSlides=ie;const me=v.grid&&q.grid&&q.grid.rows>1;W.length<ae+ie?(0,D.r)("Swiper Loop Warning: The number of slides is not enough for loop mode, it will be disabled and not function properly. You need to add more slides (or make duplicates) or lower the values of slidesPerView and slidesPerGroup parameters"):me&&q.grid.fill==="row"&&(0,D.r)("Swiper Loop Warning: Loop mode is not compatible with grid.fill = `row`");const re=[],de=[];let ue=v.activeIndex;typeof o>"u"?o=v.getSlideIndex(W.filter(fe=>fe.classList.contains(q.slideActiveClass))[0]):ue=o;const we=r==="next"||!r,De=r==="prev"||!r;let be=0,ze=0;const ne=me?Math.ceil(W.length/q.grid.rows):W.length,ge=(me?W[o].column:o)+(se&&typeof d>"u"?-ae/2+.5:0);if(ge<ie){be=Math.max(ie-ge,he);for(let fe=0;fe<ie-ge;fe+=1){const Ee=fe-Math.floor(fe/ne)*ne;if(me){const Se=ne-Ee-1;for(let Pe=W.length-1;Pe>=0;Pe-=1)W[Pe].column===Se&&re.push(Pe)}else re.push(ne-Ee-1)}}else if(ge+ae>ne-ie){ze=Math.max(ge-(ne-ie*2),he);for(let fe=0;fe<ze;fe+=1){const Ee=fe-Math.floor(fe/ne)*ne;me?W.forEach((Se,Pe)=>{Se.column===Ee&&de.push(Pe)}):de.push(Ee)}}if(v.__preventObserver__=!0,requestAnimationFrame(()=>{v.__preventObserver__=!1}),De&&re.forEach(fe=>{W[fe].swiperLoopMoveDOM=!0,Q.prepend(W[fe]),W[fe].swiperLoopMoveDOM=!1}),we&&de.forEach(fe=>{W[fe].swiperLoopMoveDOM=!0,Q.append(W[fe]),W[fe].swiperLoopMoveDOM=!1}),v.recalcSlides(),q.slidesPerView==="auto"?v.updateSlides():me&&(re.length>0&&De||de.length>0&&we)&&v.slides.forEach((fe,Ee)=>{v.grid.updateSlide(Ee,fe,v.slides)}),q.watchSlidesProgress&&v.updateSlidesOffset(),e){if(re.length>0&&De){if(typeof t>"u"){const fe=v.slidesGrid[ue],Se=v.slidesGrid[ue+be]-fe;P?v.setTranslate(v.translate-Se):(v.slideTo(ue+be,0,!1,!0),d&&(v.touchEventsData.startTranslate=v.touchEventsData.startTranslate-Se,v.touchEventsData.currentTranslate=v.touchEventsData.currentTranslate-Se))}else if(d){const fe=me?re.length/q.grid.rows:re.length;v.slideTo(v.activeIndex+fe,0,!1,!0),v.touchEventsData.currentTranslate=v.translate}}else if(de.length>0&&we)if(typeof t>"u"){const fe=v.slidesGrid[ue],Se=v.slidesGrid[ue-ze]-fe;P?v.setTranslate(v.translate-Se):(v.slideTo(ue-ze,0,!1,!0),d&&(v.touchEventsData.startTranslate=v.touchEventsData.startTranslate-Se,v.touchEventsData.currentTranslate=v.touchEventsData.currentTranslate-Se))}else{const fe=me?de.length/q.grid.rows:de.length;v.slideTo(v.activeIndex-fe,0,!1,!0)}}if(v.allowSlidePrev=H,v.allowSlideNext=K,v.controller&&v.controller.control&&!M){const fe={slideRealIndex:t,direction:r,setTranslate:d,activeSlideIndex:o,byController:!0};Array.isArray(v.controller.control)?v.controller.control.forEach(Ee=>{!Ee.destroyed&&Ee.params.loop&&Ee.loopFix({...fe,slideTo:Ee.params.slidesPerView===q.slidesPerView?e:!1})}):v.controller.control instanceof v.constructor&&v.controller.control.params.loop&&v.controller.control.loopFix({...fe,slideTo:v.controller.control.params.slidesPerView===q.slidesPerView?e:!1})}v.emit("loopFix")}function Ge(){const i=this,{params:t,slidesEl:e}=i;if(!t.loop||i.virtual&&i.params.virtual.enabled)return;i.recalcSlides();const r=[];i.slides.forEach(d=>{const o=typeof d.swiperSlideIndex>"u"?d.getAttribute("data-swiper-slide-index")*1:d.swiperSlideIndex;r[o]=d}),i.slides.forEach(d=>{d.removeAttribute("data-swiper-slide-index")}),r.forEach(d=>{e.append(d)}),i.recalcSlides(),i.slideTo(i.realIndex,0)}var Fe={loopCreate:Re,loopFix:Ne,loopDestroy:Ge};function Oe(i){const t=this;if(!t.params.simulateTouch||t.params.watchOverflow&&t.isLocked||t.params.cssMode)return;const e=t.params.touchEventsTarget==="container"?t.el:t.wrapperEl;t.isElement&&(t.__preventObserver__=!0),e.style.cursor="move",e.style.cursor=i?"grabbing":"grab",t.isElement&&requestAnimationFrame(()=>{t.__preventObserver__=!1})}function Ae(){const i=this;i.params.watchOverflow&&i.isLocked||i.params.cssMode||(i.isElement&&(i.__preventObserver__=!0),i[i.params.touchEventsTarget==="container"?"el":"wrapperEl"].style.cursor="",i.isElement&&requestAnimationFrame(()=>{i.__preventObserver__=!1}))}var Be={setGrabCursor:Oe,unsetGrabCursor:Ae};function ke(i,t){t===void 0&&(t=this);function e(r){if(!r||r===(0,G.g)()||r===(0,G.a)())return null;r.assignedSlot&&(r=r.assignedSlot);const d=r.closest(i);return!d&&!r.getRootNode?null:d||e(r.getRootNode().host)}return e(t)}function je(i,t,e){const r=(0,G.a)(),{params:d}=i,o=d.edgeSwipeDetection,M=d.edgeSwipeThreshold;return o&&(e<=M||e>=r.innerWidth-M)?o==="prevent"?(t.preventDefault(),!0):!1:!0}function $e(i){const t=this,e=(0,G.g)();let r=i;r.originalEvent&&(r=r.originalEvent);const d=t.touchEventsData;if(r.type==="pointerdown"){if(d.pointerId!==null&&d.pointerId!==r.pointerId)return;d.pointerId=r.pointerId}else r.type==="touchstart"&&r.targetTouches.length===1&&(d.touchId=r.targetTouches[0].identifier);if(r.type==="touchstart"){je(t,r,r.targetTouches[0].pageX);return}const{params:o,touches:M,enabled:P}=t;if(!P||!o.simulateTouch&&r.pointerType==="mouse"||t.animating&&o.preventInteractionOnTransition)return;!t.animating&&o.cssMode&&o.loop&&t.loopFix();let v=r.target;if(o.touchEventsTarget==="wrapper"&&!t.wrapperEl.contains(v)||"which"in r&&r.which===3||"button"in r&&r.button>0||d.isTouched&&d.isMoved)return;const W=!!o.noSwipingClass&&o.noSwipingClass!=="",H=r.composedPath?r.composedPath():r.path;W&&r.target&&r.target.shadowRoot&&H&&(v=H[0]);const K=o.noSwipingSelector?o.noSwipingSelector:`.${o.noSwipingClass}`,Q=!!(r.target&&r.target.shadowRoot);if(o.noSwiping&&(Q?ke(K,v):v.closest(K))){t.allowClick=!0;return}if(o.swipeHandler&&!v.closest(o.swipeHandler))return;M.currentX=r.pageX,M.currentY=r.pageY;const q=M.currentX,se=M.currentY;if(!je(t,r,q))return;Object.assign(d,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),M.startX=q,M.startY=se,d.touchStartTime=(0,D.d)(),t.allowClick=!0,t.updateSize(),t.swipeDirection=void 0,o.threshold>0&&(d.allowThresholdMove=!1);let ae=!0;v.matches(d.focusableElements)&&(ae=!1,v.nodeName==="SELECT"&&(d.isTouched=!1)),e.activeElement&&e.activeElement.matches(d.focusableElements)&&e.activeElement!==v&&e.activeElement.blur();const he=ae&&t.allowTouchMove&&o.touchStartPreventDefault;(o.touchStartForcePreventDefault||he)&&!v.isContentEditable&&r.preventDefault(),o.freeMode&&o.freeMode.enabled&&t.freeMode&&t.animating&&!o.cssMode&&t.freeMode.onTouchStart(),t.emit("touchStart",r)}function Ie(i){const t=(0,G.g)(),e=this,r=e.touchEventsData,{params:d,touches:o,rtlTranslate:M,enabled:P}=e;if(!P||!d.simulateTouch&&i.pointerType==="mouse")return;let v=i;if(v.originalEvent&&(v=v.originalEvent),v.type==="pointermove"&&(r.touchId!==null||v.pointerId!==r.pointerId))return;let W;if(v.type==="touchmove"){if(W=[...v.changedTouches].filter(we=>we.identifier===r.touchId)[0],!W||W.identifier!==r.touchId)return}else W=v;if(!r.isTouched){r.startMoving&&r.isScrolling&&e.emit("touchMoveOpposite",v);return}const H=W.pageX,K=W.pageY;if(v.preventedByNestedSwiper){o.startX=H,o.startY=K;return}if(!e.allowTouchMove){v.target.matches(r.focusableElements)||(e.allowClick=!1),r.isTouched&&(Object.assign(o,{startX:H,startY:K,currentX:H,currentY:K}),r.touchStartTime=(0,D.d)());return}if(d.touchReleaseOnEdges&&!d.loop){if(e.isVertical()){if(K<o.startY&&e.translate<=e.maxTranslate()||K>o.startY&&e.translate>=e.minTranslate()){r.isTouched=!1,r.isMoved=!1;return}}else if(H<o.startX&&e.translate<=e.maxTranslate()||H>o.startX&&e.translate>=e.minTranslate())return}if(t.activeElement&&v.target===t.activeElement&&v.target.matches(r.focusableElements)){r.isMoved=!0,e.allowClick=!1;return}r.allowTouchCallbacks&&e.emit("touchMove",v),o.previousX=o.currentX,o.previousY=o.currentY,o.currentX=H,o.currentY=K;const Q=o.currentX-o.startX,q=o.currentY-o.startY;if(e.params.threshold&&Math.sqrt(Q**2+q**2)<e.params.threshold)return;if(typeof r.isScrolling>"u"){let we;e.isHorizontal()&&o.currentY===o.startY||e.isVertical()&&o.currentX===o.startX?r.isScrolling=!1:Q*Q+q*q>=25&&(we=Math.atan2(Math.abs(q),Math.abs(Q))*180/Math.PI,r.isScrolling=e.isHorizontal()?we>d.touchAngle:90-we>d.touchAngle)}if(r.isScrolling&&e.emit("touchMoveOpposite",v),typeof r.startMoving>"u"&&(o.currentX!==o.startX||o.currentY!==o.startY)&&(r.startMoving=!0),r.isScrolling){r.isTouched=!1;return}if(!r.startMoving)return;e.allowClick=!1,!d.cssMode&&v.cancelable&&v.preventDefault(),d.touchMoveStopPropagation&&!d.nested&&v.stopPropagation();let se=e.isHorizontal()?Q:q,ae=e.isHorizontal()?o.currentX-o.previousX:o.currentY-o.previousY;d.oneWayMovement&&(se=Math.abs(se)*(M?1:-1),ae=Math.abs(ae)*(M?1:-1)),o.diff=se,se*=d.touchRatio,M&&(se=-se,ae=-ae);const he=e.touchesDirection;e.swipeDirection=se>0?"prev":"next",e.touchesDirection=ae>0?"prev":"next";const ie=e.params.loop&&!d.cssMode,me=e.touchesDirection==="next"&&e.allowSlideNext||e.touchesDirection==="prev"&&e.allowSlidePrev;if(!r.isMoved){if(ie&&me&&e.loopFix({direction:e.swipeDirection}),r.startTranslate=e.getTranslate(),e.setTransition(0),e.animating){const we=new window.CustomEvent("transitionend",{bubbles:!0,cancelable:!0});e.wrapperEl.dispatchEvent(we)}r.allowMomentumBounce=!1,d.grabCursor&&(e.allowSlideNext===!0||e.allowSlidePrev===!0)&&e.setGrabCursor(!0),e.emit("sliderFirstMove",v)}let re;if(new Date().getTime(),r.isMoved&&r.allowThresholdMove&&he!==e.touchesDirection&&ie&&me&&Math.abs(se)>=1){Object.assign(o,{startX:H,startY:K,currentX:H,currentY:K,startTranslate:r.currentTranslate}),r.loopSwapReset=!0,r.startTranslate=r.currentTranslate;return}e.emit("sliderMove",v),r.isMoved=!0,r.currentTranslate=se+r.startTranslate;let de=!0,ue=d.resistanceRatio;if(d.touchReleaseOnEdges&&(ue=0),se>0?(ie&&me&&!re&&r.allowThresholdMove&&r.currentTranslate>(d.centeredSlides?e.minTranslate()-e.slidesSizesGrid[e.activeIndex+1]:e.minTranslate())&&e.loopFix({direction:"prev",setTranslate:!0,activeSlideIndex:0}),r.currentTranslate>e.minTranslate()&&(de=!1,d.resistance&&(r.currentTranslate=e.minTranslate()-1+(-e.minTranslate()+r.startTranslate+se)**ue))):se<0&&(ie&&me&&!re&&r.allowThresholdMove&&r.currentTranslate<(d.centeredSlides?e.maxTranslate()+e.slidesSizesGrid[e.slidesSizesGrid.length-1]:e.maxTranslate())&&e.loopFix({direction:"next",setTranslate:!0,activeSlideIndex:e.slides.length-(d.slidesPerView==="auto"?e.slidesPerViewDynamic():Math.ceil(parseFloat(d.slidesPerView,10)))}),r.currentTranslate<e.maxTranslate()&&(de=!1,d.resistance&&(r.currentTranslate=e.maxTranslate()+1-(e.maxTranslate()-r.startTranslate-se)**ue))),de&&(v.preventedByNestedSwiper=!0),!e.allowSlideNext&&e.swipeDirection==="next"&&r.currentTranslate<r.startTranslate&&(r.currentTranslate=r.startTranslate),!e.allowSlidePrev&&e.swipeDirection==="prev"&&r.currentTranslate>r.startTranslate&&(r.currentTranslate=r.startTranslate),!e.allowSlidePrev&&!e.allowSlideNext&&(r.currentTranslate=r.startTranslate),d.threshold>0)if(Math.abs(se)>d.threshold||r.allowThresholdMove){if(!r.allowThresholdMove){r.allowThresholdMove=!0,o.startX=o.currentX,o.startY=o.currentY,r.currentTranslate=r.startTranslate,o.diff=e.isHorizontal()?o.currentX-o.startX:o.currentY-o.startY;return}}else{r.currentTranslate=r.startTranslate;return}!d.followFinger||d.cssMode||((d.freeMode&&d.freeMode.enabled&&e.freeMode||d.watchSlidesProgress)&&(e.updateActiveIndex(),e.updateSlidesClasses()),d.freeMode&&d.freeMode.enabled&&e.freeMode&&e.freeMode.onTouchMove(),e.updateProgress(r.currentTranslate),e.setTranslate(r.currentTranslate))}function Le(i){const t=this,e=t.touchEventsData;let r=i;r.originalEvent&&(r=r.originalEvent);let d;if(r.type==="touchend"||r.type==="touchcancel"){if(d=[...r.changedTouches].filter(ue=>ue.identifier===e.touchId)[0],!d||d.identifier!==e.touchId)return}else{if(e.touchId!==null||r.pointerId!==e.pointerId)return;d=r}if(["pointercancel","pointerout","pointerleave","contextmenu"].includes(r.type)&&!(["pointercancel","contextmenu"].includes(r.type)&&(t.browser.isSafari||t.browser.isWebView)))return;e.pointerId=null,e.touchId=null;const{params:M,touches:P,rtlTranslate:v,slidesGrid:W,enabled:H}=t;if(!H||!M.simulateTouch&&r.pointerType==="mouse")return;if(e.allowTouchCallbacks&&t.emit("touchEnd",r),e.allowTouchCallbacks=!1,!e.isTouched){e.isMoved&&M.grabCursor&&t.setGrabCursor(!1),e.isMoved=!1,e.startMoving=!1;return}M.grabCursor&&e.isMoved&&e.isTouched&&(t.allowSlideNext===!0||t.allowSlidePrev===!0)&&t.setGrabCursor(!1);const K=(0,D.d)(),Q=K-e.touchStartTime;if(t.allowClick){const ue=r.path||r.composedPath&&r.composedPath();t.updateClickedSlide(ue&&ue[0]||r.target,ue),t.emit("tap click",r),Q<300&&K-e.lastClickTime<300&&t.emit("doubleTap doubleClick",r)}if(e.lastClickTime=(0,D.d)(),(0,D.n)(()=>{t.destroyed||(t.allowClick=!0)}),!e.isTouched||!e.isMoved||!t.swipeDirection||P.diff===0&&!e.loopSwapReset||e.currentTranslate===e.startTranslate&&!e.loopSwapReset){e.isTouched=!1,e.isMoved=!1,e.startMoving=!1;return}e.isTouched=!1,e.isMoved=!1,e.startMoving=!1;let q;if(M.followFinger?q=v?t.translate:-t.translate:q=-e.currentTranslate,M.cssMode)return;if(M.freeMode&&M.freeMode.enabled){t.freeMode.onTouchEnd({currentPos:q});return}const se=q>=-t.maxTranslate()&&!t.params.loop;let ae=0,he=t.slidesSizesGrid[0];for(let ue=0;ue<W.length;ue+=ue<M.slidesPerGroupSkip?1:M.slidesPerGroup){const we=ue<M.slidesPerGroupSkip-1?1:M.slidesPerGroup;typeof W[ue+we]<"u"?(se||q>=W[ue]&&q<W[ue+we])&&(ae=ue,he=W[ue+we]-W[ue]):(se||q>=W[ue])&&(ae=ue,he=W[W.length-1]-W[W.length-2])}let ie=null,me=null;M.rewind&&(t.isBeginning?me=M.virtual&&M.virtual.enabled&&t.virtual?t.virtual.slides.length-1:t.slides.length-1:t.isEnd&&(ie=0));const re=(q-W[ae])/he,de=ae<M.slidesPerGroupSkip-1?1:M.slidesPerGroup;if(Q>M.longSwipesMs){if(!M.longSwipes){t.slideTo(t.activeIndex);return}t.swipeDirection==="next"&&(re>=M.longSwipesRatio?t.slideTo(M.rewind&&t.isEnd?ie:ae+de):t.slideTo(ae)),t.swipeDirection==="prev"&&(re>1-M.longSwipesRatio?t.slideTo(ae+de):me!==null&&re<0&&Math.abs(re)>M.longSwipesRatio?t.slideTo(me):t.slideTo(ae))}else{if(!M.shortSwipes){t.slideTo(t.activeIndex);return}t.navigation&&(r.target===t.navigation.nextEl||r.target===t.navigation.prevEl)?r.target===t.navigation.nextEl?t.slideTo(ae+de):t.slideTo(ae):(t.swipeDirection==="next"&&t.slideTo(ie!==null?ie:ae+de),t.swipeDirection==="prev"&&t.slideTo(me!==null?me:ae))}}function Ke(){const i=this,{params:t,el:e}=i;if(e&&e.offsetWidth===0)return;t.breakpoints&&i.setBreakpoint();const{allowSlideNext:r,allowSlidePrev:d,snapGrid:o}=i,M=i.virtual&&i.params.virtual.enabled;i.allowSlideNext=!0,i.allowSlidePrev=!0,i.updateSize(),i.updateSlides(),i.updateSlidesClasses();const P=M&&t.loop;(t.slidesPerView==="auto"||t.slidesPerView>1)&&i.isEnd&&!i.isBeginning&&!i.params.centeredSlides&&!P?i.slideTo(i.slides.length-1,0,!1,!0):i.params.loop&&!M?i.slideToLoop(i.realIndex,0,!1,!0):i.slideTo(i.activeIndex,0,!1,!0),i.autoplay&&i.autoplay.running&&i.autoplay.paused&&(clearTimeout(i.autoplay.resizeTimeout),i.autoplay.resizeTimeout=setTimeout(()=>{i.autoplay&&i.autoplay.running&&i.autoplay.paused&&i.autoplay.resume()},500)),i.allowSlidePrev=d,i.allowSlideNext=r,i.params.watchOverflow&&o!==i.snapGrid&&i.checkOverflow()}function tt(i){const t=this;t.enabled&&(t.allowClick||(t.params.preventClicks&&i.preventDefault(),t.params.preventClicksPropagation&&t.animating&&(i.stopPropagation(),i.stopImmediatePropagation())))}function st(){const i=this,{wrapperEl:t,rtlTranslate:e,enabled:r}=i;if(!r)return;i.previousTranslate=i.translate,i.isHorizontal()?i.translate=-t.scrollLeft:i.translate=-t.scrollTop,i.translate===0&&(i.translate=0),i.updateActiveIndex(),i.updateSlidesClasses();let d;const o=i.maxTranslate()-i.minTranslate();o===0?d=0:d=(i.translate-i.minTranslate())/o,d!==i.progress&&i.updateProgress(e?-i.translate:i.translate),i.emit("setTranslate",i.translate,!1)}function it(i){const t=this;g(t,i.target),!(t.params.cssMode||t.params.slidesPerView!=="auto"&&!t.params.autoHeight)&&t.update()}function at(){const i=this;i.documentTouchHandlerProceeded||(i.documentTouchHandlerProceeded=!0,i.params.touchReleaseOnEdges&&(i.el.style.touchAction="auto"))}const Ze=(i,t)=>{const e=(0,G.g)(),{params:r,el:d,wrapperEl:o,device:M}=i,P=!!r.nested,v=t==="on"?"addEventListener":"removeEventListener",W=t;e[v]("touchstart",i.onDocumentTouchStart,{passive:!1,capture:P}),d[v]("touchstart",i.onTouchStart,{passive:!1}),d[v]("pointerdown",i.onTouchStart,{passive:!1}),e[v]("touchmove",i.onTouchMove,{passive:!1,capture:P}),e[v]("pointermove",i.onTouchMove,{passive:!1,capture:P}),e[v]("touchend",i.onTouchEnd,{passive:!0}),e[v]("pointerup",i.onTouchEnd,{passive:!0}),e[v]("pointercancel",i.onTouchEnd,{passive:!0}),e[v]("touchcancel",i.onTouchEnd,{passive:!0}),e[v]("pointerout",i.onTouchEnd,{passive:!0}),e[v]("pointerleave",i.onTouchEnd,{passive:!0}),e[v]("contextmenu",i.onTouchEnd,{passive:!0}),(r.preventClicks||r.preventClicksPropagation)&&d[v]("click",i.onClick,!0),r.cssMode&&o[v]("scroll",i.onScroll),r.updateOnWindowResize?i[W](M.ios||M.android?"resize orientationchange observerUpdate":"resize observerUpdate",Ke,!0):i[W]("observerUpdate",Ke,!0),d[v]("load",i.onLoad,{capture:!0})};function rt(){const i=this,{params:t}=i;i.onTouchStart=$e.bind(i),i.onTouchMove=Ie.bind(i),i.onTouchEnd=Le.bind(i),i.onDocumentTouchStart=at.bind(i),t.cssMode&&(i.onScroll=st.bind(i)),i.onClick=tt.bind(i),i.onLoad=it.bind(i),Ze(i,"on")}function nt(){Ze(this,"off")}var lt={attachEvents:rt,detachEvents:nt};const qe=(i,t)=>i.grid&&t.grid&&t.grid.rows>1;function ot(){const i=this,{realIndex:t,initialized:e,params:r,el:d}=i,o=r.breakpoints;if(!o||o&&Object.keys(o).length===0)return;const M=i.getBreakpoint(o,i.params.breakpointsBase,i.el);if(!M||i.currentBreakpoint===M)return;const v=(M in o?o[M]:void 0)||i.originalParams,W=qe(i,r),H=qe(i,v),K=r.enabled;W&&!H?(d.classList.remove(`${r.containerModifierClass}grid`,`${r.containerModifierClass}grid-column`),i.emitContainerClasses()):!W&&H&&(d.classList.add(`${r.containerModifierClass}grid`),(v.grid.fill&&v.grid.fill==="column"||!v.grid.fill&&r.grid.fill==="column")&&d.classList.add(`${r.containerModifierClass}grid-column`),i.emitContainerClasses()),["navigation","pagination","scrollbar"].forEach(ie=>{if(typeof v[ie]>"u")return;const me=r[ie]&&r[ie].enabled,re=v[ie]&&v[ie].enabled;me&&!re&&i[ie].disable(),!me&&re&&i[ie].enable()});const Q=v.direction&&v.direction!==r.direction,q=r.loop&&(v.slidesPerView!==r.slidesPerView||Q),se=r.loop;Q&&e&&i.changeDirection(),(0,D.t)(i.params,v);const ae=i.params.enabled,he=i.params.loop;Object.assign(i,{allowTouchMove:i.params.allowTouchMove,allowSlideNext:i.params.allowSlideNext,allowSlidePrev:i.params.allowSlidePrev}),K&&!ae?i.disable():!K&&ae&&i.enable(),i.currentBreakpoint=M,i.emit("_beforeBreakpoint",v),e&&(q?(i.loopDestroy(),i.loopCreate(t),i.updateSlides()):!se&&he?(i.loopCreate(t),i.updateSlides()):se&&!he&&i.loopDestroy()),i.emit("breakpoint",v)}function dt(i,t,e){if(t===void 0&&(t="window"),!i||t==="container"&&!e)return;let r=!1;const d=(0,G.a)(),o=t==="window"?d.innerHeight:e.clientHeight,M=Object.keys(i).map(P=>{if(typeof P=="string"&&P.indexOf("@")===0){const v=parseFloat(P.substr(1));return{value:o*v,point:P}}return{value:P,point:P}});M.sort((P,v)=>parseInt(P.value,10)-parseInt(v.value,10));for(let P=0;P<M.length;P+=1){const{point:v,value:W}=M[P];t==="window"?d.matchMedia(`(min-width: ${W}px)`).matches&&(r=v):W<=e.clientWidth&&(r=v)}return r||"max"}var ut={setBreakpoint:ot,getBreakpoint:dt};function ct(i,t){const e=[];return i.forEach(r=>{typeof r=="object"?Object.keys(r).forEach(d=>{r[d]&&e.push(t+d)}):typeof r=="string"&&e.push(t+r)}),e}function ft(){const i=this,{classNames:t,params:e,rtl:r,el:d,device:o}=i,M=ct(["initialized",e.direction,{"free-mode":i.params.freeMode&&e.freeMode.enabled},{autoheight:e.autoHeight},{rtl:r},{grid:e.grid&&e.grid.rows>1},{"grid-column":e.grid&&e.grid.rows>1&&e.grid.fill==="column"},{android:o.android},{ios:o.ios},{"css-mode":e.cssMode},{centered:e.cssMode&&e.centeredSlides},{"watch-progress":e.watchSlidesProgress}],e.containerModifierClass);t.push(...M),d.classList.add(...t),i.emitContainerClasses()}function pt(){const i=this,{el:t,classNames:e}=i;t.classList.remove(...e),i.emitContainerClasses()}var mt={addClasses:ft,removeClasses:pt};function ht(){const i=this,{isLocked:t,params:e}=i,{slidesOffsetBefore:r}=e;if(r){const d=i.slides.length-1,o=i.slidesGrid[d]+i.slidesSizesGrid[d]+r*2;i.isLocked=i.size>o}else i.isLocked=i.snapGrid.length===1;e.allowSlideNext===!0&&(i.allowSlideNext=!i.isLocked),e.allowSlidePrev===!0&&(i.allowSlidePrev=!i.isLocked),t&&t!==i.isLocked&&(i.isEnd=!1),t!==i.isLocked&&i.emit(i.isLocked?"lock":"unlock")}var gt={checkOverflow:ht},We={init:!0,direction:"horizontal",oneWayMovement:!1,touchEventsTarget:"wrapper",initialSlide:0,speed:300,cssMode:!1,updateOnWindowResize:!0,resizeObserver:!0,nested:!1,createElements:!1,eventsPrefix:"swiper",enabled:!0,focusableElements:"input, select, option, textarea, button, video, label",width:null,height:null,preventInteractionOnTransition:!1,userAgent:null,url:null,edgeSwipeDetection:!1,edgeSwipeThreshold:20,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,breakpointsBase:"window",spaceBetween:0,slidesPerView:1,slidesPerGroup:1,slidesPerGroupSkip:0,slidesPerGroupAuto:!1,centeredSlides:!1,centeredSlidesBounds:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,centerInsufficientSlides:!1,watchOverflow:!0,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:5,touchMoveStopPropagation:!1,touchStartPreventDefault:!0,touchStartForcePreventDefault:!1,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,loop:!1,loopAddBlankSlides:!0,loopAdditionalSlides:0,loopPreventsSliding:!0,rewind:!1,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",noSwipingSelector:null,passiveListeners:!0,maxBackfaceHiddenSlides:10,containerModifierClass:"swiper-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-blank",slideActiveClass:"swiper-slide-active",slideVisibleClass:"swiper-slide-visible",slideFullyVisibleClass:"swiper-slide-fully-visible",slideNextClass:"swiper-slide-next",slidePrevClass:"swiper-slide-prev",wrapperClass:"swiper-wrapper",lazyPreloaderClass:"swiper-lazy-preloader",lazyPreloadPrevNext:0,runCallbacksOnInit:!0,_emitClasses:!1};function vt(i,t){return function(r){r===void 0&&(r={});const d=Object.keys(r)[0],o=r[d];if(typeof o!="object"||o===null){(0,D.t)(t,r);return}if(i[d]===!0&&(i[d]={enabled:!0}),d==="navigation"&&i[d]&&i[d].enabled&&!i[d].prevEl&&!i[d].nextEl&&(i[d].auto=!0),["pagination","scrollbar"].indexOf(d)>=0&&i[d]&&i[d].enabled&&!i[d].el&&(i[d].auto=!0),!(d in i&&"enabled"in o)){(0,D.t)(t,r);return}typeof i[d]=="object"&&!("enabled"in i[d])&&(i[d].enabled=!0),i[d]||(i[d]={enabled:!1}),(0,D.t)(t,r)}}const He={eventsEmitter:T,update:L,translate:C,transition:Y,slide:xe,loop:Fe,grabCursor:Be,events:lt,breakpoints:ut,checkOverflow:gt,classes:mt},Ue={};class Ce{constructor(){let t,e;for(var r=arguments.length,d=new Array(r),o=0;o<r;o++)d[o]=arguments[o];d.length===1&&d[0].constructor&&Object.prototype.toString.call(d[0]).slice(8,-1)==="Object"?e=d[0]:[t,e]=d,e||(e={}),e=(0,D.t)({},e),t&&!e.el&&(e.el=t);const M=(0,G.g)();if(e.el&&typeof e.el=="string"&&M.querySelectorAll(e.el).length>1){const H=[];return M.querySelectorAll(e.el).forEach(K=>{const Q=(0,D.t)({},e,{el:K});H.push(new Ce(Q))}),H}const P=this;P.__swiper__=!0,P.support=s(),P.device=m({userAgent:e.userAgent}),P.browser=R(),P.eventsListeners={},P.eventsAnyListeners=[],P.modules=[...P.__modules__],e.modules&&Array.isArray(e.modules)&&P.modules.push(...e.modules);const v={};P.modules.forEach(H=>{H({params:e,swiper:P,extendParams:vt(e,v),on:P.on.bind(P),once:P.once.bind(P),off:P.off.bind(P),emit:P.emit.bind(P)})});const W=(0,D.t)({},We,v);return P.params=(0,D.t)({},W,Ue,e),P.originalParams=(0,D.t)({},P.params),P.passedParams=(0,D.t)({},e),P.params&&P.params.on&&Object.keys(P.params.on).forEach(H=>{P.on(H,P.params.on[H])}),P.params&&P.params.onAny&&P.onAny(P.params.onAny),Object.assign(P,{enabled:P.params.enabled,el:t,classNames:[],slides:[],slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal(){return P.params.direction==="horizontal"},isVertical(){return P.params.direction==="vertical"},activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,previousTranslate:0,progress:0,velocity:0,animating:!1,cssOverflowAdjustment(){return Math.trunc(this.translate/8388608)*8388608},allowSlideNext:P.params.allowSlideNext,allowSlidePrev:P.params.allowSlidePrev,touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,focusableElements:P.params.focusableElements,lastClickTime:0,clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,startMoving:void 0,pointerId:null,touchId:null},allowClick:!0,allowTouchMove:P.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),P.emit("_swiper"),P.params.init&&P.init(),P}getDirectionLabel(t){return this.isHorizontal()?t:{width:"height","margin-top":"margin-left","margin-bottom ":"margin-right","margin-left":"margin-top","margin-right":"margin-bottom","padding-left":"padding-top","padding-right":"padding-bottom",marginRight:"marginBottom"}[t]}getSlideIndex(t){const{slidesEl:e,params:r}=this,d=(0,D.e)(e,`.${r.slideClass}, swiper-slide`),o=(0,D.g)(d[0]);return(0,D.g)(t)-o}getSlideIndexByData(t){return this.getSlideIndex(this.slides.filter(e=>e.getAttribute("data-swiper-slide-index")*1===t)[0])}recalcSlides(){const t=this,{slidesEl:e,params:r}=t;t.slides=(0,D.e)(e,`.${r.slideClass}, swiper-slide`)}enable(){const t=this;t.enabled||(t.enabled=!0,t.params.grabCursor&&t.setGrabCursor(),t.emit("enable"))}disable(){const t=this;t.enabled&&(t.enabled=!1,t.params.grabCursor&&t.unsetGrabCursor(),t.emit("disable"))}setProgress(t,e){const r=this;t=Math.min(Math.max(t,0),1);const d=r.minTranslate(),M=(r.maxTranslate()-d)*t+d;r.translateTo(M,typeof e>"u"?0:e),r.updateActiveIndex(),r.updateSlidesClasses()}emitContainerClasses(){const t=this;if(!t.params._emitClasses||!t.el)return;const e=t.el.className.split(" ").filter(r=>r.indexOf("swiper")===0||r.indexOf(t.params.containerModifierClass)===0);t.emit("_containerClasses",e.join(" "))}getSlideClasses(t){const e=this;return e.destroyed?"":t.className.split(" ").filter(r=>r.indexOf("swiper-slide")===0||r.indexOf(e.params.slideClass)===0).join(" ")}emitSlidesClasses(){const t=this;if(!t.params._emitClasses||!t.el)return;const e=[];t.slides.forEach(r=>{const d=t.getSlideClasses(r);e.push({slideEl:r,classNames:d}),t.emit("_slideClass",r,d)}),t.emit("_slideClasses",e)}slidesPerViewDynamic(t,e){t===void 0&&(t="current"),e===void 0&&(e=!1);const r=this,{params:d,slides:o,slidesGrid:M,slidesSizesGrid:P,size:v,activeIndex:W}=r;let H=1;if(typeof d.slidesPerView=="number")return d.slidesPerView;if(d.centeredSlides){let K=o[W]?o[W].swiperSlideSize:0,Q;for(let q=W+1;q<o.length;q+=1)o[q]&&!Q&&(K+=o[q].swiperSlideSize,H+=1,K>v&&(Q=!0));for(let q=W-1;q>=0;q-=1)o[q]&&!Q&&(K+=o[q].swiperSlideSize,H+=1,K>v&&(Q=!0))}else if(t==="current")for(let K=W+1;K<o.length;K+=1)(e?M[K]+P[K]-M[W]<v:M[K]-M[W]<v)&&(H+=1);else for(let K=W-1;K>=0;K-=1)M[W]-M[K]<v&&(H+=1);return H}update(){const t=this;if(!t||t.destroyed)return;const{snapGrid:e,params:r}=t;r.breakpoints&&t.setBreakpoint(),[...t.el.querySelectorAll('[loading="lazy"]')].forEach(M=>{M.complete&&g(t,M)}),t.updateSize(),t.updateSlides(),t.updateProgress(),t.updateSlidesClasses();function d(){const M=t.rtlTranslate?t.translate*-1:t.translate,P=Math.min(Math.max(M,t.maxTranslate()),t.minTranslate());t.setTranslate(P),t.updateActiveIndex(),t.updateSlidesClasses()}let o;if(r.freeMode&&r.freeMode.enabled&&!r.cssMode)d(),r.autoHeight&&t.updateAutoHeight();else{if((r.slidesPerView==="auto"||r.slidesPerView>1)&&t.isEnd&&!r.centeredSlides){const M=t.virtual&&r.virtual.enabled?t.virtual.slides:t.slides;o=t.slideTo(M.length-1,0,!1,!0)}else o=t.slideTo(t.activeIndex,0,!1,!0);o||d()}r.watchOverflow&&e!==t.snapGrid&&t.checkOverflow(),t.emit("update")}changeDirection(t,e){e===void 0&&(e=!0);const r=this,d=r.params.direction;return t||(t=d==="horizontal"?"vertical":"horizontal"),t===d||t!=="horizontal"&&t!=="vertical"||(r.el.classList.remove(`${r.params.containerModifierClass}${d}`),r.el.classList.add(`${r.params.containerModifierClass}${t}`),r.emitContainerClasses(),r.params.direction=t,r.slides.forEach(o=>{t==="vertical"?o.style.width="":o.style.height=""}),r.emit("changeDirection"),e&&r.update()),r}changeLanguageDirection(t){const e=this;e.rtl&&t==="rtl"||!e.rtl&&t==="ltr"||(e.rtl=t==="rtl",e.rtlTranslate=e.params.direction==="horizontal"&&e.rtl,e.rtl?(e.el.classList.add(`${e.params.containerModifierClass}rtl`),e.el.dir="rtl"):(e.el.classList.remove(`${e.params.containerModifierClass}rtl`),e.el.dir="ltr"),e.update())}mount(t){const e=this;if(e.mounted)return!0;let r=t||e.params.el;if(typeof r=="string"&&(r=document.querySelector(r)),!r)return!1;r.swiper=e,r.parentNode&&r.parentNode.host&&r.parentNode.host.nodeName==="SWIPER-CONTAINER"&&(e.isElement=!0);const d=()=>`.${(e.params.wrapperClass||"").trim().split(" ").join(".")}`;let M=(()=>r&&r.shadowRoot&&r.shadowRoot.querySelector?r.shadowRoot.querySelector(d()):(0,D.e)(r,d())[0])();return!M&&e.params.createElements&&(M=(0,D.c)("div",e.params.wrapperClass),r.append(M),(0,D.e)(r,`.${e.params.slideClass}`).forEach(P=>{M.append(P)})),Object.assign(e,{el:r,wrapperEl:M,slidesEl:e.isElement&&!r.parentNode.host.slideSlots?r.parentNode.host:M,hostEl:e.isElement?r.parentNode.host:r,mounted:!0,rtl:r.dir.toLowerCase()==="rtl"||(0,D.m)(r,"direction")==="rtl",rtlTranslate:e.params.direction==="horizontal"&&(r.dir.toLowerCase()==="rtl"||(0,D.m)(r,"direction")==="rtl"),wrongRTL:(0,D.m)(M,"display")==="-webkit-box"}),!0}init(t){const e=this;if(e.initialized||e.mount(t)===!1)return e;e.emit("beforeInit"),e.params.breakpoints&&e.setBreakpoint(),e.addClasses(),e.updateSize(),e.updateSlides(),e.params.watchOverflow&&e.checkOverflow(),e.params.grabCursor&&e.enabled&&e.setGrabCursor(),e.params.loop&&e.virtual&&e.params.virtual.enabled?e.slideTo(e.params.initialSlide+e.virtual.slidesBefore,0,e.params.runCallbacksOnInit,!1,!0):e.slideTo(e.params.initialSlide,0,e.params.runCallbacksOnInit,!1,!0),e.params.loop&&e.loopCreate(),e.attachEvents();const d=[...e.el.querySelectorAll('[loading="lazy"]')];return e.isElement&&d.push(...e.hostEl.querySelectorAll('[loading="lazy"]')),d.forEach(o=>{o.complete?g(e,o):o.addEventListener("load",M=>{g(e,M.target)})}),l(e),e.initialized=!0,l(e),e.emit("init"),e.emit("afterInit"),e}destroy(t,e){t===void 0&&(t=!0),e===void 0&&(e=!0);const r=this,{params:d,el:o,wrapperEl:M,slides:P}=r;return typeof r.params>"u"||r.destroyed||(r.emit("beforeDestroy"),r.initialized=!1,r.detachEvents(),d.loop&&r.loopDestroy(),e&&(r.removeClasses(),o.removeAttribute("style"),M.removeAttribute("style"),P&&P.length&&P.forEach(v=>{v.classList.remove(d.slideVisibleClass,d.slideFullyVisibleClass,d.slideActiveClass,d.slideNextClass,d.slidePrevClass),v.removeAttribute("style"),v.removeAttribute("data-swiper-slide-index")})),r.emit("destroy"),Object.keys(r.eventsListeners).forEach(v=>{r.off(v)}),t!==!1&&(r.el.swiper=null,(0,D.u)(r)),r.destroyed=!0),null}static extendDefaults(t){(0,D.t)(Ue,t)}static get extendedDefaults(){return Ue}static get defaults(){return We}static installModule(t){Ce.prototype.__modules__||(Ce.prototype.__modules__=[]);const e=Ce.prototype.__modules__;typeof t=="function"&&e.indexOf(t)<0&&e.push(t)}static use(t){return Array.isArray(t)?(t.forEach(e=>Ce.installModule(e)),Ce):(Ce.installModule(t),Ce)}}Object.keys(He).forEach(i=>{Object.keys(He[i]).forEach(t=>{Ce.prototype[t]=He[i][t]})}),Ce.use([O,y])},"./node_modules/swiper/shared/utils.mjs":(te,U,S)=>{S.r(U),S.d(U,{a:()=>g,b:()=>w,c:()=>c,d:()=>s,e:()=>T,f:()=>l,g:()=>x,h:()=>D,i:()=>p,j:()=>a,k:()=>m,l:()=>y,m:()=>A,n:()=>n,o:()=>I,p:()=>b,q:()=>O,r:()=>f,s:()=>R,t:()=>k,u:()=>$});var G=S("./node_modules/swiper/shared/ssr-window.esm.mjs");function D(u){return u===void 0&&(u=""),u.trim().split(" ").filter(h=>!!h.trim())}function $(u){const h=u;Object.keys(h).forEach(_=>{try{h[_]=null}catch{}try{delete h[_]}catch{}})}function n(u,h){return h===void 0&&(h=0),setTimeout(u,h)}function s(){return Date.now()}function E(u){const h=(0,G.a)();let _;return h.getComputedStyle&&(_=h.getComputedStyle(u,null)),!_&&u.currentStyle&&(_=u.currentStyle),_||(_=u.style),_}function p(u,h){h===void 0&&(h="x");const _=(0,G.a)();let L,N,F;const Z=E(u);return _.WebKitCSSMatrix?(N=Z.transform||Z.webkitTransform,N.split(",").length>6&&(N=N.split(", ").map(J=>J.replace(",",".")).join(", ")),F=new _.WebKitCSSMatrix(N==="none"?"":N)):(F=Z.MozTransform||Z.OTransform||Z.MsTransform||Z.msTransform||Z.transform||Z.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,"),L=F.toString().split(",")),h==="x"&&(_.WebKitCSSMatrix?N=F.m41:L.length===16?N=parseFloat(L[12]):N=parseFloat(L[4])),h==="y"&&(_.WebKitCSSMatrix?N=F.m42:L.length===16?N=parseFloat(L[13]):N=parseFloat(L[5])),N||0}function m(u){return typeof u=="object"&&u!==null&&u.constructor&&Object.prototype.toString.call(u).slice(8,-1)==="Object"}function z(u){return typeof window<"u"&&typeof window.HTMLElement<"u"?u instanceof HTMLElement:u&&(u.nodeType===1||u.nodeType===11)}function k(){const u=Object(arguments.length<=0?void 0:arguments[0]),h=["__proto__","constructor","prototype"];for(let _=1;_<arguments.length;_+=1){const L=_<0||arguments.length<=_?void 0:arguments[_];if(L!=null&&!z(L)){const N=Object.keys(Object(L)).filter(F=>h.indexOf(F)<0);for(let F=0,Z=N.length;F<Z;F+=1){const J=N[F],ee=Object.getOwnPropertyDescriptor(L,J);ee!==void 0&&ee.enumerable&&(m(u[J])&&m(L[J])?L[J].__swiper__?u[J]=L[J]:k(u[J],L[J]):!m(u[J])&&m(L[J])?(u[J]={},L[J].__swiper__?u[J]=L[J]:k(u[J],L[J])):u[J]=L[J])}}}return u}function R(u,h,_){u.style.setProperty(h,_)}function O(u){let{swiper:h,targetPosition:_,side:L}=u;const N=(0,G.a)(),F=-h.translate;let Z=null,J;const ee=h.params.speed;h.wrapperEl.style.scrollSnapType="none",N.cancelAnimationFrame(h.cssModeFrameID);const C=_>F?"next":"prev",B=(j,V)=>C==="next"&&j>=V||C==="prev"&&j<=V,X=()=>{J=new Date().getTime(),Z===null&&(Z=J);const j=Math.max(Math.min((J-Z)/ee,1),0),V=.5-Math.cos(j*Math.PI)/2;let Y=F+V*(_-F);if(B(Y,_)&&(Y=_),h.wrapperEl.scrollTo({[L]:Y}),B(Y,_)){h.wrapperEl.style.overflow="hidden",h.wrapperEl.style.scrollSnapType="",setTimeout(()=>{h.wrapperEl.style.overflow="",h.wrapperEl.scrollTo({[L]:Y})}),N.cancelAnimationFrame(h.cssModeFrameID);return}h.cssModeFrameID=N.requestAnimationFrame(X)};X()}function y(u){return u.querySelector(".swiper-slide-transform")||u.shadowRoot&&u.shadowRoot.querySelector(".swiper-slide-transform")||u}function T(u,h){return h===void 0&&(h=""),[...u.children].filter(_=>_.matches(h))}function f(u){try{console.warn(u);return}catch{}}function c(u,h){h===void 0&&(h=[]);const _=document.createElement(u);return _.classList.add(...Array.isArray(h)?h:D(h)),_}function w(u){const h=(0,G.a)(),_=(0,G.g)(),L=u.getBoundingClientRect(),N=_.body,F=u.clientTop||N.clientTop||0,Z=u.clientLeft||N.clientLeft||0,J=u===h?h.scrollY:u.scrollTop,ee=u===h?h.scrollX:u.scrollLeft;return{top:L.top+J-F,left:L.left+ee-Z}}function b(u,h){const _=[];for(;u.previousElementSibling;){const L=u.previousElementSibling;h?L.matches(h)&&_.push(L):_.push(L),u=L}return _}function I(u,h){const _=[];for(;u.nextElementSibling;){const L=u.nextElementSibling;h?L.matches(h)&&_.push(L):_.push(L),u=L}return _}function A(u,h){return(0,G.a)().getComputedStyle(u,null).getPropertyValue(h)}function x(u){let h=u,_;if(h){for(_=0;(h=h.previousSibling)!==null;)h.nodeType===1&&(_+=1);return _}}function g(u,h){const _=[];let L=u.parentElement;for(;L;)h?L.matches(h)&&_.push(L):_.push(L),L=L.parentElement;return _}function a(u,h){function _(L){L.target===u&&(h.call(u,L),u.removeEventListener("transitionend",_))}h&&u.addEventListener("transitionend",_)}function l(u,h,_){const L=(0,G.a)();return _?u[h==="width"?"offsetWidth":"offsetHeight"]+parseFloat(L.getComputedStyle(u,null).getPropertyValue(h==="width"?"margin-right":"margin-top"))+parseFloat(L.getComputedStyle(u,null).getPropertyValue(h==="width"?"margin-left":"margin-bottom")):u.offsetWidth}},"./node_modules/swiper/swiper-bundle.mjs":(te,U,S)=>{S.r(U),S.d(U,{Swiper:()=>G.S,default:()=>G.S});var G=S("./node_modules/swiper/shared/swiper-core.mjs"),D=S("./node_modules/swiper/modules/virtual.mjs"),$=S("./node_modules/swiper/modules/keyboard.mjs"),n=S("./node_modules/swiper/modules/mousewheel.mjs"),s=S("./node_modules/swiper/modules/navigation.mjs"),E=S("./node_modules/swiper/modules/pagination.mjs"),p=S("./node_modules/swiper/modules/scrollbar.mjs"),m=S("./node_modules/swiper/modules/parallax.mjs"),z=S("./node_modules/swiper/modules/zoom.mjs"),k=S("./node_modules/swiper/modules/controller.mjs"),R=S("./node_modules/swiper/modules/a11y.mjs"),O=S("./node_modules/swiper/modules/history.mjs"),y=S("./node_modules/swiper/modules/hash-navigation.mjs"),T=S("./node_modules/swiper/modules/autoplay.mjs"),f=S("./node_modules/swiper/modules/thumbs.mjs"),c=S("./node_modules/swiper/modules/free-mode.mjs"),w=S("./node_modules/swiper/modules/grid.mjs"),b=S("./node_modules/swiper/modules/manipulation.mjs"),I=S("./node_modules/swiper/modules/effect-fade.mjs"),A=S("./node_modules/swiper/modules/effect-cube.mjs"),x=S("./node_modules/swiper/modules/effect-flip.mjs"),g=S("./node_modules/swiper/modules/effect-coverflow.mjs"),a=S("./node_modules/swiper/modules/effect-creative.mjs"),l=S("./node_modules/swiper/modules/effect-cards.mjs");const u=[D.default,$.default,n.default,s.default,E.default,p.default,m.default,z.default,k.default,R.default,O.default,y.default,T.default,f.default,c.default,w.default,b.default,I.default,A.default,x.default,g.default,a.default,l.default];G.S.use(u)},"./node_modules/swiper/swiper.mjs":(te,U,S)=>{S.r(U),S.d(U,{Swiper:()=>G.S,default:()=>G.S});var G=S("./node_modules/swiper/shared/swiper-core.mjs")}},Xe={};function ye(te){var U=Xe[te];if(U!==void 0)return U.exports;var S=Xe[te]={id:te,loaded:!1,exports:{}};return Ve[te](S,S.exports,ye),S.loaded=!0,S.exports}ye.m=Ve,(()=>{var te=[];ye.O=(U,S,G,D)=>{if(S){D=D||0;for(var $=te.length;$>0&&te[$-1][2]>D;$--)te[$]=te[$-1];te[$]=[S,G,D];return}for(var n=1/0,$=0;$<te.length;$++){for(var[S,G,D]=te[$],s=!0,E=0;E<S.length;E++)(D&!1||n>=D)&&Object.keys(ye.O).every(O=>ye.O[O](S[E]))?S.splice(E--,1):(s=!1,D<n&&(n=D));if(s){te.splice($--,1);var p=G();p!==void 0&&(U=p)}}return U}})(),ye.n=te=>{var U=te&&te.__esModule?()=>te.default:()=>te;return ye.d(U,{a:U}),U},ye.d=(te,U)=>{for(var S in U)ye.o(U,S)&&!ye.o(te,S)&&Object.defineProperty(te,S,{enumerable:!0,get:U[S]})},ye.o=(te,U)=>Object.prototype.hasOwnProperty.call(te,U),ye.r=te=>{typeof Symbol<"u"&&Symbol.toStringTag&&Object.defineProperty(te,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(te,"__esModule",{value:!0})},ye.nmd=te=>(te.paths=[],te.children||(te.children=[]),te),(()=>{var te={"/tailwind/js/app":0,"tailwind/css/app":0};ye.O.j=G=>te[G]===0;var U=(G,D)=>{var[$,n,s]=D,E,p,m=0;if($.some(k=>te[k]!==0)){for(E in n)ye.o(n,E)&&(ye.m[E]=n[E]);if(s)var z=s(ye)}for(G&&G(D);m<$.length;m++)p=$[m],ye.o(te,p)&&te[p]&&te[p][0](),te[p]=0;return ye.O(z)},S=self.webpackChunk=self.webpackChunk||[];S.forEach(U.bind(null,0)),S.push=U.bind(null,S.push.bind(S))})(),ye.O(void 0,["tailwind/css/app"],()=>ye("./resources/js/app.js"));var Ye=ye.O(void 0,["tailwind/css/app"],()=>ye("./resources/sass/app.scss"));Ye=ye.O(Ye)})();
>>>>>>> main
