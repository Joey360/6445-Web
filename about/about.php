
<div class="container">
  <div class="row row-spacing">
  <div class="">
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="tab" href="#robot">Robot</a></li>
      <li><a data-toggle="tab" href="#instructors">Instructors</a></li>
      <li><a data-toggle="tab" href="#members">Members</a></li>
    </ul>
    <div class="tab-content">
      <div id="robot" class="tab-pane fade in active">
        <?php include 'robot/robot.html';?>
      </div>
      <div id="instructors" class="tab-pane fade">
        <?php include 'join/join.php';?>
      </div>
      <div id="members" class="tab-pane fade">
        <?php include 'join/join.php';?>
      </div>
    </div>
  </div>
  </div>
</div>
