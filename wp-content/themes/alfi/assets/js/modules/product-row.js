$( document ).ready(function() {

  // Product Row Buttons

  $('.color-row-buttons').children().on('click', function(){

    $('.color-row-images.'+this.className).show().siblings().hide()

  });

  $('.enquiry-tab').on('click', function(){
    $('.enquiry-form').toggleClass('open');
  });

  console.log('ready');
  $('#menuMobile').on('click', function(){
    $(this).children().toggleClass('open');
    $('.menu-primary-menu-links-container').slideToggle();
  });

  // temp PDF open in new tab
  $('#menu-primary-menu-links li').last().children('a').attr('target', '_blank');

  // alternate nav fonts
  $('.logo-header').on('click', function() {
	   $('#menu-primary-menu-links').toggleClass('alternate');
  });

});
