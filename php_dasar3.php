<?php

// if else
echo "<h2>1. If Else</h2>";

$umur = 17;
if ($umur > 18) {
    echo "Dewasa";
} else {
    echo "Anak-anak";
}
echo "<br>";


// switch
echo "<h2>2. Switch</h2>";

$warna = "hijau";

switch ($warna) {
    case "merah":
        echo "Stop!";
        break;
    case "kuning":
        echo "Hati-hati!";
        break;
    case "hijau":
        echo "Jalan!";
        break;
    default:
        echo "Warna tidak dikenali";
}
echo "<br>";


// ternary operator
echo "<h2>6. Ternary Operator</h2>";

$nilai = 7;

// Menggunakan operator ternary untuk mengecek apakah nilai positif atau negatif
$hasil = ($nilai >= 10) ? "Nilai positif" : "Nilai negatif";

echo "Hasil: $hasil <br>";


// for loop
echo "<h2>3. For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}


// while loop
echo "<h2>4. While Loop</h2>";

$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}


// do while loop
echo "<h2>5. Do While Loop</h2>";

$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);


?>
