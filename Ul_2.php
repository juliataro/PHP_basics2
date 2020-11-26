<?php
// Ul 2 Julia Taro 24.11

$x = 6;
$y = 3;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo "Vastused: <br>(+) $liitm, <br>(-) $lahut, <br>(*) $korru, <br>(/) $jagam, <br>(jagamisega jääk) $jaak<br><br>";


//teisendamine
$number = 500;
$mm_cm = $number / 10;
$mm_m = $number / 100;

$formatted1 = sprintf("%01.2f", $mm_cm);
$formatted2 = sprintf("%01.2f", $mm_m);
echo "On antud ".$number." mm, teisendame santimetriteks ja metriteks";
echo "<br>".$number." mm on ".$formatted1." cm";
echo "<br>".$number." mm on ".$formatted2." m";

//täiskolmnurkse pindala ja ümbermõõt, antud küljed
$a = 6.35;
$b = 4.00;
$c = 7.50;

$p = $a+$b+$c;
$s = ($a*$b) / 2;
$formatted1 = sprintf("%01.0f", $p);
$formatted2 = sprintf("%01.0f", $s);

echo "<br><br>On antud täisnurkse kolmnurk, kus a=6.35 b=4.00 c=7.50. Leiame pindala ja ümbermõõt.";
echo "<br>Pindala on ".$formatted1." ja ümbermõõt on ".$formatted2;






?>

