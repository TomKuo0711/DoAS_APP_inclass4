<?php

$server = "localhost";
$user = $_GET["user"];
$password = $_GET["password"];
$database = $_GET["database"];

$conn = mysqli_connect($server, $user, $password, $database) or die("Connection Error: " . mysqli_connect_error() . "<br/>");


// Query Database
$customer = $_GET["customer"];

$strSQL = "SELECT email FROM Users WHERE name='" .$customer ."'";
$result = mysqli_query($conn, $strSQL);
echo mysqli_fetch_row($result)[0];


// Close Database
mysqli_close($conn);

?>

