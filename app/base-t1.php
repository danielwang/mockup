<!-- ******************
*** T1 product template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

   <!-- Hiring manager centre, client branding -->
   <!-- <?php // if ($parent == "hm"){ ?>
      <header role="Branding header" class="client-branding" style="background-color: #cccccc">
          <div class="container-fluid">
            <img class="logo" src="<?php echo ($resURL) ?>site-images/client-logo.png" alt="client'name logo" />
          </div>
      </header>
   <?php //} ?> -->
   <?php emptyblock('page-notification') ?>
   <!-- ************ topbar ************ -->
   <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
       <div class="container-fluid">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a href="#" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i aria-hidden="true" class="gel-icon-menu gel-icon-2x"></i></a></li>
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
         <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close-o gel-icon-2x"></i></a>

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
                  <?php emptyblock('page-actions') ?>
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
  <!-- ************  page footer ************ -->
  <footer id="gel-footer" role="footer">
    <div class="container<?php echo $pageLayout ?>">
      <div class="d-flex justify-content-end">
        <div class="btn-group dropup">
          <button type="button" class="btn btn-sm btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#1">English (US)</a>
            <a class="dropdown-item" href="#2">Español (Spanish)</a>
            <a class="dropdown-item" href="#3">Deutsch (German)</a>
            <a class="dropdown-item" href="#4">简体中文 (Chinese, Simplified)</a>
            <a class="dropdown-item" href="#5">日本語 (Japanese)</a>
            <a class="dropdown-item" href="#6">Nederlands (Dutch)</a>
          </div>
        </div>
        <span class="align-self-center"> Powered by
        <a href="https://www.pageuppeople.com/powered-by-pageup/" target="_blank">PageUp</a></span>
      </div>
    </div>
  </footer>
<?php include '_foot.html';?>
