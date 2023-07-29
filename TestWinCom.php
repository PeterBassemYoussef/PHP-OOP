<?php
// Parent first
include ('Computer.php'); // Parent Class
include ('Windows.php'); // Child Class

// echo phpinfo();

$win = new Windows();
$win-> printOut();

echo "\n";
echo Windows::CONSTDTATA;
