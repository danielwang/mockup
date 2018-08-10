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
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description">
      <div class="card-body text-16">
        <h4 class="mb-4">Position Description</h4>
        <p class="card-text"><a href="empty"><span class="text-20">1</span> lorem ipsum dolor</a></p>
        <p class="card-text"><a href="#"><span class="text-20"> 21</span> ametetur adipiscing</a></p>
        <p><button title="Manage position descriptions" type="button" class="btn btn-outline-primary btn-block text-truncate">Manage position descriptions</button></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs">
      <div class="card-body text-16">
        <h4 class="mb-4">Jobs</h4>
        <p class="card-text"><a href="jobs"><span class="text-20"> 8 </span> Requisition</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">Team requisition open</a></p>
        <p><button title="Create a job" type="button" class="btn btn-primary btn-block">Create a requisition</button></p>
        <p><button title="Raise a contractor requisition" type="button" class="btn btn-outline-primary btn-block text-truncate">New contractor requisition</button></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval">
      <div class="card-body text-16">
        <h4 class="mb-4">Approval</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Awaiting your approvalr</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">Approved</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising">
      <div class="card-body text-16">
        <h4 class="mb-4">Advertising</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Advertisements</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting">
      <div class="card-body text-16">
        <h4 class="mb-4">Shortlisting</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">lorem ipsum dolor</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">ametetur adipiscing</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Panel</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Jobs requiring panel review</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview">
      <div class="card-body text-16">
        <h4 class="mb-4">Interview</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Scheduled interviews</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer">
      <div class="card-body text-16">
        <h4 class="mb-4">Offer</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Offers awaiting your approval</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">New starters</a></p>
        <p class="card-text"><a class="text-20" href="#">34</a> <a class="link-alt" href="jobs">New starter tasks</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract">
      <div class="card-body text-16">
        <h4 class="mb-4">Contract</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">lorem ipsum dolor</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">ametetur adipiscing</a></p>
      </div>
    </div>
  </div>
</div>

<?php endblock()?>
