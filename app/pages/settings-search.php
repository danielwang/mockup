<?php $pageTitle = "Settings"; $parent = "adm"; $pageLayout="-fluid";  $pageAction = false; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Settings
<?php endblock() ?>

<?php startblock('page-tabs') ?>

<?php endblock() ?>

<?php startblock('page-actions') ?>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-4 col-lg-3 col-xl-2 mb-2 mb-sm-0">
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
    <div class="col-sm-8 col-lg-6 col-xl-4 offset-xl-2">
        <?php include "partials/_tags-input-search.html" ?>
    </div>
  </div>

    <div class="card mt-3">
      <!-- <p class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="gel-icon-info" aria-hidden="true"></i>
        A simple primary alert with
        <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <i class="gel-icon-close gel-icon-lg" aria-hidden="true"></i>
        </button>
      </p> -->
      <div class="row">
        <div class="col-lg-3 col-xl-2">
          <ul class="tags" aria-label="tags">
            <li>
              <a href="#">Job</a>
            </li>
            <li class="active">
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">Onboarding</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-5 col-xl-6">
          <h5>Recruitment</h5>
          <p>This feature is only used in admin ~\v5.3\provider\siteAdmin\RestrictedSiteAdmin.aspx to show or hide Recruitment Management Features when a user has restricted access to settings page. Old description: Set this to TRUE to turn on Recruitment module in Employee Services</p>
        </div>
        <div class="col-lg-2">
          <div class="toggle toggle-success">
            <label>
              <input type="checkbox" checked="">
              <span>Recruitment</span>
            </label>
          </div>
        </div>
        <div class="col-lg-2">
          <a href="#" data-toggle="modal" data-target="#exampleModal" aria-label="Add reference notes against this setting"><i data-toggle="tooltip" data-placement="top" data-original-title="Add reference notes against this setting" class="gel-icon-notes gel-icon-lg"></i></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-3 col-xl-2">
          <ul class="tags" aria-label="tags">
            <li>
              <a href="#">Job</a>
            </li>
            <li class="active">
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">Onboarding</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-5 col-xl-6">
          <h5>Employee (Provider) details fields</h5>
          <p>Used to display custom footer content at the bottom of Employee Services</p>
        </div>
        <div class="col-lg-2">
          <a href="#"><i data-toggle="tooltip" data-placement="top" data-original-title="Edit" class="gel-icon-pencil gel-icon-lg"></i></a>
          sAddress, sPhone,sEmail, sMobile, sPosition, sProviderBrandTitle, sProviderDepartmentTitle, sProvide
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="gel-icon-notes gel-icon-lg"></i></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-3 col-xl-2">
          <ul class="tags" aria-label="tags">
            <li>
              <a href="#">Job</a>
            </li>
            <li class="active">
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">Onboarding</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-5 col-xl-6">
          <h5><a href="#">Employee services system styling <i class="gel-icon-settings"></i></a> </h5>
          <p>Add system styling for Employee services</p>
        </div>
        <div class="col-lg-2">

        </div>
        <div class="col-lg-2">
          <a href="#"><i class="gel-icon-notes gel-icon-lg"></i></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-3 col-xl-2">
          <ul class="tags" aria-label="tags">
            <li>
              <a href="#">Job</a>
            </li>
            <li class="active">
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">Onboarding</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-5 col-xl-6">
          <h5>'Education History' section in ES Profile</h5>
          <p>Show 'Education History' section in Employee Service's Profile page</p>
        </div>
        <div class="col-lg-2">
            <i class="gel-icon-lock gel-icon-lg text-muted"></i> Performance module only
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="gel-icon-notes gel-icon-lg"></i></a>
        </div>
      </div>
    </div>
  
  <section class="main-footer border-top fixed-bottom p-3 bg-white text-center">
      <button class="btn btn-primary">Save Changes</button>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Add reference notes</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Your notes</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
<?php endblock()?>
