<?php
echo "<h1>Ioncube Deep Investigation</h1>";

// Check for known obfuscated functions
$obfuscated_funcs = ['_il_exec', '_dyuweyrj4', '_dyuweyrj4r'];
echo "<h2>Function Checks:</h2><ul>";
foreach ($obfuscated_funcs as $f) {
    $status = function_exists($f) ? "<b style='color:green'>EXISTS</b>" : "<b style='color:red'>MISSING</b>";
    echo "<li>Function <code>$f</code>: $status</li>";
}
echo "</ul>";

echo "<h2>Encoding Check (Current File):</h2>";
if (ioncube_file_is_encoded()) {
    echo "<p style='color:green'>This file (info.php) is ENCODED (Wait, it shouldn't be!)</p>";
} else {
    echo "<p style='color:blue'>This file (info.php) is NOT ENCODED (Normal)</p>";
}

echo "<h2>Loader Status:</h2>";
echo "<p>Loader Version: " . (function_exists('ioncube_loader_version') ? ioncube_loader_version() : "Unknown") . "</p>";

echo "<h1>All Ioncube Functions</h1>";
$funcs = get_extension_funcs('ionCube Loader');
if ($funcs) {
    echo "<ul>";
    foreach ($funcs as $f) {
        echo "<li>$f</li>";
    }
    echo "</ul>";
}

echo "<h2>PHP Info</h2>";
phpinfo();
?>
