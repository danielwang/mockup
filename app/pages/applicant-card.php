<?php $pageTitle = "Applicant card"; include '../base-popup.php';?>

<?php startblock('popup-top');?>
<!-- <div class="notification notification-info" role="notification">
  <i class="gel-icon-info gel-icon-lg" aria-hidden="true"></i>
  This is a info alert—check it out!
  <a class="alert-link" href="#">link</a>
</div> -->
<section id="popup-top" class="bg-navy text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-white">Daniel Applicant</h2>
        </div>
        <div class="col-6 col-md-2">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-sm btn-ctrl active">
              <input type="radio" name="options-sm" id="option1" autocomplete="off" checked="checked">
              Active
            </label>
            <label class="btn btn-sm btn-ctrl">
              <input type="radio" name="options-sm" id="option2" autocomplete="off">
              Inactive
            </label>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <fieldset class="d-inline">
            <div class="bucket bucket-green bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
              <label for="radio-b-l-1">
                <span class="sr-only">
                  Green</span>
              </label>
            </div>
            <div class="bucket bucket-orange bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
              <label for="radio-b-l-2">
                <span class="sr-only">
                  Orange</span>
              </label>
            </div>
            <div class="bucket bucket-red bucket-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
              <label for="radio-b-l-3">
                <span class="sr-only">
                  Red</span>
              </label>
            </div>
          </fieldset>
        </div>
        <div class="col-6 col-md-2">
          <div class="dropdown">
            <button class="btn btn-ctrl btn-sm dropdown-menu-right dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Actions
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100 mt-4"></div>
      <dl class="row">
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Gender</dt>
          <dd>Male</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Phone</dt>
          <dd>+61 4123 111 111</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt>Address</dt>
          <dd>91 William Street, Melbourne, VIC, Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Linked Employee</dt>
          <dd><a href="#"> Relink</a></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Flags</dt>
          <dd></dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Number</dt>
          <dd>10923445</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Nationality</dt>
          <dd>Australia</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-4">
          <dt>Email</dt>
          <dd>daniel.applicant@company.com</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Orininal Source</dt>
          <dd>Seek</dd>
        </span>
        <span class="col-6 col-md-4 col-lg-2">
          <dt>Employment status</dt>
          <dd>Never employed or contracted</dd>
        </span>
      </dl>
    </div>
</section>
<?php endblock()?>

<?php startblock('page-body');?>
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th></th>
      <th>Submitted</th>
      <th>Status</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Mobile</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
        <tr>
      <th>
        <span class="checkbox checkbox-default">
          <input type="checkbox" id="checkbox-1">
          <label for="checkbox-1"></label>
        </span>
      </th>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Not shortlisted</a>
      </td>
      <td>
        <a href="#">Achamyeleh</a>
      </td>
      <td>
        <a href="#">Berhanu</a>
      </td>
      <td>M</td>
      <td>+61 411 111 036</td>
      <td>Achamyeleh.Berhanu@dreamworld.com</td>
    </tr>
        <tr>
      <th>
        <span class="checkbox checkbox-default">
          <input type="checkbox" id="checkbox-2">
          <label for="checkbox-2"></label>
        </span>
      </th>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Not shortlisted</a>
      </td>
      <td>
        <a href="#">Achamyeleh</a>
      </td>
      <td>
        <a href="#">Berhanu</a>
      </td>
      <td>M</td>
      <td>+61 411 111 037</td>
      <td>Achamyeleh.Berhanu@dreamworld.com</td>
    </tr>
        <tr>
      <th>
        <span class="checkbox checkbox-default">
          <input type="checkbox" id="checkbox-3">
          <label for="checkbox-3"></label>
        </span>
      </th>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Not shortlisted</a>
      </td>
      <td>
        <a href="#">Achamyeleh</a>
      </td>
      <td>
        <a href="#">Berhanu</a>
      </td>
      <td>M</td>
      <td>+61 411 111 038</td>
      <td>Achamyeleh.Berhanu@dreamworld.com</td>
    </tr>
        <tr>
      <th>
        <span class="checkbox checkbox-default">
          <input type="checkbox" id="checkbox-4">
          <label for="checkbox-4"></label>
        </span>
      </th>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Not shortlisted</a>
      </td>
      <td>
        <a href="#">Achamyeleh</a>
      </td>
      <td>
        <a href="#">Berhanu</a>
      </td>
      <td>M</td>
      <td>+61 411 111 039</td>
      <td>Achamyeleh.Berhanu@dreamworld.com</td>
    </tr>
        <tr>
      <th>
        <span class="checkbox checkbox-default">
          <input type="checkbox" id="checkbox-5">
          <label for="checkbox-5"></label>
        </span>
      </th>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Not shortlisted</a>
      </td>
      <td>
        <a href="#">Achamyeleh</a>
      </td>
      <td>
        <a href="#">Berhanu</a>
      </td>
      <td>M</td>
      <td>+61 411 111 040</td>
      <td>Achamyeleh.Berhanu@dreamworld.com</td>
    </tr>
      </tbody>
</table>
<?php endblock()?>
