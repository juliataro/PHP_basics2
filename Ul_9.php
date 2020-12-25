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

<!---9.1 Kasutaja nimi parandatakse Esimene suur täht, teised väiksemaks-->
<?php
$nameErr = "";
$f_l_change ="";
?>
<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Sisestage oma nimi suure ja väiksetähega segamini.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="s1">
        <span class="error">* <?php echo $nameErr;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Paranda">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["s1"])) {
    $nameErr = "Sisestage oma nimi.";
} else {
    $change = strtolower($_POST["s1"]);//makes all letters small
    $f_l_change = ucfirst($change);//Makes first letter big
}
echo "Hello, ".$f_l_change;
echo"<br><br>";
}
?>

<!--jagame tekst massiviks ja lisame iga tähe järele punktid  sisend–>stalker; väljund–>S.T.A.L.K.E.R.-->
<?php
$wordErr = "";
$l_letters = "";
$result = "";
$text = "";

?>
<br>
<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Sisestage sõna väiksetähega.</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="word">
        <span class="error">* <?php echo $wordErr;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Change">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$text = ($_POST['word']);
if (empty($_POST["word"])) {
$wordErr = "Siseta sõna";
} else {
    $result = chunk_split($text,1, '.');
    $l_letters = strtoupper($result);//makes all letters large
} echo $l_letters;
}
echo"<br><br>";
?>

<!---Vahetab roopsünu ***-->
<?php
$text = 'Sa oled täielik noob';
$otsi = array('idiot','noob');
$asenda = array('***','***');
echo str_replace($otsi, $asenda, $text);
echo"<br><br>";
?>

<!-------Emaili adressi loomine--->
<?php
$name = "";
$pere = "";
?>
<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Sisestage oma nimi.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="n1">
        <label for="exampleInputEmail1">Sisestage oma perenimi.</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="p1">
    </div>
    <input type="submit" class="btn btn-primary" value="Looma email">
</form>
<?php
echo"<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['n1'];
    $pere = $_POST['p1'];
    if (!empty($name)) {
        $change1 = strtolower($name);
        $change2 = strtolower($pere);
        echo $change1.".".$change2."@hkhk.edu.ee";
    }
}

?>



</body>
</html>