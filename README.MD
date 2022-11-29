
### Repository ini dibuat beradasarkan tugas UAS project Web Programming 2
## Cara cloning data lewat Git:
- Buka terminal dengan VSCode / GIT BASH
- Pergi ke direktori "C:/xampp/htdocs" ( lewati tahap ini apabila sudah menggunakan **GIT BASH** atau **Open Terminal**
- Konfigurasi Git dengan command dibawah:
```
git config --global user.name "Username Anda"
```

```
git config --global user.email "Email Anda"
```
CATATAN: *Konfigurasi ini hanya dilakukan sekali, jika sudah dikonfigurasi, lewati tahap yang ini.*
- Lalu tarik data dari Git Pustaka dengan command berikut:
```
git clone https://gitlab.com/aghyksa/pustaka-booking.git
```

## Cara push/pull data lewat Git:
 - Buka terminal dengan VSCode
 - Pergi ke direktori folder git yang sudah kita clone diatas
 - Gunakan urutan command dibawah ini secara **Ber-Urutan**.
```
git add .
```
```
git commit -m 'Komentar Anda'
```
```
git pull
```
```
git push
```
## Cara Import SQL DB:
 - Buat Database bernama `latihan_ci`
 **Options Kedua**
 - Buka file yang bernama `latihan_ci.sql` di root folder `/projectwp2`
 - Copy isi code dari `latihan_ci.sql` dan paste kedalem query database yang bernama `latihan_ci`

### Regards, Lyon
