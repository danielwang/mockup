$(document).ready(function(){

  // slide in menu
  $('.nav-toggle').on('click',function(){
    $('#gel-menu').toggleClass('open');
  });
  // tooltip
  $('[data-tooltip="tooltip"]').tooltip();

  $('#gel-notification .close').click(function(){
    $(this).parent().slideUp(300);
  });

  $('.alert .close').click(function(){
    $(this).parent().fadeOut(300);
  });
  // smooth anchor scroll
  $('a[data-triger="anchor"]').click(function(event){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    event.preventDefault();
  });

  $('[data-toggle="popover"]').popover();

});
