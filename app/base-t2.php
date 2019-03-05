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
