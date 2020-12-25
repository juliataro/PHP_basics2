<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP - Vormid</title>
</head>
<body>

<h3>Trapetsi pindala arvutamine</h3>
<form method="post" action="?php echo $_SERVER['PHP_SELF'];">
    alus_a <input type="text" name="t1"><br>
    alus_b <input type="text" name="t2"><br>
    trapets_h <input type="text" name="t3"><br><br>
    <input type="submit" value="Arvutada">
</form>
<br>
<br>
<h3>Rombi ümbermõõt arvutamine</h3>
<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    rombi_s <input type="text" name="t4"><br><br>
    <input type="submit" value="Arvutada">
</form>

<!---trapetsia pindala ja rombi ümbermõõtu arvutamine-->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alus_a = ($_POST['t1']);
    $alus_b = ($_POST['t2']);
    $trapets_h = ($_POST['t3']);
    $s = (($alus_a+$alus_b)/2)*$trapets_h;
    $formatted1 = sprintf("%01.1f", $s);
    echo "<br><br>Trapetsi pindala on: ".$formatted1;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rombi_s = ($_POST['t4']);
    $p = 4*$rombi_s;
    $formatted2 = sprintf("%01.1f", $p);
    echo "<br><br>Rombi ümbermõõt on: ".$formatted2;
}
?>

</body>
</html>