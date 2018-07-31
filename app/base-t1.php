<!-- ******************
*** T1 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php'; ?>

   <?php emptyblock('page-notification') ?>
   <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
         <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close-o gel-icon-2x"></i></a>

         <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="brand logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a>
         <?php include ("_partials/menu/user-panel.html");?>

         <menu class="scroll">
           <?php include ("_partials/menu/${parent}.html");?>
         </menu>
       </aside>
  <!-- ************ topbar ************ -->
  <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
      <div class="container">
        <!-- logo  -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="#" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i aria-hidden="true" class="gel-icon-menu gel-icon-2x"></i></a></li>
          <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
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


  <!-- ************  page header ************ -->
  <?php startblock('page-header');?>
      <header id="gel-header" role="banner">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8">
                <h1 class="page-title"><?php echo $pageTitle  ?></h1>
              </div>
              <div class="page-actions col-md-3 col-lg-4 mt-2 align-items-start">
                  <?php emptyblock('page-actions') ?>
              </div>
            </div>
          </div>
      </header>
  <?php endblock()?>
 <!-- ************  page sub pages ************ -->
  <?php startblock('page-tabs') ?>
  <?php endblock() ?>

  <!-- ************  page body ************ -->
	<main id="gel-main" role="main">
    <?php startblock('page-top')?>
    <?php endblock()?>
		<section class="container">
			<?php startblock('page-body')?>
			<?php endblock()?>
		</section>
	</main>
  <!-- ************  page footer ************ -->
  <footer id="gel-footer" role="footer">
    <div class="container">
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
