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
          <ul class="page-tabs nav mt-0" role="tablist">
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
    <div class="main-footer border-top fixed-bottom p-3 bg-white">
      <section class="container">
        <div class="d-flex">
          <button type="button" class="btn btn-outline-secondary mr-auto"><i class="gel-icon-dropdown"></i> Previous</button>
          <button type="button" class="btn btn-outline-secondary">Next <i class="gel-icon-dropdown"></i></button>
        </div>
      </section>
    </div>
<?php include '_foot.html';?>
