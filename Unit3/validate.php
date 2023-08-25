<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
   
<?php

$name = $email = $gender $comment = $website = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $comment = test_input($_POST["comment"]);
  $website = test_input($_POST["website"]);
}
  funtion test_input($data){
    $data = trin($data);
    $data = striplashses($data);
    $data = htmlspecilachars($data);
    return data;

  }
?>
<h2>PHP Form validation Example</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
      name: <input type="text" name="name">                                                                     website: <input type="text name="website"> 
    <br><br>
    Gender;
</body>
</html>
