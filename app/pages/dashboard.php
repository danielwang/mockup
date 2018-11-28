<?php $pageTitle = "Recruitment Dashboard"; $pageAction = true; $parent = "adm"; include '../base-t1.php';?>

<?php //startblock('page-notification') ?>
    <!-- <div id="gel-notification" class="gel-notification-error">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error occurred while importing Job file last night. One or more mandatory fields were not provided.
      <button class="btn btn-sm btn-round">Find more info</button>
      <button href="#" type="button" class="close"><i class="fa fa-times"></i></button>
    </div> -->
<?php // endblock() ?>
<?php startblock('page-actions') ?>
  <span class="item mr-3">
    <a class="dropdown-toggle text-center" href="#_" title="Help" data-toggle="dropdown" data-persist="true">
      <i class="gel-icon-lg gel-icon-user" aria-hidden="true"></i> <span>Team and Users</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-0">
      <?php include "partials/_team-user-selector.html" ?>
    </div>
  </span>
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <nav class="page-tabs nav" role="tablist">
        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#current-jobs" role="tab" aria-controls="current-jobs" aria-selected="true">Current Jobs</a>
        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Tasks</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Workbench</a>
        <a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Manager Activities</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Action Performed</a>
      </nav>
    </div>
</nav>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="tab-content">
  <!-- ****************  current jobs ********************-->
  <div class="tab-pane d-print-block show active" id="current-jobs" role="tabpanel" aria-labelledby="applications-tab">
    <?php startblock('page-top');?>
    <?php include "partials/_circles.html" ?>
    <?php endblock()?>
    <?php include "partials/_current-jobs.html" ?>
  </div>
  <!-- ****************  tasks ********************-->
  <div class="tab-pane d-print-block show" id="tasks" role="tabpanel" aria-labelledby="applications-tab">
      <?php include "partials/_tasks.html" ?>
  </div>
  <!-- ****************  workbench ********************-->
  <div class="tab-pane d-print-block show" id="workbench" role="tabpanel" aria-labelledby="applications-tab">
      <?php include "partials/_workbench.html" ?>
  </div>
  <!-- ****************  manager activities ********************-->
  <div class="tab-pane d-print-block show" id="manager-activities" role="tabpanel" aria-labelledby="applications-tab">
      <?php include "partials/_manager-activities.html" ?>
  </div>
  <!-- ****************  tasks ********************-->
  <div class="tab-pane d-print-block show" id="performed-actions" role="tabpanel" aria-labelledby="applications-tab">
    <?php include "partials/_action-performed.html" ?>
  </div>
<?php endblock()?>
