<?php $pageTitle = "New Starter Tasks"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-lg-3">
    <h3>Emily Johnson</h3>
    <div class="row">
      <div class="col-sm-6 col-lg-12">
        <h5>Position:</h5>
        <p>Sennior project manager - Customer Services</p>
      </div>
      <div class="col-sm-6 col-lg-12">
        <h5>Start Date:</h5>
        <p>31 March 2018</p>
      </div>
    </div>
    <p><button class="btn btn-outline-primary btn-block">Notify Emily updates</button></p>
    <div class="row">
      <div class="col-sm-6 col-lg-12">
        <h5>Additional tasks</h5>
        <p>Organizational Introductions and Onboarding tasks <a href="#"><i class="gel-icon-add"></i></a></p>
      </div>
      <div class="col-sm-6 col-lg-12">
        <h5>My Favourite tasks</h5>
        <p>There is no task</p>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
    <div class="row">
      <div class="col-sm-8">
        <h6>Visibility</h6>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-ctrl active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked=""> All tasks
          </label>
          <label class="btn btn-ctrl">
            <input type="radio" name="options" id="option2" autocomplete="off"> Manger
          </label>
          <label class="btn btn-ctrl">
            <input type="radio" name="options" id="option3" autocomplete="off"> Employee
          </label>
        </div>
      </div>
      <div class="col-sm-4 d-flex justify-content-end align-items-end mt-3">
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#createModal">Create a task</button>
      </div>
  </div>

    <?php for ($c =1; $c <= 4; $c++) {?>
      <h5 class="mt-5">Before James's First Day</h5>
      <table class="table mt-2">
        <caption class="sr-only">List of tasks</caption>
        <thead class="thead-dark">
          <tr>
            <th scope="col">Task</th>
            <th scope="col">Assigned to</th>
            <th scope="col">Due date</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="#">Get your gears set up</a></th>
            <td data-title="Assigned to">Emily Employee</td>
            <td data-title="Due date">05 March </td>
            <td data-title="Status" class="text-success">Completed</td>
            <td data-title="Actions" class="d-flex justify-content-between align-items-center"><a href="#"><i class="gel-icon-pencil"></i></a><a title ="Delete task" href="#" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash"></i></a><i class="dragable gel-icon-drag"></i></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Attend Culture Orientation</a></th>
            <td data-title="Assigned to">Jacob</td>
            <td data-title="Due date">06 March </td>
            <td data-title="Status" class="text-danger">Overdue</td>
            <td data-title="Actions" class="d-flex justify-content-between align-items-center"><a href="#"><i class="gel-icon-pencil"></i></a><a title ="Delete task" href="#" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash"></i></a><i class="dragable gel-icon-drag"></i></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Provide scope items to new starter</a></th>
            <td data-title="Assigned to">Larry</td>
            <td data-title="Due date">the Bird</td>
            <td data-title="Status">Open</td>
            <td data-title="Actions" class="d-flex justify-content-between align-items-center"><a href="#"><i class="gel-icon-pencil"></i></a><a title ="Delete task" href="#" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash"></i></a><i class="dragable gel-icon-drag"></i></td>
          </tr>
        </tbody>
      </table>
  <?php } ?>
  </div>
</div>

<!-- Create task Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Create a new task</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close"></span>
        </button>
      </div>
      <div class="modal-body">
        <?php include ("../ui/_partials/form-sm.html");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete task Modal -->
<div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="deleteTask" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Delete task?</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close-o"></span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Coffee with Emily Employee</h5>
        <p>Welcome the starter with a cup of coffee and cool discussion abouth her role and expextations.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
