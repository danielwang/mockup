<!-- ******************
*** T6 horizontal ***
******************  -->
<?php
  $site = "PageUp GEL";
  require_once 'ti.php';
  include_once '_head.php';
  include_once 'ui/func.php';
  ?>
<style>
    #gel-h-navbar{
        padding: .5rem;
        width: 4rem;
        height:100vh;     
    }
    #gel-h-menu ul{
        padding:0;
    }
    #gel-h-main{
        flex-grow: 1;
    }
</style>

<div class="d-flex">  
    <nav id="gel-h-navbar" class="bg-navy" role="navigation">
        <svg width="38px" height="38px" viewBox="0 0 240 240" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="PageUp-/-Icon-/-White" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="PageUp-/-Icon_White" fill="#FFFFFF">
                <path d="M119.9,239.598326 C110.4,239.598326 101.4,235.882845 94.8,229.154812 L11.3,145.305439 C-2.6,131.34728 -2.6,108.552301 11.3,94.6945607 L94.8,10.8451883 C101.6,4.0167364 110.4,0.40167364 120.1,0.40167364 C129.6,0.40167364 138.6,4.11715481 145.2,10.8451883 L228.7,94.6945607 C242.6,108.65272 242.6,131.447699 228.7,145.305439 L145.2,229.154812 C138.4,235.882845 129.6,239.598326 119.9,239.598326 Z" id="Path"></path>
            </g>
        </g>
        </svg>
    </nav>
       <!-- ************ menu ************  -->
    <aside id="gel-h-menu" role='menu' class="bg-light border-right">
        <menu class="scroll">
        <?php include ("_partials/menu/${parent}.html");?>
        </menu>
    </aside>
    <!-- page body -->
    <main id="gel-h-main">
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
        <section class="container-fluid">
            <?php
                startblock('page-body');
                endblock();
            ?>
        </section>
    </main>
 </div>   
<?php include '_foot.html';?>
