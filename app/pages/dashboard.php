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
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <ul class="page-tabs nav" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#current-jobs" role="tab" aria-controls="Tab one" aria-selected="true">Current Jobs</a></li>
        <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Tasks</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Workbench</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Manager Activities</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Action Performed</a></li>
      </ul>
    </div>
</nav>
<?php endblock() ?>

<?php startblock('page-body');?>

<div class="tab-content">
  <!-- ****************  current jobs ********************-->
  <div class="tab-pane d-print-block show active" id="current-jobs" role="tabpanel" aria-labelledby="applications-tab">
    <?php startblock('page-top');?>
    <div id="gel-masthead" class="mb-3 p-3">
        <div class="container">
          <div class="job-filters">
              <?php for ($x =1; $x <= 17; $x++) {?>
                    <div class="ml-2 mr-2"><span class="circle">5</span><span>job status</span></div>
              <?php } ?>
          </div>
        </div>
    </div>
    <?php endblock()?>
    <div class="card">
      <div class="row">
        <div class="col-3 col-lg-2 text-center"><h6>Applications</h6></div>
        <div class="col-9 col-md-5 col-lg-4"><h6>Jobs</h6></div>
        <div class="col-9 col-md-5 col-lg-2"><h6>Status</h6></div>
        <div class="col-md-3 col-lg-2"><h6>Recruiter</h6></div>
        <div class="col-md-3 col-lg-1 text-nowrap"><h6>Positions</h6></div>
        <div class="col-md-3 col-lg-1 text-nowrap"><h6>Vacancies</h6></div>
      </div>

    <?php for ($x =1; $x <= 10; $x++) {?>
      <hr>
      <div class="row mb-2">
        <div class="col-3 col-lg-2 d-flex align-items-center justify-content-center">
          <i class="gel-icon-user gel-icon-lg"></i> <span class="text-20">18</span>
          <span class="badge badge-warning">6 new</span>

        </div>
        <div class="col-9 col-md-5 col-lg-4">
          <h5><a href="#"><i class="gel-icon-info-pointer"></i></a>
              <a href="job-card">Retail Customer Service Officer</a> </h5>
          <!-- <p><small>53302044</small></p> -->
        </div>
        <div class="col-md-3 col-lg-2">Approved to advertise</div>
        <div class="col-md-3 col-lg-2">Arnold Schwarzenegger</div>
        <div class="col-md-3 col-lg-1 text-center">12</div>
        <div class="col-md-3 col-lg-1 text-center">10</div>
        <div class="offset-lg-2 col-lg-10">
          <ul class="list-unstyled">
            <li><i class="gel-icon-bullhorn"></i> <a class="link-alt" href="#">2 applications are incomplete for more than 5 days.</a></li>
            <li><i class="gel-icon-bullhorn"></i><a class="link-alt" href="#"> This has been incomplete for more than 1 day</a></li>
          </ul>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
  <!-- ****************  tasks ********************-->
  <div class="tab-pane d-print-block show" id="tasks" role="tabpanel" aria-labelledby="applications-tab">
    <div class="row">
      <div class="col-md-6">
          <h3>You tasks</h3>
      </div>
      <div class="col-md-6">
        <h3>Assigned Tasks</h3>
      </div>
    </div>
      <div class="row">
        <div class="col-md-6">
            <div class="card">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="col-md-6">
          <div class="card"></div>
        </div>
      </div>
  </div>
  <!-- ****************  workbench ********************-->
  <div class="tab-pane d-print-block show" id="workbench" role="tabpanel" aria-labelledby="applications-tab">
    <div class="row">
      <div class="col-md-9">
          <div class="card">
            <form action="/upload-target" class="dropzone gel-dropzone needsclick dz-clickable">
               <div class="dz-message needsclick gray">
                 <h3 class="text-muted">Drag &amp; Drop files here</h3>
                 <span class="note needsclick">
                   Or
                   <a href="#_">browse</a>
                   from local drive
                 </span>
                 <p>
                   <small>Max 5MB in size, Word, PDF, or JPG formats</small>
                 </p>
               </div>
             </form>

             <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
      <div class="col-md-3">
        <div class="alert">
          <h5>Hints</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure. </p>
          <p>Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>
    </div>
  </div>
  <!-- ****************  tasks ********************-->
  <div class="tab-pane d-print-block show" id="manager-activities" role="tabpanel" aria-labelledby="applications-tab">
  </div>
  <!-- ****************  tasks ********************-->
  <div class="tab-pane d-print-block show" id="performed-actions" role="tabpanel" aria-labelledby="applications-tab">
  </div>
<?php endblock()?>
