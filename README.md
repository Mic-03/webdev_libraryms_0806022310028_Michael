## Library Management System
Sebuah sistem manajemen perpustakaan sederhana yang dibangun menggunakan konsep Object-Oriented Programming (OOP) dalam PHP. Sistem ini memodelkan hubungan antara berbagai jenis buku (seperti eBook dan buku cetak) menggunakan pewarisan (inheritance).

## Fitur
1. Base Class: Book

- Menyimpan informasi dasar seperti judul, penulis, dan tahun publikasi.

- Metode getDetails() untuk menampilkan detail buku.

2. Derived Class: EBook

- Menambahkan properti fileSize (ukuran file dalam MB).

- Meng-override metode getDetails() untuk menyertakan ukuran file.

3. Derived Class: PrintedBook

- Menambahkan properti numberOfPages (jumlah halaman).

- Meng-override metode getDetails() untuk menyertakan jumlah halaman.

## Struktur Kode
- Library.php: File yang berisi implementasi kelas dan tampilan HTML.
