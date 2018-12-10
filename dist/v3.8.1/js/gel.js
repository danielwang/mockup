/* *************************************** *\
 *   PageUp GEL JS - v1.2.0
 *   Author: Daniel Wang
 *	 Date: 29/10/2018
 *
\* *************************************** */
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

document.addEventListener('DOMContentLoaded', function() {
  // read menu state from localStorage
  //  menuState();
  toggleMenu();
//  setDropdownPosition();
});


/*****************************************
    Menu toggle
*****************************************/
var menu = document.getElementById('gel-menu');
var menuIcons = document.getElementsByClassName('nav-toggle');

function toggleMenu() {
  // sliding menu toggle
  for (var i = 0; i < menuIcons.length; i++) {
    menuIcons[i].addEventListener('click', function() {
      menu.classList.toggle('open');
      if (menu.classList == "") {
        setAriaExpanded('false');
        //  setMenuState(false);
      } else {
        setAriaExpanded('true');
        //  setMenuState(true);
      }
    });
  }
}
// screen reader accessibility
function setAriaExpanded(val) {
  for (var i = 0; i < menuIcons.length; i++) {
    menuIcons[i].setAttribute('aria-expanded', val);
  }
}

//  Store menu state in local storage
function menuState() {
  // if local storage supported, stores display preferrence
  if (window.localStorage) {
    var menuState = localStorage.getItem("menuState");
    if (menuState == 'true') {
      menu.classList.add('open');
    } else {
      setMenuState(false);
    }
  }
}

function setMenuState(val) {
  localStorage.setItem("menuState", val); // store the value in local browser
}

// click or touch outside menu to close off menu
// closest polyfill
if (window.Element && !Element.prototype.closest) {
    Element.prototype.closest =
    function(s) {
        var matches = (this.document || this.ownerDocument).querySelectorAll(s),
            i,
            el = this;
        do {
            i = matches.length;
            while (--i >= 0 && matches.item(i) !== el) {};
        } while ((i < 0) && (el = el.parentElement));
        return el;
    };
}

function closeMenu(e) {
  if (menu) {
    if (!e.target.closest('#gel-menu') && !e.target.closest('.nav-toggle') && menu.classList.contains('open')) {
        menu.classList.remove('open');
    }
    if (e.keyCode == 27 && menu.classList.contains('open')) {
        menu.classList.remove('open');
    }
  }
}

document.addEventListener('click', closeMenu);
// touch devices
document.addEventListener('touchstart', closeMenu);
// escape key to close off
document.addEventListener('keyup',closeMenu);

/*****************************************
    checkboxes select/unselect all
*****************************************/
/* function checkAll() {

var inputs = document.querySelectorAll('.check');
for (var i = 0; i < inputs.length; i++) {
  inputs[i].checked = true;
}

this.onclick = uncheckAll;
}

function uncheckAll() {
var inputs = document.querySelectorAll('.check');
for (var i = 0; i < inputs.length; i++) {
  inputs[i].checked = false;
}

this.onclick = checkAll; //function reference to original function
}

var el = document.getElementById("checkall"); //let for ES6 aficionados
el.onclick = checkAll; //again, function reference, no ()

*/

/*****************************************
  Scroller
*****************************************/
const outterWrapper = document.querySelector('[data-control="scroller-wrapper"]');
const scroller = document.querySelector('.scroller');

if (typeof(outterWrapper) != 'undefined' && outterWrapper != null){
  const innerContent = outterWrapper.querySelector('[data-control="scroller-content"]');
  //const scroller = document.querySelector('.scroller');

  var rightBtn = document.querySelector('.scroller-right-btn');
  var leftBtn = document.querySelector('.scroller-left-btn');
  var timeout;

  // Add scroller contrl on desktop
  if (!isMobile) {
    scrollerInit();
  } else {
    // hide scroller contrl on mobile touch devices
    // if there is scroller control wrapper
    if (typeof(scroller) != 'undefined' && scroller != null){
        scroller.classList.add('d-none');
    } else{
    // hide buttons individually
    rightBtn.classList.add('d-none');
    leftBtn.classList.add('d-none');
    }
  }

  function getOutterWrapperWidth() {
    return outterWrapper.clientWidth;
  }

  function getInnerConcentWidth() {
    return innerContent.clientWidth;
  }

  function getOverflowDis() {
    return getInnerConcentWidth() - getOutterWrapperWidth();
  }

  function scrollerInit() {
    //console.log('ow: ' + getOutterWrapperWidth() + ' iw: ' + getInnerConcentWidth());
    // there is overflow
    if (getOutterWrapperWidth() < getInnerConcentWidth()) {
      //show scroller scroller.classList.remove('d-none');
      rightBtn.classList.remove('d-none');
      leftBtn.classList.remove('d-none');
      scrollerReset();
    } else {
      // no overflow
    //  console.log('sn');
      //scroller.classList.add('d-none');
      rightBtn.classList.add('d-none');
      leftBtn.classList.add('d-none');
    }

  }
  // disable or enable scroller left right buttons
  function scrollerReset() {

    if (outterWrapper.scrollLeft > 0) {
      // leftBtn.disabled = false;
      leftBtn.classList.remove('disabled');
    } else {
      leftBtn.classList.add('disabled');
    }

    if (outterWrapper.scrollLeft == getOverflowDis()) {
      rightBtn.classList.add('disabled');
    } else {
      rightBtn.classList.remove('disabled');
    }

  }

  rightBtn.onclick = function () {
    sideScroll(outterWrapper, 'right', 20, 300, 20);
  };
  leftBtn.onclick = function () {
    sideScroll(outterWrapper, 'left', 20, 300, 20);
  };

  function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function () {
      if (direction == 'left') {
        element.scrollLeft -= step;
      } else {
        element.scrollLeft += step;
      }
      scrollAmount += step;

      if (scrollAmount >= distance) {
        window.clearInterval(slideTimer);
      }
      scrollerReset();
    }, speed);

  }

  // Listen for resize windows events
  window.addEventListener('resize', function (event) {
    // If timer is null, reset it to 66ms and run your functions. Otherwise, wait until timer is cleared
    if (!timeout) {
      timeout = setTimeout(function () {
        // Reset timeout
        timeout = null;
        // Run our resize functions
        scrollerInit();

      }, 66);
    }
  }, false);

  outterWrapper.addEventListener('scroll', function () {
    scrollerReset();
  });
}
