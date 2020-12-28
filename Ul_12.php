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

<!---1 task: Arvutame erinevus sisestatud ajade vahel--->

<form method="post" action="?php echo ($_SERVER['PHP_SELF']);?">
    <div class="form-group">
        <label for="exampleInputEmail1">Sisestage väljasõiduaeg (13:15:00).</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="t1">

        <label for="exampleInputEmail1">Steisestage saabumisaeg (näiteks 22:10:00).</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="t2">
    </div>
    <input type="submit" class="btn btn-primary" value="Arvuta">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["t1"];
    $end = $_POST["t2"];
    $dtStart = new DateTime($start);//convert string to a date variable
    $dtEnd = new DateTime($end);//convert string to a date variable
    $interval = date_diff($dtStart, $dtEnd);//finds the difference
    echo $interval->format("%H:%I:%S");// formating, and if have date so $interval->format("Days = %a Time = %H:%I:%S .");
}
?>

<!---2(1) task: arvutame tabelist keskmist kaalu-->
<?php
$allikas = 'tootajad.csv';
$open_csv = fopen($allikas, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($open_csv)){
    $rida = fgetcsv($open_csv, filesize($allikas),';');//reads read failist
    $kaal = $rida[2]; // väljastab 2 veerandist data
    echo $kaal;
    echo '<br>';
}
fclose($open_csv);

$kaal = array();
$average = array_sum($kaal) / count($kaal);
echo $average;
//allikas https://thisinterestsme.com/reading-csv-file-with-php/
?>

<!---2(2) task: arvutame tabelist keda on rohkem M või N, keskmine palk ja suurem palgad-->

<?php
$all = 'tootajad.csv';
$open = fopen($all, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($open)){
    $row = fgetcsv($open, filesize($all),';');//reads read failist
    $sugu = $row[1]; // väljastab 2 veerandist data
    echo $sugu;
    echo '<br>';
}
fclose($open_csv);

$sugu = array();
$sugu_amount = array_count_values($sugu);
echo 'Nimekirjas on -'.$sugu_amount['m'].' poisi.<br>';
echo 'Nimekirjas on -'.$sugu_amount['n'].' tüdrukut.<br>';

if ($sugu_amount['m'] >$sugu_amount['n']){
    echo "Poiste on rohkem";
} else {
    echo "Tüdrukut on rohkem";
}

//allikas https://thisinterestsme.com/reading-csv-file-with-php/
?>




</body>
</html>