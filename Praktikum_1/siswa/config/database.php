<?php

date_default_timezone_set("ASIA/JAKARTA");

$server    = "localhost";
$username  = "id14054314_admin_database";
$password  = "+yl4TO(=ca((okB^";
$database  = "id14054314_database_sekolah";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi database gagal : ' . mysqli_connect_error());
}
