<?php $pageTitle = "Golbal Experience Language"; include '../base-ui.php';?>

<?php startblock('page-body');?>

<!-- ************ toggles ******************-->

<h3 class="mt-5 mb-4">Toggles</h3>
<div class="row">
  <div class="col-sm-3">
    <h5>Large</h5>
    <div class="toggle toggle-lg toggle-navy">
      <label>
        <input type="checkbox" checked="">
        <span>large</span>
      </label>
    </div>
    <div class="toggle toggle-lg toggle-orange">
      <label>
        <input type="checkbox" checked="">
        <span>checked</span>
      </label>
    </div>

  </div>
  <div class="col-sm-3">
    <h5>Medium</h5>
    <div class="toggle toggle-md toggle-red">
      <label>
        <input type="checkbox" checked="">
        <span>medium</span>
      </label>
    </div>
    <div class="toggle toggle-md toggle-purple">
      <label>
        <input type="checkbox" checked="">
        <span>checked</span>
      </label>
    </div>
  </div>
  <div class="col-sm-3">
    <h5>Default</h5>
    <div class="toggle">
      <label>
        <input type="checkbox">
        <span>Default</span>
      </label>
    </div>
    <div class="toggle">
      <label>
        <input type="checkbox" checked="">
        <span>checked</span>
      </label>
    </div>
    <div class="toggle">
      <label>
        <input type="checkbox" disabled="">
        <span>disabled</span>
      </label>
    </div>
    <div class="toggle">
      <label>
        <input type="checkbox" disabled="" checked="">
        <span>disabled checked</span>
      </label>
    </div>
  </div>
  <div class="col-sm-3">
    <h5>Small</h5>
    <div class="toggle toggle-yellow toggle-sm">
      <label>
        <input type="checkbox" checked="">
        <span>small</span>
      </label>
    </div>
    <div class="toggle toggle-sm toggle-green">
      <label>
        <input type="checkbox" checked="">
        <span>checked</span>
      </label>
    </div>
  </div>
</div>

<hr>
<!-- ************ checkbox ******************-->

<h3 class="mt-5 mb-4">Checkboxes</h3>
<div class="row">
  <div class="col-sm-3">
    <h5>
      Basic
    </h5>

    <div class="checkbox checkbox-primary">
      <input type="checkbox" checked="" id="checkbox2">
      <label for="checkbox2">
        Primary
      </label>
    </div>
    <div class="checkbox checkbox-success">
      <input type="checkbox" id="checkbox3">
      <label for="checkbox3">
        Success
      </label>
    </div>
    <div class="checkbox checkbox-info">
      <input type="checkbox" id="checkbox4">
      <label for="checkbox4">
        Info
      </label>
    </div>
    <div class="checkbox checkbox-warning">
      <input type="checkbox" checked="" id="checkbox5">
      <label for="checkbox5">
        Warning
      </label>
    </div>
    <div class="checkbox checkbox-danger">
      <input type="checkbox" checked="" id="checkbox6">
      <label for="checkbox6">
        Danger
      </label>
    </div>
  </div>
  <div class="col-sm-3">
    <h5>
      Circled
    </h5>
    <div class="checkbox checkbox-circle">
      <input type="checkbox" id="checkbox7">
      <label for="checkbox7">
        Simply Rounded
      </label>
    </div>
    <div class="checkbox checkbox-info checkbox-circle">
      <input type="checkbox" checked="" id="checkbox8">
      <label for="checkbox8">
        Me too
      </label>
    </div>

  </div>
  <div class="col-sm-3">
    <h5>
      Disabled
    </h5>

    <div class="checkbox">
      <input type="checkbox" disabled="" id="checkbox9">
      <label for="checkbox9">
        Can't check this
      </label>
    </div>
    <div class="checkbox checkbox-success">
      <input type="checkbox" checked="" disabled="" id="checkbox10" class="">
      <label for="checkbox10">
        This too
      </label>
    </div>
    <div class="checkbox checkbox-warning checkbox-circle">
      <input type="checkbox" checked="" disabled="" id="checkbox11">
      <label for="checkbox11">
        And this
      </label>
    </div>

  </div>
</div>
<hr>
<!-- ************ radio ******************-->

<h3 class="mt-5 mb-4">Radio</h3>
<div class="row">
  <div class="col-sm-3">
    <h5>Basic</h5>
    <div class="radio radio-info">
      <input type="radio" value="option1" id="radio3" name="radio2">
      <label for="radio3">Option 1</label>
    </div>
    <div class="radio radio-info">
      <input type="radio" checked="" value="option2" id="radio4" name="radio2">
      <label for="radio4">Option 2</label>
    </div>
  </div>
  <div class="col-sm-3">
    <h5>Disabled</h5>
    <div class="radio radio-danger">
      <input type="radio" disabled="" value="option1" id="radio5" name="radio3">
      <label for="radio5">Option 1</label>
    </div>
    <div class="radio">
      <input type="radio" disabled="" checked="" value="option2" id="radio6" name="radio3">
      <label for="radio6">Option 2</label>
    </div>
  </div>
  <div class="col-sm-3">
    <h5>Inline radios</h5>
    <div class="radio radio-info radio-inline">
      <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
      <label for="inlineRadio1">Inline One</label>
    </div>
    <div class="radio radio-info radio-inline">
      <input type="radio" name="radioInline" value="option2" id="inlineRadio2">
      <label for="inlineRadio2">Inline Two</label>
    </div>
  </div>
</div>

<?php endblock()?>
