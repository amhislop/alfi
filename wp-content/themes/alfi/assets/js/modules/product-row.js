$( document ).ready(function() {

  // Product Row Buttons

  $('.color-row-buttons').children().on('click', function(){

    $('.color-row-images.'+this.className).show().siblings().hide()

  });

  $('.enquiry-tab').on('click', function(){
    $('.enquiry-form').toggleClass('open');
  });

});