<?php
session_start();
?>
 <html lang = "en" >
   
  <body>
    <h1> fill the form </h1>
    <?php
      $msg = '';
      if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
        if($_POST['username'] == 123  && $_POST['password'] == 123){
          $_SESSION['username'] = 123 ;
          echo 'You have entered valid user name and password click on My Profile';
        }
        else{
          $msg = 'You are not a human' ;
        }
      }
    ?>
  <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
    <input type = 'text' name = 'username'></br>
    <input type = 'password' name = 'password'>
    <button type = "submit" name = "login">Login</button>
    <h4><?php echo $msg; ?></h4>
    <a href = "myprofile.php"> MyProfile </a>
  </form>

  </body>
</html>










        ;