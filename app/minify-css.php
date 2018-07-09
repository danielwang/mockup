 <?php
  include_once("vendor/minifier.php");
  $css = array(
      "css/gel-scoped.css" => "css/gel-scoped.min.css",
      "css/gel.css" => "css/gel.min.css"
  );
  minifyCSS($css);
?>
