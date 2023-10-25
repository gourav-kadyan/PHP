<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    $name = $email = $mobile = $username = $password = "";
    $nameErr = $emailErr = $mobileErr = $usernameErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $mobile = test_input($_POST["mobile"]);
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

      
        if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $mobileErr = "Invalid mobile number. It should be 10 digits.";
        }

        
        if (!preg_match("/^[a-zA-Z0-9_]{8,}$/", $username)) {
            $usernameErr = "Invalid username. It should be at least 8 characters long and contain only letters, numbers, and underscores.";
        }

        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name;?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email;?>" required><br><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" id="mobile" pattern="[0-9]{10}" value="<?php echo $mobile;?>" required><br>
        <span class="error"><?php echo $mobileErr;?></span><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" pattern="[a-zA-Z0-9_]{8,}" value="<?php echo $username;?>" required><br>
        <span class="error"><?php echo $usernameErr;?></span><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $password;?>" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>