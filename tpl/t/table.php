<?php $pageTitle = "Table"; $parent = "hm"; include '../base-t1.php';?>
<?php startblock('page-title') ?>

<?php endblock() ?>


<?php startblock('page-body');?>

<div class="table-scroll">
	<table class="table-striped">
		<thead class="thead-row">
			<tr>
				<th>Submitted</th>
        <th>Status</th>
				<th>First Name</th>
				<th>Last Name</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Email</th>
				<th>Ref</th>
				<th>Score</th>
				<th>Employee</th>
				<th>Source</th>
				<th>Flags</th>
				<th></th>
			</tr>
		</thead>
		<thead class="thead-col">
      <?php for ($i =1; $i <= 25; $i++) {?>
			<tr>
        <th>
            <span class="checkbox checkbox-info">
              <input type="radio" value="option1" id="radio-<?php echo $i . '-a' ?>" name="radio<?php echo $i ?>">
              <label for="radio-<?php echo $i . '-a' ?>"></label>
            </span>
            <span class="checkbox checkbox-success">
              <input type="radio" value="option1" id="radio-<?php echo $i . '-b' ?>" name="radio<?php echo $i ?>">
              <label for="radio-<?php echo $i . '-b' ?>"></label>
            </span>
            <span class="checkbox checkbox-warning">
              <input type="radio" value="option1" id="radio-<?php echo $i . '-c' ?>" name="radio<?php echo $i ?>">
              <label for="radio-<?php echo $i . '-c' ?>"></label>
            </span>
        </th>
      </tr>
    <?php } ?>
		</thead>
		<tbody>
      <?php for ($i =1; $i <= 25; $i++) {?>
			<tr>
				<td>17 Nov 2017</td>
				<td><a href="#">Shortlisted</a></td>
				<td><a href="#">Aaron</a></td>
				<td><a href="#">Applicant</a></td>
				<td>M</td>
				<td>+61 411 111 000</td>
				<td>arron@dreamworld.com.au</td>
				<td>Y</td>
				<td>78</td>
				<td>N</td>
				<td>website</td>
				<td><i class="fa fa-car"></i></td>
				<td><a href="#"><i class="gel-icon-lg gel-icon-eye"></i></a></td>
			</tr>
    <?php } ?>
		</tbody>
	</table>
</div>
<script>
document.querySelector('.table-scroll').addEventListener('scroll', function(e){
  this.querySelector('.thead-col').style.left = this.scrollLeft +"px";
	this.querySelector('.thead-row').style.top = this.scrollTop +"px";
});
</script>
<?php endblock() ?>
