<!-- ******************
*** T2 SPA template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

<!-- ************ navbar ************ -->
<nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
  <div class="container-fluid">
    <!-- logo  -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
    </ul>
    <ul class="navbar-nav">
      <!-- user panel -->
      <?php include ("_partials/nav/user-panel.html");?>
      <!-- help -->
      <?php include ("_partials/nav/help.html");?>
    </ul>
  </div>
</nav>
<!-- ************  page header ************ -->
<?php startblock('page-header');?>
  <header id="gel-header" role="banner">
      <div class="container<?php echo $pageLayout ?>">
        <div class="row">
          <?php if($pageAction == true) { ?>
          <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0">
            <h1 class="page-title"><?php echo $pageTitle  ?></h1>
            <blockquote class="tagline"><?php emptyblock('page-tagline');?></blockquote>
          </div>
          <div class="page-actions col-lg-4 mt-2 mt-lg-0">
              <?php startblock('page-actions') ?>
              <?php endblock()?>
          </div>
        <?php } else {?>
          <div class="col-12">
            <h1 class="page-title"><?php echo $pageTitle  ?></h1>
            <blockquote class="tagline"><?php emptyblock('page-tagline');?></blockquote>
          </div>
        <?php }?>
        </div>
      </div>
  </header>
  <?php endblock() ?>
  <!-- ************  page body ************ -->
	<main id="gel-main" role="main">
    <?php startblock('page-top')?>
    <?php endblock()?>
		<section class="container <?php echo $pageLayout ?>">
			<?php startblock('page-body')?>
			<?php endblock()?>
		</section>
	</main>
  <!-- ************  page footer ************ -->

  <?php include '_foot.html';?>
