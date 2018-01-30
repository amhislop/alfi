
// ----------------------------------
//
// Misk
//
// ----------------------------------

(function($) {

    if (typeof window.Misc == 'undefined') window.Misc = {};

    Misc = {

      //   // temp PDF open in new tab
      //   $('#menu-primary-menu-links li').last().children('a').attr('target', '_blank');
      //
      //   // alternate nav fonts
      //   $('.logo-header').on('click', function() {
      // 	   $('#menu-primary-menu-links').toggleClass('alternate');
      //   });



        init: function() {

            console.log("Misc::init");

            this.cacheDom();
            this.events();

        },

        cacheDom: function() {
          this.$logo        = $('.logo-header');
          this.$menuLinks   = $('#menu-primary-menu-links');

        },

        events: function() {
          this.$menuLinks.children('li').last().children('a').attr('target', '_blank');
          this.$logo.on('click', this.toggleAction.bind(this));

        },

        toggleAction: function() {
          this.$menuLinks.toggleClass('alternate');

        }

    }

})(jQuery);
