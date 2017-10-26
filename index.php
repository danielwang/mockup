<?php include 'base1.php';?>

<?php startblock('page-title') ?>
  Page Title
<?php endblock() ?>
<?php emptyblock('search') ?>
<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-4">
    <h1>Heading 1
        <small>36px</small>
      </h1>
      <h2>Heading 2
        <small>30px</small>
      </h2>
      <h3>Heading 3
        <small>24px</small>
      </h3>
      <h4>Heading 4
        <small>18px</small>
      </h4>
      <h5>Heading 5
        <small>16px</small>
      </h5>
      <h6>Heading 6
        <small>14px</small>
      </h6>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
      <p class="lead">This is an example of leading paragragh.</p>
      <p class="text-muted">This is an example of muted text.</p>
      <p class="text-primary">This is an example of primary text.</p>
      <p class="text-success">This is an example of success text.</p>
      <p class="text-info">This is an example of info text.</p>
      <p class="text-warning">This is an example of warning text.</p>
      <p class="text-danger">This is an example of danger text.</p>
      <p class="text-sm">This is an example of small text.</p>
      <p>Use the mark tag to
        <mark>highlight</mark>
        text.</p>
      <p>Use the b tag to
        <b>bold</b>
        text, or use strong tag to
        <strong>emphasize</strong>
        text.
      </p>
      <p>
        <del>This line of text is meant to be treated as deleted text.</del>
      </p>
  </div>
  <div class="col-sm-8">
    <h3>Paragraphs heading</h3>
    <p>Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation ullamcorper</a> suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
    	feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
    	tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
    	nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
    	ut aliquip ex ea commodo consequat.</p>
    <hr>
    <h3>Info panel</h3>
    <div class="alert alert-info">
    	<strong>Info Message!</strong> Consequatur facere deleniti cumque <a class="alert-link" href="">link</a> ducimus maiores nemo.
    	<button href="#" type="button" class="close"><i class="glyphicon glyphicon-remove"></i></button>
    </div>
    <hr>
    <!-- Responsive images -->
    <h3>Responsive images</h3>
    <p>For images to be responsive (so that they will rescale to suit the width of the parent, use the <code>.img-responsive</code> class.</p>
    <p><img class="img-responsive" src="http://placehold.it/750x375/ABE0F4/57C0E9?text=image" alt=""></p>

    <hr>
    <!-- Tables -->
    <h3>Tables</h3>
    <p>Tables should be given the class of <code>table</code>.</p>
    <table class="table table-striped">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th></th>
    			<th>First Name</th>
    			<th>Last Name</th>
    			<th>Username</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<th scope="row">1</th>
    			<td><img class="pu-avatar pu-avatar-sm" src="<?php echo ($resURL)?>img/emp/emp1.png"></td>
    			<td>Mark</td>
    			<td>Otto</td>
    			<td>@mdo</td>
    		</tr>
    		<tr>
    			<th scope="row">2</th>
    			<td><img class="pu-avatar pu-avatar-sm" src="<?php echo ($resURL)?>img/emp/emp2.png"></td>
    			<td>Jacob</td>
    			<td>Thornton</td>
    			<td>@fat</td>
    		</tr>
    		<tr>
    			<th scope="row">3</th>
    			<td><img class="pu-avatar pu-avatar-sm" src="<?php echo ($resURL)?>img/emp/emp3.png"></td>
    			<td>Larry</td>
    			<td>the Bird</td>
    			<td>@twitter</td>
    		</tr>
    	</tbody>
    </table>
    <hr>
    <h3>Buttons</h3>
    <p>You can apply the <code>btn</code> class to any element that requires a button style.</p>
    <p><a href="#" class="btn btn-primary">Submit</a> or <a href="#" class="btn btn-success">Save as draft</a></p>
    <hr>
  </div>
</div>

<?php endblock()?>
