Ini buat tugas akhir untuk pak khusairi!

Anggota Kelompok 4:
Muhammad Ridho Septiansyah
M. Arofan Nurhadi
Taufik Hidayat
Gregoreous Wendy Wijaya
Cindy Aulia Rakhma
Aulia Qisti Arini


Tugas ini menggunakan laravel 10, jadi clonelah dengan cara yang sesuai. Untuk yang belum paham cara ngeclone sebuah folder laravel, ada tata cara singkat dibagian "Cara nge clone" dibawah ini.



Cara ngecommit file kita:
1. git add .
2. git commit -m "(Ini komentar kita tentang apa yang ditambahkan, jadi bebas), contoh git commit -m "Nambah file blablabla".
3. Setelah dicommit, maka lanjut ke cara mengirim ke file github, liat step dibawah.


Cara mengirim file kita ke github:
1. git fetch
2. Kita liat dulu apakah ada file yang ditambahkan, caranya git status, jika ada bacaan (use "git pull" to update your local branch) maka git pull. Jika tidak ada, lanjut ke step ke 3.
3. Setelah kita ngecommit file yang sudah kita kerjakan (Liat step cara ngecommit), maka ketik git push.



Cara nge clone:
1. Clone repo ini dahulu
(USAHAKAN SUDAH DIDALAM FOLER WEB DENGAN CARA cd web)
2. Ketik composer install
3. Ketik cp .env.example .env
4. Ketik php artisan key:generate
5. Buka XAMPP PHPMYADMIN, bikin database "perpus"
6. Di file .env, ubah DB_DATABASE =  perpus
5. Ketik php artisan migrate
6. Buka dua terminal, terminal pertama ketikkan npm run dev
7. Terminal kedua ketik php artisan serve


Tugas Masing :
Cindy & Aulia =
- Design Menu Login / Register
- ?

Taufik & Arofan = 
- Mengecek dan Membenarkan Database
- ?

Ridho & Wendy =
- Membenarkan semua bagian website
- Problem Solving