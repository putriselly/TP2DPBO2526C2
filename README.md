1. **PENJELASAN DIAGRAM & CLASS**
   
   <img width="682" height="112" alt="diagram inheritance" src="https://github.com/user-attachments/assets/5301726d-0215-4f28-a838-9961e2e78cf2" />

   Pada diagram di atas terdapat tiga class yaitu, kendaraan, mobil dan porche. ketiga class tersebut saling terhubung sebagai inheritance multilevel. class kendaraan yang memiliki atribut sendiri nomor kendaraan, merk dan tahun rilis, memiliki inheritance atau anak dengan class mobil, kenapa, karena mobil adalah kendaraan dan semua atribut pada kendaraan dapat di gunakan oleh mobil, dan mobil punya atributnya sendiri yaitu jumlah pintu, kapasitas penumpang, kecepatan maksimum. begitupun dengan class mobil memiliki inheritance dengan class porsche kenapa, karena porsche adalah mobil, dan semua atribut mobil dapat di pakai untuk porsche.

2. **PENJELASAN CODE (UNTUK SEMUA BAHASA)**
   - **python c++ java**

     Program ini menerapkan dengan menggunakan inheritance multilevel, yaitu Kendaraan sebagai class induk, kemudian Mobil yang mewarisi atribut dan method dari Kendaraan, dan Porsche yang mewarisi Mobil. Setiap class memiliki atribut yang dibuat bersifat private sehingga akses terhadap data dilakukan melalui getter dan setter. Constructor digunakan untuk menginisialisasi data ketika object dibuat, sedangkan super atau mekanisme pemanggilan constructor parent digunakan agar atribut dari class induk tetap dapat diinisialisasi oleh class turunan. Program membuat lima object Porsche sebagai data awal, kemudian seluruh object tersebut disimpan dalam sebuah struktur data dan ditampilkan melalui perulangan. Program juga menyediakan proses penambahan data baru dengan menerima input pengguna, membuat object Porsche berdasarkan input tersebut, lalu memasukkannya ke dalam kumpulan data yang sudah ada.
   - **php**

     Program ini dengan class Kendaraan sebagai class induk, Mobil sebagai class turunan, dan Porsche sebagai turunan dari Mobil. Setiap class memiliki atribut private serta getter dan setter untuk mengakses dan mengubah data. Program membuat lima object Porsche sebagai data awal dan menyimpannya dalam array. Selain proses OOP, program PHP ini juga menghubungkan object dengan halaman HTML melalui form input. Ketika form dikirim menggunakan metode POST, data dari setiap input diambil menggunakan $_POST, kemudian digunakan untuk membuat object Porsche baru dan ditambahkan ke dalam array. Selanjutnya, data Porsche ditampilkan dalam bentuk tabel HTML menggunakan foreach dan getter dari object untuk mengambil setiap atributnya.

3. **DOKUMENTASI**
   - **python**

     <img width="760" height="376" alt="python" src="https://github.com/user-attachments/assets/8ff8838c-3293-451f-a3f0-2bcebc008fc5" />

     **data yang di input**
      - Nomor kendaraan: D 2468 KL
      - Merk: Porsche
      - Tahun rilis: 2020
      - Jumlah pintu: 2
      - Kapasitas penumpang: 2
      - Kecepatan maksimum: 290
      - Warna: Kuning
      - Jenis: 718 Boxster
      - Harga: 2100000000

   - **c++**
  
     <img width="769" height="401" alt="c++" src="https://github.com/user-attachments/assets/e590ca19-59b0-4d83-af5a-c4338171cdf8" />

     **data yang di input**
        - Nomor kendaraan: D 1357 MN
        - Merk: Porsche
        - Tahun rilis: 2025
        - Jumlah pintu: 4
        - Kapasitas penumpang: 5
        - Kecepatan maksimum: 270
        - Warna: Hijau
        - Jenis: Taycan
        - Harga: 3200000000


   - **java**

     <img width="764" height="400" alt="java" src="https://github.com/user-attachments/assets/2264a1e4-a6fd-4fc1-9d75-83fe8f15c7d4" />

     **data yang di input**
        - Nomor kendaraan: D 8642 PQ
        - Merk: Porsche
        - Tahun rilis: 2019
        - Jumlah pintu: 4
        - Kapasitas penumpang: 5
        - Kecepatan maksimum: 240
        - Warna: Silver
        - Jenis: Panamera
        - Harga: 1900000000


   - **php**

     <img width="496" height="335" alt="php_tambah data" src="https://github.com/user-attachments/assets/5673a2f2-74ed-4fd7-bf05-3b2a7b9ac34d" />

     <img width="626" height="247" alt="php_tabel data" src="https://github.com/user-attachments/assets/bc0c3eca-51f2-49ab-930f-cfaebc5952d1" />

     **data yang di input**
        - Nomor Kendaraan: D 9753 QR
        - Merk: Porsche
        - Tahun Rilis: 2022
        - Jumlah Pintu: 2
        - Kapasitas Penumpang: 2
        - Kecepatan Maksimum: 310
        - Warna: Oranye
        - Jenis: 911 Turbo S
        - Harga: 3500000000






