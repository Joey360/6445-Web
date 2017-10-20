<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $PhoneNumber = $_POST['PhoneNumber'];
      $interest_P = $_POST['Programming'];
      $interest_M = $_POST['Mechanical'];
      $interest_C = $_POST['CAD'];
      $interest_S = $_POST['Support'];
      $interest_P = $_POST['Photography/Media'];
      $interest_U = $_POST['Undecided'];
      $Grade = $_POST['Grade'];
      $interests = array($interest_P, $interest_M, $interest_C, $interest_S, $interest_P, $interest_U);
      $index = -1;
      $interest;
      $to = 'frc6445@gmail.com';
      $subject = 'Someone is interested in joining the team!';
      $headers = 'From: webmaster@example.com' . "\r\n" .
      'Reply-To: webmaster@example.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
      foreach ($interests as &$value) {
        $index += 1;
        if ($value) {
          if ($index == 0) {
            $interest = " Programming ";
          } elseif ($index == 1) {
            $interest += " Mechanical ";
          } elseif ($index == 2) {
            $interest += " CAD ";
          } elseif ($index == 3) {
            $interest += " Support ";
          } elseif ($index == 4) {
            $interest += " Photography/Media ";
          } elseif ($index == 5) {
            $interest += " Undecided ";
          }
        }
      }
      if($Name.isset()){
        $Message = "Hello, " . $Name . " Is interested in joining the team" . " , You can contact them at " . $PhoneNumber . " and " . $Email;
        $Message .= "They are interested in " . $interest . "and are in " . $Grade;
        mail();
      }
     ?>
    <!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="/includes/main.css"/>
  </head>
  <body>
    <img  src="images/logo.jpg" alt="" class="img-responsive">
    <form class="form-horizontal">
      <div class="form-group">
      <label for="Name" class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10">
      <input type="text" name="Name" class="form-control" id="Name" placeholder="Enter Name" required autofocus></br>
    </div>
  </div>
    <div class="form-group">
      <label for="email" class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
      <input type="email" name="Email" class="form-control" id="email" placeholder="Enter Email" required>
    </div>
</div>
<div class="form-group">
      <label for="PhoneNumber" name="PhoneNumber" class="control-label col-sm-2">PhoneNumber:</label>
      <div class="col-sm-10">
      <input type="text" name="PhoneNumber" value="" placeholder="Enter Phone#" class="form-control"  required>
    </div>
  </div>
  <!-- TODO: make these line up with the inputs above -->
      <label for="interest">Interests:</label><br>
      Programming:<input type="checkbox" name="interest" value="Programming" id="cb-Programming" name="Programming" ><br>
      Mechanical:<input type="checkbox" name="interest" value="Mechanical" id="cb-Mechanical" name="Mechanical" ><br>
      CAD:<input type="checkbox" name="interest" value="CAD" id="cb-CAD" name="CAD" ><br>
      Support:<input type="checkbox" name="interest" value="Business" id="cb-Support" name="Support" ><br>
      Photography/Media:<input type="checkbox" name="interest" value="Photography/Video" id="cb-Photography/Media" name="Photography/Media" ><br>
      Undecided:<input type="checkbox" name="unknown interest" value="0" id="cb-Undecided" name="Undecided"><br>
      <label for="Grade">Grade:</label>
      9th:<input type="radio" name="Grade" value="9th" name="Grade"><br>
      10th:<input type="radio" name="Grade" value="10th" name="Grade"><br>
      11th:<input type="radio" name="Grade" value="11th" name="Grade"><br>
      12th:<input type="radio" name="Grade" value="12th" name="Grade"><br>
  </body>
</html>
