<?php $pageTitle = "CRM Dashboard"; $pageAction = true; $parent = "adm"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  CRM Dashboard
<?php endblock() ?>

<?php startblock('page-tabs') ?>

<?php endblock() ?>

<?php startblock('page-actions') ?>
<?php endblock() ?>

<?php startblock('page-body');?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div class="panel">
  <div class="card">
    <div class="card-header light-header" role="tab">
      <h5 class="mb-0">
        Panel with light header
      </h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-xl-8 col-xxl-4">
          <div id="crm-chart"></div>
        </div>
        <div class="col-xxl-8">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Select</th>
                <th scope="col">Summary</th>
                <th scope="col">Qualified Prospect</th>
                <th scope="col">Prospect</th>
                <th scope="col">Qualified Lead</th>
                <th scope="col">Lead</th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php for ($x =1; $x <= 8; $x++) {?>
              <tr>
                <th scope="row"  class="text-center">
                  <div class="checkbox checkbox-default">
                    <input id="checkbox1-<?php echo $x; ?>" type="checkbox" checked>
                    <label for="checkbox1-<?php echo $x; ?>">
                    </label>
                  </div>
                </th>
                <td data-title="Column 1">Account Manager</td>
                <td data-title="Column 2" class="text-center"><?php echo 2*$x + 1; ?></td>
                <td data-title="Column 3" class="text-center"><?php echo 2*$x + 8; ?></td>
                <td data-title="Column 2" class="text-center"><?php echo 2*$x + 2; ?></td>
                <td data-title="Column 3" class="text-center"><?php echo 2*$x + 4; ?></td>
                <td data-title="Column 2" class="text-center"><?php echo 2*$x + 69; ?></td>
                <td data-title="Column 3" class="text-center">
                  <button type="button" class="btn btn-icon" aria-label="remove" data-toggle="tooltip" data-placement="bottom" data-original-title="Remove from Dossier">
                    <i class="gel-icon-close"></i>
                  </button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
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
