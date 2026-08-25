# Kantin Multi-Tenant — Laravel 13

Aplikasi sistem kantin multi-tenant berbasis Laravel 13, Livewire 4, MariaDB, Redis, dan Laravel Reverb untuk interaksi realtime.

---

## 1. System Requirements

* **PHP**: `>= 8.3` (Disarankan PHP 8.4)
  * Ekstensi: `pdo_mysql`, `mbstring`, `openssl`, `ctype`, `curl`, `fileinfo`, `xml`, `tokenizer`
* **Composer**: `>= 2.2`
* **Node.js**: `>= 20.x` & **NPM**: `>= 10.x`
* **Database**: MariaDB `>= 10.11` (Port `3306`)
* **In-Memory Cache & Queue**: Redis Server (Port `6379`)
* **Git**: `>= 2.x`

---

## 2. Setup & Instalasi Proyek

Langkah-langkah mereplikasi lingkungan proyek:

```bash
# 1. Clone repository
git clone https://github.com/<USERNAME>/kantin-multi-tenant.git
cd kantin-multi-tenant

# 2. Pasang dependensi PHP & JavaScript
composer install
npm install

# 3. Buat file environment
cp .env.example .env
php artisan key:generate

# 4. Jalankan migrasi dan seeder database
php artisan migrate:fresh --seed

# 5. Kompilasi aset frontend
npm run build

3. Konfigurasi Lingkungan (.env)
Pastikan variabel utama pada .env telah disesuaikan:
APP_NAME="Kantin Multi-Tenant"
APP_ENV=local
APP_URL=http://localhost:8000
APP_LOCALE=id
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kantin_multi_tenant
DB_USERNAME=root
DB_PASSWORD=ServBay.dev

SESSION_DRIVER=redis
CACHE_STORE=redis
QUEUE_CONNECTION=redis

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379

BROADCAST_CONNECTION=reverb
REVERB_APP_ID=123456
REVERB_APP_KEY=kantinreverbkey
REVERB_APP_SECRET=kantinreverbsecret
REVERB_HOST="localhost"
REVERB_PORT=8080
REVERB_SCHEME=http

4. Menjalankan Aplikasi
Jalankan perintah berikut pada terminal terpisah saat pengembangan:
HTTP Server (Laravel):
php artisan serve
WebSocket Server (Laravel Reverb):
php artisan reverb:start
Vite Hot-Reload (Frontend Dev):
npm run dev

5. Quality Gate & Testing
Jalankan seluruh pengujian berikut sebelum commit:
# Uji Test PHPUnit / Feature Tests
php artisan test

# Format standar kode (Laravel Pint)
./vendor/bin/pint --test

# Uji build aset frontend
npm run build

6. Troubleshooting
Gejala Error             Kemungkinan Penyebab                         Solusi
could not find driver |Ekstensi pdo_mysql belum aktif di PHP   |Aktifkan extension=pdo_mysql di php.ini lalu restart PHP
Port 3306 / 6379 bentrok  |Ada service lokal lain yang masih aktif  |Matikan service lama atau ganti port di .env
Vite manifest not found |Aset frontend belum dibangun     |Jalankan npm install && npm run build ProcessTimedOutException saat install broadcasting   |Batas waktu unduh npm terlewati  |Pasang manual: npm install --save-dev laravel-echo pusher-js