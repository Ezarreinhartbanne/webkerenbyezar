<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $no_kamar = $_POST['no_kamar'];
    $no_hp = $_POST['no_hp'];

    mysqli_query($conn, "INSERT INTO penyewa (nama, no_kamar, no_hp) VALUES ('$nama', '$no_kamar', '$no_hp')");
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Penyewa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section>
    <h2>Tambah Data Penyewa</h2>
    <form method="post">
      <input type="text" name="nama" placeholder="Nama Penyewa" required><br><br>
      <input type="text" name="no_kamar" placeholder="Nomor Kamar" required><br><br>
      <input type="text" name="no_hp" placeholder="Nomor HP" required><br><br>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
  </section>
</body>
</html>
