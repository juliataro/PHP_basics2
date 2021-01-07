<?php

# UL.7 Tervitus
function ter(){
    return "Tere päiksekesekene!";
    }  echo ter();

echo"<br><br>";
?>


<?php
echo"Funktsioon väljastab vormi<br>";
# UL.7 Tervitus
function showvorm(){
    ?>
    <form method="post" action="">
    <input type="text"name="firstName"/>
    <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
}
echo showvorm();
echo"<br><br>";
?>

<?php
echo"Muudab user name väiketähtedeks<br>";
# Muudab väiketähtedeks
function change($username="Masha"){
    return strtolower($username);
}
echo change();
echo"<br><br>";
?>

<?php
echo"Liidab nimi taga @khk.edu.ee<br>";
# Liidab nimi taga  “@khk.edu.ee"
function mailend($addition="name"){
    return $addition."@hkhk.edu.ee";}
echo mailend();
echo"<br><br>";
?>


<?php
echo"Genereeritakse 7-kohaline kood<br>";
# Genereeritakse 7-kohaline kood
function password_generate($chars){
    $datas = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz()?%!/';
    return substr(str_shuffle($datas), 0, $chars);
}
echo password_generate(7)."\n";
echo"<br><br>";
?>


<?php
echo"Funktsioon väljastab arvude 2 ja 8 vahemiku<br>";
# funktsioon väljastab arvude vahemiku
function numb(){
    $arv = 2;
    while ($arv <= 8) {
        echo $arv.', ';
        $arv++;
    }
}
echo numb();
echo"<br><br>";
?>


<?php
echo"Funktsioon väljastab arvude vahemiku sammuga 3<br>";
# funktsioon väljastab arvude vahemiku sammuga 3;
function number(){
    $algus = 2;
    while ($algus <= 8) {
        echo $algus.', ';
        $algus += 3;
    }
}
echo number();
echo"<br><br>";
?>

<?php
echo"Funktsioon leiab ristküliku pindala , kus a=10 ja b=5<br>";
#funktsioon leiab ristküliku pindala
function area($width, $height){
    $s = $width * $height;
    return $s;
}
echo "Pindala on: ".area(10, 5) . "<br>";
echo"<br><br>";
?>

<?php
echo"Funktsioon leiab kas sisestatud isikukood on õige pikkusega<br><br>";
#funktsioon leiab kss isikukood oõige pikkusega

function cod($a,$b){
if (strlen ($a) == ($b)){
        echo "Kood on niisama pikkusega";
    } else
        echo "Error: kood on teise pikkusega";
};
echo cod(1415, 14587);
echo"<br><br>";
?>


<?php
echo"Funktsioon leiab isikukoodist sugu ja väljastab sünniaeg<br><br>";
#funktsioon leiab kas isikukood oõige pikkusega

function control($isik){
$result = substr($isik,1,6);
$isikErr ="";
    if (empty($isik)){
        $isikErr = "Error! Isikukoodi pole";
    }
    elseif (substr ($isik,0, 1) == 4){
        echo "Sugu on naine, ja sünniaeg on: ".$result;
    }
};
echo control(48008040044);
echo"<br><br>";
?>

<?php
echo"Veel 2 viimast ülessannet on tegemata, täpsustasin Annalt.<br><br>";
#f;
echo"<br><br>";
?>
