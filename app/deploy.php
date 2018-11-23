 <?php
 //generate static index page
// ob_start();
// include_once 'index.php';
// file_put_contents("index.html", ob_get_contents());
// ob_end_clean(); // clear the buffer
// echo "<p>latest <a href='index.html'>Styleguide</a> has been generated</p>";

/* read php files from folders */
$folders = array("pages", "ui");
for ($i = 0; $i < count($folders); $i++) {
  echo "<ul><li>";
  //generate files
  recurseDir($folders[$i]);
  echo "</li></ul>";
  //move html files to docs dir
  moveFilesToDocs($folders[$i]);
}

function recurseDir($folderpath) {
	echo "<ul><li><b>$folderpath</b></li>";
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
        echo "<li>$folderpath -> $file</li>";
        viewSource($folderpath, $file);
      // }
    }
  }
  echo "</ul>";
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
    }
  }
}


// generate minified gel.css output to dist dir
include_once("vendor/minifier.php");
$css = array(
    "css/gel-scoped.css" => "css/gel-scoped.min.css",
    "css/gel.css" => "css/gel.min.css"
);
minifyCSS($css);

// copy files to dist
copy('css/gel.css', '../dist/css/gel.css');
copy('css/gel.min.css', '../dist/css/gel.min.css');
copy('css/gel-scoped.css', '../dist/css/gel-scoped.css');
copy('css/gel-scoped.min.css', '../dist/css/gel-scoped.min.css');
copy('js/gel.js', '../dist/js/gel.js');
copy('css/icons/gel-icon.svg', '../dist/css/icons/gel-icon.svg');
copy('css/icons/gel-icon.ttf', '../dist/css/icons/gel-icon.ttf');
copy('css/icons/gel-icon.woff', '../dist/css/icons/gel-icon.woff');

//copy files to docs
copy('js/gel.js', '../docs/js/gel.js');
copy('css/gel.css', '../docs/css/gel.css');
copy('css/gel-site.css', '../docs/css/gel-site.css');
copy('css/icons/gel-icon.svg', '../docs/css/icons/gel-icon.svg');
copy('css/icons/gel-icon.ttf', '../docs/css/icons/gel-icon.ttf');
copy('css/icons/gel-icon.woff', '../docs/css/icons/gel-icon.woff');

/* Deploy Process
  0. increase version num and date in gel.scss
  1. uncomment .gel class in gel.scss
  2. generate the gel.css file
  3. save gel.css as gel-scoped.css
  4. remove the empty .gel class inside the stylesheet, .gel html => html.gel
  5. rename selector .gel body {} => .gel {}
  6. comment out .gel in scss and re generate new gel.css
  7. run minify-css
  8. copy files to S3
  9. don't forget font icons
*/

?>
