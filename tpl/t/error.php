<?php $pageTitle = "Error page"; include '../base.php';?>

<?php startblock('page-header');?>
<section class="jumbotron error-page">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="jumbotron-heading">Uh oh...
        </h1>
        <h2>We've been unable to fetch the page you're after - it doesn't exist.</h2>
        <p></p>
        <p>
          <a href="#" class="btn btn-success btn-lg">Go back</a>
        </p>
      </div>
      <div class="col-md-5">
        <div class="pup">
          <span class="error-code">404!</span>
          <img class="img-responsive error-image" src="<?php echo ($resURL) ?>images/pup.png" title="error page"/>
        </div>
      </div>

    </div>
  </section>
<?php endblock()?>
<?php startblock('page-body');?>
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
