<?php $pageTitle = "Hiring manager dashboard"; $blokk=true; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
Hiring manager dashboard
<?php endblock() ?>

<?php startblock('page-tagline');?>
Welcome John, this is your manager dashboard where you will see all your tasks organised in various stages.
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>

<!-- 4 cards in a row without guidelines  -->
<div class="row">
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Position Description</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">16</span> Lorem ipsum dolor</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">23</span> Ametetur adipiscing</a></p>
        <p class="mt-4"><a title="Manage position descriptions" role="button" href="#" class="btn btn-outline-primary btn-block text-truncate">Manage position descriptions</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Jobs</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">11</span> Requisition</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">25</span> Team requisition open</a></p>
        <p class="mt-4"><button title="Create a job" type="button" class="btn btn-outline-primary btn-block">Create a requisition</button></p>
        <p><button title="Raise a contractor requisition" type="button" class="btn btn-outline-primary btn-block text-truncate">New contractor requisition</button></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Approval</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">6</span> Awaiting your approval</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">9</span> Approved</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Advertising</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">12</span> Advertisements</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Shortlisting</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">1</span> Jobs have applicants for review</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">2</span> Applicants assigned to you for review</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Panel</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">3</span> Jobs requiring panel review</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Interview</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">4</span> Scheduled interviews</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Offer</h4>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">5</span> Offers awaiting your approval</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">10</span> New starters</a></p>
        <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">46</span> New starter tasks</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract panel">
      <div class="card-body text-16">
        <h4 class="mb-4">Contract</h4>
        <p class="card-text"><a class="text-20" href="#">8</a> <a class="link-alt" href="jobs">Lorem ipsum dolor</a></p>
        <p class="card-text"><a class="text-20" href="#">21</a> <a class="link-alt" href="jobs">Ametetur adipiscing</a></p>
      </div>
    </div>
  </div>
</div>

<!-- 3 cards in a row with guidelines  -->
<!-- <div class="row">
  <div class="col-xl-9">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs panel">
          <div class="card-body text-16">
            <h4 class="mb-4">Jobs</h4>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">11</span> Requisition</a></p>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">25</span> Team requisition open</a></p>
            <p class="mt-4"><button title="Create a job" type="button" class="btn btn-outline-primary btn-block">Create a requisition</button></p>
            <p><button title="Raise a contractor requisition" type="button" class="btn btn-outline-primary btn-block text-truncate">New contractor requisition</button></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval panel">
          <div class="card-body text-16">
            <h4 class="mb-4">Approval</h4>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">6</span> Awaiting your approval</a></p>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">9</span> Approved</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising panel">
          <div class="card-body text-16">
            <h4 class="mb-4">Advertising</h4>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">12</span> Advertisements</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting panel">
          <div class="card-body text-16">
            <h4 class="mb-4">Shortlisting</h4>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">1</span> Jobs have applicants for review</a></p>
            <p class="card-text"><a class="link-alt" href="jobs"><span class="text-20 text-blue">2</span> Applicants assigned to you for review</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3">
    <h4>Guidelines / Tips</h4>
       <p>Lorem ipsum dolort ametetur adipiscing elit, sed do eiusmod tempor edr incididunt ut labore et dolore magna aliqua. </p>
       <p><a href="#">Ut enim ad minim</a> sersn veniam, quisre sedo nostrud<p>
  </div>
</div> -->
<?php endblock()?>