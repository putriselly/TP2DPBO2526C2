class Kendaraan:  # Class induk untuk kendaraan
    def __init__(self, nomorKendaraan, merk, tahunRilis):  # Constructor Kendaraan
        self.__nomorkendaraan = nomorKendaraan  # Menyimpan nomor kendaraan
        self.__merk = merk  # Menyimpan merk kendaraan
        self.__tahunrilis = tahunRilis  # Menyimpan tahun rilis
    def getNomorKendaraan(self):  # Getter untuk mengambil nomor kendaraan
        return self.__nomorkendaraan  # Mengembalikan nomor kendaraan
    def getMerk(self):  # Getter untuk mengambil merk
        return self.__merk  # Mengembalikan merk kendaraan
    def getTahunrilis(self):  # Getter untuk mengambil tahun rilis
        return self.__tahunrilis  # Mengembalikan tahun rilis
    def setNomorKendaraan(self, nomor):  # Setter untuk mengubah nomor kendaraan
        self.__nomorkendaraan = nomor  # Mengubah nomor kendaraan
    def setMerk(self, merk):  # Setter untuk mengubah merk
        self.__merk = merk  # Mengubah merk kendaraan
    def setTahunRilis(self, tahun):  # Setter untuk mengubah tahun rilis
        self.__tahunrilis = tahun  # Mengubah tahun rilis
class Mobil(Kendaraan):  # Class Mobil mewarisi class Kendaraan
    def __init__(self, nomorKendaraan, merk, tahunRilis, jumlahPintu, kapasitasPenumpang, KecepatanMaksimum):  # Constructor Mobil
        super().__init__(nomorKendaraan, merk, tahunRilis)  # Memanggil constructor Kendaraan
        self.__jumlahpintu = jumlahPintu  # Menyimpan jumlah pintu
        self.__kapasitaspenumpang = kapasitasPenumpang  # Menyimpan kapasitas penumpang
        self.__kecepatanmaksimum = KecepatanMaksimum  # Menyimpan kecepatan maksimum
    def getJumlahPintu(self):  # Getter untuk mengambil jumlah pintu
        return self.__jumlahpintu  # Mengembalikan jumlah pintu
    def getKapasitasPenumpang(self):  # Getter untuk mengambil kapasitas penumpang
        return self.__kapasitaspenumpang  # Mengembalikan kapasitas penumpang
    def getKecepatanMaksimum(self):  # Getter untuk mengambil kecepatan maksimum
        return self.__kecepatanmaksimum  # Mengembalikan kecepatan maksimum
    def setJumlahPintu(self, jumlah):  # Setter untuk mengubah jumlah pintu
        self.__jumlahpintu = jumlah  # Mengubah jumlah pintu
    def setKapasitasPenumpang(self, kapasitas):  # Setter untuk mengubah kapasitas penumpang
        self.__kapasitaspenumpang = kapasitas  # Mengubah kapasitas penumpang
    def setKecepatanMaksimum(self, kecepatan):  # Setter untuk mengubah kecepatan maksimum
        self.__kecepatanmaksimum = kecepatan  # Mengubah kecepatan maksimum
class Porsche(Mobil):  # Class Porsche mewarisi class Mobil
    def __init__(self, nomorKendaraan, merk, tahunRilis, jumlahPintu, kapasitasPenumpang, KecepatanMaksimum, warna, jenis, harga):  # Constructor Porsche
        super().__init__(nomorKendaraan, merk, tahunRilis, jumlahPintu, kapasitasPenumpang, KecepatanMaksimum)  # Memanggil constructor Mobil
        self.__warna = warna  # Menyimpan warna Porsche
        self.__jenis = jenis  # Menyimpan jenis Porsche
        self.__harga = harga  # Menyimpan harga Porsche
    def getWarna(self):  # Getter untuk mengambil warna
        return self.__warna  # Mengembalikan warna Porsche
    def getJenis(self):  # Getter untuk mengambil jenis
        return self.__jenis  # Mengembalikan jenis Porsche
    def getHarga(self):  # Getter untuk mengambil harga
        return self.__harga  # Mengembalikan harga Porsche
    def setWarna(self, warna):  # Setter untuk mengubah warna
        self.__warna = warna  # Mengubah warna Porsche
    def setJenis(self, jenis):  # Setter untuk mengubah jenis
        self.__jenis = jenis  # Mengubah jenis Porsche
    def setHarga(self, harga):  # Setter untuk mengubah harga
        self.__harga = harga  # Mengubah harga Porsche
