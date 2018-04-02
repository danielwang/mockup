<!-- ******************
*** T5 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once '_head.php';
  include_once 'ui/func.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><span class="nav-toggle"><i class="gel-icon-menu gel-icon-2x"></i></span></li>
        <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="140"/><?php endblock() ?></a></li>
      </ul>
    </div>
  </nav>
  <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
    <span class="nav-toggle close"><i class="gel-icon-close-o gel-icon-2x"></i></span>

    <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="140"/><?php endblock() ?></a>

    <menu class="scroll">
      <?php include ("_partials/menu/${parent}.html");?>
    </menu>
  </aside>
<!-- page header -->
<header id="gel-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-lg-8">
          <h1 class="page-title"><?php echo $pageTitle  ?></h1>
        </div>
        <div class="page-actions col-md-3 col-lg-4">
          <span class="item">
              <a class="text-center" href="#_" title="Print">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-print" title="Print"></i> <span>Print</span>
              </a>
          </span>
          <span class="item">
              <a class="text-center" href="#_" title="Feedback">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-feedback" title="Feedback"></i> <span>Feedback</span>
              </a>
          </span>
            <span class="item">
              <a class="text-center" href="#_" title="Help" data-toggle="dropdown">
                <i class="gel-icon-lg gel-icon-help" aria-hidden="true"></i> <span>Help</span>
              </a>
            </span>
          </div>
      </div>
      <ul class="page-tabs nav" role="tablist">
        <?php startblock('page-tabs') ?>
        <?php endblock() ?>
      </ul>
    </div>
</header>
<!-- page body -->
		<main id="gel-main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include '_foot.html';?>
