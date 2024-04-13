<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
$base_dir = '/'; 
$dir = isset($_GET['q']) ? basename($_GET['q']) : '.';
$full_path = realpath($base_dir . DIRECTORY_SEPARATOR . $dir);

if ($full_path && is_dir($full_path) && strpos($full_path, realpath($base_dir)) === 0) {
    echo "<pre>";
    print_r(scandir($full_path));
    echo "</pre>";
} else {
    echo "Invalid directory or access denied.";
}
?>
