# Laravel Product CRUD Application

## Deskripsi

Aplikasi ini adalah sistem manajemen produk sederhana yang dibangun menggunakan Laravel. Aplikasi ini memungkinkan pengguna untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada produk dan kategori. Fitur pencarian juga disertakan untuk meningkatkan pengalaman pengguna dalam menemukan produk yang diinginkan.

## Fitur Utama

-   **CRUD Produk**: Buat, baca, perbarui, dan hapus produk.
-   **Kategori**: Kategori produk.
-   **Pencarian Dinamis**: Mencari produk berdasarkan nama product.
-   **UI Responsif**: Antarmuka pengguna yang responsif menggunakan Bootstrap.

## Prasyarat

Sebelum menjalankan aplikasi ini, pastikan Anda memiliki:

-   PHP >= 8.3
-   Composer
-   Laravel >= 11.x
-   Database (MySQL)

## Proses Pengembangan

1. **Membuat Migrations**:

    - Membuat migrasi untuk tabel `categories`.
    - Membuat migrasi untuk tabel `products`.

2. **Membuat Models**:

    - Membuat model untuk `Category`.
    - Membuat model untuk `Product`.

3. **Membuat Controllers**:

    - Membuat controller untuk `Category`.
    - Membuat controller untuk `Product`.
    - Membuat controller untuk tampilan depan.

4. **Membuat Service Request**:

    - Membuat request untuk menyimpan produk.
    - Membuat request untuk menyimpan kategori.

5. **Mengatur Routes**:

    - Menambahkan rute-rute untuk aplikasi di `routes/web.php`.

6. **Membuat Views**:

    - Membuat tampilan untuk daftar produk, tambah produk, edit produk, daftar kategori, dan tambah kategori.

7. **Mengimplementasikan Fitur Pencarian**:

    - Menambahkan form pencarian di tampilan.

8. **Pengujian**:

    - Menguji semua fitur CRUD.

9. **Optimisasi dan Refactoring**:

    - Melakukan optimisasi kode dan refactoring.

10. **Dokumentasi**:
    - Menyusun dokumentasi (README.md) untuk proyek.
