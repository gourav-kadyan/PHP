<?php
// Error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

// Set error handler
set_error_handler("customError");

// Trigger error
$test = "This is a test"; // Define $test before using it
echo $test;
?>
