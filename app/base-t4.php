<!-- ******************
*** T4 special page, eg . 404 500 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>
    <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
       <div class="container <?php echo $pageLayout ?>">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pu-logo.png" width="135"/><?php endblock() ?></a></li>
         </ul>
       </div>
     </nav>
  <!-- ************  page body ************ -->
	<main id="gel-main" role="main">
		<section class="container<?php echo $pageLayout ?>">
			<?php startblock('page-body')?>
			<?php endblock()?>
		</section>
	</main>
  <!-- ************  page footer ************ -->

  <?php include '_foot.html';?>
