<?php
echo "<h1>File Encoding Check</h1>";
$file = 'index.php';
if (file_exists($file)) {
    $is_encoded = ioncube_file_is_encoded($file);
    if ($is_encoded) {
        echo "<p style='color:green'>File '$file' is ENCODED by Ioncube</p>";
    } else {
        echo "<p style='color:red'>File '$file' is NOT ENCODED (or not recognized)</p>";
    }
} else {
    echo "<p style='color:orange'>File '$file' not found</p>";
}

echo "<h1>Ioncube Function List</h1>";
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
