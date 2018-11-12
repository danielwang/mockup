<?php $pageTitle = "Mobile test"; $parent = "ui"; $hasSubPage = false; include '../base-ui.php'; ?>

<?php startblock('page-tagline');?>

<?php endblock()?>

<?php startblock('page-body');?>
<p>
  <button type="button" class="btn btn-primary">Default</button>
  <button type="button" class="btn btn-danger">Default</button>
  <button type="button" class="btn btn-link">Button link</button>

</p>
<p>
  <button type="button" class="btn btn-outline-primary">Default</button>
  <button type="button" class="btn btn-outline-danger">Danger</button>
</p>
<p>
  <button class="btn btn-ctrl" type="button">
    <i aria-hidden="true" class="gel-icon-settings"></i>
    Settings
  </button>
  <button type="button" class="btn btn-icon">
    <i class="gel-icon-print" data-toggle="tooltip" data-placement="top" data-original-title="Print"></i>
  </button>
</p>
<div class="row">
  <div class="col-4 col-md-3">
    <button type="button" class="btn btn-primary"><span class="d-inline d-lg-none">42px</span> <span class="d-none d-lg-inline">34px</span> default</button>
  </div>
  <div class="col-4 col-md-3">
    <button type="button" class="btn btn-primary btn-sm">Small</button>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-8">
    <fieldset>
      <legend class="sr-only">Segmented Control</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-seg2" id="option12" autocomplete="off" checked="checked"/>
          <span class="btn btn-ctrl">
            All
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg2" id="option22" autocomplete="off"/>
          <span class="btn btn-ctrl">
            Manager
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg2" id="option32" autocomplete="off"/>
          <span class="btn btn-ctrl">
            Employee
          </span>
        </label>
      </div>
    </fieldset>
  </div>
</div>
<?php endblock()?>
