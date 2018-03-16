<?php $pageTitle = "New Starter Tasks"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-md-4">
    <h3>Emily Johnson</h3>
    <h6>Position:</h6>
    <p>Sennior project manager - Customer Services</p>
    <h6>Start Date:</h6>
    <p>31 March 2018</p>
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-sm-8">
        <h6>Visibility</h6>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-ctrl active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked=""> All tasks
          </label>
          <label class="btn btn-ctrl">
            <input type="radio" name="options" id="option2" autocomplete="off"> Mandy Manger
          </label>
          <label class="btn btn-ctrl">
            <input type="radio" name="options" id="option3" autocomplete="off"> Emily Employee
          </label>
        </div>
      </div>
      <div class="col-sm-4 d-flex justify-content-end align-items-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create a task</button>

        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create a new task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
                </button>
              </div>
              <div class="modal-body">
                <?php include ("../_partials/components/form-sm.html");?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light mr-auto" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

    <?php for ($c =1; $c <= 4; $c++) {?>
      <h5 class="mt-5">Before James's First Day</h5>
      <table class="table mt-2">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Task</th>
          <th scope="col">Assigned to</th>
          <th scope="col">Due date</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><a href="#">Get your gears set up</a></th>
          <td data-title="Assigned to">Emily Employee</td>
          <td data-title="Due date">05 March </td>
          <td data-title="Status" class="text-success">Completed</td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Attend Culture Orientation</a></th>
          <td data-title="Assigned to">Jacob</td>
          <td data-title="Due date">06 March </td>
          <td data-title="Status" class="text-danger">Overdue</td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Provide scope items to new starter</a></th>
          <td data-title="Assigned to">Larry</td>
          <td data-title="Due date">the Bird</td>
          <td data-title="Status">Open</td>
        </tr>
      </tbody>
    </table>
  <?php } ?>
  </div>
</div>

<?php endblock()?>
