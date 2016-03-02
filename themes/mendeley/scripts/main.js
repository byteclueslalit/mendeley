$( document ).ready(function() {

  // User Segment Tabs
  $('.user-tabs-nav--item').on('click', function(e){
    var _this = $(this);
    var navItems = $('.user-tabs-nav--item');
    var tabs = $('.tab');
    var tab = _this.data('tab');

    navItems.removeClass('active');
    _this.addClass('active');
    tabs.fadeOut();
    $('.tab-' + tab).fadeIn();
  });

  // Modal Show
  $('.modal-open').on('click', function(e){
    e.preventDefault();
    $('.modal').fadeIn();
  });

  // Modal Close
  $('.modal-close').on('click', function(e){
    e.preventDefault();
    $('.modal').fadeOut();
  });

  // Endorsements
  // $(".carousel").owlCarousel({
  //   dots: true,
  //   items: 1,
  //   autoHeight: true,
  //   loop: true,
  //   nav: true,
  //   navContainer: '.carousel-nav',
  //   navText: [
  //     "<button class='prev'></button>",
  //     "<button class='next'></button>"
  //   ]
  // });

});
