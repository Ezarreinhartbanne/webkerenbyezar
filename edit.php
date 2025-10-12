<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM penyewa WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $no_kamar = $_POST['no_kamar'];
    $no_hp = $_POST['no_hp'];

    mysqli_query($conn, "UPDATE penyewa SET nama='$nama', no_kamar='$no_kamar', no_hp='$no_hp' WHERE id=$id");
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Penyewa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section>
    <h2>Edit Data Penyewa</h2>
    <form method="post">
      <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>
      <input type="text" name="no_kamar" value="<?= $row['no_kamar']; ?>" required><br><br>
      <input type="text" name="no_hp" value="<?= $row['no_hp']; ?>" required><br><br>
      <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
  </section>
</body>
</html>
