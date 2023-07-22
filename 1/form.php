<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">
    <title>Form Penambahan Data</title>

</head>

<body>
    <h2>Form Penambahan Data</h2>
    <form action="proses.php" method="post">
        <label for="id_barang">ID Barang:</label>
        <input type="number" name="id_barang" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" rows="4" required></textarea><br>

        <input type="submit" name="submit" value="Tambahkan Data">
    </form>
</body>

</html>