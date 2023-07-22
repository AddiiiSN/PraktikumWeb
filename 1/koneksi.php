<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'praktikum';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    exit('Koneksi ke database gagal: '.mysqli_connect_error());
}