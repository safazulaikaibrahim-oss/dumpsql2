<?php

$host = "localhost";
$username = "root";
$password = "";
$databaseName = "siswa_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$koneksi = mysqli_connect($host, $username, $password, $databaseName);

if(!$koneksi) {
    echo "Koneksi Tidak Berhasil";
}else{
    echo "<h1 style='color:pink'>Sukses</h1>";
    echo "Berhasil terhubung ke database: " .$databaseName;
}
