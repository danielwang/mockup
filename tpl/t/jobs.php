<?php $pageTitle = "Hiring manager dashboard"; $parent = "hm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Hiring manager dashboard
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>

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
