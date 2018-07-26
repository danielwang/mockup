<?php $pageTitle = "Recruitment Dashboard"; $parent = "adm"; include '../base-t1.php';?>

<?php //startblock('page-notification') ?>
    <!-- <div id="gel-notification" class="gel-notification-error">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error occurred while importing Job file last night. One or more mandatory fields were not provided.
      <button class="btn btn-sm btn-round">Find more info</button>
      <button href="#" type="button" class="close"><i class="fa fa-times"></i></button>
    </div> -->
<?php // endblock() ?>
<?php startblock('page-actions') ?>
  <span class="item">
    <a class="dropdown-toggle text-center" href="#_" title="Help" data-toggle="dropdown">
      <i class="gel-icon-lg gel-icon-user" aria-hidden="true"></i> <span>Team and Users</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="#1" title="Live support"><i class="gel-icon-support" aria-hidden="true"></i>  Live support</a>
      <a class="dropdown-item" href="#2" title="Knowledge portal"><i class="gel-icon-knowledge-portal" aria-hidden="true" ></i> Knowledge Portal</a>
      <a class="dropdown-item" href="#3" title="Raise support case"><i class="gel-icon-bullhorn" aria-hidden="true"></i> Raise support case</a>
    </div>
  </span>
<?php endblock() ?>
<?php startblock('page-tabs') ?>
  <ul class="page-tabs nav" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#configure" role="tab" aria-controls="Tab one" aria-selected="true">Current Jobs</a></li>
    <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#settings" role="tab" aria-controls="Tab two" aria-selected="false">Tasks</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#kp" role="tab" aria-controls="Tab three" aria-selected="false">Workbench</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#client-bundles" role="tab" aria-controls="Tab four" aria-selected="false">Manager Activities</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#kp" role="tab" aria-controls="Tab three" aria-selected="false">Action Performed</a></li>
  </ul>
<?php endblock() ?>

<?php startblock('page-top');?>
<div id="gel-masthead" class="bg-white mb-3 p-3">
    <div class="container">
      <div class="job-filters">
          <?php for ($x =1; $x <= 17; $x++) {?>
                <div class="ml-2 mr-2"><span class="circle">5</span><span>job status</span></div>
          <?php } ?>
      </div>
    </div>
</div>
<?php endblock()?>
<?php startblock('page-body');?>
<!-- <div class="card">
  <div class="row">
    <div class="col-2 col-lg-1 text-center">
      Applications
    </div>
    <div class="col-10 col-lg-4">
      Job title
    </div>
    <div class="offset-2 offset-lg-0 col-lg-2">Status</div>
    <div class="offset-2 offset-lg-0 col-lg-2">Job ID</div>
    <div class="offset-2 offset-lg-0 col-lg-2">Hiring Manager</div>
    <div class="offset-2 offset-lg-0 col-lg-1">Position</div>
    <div class="col-2 col-lg-3">
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
      <div class="offset-2 offset-lg-0 col-lg-1">5</div>
      <div class="col-2 col-lg-3">
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
  <?php } ?>
</div> -->

<table class="table table-striped table-hover mt-3">
    <caption class="sr-only">List of jobs</caption>
    <thead>
      <tr>
        <th>Applications</th>
        <th scope="col">Job Title</th>
        <th scope="col">Job ID</th>
        <th scope="col">Recruiter
        </th>
        <th scope="col">Status
        </th>
        <th scope="col">Positions</th>
        <th scope="col">Vacancies</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($x =1; $x <= 10; $x++) {?>
      <tr>
        <td><i class="gel-icon-user gel-icon-lg"></i> <span class="text-20">12</span></td>
        <th scope="row"><h5><a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">International Consultant on Early Childhood Development</a></th>
        <td data-title="Job ID">
          <?php echo $x * 2  + 53302042 ?>
        </td>
        <td data-title="Recruiter">Peter Smith</td>
        <td data-title="Status">
          Offer Made
        </td>
        <!-- <td data-title="Applications"><a href="cl"><?php //echo random_int(1, 100) ?></a></td> -->
        <td data-title="Opening date">12</td>
        <td data-title="Closing date">8</td>
        <td data-title="View">
        </td>
      </tr>
      <tr>
        <td><i class="gel-icon-user gel-icon-lg"></i> <span class="text-20">12</span></td>
        <th scope="row"><h5><a href="#"><i class="gel-icon-info-pointer"></i></a> <a href="#">Retail Customer Service Officer </a></th>
        <td data-title="Job ID">
          <?php echo $x + 53302042 ?>
        </td>
        <td data-title="Recruiter"> Arnold Schwarzenegger </td>
        <td data-title="Status">
          Approved to advertise
        </td>

        <!-- <td data-title="Applications"><a href="cl"><?php //echo random_int(1, 100) ?></a></td> -->
        <td data-title="Opening date">9</td>
        <td data-title="Closing date">6</td>
        <td data-title="View">
          <a aria-label="View application" href="#<?php echo $x ?>"><i class="text-red gel-icon-lg gel-icon-bullhorn"></i></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

<?php endblock()?>
