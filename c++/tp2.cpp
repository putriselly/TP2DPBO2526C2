#include <iostream> // Mengimpor library untuk input dan output
#include <vector> // Mengimpor vector untuk menyimpan banyak object
#include <iomanip> // Mengimpor library untuk mengatur format tabel dengan setw
#include <string> // Mengimpor library untuk menggunakan tipe data string
using namespace std; // Agar tidak perlu menulis std:: pada setiap penggunaan library
class Kendaraan { // Class induk untuk kendaraan
private:
    string nomorKendaraan; // Menyimpan nomor kendaraan
    string merk; // Menyimpan merk kendaraan
    int tahunRilis; // Menyimpan tahun rilis
public:
    Kendaraan(string nomorKendaraan, string merk, int tahunRilis) { // Constructor Kendaraan
        this->nomorKendaraan = nomorKendaraan; // Mengisi atribut nomor kendaraan
        this->merk = merk; // Mengisi atribut merk
        this->tahunRilis = tahunRilis; // Mengisi atribut tahun rilis
    }
    string getNomorKendaraan() { // Getter untuk mengambil nomor kendaraan
        return nomorKendaraan; // Mengembalikan nomor kendaraan
    }
    string getMerk() { // Getter untuk mengambil merk
        return merk; // Mengembalikan merk kendaraan
    }
    int getTahunRilis() { // Getter untuk mengambil tahun rilis
        return tahunRilis; // Mengembalikan tahun rilis
    }
    void setNomorKendaraan(string nomor) { // Setter untuk mengubah nomor kendaraan
        nomorKendaraan = nomor; // Mengubah nomor kendaraan
    }
    void setMerk(string merk) { // Setter untuk mengubah merk kendaraan
        this->merk = merk; // Mengubah merk kendaraan
    }
    void setTahunRilis(int tahun) { // Setter untuk mengubah tahun rilis
        tahunRilis = tahun; // Mengubah tahun rilis
    }
};
class Mobil : public Kendaraan { // Class Mobil mewarisi class Kendaraan
private:
    int jumlahPintu; // Menyimpan jumlah pintu
    int kapasitasPenumpang; // Menyimpan kapasitas penumpang
    int kecepatanMaksimum; // Menyimpan kecepatan maksimum
public:
    Mobil(string nomorKendaraan, string merk, int tahunRilis, // Constructor Mobil
          int jumlahPintu, int kapasitasPenumpang, int kecepatanMaksimum)
        : Kendaraan(nomorKendaraan, merk, tahunRilis) { // Memanggil constructor Kendaraan
        this->jumlahPintu = jumlahPintu; // Mengisi jumlah pintu
        this->kapasitasPenumpang = kapasitasPenumpang; // Mengisi kapasitas penumpang
        this->kecepatanMaksimum = kecepatanMaksimum; // Mengisi kecepatan maksimum
    }
    int getJumlahPintu() { // Getter untuk mengambil jumlah pintu
        return jumlahPintu; // Mengembalikan jumlah pintu
    }
    int getKapasitasPenumpang() { // Getter untuk mengambil kapasitas penumpang
        return kapasitasPenumpang; // Mengembalikan kapasitas penumpang
    }
    int getKecepatanMaksimum() { // Getter untuk mengambil kecepatan maksimum
        return kecepatanMaksimum; // Mengembalikan kecepatan maksimum
    }
    void setJumlahPintu(int jumlah) { // Setter untuk mengubah jumlah pintu
        jumlahPintu = jumlah; // Mengubah jumlah pintu
    }
    void setKapasitasPenumpang(int kapasitas) { // Setter untuk mengubah kapasitas penumpang
        kapasitasPenumpang = kapasitas; // Mengubah kapasitas penumpang
    }
    void setKecepatanMaksimum(int kecepatan) { // Setter untuk mengubah kecepatan maksimum
        kecepatanMaksimum = kecepatan; // Mengubah kecepatan maksimum
    }
};
class Porsche : public Mobil { // Class Porsche mewarisi class Mobil
private:
    string warna; // Menyimpan warna Porsche
    string jenis; // Menyimpan jenis Porsche
    long long harga; // Menyimpan harga Porsche
public:
    Porsche(string nomorKendaraan, string merk, int tahunRilis, // Constructor Porsche
            int jumlahPintu, int kapasitasPenumpang, int kecepatanMaksimum,
            string warna, string jenis, long long harga)
        : Mobil(nomorKendaraan, merk, tahunRilis, // Memanggil constructor Mobil
                jumlahPintu, kapasitasPenumpang, kecepatanMaksimum) {
        this->warna = warna; // Mengisi warna Porsche
        this->jenis = jenis; // Mengisi jenis Porsche
        this->harga = harga; // Mengisi harga Porsche
    }
    string getWarna() { // Getter untuk mengambil warna
        return warna; // Mengembalikan warna Porsche
    }
    string getJenis() { // Getter untuk mengambil jenis
        return jenis; // Mengembalikan jenis Porsche
    }
    long long getHarga() { // Getter untuk mengambil harga
        return harga; // Mengembalikan harga Porsche
    }
    void setWarna(string warna) { // Setter untuk mengubah warna
        this->warna = warna; // Mengubah warna Porsche
    }
    void setJenis(string jenis) { // Setter untuk mengubah jenis
        this->jenis = jenis; // Mengubah jenis Porsche
    }
    void setHarga(long long harga) { // Setter untuk mengubah harga
        this->harga = harga; // Mengubah harga Porsche
    }
};
int main() { // Fungsi utama yang pertama kali dijalankan
    Porsche porsche1( // Membuat object Porsche pertama
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
    Porsche porsche2( // Membuat object Porsche kedua
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
    Porsche porsche3( // Membuat object Porsche ketiga
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
    Porsche porsche4( // Membuat object Porsche keempat
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
    Porsche porsche5( // Membuat object Porsche kelima
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
    vector<Porsche> dataPorsche = { // Membuat vector untuk menyimpan object Porsche
        porsche1, // Memasukkan Porsche pertama
        porsche2, // Memasukkan Porsche kedua
        porsche3, // Memasukkan Porsche ketiga
        porsche4, // Memasukkan Porsche keempat
        porsche5 // Memasukkan Porsche kelima
    };
    cout << "TAMBAH DATA PORSCHE" << endl; // Menampilkan judul input data
    string nomorKendaraan; // Variabel untuk menyimpan nomor kendaraan
    string merk; // Variabel untuk menyimpan merk
    int tahunRilis; // Variabel untuk menyimpan tahun rilis
    int jumlahPintu; // Variabel untuk menyimpan jumlah pintu
    int kapasitasPenumpang; // Variabel untuk menyimpan kapasitas penumpang
    int kecepatanMaksimum; // Variabel untuk menyimpan kecepatan maksimum
    string warna; // Variabel untuk menyimpan warna
    string jenis; // Variabel untuk menyimpan jenis
    long long harga; // Variabel untuk menyimpan harga
    cout << "Nomor kendaraan: "; // Meminta nomor kendaraan
    getline(cin, nomorKendaraan); // Membaca nomor kendaraan
    cout << "Merk: "; // Meminta merk
    getline(cin, merk); // Membaca merk
    cout << "Tahun rilis: "; // Meminta tahun rilis
    cin >> tahunRilis; // Membaca tahun rilis
    cout << "Jumlah pintu: "; // Meminta jumlah pintu
    cin >> jumlahPintu; // Membaca jumlah pintu
    cout << "Kapasitas penumpang: "; // Meminta kapasitas penumpang
    cin >> kapasitasPenumpang; // Membaca kapasitas penumpang
    cout << "Kecepatan maksimum: "; // Meminta kecepatan maksimum
    cin >> kecepatanMaksimum; // Membaca kecepatan maksimum
    cin.ignore(); // Menghapus karakter enter yang tersisa sebelum getline
    cout << "Warna: "; // Meminta warna Porsche
    getline(cin, warna); // Membaca warna Porsche
    cout << "Jenis: "; // Meminta jenis Porsche
    getline(cin, jenis); // Membaca jenis Porsche
    cout << "Harga: "; // Meminta harga Porsche
    cin >> harga; // Membaca harga
    Porsche porscheBaru( // Membuat object Porsche baru dari input user
        nomorKendaraan, // Mengirim nomor kendaraan
        merk, // Mengirim merk
        tahunRilis, // Mengirim tahun rilis
        jumlahPintu, // Mengirim jumlah pintu
        kapasitasPenumpang, // Mengirim kapasitas penumpang
        kecepatanMaksimum, // Mengirim kecepatan maksimum
        warna, // Mengirim warna
        jenis, // Mengirim jenis
        harga // Mengirim harga
    );
    dataPorsche.push_back(porscheBaru); // Menambahkan object Porsche baru ke vector
    cout << "\nData Porsche berhasil ditambahkan!" << endl; // Menampilkan pesan berhasil
    // TABEL // Menandai bagian kode untuk menampilkan tabel
    cout << "\n"; // Memberikan satu baris kosong sebelum tabel
    cout << "+----+------------+---------+-------+-------+-----------+----------+---------+-------------+------------+" << endl; // Menampilkan garis atas tabel
    cout << "| "
         << left << setw(2) << "No" << " | " // Menampilkan kolom nomor
         << left << setw(10) << "Nomor" << " | " // Menampilkan kolom nomor kendaraan
         << left << setw(7) << "Merk" << " | " // Menampilkan kolom merk
         << left << setw(5) << "Tahun" << " | " // Menampilkan kolom tahun
         << left << setw(5) << "Pintu" << " | " // Menampilkan kolom pintu
         << left << setw(9) << "Kapasitas" << " | " // Menampilkan kolom kapasitas
         << left << setw(8) << "Kecepatan" << " | " // Menampilkan kolom kecepatan
         << left << setw(7) << "Warna" << " | " // Menampilkan kolom warna
         << left << setw(11) << "Jenis" << " | " // Menampilkan kolom jenis
         << left << setw(10) << "Harga" << " |" // Menampilkan kolom harga
         << endl; // Pindah ke baris berikutnya
    cout << "+----+------------+---------+-------+-------+-----------+----------+---------+-------------+------------+" << endl; // Menampilkan garis di bawah header
    for (int i = 0; i < dataPorsche.size(); i++) { // Mengulang seluruh data Porsche dalam vector
        Porsche &porsche = dataPorsche[i]; // Mengambil object Porsche berdasarkan index dan membuat reference
        cout << "| "
             << left << setw(2) << i + 1 << " | " // Menampilkan nomor urut
             << left << setw(10) << porsche.getNomorKendaraan() << " | " // Mengambil nomor kendaraan melalui getter
             << left << setw(7) << porsche.getMerk() << " | " // Mengambil merk melalui getter
             << left << setw(5) << porsche.getTahunRilis() << " | " // Mengambil tahun rilis melalui getter
             << left << setw(5) << porsche.getJumlahPintu() << " | " // Mengambil jumlah pintu melalui getter
             << left << setw(9) << porsche.getKapasitasPenumpang() << " | " // Mengambil kapasitas penumpang melalui getter
             << left << setw(8) << porsche.getKecepatanMaksimum() << " | " // Mengambil kecepatan maksimum melalui getter
             << left << setw(7) << porsche.getWarna() << " | " // Mengambil warna melalui getter
             << left << setw(11) << porsche.getJenis() << " | " // Mengambil jenis melalui getter
             << left << setw(10) << porsche.getHarga() << " |" // Mengambil harga melalui getter
             << endl; // Pindah ke baris berikutnya
        cout << "+----+------------+---------+-------+-------+-----------+----------+---------+-------------+------------+" << endl; // Menampilkan garis setelah setiap data
    }
    return 0; // Mengakhiri program dengan status berhasil
}