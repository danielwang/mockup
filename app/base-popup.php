<!-- ******************
*** T1 template ***
******************  -->
<?php
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
          <ul class="page-tabs nav" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="Tab one" aria-selected="true">Applications</a></li>
            <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="Tab two" aria-selected="">History</a></li>
            <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="Tab three" aria-selected="">CRM</a></li>
            <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="Tab four" aria-selected="">Resume</a></li>
          </ul>
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
<?php include '_foot.html';?>
