<?php
 $to_email = "amanmalik31052002@gmail.com";
 $subject = "teri job kab lagegi";
 $body = "4 year mei aa gya hai kb bhai abhi bhi debarrd hai tu";
 $headers = "From: kadyantony00@gmail.com";


   if(mail( $to_email, $subject, $body,&headers)){
     echo "mail sent successfully";
   }

 else
 {
   echo "Email sending failed.....;
 }
?>
   