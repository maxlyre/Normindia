jQuery(".production_text_container").height(jQuery(".production-content").outerHeight());

jQuery( window ).resize(function() {
  jQuery(".production_text_container").height(jQuery(".production-content").outerHeight());
});

jQuery('[data-reveal]').on('open.zf.reveal', function() {

});

jQuery( "body" ).on( "click",".menu-mobile", function() {
  jQuery('#ModalMenu').toggleClass("hide-mobile-menu");
});
jQuery( "body" ).on( "click",".menu-mobile-container a", function() {
  jQuery('#ModalMenu').toggleClass("hide-mobile-menu");
});
if(jQuery.cookie('age') != "true"){
  jQuery('#age').foundation('open');
}
jQuery( "body" ).on( "click","#age-verification", function() {
  if (jQuery('.age_tcheck').is(':checked')) {
        jQuery('#age').foundation('close');
        jQuery.cookie("age", "true");
    }
});
