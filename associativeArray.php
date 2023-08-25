<?php
$courses = array('INT220'=>'PHP',
                 'INT221'=>'Larvel',
                 'INT223'=>'NODEjs');
$keys = array_keys($courses);
$values = array_values($courses);
for($x = 0; $x<count($keys);$x++){
echo "key".$keys[$x].','"Value=".$Values[$x]."<br>";
}
?>