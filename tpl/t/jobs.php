<?php $pageTitle = "My Jobs"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-6">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-ctrl active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> My jobs
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="options" id="option2" autocomplete="off"> Team jobs
      </label>
      <label class="btn btn-ctrl">
        <input type="radio" name="options" id="option3" autocomplete="off"> All jobs
      </label>
    </div>
  </div>
  <div class="col-sm-6 d-flex justify-content-end">
      <button class="btn btn-ctrl" type="button" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-cog fa-lg"></i> Settings </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Settings</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
              </button>
            </div>
            <div class="modal-body">
              <p class="lead">Select the columns you wish to add/remove</p>
              <div class="row">
                <?php for ($c =1; $c <= 2; $c++) {?>
                    <div class="col-6">
                      <?php for ($i =1; $i <= 10; $i++) {?>
                        <div class="checkbox checkbox-default">
                          <input type="checkbox" checked="" id="<?php echo $c . '-' .$i ?>">
                          <label for="<?php echo $c . '-' . $i ?>">
                            Column <?php echo $c . '-' . $i ?>
                          </label>
                        </div>
                      <?php } ?>
                    </div>
                <?php } ?>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Apply</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="table-responsive mt-3">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Job Title</th>
        <th scope="col">Job ID</th>
        <th scope="col">Recruiter
        </th>
        <th scope="col">Status
        </th>
        <th scope="col">Applications</th>
        <th scope="col">Opening date</th>
        <th scope="col">Closing date</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php for ($x =1; $x <= 15; $x++) {?>
      <tr>
        <th scope="row">Human Resources Manager <?php echo $x ?></th>
        <td data-title="Job ID">
          <?php echo $x * 2  + 53302042 ?>
        </td>

        <td data-title="Recruiter"> Peter Smith  </td>
        <td data-title="Status">
          Offer Made
        </td>
        <td data-title="Applications"><a href="cl"><?php echo random_int(1, 100) ?></a></td>
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td data-title="View">
          <a href="#"><i class="gel-icon-lg gel-icon-eye"></i></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Retail Customer Service Officer <?php echo $x ?></a></th>
        <td data-title="Job ID">
          <?php echo $x + 53302042 ?>
        </td>

        <td data-title="Recruiter"> Michael Jackson </td>
        <td data-title="Status">
          Offer Made
        </td>
        <td data-title="Applications"><a href="cl"><?php echo random_int(1, 100) ?></a></td>
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td data-title="View">
          <a href="#"><i class="gel-icon-lg gel-icon-eye"></i></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<?php endblock() ?>
