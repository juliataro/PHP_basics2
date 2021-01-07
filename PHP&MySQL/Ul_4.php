<?php include('config.php'); ?>
<?php
$paring = "SELECT albumid.album, klientid.eesnimi, klientid.perenimi FROM arved INNER JOIN klientid INNER JOIN albumid on arved.kliendid_id=klientid.id AND albumid.id=arved.albumid_id;"; // valime albumid ja kliendi info klienti tabelist
$valjund = mysqli_query($yhendus, $paring); // tulemus
$jrk = 0; // et panna iga reale number paneme jarkekord tsukkliga
while($rida = mysqli_fetch_array($valjund)){
    $arv = count($rida); //arvutame read
    $jrk++;
    echo $jrk.'. - Ostutetud albumi nimi: '.$rida['album'].'<br>'; //väljastamine
    echo '  Kliendi nimi: '.$rida['eesnimi'].' '.$rida['perenimi'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>
