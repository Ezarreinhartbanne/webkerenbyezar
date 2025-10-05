// Tombol Dark Mode
const darkBtn = document.getElementById("darkModeBtn");
if (darkBtn) {
  darkBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    darkBtn.textContent = document.body.classList.contains("dark-mode")
      ? "Light Mode"
      : "Dark Mode";
  });
}

// Scroll halus ke fitur
const lihatFiturBtn = document.getElementById("lihatFiturBtn");
if (lihatFiturBtn) {
  lihatFiturBtn.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector("#fitur").scrollIntoView({
      behavior: "smooth"
    });
  });
}

// Tambah fitur baru (DOM Manipulation)
const tambahFiturBtn = document.getElementById("tambahFiturBtn");
const fiturList = document.getElementById("fiturList");

if (tambahFiturBtn && fiturList) {
  tambahFiturBtn.addEventListener("click", () => {
    const card = document.createElement("article");
    card.classList.add("card");
    card.innerHTML = `
      <h3>Notifikasi Otomatis</h3>
      <p>Mengingatkan penyewa untuk melakukan pembayaran tepat waktu.</p>
    `;
    fiturList.appendChild(card);
    tambahFiturBtn.disabled = true;
    tambahFiturBtn.textContent = "Fitur Baru Ditambahkan";
  });
}
