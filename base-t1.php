<!-- ******************
*** T1 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php'; ?>

<?php emptyblock('page-notification') ?>

  <nav id="gel-navbar" class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="nav-toggle"> <i class="fa fa-bars"></i></div>
      <div class="navbar-header">
        <?php startblock('logo') ?><a href="<?php echo ($resURL) ?>" class="logo"> <img src="<?php echo ($resURL) ?>assets/images/mockup-logo.png" width="120"/></a><?php endblock() ?>
      </div>
      <ul class="nav navbar-nav navbar-right">
          <!-- <li>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input class="form-control" placeholder="Quick search" type="text" />
              </div>
            </form>
          </li> -->
        <!-- <li><button class="btn btn-info btn-sm margin-right">Action</button></li> -->
        <li class="dropdown">
          <a class="avatar dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img class="gel-avatar gel-avatar-sm" src="<?php echo ($resURL) ?>assets/images/avatar.svg" alt="John's profile"> John <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu dropdown-menu-right user-menu">
            <!-- User name -->
            <li class="user-header">
              <h5 class="margin-bottom-none">John Smith</h5>
              <p>
                <small>john.smith@pageuppeople.com</small>
              </p>
              <p><button type="button" class="btn btn-sm btn-info btn-block btn-round"> View Profile</button></p>

            </li>
            <li>
              <button type="button" class="btn btn-sm btn-info btn-block btn-round btn-outline"> Log out</button>
            </li>
            <!-- Menu Body -->
            <li>
              <hr>
              <span>BETA</span>
              <span class="gel-toggle-btn gel-toggle-btn-green">
                  <label>
                      <input type="checkbox">
                      <span></span>
                  </label>
              </span>
              <a class="no-padding" href="#"> Give beta feedback</a>
            </li>
          </ul>


          <!-- <div class="dropdown-menu dropdown-menu-right">
            <h5>John Smith</h5>
            <p>john.smith@compamy.com</p>
            <button type="button" class="btn btn-sm btn-info btn-round"> View Profile</button>
            <hr>
            <p>
              <span class="gel-toggle-btn">
                  <label>
                      <input type="checkbox">
                      <span>Default</span>
                  </label>
              </span>
            </p>
            <p><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></p>
            <p><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></p>
          </div> -->
        </li>
        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"><i class="gel-icon gel-icon-info"></i></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Live support</a> </li>
            <li><a href="#">Knowledge Portal</a> </li>
            <li><a href="#">Raise support case</a> </li>
          </ul>
        </li> -->
      </ul>
      <?php include ("partials/nav-${parent}.html");?>
    </div>
  </nav>

  <aside id="gel-menu" role='menu'>
    <menu>
      <span class="nav-toggle close"><i class="fa fa-times fa-lg"></i></span>
      <?php include ("partials/menu-${parent}.html");?>
    </menu>
  </aside>
<!-- page header -->
    <header id="gel-header" data-spy="affix" data-offset-top="114" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 col-lg-9">
              <h1 class="page-title"><?php startblock('page-title') ?> Page title <?php endblock() ?></h1>
            </div>
            <div class="page-actions hidden-xs col-sm-6 col-md-5 col-lg-3">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="text-center" href="#_" data-placement="bottom" title="Print">
                      <i class="fa fa-lg fa-print" data-tooltip="tooltip" title="Print"></i>
                    </a>
                  </li>
                  <li>
                    <a class="text-center" href="#_" data-placement="bottom" title="Feedback">
                      <i class="fa fa-lg fa-comments" data-tooltip="tooltip" title="Feedback"></i>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-toggle text-center"
                       href="#_"
                       title="More"
                       data-html="true"
                       data-toggle="dropdown">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hidden="true" data-tooltip="tooltip" title="More"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="#">Live support</a> </li>
                      <li><a href="#">Knowledge Portal</a> </li>
                      <li><a href="#">Raise support case</a> </li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <?php startblock('page-tabs') ?>
                <div class="page-tabs">
                  <ul class="nav navbar-nav" >
                    <li class="active"><a href="#">Tab one</a></li>
                    <li><a href="#">Tab two</a></li>
                    <li><a href="#">Tab three</a></li>
                    <li><a href="#">Tab four</a></li>
                    <li><a href="#">Tab five</a></li>
                    <li><a href="#">Tab six</a></li>
                  </ul>
                </div>
              <?php endblock() ?>
            </div>
            <!-- <div class="hidden-xs col-sm-6 col-md-5 col-lg-3">
              <?php startblock('page-search') ?>
                <form class="page-search">
                  <input class="form-control search-input" placeholder="Search for jobs or candidates" type="text" />
                  <span class="search-icon"><i class="fa fa-lg fa-search"></i></span>
                </form>
              <?php endblock() ?>
            </div> -->
        </div>
    </header>
<!-- page body -->
		<main id="gel-main" role="main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include 'foot.html';?>
