<!-- ******************
*** T2 product template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

   <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-light" role="navigation">
       <div class="container <?php echo $pageLayout ?>">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>site-images/logo-navy.png" width="100"/><?php endblock() ?></a></li>
         </ul>
       </div>
     </nav>

  <!-- ************  page jumbotron ************ -->
  <header class="jumbotron" role="jumbotron">
    <div class="container <?php echo $pageLayout ?>">
      <?php startblock('jumbotron');?>
      <?php endblock()?>
    </div>
  </header>

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
