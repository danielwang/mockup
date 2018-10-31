<?php $pageTitle = "Customization"; $hasSubPage = false;include '../base-ui.php';?>

<?php startblock('page-tagline');?>

<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row mb-5">
  <div class="col-sm-2 col-lg-3">
    <h1 class="text-muted text-sm-right">Why</h1>
  </div>
  <div class="col-sm-8 col-lg-7">
    <p class="lead">We support HTML in some cases, but with limited stylings. Because the new design going forward must meet our key criteria: Accessibility, Mobile responsive, Scalability, Consistency, Maintainability and Aesthetics.</p>
    <p class="lead">Here are some new rules we have created along with the building of new design framework</p>
  </div>
</div>
<!-- ****************  Do's **************** -->
<div class="row mb-5">
  <div class="col-sm-2 col-lg-3">
    <h1 class="text-sm-right text-success">Do's</h1>
  </div>
  <div class="col-sm-8 col-lg-7">
    <ul class="timeline">
      <li class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.</p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>March 23, 2016</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>April 02, 2016</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>April 28, 2016</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- **************** Don'ts **************** -->
<div class="row">
  <div class="col-sm-2 col-lg-3">
    <h1 class="text-sm-right text-danger">Don'ts</h1>
  </div>
  <div class="col-sm-8 col-lg-7">
    <ul class="timeline bad">
      <li class="timeline-item">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Native HTML tags, such as h1, a, p, strong etc</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.</p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>Leverage GEL utility classes</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>text-danger  (To be documented in all utility classes in one place)
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>April 02, 2016</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Use GEL font icons </h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
      <li class="timeline-item">
        <div class="timeline-info">
          <span>April 28, 2016</span>
        </div>
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h5 class="timeline-title">Event Title</h5>
          <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
            mollis pretium. Pellentesque ut neque.
          </p>
        </div>
      </li>
    </ul>
  </div>
</div>
<style>
.timeline-marker:before{
  background: transparent;
  color: #10a746;
  content: "\e982";
  font-family: 'gel-icon';
  font-size: 32px;
  top: 0;
  left: -10px;
}
.timeline-marker:after {
    content: "";
    width: 1px;
    background: transparent;
    display: block;
    position: absolute;
    top: 24px;
    bottom: 0;
    left: 6px;
    border-left: 1px dashed #10a746;
}

.bad .timeline-marker:before{
  background: transparent;
  color: #e81700;
  content: "\e910";
  font-family: 'gel-icon';
  font-size: 32px;
  top: 0;
  left: -10px;
}
.bad .timeline-marker:after {
    content: "";
    width: 1px;
    background: transparent;
    display: block;
    position: absolute;
    top: 24px;
    bottom: 0;
    left: 6px;
    border-left: 1px dashed #e81700;
}
</style>
<?php endblock()?>
