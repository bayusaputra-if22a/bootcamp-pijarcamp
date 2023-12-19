//Jawaban 1
// Ini comment satu baris
/* Tipe data javascript adalah: 
1. String (Merepresentasikan teks atau rangkaian karakter.)
2. Number (Merepresentasikan angka, baik bilangan bulat maupun bilangan pecahan.)
3. Bigint (Merepresentasikan angka dengan presisi yang sangat tinggi.)
4. Boolean (Merepresentasikan nilai kebenaran, yaitu true atau false.)
5. Undefined (Merepresentasikan variabel yang dideklarasikan tetapi tidak diinisialisasi.)
6. Null (Merepresentasikan nilai null atau tidak memiliki nilai.)
7. Symbol (Tipe data unik yang biasanya digunakan untuk membuat properti objek yang bersifat privat.)
8. Object (Kumpulan nilai yang dapat diakses menggunakan properti.)
*/

//Jawabn 2
// Tipe data string di Javascript
let teks = "Hello, World!";
const nama = "Bayu Saputra";
let Domisili = "Karawang, Jawa Barat";

// Tipde data number di Javascript
let umur = 19;
let tinggi = 172;
let noHp = 1234567890;

// Tipe data bigint
const totalPendapatan = BigInt("1000000000000000000000");
const kunciPrivat = BigInt("98765432109876543210987654321098765432101234567890");
const nilaiGravitasi = BigInt("980665000000000000");

// Tipe data Boolean
const lampuHidup = true;
const pintuTertutup = false;
const usernameAvailable = true;
const isPasswordStrong = false;
const isConnected = true;
if (isConnected) {
//   console.log("Anda terhubung ke internet.");
// } else {
//   console.log("Tidak ada koneksi internet.");
}

// Tipe data Undefined
let name;
// console.log("Nama:", name); 
const mobil = { merk: "Toyota" };
// console.log("Warna Mobil:", mobil.warna); 
function contohFungsi() {
  } 
  const hasil = contohFungsi();
//   console.log("Hasil Fungsi:", hasil); 

// Tipe data null
let jenisKelamin = null;
// console.log("Jenis Kelamin:", jenisKelamin);
const pengguna = {
    nama: "Bayu",
    alamat: null
  };
//   console.log("Alamat Pengguna:", pengguna.alamat);
  function dapatkanData() {
    return null;
  }
  const data = dapatkanData();
//   console.log("Data:", data);

// Tipe data symbol
const simbol1 = Symbol();
const simbol2 = Symbol("deskripsi simbol");
// console.log(simbol1);
// console.log(simbol2);
const id = Symbol("id");
const user = {
  nama: "Bayu",
  [id]: 123
};
// console.log(user[id]);
const NAMA = Symbol("nama");
const USIA = Symbol("usia");
const orang = {
  [NAMA]: "Fitri",
  [USIA]: 20
};
// console.log(orang[NAMA]);
// console.log(orang[USIA]); 

// Tipe data object
const buah = {
    nama: "Apel",
    warna: "Merah",
    harga: 5000
  };
//   console.log("Nama Buah:", buah.nama);
//   console.log("Warna Buah:", buah.warna);
//   console.log("Harga Buah:", buah.harga);
const car = {
    merk: "Toyota",
    tahun: 2020,
    fitur: ["AC", "Power Steering", "Airbags"]
  };
//   console.log("Merk Mobil:", car.merk);
//   console.log("Tahun Produksi:", car.tahun);
//   console.log("Fitur Mobil:", car.fitur.join(", "));
const karyawan = {
    nama: "Fitri",
    jabatan: "Manajer",
    informasiTambahan: {
      usia: 20,
      alamat: "Ciamis"
    }
  };
//   console.log("Nama Karyawan:", karyawan.nama);
//   console.log("Jabatan:", karyawan.jabatan);
//   console.log("Usia Karyawan:", karyawan.informasiTambahan.usia);
//   console.log("Alamat Karyawan:", karyawan.informasiTambahan.alamat);


//Jawaban 3
let angkaPertama = 29
let angkaKedua = 25
//Penjumlahan
let total_tambah = angkaPertama + angkaKedua
console.log("Hasil dari " + angkaPertama + "+" + angkaKedua + "=" + total_tambah)
//Pengurangan
let total_kurang = angkaPertama - angkaKedua
console.log("Hasil dari " + angkaPertama + "-" + angkaKedua + "=" + total_kurang)
//Pembagian
let total_kali = angkaPertama / angkaKedua
console.log("Hasil dari " + angkaPertama + "/" + angkaKedua + "=" + total_kali)
//Perkalian
let total_bagi = angkaPertama * angkaKedua
console.log("Hasil dari " + angkaPertama + "*" + angkaKedua + "=" + total_bagi)