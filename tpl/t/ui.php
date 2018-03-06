<?php $pageTitle = "UI elements"; include '../base.php';?>

<?php startblock('page-title') ?>
  UI elements
<?php endblock()?>

<?php startblock('page-body');?>

<!-- ************ Typography ******************-->
<h3 class="mb-4">Typography</h3>
<div class="row">
  <div class="col-md-6">
    <h5>
      <code>Proxima Nova</code>
    </h5>
    <h3 style="font-family:Proxima Nova; font-weight:400">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
    <h3 style="font-family:Proxima Nova; font-weight:400; text-transform: lowercase;">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
    <h3 style="font-family:Proxima Nova; font-weight:400">0 1 2 3 4 5 6 7 8 9</h3>
    <p class="lead">This is an example of leading paragragh.</p>
    <p class="text-muted">This is an example of muted text.</p>
    <p class="text-primary">This is an example of primary text.</p>
    <p class="text-success">This is an example of success text.</p>
    <p class="text-info">This is an example of info text.</p>
    <p class="text-warning">This is an example of warning text.</p>
    <p class="text-danger">This is an example of danger text.</p>
    <p class="text-sm">This is an example of small text.</p>
    <p>Use the mark tag to
      <mark>highlight</mark>
      text.
    </p>
    <p>Use the b tag to
      <b>bold</b>
      text, or use strong tag to
      <strong>emphasize</strong>
      text.
    </p>
  </div>
  <div class="col-md-6">
    <h5>
      <code>Nunito</code>
    </h5>
    <h3>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
    <h3 style="text-transform: lowercase;">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
    <h3>0 1 2 3 4 5 6 7 8 9</h3>
    <h1>h1. Bootstrap heading</h1>
    <h2>h2. Bootstrap heading</h2>
    <h3>h3. Bootstrap heading</h3>
    <h4>h4. Bootstrap heading</h4>
    <h5>h5. Bootstrap heading</h5>
    <h6>h6. Bootstrap heading</h6>
  </div>
</div>
<hr>
<!-- ************ avatar ******************-->
<h3 class="mt-5 mb-4">Avatar</h3>
<p>
  <img class="avatar avatar-sm" src="<?php echo ($resURL) ?>images/avatar.svg">
  <img class="avatar" src="<?php echo ($resURL) ?>images/avatar.svg">
  <img class="avatar avatar-md" src="<?php echo ($resURL) ?>images/avatar.svg">
  <img class="avatar avatar-lg" src="<?php echo ($resURL) ?>images/avatar.svg">
</p>
<hr>
<!-- ************ buttons ******************-->
<h3 class="mt-5 mb-4">Buttons</h3>
<p>
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-secondary">Secondary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-light">Light</button>
  <button type="button" class="btn btn-dark">Dark</button>
  <button type="button" class="btn btn-link">Link</button>
</p>
<p>
  <button type="button" class="btn btn-outline-primary">Primary</button>
  <button type="button" class="btn btn-outline-secondary">Secondary</button>
  <button type="button" class="btn btn-outline-success">Success</button>
  <button type="button" class="btn btn-outline-danger">Danger</button>
  <button type="button" class="btn btn-outline-warning">Warning</button>
  <button type="button" class="btn btn-outline-info">Info</button>
  <button type="button" class="btn btn-outline-light">Light</button>
  <button type="button" class="btn btn-outline-dark">Dark</button>
</p>
<div class="row">
  <div class="col-md-6">
    <button type="button" class="btn btn-primary btn-lg">Large button</button>
    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
    <button type="button" class="btn btn-primary btn-sm">Small button</button>
    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
  </div>
  <div class="col-md-6">
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
  </div>
</div>
<hr>
<!-- ************ alerts ******************-->
<h3 class="mt-5 mb-4">Alerts</h3>
<div class="row">
  <div class="col-md-6">
    <div class="alert alert-success" role="alert">
      This is a success alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
      This is a warning alert—check it out!
    </div>
    <div class="alert alert-dark" role="alert">
      This is a alert—check it out!
    </div>
  </div>
  <div class="col-md-6">
    <div class="alert alert-danger" role="alert">
      This is a danger alert with
      <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
    </div>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong>
      You should check in on some of those fields below.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
  </div>
</div>
<hr>
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
