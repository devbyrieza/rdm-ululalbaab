<?php
echo "<h1>Ioncube Function List</h1>";
$funcs = get_extension_funcs('ionCube Loader');
if ($funcs) {
    echo "<ul>";
    foreach ($funcs as $f) {
        echo "<li>$f</li>";
    }
    echo "</ul>";
} else {
    echo "<p style='color:red'>No functions found for 'ionCube Loader'</p>";
}

echo "<h1>Ioncube Check</h1>";
if (extension_loaded('ionCube Loader')) {
    echo "<p style='color:green'>Extension 'ionCube Loader' is LOADED</p>";
} else {
    echo "<p style='color:red'>Extension 'ionCube Loader' is NOT LOADED</p>";
}

echo "<h2>PHP Info</h2>";
phpinfo();
?>
