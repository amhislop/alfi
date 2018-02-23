
// ----------------------------------
//
// Mobile Bars
//
// ----------------------------------

(function($) {

    if (typeof window.MobileBars == 'undefined') window.MobileBars = {};

    MobileBars = {


        init: function() {

            console.log("MobileBars::init");

            this.cacheDom();
            this.events();

        },

        cacheDom: function() {
          this.$menuMobile      = $('#menuMobile');
          this.$linksContainer  = $('.menu-primary-menu-links-container');

        },

        events: function() {
          this.$menuMobile.on('click', this.toggleAction.bind(this));

        },

        toggleAction: function() {
          this.$menuMobile.children().toggleClass('open');
          this.$linksContainer.slideToggle();

        }

    };

    module.exports = MobileBars;

})(jQuery);
