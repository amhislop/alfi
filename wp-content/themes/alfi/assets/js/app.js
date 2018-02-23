// ------------------------------------
//
// Javascript Init
//
// ------------------------------------

var ProductRow         = require('./modules/product-row'),
    MobileBars         = require('./modules/mobile-bars'),
    EnquiryForm        = require('./modules/enquiry-form'),
    Misc               = require('./modules/misc');

jQuery(document).ready(function($) {

    if (!window.console) window.console = {};
    if (!window.console.log) window.console.log = function () { };

    // ------------------------------------
    // Theme
    // ------------------------------------

    ProductRow.init();
    MobileBars.init();
    Misc.init();


});
