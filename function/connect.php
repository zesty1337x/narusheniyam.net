<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbb";

$connect = mysqli_connect($servername, $username, $password,  $dbname);

return $connect;

?>