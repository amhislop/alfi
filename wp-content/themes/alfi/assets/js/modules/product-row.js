
// ----------------------------------
//
// Product Row
//
// ----------------------------------

(function($) {

    if (typeof window.ProductRow == 'undefined') window.ProductRow = {};

    ProductRow = {


        init: function() {

            console.log("ProductRow::init");

            this.cacheDom();
            this.events();

        },

        cacheDom: function() {
          this.$button  = $('.color-row-buttons').children();
          this.$image   = $('.color-row-images');

        },

        events: function() {
          this.$button.on('click', this.hideSiblings);

        },

        hideSiblings: function() {
          ProductRow.$image.hide().siblings('.'+this.className).show();
        }

    };

    module.exports = ProductRow;

})(jQuery);