porsche1 = Porsche(  # Membuat object Porsche pertama
    "D 1234 AB",  # Nomor kendaraan
    "Porsche",  # Merk
    2022,  # Tahun rilis
    2,  # Jumlah pintu
    2,  # Kapasitas penumpang
    280,  # Kecepatan maksimum
    "Merah",  # Warna
    "911",  # Jenis
    2500000000  # Harga
)
porsche2 = Porsche(  # Membuat object Porsche kedua
    "D 5678 CD",  # Nomor kendaraan
    "Porsche",  # Merk
    2023,  # Tahun rilis
    2,  # Jumlah pintu
    2,  # Kapasitas penumpang
    300,  # Kecepatan maksimum
    "Hitam",  # Warna
    "718 Cayman",  # Jenis
    2200000000  # Harga
)
porsche3 = Porsche(  # Membuat object Porsche ketiga
    "D 9012 EF",  # Nomor kendaraan
    "Porsche",  # Merk
    2021,  # Tahun rilis
    4,  # Jumlah pintu
    4,  # Kapasitas penumpang
    250,  # Kecepatan maksimum
    "Putih",  # Warna
    "Panamera",  # Jenis
    2800000000  # Harga
)
porsche4 = Porsche(  # Membuat object Porsche keempat
    "D 3456 GH",  # Nomor kendaraan
    "Porsche",  # Merk
    2024,  # Tahun rilis
    4,  # Jumlah pintu
    5,  # Kapasitas penumpang
    260,  # Kecepatan maksimum
    "Biru",  # Warna
    "Macan",  # Jenis
    1800000000  # Harga
)
porsche5 = Porsche(  # Membuat object Porsche kelima
    "D 7890 IJ",  # Nomor kendaraan
    "Porsche",  # Merk
    2023,  # Tahun rilis
    4,  # Jumlah pintu
    5,  # Kapasitas penumpang
    275,  # Kecepatan maksimum
    "Abu-abu",  # Warna
    "Cayenne",  # Jenis
    2300000000  # Harga
)
dataPorsche = [porsche1, porsche2, porsche3, porsche4, porsche5]  # Membuat list berisi semua object Porsche
print("TAMBAH DATA PORSCHE")  # Menampilkan judul input data
nomorKendaraan = input("Nomor kendaraan: ")  # Meminta nomor kendaraan
merk = input("Merk: ")  # Meminta merk kendaraan
tahunRilis = int(input("Tahun rilis: "))  # Meminta tahun rilis dan mengubahnya menjadi integer
jumlahPintu = int(input("Jumlah pintu: "))  # Meminta jumlah pintu dan mengubahnya menjadi integer
kapasitasPenumpang = int(input("Kapasitas penumpang: "))  # Meminta kapasitas penumpang dan mengubahnya menjadi integer
KecepatanMaksimum = int(input("Kecepatan maksimum: "))  # Meminta kecepatan maksimum dan mengubahnya menjadi integer
warna = input("Warna: ")  # Meminta warna Porsche
jenis = input("Jenis: ")  # Meminta jenis Porsche
harga = int(input("Harga: "))  # Meminta harga dan mengubahnya menjadi integer
porscheBaru = Porsche(  # Membuat object Porsche baru dari input user
    nomorKendaraan,  # Mengirim nomor kendaraan
    merk,  # Mengirim merk
    tahunRilis,  # Mengirim tahun rilis
    jumlahPintu,  # Mengirim jumlah pintu
    kapasitasPenumpang,  # Mengirim kapasitas penumpang
    KecepatanMaksimum,  # Mengirim kecepatan maksimum
    warna,  # Mengirim warna
    jenis,  # Mengirim jenis
    harga  # Mengirim harga
)
dataPorsche.append(porscheBaru)  # Menambahkan object Porsche baru ke list
print("Data Porsche berhasil ditambahkan!")  # Menampilkan pesan berhasil
garis = "+----+------------+---------+-------+-------+-----------+----------+---------+-------------+------------+"  # Membuat garis tabel
print(garis)  # Menampilkan garis bagian atas tabel
print(f"| {'No':<2} | {'Nomor':<10} | {'Merk':<7} | {'Tahun':<5} | {'Pintu':<5} | {'Kapasitas':<9} | {'Kecepatan':<8} | {'Warna':<7} | {'Jenis':<11} | {'Harga':<10} |")  # Menampilkan header tabel
print(garis)  # Menampilkan garis di bawah header
for i, porsche in enumerate(dataPorsche, 1):  # Mengulang semua object dalam list dan memberi nomor mulai dari 1
    print(  # Menampilkan satu baris data Porsche
        f"| {i:<2} "  # Menampilkan nomor urut
        f"| {porsche.getNomorKendaraan():<10} "  # Mengambil nomor kendaraan melalui getter
        f"| {porsche.getMerk():<7} "  # Mengambil merk melalui getter
        f"| {porsche.getTahunrilis():<5} "  # Mengambil tahun rilis melalui getter
        f"| {porsche.getJumlahPintu():<5} "  # Mengambil jumlah pintu melalui getter
        f"| {porsche.getKapasitasPenumpang():<9} "  # Mengambil kapasitas penumpang melalui getter
        f"| {porsche.getKecepatanMaksimum():<8} "  # Mengambil kecepatan maksimum melalui getter
        f"| {porsche.getWarna():<7} "  # Mengambil warna melalui getter
        f"| {porsche.getJenis():<11} "  # Mengambil jenis melalui getter
        f"| {porsche.getHarga():<10} |"  # Mengambil harga melalui getter
    )
    print(garis)  # Menampilkan garis setelah setiap data