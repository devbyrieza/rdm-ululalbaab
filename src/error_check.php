<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define BASEPATH to allow including CI files
define('BASEPATH', true);

echo "<h1>PHP Error Diagnostic (Bypass)</h1>";

echo "<h2>Testing Manual Database Connection...</h2>";
// Try to connect using the suspected credentials
$host = 'pc80okgks0ocw8kcowogckkk';
$user = 'root';
$db   = 'default';
// Password removed, will just check for host resolution/timing out

$conn = @mysqli_connect($host, $user, '', $db);
if (!$conn) {
    echo "<p>Status Koneksi Host: <b>" . mysqli_connect_error() . "</b></p>";
} else {
    echo "<p style='color:green'>Host accessible (Empty Pass)!</p>";
    mysqli_close($conn);
}

echo "<h2>Checking for Config Overrides...</h2>";
$config_file = 'application/config/database.php';
if (file_exists($config_file)) {
    echo "<p>File <code>$config_file</code> exists. Size: " . filesize($config_file) . " bytes</p>";
} else {
    echo "<p style='color:red'>File <code>$config_file</code> MISSING!</p>";
}

echo "<h2>Last PHP Errors:</h2>";
print_r(error_get_last());
?>
