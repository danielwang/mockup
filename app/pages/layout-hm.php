<?php $pageTitle = "Hiring manager dashboard"; $parent = "hm"; include '../base-t1.php';?>

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
  <div class="col-lg-9">
    <div class="row">
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description">
          <div class="card-body text-16">
            <h4 class="mb-4">Position Description</h4>
            <p class="card-text"><a class="text-20" href="empty">0</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
            <p><button title="Manage position descriptions" type="button" class="btn btn-outline-primary btn-block text-truncate">Manage position descriptions</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs">
          <div class="card-body text-16">
            <h4 class="mb-4">Jobs</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
            <p><button title="Create a job" type="button" class="btn btn-primary btn-block">Create a job</button></p>
            <p><button title="Raise a contractor requisition" type="button" class="btn btn-outline-primary btn-block text-truncate">Raise a contractor requisition</button></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval">
          <div class="card-body text-16">
            <h4 class="mb-4">Approval</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising">
          <div class="card-body text-16">
            <h4 class="mb-4">Advertising</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting">
          <div class="card-body text-16">
            <h4 class="mb-4">Shortlisting</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel">
          <div class="card-body text-16">
            <h4 class="mb-4">Panel</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview">
          <div class="card-body text-16">
            <h4 class="mb-4">Interview</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer">
          <div class="card-body text-16">
            <h4 class="mb-4">Offer</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract">
          <div class="card-body text-16">
            <h4 class="mb-4">Contract</h4>
            <p class="card-text"><a class="text-20" href="#">8</a> lorem ipsum dolor</p>
            <p class="card-text"><a class="text-20" href="#">21</a> ametetur adipiscing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <h3>Guidelines / Tips</h3>
    <p>Lorem ipsum dolort ametetur adipiscing elit, sed do eiusmod tempor edr incididunt ut labore et dolore magna aliqua. </p>
    <p><a href="#">Ut enim ad minim</a> sersn veniam, quisre sedo nostruds deris exercitation verus ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </p>
  </div>
</div>
<?php endblock()?>
