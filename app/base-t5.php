<!-- ******************
*** T5 special page, login ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

  <!-- ************  page body ************ -->
    <main class="d-flex vw-100 vh-100">
        <section class="w-50 bg-navy d-flex justify-content-center align-items-center px-7">
            <?php startblock('page-body')?>
            <?php endblock()?>
        </section>
        <section class="w-50 d-flex flex-column justify-content-center align-items-center px-7 blokk bg-white">
            <img class="img-fluid" src="https://www.pageuppeople.com/wp-content/uploads/2020/03/06032020-blog-main-V2-01-Mid-Res-1024x512.png" />
            <h1 class="my-5">Our job advertising template</h1>
            <p class="lead text-center">
            Our job advertising template just keeps on giving. You asked for it and we have delivered it.</p>
        </section>    
    </main>  

  <!-- ************  page footer ************ -->

  <?php include '_foot.html';?>
