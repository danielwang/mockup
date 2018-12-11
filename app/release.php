 <?php

 $v = $argv[1];
 // create folder for the release version
 $dir= '../dist/' . $v;
 mkdir($dir, 0777, true);

 // generate minified gel.css output to dist dir
 include_once("vendor/minifier.php");
 $css = array(
     "css/gel-scoped.css" => "css/gel-scoped.min.css",
     "css/gel.css" => "css/gel.min.css"
 );
 minifyCSS($css);

 // copy files to dist
 $cssSrc = "css";
 $jsSrc = "js";
 $imagesSrc = "images";
 $dest = $dir;
 shell_exec("cp -r $cssSrc $dest");
 shell_exec("cp -r $jsSrc $dest");
 shell_exec("cp -r $imagesSrc $dest");

 ?>
