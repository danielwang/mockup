<?php

// Get relative url
 $resURL = getRelativeUrl();

 function getRelativeUrl(){
   $uri = $_SERVER['REQUEST_URI'];
   $path = trim(parse_url($uri, PHP_URL_PATH), '/');
   $level = count(explode('/', $path));
   //var_dump($level); // 2 is index.php
   //echo $level;

   if($level == 2){
     $resURL = '';
   } elseif ($level == 3) {
     $resURL = '';
   } elseif ($level == 4) {
     $resURL = '../';
   } elseif ($level == 5) {
     $resURL = '../../';
   }
   return $resURL;
 }

 // Reset this to compile large nesting level of less
 ini_set('xdebug.max_nesting_level', 500);
 // remove old pageup css if it exists, every time refresh page
 // $cssfile = $resURL . 'dist/css/pageup-gel.css';
 // if (file_exists($cssfile)) {
 // 	unlink($cssfile);
 // }


  //take the scss to generate the css
 $cssfile = $resURL . 'css/gelmock-site.css';
 if (file_exists($cssfile)) {
 	unlink($cssfile);
 }

 // Compile scss to output a css file
 require $resURL . 'vendor/scssphp/scss.inc.php';
 use Leafo\ScssPhp\Compiler;

 $scss = new Compiler();
 $scss->setImportPaths($resURL ."build/gel/");
 //$scssIn = file_get_contents('build/bootstrap/bootstrap.scss');
 $cssOut = $scss->compile('@import "gelmock-site.scss"');
 file_put_contents($resURL . 'css/gelmock-site.css', $cssOut);

?>
