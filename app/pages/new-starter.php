<?php $pageTitle = "New Starter Tasks"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-lg-3">
    <h3>Emily Johnson</h3>
    <div class="row">
      <div class="col-sm-6 col-lg-12">
        <h5 class="mb-0">Position:</h5>
        <p>Sennior project manager</p>
      </div>
      <div class="col-sm-6 col-lg-12">
        <h5 class="mb-0">Start Date:</h5>
        <p>31 March 2018</p>
      </div>
    </div>
    <p class="mb-4"><button class="btn btn-outline-primary btn-block">Notify Emily of updates</button></p>
    <div class="row">
      <div class="col-sm-6 col-lg-12">
        <h4 class="mb-1">Additional tasks</h4>
        <p class="border-bottom clearfix pb-1 pr-5">Organizational Introductions and Onboarding tasks
          <span class="float-right clearfix mr-n-5"><a href="#" aria-label="Add"><i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i></a></span>
        </p>
        <p class="border-bottom clearfix pb-1 pr-5">New starter signed contract?<span class="float-right mr-n-5"><a href="#" aria-label="Add"><i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i></a></span></p>
        <p class="border-bottom clearfix pb-1 pr-5">On-site client visit <span class="float-right mr-n-5"><a href="#" aria-label="Add"><i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i></a></span></p>
      </div>
      <div class="col-sm-6 col-lg-12">
        <h4 class="mt-4 mb-1">My Favourite tasks</h4>
        <p class="border-bottom clearfix pb-1 pr-5">Probation Check
          <span class="float-right mr-n-5">
            <a href="#" aria-label="Edit"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></a>
            <a href="#" aria-label="Add"><i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i></a>
          </span>
        </p>
        <p class="border-bottom clearfix pb-1 pr-5">Coffee with new starter
          <span class="float-right mr-n-5">
            <a href="#" aria-label="Edit"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></a>
            <a href="#" aria-label="Add"><i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i></a>
          </span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
     <div class="row">
      <div class="order-2 order-md-1 mt-3 mt-md-0 col-sm-8 col-md-7">
        <h5>Visibility</h5>
        <fieldset>
          <legend class="sr-only">visibility</legend>
          <div class="btn-group btn-group-toggle segmented-control">
            <label>
              <input type="radio" name="options-seg-v" id="option1" autocomplete="off" checked="checked">
              <span class="btn btn-ctrl" title="All tasks">
                All tasks
              </span>
            </label>
            <label>
              <input type="radio" name="options-seg-v" id="option2" autocomplete="off">
              <span class="btn btn-ctrl" title="Manager">
                Manager
              </span>
            </label>
            <label>
              <input type="radio" name="options-seg-v" id="option3" autocomplete="off">
              <span class="btn btn-ctrl" title="Employee">
                Employee
              </span>
            </label>
          </div>
        </fieldset>
      </div>
      <div class="order-1 order-md-2 col-sm-4 offset-md-2 col-md-3 d-flex justify-content-end align-items-end mt-3">
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#createModal">Create a task</button>
      </div>
    </div>
      <table class="table mt-3 mt-md-4">
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
        <?php for ($c =1; $c <= 4; $c++) {?>
          <tr><td scope="row" class="section-heading" colspan="5"> <h5 class="mb-0">James's Day <?php echo $c ?></h5></td></tr>
          <tr>
            <th scope="row"><a href="#">Get your gears set up</a></th>
            <td data-title="Assigned to">Emily Employee</td>
            <td data-title="Due date">06 March 2018 </td>
            <td data-title="Status" class="text-success">Completed</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <a href="#" aria-label="Edit"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></a>
                <a href="#" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></a>
                <a href="#" aria-label="Drag and drop" class="link-alt"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></a>
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Attend Culture Orientation</a></th>
            <td data-title="Assigned to">Arnold Schwarzenegger</td>
            <td data-title="Due date">06 March 2018</td>
            <td data-title="Status" class="text-danger">Overdue</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <a href="#" aria-label="Edit"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></a>
                <a href="#" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></a>
                <a href="#" aria-label="Drag and drop" class="link-alt"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></a>
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Provide scope items to new starter</a></th>
            <td data-title="Assigned to">Emily Employee</td>
            <td data-title="Due date">06 March 2018</td>
            <td data-title="Status">Open</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <a href="#" aria-label="Edit"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></a>
                <a href="#" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></a>
                <a href="#" aria-label="Drag and drop" class="link-alt"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></a>
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>
</div>

<!-- Create task Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Create a new task</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <?php include ("../ui/_partials/form-sm.html");?>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary mr-auto" data-dismiss="modal">Cancel</button>
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
        <h2 class="modal-title text-danger">Delete task?</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Coffee with Emily Employee</h5>
        <p>Welcome the starter with a cup of coffee and cool discussion abouth her role and expextations.</p>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
