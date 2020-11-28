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


<!--jagamise vorm-->
<?php
$arv1 = $arv2 ="";
$arv1Err = $arv2Err ="";

$jagam = $arv1/$arv2;
// kontroll, kas eslimene lahter on tühi?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["a1"])) {
        $arv1Err = "Sisestage jagatav number";
    } else {
        $arv1 = test_input($_POST["a1"]);

    }
// kontroll, kas teine lahter on tühi?
    if(empty($_POST["a2"])) {
        $arv2Err = "Sisestage jagaja number";
    } else {
        $arv2 = test_input($_POST["a2"]);
// kontroll, kas teine lahter on tühi?
        if($arv2==0){
            $arv2Err = "Kirjutage number > 0";
    }}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="form-group">
        <label for="exampleInputEmail1">Arv1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="a1">
        <span class="error">* <?php echo $arv1Err;?></span>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Arv2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="a2">
        <span class="error">* <?php echo $arv2Err;?></span>


    </div>
    <input type="submit" class="btn btn-primary" value="Arvuta">
</form>

<?php
$jagam = $arv1/$arv2;
echo '<br>Jagamise tulemus on: '.$jagam;
?>

<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>

<!--Kood otsustab kas ristküülik või ruut-->

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <h4>Kumb on: kas ristkülik või ruut?</h4>
    <div class="form-group">
        <label for="exampleInputEmail1">Külg1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="s1">


    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Külg2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="s2">

    </div>
    <input type="submit" class="btn btn-primary" value="Mis vorm?">
</form>

<?php

$side1 = $_POST['s1'];
$side2 = $_POST['s2'];

// kas küljed on ühesugused või mitte?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($side1 == $side2){
        echo "<br>Vorm on ruut";}
    else if ($side1 > $side2){
        echo "<br>Vorm on ristkülik";}
    else if ($side1 < $side2){
        echo "<br>Vorm on ristkülik";}
}
?>

<br>
<br>
<br>
<br>

<!--Kood otsustab kas ristküülik või ruut-->

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <h4>2 - Kumb on: kas ristkülik või ruut?</h4>
    <div class="form-group">
        <label for="exampleInputEmail1">Külg1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="s1">


    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Külg2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="s2">

    </div>
    <input type="submit" class="btn btn-primary" value="Mis vorm?">
</form>

<?php

$side1 = $_POST['s1'];
$side2 = $_POST['s2'];
;

// kas küljed on ühesugused või mitte?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($side1 == $side2){
        echo "<br><img src='ruut.png'>";}
    else if ($side1 > $side2){
        echo "<br><img src='riskulikk.gif'>";}
    else if ($side1 < $side2){
        echo "<br><img src='riskulikk.gif'>";}
}
?>

<br>
<br>
<br>
<br>

<!--Kood otsustab kas sisestatud vanus on juubel või mitte-->

<?php
$dob = ""; // Your date of birth
$bdErr = "";
?>

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <h4>Sisestage oma sünnipäeva n: 1980.08.31</h4>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" name="b1">
        <span class="error">* <?php echo $bdErr;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Teada">
</form>
<?php
// kood väljastab vanus
$age = (date('Y') - date('Y',strtotime($dob)));

// kood kontrollib kas on juubeliaasta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ($age == 20 or $age ==30){
    echo "<br>Teil on juubeli aasta!";}
    else if ($age == 40 or $age ==50){
        echo "<br>Teil on juubeli aasta!";}
    else if ($age == 60 or $age ==70){
        echo "<br>Teil on juubeli aasta!";}
    else if ($age == 80 or $age ==90){
        echo "<br>Teil on juubeli aasta!";}
    else if ($age == 100 or $age ==110){
        echo "<br>Teil on juubeli aasta!";}

    if (empty($_POST["b1"])){
        $inim2Err = "Sisestage oma sünniaasta";
    }

}
?>
<br>
<br>
<br>
<br>
<?php
$hinneErr = "";
?>
<!--kontrollime kas hind on hea või mitte-->
<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <h4>Sisestage kontrollitöö hinne</h4>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" name="h1">
        <span class="error">* <?php echo $hinneErr;?></span>
    </div>
    <input type="submit" class="btn btn-primary" value="Teada">
</form>

<?php
$hinne = $_POST['h1'];


switch($hinne){
    case ($hinne >= 10): echo 'SUPER!';
        break;
    case ($hinne >= 5 or $hinne <= 9): echo 'TEHTUD!';
        break;
    case ($hinne < 5 ): echo 'KASIN!';
        break;
    default: echo 'Kontrolli töö hinne!';

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["h1"])){
    $hinneErr = "Sisestage oma punktid!";
}
}
?>

</body>
</html>
