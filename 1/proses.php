<?php

require 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO barang (id_barang, nama_barang, keterangan) VALUES ('$id_barang', '$nama_barang', '$keterangan')";

    if (mysqli_query($conn, $query)) {
        echo 'Data berhasil ditambahkan!';
    } else {
        echo 'Error: '.$query.'<br>'.mysqli_error($conn);
    }
}

mysqli_close($conn);