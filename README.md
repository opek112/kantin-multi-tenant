<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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
git clone [https://github.com/](https://github.com/)<USERNAME>/kantin-multi-tenant.git
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

3. Konfigurasi Lingkungan (.env)Pastikan variabel utama pada .env telah disesuaikan:Code snippetAPP_NAME="Kantin Multi-Tenant"
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
4. Menjalankan AplikasiJalankan perintah berikut pada terminal terpisah saat pengembangan:HTTP Server (Laravel):Bashphp artisan serve
Akses di browser: http://localhost:8000WebSocket Server (Laravel Reverb):Bashphp artisan reverb:start
Vite Hot-Reload (Frontend Dev):Bashnpm run dev
5. Quality Gate & TestingJalankan seluruh pengujian berikut sebelum commit:Bash# Uji Test PHPUnit / Feature Tests
php artisan test

# Format standar kode (Laravel Pint)
./vendor/bin/pint --test

# Uji build aset frontend
npm run build
6. TroubleshootingGejala ErrorKemungkinan PenyebabSolusicould not find driverEkstensi pdo_mysql belum aktif di PHPAktifkan extension=pdo_mysql di php.ini lalu restart PHPPort 3306 / 6379 bentrokAda service lokal lain yang masih aktifMatikan service lama atau ganti port di .envVite manifest not foundAset frontend belum dibangunJalankan npm install && npm run buildProcessTimedOutException saat install broadcastingBatas waktu unduh npm terlewatiPasang manual: npm install --save-dev laravel-echo pusher-js