<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil data penyewa
$result = mysqli_query($conn, "SELECT * FROM penyewa ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Manajemen Kost</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Dashboard Manajemen Kost</h1>
    <a href="tambah.php" class="btn btn-primary">+ Tambah Penyewa</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>
  </header>

  <section>
    <h2>Daftar Penyewa Kost</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto; border-collapse: collapse;">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No. Kamar</th>
        <th>No. HP</th>
        <th>Aksi</th>
      </tr>

      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['no_kamar']; ?></td>
        <td><?= $row['no_hp']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
          <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </table>
  </section>
</body>
</html>
