<!-- ******************
*** T1 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
  include_once 'partials/menu.html';
  ?>
		<main class="content-wrapper">
      <!-- jumbotron -->
      <?php startblock('top') ?>
      <div class="jumbotron affix" data-spy="affix" data-offset-top="204">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 col-lg-9">
              <h1>Template heading</h1>
            </div>
            <div class="page-action hidden-xs col-sm-6 col-md-5 col-lg-3">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="text-center" href="#_">
                      <i class="pu-icon pu-icon-lg pu-icon-printer"></i>
                      <h6>Print</h6>
                    </a>
                  </li>
                  <li>
                    <a class="text-center" href="#_">
                      <i class="pu-icon pu-icon-lg pu-icon-feedback"></i>
                      <h6>Feedback</h6>
                    </a>
                  </li>
                  <li>
                    <a class="text-center" href="#_">
                      <i class="pu-icon pu-icon-lg pu-icon-info"></i>
                      <h6>Help</h6>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="sub-page">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Tab one</a></li>
                <li><a href="#">Tab two</a></li>
                <li><a href="#">Tab three </a></li>
                <li><a href="#">Tab four </a></li>
                <li><a href="#">Tab five</a></li>
              </ul>
          </div>
        </div>
      </div>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include 'foot.html';?>
