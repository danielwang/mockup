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
          <fieldset class="buckets" data-toggle="tooltip" data-placement="bottom" data-original-title="Buckets">
            <legend class="sr-only">3 buckets</legend>
            <div class="bucket-1 bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
              <label for="radio-b-l-1">
                <span class="sr-only">
                  Bucket 1</span>
              </label>
            </div>
            <div class="bucket-2 bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
              <label for="radio-b-l-2">
                <span class="sr-only">
                  Bucket 2</span>
              </label>
            </div>
            <div class="bucket-3 bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
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
                  <div class="dropdown-divider"></div>
                  <div class="toggle toggle-success">
                    <label>
                      <input type="checkbox" checked="">
                      <span>Active</span>
                    </label>
                  </div>
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
          <dd>  <i class="text-muted gel-icon-location"></i><i class="text-muted gel-icon-bullhorn"></i><i class="text-muted gel-icon-info"></i><i class="text-muted gel-icon-lock"></i></dd>
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
                      <i class="gel-icon-info-pointer"></i>
                    </a>
                    <div class="dropdown-menu vw-90 vw-sm-70 vw-lg-50 vw-xl-30" style="z-index:1">
                      <?php include "partials/_i-button.html" ?>
                    </div>
                    <h5 class="d-inline">International Consultant on Early Childhood Development <span class="badge badge-info">Undisclose</span></h5>
                  </div>
                  <div class="row mt-3">
                      <span class="col-6 col-sm-3"><dt class="text-sm">Job ID</dt><dd>942130</dd></span>
                      <span class="col-6 col-sm-3"><dt class="text-sm">Submit date:</dt><dd>17 Nov 2017</dd></span>
                      <span class="col-6 col-sm-3"><dt class="text-sm">Recruiter:</dt><dd>Daniel Wang</dd></span>
                      <span class="col-6 col-sm-3"><dt class="text-sm">Applied via:</dt><dd>Linkedin</dd></span>
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
      <div class="col-sm-3">
        <div class="form-group">
          <label for="group1">Jobs</label>
          <select class="form-control" id="group1">
            <option>Operations Manager</option>
            <option>Senior Project Manager</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3">
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
          <span>Saturday, 2 Dec 2017, 5:22am</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4 class="timeline-title">Line manager review 1</h4>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.</p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <p>Wednesday, 22 Nov 2017 9:33am</p>
          <span class="muted">Daniel Recruiter</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4 class="timeline-title">Status changed to 'HR shortlist'</h4>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>Monday, 20 Nov 2017, 9:53am</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4 class="timeline-title">Application submitted</h4>
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
          <span>Monday, 20 Nov 2017, 9:50am</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4 class="timeline-title">Cover letter: Application Letter Dep REP Guine.pdf Size: 119kb</h4>
          <p><a class="btn btn-outline-primary btn-sm" href="#">View</a>  <a class="btn btn-outline-primary btn-sm"href="#">PDF</a>  <a class="btn btn-outline-primary btn-sm" href="#">Reprocess</a>
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
    Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse
    potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam.
  </div>
</div>

<script type="text/javascript">
  var bucket = document.getElementsByName('radio-b-l');
  var setCheck;
  for (x = 0; x < bucket.length; x++) {
    bucket[x].addEventListener('click', toggleRadio);
    bucket[x].addEventListener('keydown', toggleRadio);
  }
  function toggleRadio(e) {
    if (e.which == "1") { // click event
      if (setCheck != this) {
        setCheck = this;
      } else {
        this.checked = false;
        setCheck = null;
      }
    } else { // press esc or backspace to deselect radio
      if (e.keyCode == 27 || e.keyCode == 8) {
        this.checked = false;
        setCheck = null;
      }
    }
  }
</script>
<?php endblock()?>
