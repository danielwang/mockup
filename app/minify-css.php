 <?php
  include_once("vendor/minifier.php");
  $css = array(
      "css/gel-scoped.css" => "css/gel-scoped.min.css"
  );
  minifyCSS($css);
?>
