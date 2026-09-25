<?php
class Kendaraan { // Class induk untuk kendaraan
    private $nomorKendaraan; // Menyimpan nomor kendaraan
    private $merk; // Menyimpan merk kendaraan
    private $tahunRilis; // Menyimpan tahun rilis
    public function __construct($nomorKendaraan, $merk, $tahunRilis) { // Constructor Kendaraan
        $this->nomorKendaraan = $nomorKendaraan; // Mengisi atribut nomor kendaraan
        $this->merk = $merk; // Mengisi atribut merk
        $this->tahunRilis = $tahunRilis; // Mengisi atribut tahun rilis
    }
    public function getNomorKendaraan() { // Getter untuk mengambil nomor kendaraan
        return $this->nomorKendaraan; // Mengembalikan nomor kendaraan
    }
    public function getMerk() { // Getter untuk mengambil merk
        return $this->merk; // Mengembalikan merk kendaraan
    }
    public function getTahunRilis() { // Getter untuk mengambil tahun rilis
        return $this->tahunRilis; // Mengembalikan tahun rilis
    }
    public function setNomorKendaraan($nomor) { // Setter untuk mengubah nomor kendaraan
        $this->nomorKendaraan = $nomor; // Mengubah nomor kendaraan
    }
    public function setMerk($merk) { // Setter untuk mengubah merk
        $this->merk = $merk; // Mengubah merk kendaraan
    }
    public function setTahunRilis($tahun) { // Setter untuk mengubah tahun rilis
        $this->tahunRilis = $tahun; // Mengubah tahun rilis
    }
}
class Mobil extends Kendaraan { // Class Mobil mewarisi class Kendaraan
    private $jumlahPintu; // Menyimpan jumlah pintu
    private $kapasitasPenumpang; // Menyimpan kapasitas penumpang
    private $kecepatanMaksimum; // Menyimpan kecepatan maksimum
    public function __construct( // Constructor Mobil
        $nomorKendaraan,
        $merk,
        $tahunRilis,
        $jumlahPintu,
        $kapasitasPenumpang,
        $kecepatanMaksimum
    ) {
        parent::__construct( // Memanggil constructor Kendaraan
            $nomorKendaraan,
            $merk,
            $tahunRilis
        );
        $this->jumlahPintu = $jumlahPintu; // Mengisi jumlah pintu
        $this->kapasitasPenumpang = $kapasitasPenumpang; // Mengisi kapasitas penumpang
        $this->kecepatanMaksimum = $kecepatanMaksimum; // Mengisi kecepatan maksimum
    }
    public function getJumlahPintu() { // Getter untuk mengambil jumlah pintu
        return $this->jumlahPintu; // Mengembalikan jumlah pintu
    }
    public function getKapasitasPenumpang() { // Getter untuk mengambil kapasitas penumpang
        return $this->kapasitasPenumpang; // Mengembalikan kapasitas penumpang
    }
    public function getKecepatanMaksimum() { // Getter untuk mengambil kecepatan maksimum
        return $this->kecepatanMaksimum; // Mengembalikan kecepatan maksimum
    }
    public function setJumlahPintu($jumlah) { // Setter untuk mengubah jumlah pintu
        $this->jumlahPintu = $jumlah; // Mengubah jumlah pintu
    }
    public function setKapasitasPenumpang($kapasitas) { // Setter untuk mengubah kapasitas penumpang
        $this->kapasitasPenumpang = $kapasitas; // Mengubah kapasitas penumpang
    }
    public function setKecepatanMaksimum($kecepatan) { // Setter untuk mengubah kecepatan maksimum
        $this->kecepatanMaksimum = $kecepatan; // Mengubah kecepatan maksimum
    }
}
class Porsche extends Mobil { // Class Porsche mewarisi class Mobil
    private $warna; // Menyimpan warna Porsche
    private $jenis; // Menyimpan jenis Porsche
    private $harga; // Menyimpan harga Porsche
    public function __construct( // Constructor Porsche
        $nomorKendaraan,
        $merk,
        $tahunRilis,
        $jumlahPintu,
        $kapasitasPenumpang,
        $kecepatanMaksimum,
        $warna,
        $jenis,
        $harga
    ) {
        parent::__construct( // Memanggil constructor Mobil
            $nomorKendaraan,
            $merk,
            $tahunRilis,
            $jumlahPintu,
            $kapasitasPenumpang,
            $kecepatanMaksimum
        );
        $this->warna = $warna; // Mengisi warna Porsche
        $this->jenis = $jenis; // Mengisi jenis Porsche
        $this->harga = $harga; // Mengisi harga Porsche
    }
    public function getWarna() { // Getter untuk mengambil warna
        return $this->warna; // Mengembalikan warna Porsche
    }
    public function getJenis() { // Getter untuk mengambil jenis
        return $this->jenis; // Mengembalikan jenis Porsche
    }
    public function getHarga() { // Getter untuk mengambil harga
        return $this->harga; // Mengembalikan harga Porsche
    }
    public function setWarna($warna) { // Setter untuk mengubah warna
        $this->warna = $warna; // Mengubah warna Porsche
    }
    public function setJenis($jenis) { // Setter untuk mengubah jenis
        $this->jenis = $jenis; // Mengubah jenis Porsche
    }
    public function setHarga($harga) { // Setter untuk mengubah harga
        $this->harga = $harga; // Mengubah harga Porsche
    }
}
// DATA AWAL // Menandai bagian data Porsche awal
$porsche1 = new Porsche( // Membuat object Porsche pertama
    "D 1234 AB", // Nomor kendaraan
    "Porsche", // Merk
    2022, // Tahun rilis
    2, // Jumlah pintu
    2, // Kapasitas penumpang
    280, // Kecepatan maksimum
    "Merah", // Warna
    "911", // Jenis
    2500000000 // Harga
);
$porsche2 = new Porsche( // Membuat object Porsche kedua
    "D 5678 CD", // Nomor kendaraan
    "Porsche", // Merk
    2023, // Tahun rilis
    2, // Jumlah pintu
    2, // Kapasitas penumpang
    300, // Kecepatan maksimum
    "Hitam", // Warna
    "718 Cayman", // Jenis
    2200000000 // Harga
);
$porsche3 = new Porsche( // Membuat object Porsche ketiga
    "D 9012 EF", // Nomor kendaraan
    "Porsche", // Merk
    2021, // Tahun rilis
    4, // Jumlah pintu
    4, // Kapasitas penumpang
    250, // Kecepatan maksimum
    "Putih", // Warna
    "Panamera", // Jenis
    2800000000 // Harga
);
$porsche4 = new Porsche( // Membuat object Porsche keempat
    "D 3456 GH", // Nomor kendaraan
    "Porsche", // Merk
    2024, // Tahun rilis
    4, // Jumlah pintu
    5, // Kapasitas penumpang
    260, // Kecepatan maksimum
    "Biru", // Warna
    "Macan", // Jenis
    1800000000 // Harga
);
$porsche5 = new Porsche( // Membuat object Porsche kelima
    "D 7890 IJ", // Nomor kendaraan
    "Porsche", // Merk
    2023, // Tahun rilis
    4, // Jumlah pintu
    5, // Kapasitas penumpang
    275, // Kecepatan maksimum
    "Abu-abu", // Warna
    "Cayenne", // Jenis
    2300000000 // Harga
);
$dataPorsche = [ // Membuat array untuk menyimpan semua object Porsche
    $porsche1, // Memasukkan Porsche pertama
    $porsche2, // Memasukkan Porsche kedua
    $porsche3, // Memasukkan Porsche ketiga
    $porsche4, // Memasukkan Porsche keempat
    $porsche5 // Memasukkan Porsche kelima
];
// TAMBAH DATA // Menandai bagian untuk menambahkan data baru
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Mengecek apakah form dikirim menggunakan POST
    $nomorKendaraan = $_POST["nomorKendaraan"]; // Mengambil nomor kendaraan dari form
    $merk = $_POST["merk"]; // Mengambil merk dari form
    $tahunRilis = $_POST["tahunRilis"]; // Mengambil tahun rilis dari form
    $jumlahPintu = $_POST["jumlahPintu"]; // Mengambil jumlah pintu dari form
    $kapasitasPenumpang = $_POST["kapasitasPenumpang"]; // Mengambil kapasitas penumpang dari form
    $kecepatanMaksimum = $_POST["kecepatanMaksimum"]; // Mengambil kecepatan maksimum dari form
    $warna = $_POST["warna"]; // Mengambil warna dari form
    $jenis = $_POST["jenis"]; // Mengambil jenis dari form
    $harga = $_POST["harga"]; // Mengambil harga dari form
    $porscheBaru = new Porsche( // Membuat object Porsche baru dari data form
        $nomorKendaraan, // Mengirim nomor kendaraan
        $merk, // Mengirim merk
        $tahunRilis, // Mengirim tahun rilis
        $jumlahPintu, // Mengirim jumlah pintu
        $kapasitasPenumpang, // Mengirim kapasitas penumpang
        $kecepatanMaksimum, // Mengirim kecepatan maksimum
        $warna, // Mengirim warna
        $jenis, // Mengirim jenis
        $harga // Mengirim harga
    );
    $dataPorsche[] = $porscheBaru; // Menambahkan object Porsche baru ke array
    echo "<p>Data Porsche berhasil ditambahkan!</p>"; // Menampilkan pesan bahwa data berhasil ditambahkan
}
?>
<!DOCTYPE html> <!-- Menentukan bahwa dokumen menggunakan HTML5 -->
<html> <!-- Membuka dokumen HTML -->
<head> <!-- Membuka bagian head -->
    <title>Data Porsche</title> <!-- Menentukan judul halaman -->
