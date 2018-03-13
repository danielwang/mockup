document.addEventListener('DOMContentLoaded', () => {

  // sliding menu toggle
  var menu = document.getElementById('gel-menu');
	var menuIcons = document.getElementsByClassName('nav-toggle');

  for (var i=0;i<menuIcons.length; i++) {
      menuIcons[i].addEventListener('click', () => {
    		menu.classList.toggle('open');
    	});
  }
});
