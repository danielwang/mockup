
<?php

// list of the items in the dir
function pageTabs($type) {
	$files = array();
	$handle = opendir($type . '/');
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
		$tabname =  $filename . '-tab' ;
		if($file === reset($files)){
			$active = "active";
			$selected = true;
		} else{
			$active = "";
			$selected = false;
		}
		echo '<li class="nav-item"><a class="nav-link '. $active  .'" id="' . $tabname  .'" data-toggle="tab" href="#' . $filename .  '" role="tab" aria-controls="' . $filename . '" aria-selected="'. $selected  .'">' . $title . '</a></li>';
	endforeach;
}

// show the content of the items
function showMarkup($type, $format) {
	$files = array();
	$handle = opendir($type);
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.' . $format)):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.$format$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$tabname = 'page-tab-' . $filename ;
		if($file === reset($files)){
			$active = "active";
		} else{
			$active = "";
		}
		echo '<div class="tab-pane ' . $active . '" id="' . $filename  .'" role="tabpanel" aria-labelledby="' . $tabname  .'">';
		include $type . '/' . $file;
		echo '</div>';
	endforeach;
}


?>
