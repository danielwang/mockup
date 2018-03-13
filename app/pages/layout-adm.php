<?php $pageTitle = "Admin Page Template 1"; $parent = "adm"; include '../base-t1.php';?>

<?php //startblock('page-notification') ?>
    <!-- <div id="gel-notification" class="gel-notification-error">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error occurred while importing Job file last night. One or more mandatory fields were not provided.
      <button class="btn btn-sm btn-round">Find more info</button>
      <button href="#" type="button" class="close"><i class="fa fa-times"></i></button>
    </div> -->
<?php // endblock() ?>

<?php startblock('page-body');?>
<!-- <div class="alert alert-info">
  <strong>Info Message!</strong> Consequatur facere deleniti cumque <a class="alert-link" href="">link</a> ducimus maiores nemo.
  <button href="#" type="button" class="close"><i class="fa fa-times"></i></button>
</div> -->

    <h3 class="mb-4">Typography</h3>
    <div class="row">
      <div class="col-md-6">
        <h5>
          <code>Proxima Nova</code>
        </h5>
          <h3 style="font-family:Proxima Nova; font-weight:400">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
          <h3 style="font-family:Proxima Nova; font-weight:400; text-transform: lowercase;">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
          <h3 style="font-family:Proxima Nova; font-weight:400">0 1 2 3 4 5 6 7 8 9</h3>
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
      </div>
      <div class="col-md-6">
        <h5>
          <code>Nunito</code>
        </h5>
        <h3>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
        <h3 style="text-transform: lowercase;">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h3>
        <h3>0 1 2 3 4 5 6 7 8 9</h3>
        <h1>h1. Bootstrap heading</h1>
        <h2>h2. Bootstrap heading</h2>
        <h3>h3. Bootstrap heading</h3>
        <h4>h4. Bootstrap heading</h4>
        <h5>h5. Bootstrap heading</h5>
        <h6>h6. Bootstrap heading</h6>
      </div>
    </div>
    <h3 class="mt-5 mb-4">Buttons</h3>
    <p>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
     </p>
     <p>
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
      </p>
      <?php

      function buildSolidIcons(){
        return  [
          ["print", "print"],
          ["feedback", "feedback"],
          ["help", "help-pointer"],
          ["info", "info-pointer"],
          ["beta", "beta"],
          ["search", "search"],
          ["bullhorn", "bullhorn"],
          ["right", "right"],
          ["left", "left"],
          ["upload", "upload"],
          ["download", "download"],
          ["dropdown", "dropdown"],
          ["foldup", "foldup"],
          ["share", "share"],
          ["tick", "tick-circle"],
          ["close", "close-circle"],
          ["trash", "trash"],
          ["notes", "notes"],
          ["new", "new"],
          ["eye", "eye"],
          ["logo", "logo"],
          ["user", "user"],
          ["job", "job"],
          ["knowledge portal", "knowledge-portal"],
          ["refresh", "refresh"],
          ["lock", "lock"],
          ["analytics", "analytics"],
          ["menu", "menu"],
          ["support", "support"],
          ["employee", "employee"],
          ["add-user", "add-user"],
          ["preview", "preview"],
          ["copy", "copy"],
          ["close", "close"],
          ["tick", "tick"],
          ["help", "help"]
        ];
      }

      $solidIcons = buildSolidIcons();

      function buildLineIcons(){
        return  [
          ["logo", "logo"],["menu","menu"],["close","close"],["beta","beta"],["bullhorn","bullhorn"],["print","print"],
          ["feedback","feedback"],["support","support"],["profile","profile"],["search","search"],["applicant","applicant"],
          ["control","control"],["team","team"],["job","job"],["employee","employee"],
          ["recruitment","recruitment"],["learning","learning"],["analytics","analytics"],["orgchart","orgchart"],
          ["onboarding","onboarding"],["journal","journal"],["copy","copy"],["history","history"],["salary","salary"],
          ["add","add"],["unlock","unlock"],["view","view"],["resume","application"]
        ];
      }

      $lineIcons = buildLineIcons();

      ?>

        <h3 class="mt-5 mb-4">Icons</h3>
        <div class="row">
            <?php for($i = 0; $i < ceil(count($solidIcons)) ; $i++){ ?>
              <div class="col-4 col-sm-3 col-lg-1 text-center mb-4">
                    <h6><?php echo ucfirst($solidIcons[$i][0]);?></h6>
                    <p><i class="gel-icon-2x gel-icon-<?php echo $solidIcons[$i][1];?>"></i></p>
              </div>
            <?php } ?>
          </div>

          <div class="row">
          <?php for($i = 0; $i < ceil(count($lineIcons)) ; $i++){ ?>
            <div class="col-4 col-sm-3 col-md-2 col-lg-1 text-center mb-4">
                  <h6><?php echo ucfirst($lineIcons[$i][0]);?></h6>
                  <p><i class="gel-icon-2x gel-icon-<?php echo $lineIcons[$i][1];?>-o"></i></p>
            </div>
          <?php } ?>
          </div>
<?php endblock()?>
