<DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-B">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="main.css"/>
    <link rel="stylesheet" href="footer/footer.css">

    <link rel="stylesheet" type="text/css" href="home/home.css"/>
    <link rel="stylesheet" type="text/css" href="team-scouting/team-scouting.css"/>

		<link rel="stylesheet" type="text/css" href="about/instructors/instructors.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <li class="active col-sm-2 col-xs-offset-1 hidden-xs"><a class="text-center" data-toggle="tab" href="#home">Home</a></li>
							<li class=" hidden-xs col-sm-2 "><a class="text-center" data-toggle="tab" href="#join">Join</a></li>
							<li class=" hidden-xs col-sm-2 "><a class="text-center" data-toggle="tab" href="#resources">Resources</a></li>
              <li class=" hidden-xs col-sm-2 "><a class="text-center" data-toggle="tab" href="#sponsors">Sponsors</a></li>
              <li class=" hidden-xs col-sm-2 "><a class="text-center" data-toggle="tab" href="#about">About</a></li>
            </ul>
						<ul class="nav nav-pills nav-stacked">
              <li class="active col-xs-12 col-xs-offset-1 hidden-sm hidden-md hidden-lg hidden-xl"><a class="text-center" data-toggle="tab" href="#home">Home</a></li>
							<li class=" col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl"><a class="text-center" data-toggle="tab" href="#join">Join</a></li>
							<li class=" col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl"><a class="text-center" data-toggle="tab" href="#resources">Resources</a></li>
              <li class=" col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl"><a class="text-center" data-toggle="tab" href="#sponsors">Sponsors</a></li>
              <li class=" col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl"><a class="text-center" data-toggle="tab" href="#about">About</a></li>
            </ul>
          </div>
        </div>

			<div id="body" class="row">
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<!-- PHP or Include to HTML -->
							<?php include ('home/home.php');?>
					</div>
					<div id="join" class="tab-pane fade">
					<!-- PHP or Include to HTML -->
						<?php include ('join/join.php');?>
					</div>
					<div id="sponsors" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include ('sponsors/sponsors.html');?>
					</div>
					<div id="resources" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include ('resources/resources.html');?>
					</div>
					<div id="about" class="tab-pane fade">
						<!-- PHP or Include to HTML -->
						<?php include ('about/about.php');?>
					</div>
				</div>
			</div>
			<?php include ("footer/footer.html");?>
</div>
</body>



<html>
