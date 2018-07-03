<?php $pageTitle = "Settings"; $parent = "adm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Settings
<?php endblock() ?>

<?php startblock('page-tabs') ?>
  <ul class="page-tabs nav" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="Tab one" aria-selected="true">Configure</a></li>
    <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="Tab two" aria-selected="">Settings</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="Tab three" aria-selected="">Knowledge Portal</a></li>
    <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="Tab four" aria-selected="">Client Bundles</a></li>
  </ul>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row">
<div class="col-sm-2">
  <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-ctrl active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked="checked">
          Home
        </label>
        <label class="btn btn-ctrl">
          <input type="radio" name="options" id="option2" autocomplete="off">
          Tags
        </label>
    </div>
  </div>
  <div class="offset-sm-1 col-sm-6">
    <div class="input-group mb-3">
      <input type="text" class="form-control" aria-label="Search" aria-describedby="settings-search">
      <div class="input-group-append">
        <span class="btn input-group-text" id="settings-search">Search</span>
      </div>
    </div>
  </div>
</div>
<div class="card mt-4">
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action active"><i class="gel-icon-job-o"></i> Jobs</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-analytics-o"></i> Sourcing</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-application-o"></i> Offers</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-onboarding-o"></i> Onboarding</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-journal-o"></i> Performance</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-learning-o"></i> Learning</a>
        <a href="#" class="list-group-item list-group-item-action disabled"><i class="gel-icon-orgchart-o"></i> Succession</a>
        <a href="#" class="list-group-item list-group-item-action disabled"><i class="gel-icon-salary-o"></i> Compensation</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-copy-o"></i> Integration</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-copy-o"></i> Third Party Settings</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="gel-icon-copy-o"></i> Other</a>
      </div>
    </div>
    <div class="col-sm-8 col-md-9">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <h3>Jobs</h3>
          <ul>
            <li class="col-sm-6"><a href="#">Recruitment Processes</a></li>
            <li class="col-sm-6"><a href="#">Job Approval</a></li>
          </ul>
          <h4>Job Card fields</h4>
          <ul class="row">
              <li class="col-sm-6"><a href="#">Agreement Types</a></li>
              <li class="col-sm-6"><a href="#">Companies</a></li>
              <li class="col-sm-6"><a href="#">Contract Types</a></li>
              <li class="col-sm-6"><a href="#">Cost Centres</a></li>
              <li class="col-sm-6"><a href="#">Generic Lists</a></li>
              <li class="col-sm-6"><a href="#">Industries</a></li>
              <li class="col-sm-6"><a href="#">Job Sectors</a></li>
              <li class="col-sm-6"><a href="#">Job Status</a></li>
              <li class="col-sm-6"><a href="#">Job Types</a></li>
              <li class="col-sm-6"><a href="#">Locations</a></li>
              <li class="col-sm-6"><a href="#">Organisational Hierarchy</a></li>
              <li class="col-sm-6"><a href="#">Pay Scales</a></li>
              <li class="col-sm-6"><a href="#">Personnel Areas</a></li>
              <li class="col-sm-6"><a href="#">Reasons</a></li>
              <li class="col-sm-6"><a href="#">Roles</a></li>
              <li class="col-sm-6"><a href="#">Sites</a></li>
              <li class="col-sm-6"><a href="#">Work Availability Preferences</a></li>
              <li class="col-sm-6"><a href="#">Work Types</a></li>
          </ul>
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
      </div>
    </div>
  </div>
</div>



<?php endblock()?>
