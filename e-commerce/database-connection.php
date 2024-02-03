<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

return $mysqli;

?>
