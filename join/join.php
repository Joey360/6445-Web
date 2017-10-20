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
    //please look over, I am not sure if this will work as I have no way of testing it.
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Grade = $_POST['Grade'];
    $interest = $_POST['interests'];
    $to = 'frc6445@gmail.com';
    $subject = 'Someone is interested in joining the team!';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    // won't mail without server email :(
    if(isset($Name)){
        $Message = "Hello, " . $Name . " Is interested in joining the team!" . " You can contact them at " . $PhoneNumber . " and at " . $Email;
        $Message .= ", they are interested in " . $interest . " and are in the " . $Grade . " Grade.";
      //  mail($to, $subject, $Message, $headers);
        echo("This is what the message would look like if the mail server was setup: " . $Message);
    }
    ?>
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/includes/main.css"/>
</head>
<body>
<img  src="images/logo.jpg" alt="" class="img-responsive">
<form class="form-horizontal" method = "post">
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
    <div class="form-group">
    <label for="interests" class="control-label col-sm-2">Interests:</label><br>
        <div class="col-sm-10">
    <input type="text" name="interests" class="form-control" placeholder=" Please enter: your choices of: Programming, CAD, Mechanical, Support, Photography, Or Undecided">
            </div>
        </div>
    <!-- TODO: make these line up with the inputs above -->
    <label for="Grade">Grade:</label>
    9th:<input type="radio" name="Grade" value="9th" ><br>
    10th:<input type="radio" name="Grade" value="10th" ><br>
    11th:<input type="radio" name="Grade" value="11th"><br>
    12th:<input type="radio" name="Grade" value="12th" ><br>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
