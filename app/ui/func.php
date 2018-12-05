
<?php

// list of the items in the dir
function pageTabs($type) {
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
		$tabname =  $filename . '-tab' ;
		if($file === reset($files)){
			$active = "active";
			$selected = true;
		} else{
			$active = "";
			$selected = false;
		}
		echo '<a class="nav-link '. $active  .'" id="' . $tabname  .'" data-toggle="tab" href="#' . $filename .  '" role="tab" aria-controls="' . $filename . '" aria-selected="'. $selected  .'">' . $title . '</a>';
	endforeach;
}

// show the content of the items
function showMarkup($type, $format) {
	$files = array();
	$handle = opendir('core-elements/' . $type . '/');
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
		$note = 'notes/' . $type . '/' . $file;
		if($file === reset($files)){
			$active = "active";
		} else{
			$active = "";
		}
		echo '<div class="tab-pane ' . $active . '" id="' . $filename  .'" role="tabpanel" aria-labelledby="' . $tabname  .'">';
		echo '<div class="row"><div class="col-md-6 col-lg-7">'; // left column demos
		include 'core-elements/' . $type . '/' . $file;
		echo '</div><div class="col-md-6 col-lg-5"><aside>'; // right column notes
				if (file_exists($note)) { // if has notes
					include $note;
				}
		echo '</aside></div></div></div>';
	endforeach;
}

// show the notes of the items
function showNotes($type, $format) {
	$files = array();
	$handle = opendir('notes/' . $type);
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.' . $format)):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.$format$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$documentation = 'notes' . $type . '/' . $file;

		// if (file_exists($documentation)) {
		// 	echo '<div class="row"><div class="col-md-12 col-lg-8">';
		// } else {
		// 	echo '<div class="row"><div class="col-sm-12">';
		// }
		if (file_exists($documentation)) {
			echo '<div class="sg-doc">';
			echo '<h4 class="sg-h4">Usage Notes</h4>';
			include $documentation;
			echo '</div>';
		}
	endforeach;
}
?>
