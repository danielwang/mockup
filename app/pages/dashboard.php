<?php $pageTitle = "Recruitment Dashboard"; $parent = "adm"; include '../base-t1.php';?>

<?php //startblock('page-notification') ?>
    <!-- <div id="gel-notification" class="gel-notification-error">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error occurred while importing Job file last night. One or more mandatory fields were not provided.
      <button class="btn btn-sm btn-round">Find more info</button>
      <button href="#" type="button" class="close"><i class="fa fa-times"></i></button>
    </div> -->
<?php // endblock() ?>
<?php startblock('page-tabs') ?>
  <ul class="page-tabs nav" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#configure" role="tab" aria-controls="Tab one" aria-selected="true">Current Jobs</a></li>
    <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#settings" role="tab" aria-controls="Tab two" aria-selected="false">Tasks</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#kp" role="tab" aria-controls="Tab three" aria-selected="false">Workbench</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#client-bundles" role="tab" aria-controls="Tab four" aria-selected="false">Manager Activities</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#kp" role="tab" aria-controls="Tab three" aria-selected="false">Action Performed</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#client-bundles" role="tab" aria-controls="Tab four" aria-selected="false">Teams</a></li>
  </ul>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-10">
    <div class="filter">
      <span class="circle">
        <span>18</span>
      </span>
      <span>Interview</span>
    </div>
  </div>
</div>

<?php endblock()?>
