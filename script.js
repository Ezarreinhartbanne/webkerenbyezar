// ===============================
// Konfirmasi sebelum hapus data
// ===============================
document.addEventListener("DOMContentLoaded", function () {
  const deleteLinks = document.querySelectorAll('a[href*="hapus.php"]');
  deleteLinks.forEach(link => {
    link.addEventListener("click", function (event) {
      const confirmDelete = confirm("Yakin ingin menghapus data ini?");
      if (!confirmDelete) {
        event.preventDefault();
      }
    });
  });
});

// ===============================
// Notifikasi setelah aksi CRUD
// ===============================
function showNotification(message, color = "#0077b6") {
  const notif = document.createElement("div");
  notif.textContent = message;
  notif.style.position = "fixed";
  notif.style.bottom = "30px";
  notif.style.right = "30px";
  notif.style.backgroundColor = color;
  notif.style.color = "white";
  notif.style.padding = "15px 25px";
  notif.style.borderRadius = "10px";
  notif.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
  notif.style.fontWeight = "bold";
  notif.style.transition = "opacity 0.5s ease";
  document.body.appendChild(notif);

  setTimeout(() => {
    notif.style.opacity = "0";
    setTimeout(() => notif.remove(), 500);
  }, 2500);
}

// ===============================
// Dark Mode Toggle
// ===============================
const darkToggle = document.createElement("button");
darkToggle.textContent = "🌙 Dark Mode";
darkToggle.classList.add("btn");
darkToggle.style.position = "fixed";
darkToggle.style.bottom = "20px";
darkToggle.style.left = "20px";
darkToggle.style.backgroundColor = "#333";
darkToggle.style.color = "white";
darkToggle.style.border = "none";
darkToggle.style.borderRadius = "10px";
darkToggle.style.padding = "10px 20px";
darkToggle.style.cursor = "pointer";
document.body.appendChild(darkToggle);

darkToggle.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  if (document.body.classList.contains("dark-mode")) {
    darkToggle.textContent = "☀️ Light Mode";
    document.body.style.backgroundColor = "#121212";
    document.body.style.color = "#f1f1f1";
    showNotification("Dark mode aktif 🌙", "#333");
  } else {
    darkToggle.textContent = "🌙 Dark Mode";
    document.body.style.backgroundColor = "#f8f9fa";
    document.body.style.color = "#333";
    showNotification("Light mode aktif ☀️", "#0077b6");
  }
});

// ===============================
// Animasi lembut saat load
// ===============================
document.addEventListener("DOMContentLoaded", () => {
  document.body.style.opacity = 0;
  document.body.style.transition = "opacity 0.8s ease";
  setTimeout(() => (document.body.style.opacity = 1), 100);
});
