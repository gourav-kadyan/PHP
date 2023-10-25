<?php

session_start();
if(isset($_SESSION['counter'])){
  $_SESSION['counter'] = 0;
}
  $msg = "You have visited the page" . $_SESSION
    ['counter']."  ";
    $msg .= "in this session.";
     echo($msg);                       
?>
