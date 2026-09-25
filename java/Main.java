import java.util.ArrayList; // Mengimpor ArrayList untuk menyimpan banyak object
import java.util.Scanner; // Mengimpor Scanner untuk menerima input dari user
class Kendaraan { // Class induk untuk kendaraan
    private String nomorKendaraan; // Menyimpan nomor kendaraan
    private String merk; // Menyimpan merk kendaraan
    private int tahunRilis; // Menyimpan tahun rilis
    public Kendaraan(String nomorKendaraan, String merk, int tahunRilis) { // Constructor Kendaraan
        this.nomorKendaraan = nomorKendaraan; // Mengisi atribut nomor kendaraan
        this.merk = merk; // Mengisi atribut merk
        this.tahunRilis = tahunRilis; // Mengisi atribut tahun rilis
    }
    public String getNomorKendaraan() { // Getter untuk mengambil nomor kendaraan
        return nomorKendaraan; // Mengembalikan nomor kendaraan
    }
    public String getMerk() { // Getter untuk mengambil merk
        return merk; // Mengembalikan merk kendaraan
    }
    public int getTahunRilis() { // Getter untuk mengambil tahun rilis
        return tahunRilis; // Mengembalikan tahun rilis
    }
    public void setNomorKendaraan(String nomor) { // Setter untuk mengubah nomor kendaraan
        this.nomorKendaraan = nomor; // Mengubah nomor kendaraan
    }
    public void setMerk(String merk) { // Setter untuk mengubah merk
        this.merk = merk; // Mengubah merk kendaraan
    }
    public void setTahunRilis(int tahun) { // Setter untuk mengubah tahun rilis
        this.tahunRilis = tahun; // Mengubah tahun rilis
    }
}
class Mobil extends Kendaraan { // Class Mobil mewarisi class Kendaraan
    private int jumlahPintu; // Menyimpan jumlah pintu
    private int kapasitasPenumpang; // Menyimpan kapasitas penumpang
    private int kecepatanMaksimum; // Menyimpan kecepatan maksimum
    public Mobil(String nomorKendaraan, String merk, int tahunRilis, // Constructor Mobil
                 int jumlahPintu, int kapasitasPenumpang,
                 int kecepatanMaksimum) {
        super(nomorKendaraan, merk, tahunRilis); // Memanggil constructor Kendaraan
        this.jumlahPintu = jumlahPintu; // Mengisi jumlah pintu
        this.kapasitasPenumpang = kapasitasPenumpang; // Mengisi kapasitas penumpang
        this.kecepatanMaksimum = kecepatanMaksimum; // Mengisi kecepatan maksimum
    }
    public int getJumlahPintu() { // Getter untuk mengambil jumlah pintu
        return jumlahPintu; // Mengembalikan jumlah pintu
    }
    public int getKapasitasPenumpang() { // Getter untuk mengambil kapasitas penumpang
        return kapasitasPenumpang; // Mengembalikan kapasitas penumpang
    }
    public int getKecepatanMaksimum() { // Getter untuk mengambil kecepatan maksimum
        return kecepatanMaksimum; // Mengembalikan kecepatan maksimum
    }
    public void setJumlahPintu(int jumlah) { // Setter untuk mengubah jumlah pintu
        this.jumlahPintu = jumlah; // Mengubah jumlah pintu
    }
    public void setKapasitasPenumpang(int kapasitas) { // Setter untuk mengubah kapasitas penumpang
        this.kapasitasPenumpang = kapasitas; // Mengubah kapasitas penumpang
    }
    public void setKecepatanMaksimum(int kecepatan) { // Setter untuk mengubah kecepatan maksimum
        this.kecepatanMaksimum = kecepatan; // Mengubah kecepatan maksimum
    }
}
class Porsche extends Mobil { // Class Porsche mewarisi class Mobil
    private String warna; // Menyimpan warna Porsche
    private String jenis; // Menyimpan jenis Porsche
    private long harga; // Menyimpan harga Porsche
    public Porsche(String nomorKendaraan, String merk, int tahunRilis, // Constructor Porsche
                   int jumlahPintu, int kapasitasPenumpang,
                   int kecepatanMaksimum, String warna,
                   String jenis, long harga) {
        super(nomorKendaraan, merk, tahunRilis, // Memanggil constructor Mobil
              jumlahPintu, kapasitasPenumpang, kecepatanMaksimum);
        this.warna = warna; // Mengisi warna Porsche
        this.jenis = jenis; // Mengisi jenis Porsche
        this.harga = harga; // Mengisi harga Porsche
    }
    public String getWarna() { // Getter untuk mengambil warna
        return warna; // Mengembalikan warna Porsche
    }
    public String getJenis() { // Getter untuk mengambil jenis
        return jenis; // Mengembalikan jenis Porsche
    }
    public long getHarga() { // Getter untuk mengambil harga
        return harga; // Mengembalikan harga Porsche
    }
    public void setWarna(String warna) { // Setter untuk mengubah warna
        this.warna = warna; // Mengubah warna Porsche
    }
    public void setJenis(String jenis) { // Setter untuk mengubah jenis
        this.jenis = jenis; // Mengubah jenis Porsche
    }
    public void setHarga(long harga) { // Setter untuk mengubah harga
        this.harga = harga; // Mengubah harga Porsche
    }
}
public class Main { // Class utama program
    public static void main(String[] args) { // Method utama yang pertama kali dijalankan
        Scanner input = new Scanner(System.in); // Membuat Scanner untuk menerima input user
        Porsche porsche1 = new Porsche( // Membuat object Porsche pertama
            "D 1234 AB", // Nomor kendaraan
            "Porsche", // Merk
            2022, // Tahun rilis
            2, // Jumlah pintu
            2, // Kapasitas penumpang
            280, // Kecepatan maksimum
            "Merah", // Warna
            "911", // Jenis
            2500000000L // Harga
        );
        Porsche porsche2 = new Porsche( // Membuat object Porsche kedua
            "D 5678 CD", // Nomor kendaraan
            "Porsche", // Merk
            2023, // Tahun rilis
            2, // Jumlah pintu
            2, // Kapasitas penumpang
            300, // Kecepatan maksimum
            "Hitam", // Warna
            "718 Cayman", // Jenis
            2200000000L // Harga
        );
        Porsche porsche3 = new Porsche( // Membuat object Porsche ketiga
            "D 9012 EF", // Nomor kendaraan
            "Porsche", // Merk
            2021, // Tahun rilis
            4, // Jumlah pintu
            4, // Kapasitas penumpang
            250, // Kecepatan maksimum
            "Putih", // Warna
            "Panamera", // Jenis
            2800000000L // Harga
        );
        Porsche porsche4 = new Porsche( // Membuat object Porsche keempat
            "D 3456 GH", // Nomor kendaraan
            "Porsche", // Merk
            2024, // Tahun rilis
            4, // Jumlah pintu
            5, // Kapasitas penumpang
            260, // Kecepatan maksimum
            "Biru", // Warna
            "Macan", // Jenis
            1800000000L // Harga
        );
        Porsche porsche5 = new Porsche( // Membuat object Porsche kelima
            "D 7890 IJ", // Nomor kendaraan
            "Porsche", // Merk
            2023, // Tahun rilis
            4, // Jumlah pintu
            5, // Kapasitas penumpang
            275, // Kecepatan maksimum
            "Abu-abu", // Warna
            "Cayenne", // Jenis
            2300000000L // Harga
        );
        ArrayList<Porsche> dataPorsche = new ArrayList<>(); // Membuat ArrayList untuk menyimpan object Porsche
        dataPorsche.add(porsche1); // Menambahkan Porsche pertama ke list
        dataPorsche.add(porsche2); // Menambahkan Porsche kedua ke list
        dataPorsche.add(porsche3); // Menambahkan Porsche ketiga ke list
        dataPorsche.add(porsche4); // Menambahkan Porsche keempat ke list
        dataPorsche.add(porsche5); // Menambahkan Porsche kelima ke list
        System.out.println("TAMBAH DATA PORSCHE"); // Menampilkan judul input data
        System.out.print("Nomor kendaraan: "); // Meminta nomor kendaraan
        String nomorKendaraan = input.nextLine(); // Membaca nomor kendaraan
        System.out.print("Merk: "); // Meminta merk kendaraan
        String merk = input.nextLine(); // Membaca merk kendaraan
        System.out.print("Tahun rilis: "); // Meminta tahun rilis
        int tahunRilis = input.nextInt(); // Membaca tahun rilis sebagai integer
        System.out.print("Jumlah pintu: "); // Meminta jumlah pintu
        int jumlahPintu = input.nextInt(); // Membaca jumlah pintu sebagai integer
        System.out.print("Kapasitas penumpang: "); // Meminta kapasitas penumpang
        int kapasitasPenumpang = input.nextInt(); // Membaca kapasitas penumpang sebagai integer
        System.out.print("Kecepatan maksimum: "); // Meminta kecepatan maksimum
        int kecepatanMaksimum = input.nextInt(); // Membaca kecepatan maksimum sebagai integer
        input.nextLine(); // Mengambil sisa enter setelah nextInt()
        System.out.print("Warna: "); // Meminta warna Porsche
        String warna = input.nextLine(); // Membaca warna Porsche
        System.out.print("Jenis: "); // Meminta jenis Porsche
        String jenis = input.nextLine(); // Membaca jenis Porsche
        System.out.print("Harga: "); // Meminta harga Porsche
        long harga = input.nextLong(); // Membaca harga sebagai long
        Porsche porscheBaru = new Porsche( // Membuat object Porsche baru dari input user
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
        dataPorsche.add(porscheBaru); // Menambahkan object Porsche baru ke ArrayList
        System.out.println("\nData Porsche berhasil ditambahkan!"); // Menampilkan pesan berhasil
        String garis = "+----+------------+---------+-------+-------+-----------+----------+---------+-------------+------------+"; // Membuat garis tabel
        System.out.println(); // Memberikan satu baris kosong sebelum tabel
        System.out.println(garis); // Menampilkan garis bagian atas tabel
        System.out.printf( // Menampilkan header tabel
            "| %-2s | %-10s | %-7s | %-5s | %-5s | %-9s | %-8s | %-7s | %-11s | %-10s |%n",
            "No", // Nama kolom nomor
            "Nomor", // Nama kolom nomor kendaraan
            "Merk", // Nama kolom merk
            "Tahun", // Nama kolom tahun
            "Pintu", // Nama kolom pintu
            "Kapasitas", // Nama kolom kapasitas
            "Kecepatan", // Nama kolom kecepatan
            "Warna", // Nama kolom warna
            "Jenis", // Nama kolom jenis
            "Harga" // Nama kolom harga
        );
        System.out.println(garis); // Menampilkan garis di bawah header
        for (int i = 0; i < dataPorsche.size(); i++) { // Mengulang seluruh data Porsche dalam ArrayList
            Porsche porsche = dataPorsche.get(i); // Mengambil object Porsche berdasarkan index
            System.out.printf( // Menampilkan satu baris data Porsche
                "| %-2d | %-10s | %-7s | %-5d | %-5d | %-9d | %-8d | %-7s | %-11s | %-10d |%n",
                i + 1, // Menampilkan nomor urut mulai dari 1
                porsche.getNomorKendaraan(), // Mengambil nomor kendaraan melalui getter
                porsche.getMerk(), // Mengambil merk melalui getter
                porsche.getTahunRilis(), // Mengambil tahun rilis melalui getter
                porsche.getJumlahPintu(), // Mengambil jumlah pintu melalui getter
                porsche.getKapasitasPenumpang(), // Mengambil kapasitas penumpang melalui getter
                porsche.getKecepatanMaksimum(), // Mengambil kecepatan maksimum melalui getter
                porsche.getWarna(), // Mengambil warna melalui getter
                porsche.getJenis(), // Mengambil jenis melalui getter
                porsche.getHarga() // Mengambil harga melalui getter
            );
            System.out.println(garis); // Menampilkan garis setelah setiap data
        }
        input.close(); // Menutup Scanner
    }
}