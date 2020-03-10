<?php $blokk = true; $pageTitle = "GEL Error"; $pageLayout=" container-max"; include '../base-t4.php';?>

<?php startblock('page-body')?>
<div class="error-page">
  <div class="row">
    <div class="col-sm-7 d-flex align-items-center order-2 order-sm-1">
      <section>
        <h1 class="display-1">500
        </h1>
        <h1>Our bad, this makes us very sad</h2>
        <p>Our technical team has been advised of the situation. Maybe try refreshing the page later.</p>
        <dl class="row mt-5">
          <span class="col-6 col-xl-7">
            <dt class="text-sm">Date and time</dt>
            <dd>4 Mar 2019, 9:34am UTC+11:00</dd>
          </span>
          <span class="col-6 col-xl-5">
            <dt class="text-sm">Reference</dt>
            <dd>12456384</dd>
          </span>
        </dl>
        <p>
          <a href="#" class="btn btn-primary">Contact Us</a>
        </p>
      </section>
    </div>
    <div class="col-sm-5 order-1">
        <img class="img-fluid error-image" src="https://ui.pageuppeople.com/gel/images/illustrations/error.svg" title="error page">
    </div>
  </div>
</div>
<?php endblock()?>
