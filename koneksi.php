<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "koetwakno";
$koneksi  = mysqli_connect($server, $username, $password, $database)
or die("database tidak bisa dibuka");
?>