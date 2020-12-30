<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "id15710274_root";
$password = "siApotik2020TI2D()";
$database = "id15710274_si_apotik";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>