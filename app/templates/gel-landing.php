<?php $pageTitle = "GEL Landing"; $blokk=true; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
Hiring manager dashboard
<?php endblock() ?>

<?php startblock('page-tagline');?>
Welcome John, this is your manager dashboard where you will see.
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>

<!-- 4 cards in a row without guidelines  -->
<div class="row">
<?php for ($r=1; $r <= 12; $r++) {?>   
  <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
    <div class="card h-100 text-center">
      <img class="illustrations" src="<?php echo ($resURL) ?>images/illustrations/templates.svg" alt="Position Description panel">
      <div class="card-body text-16">
        <h4 class="mb-4">PosDescription</h4>
        <p class="card-text"><a class="link-alt" href="jobs">Loremipsum dolor</a></p>
        <p class="card-text"><a class="link-alt" href="jobs">Ametetur adipiscing</a></p>
      </div>
    </div>
  </div>
<?php } ?>  
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