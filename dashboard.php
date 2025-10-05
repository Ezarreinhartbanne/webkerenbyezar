  <?php
session_start();

// Jika belum login, redirect ke login
if (!isset($_SESSION['username'])) {
    header("Location: login.php?error=Silakan%20login%20terlebih%20dahulu");
    exit();
}

$username = $_SESSION['username'];
$loginStatus = $_GET['login'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Manajemen Kost</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>Dashboard - Manajemen Kost</h1>
    <nav>
      <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#fitur">Fitur</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak">Kontak</a></li>
        <li><a href="logout.php" style="color:#ffd166;">Logout</a></li>
      </ul>
    </nav>
    <button id="darkModeBtn" class="btn btn-primary">Dark Mode</button>
  </header>

  <section id="beranda">
    <h2>Selamat Datang, <?= htmlspecialchars($username) ?>!</h2>
    <?php if ($loginStatus === 'success'): ?>
      <p style="color:green;">Login berhasil! Selamat datang di dashboard.</p>
    <?php endif; ?>
    <p>Platform digital untuk mengelola kost dengan lebih mudah, cepat, dan efisien.</p>
    <a href="#fitur" id="lihatFiturBtn" class="btn btn-primary">Lihat Fitur</a>
  </section>

  <section id="fitur">
    <h2>Fitur Utama</h2>
    <div class="grid" id="fiturList">
      <article class="card">
        <h3>Pencatatan Penyewa</h3>
        <p>Mengelola data penyewa kost dengan rapi dan terstruktur.</p>
      </article>
      <article class="card">
        <h3>Manajemen Pembayaran</h3>
        <p>Mencatat dan memantau pembayaran kost secara otomatis.</p>
      </article>
      <article class="card">
        <h3>Laporan Keuangan</h3>
        <p>Menampilkan ringkasan pemasukan dan pengeluaran kost.</p>
      </article>
    </div>
    <button id="tambahFiturBtn" class="btn btn-primary">Tambah Fitur Baru</button>
  </section>

  <section id="tentang">
    <h2>Tentang Kami</h2>
    <p>Kami menyediakan solusi digital untuk mempermudah pengelolaan kost.</p>
  </section>

  <section id="kontak">
    <h2>Kontak</h2>
    <address>
      <p>Email: manajemenkost@example.com</p>
      <p>Telepon: +62 812 3456 7890</p>
      <p>Alamat: Jl. Melati No. 123, Samarinda</p>
    </address>
  </section>

  <footer>
    <p>&copy; 2025 Manajemen Kost. Semua Hak Dilindungi.</p>
    <p>Referensi desain: 
      <a href="https://dribbble.com/shots/14791685-Rental-Management-Dashboard" target="_blank">Dribbble - Rental Management</a>
    </p>
  </footer>
</body>
</html>
