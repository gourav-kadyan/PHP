<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h2>Enter a Number to Check if it's Prime</h2>
    <form method="post" action="">
        <input type="text" name="courses" >
        <input type="text" name="courses" >
        <input type="text" name="courses" >
<input type="submit">
    </form>

    <?php
    if($_POST){
$courses = $_POST['courses'];
foreach($courses as $course){
echo $course . "<br>";
}}
    ?>
</body>
</html>

