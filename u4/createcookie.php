<!DOCTYPE html>
<?php
  $cookie_name = "user";
  $cookie_user = "abc";
  setCookie($cookie_name,$cookie_value,time() +3);

  ?>
  <html>
<body>
  <php
if(isset($_COOKIE[&cookie_name])){
  echo"Cookie ".&cookie_name."has been set<br>".
    echo "Value is :".$_COOKIE[$cookie_name];
}
    else
    {
    echo "Cookie ".$cookie_name. "has been not set <br>";
    
    }
  ?>
</body>
  </html>