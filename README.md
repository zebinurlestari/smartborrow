# Project Sistem Peminjaman Barang (SmartBorrow)

Project ini adalah sistem peminjaman barang berbasis web menggunakan PHP dan MySQL.

##  Fitur yang sudah dibuat
- Login dan Logout
- Dashboard pengguna
- Form Peminjaman Barang
- Penyimpanan data ke database
- Tampilan daftar peminjaman

##  Struktur File
- login.php
- index.php
- logout.php
- config.php
- peminjaman.php
- daftar_peminjaman.php

##  Database
Nama database: db_smartborrow  
Tabel:
1. users (id, username, password, role)
2. peminjaman (id, nama_peminjam, nim, barang, tanggal_pinjam, tanggal_kembali, status)

## Cara Menjalankan
1. Jalankan XAMPP (Apache dan MySQL)
2. Taruh folder project di `htdocs/`
3. Akses melalui browser:

# 🎀 NonaPinjam App
Aplikasi manajemen peminjaman barang asrama putri.

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

## 🗄️ Entity Relationship Diagram (ERD)
```mermaid
erDiagram
    USERS ||--o{ PEMINJAMAN : "manages"
    USERS {
        int id
        string username
    }
    PEMINJAMAN {
        int id
        string nama_peminjam
        string barang
        string status
    }
