<?php


// operator aritmatika
echo "<h2>1. Operator Aritmatika</h2>";

$a = 5;
$b = 10;

$c = $a + $b; 
echo "Penjumlahan (\$a + \$b): $c<br>";

$c = $b - $a; 
echo "Pengurangan (\$b - \$a): $c<br>";

$c = $a * $b;
echo "Perkalian (\$a * \$b): $c<br>";

$c = $b / $a;
echo "Pembagian (\$b / \$a): $c<br>";

$c = $b % $a;
echo "Modulus (\$b % \$a): $c<br>";


// operator penugasan
echo "<h2>2. Operator Penugasan</h2>";

$a = 20;

$a += 5;
echo "\$a += 3 -> $a<br>";

$a -= 3; 
echo "\$a -= 6 -> $a<br>";

$a *= 2; 
echo "\$a *= 10 -> $a<br>";

$a /= 4; 
echo "\$a /= 2 -> $a<br>";

$a %= 5; 
echo "\$a %= 10 -> $a<br>";


// 3. operator perbandungan
echo "<h2>3. Operator Perbandingan</h2>";

$a = 20;
$b = 30;

echo "\$a == \$b: " . var_export($a == $b, true) . "<br>";  
echo "\$a === \$b: " . var_export($a === $b, true) . "<br>"; 
echo "\$a != \$b: " . var_export($a != $b, true) . "<br>";   
echo "\$a !== \$b: " . var_export($a !== $b, true) . "<br>"; 
echo "\$a > \$b: " . var_export($a > $b, true) . "<br>";     
echo "\$a < \$b: " . var_export($a < $b, true) . "<br>";     
echo "\$a >= \$b: " . var_export($a >= $b, true) . "<br>";   
echo "\$a <= \$b: " . var_export($a <= $b, true) . "<br>";   


// operator increment/decrement
echo "<h2>4. Operator Increment/Decrement</h2>";

$a = 15;

$a++;
echo "Increment (\$a++): $a<br>";

$a--;
echo "Decrement (\$a--): $a<br>";


// operator logika
echo "<h2>5. Operator Logika</h2>";

$a = true;
$b = false;

echo "\$a && \$b: "; var_dump($a && $b);
echo "<br>\$a || \$b: "; var_dump($a || $b);
echo "<br>!\$a: "; var_dump(!$a); 
echo "<br>\$a xor \$b: "; var_dump($a xor $b); 

?>
