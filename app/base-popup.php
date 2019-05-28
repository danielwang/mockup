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

<!-- ************  page sub pages ************ -->
<nav id="gel-subpages" role="navigation">
   <div class="container">
     <?php startblock('page-tabs') ?>
     <?php endblock() ?>
   </div>
</nav>
<!-- ************  page body ************ -->
<main id="gel-main" class="pb-5" role="main">
	<section class="container">
		<?php startblock('page-body')?>
		<?php endblock()?>
    <div class="my-5 py-5"></div>
	</section>
</main>
<footer class="main-footer border-top fixed-bottom p-2 bg-white d-print-none">
  <section class="container">
    <div class="row">
      <div class="d-none d-md-block col-md-6 text-left col-lg-4 offset-lg-4 text-lg-center">
        <button type="button" class="btn btn-outline-primary">Close</button>
      </div>
      <div class="col-md-6 col-lg-4 text-right">
        <fieldset class="buckets" data-toggle="tooltip" data-placement="bottom" data-original-title="Buckets" aria-label="3 buckets" onclick="selectBucket(event)" style="vertical-align: middle;">
          <div class="bucket-1 bucket-lg">
            <input type="checkbox" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
            <label for="radio-b-l-1">
              <span class="sr-only">
                Bucket 1</span>
            </label>
          </div>
          <div class="bucket-2 bucket-lg">
            <input type="checkbox" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
            <label for="radio-b-l-2">
              <span class="sr-only">
                Bucket 2</span>
            </label>
          </div>
          <div class="bucket-3 bucket-lg">
            <input type="checkbox" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
            <label for="radio-b-l-3">
              <span class="sr-only">
                Bucket 3</span>
            </label>
          </div>
        </fieldset>
        <span class="d-inline-block">
          <button type="button" class="btn btn-sm btn-ctrl"><i class="gel-icon-angle-left"></i></button>
          <button type="button" class="btn btn-sm btn-ctrl ml-2"><i class="gel-icon-angle-right"></i></button>
        </span>
      </div>
  </section>
</footer>
<?php include '_foot.html';?>
