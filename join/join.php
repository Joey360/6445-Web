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
  <body>
    <img  src="images/logo.jpg" alt="blank" class="img-responsive">
    <div id="Form-Join">
    <form>
      <label for="Name">Name:</label>
      <input type="text" id="Name"></br>>
      <label for="email"></label>
      <input type="email" id="email">
      <label for="interest">Interests</label>
      <input type="checkbox" name="interest" value="Programming" id="cb-Programming">
      <input type="checkbox" name="interest" value="Mechanical" id="cb-Mechanical">
      <input type="checkbox" name="interest" value="CAD" id="cb-CAD">
      <input type="checkbox" name="interest" value="Business" id="cb-Support">
      <input type="checkbox" name="interest" value="Photography/Video" id="cb-Photography/Media">
      <input type="checkbox" name="unknown interest" value="0" id="cb-Undecided">
      <script type="text/javascript">
        if(){
          var programming = document.getElementById("cb-Programming").checked;
          var mechanical = document.getElementById("cb-Mechanical").checked;
          var cad = document.getElementById("cb-CAD").checked;
          var support = document.getElementById("cb-Support").checked;
          var photography = document.getElementById("cb-Photography/Media").checked;
          var undecided = document.getElementById("cb-Undecided").checked;
          var any_true;
          if (programming == True) {
             any_true = True
          }
          else if (mechanical == True) {
            any_true
          } else if (cad == True) {
            any_true = True
          } else if (support == True) {

          }else if (photography == True) {

          } else if () {

          }
        }
      </script>
      <input type="checkbox" name="Grade-9" value="9">
      <input type="checkbox" name="Grade-10" value="10">
      <input type="checkbox" name="Grade-11" value="11">
      <input type="checkbox" name="Grade-12" value="12">


  </body>
</html>
