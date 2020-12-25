<?php
#ul 6.1
#arvud 1 kuni 10 väljastada reasse
    $arv = 1;
    while($arv <= 100){
        echo "$arv ";
        $arv++;
    }
echo "<br><br>";

#arvud 1 kuni 10 väljastada reasse, pärast iga kümme reavahetus
    $arv = 10;
    while($arv <= 100){
        echo $arv."<br>";
        $arv+=10;
}
echo "<br><br>";

#arvud 1 kuni 10 reasse täppiga
    $arv = 1;
    while($arv <= 10){
        echo $arv.". " ;
        $arv++;
}
echo "<br><br>";

#ul 6.2

#horisontaalne rida tarnidest
for($rida=1; $rida<=20;$rida++){
    echo '*';
}

echo "<br><br>";

#ul 6.3
# vertikaalne rida tarnidest
for($rida=1; $rida<=7;$rida++){
    echo '*<br>';
}
echo "<br><br>";
?>


<!--6.4 ruudu joonistamine-->
    <!DOCTYPE html>
    <!---ul 6.4--->
    <!---vertikaalne rida tarnidest--->
    <html>
    <title>proovid</title>
    <head>
        <meta charset="utf-8">

    </head>
    <body>

    <h3>Sisestage andmed</h3>
    <form method="post" action="?php echo $_SERVER['PHP_SELF'];">
        <label for="exampleInputEmail1">Sisestage laius (tk.)</label>
        <input type="text" name="w1"><br>


        <input type="submit" value="Arvutada">
    </form>

<?php

$width = $_POST['w1'];
$height = $_POST['w1'];

for($rida=1; $rida<=$width; $rida++){
    for($veerg=1; $veerg<=$height; $veerg++){
        echo "*     ";
    }
    echo '<br>';
}
?>
</body>
</html>


<!--6.5 numbrid kahenevalt-->
<?php
echo "<br><br>";

for($rida=10; $rida>=2;$rida--){
    echo $rida."<br>";
}
echo "<br><br>";

# 6.6 numbrid 1-100 mis jaganevad 3ga
$arv = 3;
while ($arv<=100){
    echo $arv.' ';
    $arv+=3;
}
echo "<br><br>";

#6.7 massividest väljasta paarid
$girls = array(1=>'g1', 'g2', 'g3', 'g4', 'g5');
$kokku1 = count($girls);
$boys = array(1=>'b1', 'b2', 'b3', 'b4', 'b5');
$kokku2 = count($boys);

for($i=1;$i<$kokku1;$i++){
    echo $girls[$i].'='.$boys[$i].' ';}
echo "<br><br>";

#6.8 massividest väljasta paarid random
$girls = array(1=>'g1', 'g2', 'g3', 'g4', 'g5');
shuffle($girls);
$kokku1 = count($girls);
$boys = array(1=>'b1', 'b2', 'b3', 'b4', 'b5');
shuffle($boys);
$kokku2 = count($boys);

for($i=1;$i<$kokku1;$i++){
    echo $girls[$i].'='.$boys[$i].' ';}
echo "<br><br>";



?>
<?php
function tervita(){
    return "Tere kylaline";
}

echo tervita();
?>

