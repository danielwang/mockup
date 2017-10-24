<!-- ******************
*** T1 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
  include_once 'partials/menu.html';
  ?>
		<main class="content-wrapper">
      <!-- jumbotron -->
      <?php startblock('top') ?>
        <div class="jumbotron">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-7 col-lg-9">
                <?php emptyblock('page-title') ?>
              </div>
              <div class="page-action hidden-xs col-sm-6 col-md-5 col-lg-3">
                <?php emptyblock('page-action') ?>
              </div>
            </div>
            <div class="sub-page">
              <?php emptyblock('sub-page') ?>
            </div>
          </div>
        </div>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include 'foot.html';?>
