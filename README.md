Cara cloning data lewat Git:
1. Buka terminal dengan VSCode / GIT BASH
2. Pergi ke direktori "C:/xampp/htdocs" ( lewati tahap ini apabila sudah menggunakan GIT BASH)
3. Konfigurasi Git dengan command dibawah:
git config --global user.name "Username Anda"
git config --global user.email "Email Anda"
CATATAN: Konfigurasi ini hanya dilakukan sekali saja, jika sudah dikonfigurasi, lewati tahap yang ini.
4. Lalu tarik data dari Git Pustaka dengan command berikut:
git clone https://gitlab.com/aghyksa/pustaka.git 

Cara push/pull data lewat Git:
1. Buka terminal dengan VSCode
2. Pergi ke direktori folder git yang sudah kita clone diatas
3. Gunakan urutan command dibawah ini:
git add .
git commit -m 'Komentar Anda'
git pull
git push

Cara Mengetahui apa yang sedang di update pencet dibawah ini
[Click here](https://gitlab.com/aghyksa/pustaka/-/commits/main)