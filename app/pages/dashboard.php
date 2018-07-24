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
<?php startblock('page-top');?>
<div id="gel-masthead" class="bg-white mb-3 p-3">
    <div class="container">
      <div class="job-filters">
          <?php for ($x =1; $x <= 7; $x++) {?>
                <div class="ml-2 mr-2"><span class="circle">5</span><span>job status</span></div>
          <?php } ?>
      </div>
    </div>
</div>
<?php endblock()?>
<?php startblock('page-body');?>
<div class="card">
  <?php for ($x =1; $x <= 10; $x++) {?>
    <div class="row">
      <div class="col-2 col-lg-1 text-center">
        <i class="gel-icon-user gel-icon-2x"></i> <span class="text-20">12</span>
      </div>
      <div class="col-10 col-lg-4">
        <h5><a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">Customer Sales &amp; Service Consultant</a></h5>
      </div>
      <div class="offset-2 offset-lg-0 col-lg-2">Approved to advertise</div>
      <div class="offset-2 offset-lg-0 col-lg-2">#J9827364</div>
      <div class="offset-2 offset-lg-0 col-lg-2">Aaron Hardy</div>
      <div class="offset-2 offset-lg-0 col-lg-1">5 (9)</div>
      <!-- <div class="col-2 col-lg-3">
        <ul class="list-unstyled">
            <li>2 new applications
                <a href="#1">View</a>
            </li>
            <li>5 applications in Offer approval commenced for more than 3 days<text>.</text>
                <a href="#">View</a>
            </li>
        </ul>
      </div> -->
    </div>
    <hr>
  <?php } ?>
</div>
<?php endblock()?>
