<form action="dropdownform.php" method="POST"> 
<select name="dropdown"> 
<option value=""></option> 
<option value="Sunday">Sunday</option> 
<option value="Monday">Monday</option> 
<option value="Tuesday">Tuesday</option> 
<option value="Wednesday">Wednesday</option> 
<option value="Thursday">Thursday</option> 
<option value="Friday">Friday</option> 
<option value="Saturday">Saturday</option> 
</select> 
<input type="submit"> 
</form> 
 
<?php  
if($_POST)  
{  
    $day = $_POST['dropdown']; 
 
if($day == 'Sunday') 
{ 
    echo 'It is a Sunday'; 
} 
else 
{ 
    echo 'It is some other day'; 
} 
}  
?>