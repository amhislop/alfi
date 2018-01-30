
// ----------------------------------
//
// Enquiry Form
//
// ----------------------------------

(function($) {

    if (typeof window.EnquiryForm == 'undefined') window.EnquiryForm = {};

    EnquiryForm = {


        init: function() {

            console.log("EnquiryForm::init");

            this.cacheDom();
            this.events();

        },

        cacheDom: function() {
          this.$tab   = $('.enquiry-tab');
          this.$form  = $('.enquiry-form');

        },

        events: function() {
          this.$tab.on('click', this.toggleAction.bind(this));

        },

        toggleAction: function() {
          this.$form.toggleClass('open');

        }

    }

})(jQuery);
