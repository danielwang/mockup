<?php $pageTitle = "Settings"; $parent = "adm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Settings
<?php endblock() ?>

<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <ul class="page-tabs nav" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#configure" role="tab" aria-controls="Tab one" aria-selected="true">Configure</a></li>
        <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#settings" role="tab" aria-controls="Tab two" aria-selected="false">Settings</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#client-bundles" role="tab" aria-controls="Tab four" aria-selected="false">Client Bundles</a></li>
      </ul>
    </div>
</nav>
<?php endblock() ?>

<?php startblock('page-actions') ?>
  <span class="item">
    <a class="text-center" target="_blank" href="https://knowledgeportal.pageuppeople.com" title="Knowledge portal">
      <i class="gel-icon-knowledge-portal" aria-hidden="true"></i> <span>Knowledge Portal</span>
    </a>
  </span>
<?php endblock() ?>

<?php startblock('page-body');?>

<div class="tab-content">
  <div class="tab-pane active" id="configure" role="tabpanel" aria-labelledby="configure-tab">
  <div class="row">
    <div class="col-sm-3 mb-2 mb-sm-0">
      <fieldset>
        <legend class="sr-only">Home or Tags</legend>
        <div class="btn-group btn-group-toggle segmented-control">
          <label>
            <input type="radio" name="options-home-tag" id="option1" autocomplete="off" checked>
            <span class="btn btn-ctrl btn">
              Home
            </span>
          </label>
          <label>
            <input type="radio" name="options-home-tag" id="option2" autocomplete="off">
            <span class="btn btn-ctrl btn">
              Tags
            </span>
          </label>
        </div>
      </fieldset>
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
    <div class="card mt-3">
      <div class="row">
        <div class="col-sm-5 col-xl-3">
          <div class="list-group list-group-flush nav" role="tablist">
            <a class="list-group-item list-group-item-action active" data-toggle="tab" href="#list1" role="tab"><i class="gel-icon-job"></i> Jobs</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list2" role="tab"><i class="gel-icon-sourcing"></i> Sourcing</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list3" role="tab"><i class="gel-icon-application"></i> Offers</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list4" role="tab"><i class="gel-icon-onboarding"></i> Onboarding</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list5" role="tab"><i class="gel-icon-star"></i> Performance</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list6" role="tab"><i class="gel-icon-learning"></i> Learning</a>
            <a class="list-group-item list-group-item-action disabled" data-toggle="tab" href="#list7" role="tab"><i class="gel-icon-succession"></i> Succession</a>
            <a class="list-group-item list-group-item-action disabled" data-toggle="tab" href="#list8" role="tab"><i class="gel-icon-cost"></i> Compensation</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list9" role="tab"><i class="gel-icon-integration"></i> Integration</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list10" role="tab"><i class="gel-icon-configure"></i> Configure</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list11" role="tab"><i class="gel-icon-thirdparty"></i> Third Party Settings</a>
            <a class="list-group-item list-group-item-action" data-toggle="tab" href="#list12" role="tab"><i class="gel-icon-settings"></i> Other</a>
          </div>
        </div>
        <div class="col-sm-7 col-xl-9">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane show active" id="list1" role="tabpanel" aria-labelledby="list-home-list">
              <h3>Jobs</h3>
              <ul class="row list-unstyled">
                <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Recruitment Processes</a></li>
                <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Job Approval</a></li>
              </ul>
              <h4>Job Card fields</h4>
              <ul class="row list-unstyled">
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Agreement Types</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Companies</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Contract Types</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Cost Centres</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Generic Lists</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Industries</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Job Sectors</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Job Status</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Job Types</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Locations</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Organisational Hierarchy</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Pay Scales</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Personnel Areas</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Reasons</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Roles</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Sites</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Work Availability Preferences</a></li>
                  <li class="col-sm-6 col-xl-4 mb-3"><a href="#">Work Types</a></li>
              </ul>
            </div>
            <div class="tab-pane" id="list2" role="tabpanel" aria-labelledby="list-profile-list"><h3>Sourcing</h3></div>
            <div class="tab-pane" id="list3" role="tabpanel" aria-labelledby="list-messages-list"><h3>Offer</h3></div>
            <div class="tab-pane" id="list4" role="tabpanel" aria-labelledby="list-settings-list"><h3>Onboarding</h3></div>
            <div class="tab-pane" id="list5" role="tabpanel" aria-labelledby="list-profile-list"><h3>Performance</h3></div>
            <div class="tab-pane" id="list6" role="tabpanel" aria-labelledby="list-messages-list"><h3>Learning</h3></div>
            <div class="tab-pane" id="list7" role="tabpanel" aria-labelledby="list-settings-list"><h3>Succession</h3></div>
            <div class="tab-pane" id="list8" role="tabpanel" aria-labelledby="list-profile-list"><h3>Compensation</h3></div>
            <div class="tab-pane" id="list9" role="tabpanel" aria-labelledby="list-messages-list"><h3>Integration</h3></div>
            <div class="tab-pane" id="list10" role="tabpanel" aria-labelledby="list-settings-list"><h3>Configure</h3></div>
            <div class="tab-pane" id="list11" role="tabpanel" aria-labelledby="list-profile-list"><h3>Third party settings</h3></div>
            <div class="tab-pane" id="list12" role="tabpanel" aria-labelledby="list-messages-list"><h3>Other</h3></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    2
  </div>
  <div class="tab-pane" id="kp" role="tabpanel" aria-labelledby="kp-tab">
    3
  </div>
  <div class="tab-pane" id="client-bundles" role="tabpanel" aria-labelledby="client-bundles-tab">
    <div class="alert alert-warning" role="alert">
      <i class="gel-icon-warning" aria-hidden="true"></i>
      This page sets the features that are accessible within this instance based on the bundles purchased and activated. Users will see a lock against settings linked to a module they do not own. <br/ >Edit with caution - only bundles that have been purchased by the client should be activated.
    </div>
    <div class="card">
      <div class="row">
          <div class="col-sm-4 col-xl-3">
            <div class="toggle toggle-primary">
              <label>
                <input type="checkbox" checked="">
                <span>Recruitment</span>
              </label>
            </div>
          </div>
          <div class="col-sm-8 col-xl-9">
            <ul class="row list-unstyled">
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Advanced Analytics Report - Standard Analytics</strong><br/> <span class="text-muted">(bAdvancedAnalytics)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Base</strong><br/> <span class="text-muted"> (bBaseModule)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Internal forms</strong><br/> <span class="text-muted"> (bInternalForms)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Intranet</strong><br/> <span class="text-muted"> (bIntranetModule)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Job search</strong><br/> <span class="text-muted"> (bJobSearchModule)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Job template</strong><br/> <span class="text-muted"> (bJobTemplates)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Management reports</strong><br/> <span class="text-muted"> (bManagementReports)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Source management</strong><br/> <span class="text-muted"> (bJobSources)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Survey module</strong><br/> <span class="text-muted"> (bSurvey)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Users and groups</strong><br/> <span class="text-muted"> (bUsersAndGroups)</span></li>
            </ul>
          </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-4 col-xl-3">
            <div class="toggle toggle-primary">
              <label>
                <input type="checkbox" checked="">
                <span>Performance</span>
              </label>
            </div>
          </div>
          <div class="col-sm-8 col-xl-9">
            <ul class="row list-unstyled">
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Advanced Analytics Report - Standard Analytics</strong><br/> <span class="text-muted">(bAdvancedAnalytics)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Base</strong><br/> <span class="text-muted"> (bBaseModule)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Management reports</strong><br/> <span class="text-muted"> (bManagementReports)</span></li>
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Performance management</strong><br/> <span class="text-muted"> (bPerformanceManagement)</span></li>
            </ul>
          </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-4 col-xl-3">
            <div class="toggle toggle-primary">
              <label>
                <input type="checkbox" checked="">
                <span>Advanced Screening - Background Checking</span>
              </label>
            </div>
          </div>
          <div class="col-sm-8 col-xl-9">
            <ul class="row list-unstyled">
              <li class="col-sm-6 col-xl-4 mb-3"><strong>Background checking</strong><br/> <span class="text-muted">(bBackgroundCheckModule)</span></li>
            </ul>
          </div>
      </div>
      <hr>
      <div class="text-center">
        <button class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
