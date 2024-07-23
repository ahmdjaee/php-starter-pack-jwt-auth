
# Started Pack Login Management with JWT Auth

`php-started-pack-jwt-auth` adalah project pribadi saya yang dikembangkan menggunakan arsitektur MVC dan mengimplementasikan JWT sebagai authentication-nya. Project ini bertujuan untuk membuat aplikasi sederhana tanpa perlu membuat authentication-nya dari awal.

## Fitur

Started pack ini secara default sudah mengimplementasikan:
1. **Bootstrap 5.3.2** sebagai framework CSS.
2. **"nyholm/psr7"** untuk mengelola dependency injection menggunakan container.
3. **PSR-4**: Started pack ini sudah otomatis menggunakan autoload.
4. **PHPUnit** untuk membuat unit test.
5. **Monolog** untuk mengelola logging.

## Cara Install

1. Install dependencies dengan composer:
   ```bash
   composer install
   ```
2. Buat database Anda.
3. Sesuaikan konfigurasi database di `config/database.php`.
4. Import file `database.sql`.
5. Jalankan server:
   ```bash
   cd public
   php -S localhost:8000
   ```
6. Aplikasi akan berjalan pada [http://localhost:8000](http://localhost:8000).

## Preview Aplikasi

### Register Page
![image](https://github.com/user-attachments/assets/742d46a3-96fd-4cf0-93d8-09e05df14806)

### Login Page
![image](https://github.com/user-attachments/assets/e6170d3b-0910-4c5b-a532-e320693dc6b0)

### Home Page
![image](https://github.com/user-attachments/assets/d8ca34db-7517-4de9-9568-bd502c28dfee)