</head> <!-- Menutup bagian head -->
<body> <!-- Membuka bagian body -->
<h2>Tambah Data Porsche</h2> <!-- Menampilkan judul form -->
<form method="POST"> <!-- Membuat form dengan metode POST -->
    Nomor Kendaraan: <!-- Label nomor kendaraan -->
    <input type="text" name="nomorKendaraan"> <!-- Input untuk nomor kendaraan -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Merk: <!-- Label merk -->
    <input type="text" name="merk"> <!-- Input untuk merk -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Tahun Rilis: <!-- Label tahun rilis -->
    <input type="number" name="tahunRilis"> <!-- Input untuk tahun rilis -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Jumlah Pintu: <!-- Label jumlah pintu -->
    <input type="number" name="jumlahPintu"> <!-- Input untuk jumlah pintu -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Kapasitas Penumpang: <!-- Label kapasitas penumpang -->
    <input type="number" name="kapasitasPenumpang"> <!-- Input untuk kapasitas penumpang -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Kecepatan Maksimum: <!-- Label kecepatan maksimum -->
    <input type="number" name="kecepatanMaksimum"> <!-- Input untuk kecepatan maksimum -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Warna: <!-- Label warna -->
    <input type="text" name="warna"> <!-- Input untuk warna -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Jenis: <!-- Label jenis -->
    <input type="text" name="jenis"> <!-- Input untuk jenis Porsche -->
    <br><br> <!-- Membuat jarak/baris baru -->
    Harga: <!-- Label harga -->
    <input type="number" name="harga"> <!-- Input untuk harga -->
    <br><br> <!-- Membuat jarak/baris baru -->
    <button type="submit">Tambah Data</button> <!-- Tombol untuk mengirim data -->
