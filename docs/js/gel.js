var menu = document.getElementById('gel-menu');
var menuIcons = document.getElementsByClassName('nav-toggle');

document.addEventListener('DOMContentLoaded', () => {
  // read menu state from localStorage
  //  menuState();
  toggleMenu();
//  setDropdownPosition();
});


function toggleMenu() {
  // sliding menu toggle
  for (var i = 0; i < menuIcons.length; i++) {
    menuIcons[i].addEventListener('click', () => {
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

// function setDropdownPosition() {
//   var dropdowns = document.getElementsByClassName('dropdown-toggle');
//   for (var i = 0; i < dropdowns.length; i++) {
//     dropdowns[i].addEventListener('click', () => {
//         var width = dropdowns[i].offsetWidth;
//       //  console.log(width);
//         dropdowns[i].nextElementSibling.style.marginLeft = -(width);
//     }, false);
//   }
//
// }
