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

<!---1. Kasutaja vanust väljastamine--->

<?php
echo"Väljastakse tänane päev ja kellaaeg<br><br>";
# Välajstatakse kuupäev ja kellaaeg
echo date('d.m.Y G:i' , time());
echo"<br><br><br><br>";;
?>

<!---2. Kasutaja vanust väljastamine--->

<?php
#kood leiab kui vana kasutaja sellel aastal
$dob = $_POST['s1'];// Your date of birth
$bdErr = "";
?>

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Steisestage oma sünnipäev (näiteks 2020.12.20).</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="s1">
        <span class="error">* <?php echo $bdErr;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Arvuta">
</form>

<?php
$userage = (date('Y') - date('Y',strtotime($dob)));

#kood leiab kui vana kasutaja sellel aastal
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["s1"])){
        $bdErr = "Sisestage oma sünnipäev.";
    } else {
        echo "Kasutaja vanus on: ".$userage."<br><br>";}
}
echo"<br><br><br>";
?>


<!---03. Kood leiab kui kaju seda koolilõppu päevani--->
<?php
echo"Mis on aastaaeg?<br><br>";
//Tänase kuupäev.
$today = new DateTime();

// Koolilõppupäev.
$schoolEnd = date("Y") . "-05-25";
$nextyear = date("Y")+1;

// Kas koolilõppupäev sellel aastal juba oli?
if(date("m") == 05 && date("d") > 25){
//Siis vaatame järgmist kooliaasta.
    $schoolEnd = (date("Y") + 1) . "-05-25";
}

//Teemu uut muutuja koolilõppu päevaks.
$schoolEnd = new DateTime($schoolEnd);

// Leiame interval mõlema päevade vahel.
$interval = $today->diff($schoolEnd);

//Väljastame selle või järgmise aasta
//koolipäeva
echo  $nextyear. " kooliaasta lõpuni on jäänud ".$interval->days. " päeva!";
echo"<br><br><br><br>";
?>




<!---Väljastakse pilt sõltuvult mis aastaaeg vastavalt sisestatud andmetele--->
<?php

?>

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Steisestage kuupäev (näiteks 2020.12.20), et saada mis on aastaaeg.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="d1">
    </div>
    <input type="submit" class="btn btn-primary" value="Saada aastaaeg">

</form>

<?php

# 4.0 kood leiab kui vana kasutaja sellel aastal
if ($_SERVER["REQUEST_METHOD"] == "POST") {
function season(){

$day = $_POST['d1'];
$pildid = array("talv" =>"talv.jpg","kevad" =>'kevad.jpg',"suvi" =>'suvi.jpg', "sugis" =>'sugis.jpg');

//talv
        $talv_al = date("Y") . "-12-01";
        $talv_lp = date("Y") . "-02-28";
//kevad
        $kevad_al = date("Y") . "-03-01";
        $kevad_lp = date("Y") . "-05-31";
//suvi
        $suvi_al = date("Y") . "-06-01";
        $suvi_lp = date("Y") . "-08-31";
//sügis
        $sugis_al = date("Y") . "-09-01";
        $sugis_lp = date("Y") . "-11-30";


    if ($day >= $talv_al && $day <= $talv_lp):
        $season = "talv";
    elseif ($day >= $kevad_al && $day <= $kevad_lp):
        $season = "kevad";
    elseif ($day >= $suvi_al && $day <= $suvi_lp):
        $season = "suvi";
    else:
        $season = "sugis";
    endif;

    $pilditee = $pildid[$season];
    echo $pilditee;

    }
}

echo"<br><br><br>";
?>
<img src="<?php season() ?>" alt="" style="width:500px;height:400px;">





</body>
</html>
