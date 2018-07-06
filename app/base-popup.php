<!-- ******************
*** T2 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php'; ?>

   <?php emptyblock('page-notification') ?>
<?php startblock('popup-top');?>
<?php endblock()?>
<!-- ************  page header ************ -->
<?php startblock('page-header');?>
    <header id="gel-header" role="banner" class="pt-0">
        <div class="container">
          <?php startblock('page-tabs') ?>
          <?php endblock() ?>
    </header>
<?php endblock()?>

<!-- ************  page body ************ -->
		<main id="gel-main" role="main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
    <div class="main-footer border-top fixed-bottom p-3 bg-white">
      <section class="container">
        <div class="d-flex">
          <button type="button" class="btn btn-outline-secondary mr-auto"><i class="gel-icon-angle-left"></i> Previous</button>
          <button type="button" class="btn btn-outline-secondary">Next <i class="gel-icon-angle-right"></i></button>
        </div>
      </section>
    </div>
<?php include '_foot.html';?>
