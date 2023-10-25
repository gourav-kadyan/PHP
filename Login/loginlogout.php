<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'admin' && $password === '123') {
        $_SESSION['loggedin'] = true;
    } else {
        echo "Invalid username or password";
    }
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "You are logged in. <form method='post'><input type='submit' name='logout' value='Logout'></form>";
} else {
    echo "<form method='post'>
            <label for='username'>Username:</label>
            <input type='text' id='username' name='username' required><br>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password' required><br>
            <input type='submit' name='login' value='Login'>
          </form>";
}
?>
