<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
   
<?php
if(isset($_GET["name"])){
  echo "<p>HI, " , $_GET["name"]."</p>";
}

?>    
  <form method="get" action="
    <?php echo $_SERVER["PHP_SELF"]:?>">
    <label for="inputName"> Name: </label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
  </form>
</body>
</html>
