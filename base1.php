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
      <div class="jumbotron" data-spy="affix" data-offset-top="70">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 col-lg-9">
              <h1>Page title</h1>
            </div>
            <div class="page-action hidden-xs col-sm-6 col-md-5 col-lg-3">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="text-center" href="#_" data-toggle="tooltip" data-placement="bottom" title="Print">
                      <i class="pu-icon pu-icon-lg pu-icon-printer"></i>
                    </a>
                  </li>
                  <li>
                    <a class="text-center" href="#_" data-toggle="tooltip" data-placement="bottom" title="Feedback">
                      <i class="pu-icon pu-icon-lg pu-icon-feedback"></i>
                    </a>
                  </li>
                  <li>
                    <a class="text-center" href="#_" data-toggle="tooltip" data-placement="bottom" title="Help">
                      <i class="pu-icon pu-icon-lg pu-icon-info"></i>
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
