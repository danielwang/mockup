<?php $parent = "es"; include '../../base-t1.php';   ?>

<?php emptyblock('page-notification') ?>
<?php emptyblock('quick-nav') ?>

<?php startblock('page-title') ?>
John Smith - Software Engineer
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<div class="page-tabs">
  <ul class="nav navbar-nav" >
    <li><a href="#">Rate your own skills</a></li>
    <li class="active"><a href="#">Compare ratings to roles</a></li>
  </ul>
</div>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="row row-gap">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="form-group">
      <label class="control-label">Select</label>
      <div class="select">
        <select class="form-control input-lg">
          <option>Option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
        </select>
      </div>
    </div>

    <div class="gel-circle p25 center gel-circle-blue">
    	<span>25%</span>
    	<div class="slice">
    		<div class="bar"></div>
    		<div class="fill"></div>
    	</div>
    </div>
  </div>
</div>
<?php endblock() ?>
