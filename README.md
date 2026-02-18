# 🎀 NonaPinjam App (SmartBorrow)
Proyek ini adalah sistem manajemen peminjaman barang asrama putri berbasis web. Dibuat untuk mempermudah pendataan barang agar tidak ada lagi drama "barang hilang" atau "lupa siapa yang pinjam".

## 🚀 Fitur Mantap
* **Multi-Language**: Support bahasa ID dan EN di halaman login.
* **Auth System**: Login aman, yang belum punya akun bisa register dulu.
* **Dashboard Dinamis**: Menampilkan greeting sesuai nama user yang login.
* **CRUD Peminjaman**: Bisa tambah (ajukan), lihat daftar, edit, sampai hapus data peminjaman.

## 🛠️ Struktur Folder & File
* `config.php`: Jembatan ke database `db_smartborrow`.
* `login.php`: Halaman pintu masuk (autentikasi).
* `index.php`: Dashboard utama tempat semua aksi terjadi.
* `peminjaman.php`: Logika buat proses simpan-simpan data.
* `daftar_peminjaman.php`: Tempat nampilin tabel data peminjaman.

## 📊 Activity Diagram
Alur dari user buka aplikasi sampai berhasil kelola barang:

```mermaid
flowchart TD
    Start([Start]) --> Login[Halaman Login]
    Login --> PunyaAkun{Sudah Punya Akun?}
    
    PunyaAkun -- Tidak --> Register[Register New Account]
    Register --> Login
    
    PunyaAkun -- Ya --> Auth[Input Email & Password]
    Auth --> Val{Validasi Database}
    Val -- Gagal --> Login
    
    Val -- Sukses --> Dash[Dashboard NonaPinjam]
    Dash --> Action{Pilih Aktivitas}
    
    Action -- Ajukan Pinjaman --> Form[Isi Nama, Barang, Tanggal]
    Action -- Kelola Data --> Table[Lihat Tabel Data]
    
    Form --> Simpan[Simpan ke Database]
    Simpan --> Dash
    
    Dash --> Logout[Klik Logout]
    Logout --> End([End])

## 📊 Activity Diagram
Berikut adalah alur sistem dari Login hingga manajemen Dashboard:

```mermaid
flowchart TD
    Start([Start]) --> Login[Halaman Login]
    Login --> PunyaAkun{Sudah Punya Akun?}
    
    PunyaAkun -- Tidak --> Register[Register New Account]
    Register --> Login
    
    PunyaAkun -- Ya --> Auth[Input Email & Password]
    Auth --> Val{Validasi Database}
    Val -- Gagal --> Login
    
    Val -- Sukses --> Dash[Dashboard NonaPinjam]
    Dash --> Action{Pilih Aksi?}
    
    Action -- Ajukan Pinjaman --> Form[Isi Nama, Barang, Tanggal]
    Action -- Kelola Data --> Table[Lihat Tabel Data Peminjaman]
    
    Form --> Simpan[Simpan ke db_smartborrow]
    Simpan --> Dash
    
    Dash --> Logout[Klik Logout]
    Logout --> End([End])

