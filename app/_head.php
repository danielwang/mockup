<?php
  include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en" class="gel">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="noindex">
      <title><?php echo ($pageTitle) ?> - <?php echo ($site) ?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <meta name="description" content="PageUp GEL Templates">
      <meta name="author" content="daniel.wang" >
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="<?php echo ($resURL) ?>css/gel.css">
      <link rel="stylesheet" href="<?php echo ($resURL) ?>css/gel-site.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- IE fix: polyfill js must be in head, so IE render content properly-->
  	  <script type="text/javascript" src="<?php echo ($resURL) ?>js/polyfill.min.js"></script>
  </head>
  <body>
    <a href="#gel-main" class="sr-only sr-only-focusable">Skip to main content</a>
    <?php if($site=="MockUp") { ?>
      <script>
      function popupWindow(url) {
         window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=50,width=1024,height=800");
      }
      </script>
    <?php } ?>   
