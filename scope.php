<?php 

  
  global $a;$a=34;
  echo $a."<br>";
  define('y','22');
{
  function a($a=12){
    echo $a."<br>";
    echo y."<br>";
  }
  echo $a."<br>";
  echo y."<br>";
}
a();
global $a;
echo $a."<br>";
echo y;

?>