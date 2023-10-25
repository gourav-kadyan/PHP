<!DOCTYPE html>
<html>
<head>
    <title>Password Strength Checker</title>
</head>
<body>
    <form method="post" action="">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="submit" value="Check Password Strength">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $pattern_uppercase = '/[A-Z]/';
        $pattern_lowercase = '/[a-z]/';
        $pattern_digit = '/[0-9]/';
        $pattern_special_char = '/[!@#$%^&*(),.?":{}|<>]/';

        if (strlen($password) >= 8 &&
            preg_match($pattern_uppercase, $password) &&
            preg_match($pattern_lowercase, $password) &&
            preg_match($pattern_digit, $password) &&
            preg_match($pattern_special_char, $password)) {
            echo "Strong password.";
        } else {
            echo "Weak password. Please include uppercase, lowercase, digit, and special character.";
        }
    }
    ?>
</body>
</html>
