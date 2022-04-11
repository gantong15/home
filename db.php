<?php
$server ="sql301.epizy.com";
$username ="epiz_31139837";
$password = "L2GyJCbOSwCvJ";
$dbname = "epiz_31139837_simpleshop";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
die("connection Failed:".mysqli_connect_error());
}

?>