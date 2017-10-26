jQuery(".production_text_container").height(jQuery(".production-content").outerHeight());

jQuery( window ).resize(function() {
  jQuery(".production_text_container").height(jQuery(".production-content").outerHeight());
});

jQuery('[data-reveal]').on('open.zf.reveal', function() {

});

jQuery( "body" ).on( "click",".menu-mobile", function() {
  jQuery('#ModalMenu').toggleClass("hide-mobile-menu");
});
jQuery( "body" ).on( "click",".menu a", function() {
  jQuery('#ModalMenu').toggleClass("hide-mobile-menu");
});
