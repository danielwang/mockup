<?php $parent = "adm"; include '../base-t1.php';?>

<?php startblock('page-notification') ?>
    <div id="gel-notification" class="gel-notification-error">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error occurred while importing Job file last night. One or more mandatory fields were not provided.
      <button class="btn btn-sm btn-round">Find more info</button>
      <button href="#" type="button" class="close"><i class="glyphicon glyphicon-remove"></i></button>
    </div>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="alert alert-info">
  <strong>Info Message!</strong> Consequatur facere deleniti cumque <a class="alert-link" href="">link</a> ducimus maiores nemo.
  <button href="#" type="button" class="close"><i class="glyphicon glyphicon-remove"></i></button>
</div>
<div class="row blokk">
  <div class="col-sm-8">
    <div class="gel-box">
      <h3>Paragraphs heading</h3>
      <p>Utwisi enimad minimveniam, <a href="#">quisnostrud exerci tation ullamcorper</a> suscipitlobortis nisl utaliquipexeacommodo consequat. Duis autemveleum iriuredolor inendrerit invulputate velit essemolestie consequat, velillum doloreeu
        feugiat nullafacilisis accumsan dignissim quiblandit praesent luptatum zzrildelenit augueduisdolore tefeugait nullafacilisi. Loremipsum dolorsitamet, consectetuerdipiscing elit, sed diam nonummy nibh euismod
        tincidunt utlaoreetdolore magna aliquam erat volutpat.</p>
      <hr>

      <h3>Buttons</h3>
      <p>Youcan applytheclassto anyelement thatequiresa buttonstyle.</p>
      <p><a href="#" class="btn btn-primary">Submit</a> or <a href="#" class="btn btn-success">Save as draft</a> <button type="button" class="btn btn-round btn-primary">Round button</button></p>
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
            <td><img class="gel-avatar gel-avatar-sm" src="<?php echo ($resURL)?>assets/images/avatar/users-1.svg"></td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><img class="gel-avatar gel-avatar-sm" src="<?php echo ($resURL)?>assets/images/avatar/users-2.svg"></td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><img class="gel-avatar gel-avatar-sm" src="<?php echo ($resURL)?>assets/images/avatar/users-3.svg"></td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      <hr>
      <!-- Responsive images -->
      <h3>Responsive images</h3>
      <p>For images to be responsive (so that they will rescale to suit the width of the parent, use the <code>.img-responsive</code> class.</p>
      <p><img class="img-responsive" src="http://placehold.it/750x375/ABE0F4/57C0E9?text=image" alt=""></p>
      <p>Duisautem veleum iriuredolorin hendreritvulputate velitesse molestie consequat, velillumolore eufeugiat nullafacilisis atveroeros etaccumsan etiustoodio dignissim quiblandit praesent luptatum zzrildelenit augueduis doloretefeugait
        nullafacilisi. Loremipsum dolorsitamet, consectetuer adipiscing elit, seddiam nonummynibh euismod tinciduntutlaoreet doloremagnaaliquam erat lutpat. Utisienim adminim veniam, quisnostrud exerci tation ullamcorper suscipitlobortis nisl
        utaliquip exeaommodo consequat.</p>
    <hr>
    </div>
  </div>
  <div class="col-sm-4">
    <h2 class="blokk">Phasellu</h2>
    <p class="blokk">Phasellushendrerit tellusfel ismollisluctus. Aenean aliquetAliq uamcommodoid, bibendumnullaut lacus. Aliquamul triciesodio, fermentum utnequeSed mattisPelle ntesquetellus.</p>
    <p class="blokk">Cumsociisnatoque penatibus etassa. Integerconvallis ligulabi bendumelnibh. Etiam congueringilla urpis. Nullaratmauris.</p>
    <hr>
    <h2 class="blokk">Psellu</h2>
    <p class="blokk">Pellent esque facilisi ssodales. Aeneancommo dodio fermentumleo mollis consectetuer. Curabitur obortisuis, venenatislor emegettempus purus. Clas saptenttac itisociosqu</p>
  </div>
</div>
<?php endblock()?>
