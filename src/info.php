<?php
echo "<h1>Ioncube Function Check</h1>";
if (function_exists('_il_exec')) {
    echo "<p style='color:green'>Function '_il_exec' EXISTS</p>";
} else {
    echo "<p style='color:red'>Function '_il_exec' DOES NOT EXIST</p>";
}

if (extension_loaded('ionCube Loader')) {
    echo "<p style='color:green'>Extension 'ionCube Loader' is LOADED</p>";
} else {
    echo "<p style='color:red'>Extension 'ionCube Loader' is NOT LOADED</p>";
}

echo "<h2>PHP Info</h2>";
phpinfo();
?>
