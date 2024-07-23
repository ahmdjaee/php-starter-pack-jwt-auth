Started pack login management with jwt auth

php started-pack-jwt-auth adalah project pribadi saya yang dikembangkan menggunakan arsitektur MVC dan mengimplementasikan JWT sebagai authenticationnya.
project ini bertujuan untuk membuat aplikasi sederhana tanpa perlu membuat authenticationnya dari awal.

started pack ini secara default sudah mengimplementasikan :
 1. Boostrap 5.3.2 sebagai framework css
 2. "nyholm/psr7" untuk mengelola dependency injectionnya menggunakan container
 3. "psr-4" started pack ini sudah otomatis menggunakan autoload 
 4. PHP unit untuk membuat uni test
 5. Monolog untuk mengelola logging

Cara install 

composer install
buat database anda 
sesuaikan config database nya pada directory config/database.php
import database.sql
cd public 
jalankan php -S localhost:8000
aplikasi akan berjalan pada http://localhost:8000


Preview aplikasi

Register Page
![image](https://github.com/user-attachments/assets/742d46a3-96fd-4cf0-93d8-09e05df14806)

Login Page
![image](https://github.com/user-attachments/assets/e6170d3b-0910-4c5b-a532-e320693dc6b0)

Home Page

