<!DOCTYPE html>
<?php
  setcookie("test_cookie","test",time()+15,'/');
?>
<html>
<head>
    <title>cookie</title>
</head>
<body>
    


<?php
if(count($_COOKIE) > 0){
  echo "Cookies are enabled.";
}
else{
  echo "Cookies are disabled";
}
?>
</body>
</html>