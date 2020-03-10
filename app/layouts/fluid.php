<?php $blokk = false; $parent = "adm"; $pageAction = true; $pageLayout="-fluid"; $pageTitle = "Fluid Layout"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
  <span class="item">
      <button type="button" class="btn btn-primary">Action</button>
  </span>
<?php endblock() ?>

<?php startblock('page-body');?>
    <div class="vh-70 rounded border demo-block d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="align-self-center text-muted">Fluid 100% width container 
            </h1>
            <?php include "../_partials/_viewport-detector.html" ?>
        </div>
    </div>
<?php endblock()?>
