<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniska_praktikumweb_2b";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Gagal Koneksi: ".mysqli_connect_error());
}
?>