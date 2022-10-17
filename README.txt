## Langkah-langkah memasang projek "Mini Project Afnan":

-   Buka aplikasi XAMPP Control Panel, start module Apache dan MySQL,
-   Buka localhost di Browser, ketik localhost dan pilih PHPMyAdmin,
-   Buat Database baru dengan nama: db_project_muzayyin,
-   Pilih database yang baru dibuat tersebut, import database melalui tab Impor,
-   Di tab Import klik choose file, cari db_project_muzayyin.sql dari folder mini-project-afnan, kemudian impor
-   Selanjutnya, buka folder mini-project-afnan dengan Visual Studio Code atau Sublime Text,
-   Buka terminal, ketikkan command "composer update" (tanpa tanda kutip),
-   Buat file dengan nama ".env" (tanpa tanda kutip) di folder paling luar mini-project-afnan,
-   Isi file .env dengan men-copy isi yang ada di file ".env.example" (tanpa tanda kutip), lalu simpan,
-   Paste isinya di file ".env", dan cari DB_DATABASE=Laravel kemudian ganti dengan DB_DATABASE=db_project_muzayyin,
-   Setelah itu, buka terminal ketikkan command "php artisan key:generate" tanpa tanda kutip,
-   Buka Terminal, ketikkan perintah "php artisan migrate" (tanpa tanda kutip),
-   Jika sudah, ketikkan perintah "php artisan db:seed --class=RunThisSeeder" (tanpa tanda kutip),
-   Jika sudah, Run project dengan mengetikkan perintah "php artisan serve" (tanpa tanda kutip),
-   Maka akan muncul: Server Running On [http://127.0.0.1:8000]. buka link tersebut di browser
