<?php $pageTitle = "Table"; $parent = "hm"; include '../base-t1.php';?>
<?php startblock('page-title') ?>
  Responsive table
<?php endblock() ?>


<?php startblock('page-body');?>
<table id="table" data-height="600" data-show-columns="true"></table>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
  <script>
      var $table = $('#table');

      $(function () {
          buildTable($table, 21, 50);
      });

      function buildTable($el, cells, rows) {
          var i, j, row,
                  columns = [],
                  data = [];

          for (i = 0; i < cells; i++) {
              columns.push({
                  field: 'field' + i,
                  title: 'Cell' + i,
                  sortable: true
              });
          }
          for (i = 0; i < rows; i++) {
              row = {};
              for (j = 0; j < cells; j++) {
                  row['field' + j] = 'Row-' + i + '-' + j;
              }
              data.push(row);
          }
          $el.bootstrapTable('destroy').bootstrapTable({
              columns: columns,
              data: data
          });
      }
  </script>
<?php endblock() ?>
