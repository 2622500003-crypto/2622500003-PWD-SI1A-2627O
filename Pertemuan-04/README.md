# Pertemuan 4 - CSS3 Layout dan Responsive Web Design 

## Pengembangan 
- Perubahan yang dilakukan:[Pindahkan semua CSS internal dari `<style>` di P3 ke `style.css`. Hubungkan dengan `<link rel="stylesheet" href="style.css">` di `<head>`. Hapus `<style>` dari `index.html`.
- **Box Model:** Tambah `* { box-sizing: border-box; }`. Atur `body`, `header`, `section`, `#home`, `#about`, `#contact`, `footer` dengan `padding`, `margin`, `border`, `width:100%`.
- **Flexbox:** `nav ul { display:flex; flex-direction:column; gap:8px; }` untuk navigasi. `li` sebagai Flex Item.
- **Grid:** `main { display:grid; grid-template-columns:1fr; gap:16px; }`. `#contact { grid-column:1 / -1; }` agar membentang penuh.
- **Responsive Mobile-First:** Base untuk mobile (1 kolom). Breakpoint 768px untuk desktop.
  ```css]
- Commit dan Push Github: [Pisahkan CSS dari HTML, Terapkan Box Model, Terapkan Flexbox, Terapkan Grid, Terapkan desain responsif.]

## Pengujian  

- Perangkat bergerak: [Mobile (360px - 412px): Navigasi vertikal, main 1 kolom, foto max-width:100%, tidak overflow.] 
- Desktop: [Desktop (768px, 1024px, 1280px): Navigasi horizontal, Home dan Tentang 2 kolom, Kontak membentang penuh. Perubahan terjadi pas di 768px.] 
- Galat dan perbaikan: [tidak ada] 
- Validasi CSS: [Berkas style.css divalidasi menggunakan W3C CSS Validation Service dan hasil validasi tidak terdapat galat yang perlu diperbaiki.] 

## Repositori 

URL GitHub: [https://github.com/2622500003-crypto/2622500003-PWD-SI1A-2627O/tree/main/Pertemuan-04]