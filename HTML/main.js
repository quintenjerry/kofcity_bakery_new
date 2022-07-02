
  (function ($) {
    "use strict";
  
  
  
  // Porfolio isotope and filter
  var bakeryIsotope = $('.bakery-container').isotope({
    itemSelector: '.bakery-item',
    layoutMode: 'fitRows'
  });

  $('#bakery-flters li').on( 'click', function() {
    $("#bakery-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    bakeryIsotope.isotope({ filter: $(this).data('filter') });
  });

  



console.log("he")
})(jQuery);

