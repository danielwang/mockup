<?php $pageTitle = "My Jobs"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-md-6 col-lg-4">
    <h5>Visibility</h5>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-ctrl active">
        <input type="radio" name="visibility" id="option1" autocomplete="off" checked> My jobs
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="visibility" id="option2" autocomplete="off"> Team jobs
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="visibility" id="option3" autocomplete="off"> All jobs
      </label>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <h5 class="mt-2 mt-md-0">Status</h5>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-ctrl active">
        <input type="radio" name="status" id="option1" autocomplete="off" checked> Current
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="status" id="option2" autocomplete="off"> Archived
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="status" id="option3" autocomplete="off"> All
      </label>
    </div>
  </div>
  <div class="col-lg-4 d-flex justify-content-sm-end align-items-end mt-3">
      <span class="mb-2 mr-2">133 results</span>
      <button class="btn btn-ctrl" type="button" data-toggle="modal" data-target="#exampleModal"><i aria-hidden="true" class="gel-icon-settings"></i> Settings </button>
  </div>
</div>

<table class="table table-striped table-hover mt-3">
    <caption class="sr-only">List of jobs</caption>
    <thead class="thead-dark">
      <tr>
        <th scope="col">Job Title</th>
        <th scope="col">Job ID</th>
        <th scope="col">Recruiter
        </th>
        <th scope="col">Status
        </th>
        <!-- <th scope="col">Applications</th> -->
        <th scope="col">Opening date</th>
        <th scope="col">Closing date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($x =1; $x <= 15; $x++) {?>
      <tr>
        <th scope="row">Human Resources Manager </th>
        <td data-title="Job ID">
          <?php echo $x * 2  + 53302042 ?>
        </td>

        <td data-title="Recruiter"> Peter Smith  </td>
        <td data-title="Status">
          Offer Made
        </td>
        <!-- <td data-title="Applications"><a href="cl"><?php //echo random_int(1, 100) ?></a></td> -->
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td data-title="View">
          <a aria-label="View application" href="#<?php echo $x ?>"><i class="gel-icon-lg gel-icon-eye"></i></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Retail Customer Service Officer </th>
        <td data-title="Job ID">
          <?php echo $x + 53302042 ?>
        </td>

        <td data-title="Recruiter"> Michael Jackson </td>
        <td data-title="Status">
          Offer Made
        </td>
        <!-- <td data-title="Applications"><a href="cl"><?php //echo random_int(1, 100) ?></a></td> -->
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td data-title="View">
          <a aria-label="View application" href="#<?php echo $x ?>"><i class="gel-icon-lg gel-icon-eye"></i></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Settings</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
          </button>
        </div>
        <div class="modal-body">
          <p class="lead">Select the columns you wish to add/remove</p>
          <div class="row">
            <?php for ($c =1; $c <= 2; $c++) {?>
                <div class="col-6">
                  <?php for ($i =1; $i <= 5; $i++) {?>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class ="custom-control-input" checked id="<?php echo $c . '-' .$i ?>">
                      <label class="custom-control-label" for="<?php echo $c . '-' . $i ?>">
                        Column <?php echo $c . '-' . $i ?>
                      </label>
                    </div>
                  <?php } ?>
                </div>
            <?php } ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Apply</button>
        </div>
      </div>
    </div>
  </div>

<?php endblock() ?>
