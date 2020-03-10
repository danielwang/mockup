<?php $blokk = false; $pageAction = true; $pageTitle = "Adaptive Layout"; $parent = "adm"; include '../base-t3.php';?>
<?php emptyblock('page-notification') ?>
<?php startblock('page-actions') ?>
  <span class="item">
      <button type="button" class="btn btn-primary">Action</button>
  </span>
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <nav class="page-tabs nav" role="tablist">
        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#current-jobs" role="tab" aria-controls="current-jobs" aria-selected="true">Tab One</a>
        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Tab Two</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Tab Three</a>
        <a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Tab Four</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Tab Five</a>
      </nav>
    </div>
</nav>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="vh-70 rounded border demo-block d-flex justify-content-center align-items-center">
  <div class="text-center">
    <h1 class="align-self-center text-muted">Fixed width container 
    </h1>
    <?php include "../_partials/_viewport-detector.html" ?>
  </div>
</div>
<?php endblock()?>
