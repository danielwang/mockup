<?php $pageTitle = "CRM Dashboard"; $pageAction = true; $parent = "adm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  CRM Dashboard
<?php endblock() ?>

<?php startblock('page-actions') ?>
<span class="item mr-3">
  <a class="dropdown-toggle text-center" href="#_" title="Help" data-toggle="dropdown" data-persist="true">
    <i class="gel-icon-lg gel-icon-control" aria-hidden="true"></i> <span>Team and Users</span>
  </a>
</span>
<?php endblock() ?>

<?php startblock('page-body');?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div class="card">
    <div class="d-flex justify-content-between align-items-center" role="tab">
      <h3 class="mb-0">
        Talent Dossier
      </h3>
      <button class="btn btn-primary">Add</button>
    </div>
    <div class="row">
        <div class="col-xl-8 col-xxl-4">
          <div id="crm-chart"></div>
        </div>
        <div class="col-xxl-8">
          <table class="table table-borderless table-striped">
            <thead>
              <tr>
                <th class="text-center" scope="col">Select</th>
                <th scope="col">Summary</th>
                <th class="text-center" scope="col">Qualified Prospect</th>
                <th class="text-center" scope="col">Prospect</th>
                <th class="text-center" scope="col">Qualified Lead</th>
                <th class="text-center" scope="col">Lead</th>
                <th class="text-center" scope="col">Total</th>
                <th class="text-center" scope="col"><span class="sr-only">Actions</span></th>
              </tr>
            </thead>
            <tbody>
            <?php for ($x =1; $x <= 8; $x++) {?>
              <tr>
                <th scope="row" class="text-right">
                  <div class="checkbox checkbox-default">
                    <input id="checkbox1-<?php echo $x; ?>" type="checkbox" checked>
                    <label for="checkbox1-<?php echo $x; ?>">
                    </label>
                  </div>
                </th>
                <td data-title="Summary"><a href="#_">Account Manager</a></td>
                <td data-title="Qualified Prospect" class="text-center"><?php echo 2*$x + 1; ?></td>
                <td data-title="Prospect" class="text-center"><?php echo 2*$x + 8; ?></td>
                <td data-title="Qualified Lead" class="text-center"><?php echo 2*$x + 2; ?></td>
                <td data-title="Lead" class="text-center"><?php echo 2*$x + 4; ?></td>
                <td data-title="Total" class="text-center"><?php echo 2*$x + 69; ?></td>
                <td scope="row">
                  <button type="button" class="btn btn-icon" aria-label="remove" data-toggle="tooltip" data-placement="bottom" data-original-title="Remove from Dossier">
                    <i class="gel-icon-close"></i>
                  </button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

          <nav class="d-flex justify-content-center" aria-label="Search results pages">
            <ul class="pagination pagination-inline" role="pagination">
              <li class="page-item">
                <a class="page-link" href="#" data-toggle="tooltip" data-placement="left" data-original-title="First">
                  <span class="sr-only">First</span>
                  <i class="gel-icon-left-end gel-icon-sm"></i>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Previous">
                  <span class="sr-only">Previous</span>
                  <i class="gel-icon-angle-left gel-icon-sm"></i>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">10
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">11</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">12
                  <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">13</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">14</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Next">
                  <span class="sr-only">Next</span>
                  <i class="gel-icon-angle-right gel-icon-sm"></i>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" data-toggle="tooltip" data-placement="right" data-original-title="Last">
                  <span class="sr-only">Last</span>
                  <i class="gel-icon-right-end gel-icon-sm"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
</div>

<div class="row mt-4">
  <div class="col-xl-8">
    <div class="card h-100">
      <h3 class="mb-0">Communication</h3>
      <table class="table table-borderless table-striped">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Message</th>
            <th class="text-center" scope="col">Sent</th>
            <th class="text-center" scope="col">Opened %</th>
            <th class="text-center" scope="col">Click-through %</th>
            <th class="text-center" scope="col">Bounced %</th>
          </tr>
        </thead>
        <tbody>
        <?php for ($x =1; $x <= 8; $x++) {?>
          <tr>
            <th scope="row" nowrap>
              02 May 2018
            </th>
            <td data-title="Message">Privacy policy update notice</td>
            <td data-title="Sent" class="text-center"><?php echo 2*$x + 1; ?></td>
            <td data-title="Opened %" class="text-center"><?php echo 2*$x + 8; ?></td>
            <td data-title="Click-through %" class="text-center"><?php echo 2*$x + 2; ?></td>
            <td data-title="Bounced %" class="text-center"><?php echo 2*$x + 4; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-xl-4 mt-4 mt-xl-0">
    <div class="card h-100">
      <div class="d-flex justify-content-between align-items-center mb-3" role="tab">
        <h3 class="mb-0">
          My tasks
        </h3>
        <button class="btn btn-outline-primary">Add</button>
      </div>
      <?php for ($x =1; $x <= 4; $x++) {?>
      <div class="row">
        <div class="col-6 col-lg-7">
          <a href="#">Finalise longlist for VP Security role</a>
        </div>
        <div class="col-4 col-lg-3 text-red">
          Due in 6 days
        </div>
        <div class="col-2">
          <button type="button" class="btn btn-icon" aria-label="remove" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete">
            <i class="gel-icon-trash"></i>
          </button>
        </div>
      </div>
      <hr>
      <?php }?>
      <div class="row">
        <div class="col-6 col-lg-7">
          <a href="#" class="link-alt text-line-through">Finalise longlist for VP Security role</a>
        </div>
        <div class="col-4 col-lg-3">2 days ago</div>
        <div class="col-2">
          <button type="button" class="btn btn-icon" aria-label="remove" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete">
            <i class="gel-icon-trash"></i>
          </button>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-6 col-lg-7">
          <a href="#" class="link-alt text-line-through">Follow up with Bob Jones</a>
        </div>
        <div class="col-4 col-lg-3">3 days ago</div>
        <div class="col-2">
          <button type="button" class="btn btn-icon" aria-label="remove" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete">
            <i class="gel-icon-trash"></i>
          </button>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
<script>

Highcharts.chart('crm-chart', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Selected talent pools'
  },
  plotOptions: {
      bar: {
          colorByPoint: true,
          dataLabels: {
               enabled: true
           }
      }
  },
  colors: [
    '#D6DDE4', '#66BB6A', '#BA68C8', '#4FC3F7', '#F78A65', '#536A81'
  ],
  // subtitle: {
  //   text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
  // },
  xAxis: {
       categories: ['No Status', 'Prospect', 'Qualified Prospect', 'Lead', 'Qualified Lead', 'Total']
   },

   series: [{
       name: null,
       data: [88, 21, 14, 84, 9, 216]
   }]
});
</script>
<?php endblock()?>