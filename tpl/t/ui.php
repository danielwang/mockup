<?php $pageTitle = "UI elements"; include '../base.php';?>

<?php startblock('page-title') ?>
  UI elements
<?php endblock()?>

<?php startblock('page-body');?>
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
            text.</p>
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
  <h3 class="mt-5 mb-4">Buttons</h3>
  <p>
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
    <!-- <div class="w-100"></div>
    <div class="col-md-6">Column</div>
    <div class="col-md-6">Column</div>

    <div class="w-100"></div>
    <div class="col-md-6">Column</div>
    <div class="col-md-6">Column</div>

    <div class="w-100"></div>
    <div class="col-md-6">Column</div>
    <div class="col-md-6">Column</div> -->
<?php endblock()?>
