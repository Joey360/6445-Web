<DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-B">
		<meta name="viewport" content="width = device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>

	<body><div class="container-fluid">
			<div id="navHeader" class = "row">
				<div class="row">
					<div class="col-xs-4 col-sm-5"></div>
          <div id="homeLogo" class="col-xs-4 col-sm-2">
            <img  src="includes/images/logo.jpg" alt="blank" class="img-responsive">
          </div>
          <div class="col-xs-4"></div>
				</div>
        <div class="row">
            <ul class="nav nav-tabs">
              <li class="active col-xs-2 col-xs-offset-1"><a class="text-center" data-toggle="tab" href="#home">Home</a></li>
							<li class="col-xs-2"><a class="text-center" data-toggle="tab" href="#join">Join</a></li>
              <li class="col-xs-2"><a class="text-center" data-toggle="tab" href="#sponsers">Sponsers</a></li>
              <li class="col-xs-2"><a class="text-center" data-toggle="tab" href="#team-scouting">Team Scouting</a></li>
              <li class="col-xs-2"><a class="text-center" data-toggle="tab" href="#about">About</a></li>
            </ul>
          </div>
        </div>

			<div id="body" class="row">
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<!-- PHP or Include to HTML -->
							<?php include 'home/home.html';?>
					</div>
					<div id="join" class="tab-pane fade">
					<!-- PHP or Include to HTML -->
						<?php include 'join/join.html';?>
						<p class="text-center">Hello this is where the join html file will be displayd</p>

					</div>
					<div id="sponsers" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include 'sponsers/sponsers.html';?>
					</div>
					<div id="team-scouting" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include 'team-scouting/team-scouting.html';?>
					</div>
					<div id="about" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include 'about/about.html';?>
					</div>
				</div>
			</div>
			<div id="footer"class="row">
				<?php include 'footer/footer.html';?>
			</div>

	</div>
</body>


<html>
