    <?php
    //please look over, I am not sure if this will work as I have no way of testing it.
    $Name = null;
    $Email = null;
    $PhoneNumber = null;
    $Grade = null;
    $interest = null;
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
        $Message = "We have an interested new member please look over details and contact them accordingly";
        $Message = "Name: , " . $Name ;
        $Message = "Contact : Phone "$PhoneNumber . "    Email " . $Email;
        $Message .= "Interests : " . $interest;
        $Message .=" Grade : " . $Grade;
      //  mail($to, $subject, $Message, $headers);
        // echo("This is what the message would look like if the mail server was setup: " . $Message);
    }
    ?>
<div class="container">
  <div class="col-xs-10 col-xs-offset-1">
<form class="form-horizontal" method = "post">
    <div class="form-group">
        <label for="Name" class="control-label ">Name:</label>
            <input type="text" name="Name" class="form-control" id="Name" placeholder="Enter Name" required autofocus></br>
    </div>
    <div class="form-group">
        <label for="email" class="control-label">Email:</label>
        <input type="email" name="Email" class="form-control" id="email" placeholder="Enter Email" required>
    </div>
    <div class="form-group">
        <label for="PhoneNumber" name="PhoneNumber" class="control-label ">PhoneNumber:</label>
            <input type="text" name="PhoneNumber" value="" placeholder="Enter Phone#" class="form-control"  required>
    </div>
    <div class="form-group">
    <label for="interests" class="control-label">Interests:</label><br>
    <input type="text" name="interests" class="form-control" placeholder=" Please enter: your choices of: Programming, CAD, Mechanical, Support, Photography, Or Undecided">
    </div>
    <!-- TODO: make these line up with the inputs above -->
    <div class="form-group">
    <label for="Grade">Grade:</label><br>
    9th:<input type="radio" name="Grade" value="9th" >
    10th:<input type="radio" name="Grade" value="10th" >
    11th:<input type="radio" name="Grade" value="11th">
    12th:<input type="radio" name="Grade" value="12th" > <br>
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
</form>
</div>
</div>
