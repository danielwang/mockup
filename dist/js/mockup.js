$(function($) {
  var $body = $('body');
  // On click, capture state and save it in localStorage
  $($.AdminLTE.options.sidebarToggleSelector).click(function() {
    localStorage.setItem('sidebar', $body.hasClass('sidebar-collapse') ? 1 : 0);
  });

  // On ready, read the set state and collapse if needed
  if (localStorage.getItem('sidebar') === '0') {
    $body.addClass('disable-animations sidebar-collapse');
    requestAnimationFrame(function() {
      $body.removeClass('disable-animations');
    });
  }
});

$(document).ready(function() {
  $('.nav-tabs a').click(function(e) {
    $(this).tab('show')
  });
  multiCarousel();
  usageToggle();

  $('[data-toggle="popover"]').popover();

  $('body').scrollspy({
    target: '.sidenav',
    offset: 0
  });
});



function multiCarousel() {
  $('.multi-item-carousel').carousel({
    interval: false
  });
  $('.multi-item-carousel .item').each(function() {
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {
      next.next().children(':first-child').clone().appendTo($(this));
    } else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
  });
};

function usageToggle() {
  var checkboxes = $('#demo input[type="checkbox"]');
  checkboxes.prop('checked', true);
  checkboxes.click(function() {
    var ele = $(this).attr("value");
    $('.' + ele).toggleClass('hide');
  });
}
