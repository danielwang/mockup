<?php $pageTitle = "Iconography"; include '../base.php';?>

<?php startblock('page-title') ?>
  Iconography
<?php endblock()?>
<?php startblock('page-body');?>

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

<?php endblock()?>
