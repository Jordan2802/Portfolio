/* ====== Add Smooth effect ===== */
$(function() {
    var scrollToAnchor = function( id ) {
      var elem = $("section[id='"+ id +"']"); // on crée une balise d'ancrage
      if ( typeof elem.offset()  === "undefined" ) { // on verifie si l'élément existe
          elem = $("#"+id); }
      if ( typeof elem.offset()  !== "undefined" ) { // si l'élément existe, on continue
        $('html, body').animate({
                scrollTop: elem.offset().top }, 800 );} // on défini un temps de défilement de page
    };
    $("a").click(function( event ) { // on attache la fonction au click
      if ( $(this).attr("href").match("#") ) { // on vérifie qu'il s'agit d'une ancre
        event.preventDefault();
        var href = $(this).attr('href').replace('#', '') // on scroll vers la cible
        scrollToAnchor( href ); }
    });
  });

  /** slider */

  $(document).ready(function(){
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
});
