<?php



// array sederhana
echo "<h2>1. Array</h2>";

$buah = ["melon", "pepaya", "buah naga"];
echo $buah[1];
echo "<br>";

$nama = array('endang', 'sri', 'mendai', 'marta');
echo $nama[3];
echo "<br>";


// array asosiatif
echo "<h2>2. Array Asosiatif</h2>";

$umur = ["nazwa" => 17, "sinta" => 21, "zaki" => 18, "salma" => 18];
echo $umur["nazwa"];
echo "<br>";



// array multidimensi
echo "<h2>3. Array Multidimensi</h2>";

// Mendefinisikan array multidimensi menggunakan []
$siswa = [
    ["Nama" => "nazwa", "Nilai" => 97],
    ["Nama" => "salma", "Nilai" => 80],
    ["Nama" => "zaki", "Nilai" => 85]
];

// Mengakses elemen array multidimensi
echo $siswa[0]["Nama"] . " mendapat nilai " . $siswa[0]["Nilai"] . "<br>";
echo $siswa[2]["Nama"] . " mendapat nilai " . $siswa[2]["Nilai"] . "<br>";



// for each array sederhana
echo "<h2>4. Foreach Array Sederhana</h2>";

$hewan = ["kucing", "hamster", "kelinci"];

foreach ($hewan as $item) {
    echo "Hewan: $item <br>";
}



// for each array asosiatif
echo "<h2>5. Foreach Array Asosiatif</h2>";

$nilai = [
    "nazwa" => 88,
    "salma" => 85,
    "zaki" => 90
];

foreach ($nilai as $nama => $skor) {
    echo "$nama mendapat nilai $skor.<br>";
}



// for each array multidimensi
echo "<h2>6. Foreach Array Multidimensi</h2>";

$orang = [
    ["Nama" => "dina", "umur" => 22],
    ["Nama" => "eka", "umur" => 25],
    ["Nama" => "fajar", "umur" => 20]
];

foreach ($orang as $individu) {
    echo $individu["Nama"] . " berumur " . $individu["umur"] . ".<br>";
}



// function
echo "<h2>7. Function </h2>";

function tampilkanPesan() {
    // kode yang akan dijalankan
    echo "Selamat belajar PHP!";
}

tampilkanPesan();
echo "<br>";



// parameter
echo "<h2>8. Parameter</h2>";

function sapa($nama) {
    echo "Halo, $nama!";
}

sapa("Dina"); // Output: Halo, Dina!
echo "<br>";
sapa("Eka"); // Output: Halo, Eka!
echo "<br>";



// PARAMETER YANG MENGEMBALIKAN NILAI
echo "<h2>9. Function dengan Return Value</h2>";

function kali($a, $b) {
    return $a * $b;
}

$hasil = kali(6, 7);
echo $hasil; // Output: 42

?>
