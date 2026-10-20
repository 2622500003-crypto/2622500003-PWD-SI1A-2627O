# P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien

## Deskripsi
Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi navigasi, dan validasi formulir sisi klien.

Baseline diambil dari artefak P4 (index.html, style.css, img/foto-profil.jpg). Pengembangan berfokus pada penambahan perilaku JavaScript tanpa mengubah struktur HTML dan tata letak CSS P4. Validasi berjalan di sisi klien, pesan "Form berhasil divalidasi." bukan berarti data terkirim ke server.

Tujuan P5:
- Menyiapkan baseline P5 dari P4
- Menghubungkan JavaScript eksternal
- Membuat hamburger menu dengan DOM & Event
- Validasi formulir sisi klien
- Menampilkan feedback gagal/berhasil
- Pengujian & debugging dengan DevTools

Cara menjalankan: Buka `pertemuan-05/index.html` di browser.

## Fitur dan Pengembangan

**[Siapkan baseline P5 dari artefak P4]:** Membuat direktori `pertemuan-05/`, menyalin `index.html`, `style.css`, `img/foto-profil.jpg` dari `pertemuan-04/`. Verifikasi halaman tampil sama seperti P4. Tidak menyalin README P4.

**[Hubungkan JavaScript eksternal ke HTML]:** Membuat `pertemuan-05/script.js`. Menambahkan `<script src="script.js"></script>` sebelum `</body>` di index.html. Verifikasi dengan `console.log("script.js berhasil dijalankan.");` di Console, lalu hapus setelah berhasil.

**[Tambah tombol navigasi responsif]:** Menambahkan tombol di header:
`<button class="nav-toggle" id="navToggle" type="button" aria-label="Buka navigasi" aria-controls="navMenu" aria-expanded="false">☰</button>` dan memberi id `navMenu` pada `<ul>` navigasi.

**[Akses Elemen Navigasi dengan DOM]:** `const navToggle = document.getElementById("navToggle"); const navMenu = document.getElementById("navMenu");`

**[Event Click & Hamburger Menu]:** 
```js
navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-open");
  const isOpen = navMenu.classList.contains("nav-open");
  navToggle.setAttribute("aria-expanded", isOpen);
  navToggle.textContent = isOpen ? "✕" : "☰";
});