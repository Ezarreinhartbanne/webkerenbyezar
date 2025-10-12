<?php
$server = "localhost";
$user = "root"; // ganti jika perlu
$pass = "";     // ganti jika perlu
$db   = "manajemen_kost";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
