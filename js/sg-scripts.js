/**
 * sg-scripts.js
 */
(function(document, undefined) {
  "use strict";

  // Add js class to body
  document.getElementsByTagName('body')[0].className += ' js';


  // Add functionality to toggle classes on elements
  var hasClass = function(el, cl) {
      var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
      return !!el.className.match(regex);
    },

    addClass = function(el, cl) {
      el.className += ' ' + cl;
    },

    removeClass = function(el, cl) {
      var regex = new RegExp('(?:\\s|^)' + cl + '(?:\\s|$)');
      el.className = el.className.replace(regex, ' ');
    },

    toggleClass = function(el, cl) {
      hasClass(el, cl) ? removeClass(el, cl) : addClass(el, cl);
    };

  var selectText = function(text) {
    var doc = document;
    if (doc.body.createTextRange) {
      var range = doc.body.createTextRange();
      range.moveToElementText(text);
      range.select();
    } else if (window.getSelection) {
      var selection = window.getSelection();
      var range = doc.createRange();
      range.selectNodeContents(text);
      selection.removeAllRanges();
      selection.addRange(range);
    }
  };


  // Cut the mustard
  if (!Array.prototype.forEach) {

    // Add legacy class for older browsers
    document.getElementsByTagName('body')[0].className += ' legacy';

  } else {

    // View Source Toggle
    [].forEach.call(document.querySelectorAll('.sg-btn--source'), function(el) {
      el.onclick = function() {
        var that = this;
        var sourceCode = that.parentNode.nextElementSibling;
        toggleClass(sourceCode, 'is-active');
        return false;
      };
    }, false);

    // Select Code Button
    [].forEach.call(document.querySelectorAll('.sg-btn--select'), function(el) {
      el.onclick = function() {
        selectText(this.nextSibling);
        toggleClass(this, 'is-active');
        return false;
      };
    }, false);
  }


  // Add operamini class to body
  if (window.operamini) {
    document.getElementsByTagName('body')[0].className += ' operamini';
  }
  // Opera Mini has trouble with these enhancements
  // So we'll make sure they don't get them
  else {
    // Init prettyprint
    prettyPrint();

  }

})(document);

// *************************************** \
// customized script add by Daniel Wang
// *************************************** /
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  // prevent page jumping when click on # link
  $('a[href="#"]').click(function(e) {
    e.preventDefault();
  });
  // enable the tabs
  $('.nav-tabs a, .nav-pills a').click(function(e) {
    e.preventDefault()
    $(this).tab('show')
  })

  $('body').scrollspy({
    target: '.sg-docs-sidebar',
    offset: 10
  });

  $('#sidebar > li > a').click(function(e) {
    $('#sidebar > li.active').removeClass('active');
    var $this = $(this);
    if (!$this.parent().hasClass('active')) {
      $this.parent().addClass('active');
    }
    e.preventDefault();
  });

  // init combobox
  $('.combobox').combobox();
  $('.clockpicker').clockpicker();
  $('.input-group.date').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    calendarWeeks: true,
    autoclose: true,
    todayBtn: "linked",
    todayHighlight: true
  });
  // smooth anchor scroll
  /*  $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });*/

  // multi item carousel
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

  dynamicHeaderBg();
  usageToggle();
});


function dynamicHeaderBg() {
  var xmin = -400;
  xmax = $("#sg-banner").width();
  var ymin = -400;
  ymax = 145;
  //var colors = [['#257BA0', '#92BDD0'], ['#57C0E9', '#DDF2FB'], ['#76C190', '#E4F3E9'], ['#F39657','#FDEADD'],['#EE3D4B','#FCD8DB'],['#EED046','#FCF6DA'],['#B565A9','#F0E0EE']];
  var colors = ['blue', 'red', 'orange', 'green', 'yellow', 'purple', 'navy', 'gray'];
  var y = randomBetween(ymin, ymax);
  var x = randomBetween(xmin, xmax);
  var w = randomBetween(400, 800);
  var i = Math.floor(Math.random() * colors.length);
  console.log(i + " y:" + y + " x:" + x);
  var dstyles = {
    "top": y + 'px',
    "left": x + 'px',
    "width": w + 'px',
    "height": w + 'px'
  };
  //  $("#sg-banner").css("background-color", colors[i][0]);
  ;
  $("#sg-banner").addClass("bg-" + colors[i]);
  $("#diamond-background").attr("class", colors[i] + "-tint");
  $("#diamond-background").css(dstyles);
}

function randomBetween(min, max) {
  if (min < 0) {
    return min + Math.random() * (Math.abs(min) + max);
  } else {
    return min + Math.random() * max;
  }
}

function usageToggle() {
  var checkboxes = $('.sg-doc input[type="checkbox"]');
  checkboxes.prop('checked', false);
  checkboxes.click(function() {
    var ele = $(this).attr("value");
    $('.' + ele).toggleClass('hide');
  });
}
