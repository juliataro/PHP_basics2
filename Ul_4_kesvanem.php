<!--Kood arvutab mis lahriss inimene on vanem-->
<?php
$name1 = $_POST['in1'];
$name2 = $_POST['in2'];
$inim1Err = $inim2Err ="";
?>

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <h4>Kes on vanem?</h4>
    <div class="form-group">
        <label for="exampleInputEmail1">Inimene1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="in1">
        <span class="error">* <?php echo $inim1Err;?></span>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Inimene2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="in2">
        <span class="error">* <?php echo $inim2Err;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Kumb vanem?">
</form>

<?php

//kontroll kas lahter on tühi?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["in1"])){
        $inim1Err = "Sisestage vanus1";
    }
    else if ($name1 > $name2){
        echo "<br>Inimene1 on vanem";}
    else if ($name1 < $name2){
        echo "<br>Inimene2 on vanem";}
    else if ($name1 == $name2){
        echo "<br>Inimesed on ühevanased";}

    if (empty($_POST["in2"])){
        $inim2Err = "Sisestage vanus2";
    }
}
?>