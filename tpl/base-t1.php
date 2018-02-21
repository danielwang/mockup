<!-- ******************
*** T1 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php'; ?>

   <?php emptyblock('page-notification') ?>


<!-- ************ topbar ************ -->
    <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
      <div class="container">
        <!-- logo  -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><span class="nav-toggle"><i class="gel-icon-menu-o gel-icon-2x"></i></span></li>
          <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
        </ul>
        <ul class="navbar-nav">
          <?php include ("partials/nav/${parent}.html");?>
          <!-- user panel -->
          <?php include ("partials/nav/user-panel.html");?>
          <!-- help -->
          <?php include ("partials/nav/help.html");?>
        </ul>
      </div>
    </nav>
<!-- ************ menu ************  -->
    <aside id="gel-menu" role='menu'>
      <span class="nav-toggle close"><i class="gel-icon-close-o gel-icon-2x"></i></span>

      <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a>
      <?php include ("partials/menu/user-panel.html");?>

      <menu>
        <?php include ("partials/menu/${parent}.html");?>
      </menu>
    </aside>

<!-- ************  page header ************ -->
<?php startblock('page-header');?>
    <header id="gel-header" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-9 col-lg-8">
              <h1 class="page-title"><?php startblock('page-title') ?> Page title consequatur facere deleniti cumque <?php endblock() ?></h1>
            </div>
            <div class="page-actions hidden-xs col-sm-4 col-md-3 col-lg-4">
              <span class="item">
                  <a class="text-center" href="#_" title="Print">
                    <i class="gel-icon-lg gel-icon-print" title="Print"></i> <span class="hidden-xs hidden-sm hidden-md">Print</span>
                  </a>
              </span>
              <span class="item">
                  <a class="text-center" href="#_" title="Feedback">
                    <i class="gel-icon-lg gel-icon-feedback" title="Feedback"></i> <span class="hidden-xs hidden-sm hidden-md">Feedback</span>
                  </a>
              </span>
                <span class="item">
                  <a class="dropdown-toggle text-center"
                     href="#_"
                     title="More"
                     data-html="true"
                     data-toggle="dropdown">
                    <i class="gel-icon-lg gel-icon-help" aria-hidden="true" title="More"></i> <span class="hidden-xs hidden-sm hidden-md">Help</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="gel-icon-support" aria-hidden="true"></i>  Live support</a> </li>
                    <li><a href="#"><i class="gel-icon-knowledge-portal" aria-hidden="true" title="More"></i> Knowledge Portal</a> </li>
                    <li><a href="#"><i class="gel-icon-bullhorn" aria-hidden="true" title="More"></i> Raise support case</a> </li>
                  </ul>
                </span>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <?php startblock('page-tabs') ?>
                <div class="page-tabs">
                    <span class="item active"><a href="#">Tab ducimus</a></span>
                    <span class="item"><a href="#">Tab consequatur</a></span>
                    <span class="item"><a href="#">Tab facere</a></span>
                    <span class="item"><a href="#">Tab cumque</a></span>
                    <span class="item"><a href="#">Tab maiores</a></span>
                    <span class="item"><a href="#">Tab nemo</a></span>
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
<?php endblock()?>

<!-- ************  page body ************ -->
		<main id="gel-main" role="main" class="<?php echo ($layout) ?>">
      <?php if ($layout) {
        startblock('page-body');
        endblock();
       } else { ?>
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
    <?php } ?>
		</main>
<?php include 'foot.html';?>
