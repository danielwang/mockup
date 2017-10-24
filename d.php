<?php
if (file_exists("index.html")){
	unlink("index.html");
}


$folders = array("layouts", "modules", "patterns", "tuneup");
for ($i = 0; $i < count($folders); $i++) {
	recurseDir($folders[$i]);
}

function recurseDir($folderpath) {
	echo "<ul><li><b>$folderpath</b></li>";
  // check if has sub folders
  $files = scandir($folderpath);
  foreach($files as $file){
    if($file != '.' && $file != '..'){
      if(is_dir($folderpath . '/' . $file)){
        echo "<li> $file <i>Subfolder</i>";
        $file_path = $folderpath . DIRECTORY_SEPARATOR . $file;
        recurseDir($file_path);
        echo "</li>";
      }else{
        echo "<li>$folderpath -> $file</li>";
        if (stristr($file, '.html')){
					 chdir($folderpath);
					 echo "deleting $file <br>";
					 unlink($file);
					 if (substr_count($folderpath, DIRECTORY_SEPARATOR) == 1){
					 			chdir("../../");
					 	} else{
					 			chdir("../");
					 	}
				}
      }
    }
  }
  echo "</ul>";
  // echo getcwd();
}

function readFolders($foldername) {
	echo "reading $foldername folder <br>";
	$files = array();
	$handle = opendir($foldername . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	chdir($foldername);
	foreach ($files as $file):
		echo "deleting $file <br>";
		unlink($file);
	endforeach;
	chdir("../");
}
echo "<a href='g.php'>Generate</a>";
?>
