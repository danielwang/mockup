 <?php

 $v = $argv[1];
 // create folder for the release version
 $dir= '../dist/' . $v;
 mkdir($dir, 0777, true);

 // copy files to dist
 $cssSrc = "css";
 $jsSrc = "js";
 $imagesSrc = "images";
 $dest = $dir;
 shell_exec("cp -r $cssSrc $dest");
 shell_exec("cp -r $jsSrc $dest");
 shell_exec("cp -r $imagesSrc $dest");


 ?>
