<?php $pageTitle = "New Starter Tasks"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-4">
    <h3>Emily Johnson</h3>
    <h5>Position:</h5>
    <p>Sennior project manager - Customer Services</p>
    <h5>Start Date:</h5>
    <p>31 March 2018</p>
  </div>
  <div class="col-sm-8">
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
        <button type="button" class="btn btn-primary">Create a task</button>
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
          <td>Emily Employee</td>
          <td>05 March </td>
          <td class="text-success">Completed</td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Attend Culture Orientation</a></th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td class="text-danger">Overdue</td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Provide scope items to new starter</a></th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>Open</td>
        </tr>
      </tbody>
    </table>
  <?php } ?>
  </div>
</div>

<?php endblock()?>
