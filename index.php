// <?php
//   $a = 69;
//   if($a == 69){
//     trigger_error("bhai kya krr rha hai",E_USER_WARNING);
//   }
//     //E_USER_ERROR - FOR FATAL ERROR 
//     //E_USER_WARNING - FOR WARNING
//     //E_USER_NOTICE - FOR NOTICE

// ?>

<?php
 $to_email = "amanmalik31052002@gmail.com";
 $subject = "teri job kab lagegi";
 $body = "4 year mei aa gya hai kb bhai abhi bhi debarrd hai tu";
 $headers = "From: kadyantony00@gmail.com";


   if(mail( $to_email, $subject, $body,$headers)){
     echo "mail sent successfully";
   }

 else
 {
   echo "Email sending failer";
 }
?>
   