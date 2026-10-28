# Kasir Kopdes API
REST API manajemen barang koperasi desa untuk Tugas Akhir BTNG Kelas Website Backend.
## Live Demo
- API: https://NAMA-APP.cleverapps.io/api/barang
- Dokumentasi (Scramble): https://NAMA-APP.cleverapps.io/docs/api
## Teknologi
Laravel 12, PHP 8.2, MySQL, Scramble
## Setup Lokal
```bash
git clone https://github.com/USERNAME/BTNG-Backend-NamaLengkap.git
cd BTNG-Backend-NamaLengkap
composer install
cp .env.example .env
php artisan key:generate
```
Buat database kosong bernama `kopdes`, sesuaikan `DB_USERNAME` dan `DB_PASSWORD`
di file `.env`, lalu jalankan:
```bash
php artisan migrate --seed
php artisan serve
```
## Daftar Endpoint
| Method | Endpoint | Deskripsi |
|---|---|---|
| GET | /api/barang | Daftar barang (filter `?kategori=`, `?status=`, `?search=`) |
| GET | /api/barang/{id} | Detail barang |
| POST | /api/barang | Tambah barang |
| PUT/PATCH | /api/barang/{id} | Perbarui barang |
| DELETE | /api/barang/{id} | Hapus barang |
