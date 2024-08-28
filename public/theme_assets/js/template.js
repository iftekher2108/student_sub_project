(function($) {
  'use strict';
  $(function() {
    var body = $('body');

    var sidebar = $('.sidebar');


    $(document).ready(function() {
      $('.preloader').fadeOut(300);
    })


    //Add active class to nav-link based on url dynamically
    //Active class can be hard coded directly in html file also as required



    //Close other submenu in sidebar on opening any

    sidebar.on('show.bs.collapse', '.collapse', function() {
      sidebar.find('.collapse.show').collapse('hide');
    });


    //Change sidebar
    $('[data-toggle="minimize"]').on("click", function() {
      body.toggleClass('sidebar-icon-only');
    });

    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

  });



})(jQuery);
