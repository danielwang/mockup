<?php $pageTitle = "My jobs"; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Hiring manager dashboard
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-10">
    <div class="form-group">
      <p><label for="">Visibility</label></p>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-default active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> All jobs
        </label>
        <label class="btn btn-default">
          <input type="radio" name="options" id="option2" autocomplete="off"> My jobs
        </label>
        <label class="btn btn-default">
          <input type="radio" name="options" id="option3" autocomplete="off"> Team jobs
        </label>
      </div>
    </div>
  </div>
  <div class="col-sm-2 text-right">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
      <i class="fa fa-cog"></i> Settings
    </button>
  </div>
</div>
<table class="table table-striped table-responsive responsive-table table-hover">
    <thead>
      <tr>
        <th></th>
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
        <td>
          <div class="checkbox checkbox-success">
            <input id="checkbox4" type="checkbox">
            <label></label>
          </div>
        </td>
        <th scope="row"><a href="jc">Human Resources Officer</a></th>
        <td data-title="Job ID">
          53302042
        </td>

        <td data-title="Recruiter"> John Smith  </td>
        <td data-title="Status">
          Offer Made
        </td>
        <td data-title="Applications"><a href="cl">27</a></td>
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td>
              <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default">Edit</button>
                <button type="button" class="btn btn-default">
                  <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                </button>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a href="#">Dropdown link</a>
                    </li>
                    <li>
                      <a href="#">Dropdown link</a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox checkbox-success">
            <input id="checkbox4" type="checkbox">
            <label></label>
          </div>
        </td>
        <th scope="row"><a href="jc">Retail Customer Service Officer</a></th>
        <td data-title="Job ID">
          53302042
        </td>

        <td data-title="Recruiter"> John Smith  </td>
        <td data-title="Status">
          Offer Made
        </td>
        <td data-title="Applications"><a href="cl">27</a></td>
        <td data-title="Opening date">Jul 14, 2017</td>
        <td data-title="Closing date">Jan 23, 2018</td>
        <td>
              <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default">Edit</button>
                <button type="button" class="btn btn-default">
                  <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                </button>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a href="#">Dropdown link</a>
                    </li>
                    <li>
                      <a href="#">Dropdown link</a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php endblock() ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Set columns</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <?php for ($i =1; $i <= 2; $i++) {?>
            <div class="col-md-6">
              <?php for ($m = 0; $m <= 5; $m++) {?>
              <div class="checkbox checkbox-default">
                <input type="checkbox" checked="" id="checkbox<?php echo $i . '-' . $m ?>">
                <label for="checkbox<?php echo $i . '-' . $m ?>">
                  Column <?php echo $i . '-' . $m ?>
                </label>
              </div>
              <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
