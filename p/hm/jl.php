<?php $parent = "hm"; include '../../base-t1.php';   ?>

<?php emptyblock('page-notification') ?>
<?php emptyblock('quick-nav') ?>

<?php startblock('page-title') ?>
Requisitions
<?php endblock() ?>
<?php emptyblock('page-tabs') ?>
<?php emptyblock('page-search') ?>
<?php startblock('page-body');?>
<article class="margin-bottom">
  <div data-toggle="buttons" class="gel-segmented-control btn-group">
    <label class="btn btn-sm active">
      <input id="option1" name="options" type="radio">
      All
    </label>
    <label class="btn btn-sm">
      <input id="option2" name="options" type="radio">
      Pending
    </label>
    <label class="btn btn-sm">
      <input id="option3" name="options" type="radio">
      Completed
    </label>
  </div>
</article>
  <table class="table responsive-table table-hover">
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
      <?php for ($x =1; $x <= 5; $x++) {?>
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
<?php endblock()?>
