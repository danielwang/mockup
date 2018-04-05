document.addEventListener('DOMContentLoaded', () => {

  // sliding menu toggle
  var menu = document.getElementById('gel-menu');
	var menuIcons = document.getElementsByClassName('nav-toggle');

  for (var i=0;i<menuIcons.length; i++) {
      menuIcons[i].addEventListener('click', () => {
    		menu.classList.toggle('open');
        if (menu.classList == ""){
          setAriaExpanded('false');
        }else {
          setAriaExpanded('true');
        }
    	});
  }
  // screen reader accessibility 
  function setAriaExpanded(val){
    for (var i=0;i<menuIcons.length; i++) {
      menuIcons[i].setAttribute('aria-expanded', val);
    }
  }
});
