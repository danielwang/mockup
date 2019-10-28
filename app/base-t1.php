<!-- ******************
*** T1 generic template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

<?php startblock('page-notification') ?>
<div role="notification" class="mb-0 alert notification-info alert-dismissible fade show"><i aria-hidden="true" class="gel-icon-info gel-icon-lg"></i>
    This is a info notification
    <a href="#" class="notification-link">check it out!</a><button type="button" data-dismiss="alert" aria-label="Close" class="close"><i aria-hidden="true" class="gel-icon-close gel-icon-lg"></i></button></div>
<?php endblock() ?>

   <!-- ************ navbar ************ -->
   <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
       <div class="container-fluid">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a href="#" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i aria-hidden="true" class="gel-icon-menu gel-icon-lg"></i></a></li>
           <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
         </ul>
         <ul class="navbar-nav">
           <?php include ("_partials/nav/${parent}.html");?>
           <!-- user panel -->
           <?php include ("_partials/nav/user-panel.html");?>
           <!-- help -->
           <?php include ("_partials/nav/help.html");?>
         </ul>
       </div>
     </nav>
   <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
         <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close gel-icon-lg"></i></a>

         <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pu-logo.png" width="100"/><?php endblock() ?></a>
         <?php include ("_partials/menu/user-panel.html");?>

         <menu class="scroll">
           <?php include ("_partials/menu/${parent}.html");?>
         </menu>
       </aside>

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
  <?php endblock()?>
 <!-- ************  page sub pages ************ -->
  <?php startblock('page-tabs') ?>
  <?php endblock() ?>

  <!-- ************  page body ************ -->
	<main id="gel-main" role="main">
		<section class="container<?php echo $pageLayout ?>">
			<?php startblock('page-body')?>
			<?php endblock()?>
    </section>
  </main>
  <?php include ("_drawer.html");?> 
  <!-- ************  page footer ************ -->
<?php include '_foot.html';?>
