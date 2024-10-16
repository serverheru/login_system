<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$db_name = "uts_pmp";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected Successfully";
?>
