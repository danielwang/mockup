<!-- ******************
*** T5 template ***
******************  -->
<?php
  $site = "PageUp GEL";
  require_once 'ti.php';
  include_once '_head.php';
  include_once 'ui/func.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><span class="nav-toggle"><i class="gel-icon-menu gel-icon-2x"></i></span></li>
        <li class="nav-item"><a title="PageUp Global Experience Language" class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="PageUp Global Experience Language" src="<?php echo ($resURL) ?>site-images/gel-logo.png" width="60"/><?php endblock() ?> <sub class="badge badge-info"><small>WIP</small></sub></a></li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="Slack" href="https://pageup.slack.com/messages/C2X8J0V70/team/" title="Slack">
          <i aria-hidden="true" class="gel-icon-lg gel-icon-slack" title="Slack"></i>
        </a></li>
        <!-- <li class="nav-item"><a data-toggle="tooltip" data-placement="bottom" data-original-title="Bootstrap 4" class="nav-link" target="_blank" href="http://getbootstrap.com/docs/4.0/getting-started/introduction/" title="Bootstrap 4">
        <i class="gel-icon-lg gel-icon-bootstrap" aria-hidden="true"></i>

          </a></li> -->
        <li class="nav-item mr-0"><a class="nav-link" data-toggle="tooltip" data-placement="bottom" target="_blank" href="https://github.com/PageUpPeopleOrg/PU-Styleguide" title="Github">
            <i class="gel-icon-lg gel-icon-github" aria-hidden="true"></i></a>
      </ul>
    </div>
  </nav>
  <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
    <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close-o gel-icon-2x"></i></a>

    <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="logo" src="<?php echo ($resURL) ?>site-images/pageup-gel-logo.png" width="120"/><?php endblock() ?></a>

    <menu class="scroll">
      <?php include ("_partials/menu/ui.html");?>
    </menu>
  </aside>
<!-- page header -->
  <header id="gel-header" class="py-lg-4" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-2 order-lg-1">
          <h1 class="page-title"><?php echo $pageTitle  ?></h1>
          <blockquote class="tagline"><?php startblock('page-tagline');?>Tagline goes here<?php endblock() ?></blockquote>
        </div>
        <?php startblock('page-actions');?>
          <div class="page-actions col-lg-4 mt-lg-2">
          <!-- <span class="item">
            <a class="text-center" target="_blank" href="#" title="Download Sketch files">
              <i class="gel-icon-lg gel-icon-sketch" aria-hidden="true"></i> <span>Sketch</span>
            </a>
          </span> -->
          <span class="item">
              <a class="text-center" target="_blank" href="https://pageup.slack.com/messages/C2X8J0V70/team/" title="Slack">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-feedback" title="Feedback"></i> <span>Feedback</span>
              </a>
          </span>
          <span class="item">
              <a class="text-center" onclick="javascript: window.print();" href="#" title="Print">
                <i aria-hidden="true" class="gel-icon-lg gel-icon-print" title="Print"></i> <span>Print</span>
              </a>
          </span>
          </div>
        <?php endblock() ?>
      </div>
    </div>
  </header>
  <!-- ************  page sub pages ************ -->
  <?php if ($hasSubPage) { startblock('page-tabs') ?>
  <nav id="gel-subpages" role="navigation">
     <div class="container">
        <nav class="page-tabs nav" role="tablist">
            <?php pageTabs($pageTitle);  ?>
        </nav>
    </div>
  </nav>
  <?php endblock(); }?>
<!-- page body -->
	<main id="gel-main">
		<section class="container">
      <?php
      if ($hasSubPage){  // sub pages tab contents
        echo "<div class='tab-content'>";
        showMarkup($pageTitle, 'html');
        echo "</div>";
      } else { // content
        startblock('page-body');
			  endblock();
      }
      ?>
		</section>
	</main>
  <footer id="gel-footer" role="footer">
    <div class="container">
      <div class="row">
        <div class="col-6">Design by DUX team 2018</div>
        <div class="col-6 text-right">
          <a href="#">PageUp</a>
        </div>
      </div>
    </div>
  </footer>
<?php include '_foot.html';?>
