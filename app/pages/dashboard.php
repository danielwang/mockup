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
<table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Applicants</th>
          <th>Position</th>
          <th>Number</th>
          <th>Status</th>
          <th>Hiring Manager</th>
          <th>Positions</th>
          <th>Vacancies</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td>
            <a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">International Consultant on Early Childhood Development(National ECD Scheme)</a>
          </td>
          <td>942130</td>
          <td>Approved to advertise</td>
          <td></td>
          <td>
            1
          </td>
          <td>
            2
          </td>
          <td><a href="#">No offer</a></td>
        </tr>
      </tbody>
    </table>
<div class="card">
  <div class="row">
    <div class="col-2 col-lg-1 text-center">
      <i class="gel-icon-user gel-icon-2x"></i> <span class="text-20">12</span>
    </div>
    <div class="col-10 col-lg-11">
      <!-- <p><span class="badge badge-primary"></span></p> -->
      <h4><a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">Customer Sales &amp; Service Consultant</a></h4>

        <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
            <span class=""><sup class="text-black-50">Status:</sup><br/> <span>Approved to advertise</span></span>
            <span class=""><sup class="text-black-50">Job Number:</sup> <br/><span>942130</span></span>
            <span class=""><sup class="text-black-50">Hiring Manager:</sup> <br/><span>Daniel Wang</span></span>
            <span class=""><sup class="text-black-50">Positions:</sup> <br/><span> 6</span></span>
            <span class=""><sup class="text-black-50">Vacancies:</sup> <br/><span> 10</span></span>
        </div>
        <ul class="list-unstyled">
            <li>2 new applications
                <a href="#1">View</a>
            </li>
            <li>5 applications in Offer approval commenced for more than 3 days<text>.</text>
                <a href="#">View</a>
            </li>
        </ul>
      </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-2 col-lg-1 text-center">
      <i class="gel-icon-user gel-icon-2x"></i> <span class="text-20">12</span>
    </div>
    <div class="col-10 col-lg-11">
      <!-- <p><span class="badge badge-primary"></span></p> -->
      <h4><a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">Customer Sales &amp; Service Consultant</a></h4>

        <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
            <span class="d-flex justify-content-sm-between"><sup class="text-black-50">Status:</sup><br/> <span>Approved to advertise</span></span>
            <span class="d-flex justify-content-sm-between"><sup class="text-black-50">Job Number:</sup> <br/><span>942130</span></span>
            <span class="d-flex justify-content-sm-between"><sup class="text-black-50">Hiring Manager:</sup> <br/><span>Daniel Wang</span></span>
            <span class="d-flex justify-content-sm-between"><sup class="text-black-50">Positions:</sup> <br/><span> 6</span></span>
            <span class="d-flex justify-content-sm-between"><sup class="text-black-50">Vacancies:</sup> <br/><span> 10</span></span>
        </div>
        <ul class="list-unstyled">
            <li>2 new applications
                <a href="#1">View</a>
            </li>
            <li>5 applications in Offer approval commenced for more than 3 days<text>.</text>
                <a href="#">View</a>
            </li>
        </ul>
      </div>
  </div>
</div>
<?php endblock()?>
