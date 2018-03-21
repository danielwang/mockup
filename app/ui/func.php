
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
		$tabname = 'tab-' . $filename ;
		if($file === reset($files)){
			echo '<span class="item active">';
		} else{
			echo '<span class="item">';
		}
		echo '<a href="#page-' . $tabname  . '" id="' . $tabname  .'" data-toggle="tab" role="tab" aria-controls="' . $tabname  . '" aria-selected="true">' . $title . '</a></span>';
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
		echo '<div class="tab-pane fade show" id="' . $tabname  .'" role="tabpanel" aria-labelledby="' . $tabname  .'">';
		include $type . '/' . $file;
		echo '</div>';
	endforeach;
}


?>
