# Kasir Kopdes API
REST API manajemen barang koperasi desa untuk Tugas Akhir BTNG Kelas Website Backend.
## Live Demo
- API: https://app-ac845817-c5ec-4b64-95a0-4ba2f2bb00a7.cleverapps.io/api
- Dokumentasi (Scramble): https://app-ac845817-c5ec-4b64-95a0-4ba2f2bb00a7.cleverapps.io/docs/api#/
## Teknologi
Laravel 12, PHP 8.2, MySQL, Scramble
## Setup Lokal
```bash
git clone https://github.com/userGHRDTY/KASIR-KOPDES.git
cd KOPDES-RDTYGHNPRTM
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
