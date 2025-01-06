Selamat Datang di Repository SPRAYMAXX  
Repository ini adalah project mata kuliah PEMROGRAMAN WEB  
Project SPRAYMAXX adalah sebuah web Booking Layanan / Jasa Cat Kendaraan  

Cara menjalankan project SPRAYMAXX adalah berikut  
   Lakukan Clone dan Install pada repository  
   Catatan : install terlebih dahulu composer, web server, dmbs, laravel 11 dan php yang sesuai dengan laravel (PHP version 8.3 >>)  
   Berikut adalah perintah untuk clone dan install project  
       Arahkan direktori pada CMD anda.Contoh ( C:\laragon\www\ )  
       Lakukan perintah clone ( git clone https://github.com/danieltampubolon29/spraymaxx.git <nama folder> )  
       Masuk kedalam direktori folder Project  
       Install package laravel dengan perintag ( composer install )  
       Buat database dan Edit file ( .env.example ) menjadi ( .env )  
       Lakukan Konfigurasi Database pada file ( .env ) tersebut  
           DB_CONNECTION=mysql  
           DB_HOST=127.0.0.1  
           DB_PORT=3306  
           DB_DATABASE=nama_database  
           DB_USERNAME=username_database  
           DB_PASSWORD=password_database  
       Generate Application Key dengan perintah ( php artisan key:generate )  
       Hapus Cache Konfigurasi dengan Perintah ( php artisan config:clear )  
       Migrasikan tabel ke database Anda dengan perintah ( php artisan migrate )  
       Install npm pada terminal dengan Perintah ( npm install)
       Jalankan npm pada terminal dengan Perintah ( npm run dev)
       Jalankan server Laravel dengan perintah ( php artisan serve )  
        
