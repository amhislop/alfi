// ------------------------------------
//
// Javascript Init
//
// ------------------------------------

var ProductRow         = import('./modules/product-row.js');
var MobileBars         = import('./modules/mobile-bars.js');
var EnquiryForm        = import('./modules/enquiry-form.js');
var Misc               = import('./modules/misc.js');

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
