<?php $pageTitle = "Applicant card"; include '../base-popup.php';?>

<?php startblock('popup-top');?>
<div class="notification notification-info d-print-none" role="notification">
  <i class="gel-icon-info gel-icon-lg" aria-hidden="true"></i>
  This applicant has been entered by Referred Candidate <a class="notification-link" href="#">View referral</a>
  <!-- <p> <i class="gel-icon-lock gel-icon-lg" aria-hidden="true"></i>
  You have an exclusive lock on this applicant. Unlock <a class="notification-link" href="#">Unlock</a></p>
  <p> <i class="gel-icon-eye gel-icon-lg" aria-hidden="true"></i>
  This applicant is visible to you only <a class="notification-link" href="#">Release to all users</a></p> -->
</div>
<header id="popup-top" role="header">
    <div class="container">
      <div class="row">
        <div class="order-2 col-md-6 col-lg-7 order-md-1">
          <h2 class="mt-3 my-lg-0">
            <a class="link-alt" data-toggle="collapse" href="#app-details" aria-expanded="false" aria-controls="AppDetails">Daniel Johnson</a>
            <span class="dot-green" data-toggle="tooltip" data-placement="bottom" data-original-title="Active"></span>
          </h2>
        </div>
        <div class="order-1 col-md-6 col-lg-5 d-flex align-items-center justify-content-md-end">
          <fieldset class="buckets" data-toggle="tooltip" data-placement="bottom" data-original-title="Buckets" aria-label="3 buckets" onclick="selectBucket(event)">
            <div class="bucket-1 bucket-lg">
              <input type="checkbox" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
              <label for="radio-b-l-1">
                <span class="sr-only">
                  Bucket 1</span>
              </label>
            </div>
            <div class="bucket-2 bucket-lg">
              <input type="checkbox" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
              <label for="radio-b-l-2">
                <span class="sr-only">
                  Bucket 2</span>
              </label>
            </div>
            <div class="bucket-3 bucket-lg">
              <input type="checkbox" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
              <label for="radio-b-l-3">
                <span class="sr-only">
                  Bucket 3</span>
              </label>
            </div>
          </fieldset>
          <div class="btn-group d-print-none" role="group" aria-label="Applicant actions">
            <button type="button" class="btn btn-ctrl" onclick="javascript: window.print();" aria-label="Print"><i class="gel-icon-print"></i></button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-ctrl dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actions
              </button>
              <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="btnGroupDrop1">
                <div class="max-vh-70 overflow-y-auto scroll p-4">
                  <a class="dropdown-item" href="#">Control</a>
                  <a class="dropdown-item" href="#">Communicate</a>
                  <a class="dropdown-item" href="#">New task/reminder</a>
                  <div class="dropdown-divider"></div>
                  <?php for ($m =1; $m <= 8; $m++) {?>
                  <a class="dropdown-item" href="#">Another action <?php echo $m ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <dl class="row mt-3 collapse show mb-0 d-print-flex" id="app-details" aria-label="Applicant details">
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Gender</dt>
          <dd>Male</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Phone</dt>
          <dd>+61 4123 111 111</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt class="text-sm">Address</dt>
          <dd>91 William Street, Melbourne, VIC, Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt class="text-sm">Email</dt>
          <dd><a href="mailto:peters+daniels@pageuppeople.com">daniel.applicant@company.com</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Birthday</dt>
          <dd>01/01/1999</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Number</dt>
          <dd>10923445</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Nationality</dt>
          <dd>Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Linked Employee</dt>
          <dd><a href="#"> Relink</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Orininal Source</dt>
          <dd><a href="#">Seek</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Profile</dt>
          <dd><a href="#">View</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Job mail</dt>
          <dd>No</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Employment status</dt>
          <dd>Never employed or contracted</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">e-Zines comms hold</dt>
          <dd>
            <div class="toggle toggle-success">
              <label>
                <input type="checkbox" checked="">
                <span>On</span>
              </label>
            </div>
          </dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt class="text-sm">Flags</dt>
          <dd><i data-toggle="tooltip" data-placement="bottom" data-original-title="Label of this icon" class="text-muted gel-icon-bell"></i><i class="text-muted gel-icon-bulb"></i><i class="text-muted gel-icon-car"></i><i class="text-muted gel-icon-globe"></i></dd>
        </span>
      </dl>
    </div>
</header>
<?php endblock()?>

<?php startblock('page-tabs') ?>
<nav class="page-tabs nav mt-0 d-print-none" role="tablist">
  <a class="nav-link active" data-toggle="tab" href="#applications" role="applications" aria-controls="applications" aria-selected="true">Applications</a>
  <a class="nav-link" data-toggle="tab" href="#history" role="History" aria-controls="History" aria-selected="false">History</a>
  <a class="nav-link" data-toggle="tab" href="#crm" role="tab" aria-controls="CRM" aria-selected="false">CRM</a>
  <a class="nav-link" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false">Resume</a>
</nav>
<?php endblock() ?>

<?php startblock('page-body');?>

<div class="tab-content">
  <div class="tab-pane d-print-block show active" id="applications" role="tabpanel" aria-labelledby="applications-tab">
    <h3 class="d-none d-print-block">Applications</h3>
        <div class="card">
          <?php for ($x =1; $x <= 3; $x++) {?>
              <div class="row">
                <div class="mb-4 mb-lg-0 col-md-12 col-lg-6">
                  <div class="position-relative">
                    <a aria-label="View more job info" href="#" class="dropdown-toggle text-center no-caret" title="More job info" data-toggle="dropdown" data-persist="true">
                      <i class="gel-icon-info"></i>
                    </a>
                    <div class="dropdown-menu vw-90 vw-sm-70 vw-lg-50 vw-xl-30" style="z-index:1">
                      <?php include "partials/_i-button.html" ?>
                    </div>
                    <h5 class="d-inline">International Consultant on Early Childhood Development <span class="badge badge-info">Undisclose</span></h5>
                  </div>
                  <div class="row mt-3">
                      <span class="col-6 col-md-3 col-lg-6 col-xxl-3"><dt class="text-sm">Job ID</dt><dd>942130</dd></span>
                      <span class="col-6 col-md-3 col-lg-6 col-xxl-3"><dt class="text-sm">Submit date:</dt><dd>17 Nov 2017</dd></span>
                      <span class="col-6 col-md-3 col-lg-6 col-xxl-3"><dt class="text-sm">Recruiter:</dt><dd><a href="#" class="link-alt">Daniel Wang</a></dd></span>
                      <span class="col-6 col-md-3 col-lg-6 col-xxl-3"><dt class="text-sm">Applied via:</dt><dd><a href="#" class="link-alt">Linkedin</a></dd></span>
                  </div>
                </div>
                <div class="col-6 col-lg-2">
                  <a href="#">Interviewed</a>
                  <p>Status changed 12 May 2018</p>
                </div>
                <div class="col-6 col-lg-1">
                  <a href="#">No offer</a>
                </div>
                <div class="col-6 col-lg-2">
                  <i class="text-muted gel-icon-location"></i><i class="text-muted gel-icon-bullhorn"></i><i class="text-muted gel-icon-info"></i><i class="text-muted gel-icon-lock"></i>
                </div>
                <div class="col-6 col-lg-1 text-lg-right">
                  <div class="dropdown d-inline-block d-print-none" data-toggle="tooltip" data-placement="top" data-original-title="Actions">
                      <button class="btn btn-ctrl btn-sm dropdown-toggle no-caret mr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="gel-icon-ellipsis"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="dropdownMenuButton">
                        <div class="vh-30 overflow-y-auto scroll p-4">
                          <a class="dropdown-item" href="#">Add activity</a>
                          <?php for ($i =1; $i <= 22; $i++) {?>
                          <a class="dropdown-item" href="#">Another action <?php echo $i ?></a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <hr>
          <?php } ?>
        </div>
  </div>
  <div class="tab-pane d-print-block" id="history" role="tabpanel" aria-labelledby="history-tab">
    <h3 class="d-none d-print-block">History</h3>
    <div class="row">
      <div class="col-md-4 col-xl-3">
        <div class="form-group">
          <label for="group1">Jobs</label>
          <select class="form-control" id="group1">
            <option>Operations Manager</option>
            <option>Senior Project Manager</option>
          </select>
        </div>
      </div>
      <div class="col-md-4 col-xl-3">
        <div class="form-group">
          <label for="group1">Item</label>
          <select class="form-control" id="group1">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
      </div>
    </div>
    <ul class="timeline timeline-split mt-3 mb-3">
      <li class="timeline-item">
        <div class="timeline-info">
          <p class="text-label mb-2">Saturday, 2 Dec 2017, 5:22am</p>
          <span>Daniel Recruiter</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Communication <span class="text-sm text-red"> <i class="gel-icon-warning gel-icon-xs"></i> Bounced</span> </h5>
          <p class="text-label mb-2"><i class="gel-icon-job gel-icon-sm text-slate"></i> Casual Customer Sales & Service Consultant Chadstone</p>
          <p class="mb-2">E-mail: Invitation to online testing, to: John Smith <john.smith@hotmail.com>, From: hrteam@company.com </p>
          <p><a href="#">View</a></p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <p class="text-label mb-2">Saturday, 2 Dec 2017, 5:22am</p>
          <span>Daniel Recruiter</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Note <span class="text-sm"> <i class="gel-icon-flag gel-icon-xs text-yellow"></i> yellow note</span></h5>
          <p class="mb-2">Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede mollis pretium. Pellentesque ut neque.</p>
          <p><a href="#" class="mr-2">Edit</a> <a href="#" class="mr-2">Delete</a></p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <p class="text-label mb-2">Wednesday, 22 Nov 2017 9:33am</p>
          <span>Scott Hiringmanager</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Activity</h5>
          <p class="text-label mb-2"><i class="gel-icon-job gel-icon-sm text-slate"></i> Casual Customer Sales & Service Consultant Chadstone</p>
          <p>Status changed to 'HR shortlist'
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <p class="text-label mb-2">Monday, 20 Nov 2017, 9:53am</p>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Application submitted</h5>
          <p class="text-label mb-2"><i class="gel-icon-job gel-icon-sm text-slate"></i> Casual Customer Sales & Service Consultant Chadstone</p>
          <p>Scoring breakdown: <br>
            0/20 points: 'No' for 'Are you a National of the country where this position is based?' <br>
            20/20 points: 'Yes' for 'Do you have a background or experience working with/in Emergency country context?' <br>
            20/20 points: 'Yes' for 'Do you possess any full-time, paid work experience outside your country of nationality (this can inc...' <br>
            12/20 points: 'I have a Bachelor’s / First Level University Degree' for 'Please indicate your highest completed university degree (i.e. degree in-hand):' <br>
            20/20 points: 'I have more than 15 years’ experience' for 'Please indicate your years of professional work experience relevant to the position applied for:' <br>
            ------------------ <br>
            72/100 total points (rounded)
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <p class="text-label mb-2">Monday, 20 Nov 2017, 9:53am</p>
          <span>System</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Document</h5>
          <p class="text-label mb-2"><i class="gel-icon-job gel-icon-sm text-slate"></i> Casual Customer Sales & Service Consultant Chadstone</p>
          <p class="mb-2">Cover letter: Application Letter Dep REP Guine.pdf Size: 119kb</p>
          <p><a href="#" class="mr-2">View</a>  <a href="#" class="mr-2">PDF</a>  <a href="#">Reprocess</a>
          </p>
        </div>
      </li>
    </ul>
  </div>
  <div class="tab-pane d-print-block" id="crm" role="tabpanel" aria-labelledby="CRM-tab">
    <h3 class="d-none d-print-block">CRM</h3>
    <p>
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
    Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.</p>

  </div>
  <div class="tab-pane d-print-block" id="resume" role="tabpanel" aria-labelledby="resume-tab">
    <h3 class="d-none d-print-block">Resume</h3>
    <section class="text-center mt-5">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	      viewBox="0 0 234.1 214.1" style="enable-background:new 0 0 234.1 214.1;" xml:space="preserve" width="75px" height="76px">
        <style type="text/css">
        	.st0{fill:#AFBFD0;}
        	.st1{fill:#CCD9E5;}
        	.st2{fill:#CCD9E5;}
        	.st3{fill:#8193A4;}
        </style>
        <g>
        	<path class="st0" d="M32.4,101.9v78.7c0,5.9,6.6,10.7,14.7,10.7h5.6c8.1,0,14.7-4.8,14.7-10.7v-78.7H32.4z"/>
        	<path class="st1" d="M66.7,193v-88.4H55.6V180c0,5.3-0.3,9.8-10.6,10.8v2.3h21.7V193z"/>
        	<path class="st2" d="M165.8,180H82.5V33.6h106.9v128.2c0,0,1.3,18.3-18.2,18.3"/>
        	<path class="st3" d="M51,196.3h-1.1c-11.8,0-21.4-9.6-21.4-21.4V99.1h38.4V17.8h138.7v152.4c0,0.3,0.2,9.8-7,17.3
        		c-5.5,5.7-13.7,8.6-24.3,8.6c-31.2,0-104.1,0.2-121,0.2C52.6,196.3,51.8,196.3,51,196.3z M34,104.6V175c0,8.7,7.1,15.8,15.8,15.9
        		v-0.1c0,0,1.1,0,3.2,0c7.8-1,13.9-7.7,13.9-15.8v-70.4L34,104.6L34,104.6z M72.4,23.3V175c0,6.2-2.7,11.8-6.9,15.7
        		c27.2-0.1,82.7-0.2,108.8-0.2c9.1,0,15.9-2.3,20.3-6.9c5.6-5.8,5.5-13.3,5.5-13.4v-147L72.4,23.3L72.4,23.3z"/>
        	<path class="st3" d="M160.6,65.8h-58c-1.5,0-2.7-1.2-2.7-2.7c0-1.5,1.2-2.7,2.7-2.7h58c1.5,0,2.7,1.2,2.7,2.7
        		C163.3,64.5,162.1,65.8,160.6,65.8z"/>
        	<path class="st3" d="M160.6,95.1h-58c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h58c1.5,0,2.7,1.2,2.7,2.7
        		C163.3,93.9,162.1,95.1,160.6,95.1z"/>
        	<path class="st3" d="M180.5,124.5h-77.9c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h77.9c1.5,0,2.7,1.2,2.7,2.7
        		C183.2,123.2,182,124.5,180.5,124.5z"/>
        	<path class="st3" d="M160.6,153.8h-58c-1.5,0-2.7-1.2-2.7-2.7s1.2-2.7,2.7-2.7h58c1.5,0,2.7,1.2,2.7,2.7
        		C163.3,152.6,162.1,153.8,160.6,153.8z"/>
        </g>
        </svg>
        <h5 class="mt-4 mb-3 text-muted">Lorem ipsum dolor sit amet, empor incididunt ut labore et dolore magna aliqua.
        </h5>
        <button class="btn btn-link">Download resume</button>
    </section>
  </div>
</div>

<script type="text/javascript">
function selectBucket(e) {
  console.log(e);
  e = e || event;
  //  console.log(e);
  var cb = e.srcElement || e.target;
  if (cb.type !== 'checkbox') {
    return true;
  }
  var name = e.srcElement.name;
  var cbxs = document.getElementsByName(name),
    i = cbxs.length;
  while (i--) {
    if (cbxs[i].type && cbxs[i].type == 'checkbox' && cbxs[i].id !== cb.id) {
      cbxs[i].checked = false;
    }
  }
}
</script>
<?php endblock()?>
