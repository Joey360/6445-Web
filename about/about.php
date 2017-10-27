
<div class="container">
  <div class="row row-spacing">
  <div class="">
    <ul class="nav nav-pills">
      <li style="float:center" class="active"><a data-toggle="tab" href="#robot">Robots</a></li>
      <li style="float:center"><a data-toggle="tab" href="#mentors">Mentors</a></li>
      <li style="float:center"><a data-toggle="tab" href="#members">Members</a></li>
    </ul>
    <div class="tab-content">
      <div id="robot"  class=" tab-pane fade in active">
        <?php include 'robot/robot.html';?>
      </div>
      <div id="mentors" class="  tab-pane fade">
        <?php include 'mentors/mentors.html';?>
      </div>
      <div id="members" class="  tab-pane fade">
        <?php include 'members/members.html';?>
      </div>
    </div>
  </div>
  </div>
</div>
