<?php $layout=""; $pageTitle = "Page template"; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('logo') ?>
  <img alt="Client logo" src="https://www.pageuppeople.com/wp-content/uploads/2016/02/Telstra-Logo-v2.png" width="100"/>
<?php endblock() ?>

<?php startblock('page-title') ?>
  Hiring manager dashboard
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<h3>Welcome John</h3>
<p class="lead">
  This is your Manager Dashboard where you will see all your tasks organized in various stages.
  You will also see how many actions are required per task. Please attend to these tasks accordingly.</p>
<div class="row">
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Position Description</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Jobs</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
            <p><button type="button" class="btn btn-primary">Create a job</button></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Approval</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Advertising</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Shortlisting</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Panel</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Interview</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Offer</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="mb-4">Contract</h4>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <h4>Guidelines / Tips</h4>
    <p>Lorem ipsum dolort ametetur adipiscing elit, sed do eiusmod tempor edr incididunt ut labore et dolore magna aliqua. </p>
    <p><a href="#">Ut enim ad minim</a> sersn veniam, quisre sedo nostruds deris exercitation verus ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </p>
  </div>
</div>
<?php endblock()?>
