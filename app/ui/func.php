
<?php

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
    echo '<h2 class="sg-h2"><a id="sg-' . $filename . '" class="sg-anchor">' . $title . '</a></h2>';
		include $type . '/' . $file;

	endforeach;
}


?>
