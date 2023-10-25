<?php 
$courses = array("a" => "PHP","b"=>"Laravel","c"=>"Node","d"=>"HTML","e"=>"CSS","f"="ASP.net");
print_r(array_chunk($courses,2,true));
?>