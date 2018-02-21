<?php $layout=""; $pageTitle = "Page template"; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('logo') ?>
  <img alt="Client logo" src="https://www.pageuppeople.com/wp-content/uploads/2016/02/Telstra-Logo-v2.png" width="100"/>
<?php endblock() ?>

<?php startblock('page-title') ?>
  Hiring manager dashboard
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<h2>Welcome John</h2>
<p class="lead">
  This is your Manager Dashboard where you will see all your tasks organized in various stages.
  You will also see how many actions are required per task. Please attend to these tasks accordingly.</p>
<div class="row">
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description">
          <div class="card-body">
            <h5 class="mb-4">Position Description</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs">
          <div class="card-body">
            <h5 class="mb-4">Jobs</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
            <p><button type="button" class="btn btn-primary">Create a job</button></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval">
          <div class="card-body">
            <h5 class="mb-4">Approval</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising">
          <div class="card-body">
            <h5 class="mb-4">Advertising</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting">
          <div class="card-body">
            <h5 class="mb-4">Shortlisting</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel">
          <div class="card-body">
            <h5 class="mb-4">Panel</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview">
          <div class="card-body">
            <h5 class="mb-4">Interview</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer">
          <div class="card-body">
            <h5 class="mb-4">Offer</h5>
            <p class="card-text"><a href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract">
          <div class="card-body">
            <h5 class="mb-4">Contract</h5>
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

<style>
.card a { font-size: 1.25rem;}
.card {font-size: 1rem;}
</style>
