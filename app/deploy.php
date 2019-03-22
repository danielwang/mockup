 <?php
/*
Deploy script is to generate static htmls and copy
the assets into docs folder, the github pages mockup site will be
updated as soon as commit the code change into github
*/

/* Deploy Process
  0. increase version num v3.x.x and date in gel.scss
  1. uncomment .gel class in gel.scss
  2. generate the gel.css file
  3. save gel.css as gel-scoped.css
  4. remove the empty .gel class inside the stylesheet, .gel html => html (2 places)
  5. rename selector .gel body {} => .gel {} (2 places)
  6. comment out .gel in scss and re generate new gel.css
``7. run 'php release.php v3.x.x' in terminal
  8. copy files to S3, don't forget font icons
*/

/* read php files from folders */
$folders = array("pages", "ui");
for ($i = 0; $i < count($folders); $i++) {
  echo "***** Start generating ***** \n";
  //generate files
  recurseDir($folders[$i]);
  echo "***** End generating ***** \n\n\n";
  //move html files to docs dir
  moveFilesToDocs($folders[$i]);
  echo "\n\n\n";
}

function recurseDir($folderpath) {
	echo "=====$folderpath====\n";
  // check if has sub folders
  $files = scandir($folderpath);

  foreach($files as $file){
    if($file != '.' && $file != '..'){
      // if there are sub directories
      // if(is_dir($folderpath . '/' . $file)){
      //   echo "<li> $file <i>Subfolder</i>";
      //   $file_path = $folderpath . DIRECTORY_SEPARATOR . $file;
      //   recurseDir($file_path);
      //   echo "</li>";
      // }else{
        $folderpath = str_replace('/', DIRECTORY_SEPARATOR, $folderpath);
        echo "$folderpath -> $file \n";
        viewSource($folderpath, $file);
      // }
    }
  }
  // chdir("../");
  // echo getcwd();
}

/* read php files then output html */
function viewSource($folderpath, $page){
  chdir($folderpath); // go to the dir
  // define the URL to load
  $url = 'http://localhost:9000/mockup/app/'. $folderpath . '/' . $page;
  $url = str_replace('\\', '/',$url);
  //echo $url;
  //start cURL
  $ch = curl_init();
  // tell cURL what the URL is
  curl_setopt($ch, CURLOPT_URL, $url);
  // tell cURL that you want the data back from that URL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // run cURL
  $output = curl_exec($ch);
  // end the cURL call (this also cleans up memory so it is
  // important)
  curl_close($ch);
  // display the output
  //echo "$output -> converting";
  $outputfile = str_replace(".php", "", "{$page}.html");

  file_put_contents($outputfile, $output);
  // go back to the right levels
  if (substr_count($folderpath, DIRECTORY_SEPARATOR) == 1){
      chdir("../../");
  } else{
      chdir("../");
  }

}

// move files docs dir
function moveFilesToDocs($src){
  // Get array of all source files
  $files = scandir($src);
  // Identify directories
  $source = $src . "/";
  $files = glob($source . "*.html");
  //echo $source;
  $dest = "../docs/";
  // Cycle through all source files
  foreach ($files as $fname) {
    if($fname != '.' && $fname != '..') {
      rename($fname, $dest.$fname);
      echo "moving $dest.$fname \n";
    }
  }
}


//copy files to docs
// copy('js/gel.js', '../docs/js/gel.js');
// echo "copied gel.js \n";
// copy('css/gel.css', '../docs/css/gel.css');
// echo "copied gel..css \n";
// copy('css/gel-site.css', '../docs/css/gel-site.css');
// echo "copied gel-site.css \n";
// copy('css/icons/gel-icon.svg', '../docs/css/icons/gel-icon.svg');
// echo "copied gel-icon.svg \n";
// copy('css/icons/gel-icon.ttf', '../docs/css/icons/gel-icon.ttf');
// echo "copied gel-icon.ttf \n";
// copy('css/icons/gel-icon.woff', '../docs/css/icons/gel-icon.woff');
// echo "copied gel-icon.woff \n";

// copy files to dist
$cssSrc = "css";
$jsSrc = "js";
$imagesSrc = "images";
$dest = '../docs';
shell_exec("cp -r $cssSrc $dest");
shell_exec("cp -r $jsSrc $dest");
shell_exec("cp -r $imagesSrc $dest");

echo "****************** Deploy finished ******************  \n";



?>
