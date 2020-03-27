<?php $blokk = false; $parent = "adm"; $pageLayout="-fluid"; $pageAction = true; $pageTitle = "Leadership Development & Community Engagement Coordinator"; include '../base-t2.php';?>

<?php startblock('page-body');?>
<div class="gel-doc">
   <!-- gel-doc-nav -->
   <aside class="gel-doc-nav">
   <?php include "partials/_stepper.html" ?>
   </aside>
   <!-- gel-doc-main -->
   <main class="gel-doc-main">
    <?php include "partials/_form-apply.html" ?>
   </main>
  <!-- gel-doc-footer -->
  <footer class="gel-doc-footer d-print-none text-center">
      <section class="container">
      <button type="button" class="btn btn-outline-primary">Back</button>
      <button type="button" class="btn btn-outline-primary">Save and Exit</button>
      <button type="button" class="btn btn-primary" disabled>Continue</button>
      </section>
  </footer>
</div>
<?php endblock()?>
