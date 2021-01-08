<!---UL 2 PHP MySQL Julia Taro 06.01.2021--->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Vormid</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            margin: 50px;
        }
    </style>
</head>
<body>


<!---12(1)----Ühendus andmebaasiga-->
<?php include('config.php'); ?>

<!---2(2)----Väljasta kogu ‘albumid’ sisu ridade kaupa-->


<?php
/*will make this code inactive not to

echo"Väljastame albumid<br>";
$paring = 'SELECT * FROM albumid'; //väljastame kõik mis on tabelis "albumid"
$valjund = mysqli_query($yhendus, $paring); //teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ // teeme kõik read massivina
    echo '<strong>Album: '.$rida[2].'</strong><br>'; // väljasamine
}
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>


<!---2(3)----Väljasta artist ja album read, sorteeri kasvavalt artisti järgi-->

<?php include('config.php'); ?>
<?php
/*will make this code inactive not to

echo"<br><br>Väljastame aartistid ja albumid kasvavalt artisti järgi<br>";
$paring = 'SELECT artist, album FROM albumid ORDER  BY  artist'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ //teeme kõik read massivina
    echo '<strong>Artist ja Album: '.$rida[0].' - '.$rida[1].'</strong><br>';} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>

<!---2(4)----Väljasta  artist ja album read, mille aasta on 2010 ja uuemad-->

<?php include('config.php'); ?>
<?php
/*will make this code inactive not to
echo"<br><br>Väljasta  artist ja album read, mille aasta on 2010 ja uuemad<br>";
$paring = 'SELECT album, aasta FROM albumid WHERE aasta=2010 AND aasta<=2019'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ //teeme kõik read massivina
    echo '<strong>Album: '.$rida[0].' - '.$rida[1].'</strong><br>';} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>


<!---2(5)----Väljastame albumite kogus on andmebaasis, nende keskmine hind ja koguväärtus (summa)-->

<?php include('config.php'); ?>
<?php
/*will make this code inactive not to
echo"<br><br>Väljastame albumite kogus on andmebaasis, nende keskmine hind ja koguväärtus (summa)<br>";
$paring = 'SELECT COUNT(*) AS "Albumeid kokku", ROUND(AVG(hind),0) AS "Keskmine hind", sum(hind) as "Kogu väärtus" FROM albumid;'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ //teeme kõik read massivina
    echo '<strong>Meil albumid kokku - '.$rida[0].'. Keskmine albumi hind - '.$rida[1].'. Kogu väärtus on - '.$rida[2].'</strong><br>';} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>


<!---2(6)----Väljasta kõige vanema albumi nimed-->
<?php include('config.php'); ?>
<?php
/*will make this code inactive not to

echo"<br><br>Väljastame kõige vanema albumi nimed:<br>";
$paring = 'SELECT album FROM albumid WHERE aasta<(SELECT AVG(aasta) FROM albumid);'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ //teeme kõik read massivina
    echo 'Album - '.$rida[0].'<br>';} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>

<!---2(7)----Väljasta albumid, mille hind on kogu keskmisest suurem-->
<?php include('config.php'); ?>
<?php

/*will make this code inactive not to
echo"<br><br>Väljasta albumid, mille hind on kogu keskmisest suurem:<br>";
$paring = 'SELECT album FROM albumid WHERE hind>(SELECT AVG(hind) FROM albumid);'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
while($rida = mysqli_fetch_array($valjund)){ //teeme kõik read massivina
    echo 'Album - '.$rida[0].'<br>';} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>




<h4>Otsi</h4>
<form method="get" action="">
    <label for="valik">Vali artist või album:</label>
    <select id="valik" name="valik">
        <option value="artist" name="artist">Artist</option>
        <option value="album" name="album">Album</option>
    </select><br>
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>


<?php include('config.php'); ?>
<?php

if (!empty($_GET['otsi'])) {
    // Turn off all error reporting
    error_reporting(0);

    $artist = $_GET['artist'] || $album = $_GET['album'];
    //kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    //päring
    $paring = 'SELECT * FROM albumid WHERE artist LIKE "%'.$otsi.'%" || album LIKE "%'.$otsi.'%"';

    $valjund = mysqli_query($yhendus, $paring);

    //päringu vastuste arv
    $tulemusi = mysqli_num_rows($valjund);

    echo 'Teie otsite: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    if ($tulemusi == 0) {
        echo "Leiti 0 artistid!";
    }
    while($rida = mysqli_fetch_assoc($valjund)){
        echo $rida['artist'].' - '.$rida['album'].'<br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);

 /* Mary Ann lahendus
    if (!empty($_GET['otsi'])) {
        //kasutaja tekst vormist
        $otsi = $_GET['otsi'];
        $valik = $_GET['valik'];
        //päring
        if(intval($valik)==1) {
            $paring = 'SELECT * FROM albumid WHERE artist LIKE "%' . $otsi . '%"';
        } else {
            $paring = 'SELECT * FROM albumid WHERE album LIKE "%' . $otsi . '%"';
        }

        $valjund = mysqli_query($yhendus, $paring);
        echo 'Otsingusõna: '.$otsi.'<br>';
        echo 'Vastused: <br>';
        while($rida = mysqli_fetch_assoc($valjund)){
            echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
        }
        echo '<br><br>';

    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);
 <!-- Loo otsingukast, mis lubab valida, kas otsing toimub artistide või albumite veerust. -->

<form method="get" action="yl2_2.php">
    <label for="valik">Vali artist või album:</label>
    <select id="valik" name="valik">
        <option value="1">Artist</option>
        <option value="2">Album</option>
    </select>
    <br>
    <br>
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>
*/

}
?>


</body>
</html>

