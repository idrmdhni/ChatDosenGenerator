# Chat Dosen Generator
Sebuah aplikasi web sederhana untuk membantu mahasiswa membuat pesan chat yang sopan dan terstruktur untuk dikirimkan kepada dosen.

## Deskripsi
Seringkali mahasiswa merasa bingung atau kesulitan saat akan menghubungi dosen melalui chat. Aplikasi **Chat Dosen Generator** ini bertujuan untuk mempermudah proses tersebut. Dengan memanfaatkan kecerdasan buatan dari **Google Gemini**, aplikasi ini dapat menghasilkan beberapa pilihan kalimat sapaan yang sopan dan sesuai dengan konteks yang diberikan oleh pengguna.
Pengguna cukup mengisi beberapa informasi dasar, dan aplikasi akan secara otomatis memberikan beberapa opsi pesan yang bisa langsung digunakan.

## Fitur
* **Form Input yang Mudah Digunakan**: Pengguna hanya perlu memasukkan data seperti nama, NIM, program studi, dan tujuan menghubungi dosen.
* **Didukung oleh AI**: Menggunakan **Google Gemini API** untuk menghasilkan teks yang relevan dan sopan.
* **Dua Konteks Utama**: Mendukung dua tujuan utama yang sering dibutuhkan mahasiswa:
    * **Bertanya**: Untuk mengajukan pertanyaan terkait perkuliahan atau hal akademis lainnya.
    * **Mengingatkan Jadwal Kuliah**: Untuk mengingatkan dosen mengenai jadwal perkuliahan yang akan datang.
* **Pilihan Sapaan yang Fleksibel**: Pengguna bisa memilih untuk menggunakan sapaan "Assalamualaikum" atau sapaan umum berdasarkan waktu (Selamat Pagi, Siang, Sore, Malam).
* **Hasil Instan**: Aplikasi akan langsung menampilkan beberapa opsi kalimat yang bisa langsung disalin dan digunakan.

## Teknologi yang Digunakan
* **Backend**: PHP
* **Frontend**: JavaScript
* **Framework CSS**: Bootstrap 5
* **API**: Google Generative Language API (**Gemini**)

## Cara Menggunakan
1.  Buka aplikasi web di browser.
2.  Isi semua kolom input yang ada.
3.  Klik tombol **"Hasilkan"**.
4.  Tunggu sebentar, dan aplikasi akan menampilkan beberapa pilihan kalimat.
5.  Salin kalimat yang paling sesuai dan kirimkan ke dosen Anda.

## Struktur Folder
Proyek ini menggunakan struktur yang menyerupai arsitektur MVC (Model-View-Controller) sederhana:
```
/
├── app/
│   ├── controllers/
│   │   └── ChatDosenGenerator.php
│   ├── core/
│   │   ├── App.php
│   │   ├── Const.php
│   │   └── Controller.php
│   ├── helpers/
│   │   └── env_helper.php
│   ├── models/
│   │   └── ChatDosenGenerator_model.php
│   └── views/
│       ├── ChatDosenGenerator/
│       │   └── index.php
│       └── templates/
│           ├── header.php
│           └── footer.php
├── src/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
├── .env
├── .gitignore
└── index.php
```

## Instalasi
Untuk menjalankan proyek ini di environment lokal, ikuti langkah-langkah berikut:
1.  **Clone repository ini:**
    ```bash
    git clone https://github.com/idrmdhni/ChatDosenGenerator.git
    ```
2.  **Pindah ke direktori proyek:**
    ```bash
    cd ChatDosenGenerator
    ```
3.  **Buat file `.env`:**
4.  **Isi API Key Gemini:**
    Aplikasi ini memerlukan **API Key** dari Google Gemini untuk berfungsi.
    * Dapatkan API Key Anda dari [Google AI Studio](https://aistudio.google.com/app/apikey).
    * Buka file `.env` yang telah Anda buat, lalu masukkan API Key Anda.
    ```
    API_KEY=MASUKKAN_API_KEY_GEMINI_ANDA_DISINI
    ```
5.  **Jalankan server lokal:**
    Anda bisa menggunakan server bawaan PHP untuk menjalankan aplikasi ini.
    ```bash
    php -S localhost:8000
    ```
6.  Buka `http://localhost:8000` di browser.
