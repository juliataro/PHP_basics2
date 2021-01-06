
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


<?php
if (!empty($_GET['otsi'])) {
    $artist = $_GET['artist'];
    $album = $_GET['album'];
    //kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    //päring
    $paring1 = 'SELECT * FROM albumid WHERE artist LIKE "%'.$otsi.'%"';
    $paring2 = 'SELECT * FROM albumid WHERE album LIKE "%'.$otsi.'%"';
    $valjund1 = mysqli_query($yhendus, $paring1);
    $valjund2 = mysqli_query($yhendus, $paring2);
    //päringu vastuste arv
    $tulemusi1 = mysqli_num_rows($valjund1);
    $tulemusi2 = mysqli_num_rows($valjund2);

    echo 'Teie otsite: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    if ($tulemusi1 == 0) {
        echo "Leiti 0 artistid!";
    }
    while($rida = mysqli_fetch_assoc($valjund1)){
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    mysqli_free_result($valjund1);
    mysqli_close($yhendus1);

    if ($tulemusi2 == 0) {
        echo "Leiti 0 artistid!";
    }
    while($rida = mysqli_fetch_assoc($valjund2)){
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    mysqli_free_result($valjund2);
    mysqli_close($yhendus2);
}
?>