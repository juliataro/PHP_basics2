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

<!---04. Väljastakse pilt sõltuvult mis aastaaeg sisestas kasutaja--->
<?php

?>

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Steisestage kuupäev ja kuu inglisekeeles, et saada mis on aastaaeg.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="d1">
    </div>
    <input type="submit" class="btn btn-primary" value="Saada aastaaeg">

</form>

<?php

#kood leiab kui vana kasutaja sellel aastal
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function season(){

        $day = $_POST['d1'];
        $pildid = array("talv" =>"talv.jpg","kevad" =>'kevad.jpg',"suvi" =>'suvi.jpg', "sugis" =>'sugis.jpg');
        $error = "Selle kuupäeva pole olemas";

//talv
        $talv_al = date($day, strtotime("December 01"));
        $talv_lp = date($day, strtotime("February 28"));
//kevad
        $kevad_al = date($day, strtotime("March 01"));
        $kevad_lp = date($day, strtotime("May 31"));
//suvi
        $suvi_al = date($day, strtotime("June 01"));
        $suvi_lp = date($day, strtotime("August 31"));
//sügis
        $sugis_al = date($day, strtotime("September 01"));
        $sugis_lp = date($day, strtotime("November 30"));


        if ($day >= $talv_al && $day <= $talv_lp): $season = "talv";
        elseif ($day >= $kevad_al && $day <= $kevad_lp): $season = "kevad";
        elseif ($day >= $suvi_al && $day <= $suvi_lp): $season = "suvi";
        elseif ($day >= $sugis_al && $day <= $sugis_lp): $season = "sugis";
        else: $error;
        endif;

        $pilditee = $pildid[$season];
        echo $pilditee;
    }
}
echo"<br><br>";
?>
<img src="<?php season() ?>" alt="" style="width:500px;height:400px;">



</body>
</html>