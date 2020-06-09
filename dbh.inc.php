<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lostthings";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn)
{
  die("can't connect".mysqli_error());
}
?>
