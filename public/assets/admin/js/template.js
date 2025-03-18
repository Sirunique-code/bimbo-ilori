(function($) {
  'use strict';
  $(function() {
    var body = $('body');
    var contentWrapper = $('.content-wrapper');
    var scroller = $('.container-scroller');
    var footer = $('.footer');
    var sidebar = $('.sidebar');

    // Add active class to nav-link based on the current URL
    function addActiveClass(element) {
      var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');

      if (current === "") {
        // For root URL
        if (element.attr('href').indexOf("index.html") !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
        }
      } else {
        // For other URLs
        if (element.attr('href').indexOf(current) !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
          if (element.parents('.submenu-item').length) {
            element.addClass('active');
          }
        }
      }
    }

    // Apply active class to sidebar menu links
    if (sidebar.length) {
      $('.nav li a', sidebar).each(function() {
        addActiveClass($(this));
      });

      // Close other submenus when one is opened
      sidebar.on('show.bs.collapse', '.collapse', function() {
        sidebar.find('.collapse.show').collapse('hide');
      });
    }

    // Toggle sidebar minimize
    $('[data-toggle="minimize"]').on("click", function() {
      body.toggleClass('sidebar-icon-only');
    });

    // Append input helper to checkboxes and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');
  });

  // Focus search input when clicking the search icon
  $('#navbar-search-icon').click(function() {
    $("#navbar-search-input").focus();
  });

})(jQuery);
