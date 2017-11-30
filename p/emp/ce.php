<?php $parent = "es"; include '../../base-t1.php';   ?>

<?php emptyblock('page-notification') ?>
<?php emptyblock('quick-nav') ?>

<?php startblock('page-title') ?>
John Smith - Software Engineer
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<div class="page-tabs">
  <ul class="nav navbar-nav" >
    <li class="active"><a href="#">Rate your own skills</a></li>
    <li><a href="#">Compare ratings to roles</a></li>
  </ul>
</div>
<?php endblock() ?>
<?php startblock('page-body');?>
<ul class="nav nav-tabs nav-line">
  <li class="active">
    <a href="#1c">Primary</a>
  </li>
  <li>
    <a href="#2c">Collective</a>
  </li>
  <li>
    <a href="#3c">Building Software</a>
  </li>
  <li>
    <a href="#1c">Mastery & Development</a>
  </li>
  <li>
    <a href="#2c">Developer Craftsmanship</a>
  </li>
  <li>
    <a href="#3c">PageUp Technical Domain</a>
  </li>
</ul>
<hr>
<?php for ($x =1; $x <= 6; $x++) {?>
<div class="row row-gap">
  <div class="col-sm-4">
    <h4 class="text-blue">Building Relationships</h4>
    <p>Proactively developing and maintaining effective internal and external relationships to facilitate the achievement of work goals.</p>
  </div>
  <div class="col-sm-8">
    <div class="segmented-control margin-bottom">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-1">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-2">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-3">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-4">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-5">
      <input type="radio" name="sc-<?php echo($x)?>" id="sc-<?php echo($x)?>-6">
      <label for="sc-<?php echo($x)?>-1" data-value="None" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">None</label>
      <label for="sc-<?php echo($x)?>-2" data-value="Understands">Understands</label>
      <label for="sc-<?php echo($x)?>-3" data-value="Demonstrates">Demonstrates</label>
      <label for="sc-<?php echo($x)?>-4" data-value="Leads">Leads</label>
      <label for="sc-<?php echo($x)?>-5" data-value="Coaches others">Coaches others</label>
      <label for="sc-<?php echo($x)?>-6" data-value="Expert">Expert</label>
    </div>
  </div>
</div>
<hr>
<?php } ?>
<?php endblock() ?>
