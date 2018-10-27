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

   <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
       <div class="container">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
         </ul>
       </div>
     </nav>

  <!-- ************  page header ************ -->
  <?php startblock('page-header');?>
      <header id="gel-header" role="banner">
          <div class="container<?php echo $pageLayout ?>">
            <div class="row">
              <?php if($pageAction == true) { ?>
              <div class="col-md-9 col-lg-8">
                <h1 class="page-title"><?php echo $pageTitle  ?></h1>
                <blockquote class="tagline"><?php emptyblock('page-tagline');?></blockquote>
              </div>
              <div class="page-actions col-md-3 col-lg-4 mt-2 align-items-start">
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
    <?php startblock('page-top')?>
    <?php endblock()?>
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
