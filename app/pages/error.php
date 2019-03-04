<?php $pageTitle = "Error"; $pageLayout="container-max"; include '../base-t2.php';?>

<?php startblock('jumbotron');?>
<div class="error-page">
  <div class="row">
    <div class="col-md-7">
      <h1 class="display-1 text-muted">404
      </h1>
      <p class="lead">We've been unable to fetch the page you're after - it doesn't exist.</p>
      <p>
        <a href="#" class="btn btn-primary btn-lg">Go back</a>
      </p>
    </div>
    <div class="col-md-5">
      <div class="pup">
        <span class="error-code">404!</span>
        <img class="img-fluid error-image" src="<?php echo ($resURL) ?>site-images/pup.png" title="error page">
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
<?php startblock('page-body')?>
<table class="table table-striped">
      <thead>
        <tr>
          <th>Error Code</th>
          <th>Definition</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">401</th>
          <td>Access denied</td>
        </tr>
        <tr>
          <th scope="row">404</th>
          <td>Not found</td>
        </tr>
        <tr>
          <th scope="row">500</th>
          <td>Internal server error</td>
        </tr>
      </tbody>
    </table>

<?php endblock()?>
