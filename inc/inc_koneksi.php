<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_arsip";

$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) {
    die ("Koneksi Database Gagal"); }
else {
    echo "Koneksi Database Berhasil";
}