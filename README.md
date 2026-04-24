# Suebz Hospital

Sistem website dan manajemen rumah sakit yang lengkap dibangun dengan PHP dan MySQL, menampilkan halaman publik dan dashboard administratif.

## 🏥 Tentang Suebz Hospital

Suebz Hospital adalah fasilitas kesehatan yang terletak di Surabaya, Jawa Timur, Indonesia. Rumah sakit ini menyediakan informasi dan layanan kesehatan berkualitas tinggi kepada masyarakat, termasuk perawatan rawat inap, rawat jalan, dan fasilitas penunjang medis. Sistem ini juga menyertakan kalkulator BMI untuk pemantauan kesehatan.

## ✨ Fitur

### Website Publik
- **Halaman Beranda** dengan slideshow gambar dinamis
- **Halaman Layanan** yang merinci layanan medis:
  - Layanan penunjang (Radiologi, Kardiologi, Laboratorium)
  - Rawat inap (Dewasa, Bersalin, Anak)
  - Rawat jalan (Medical Center, Children Center)
- **Kalkulator BMI** untuk perhitungan berat badan ideal dengan UI modern
- **Galeri Video** dengan interaksi hover autoplay dan preview besar
- **Popup Kritik & Saran** dengan desain modern dan animasi smooth
- **Desain Responsif** dengan UI/UX modern dan animasi
- **Scroll Offset** untuk navigasi yang lebih baik
- **Video Interaktif** dengan autoplay saat hover dan click-to-enlarge

### Dashboard Admin
- **Sistem Login Aman** dengan manajemen sesi
- **Manajemen Media**:
  - Upload, edit, dan hapus gambar
  - Upload, edit, dan hapus video
- **Manajemen Ulasan** - Lihat dan kelola masukan pasien
- **Manajemen Profil** - Edit profil admin dan foto profil
- **Timeout Sesi** - Logout otomatis setelah tidak aktif
- **Visualisasi Data** - Grafik dan statistik

## 🚀 Teknologi yang Digunakan

- **Backend**: PHP 8.2+
- **Database**: MySQL/MariaDB 10.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Library**:
  - jQuery 3.5.1
  - Slick Carousel 1.8.1 (slideshow gambar)
  - Bootstrap 5.2.3 (dashboard admin)
  - Chart.js 2.8.0 (visualisasi data)
  - Simple-DataTables 7.1.2 (manajemen tabel)
  - FontAwesome 6.3.0 (ikon)

## 🎨 Fitur Styling & Animasi

