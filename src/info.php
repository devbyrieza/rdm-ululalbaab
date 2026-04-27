<?php
echo "<h1>Ioncube Check</h1>";
if (extension_loaded('ionCube Loader')) {
    echo "<p style='color:green'>Extension 'ionCube Loader' is LOADED</p>";
} else {
    echo "<p style='color:red'>Extension 'ionCube Loader' is NOT LOADED</p>";
}

echo "<h2>PHP Info</h2>";
phpinfo();
?>
