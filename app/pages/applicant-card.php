<?php $pageTitle = "Applicant card"; include '../base-popup.php';?>

<?php startblock('popup-top');?>
<div class="notification notification-info" role="notification">
  <i class="gel-icon-info gel-icon-lg" aria-hidden="true"></i>
  This is a info alert—check it out!
  <a class="alert-link" href="#">link</a>
</div>
<section id="popup-top" class="bg-navy text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="text-white">Daniel Applicant</h2>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-sm btn-ctrl">
              <input type="radio" name="talent-pool" id="option1" checked="checked">
              Active
            </label>
            <label class="btn btn-sm btn-ctrl">
              <input type="radio" name="talent-pool" id="option2">
              Inactive
            </label>
          </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-sm btn-ctrl"><i class="gel-icon-print"></i></button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-ctrl dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actions
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-2">
          <fieldset>
            <div class="tray tray-green tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
              <label for="radio-b-l-1" data-toggle="tooltip" data-placement="bottom" data-original-title="Green Tray">
                <span class="sr-only">
                  Green</span>
              </label>
            </div>
            <div class="tray tray-orange tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
              <label for="radio-b-l-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Orange Tray">
                <span class="sr-only">
                  Orange</span>
              </label>
            </div>
            <div class="tray tray-red tray-lg">
              <input type="radio" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
              <label for="radio-b-l-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Red Tray">
                <span class="sr-only">
                  Red</span>
              </label>
            </div>
          </fieldset>
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
      <th>Position</th>
      <th>Number</th>
      <th>Date</th>
      <th>Recruiter</th>
      <th>Applied via</th>
      <th>Status</th>
      <th>Offer</th>
      <th>Flags</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>
        <a href="#"><i class="gel-icon-info-pointer gel-icon-lg"></i></a> Senior Operations Manager
      </th>
      <td>942130</td>
      <td>17 Nov 2017</td>
      <td>
        <a href="#">Michelle Petterson</a>
      </td>
      <td>
        <a href="#">Career website</a>
      </td>
      <td>
        <a href="#">Interviewed</a>
        <p><small>Status changed 12 May 2018</small></p>
      </td>
      <td><a href="#">No offer</a></td>
      <td><i class="gel-icon-location"></i><i class="gel-icon-bullhorn"></i></td>
      <td>
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
        </td>
    </tr>
  </tbody>
</table>
<?php endblock()?>
