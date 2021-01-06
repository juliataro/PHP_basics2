
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
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);

}
?>