</form> <!-- Menutup form -->
<h2>Data Porsche</h2> <!-- Menampilkan judul tabel -->
<table border="1" cellpadding="8"> <!-- Membuat tabel dengan border dan jarak isi -->
    <tr> <!-- Membuka baris header tabel -->
        <th>No</th> <!-- Kolom nomor -->
        <th>Nomor</th> <!-- Kolom nomor kendaraan -->
        <th>Merk</th> <!-- Kolom merk -->
        <th>Tahun</th> <!-- Kolom tahun -->
        <th>Pintu</th> <!-- Kolom jumlah pintu -->
        <th>Kapasitas</th> <!-- Kolom kapasitas penumpang -->
        <th>Kecepatan</th> <!-- Kolom kecepatan maksimum -->
        <th>Warna</th> <!-- Kolom warna -->
        <th>Jenis</th> <!-- Kolom jenis -->
        <th>Harga</th> <!-- Kolom harga -->
    </tr> <!-- Menutup baris header -->
    <?php foreach ($dataPorsche as $i => $porsche) { ?> <!-- Mengulang setiap object Porsche dalam array -->
    <tr> <!-- Membuka baris data -->
        <td><?= $i + 1 ?></td> <!-- Menampilkan nomor urut -->
        <td><?= $porsche->getNomorKendaraan() ?></td> <!-- Menampilkan nomor kendaraan melalui getter -->
        <td><?= $porsche->getMerk() ?></td> <!-- Menampilkan merk melalui getter -->
        <td><?= $porsche->getTahunRilis() ?></td> <!-- Menampilkan tahun rilis melalui getter -->
        <td><?= $porsche->getJumlahPintu() ?></td> <!-- Menampilkan jumlah pintu melalui getter -->
        <td><?= $porsche->getKapasitasPenumpang() ?></td> <!-- Menampilkan kapasitas penumpang melalui getter -->
        <td><?= $porsche->getKecepatanMaksimum() ?></td> <!-- Menampilkan kecepatan maksimum melalui getter -->
        <td><?= $porsche->getWarna() ?></td> <!-- Menampilkan warna melalui getter -->
        <td><?= $porsche->getJenis() ?></td> <!-- Menampilkan jenis melalui getter -->
        <td><?= $porsche->getHarga() ?></td> <!-- Menampilkan harga melalui getter -->
    </tr> <!-- Menutup baris data -->
    <?php } ?> <!-- Mengakhiri perulangan foreach -->
</table> <!-- Menutup tabel -->
</body> <!-- Menutup body -->
</html> <!-- Menutup dokumen HTML -->