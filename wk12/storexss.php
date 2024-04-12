<?php
$storedXSS = file_get_contents('storedxss.txt');

echo $storedXSS;
?>