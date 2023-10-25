<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['password']);


 echo 'You have been logged out from the session successfully'."<br>";
echo "Click here for login <br>
  <a href = 'sessionlogin.php'>Login</a>";
?>



