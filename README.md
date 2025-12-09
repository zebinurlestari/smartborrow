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
