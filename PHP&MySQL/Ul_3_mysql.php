<!---UL 3 MySQL Julia Taro 06.01.2021-->



<!---3(1)----Kuvamine andmebaasist kõik albumid-->

<?php include('config.php'); ?>

<?php
/*will make this code inactive not to

echo"<br><br>Väljastame kõik albumid andmebaasist:<br>";
$paring = 'SELECT album FROM albumid;'; // selekteetime et meile vaja artistid ja albumid
$valjund = mysqli_query($yhendus, $paring); // teeme ühendus
$jrk = 0;
while($rida = mysqli_fetch_array($valjund)){
    $arv = count($rida);
    $jrk++;//teeme kõik read massivina
    echo $jrk.'. - '.$rida[0].'<br>';
} // väljastame artist ja album
mysqli_free_result($valjund);
mysqli_close($yhendus);

miks  all the things  */
?>


<!---3(2)----Kuvamine andmebaasist kõik albumid-->

<?php include('config.php'); ?>
<table border="1">
<button><a class="button" href="lisa.php?id='.$rida["id"].'">Lisa album</a></button><br>;
<?php
//muutmise päring

$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
    echo '<tr name="id">
			<td>'.$rida['artist'].'</td>
			<td>'.$rida['album'].'</td>
			<td>'.$rida['aasta'].'</td>
			<td><a href="'.$_SERVER['PHP_SELF'].'?id='.$rida["id"].'">kustuta</a></td>
			<td><a href="muuda.php?id='.$rida["id"].'">muuda</a></td><br>
			</tr>';

} if(!empty($_GET['id'])){
         //kustutamise päringud
    $id = $_GET['id'];
    $kustuta_paring = "DELETE FROM albumid WHERE id='$id'";
    $kustuta_valjund = mysqli_query($yhendus, $kustuta_paring);
    if($kustuta_valjund){
        echo "Rida kustutatud!";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$_SERVER['PHP_SELF'].'">';
    } else {
        echo "Viga kustutamisel!";
    }
} elseif (!empty($_GET['muuda'])){
         header("Location: muuda.php");

}

?>
