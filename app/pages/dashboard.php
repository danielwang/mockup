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
            <li><i class="gel-icon-bell gel-icon-sm text-red"></i> <a class="link-alt" href="#">2 applications are incomplete for more than 5 days.</a></li>
            <li><i class="gel-icon-bell gel-icon-sm text-danger"></i><a class="link-alt" href="#"> This has been incomplete for more than 1 day</a></li>
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
            <h3>My tasks</h3>
            <div class="card h-100">
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
          <h3>Assigned Tasks</h3>
          <div class="card h-100 d-flex justify-content-center align-items-center">
            <svg width="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 234.1 214.1" style="enable-background:new 0 0 234.1 214.1;" xml:space="preserve">
            <style type="text/css">
              .st0{fill:#C3D4E2;}
              .st1{fill:#A2B7CC;}
              .st2{fill:#72889C;}
            </style>
            <path class="st0" d="M169.5,32.1h-66.2v19.1c0,12.1-9.9,21.9-21.9,21.9H60.8v102.5c0,3,2.5,5.5,5.5,5.5h103.2c3,0,5.5-2.5,5.5-5.5
              v-138C175,34.6,172.5,32.1,169.5,32.1z"/>
            <path class="st1" d="M91.7,22.7L49.3,61.1L77.2,62c0,0,14.6-0.9,14.6-13.5S91.7,22.7,91.7,22.7z"/>
            <path class="st2" d="M80.4,64.7H47.5v-5.5h32.9c4.5,0,8.2-3.7,8.2-8.2V21h5.5v30C94.1,58.6,87.9,64.7,80.4,64.7z"/>
            <path class="st2" d="M176,17.7H90.7l-45.8,42v122.2c0,7.5,6.1,13.7,13.7,13.7H176c7.5,0,13.7-6.1,13.7-13.7V31.4
              C189.7,23.9,183.6,17.7,176,17.7z M58.5,190.1c-4.5,0-8.2-3.7-8.2-8.2V62.1l42.4-38.8H176c4.5,0,8.2,3.7,8.2,8.2v150.4
              c0,4.5-3.7,8.2-8.2,8.2"/>
            <path class="st2" d="M118,99.7h39.5c1.5,0,2.6-1.7,2.6-3.9c0-2.2-1.1-3.9-2.5-3.9H118c-1.4,0-2.5,1.7-2.5,3.9
              C115.5,97.9,116.6,99.7,118,99.7z"/>
            <path class="st2" d="M100.9,84.7c-1.3-1.3-3.5-1.3-4.8,0l-9.6,9.6l-3.8-3.8c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8
              c0,0,6.1,6.1,6.1,6.1c1.3,1.3,3.5,1.3,4.8,0l12-12C102.2,88.2,102.2,86.1,100.9,84.7L100.9,84.7z"/>
            <path class="st2" d="M157.6,119.6H118c-1.4,0-2.5,1.7-2.5,3.9c0,2.2,1.1,3.9,2.5,3.9h39.5c1.5,0,2.6-1.7,2.6-3.9
              C160,121.3,158.9,119.6,157.6,119.6z"/>
            <path class="st2" d="M100.9,112.7c-1.3-1.3-3.5-1.3-4.8,0l-9.6,9.6l-3.8-3.8c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8
              c0,0,6.1,6.1,6.1,6.1c1.3,1.3,3.5,1.3,4.8,0l12-12C102.2,116.2,102.2,114.1,100.9,112.7L100.9,112.7z"/>
            <path class="st2" d="M157.6,147.2H118c-1.4,0-2.5,1.7-2.5,3.9c0,2.2,1.1,3.9,2.5,3.9h39.5c1.5,0,2.6-1.7,2.6-3.9
              C160,149,158.9,147.2,157.6,147.2z"/>
            <path class="st2" d="M100.9,140.7c-1.3-1.3-3.5-1.3-4.8,0l-9.6,9.6l-3.8-3.8c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8
              c0,0,6.1,6.1,6.1,6.1c1.3,1.3,3.5,1.3,4.8,0l12-12C102.2,144.2,102.2,142.1,100.9,140.7L100.9,140.7z"/>
            <path class="st2" d="M118,72h39.5c1.5,0,2.6-1.7,2.6-3.9c0-2.2-1.1-3.9-2.5-3.9H118c-1.4,0-2.5,1.7-2.5,3.9
              C115.5,70.3,116.6,72,118,72z"/>
            </svg>
            <h5 class="mt-4 mb-3 text-muted">There are no task, would you like to add one? </h5>
          </div>
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
