<?php $pageTitle = "Iconography"; $parent = "hm"; include '../base-t1.php';?>

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

<?php startblock('page-tabs') ?>
  <!-- <div class="page-tabs" role="tablist">
      <span class="item"><a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Font icons</a></span>
      <span class="item"><a data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">How to use</a></span>
      <span class="item"><a href="#">Tab facere</a></span>
      <span class="item"><a href="#">Tab cumque</a></span>
      <span class="item"><a href="#">Tab maiores</a></span>
      <span class="item"><a href="#">Tab nemo</a></span>
  </div> -->

  <!-- Nav tabs -->
  <ul class="page-tabs nav nav-tabs" role="tablist">
    <li class="item nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="item nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
    </li>
    <li class="item nav-item">
      <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
    </li>
    <li class="item nav-item">
      <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
    </li>
  </ul>
<?php endblock() ?>


<?php startblock('page-body');?>


<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">1</div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
</div>

<!-- <div class="tab-content">
    <div class="tab-pane active" id="fonticon" role="tabpanel" aria-labelledby="home-tab">
      <div class="row">
        <div class="col-sm-2">
          <h3>Solid icons</h3>
        </div>
        <div class="col-sm-10">
          <div class="row">
            <?php for($i = 0; $i < ceil(count($solidIcons)) ; $i++){ ?>
              <div class="col-xs-6 col-sm-4 col-lg-3 text-center mb-4">
                  <div class="card">
                    <h6><?php echo ucfirst($solidIcons[$i][0]);?></h6>
                    <p><i class="gel-icon-2x gel-icon-<?php echo $solidIcons[$i][1];?>"></i></p>
                    <small><code>.gel-icon-<?php echo $solidIcons[$i][1];?></code></small>
                  </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <h3>Line icons</h3>
        </div>
        <div class="col-sm-10">
          <div class="row">
          <?php for($i = 0; $i < ceil(count($lineIcons)) ; $i++){ ?>
            <div class="col-xs-6 col-sm-4 col-lg-3 text-center mb-4">
                <div class="card">
                  <h6><?php echo ucfirst($lineIcons[$i][0]);?></h6>
                  <p><i class="gel-icon-2x gel-icon-<?php echo $lineIcons[$i][1];?>-o"></i></p>
                  <small><code>.gel-icon-<?php echo $lineIcons[$i][1];?>-o</code></small>
                </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="howtouse" role="tabpanel" aria-labelledby="profile-tab">
      <div class="row">
        <div class="col-sm-2">
          <h3>Sizes</h3>
        </div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>Default</h6>
              <p>
                <i class="gel-icon-recruitment-o blue"></i>
              </p>
            </div>
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>lg</h6>
              <p>
                <i class="gel-icon-recruitment-o gel-icon-lg yellow"></i>
              </p>
            </div>
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>x2</h6>
              <p>
                <i class="gel-icon-2x gel-icon-recruitment-o red"></i>

              </p>
            </div>
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>x3</h6>
              <p>
                <i class="gel-icon-3x gel-icon-recruitment-o orange"></i>

              </p>
            </div>
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>x4</h6>
              <p>
                <i class="gel-icon-4x gel-icon-recruitment-o green"></i>

              </p>
            </div>
            <div class="col-xs-4 col-sm-2 text-center">
              <h6>x5</h6>
              <p>
                <i class="gel-icon-5x gel-icon-recruitment-o purple"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
</div> -->

<?php endblock()?>