### CSS Modern
- **Gradient Backgrounds** - Header popup dengan gradient (#667eea ke #764ba2)
- **Box Shadows** - Shadow yang modern dan tidak berlebihan untuk depth
- **Border Radius** - Rounded corners yang konsisten (8px-12px-16px)
- **Transitions** - Smooth transitions untuk semua interactive elements
- **Animation Keyframes** - Custom animations untuk popup slide-up
- **Responsive Units** - Menggunakan vw, rem, dan percentage untuk scalability

### JavaScript Interaksi
- **Event Listeners** - Modern event handling untuk interaksi pengguna
- **DOM Manipulation** - Proper class dan style management
- **Animation Control** - Smooth animasi tanpa blocking UI
- **Click Outside Detection** - Menutup popup dengan click di area overlay
- **Video Playback** - Autoplay control dengan event hover/click

### Design Patterns
- **Material Design** - Input fields dengan proper focus states
- **Clean Layout** - Spacing yang proper dan visual hierarchy
- **Mobile First** - Responsive design yang berfungsi baik di semua device
- **Progressive Enhancement** - Fungsi tetap bekerja tanpa JavaScript
- **Accessibility** - Focus states dan keyboard navigation yang jelas

## 📋 Persyaratan

- PHP 8.0 atau lebih tinggi
- MySQL/MariaDB 5.6+ atau 10.4+
- Web server (Apache, Nginx, atau PHP built-in server)
- Browser modern

## 🛠️ Instalasi

### 1. Pengaturan Database

Impor file SQL yang disediakan untuk membuat database dan tabel:

```bash
mysql -u root -p < sueb_hospital.sql
```

Atau gunakan phpMyAdmin untuk mengimpor file `sueb_hospital.sql`.

### 2. Konfigurasi

Perbarui pengaturan koneksi database di `config/koneksi.php`:

```php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sueb_hospital';
```

### 3. Struktur File

```
suebz_hospital/
├── admin/                    # Dashboard admin
│   ├── dashboard.php        # Dashboard admin utama
│   ├── index.php            # Login admin
│   ├── media/               # Manajemen media
│   │   ├── gambar.php       # Manajemen gambar
│   │   ├── video.php        # Manajemen video
│   │   └── proses/          # Script pemrosesan
│   ├── ulasan.php           # Manajemen ulasan
│   └── assets/              # Aset admin (CSS, JS)
├── config/
│   └── koneksi.php          # Koneksi database
├── img/                     # Folder gambar
│   ├── slideshow/           # Gambar slideshow
│   └── video/               # File video
├── fontawesome/             # Ikon FontAwesome
├── index.php                # Halaman beranda
├── layanan.php              # Halaman layanan
├── bmi.php                  # Kalkulator BMI
├── clinic.css               # Stylesheet utama
└── sueb_hospital.sql        # Skema database
```

### 4. Kredensial Admin Default

- **Email**: ya@gmail.com
- **Password**: 123

⚠️ **Penting**: Ubah kredensial ini di produksi!

## 📱 Penggunaan

### Akses Publik
- Beranda: `http://localhost/suebz_hospital/`
- Layanan: `http://localhost/suebz_hospital/layanan.php`
- Kalkulator BMI: `http://localhost/suebz_hospital/bmi.php`

### Akses Admin
- Login: `http://localhost/suebz_hospital/admin/`
- Dashboard: `http://localhost/suebz_hospital/admin/dashboard.php`

## 🔧 Kompatibilitas PHP 8

**Ya, proyek ini sepenuhnya kompatibel dengan PHP 8!**

Proyek ini dikembangkan dan diuji dengan PHP 8.2.12. Berikut alasan kompatibilitasnya:

- ✅ Menggunakan fungsi `mysqli_*` (prosedural dan berorientasi objek) - sepenuhnya didukung di PHP 8
- ✅ Tidak ada fungsi `mysql_*` yang sudah usang
- ✅ Sintaks dan praktik PHP modern
- ✅ Kompatibel dengan PHP 8.0, 8.1, 8.2, dan yang lebih tinggi

### Keuntungan PHP 8 untuk Proyek Ini
- Performa yang lebih baik dan eksekusi lebih cepat
- Penanganan error yang lebih baik
- Sistem tipe yang lebih kuat
- Fitur bahasa modern

## 🗄️ Skema Database

### Tabel

1. **admin** - Akun administrator
   - `id` (Primary Key)
   - `email`
   - `password`
   - `nama`
   - `foto_profil`

2. **gambar** - Gambar slideshow
   - `id_gambar` (Primary Key)
   - `name_img`
   - `notes`
   - `img`

3. **video** - Galeri video
   - `id_video` (Primary Key)
   - `name_vid`
   - `notes_v`
   - `vid`

4. **ulasan** - Ulasan/masukan pengguna
   - `id` (Primary Key)
   - `name`
   - `email`
   - `subject`
   - `message`

## 🎨 Fitur secara Detail

### Popup Kritik & Saran (Modern UI)
Sistem formulir kontak yang ditingkatkan dengan desain modern dan pengalaman pengguna yang lebih baik:

**Fitur Utama:**
- **Modern Header** dengan gradient background (#667eea ke #764ba2)
- **Smooth Animation** - Slide-up effect saat popup muncul
- **Click Outside** - Tutup popup ketika klik di area gelap
- **Interactive Close Button** - Rotate effect saat hover
- **Focus States** - Border dan background berubah saat input di-focus
- **Responsive Design** - Berfungsi baik di desktop, tablet, dan mobile
- **No Scrollbar Issues** - Layout yang proper tanpa horizontal scroll
- **Semantic HTML** - Menggunakan label dan proper input types

**Form Fields:**
- Nama (text) - dengan validasi required
- Email (email) - dengan validasi format email
- Subjek (text) - untuk kategori pesan
- Pesan (textarea) - dengan min-height yang proper

**CSS Features:**
- Background overlay semitransparent (rgba(0, 0, 0, 0.6))
- Box-shadow yang modern dan tidak berlebihan
- Animasi slide-up yang smooth (0.3s ease-out)
- Hover effects pada submit button
- Focus states dengan color transition
- Responsive max-width (90vw, max 450px)

### Kalkulator BMI
Kalkulator BMI membantu pengguna menentukan berat badan ideal berdasarkan tinggi dan berat:
- **Kurus**: BMI < 18.6
- **Normal**: 18.6 ≤ BMI < 24.9
- **Gemuk**: BMI ≥ 24.9

### Manajemen Media
Admin dapat mengelola secara dinamis:
- Gambar slideshow beranda
- Konten galeri video
- Semua media dapat ditambahkan, diedit, atau dihapus melalui panel admin

### Perbaikan UI/UX Terbaru
- **Scroll Offset** - Menambahkan scroll-padding-top dan scroll-margin-top untuk navigasi yang lebih baik
- **Video Interaktif** - Autoplay saat hover dan click-to-enlarge untuk preview besar
- **Modern Form Design** - Input fields dengan proper spacing, focus effects, dan validation
- **Clean Typography** - Font-size dan line-height yang optimal untuk readability
- **Smooth Animations** - Transitions yang natural untuk interaksi pengguna
- **Responsive Layout** - Lebih baik di berbagai ukuran layar
- **Color Consistency** - Gradient dan color palette yang seragam di seluruh aplikasi
- **Accessibility** - Focus states yang jelas dan keyboard navigation
- **Error Handling** - Validasi input yang lebih baik dengan pesan yang informatif

### Manajemen Sesi
- Timeout sesi otomatis setelah 1 jam tidak aktif
- Penanganan sesi yang aman
- Redirect ke login saat sesi kadaluarsa

## 🔒 Pertimbangan Keamanan

⚠️ **Untuk Penggunaan Produksi**:

1. **Ubah kredensial admin default**
2. **Implementasikan hashing password** (saat ini menggunakan teks biasa)
3. **Tambahkan validasi dan sanitasi input**
4. **Implementasikan perlindungan CSRF**
5. **Gunakan sertifikat HTTPS/SSL**
6. **Atur permission file yang tepat**
7. **Nonaktifkan tampilan error di produksi**
8. **Implementasikan pembatasan percobaan login**

## 📞 Informasi Kontak

- **Alamat**: Jl. Karangrejo II/59, Surabaya, Jawa Timur
- **Telepon**: +62 31 5444
- **Email**: support@suebzclinic.xyz

## 🤝 Kontribusi

Kontribusi sangat diterima! Jangan ragu untuk mengirimkan issue atau pull request.

## 📄 Lisensi

Proyek ini disediakan apa adanya untuk tujuan pendidikan dan demonstrasi.

## 👨‍💻 Catatan Pengembangan

- Proyek menggunakan kombinasi PHP prosedural dan berorientasi objek
- Frontend menggunakan CSS kustom dengan ikon FontAwesome
- Panel admin dibangun dengan Bootstrap 5 untuk UI modern
- Desain responsif bekerja di desktop, tablet, dan perangkat mobile
- Popup modern menggunakan flexbox centering dan backdrop filter
- Video interaktif dengan HTML5 dan JavaScript event handling
- Form validation dengan HTML5 dan JavaScript enhancement
- CSS variables untuk konsistensi warna dan spacing
- Performance optimization untuk CSS dan JavaScript
- Browser compatibility dengan fallback yang proper

## 🐛 Masalah yang Diketahui

- Password disimpan dalam teks biasa (sebaiknya menggunakan password_hash())
- Tidak ada validasi input pada formulir yang dikirimkan pengguna
- Tidak ada perlindungan CSRF yang diimplementasikan
- Pesan error mungkin mengekspos informasi sensitif



## 📝 Changelog & Perubahan Terbaru

### 2026-04-24 - Major UI/UX Improvements
- **Popup Kritik & Saran Redesign** - Modern UI dengan gradient header dan smooth animations
- **Scroll Offset Optimization** - Mengatasi navigasi tertutup header dengan scroll-margin-top
- **Video Interactive Features** - Autoplay saat hover dan click-to-enlarge untuk preview besar
- **Form Validation Enhancement** - HTML5 validation dengan focus states yang modern
- **CSS Improvements** - Box-shadow yang lebih natural, better transitions, dan proper spacing
- **Mobile Responsiveness** - Layout yang lebih baik di berbagai ukuran layar
- **Click Outside Popup** - UX improvement untuk menutup popup dengan klik di luar area
- **Performance Optimization** - Hardware accelerated animations dan proper event handling
- **Color Consistency** - Gradient palette yang seragam di seluruh aplikasi
- **Accessibility Improvements** - Better focus states dan keyboard navigation

### 2026-04-20 - Initial Improvements
- Cleaned up navigation URLs (menghapus index.php dari path)
- Enhanced BMI calculator dengan modern UI dan health advice
- Synchronized popup styling di seluruh halaman
- Fixed border collapse issues pada tables
- Added FontAwesome icons untuk menggantikan emoji
- Improved responsive breakpoints untuk mobile

## 💡 Best Practices Terapan

### Popup Form Handling
- **Click Outside** - Menggunakan event delegation untuk menutup popup dengan klik di luar area
- **Focus Management** - Mengalihkan focus ke input pertama saat popup muncul
- **Accessibility** - Menggunakan proper ARIA labels dan keyboard navigation
- **Animation Timing** - Menggunakan 0.3s untuk smooth transitions yang tidak terlalu lambat
- **Backdrop Filter** - Menggunakan rgba() untuk transparent background
- **Flexbox Centering** - Menggunakan flexbox untuk centering yang modern

### Form Validation
- **HTML5 Validation** - Menggunakan required, type="email", dan pattern attributes
- **JavaScript Enhancement** - Menambahkan custom validation untuk UX yang lebih baik
- **Error Messages** - Menampilkan pesan error yang jelas dan helpful
- **Input Sanitization** - PHP validation untuk mencegah XSS attacks
- **Email Format** - Validasi format email yang ketat

### CSS Performance
- **CSS Variables** - Menggunakan :root untuk color consistency
- **Hardware Acceleration** - Menggunakan transform dan opacity untuk animasi yang smooth
- **Debouncing** - Menggunakan event throttling untuk scroll events
- **Responsive Images** - Menggunakan object-fit: cover untuk proper image scaling
- **Box Sizing** - Menggunakan border-box untuk predictable sizing

## 🔄 Peningkatan Masa Depan

- Implementasikan hashing password yang aman
- Tambahkan validasi input yang komprehensif
- Implementasikan perlindungan CSRF
- Tambahkan dukungan multi-bahasa
- Tingkatkan responsivitas mobile
- Tambahkan sistem pemesanan janji temu
- Implementasikan manajemen dokter/pasien
- Tambahkan integrasi penagihan dan pembayaran

---

**Suebz Hospital** - Informasi & Layanan Kesehatan Berkualitas © 2024
