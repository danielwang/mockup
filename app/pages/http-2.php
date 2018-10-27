<?php $pageTitle = "HTTPS"; include '../base-t2.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
    <div class="col-lg-4 col-xxl-3">
      <div class="wizard wizard-vertical">
      <div class="wizard-step complete">
        <a class="wizard-dot" href="#"></a>
        <h5 class="wizard-stepnum">Step 1</h5>
        <div class="wizard-info">Lorem ipsum dolor sit amet.</div>
      </div>
      <div class="wizard-step complete">
        <a class="wizard-dot" href="#"></a>
        <h5 class="wizard-stepnum">Step 2</h5>
        <div class="wizard-info">Vestibulum ante ipsum primis in faucibus orci luctus et.
        </div>
      </div>
      <div class="wizard-step active">
        <a class="wizard-dot" href="#"></a>
        <h5 class="wizard-stepnum">Step 3</h5>
        <div class="wizard-info">Ultrices posuere cubilia Curae.</div>
      </div>

      <div class="wizard-step disabled">
        <a class="wizard-dot" href="#"></a>
        <h5 class="wizard-stepnum">Step 4</h5>
        <div class="wizard-info">Duis porta ipsum vitae mi bibendum bibendum.</div>
      </div>
      <div class="wizard-step disabled">
        <a class="wizard-dot" href="#"></a>
        <h5 class="wizard-stepnum">Step 5</h5>
        <div class="wizard-info">Lorem ipsum dolor sit amet.</div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-xxl-9">

  </div>
</div>
<?php endblock()?>
