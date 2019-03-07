<style>
  #gel-menu ul li {
    margin-bottom: 0;
  }
  #gel-menu menu .submenu{
    border-top: 1px solid #536a81;
    border-bottom: 1px solid #536a81;
  }
  #gel-menu menu .submenu:not(:first-child){
    margin-top: -1px;
  }

  #gel-menu menu .submenu > a:after{
    content: "\e93a";
    font-family: "gel-icon";
    transform: rotate(0);
    transition: transform 0.3s ease-in-out 0s;
    float: right;
    margin-top: -1.5rem;
  }
  #gel-menu menu .submenu > a.collapsed:after{
    transform: rotate(180deg);
  }
  #gel-menu menu .submenu > a{
    background-color: #00264a;
    width: auto;
  }
  #gel-menu menu .submenu > a.collapsed{
    background-color: #002f54;
  }
  #gel-menu menu .submenu ul.collapse, #gel-menu menu .submenu ul.collapsing {
    background-color: #00264a;
  }
  #gel-menu ul li a:hover {
    margin-left: 0;
  }
</style>

<?php
function subMenuList($type) {
	$files = array();
	$handle = opendir('core-elements/' . $type . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.html$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$title = ucwords($title);
		echo '<a class="px-5 py-2 text-16" href="#">' . $title . '</a>';
	endforeach;
}
?>
<ul>
  <li class="submenu mb-0">
    <a  class="px-5 py-3 collapsed" data-toggle="collapse" data-parent="#accordion" href="#intro" aria-expanded="true" aria-controls="collapseOne">
     <h4 class="text-white mb-0">Introduction</h4>
    </a>
    <ul id="intro" class="collapse">
      <li>
        <a class="px-5 py-2 text-16" href="introduction">What is GEL?</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="principles">Design Principles</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="accessibility">Accessibility</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="personas">Personas</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="installation">Installation</a>
      </li>
    </ul>
  </li>
  <li class="submenu mb-0">
    <a class="px-5 py-3 collapsed" data-toggle="collapse" data-parent="#" href="#foundations" aria-expanded="true" aria-controls="collapseOne">
     <h4 class="text-white mb-0">Foundations</h4>
    </a>
    <ul id="foundations" class="collapse">
      <li>
        <a class="px-5 py-2 text-16" href="colours">Colour Palettes</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="typography">Typography</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="icons">Iconography</a>
      </li>
      <li>
        <a class="px-5 py-2 text-16" href="grids">Responsive Grids</a>
      </li>
    </ul>
  </li>
  <li class="submenu mb-0">
    <a class="px-5 py-3 collapsed" data-toggle="collapse" data-parent="#" href="#elements" aria-expanded="true" aria-controls="collapseOne">
     <h4 class="text-white mb-0">Elements</h4>
    </a>
    <ul id="elements" class="collapse">
      <?php subMenuList('atoms') ?>
    </ul>
  </li>
  <li class="submenu mb-0">
    <a class="px-5 py-3 collapsed" data-toggle="collapse" data-parent="#" href="#components" aria-expanded="true" aria-controls="collapseOne">
     <h4 class="text-white mb-0">Components</h4>
    </a>
    <ul id="components" class="collapse">
      <?php subMenuList('molecules') ?>
      <?php subMenuList('organisms') ?>
    </ul>
  </li>

  <!-- <li class="submenu">
    <h4 class="text-white mb-0">More</h4>
    <ul>
      <li>
        <a href="utilities">Utility classes</a>
      </li>
      <li>
        <a href="customization">Customization</a>
      </li>
    </ul>
  </li> -->
</ul>
