<?php
  session_start();
?>
 <!DOCTYPE html>
 <?php
// Set session variables
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
?>
    <div class="container">
      <div class="row">
        <div class="col-xs-offset-1 row-spacing">
          <form action="" action="post" id="form">
              <div class="form">
                    <label for="username">Username:</label>
                    <input type="text" id="username"value=""></br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" value=""></br>
                    <button type="submit" class="btn btn-default" value="" onclick="">Submit</button>
                  <script type="text/javascript">
                  function submit() {
                    document.getElementById("form").submit();
                  }
                  </script>
                </div>
            </form>
          </div>
        </div>
      </div>
