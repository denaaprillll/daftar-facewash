# CRUD Daftar Produk Face Wash
## 📌 Deskripsi
Aplikasi ini merupakan sistem CRUD (Create, Read, Update, Delete) sederhana yang dibangun menggunakan framework Laravel, PHP, dan MySQL. Aplikasi ini digunakan untuk mengelola data produk seperti menambah, menampilkan, mengubah, dan menghapus data secara terstruktur.
Project ini dibuat untuk latihan dasar pengembangan backend dengan Laravel.

## 🎯 Tujuan Proyek
Proyek ini bertujuan untuk:
    - Memahami konsep dasar CRUD pada aplikasi web
    - Mempelajari framework Laravel
    - Memahami konsep MVC (Model, View, Controller)
    - Mengelola database menggunakan MySQL
    - Melatih pembuatan aplikasi web sederhana

## 🚀 Fitur yang tersedia meliputi:
1. Menampilkan data produk
2. Menambah data produk
3. Mengedit data produk
4. Menghapus data produk
  
##  🛠️ Teknologi yang Digunakan
    - Laravel
    - PHP
    - MySQL
    - Blade Template
    - XAMPP
    - Composer

## 📂 Struktur Folder Penting
app/
 └── Http/Controllers/ProductController.php
app/
 └── Models/Product.php
resources/views/products/
 ├── index.blade.php
 ├── create.blade.php
 └── edit.blade.php
routes/web.php

## ⚙️ Proses Instalasi & Setup Project
1. Install Laravel
Pastikan sudah install:
    - PHP
    - Composer
    - XAMPP
Lalu jalankan:
composer create-project laravel/laravel daftar-facewash
2. Masuk ke folder project
    - cd daftar-facewash
3. Jalankan Laravel
    - php artisan serve
  Buka di browser: http://127.0.0.1:8000
#### Setup Database
1. Buka phpMyAdmin
2. Buat database, misalnya: daftar_facewash
3. Atur di file .env:
    - DB_DATABASE=daftar_facewash
    - DB_USERNAME=root
    - DB_PASSWORD=
4. Jalankan Migration
   - php artisan migrate
6. Membuat CRUD (Produk)
    - Buat Model + Migration + Controller : php artisan make:model Product -mcr
    - Edit migration (database) :
    - $table->string('nama_produk');
    - $table->string('jenis');
    - $table->integer('harga');
    - $table->text('keterangan');
Lalu jalankan: php artisan migrate
7. Buat Routing
    - Edit file: routes/web.php
Tambahkan:
    - Route::resource('products', ProductController::class);
8. Buat tampilan (Blade)
Folder: resources/views/products/
File:
    - index.blade.php
    - create.blade.php
    - edit.blade.php
9. Jalankan Project
    - php artisan serve
Akses: http://127.0.0.1:8000/products

## 🚀 Upload ke GitHub
1. Inisialisasi Git: git init
2. Tambahkan file: git add .
3. Commit : git commit -m "first commit"
4. Buat repository di GitHub
    - Klik New Repository
    - Nama: daftar-facewash
    - Pilih: Public
    - Create repository
5. Hubungkan ke GitHub
git remote add origin https://github.com/denaaprillll/daftar-facewash.git
6. Push ke GitHub
    - git branch -M main
    - git push -u origin main
---
### 🔄 Update ke depannya
Setiap ada perubahan:
    - git add .
    - git commit -m "update project"
    - git push

### 🎯 Hasil Akhir
- Project Laravel berjalan ✅
- CRUD berfungsi ✅
- Repository GitHub aktif ✅
#### Dena April (240180131)
