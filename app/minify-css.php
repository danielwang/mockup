 <?php
  // minify css
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
  copy('css/icons/gel-icon.svg', '../docs/css/icons/gel-icon.svg');
  copy('css/icons/gel-icon.ttf', '../docs/css/icons/gel-icon.ttf');
  copy('css/icons/gel-icon.woff', '../docs/css/icons/gel-icon.woff');
?>
