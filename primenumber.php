<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h2>Enter a Number to Check if it's Prime</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="check">Check Prime</button>
    </form>

    <?php
    function isPrime($num) {
        if ($num <= 1) return false;
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    if (isset($_POST['check'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            if (isPrime($number)) {
                echo "$number is prime.";
            } else {
                echo "$number is not prime.";
            }
        } else {
            echo "Please enter a valid numeric value.";
        }
    }
    ?>
</body>
</html>
