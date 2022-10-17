## Langkah-langkah memasang projek "Mini Project Afnan":

![mini-project-afnan](./banner.png)

### Github:

-   Download Project ini dengan menekan tombol Code, lalu pilih Download ZIP
-   Jika Download telah selesai Ekstrak ZIP

### Requirement(s):

-   XAMPP Control Panel
-   PHP 8

### After Extract:

-   Buka aplikasi XAMPP Control Panel, start module Apache dan MySQL, <br>
![Screenshot (452)](https://user-images.githubusercontent.com/108184882/188289807-ea68a6d5-e04e-4f9b-9dd7-67faf099368e.png)
-   Buka localhost di Browser dan buka PHPMyAdmin,
-   Buat Database baru dengan nama: <b>db_project_muzayyin</b>
-   Pilih database yang baru dibuat tersebut, import database melalui tab Import,
-   Di tab Import klik "choose file", cari file <b>db_project_muzayyin.sql</b> dari folder <b>mini-project-afnan</b>, kemudian impor
-   Selanjutnya, buka folder <b>mini-project-afnan</b> dengan Visual Studio Code, Sublime Text, dll
-   Buka terminal, ketikkan command: <b>composer update</b>
-   Buat file dengan nama <b>.env</b> di folder paling luar <b>mini-project-afnan</b>,
-   Isi file <b>.env</b> dengan meng-copy isi yang ada di file <b>.env.example</b> yang ada di folder paling luar <b>mini-project-afnan</b> lalu simpan, <br>
![Screenshot (450)](https://user-images.githubusercontent.com/108184882/188289646-4335ac68-00f3-4d82-9629-9feb8dc2d1f4.png)
-   Setelah di copy, paste di file <b>.env</b> dan cari <b>DB_DATABASE=Laravel</b> kemudian di ganti dengan <b>DB_DATABASE=db_project_muzayyin</b> <br>
![Screenshot (448)](https://user-images.githubusercontent.com/108184882/188289609-2d5a226e-3ea7-4fc7-9ba3-5d19021777fe.png)
-   Setelah itu, buka terminal ketikkan command: <b>php artisan key:generate</b>
-   Selanjutnya, ketikkan perintah di terminal: <b>php artisan migrate</b>
-   Jika sudah, ketikkan perintah di terminal: <b>php artisan db:seed --class=RunThisSeeder</b>
-   Run project dengan mengetikkan perintah: <b>php artisan serve</b>
-   Maka akan muncul pesan: Server running On [http://127.0.0.1:8000]. Klik link tersebut. <br>
![Screenshot (454)](https://user-images.githubusercontent.com/108184882/188289907-663ef617-f385-447d-b8d2-59ed31ae1751.png)

