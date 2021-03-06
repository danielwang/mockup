<?php $pageTitle = "Mobile test"; $parent = "ui"; $hasSubPage = false; include '../base-ui.php'; ?>

<?php emptyblock('page-tagline');?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-6 col-lg-3">
    <button type="button" class="btn btn-primary"><span class="d-inline d-lg-none">42px</span> <span class="d-none d-lg-inline">34px</span> default</button>
  </div>
  <div class="col-6 col-lg-3">
    <button type="button" class="btn btn-primary btn-sm">Small</button>
  </div>
</div>
<hr>
<h5>Default</h5>
<div class="row">
  <div class="col-lg-4 mb-3">
    <button type="button" class="btn btn-primary">Default</button>
    <button type="button" class="btn btn-outline-primary">Default</button>
    <button class="btn btn-ctrl" type="button">
      <i aria-hidden="true" class="gel-icon-settings"></i>
      Icon
    </button>
    <button type="button" class="btn btn-icon">
      <i class="gel-icon-print" data-toggle="tooltip" data-placement="top" data-original-title="Print"></i>
    </button>
    <div class="btn-group">
      <button type="button" class="btn btn-ctrl">
        <i class="gel-icon-angle-left" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-ctrl">
        <i class="gel-icon-angle-right" aria-hidden="true"></i>
      </button>
    </div>
  </div>
  <div class="col-lg-2 mb-3">
    <fieldset>
      <legend class="sr-only">Segmented Control</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-seg2" id="option12" autocomplete="off" checked="checked"/>
          <span class="btn btn-ctrl">
            Yes
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg2" id="option22" autocomplete="off"/>
          <span class="btn btn-ctrl">
            No
          </span>
        </label>
      </div>
    </fieldset>
  </div>
  <div class="col-sm-6 col-lg-2">
    <select class="form-control">
      <option> Select</option>
      <option>Option</option>
      <option>Option</option>
      <option>Option</option>
      <option>Option</option>
    </select>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="form-group">
      <input type="text" class="form-control" id="exampleFormControlInput" placeholder="start typing ...">
    </div>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
      </div>
    </div>
  </div>
</div>
<hr>
<h5>Small</h5>
<div class="row">
  <div class="col-lg-4 mb-3">
      <button type="button" class="btn btn-primary btn-sm">Small</button>
      <button type="button" class="btn btn-outline-primary btn-sm">Small</button>
      <button class="btn btn-ctrl btn-sm" type="button">
        <i aria-hidden="true" class="gel-icon-settings"></i>
        Icon
      </button>
      <button type="button" class="btn btn-icon btn-sm">
        <i class="gel-icon-print" data-toggle="tooltip" data-placement="top" data-original-title="Print"></i>
      </button>
      <div class="btn-group">
      <button type="button" class="btn btn-ctrl btn-sm">
        <i class="gel-icon-angle-left gel-icon-xs" aria-hidden="true"></i>
        <span class="sr-only">Scroll left</span>
      </button>
      <button type="button" class="btn btn-ctrl btn-sm">
        <i class="gel-icon-angle-right gel-icon-xs" aria-hidden="true"></i>
        <span class="sr-only">Scroll right</span>
      </button>
    </div>
  </div>
  <div class="col-lg-2 mb-3">
    <fieldset>
      <legend class="sr-only">Segmented Control</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-seg3" id="option13" autocomplete="off" checked="checked"/>
          <span class="btn btn-ctrl btn-sm">
            Yes
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg3" id="option23" autocomplete="off"/>
          <span class="btn btn-ctrl btn-sm">
            No
          </span>
        </label>
      </div>
    </fieldset>
  </div>
  <div class="col-sm-6 col-lg-2">
    <select class="form-control form-control-sm">
      <option>Select</option>
      <option>Option</option>
      <option>Option</option>
      <option>Option</option>
      <option>Option</option>
    </select>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="form-group">
      <input type="text" class="form-control form-control-sm" id="exampleFormControlInput" placeholder="start typing ...">
    </div>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="input-group mb-3">
      <input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Send</button>
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-6 col-lg-3 mb-3">
      <button type="button" class="btn btn-primary btn-sm">Small</button>  <button type="button" class="btn btn-outline-primary btn-sm">Small</button>
  </div>
  <div class="col-sm-6 col-lg-3 mb-3">
    <div class="toggle toggle-primary">
      <label>
        <input type="checkbox" checked="">
        <span>Toggle</span>
      </label>
    </div>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="checkbox checkbox-primary">
      <input id="checkbox2" type="checkbox" checked="">
      <label for="checkbox2">
        Checkbox
      </label>
    </div>
  </div>
  <div class="col-sm-6 col-lg-2 mb-3">
    <div class="radio radio-inline radio-primary">
        <input type="radio" name="radio1" id="radio1" value="option1" checked="" />
        <label for="radio1">
          Radio
        </label>
      </div>
    <div class="radio radio-inline radio-primary">
      <input type="radio" name="radio1" id="radio2" value="option1" />
      <label for="radio2">
        Radio 2
      </label>
    </div>
  </div>
    <div class="col-sm-6 col-lg-2 mb-3">
      <fieldset class="trays" data-toggle="tooltip" data-placement="bottom" data-original-title="Trays">
        <legend class="sr-only">3 trays</legend>
        <div class="tray tray-green tray-lg">
          <input type="radio" name="radio-b-l" id="radio-b-l-1" value="option-b-l">
          <label for="radio-b-l-1">
            <span class="sr-only">
              Green</span>
          </label>
        </div>
        <div class="tray tray-orange tray-lg">
          <input type="radio" name="radio-b-l" id="radio-b-l-2" value="option-b-l">
          <label for="radio-b-l-2">
            <span class="sr-only">
              Orange</span>
          </label>
        </div>
        <div class="tray tray-red tray-lg">
          <input type="radio" name="radio-b-l" id="radio-b-l-3" value="option-b-l">
          <label for="radio-b-l-3">
            <span class="sr-only">
              Red</span>
          </label>
        </div>
      </fieldset>
    </div>
</div>
<?php endblock()?>
