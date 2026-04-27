<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>PHP Error Diagnostic</h1>";

// Check database connection manually
include('application/config/database.php');
// Note: Since database.php is encoded, we can't easily read the vars, 
// but we can see if it triggers an error when included.

echo "<h2>Testing Manual Database Connection...</h2>";
// Try to connect using the suspected credentials
$host = 'pc80okgks0ocw8kcowogckkk';
$user = 'root';
$pass = 'j6ldBKvb8L7xIydSLKo8mr6ng8elyn7zXqLMGU'; // Truncated for safety in script, replace with full one if testing
$db   = 'default';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    echo "<p style='color:red'>Connection Failed: " . mysqli_connect_error() . "</p>";
} else {
    echo "<p style='color:green'>Connection Successful!</p>";
    mysqli_close($conn);
}

echo "<h2>Last PHP Errors:</h2>";
print_r(error_get_last());
?>
