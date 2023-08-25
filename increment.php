<!DOCTYPE html>
<html>
<head>
    <title>Star Pattern Generator</title>
</head>
<body>
    <h1>Star Pattern Generator</h1>
    
    
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="rows">Enter the number of rows:</label>
        <input type="number" name="rows" id="rows" required>
        <button type="submit">Generate Pattern</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["rows"]) && is_numeric($_POST["rows"])) {
            $rows = intval($_POST["rows"]);

            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        } else {
            echo "<p>Please enter a valid number of rows.</p>";
        }
    }
    ?>