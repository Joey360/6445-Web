<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="/includes/main.css"/>
  </head>
  <?php  ?>
  <body>
    <img  src="images/logo.jpg" alt="blank" class="img-responsive">
    <form class="form-horizontal">
      <div class="form-group">
      <label for="Name" class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" required autofocus></br>
    </div>
  </div>
    <div class="form-group">
      <label for="email" class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
    </div>
</div>
      <label for="PhoneNumber">PhoneNumber:</label>
      <input type="text" name="PhoneNumber" value="" placeholder="Enter Phone#" required>
      <label for="interest">Interests:</label>
      <input type="checkbox" name="interest" value="Programming" id="cb-Programming">
      <input type="checkbox" name="interest" value="Mechanical" id="cb-Mechanical">
      <input type="checkbox" name="interest" value="CAD" id="cb-CAD">
      <input type="checkbox" name="interest" value="Business" id="cb-Support">
      <input type="checkbox" name="interest" value="Photography/Video" id="cb-Photography/Media">
      <input type="checkbox" name="unknown interest" value="0" id="cb-Undecided">
      <input type="checkbox" name="Grade-9" value="9">
      <input type="checkbox" name="Grade-10" value="10">
      <input type="checkbox" name="Grade-11" value="11">
      <input type="checkbox" name="Grade-12" value="12">
  </body>
</html>
