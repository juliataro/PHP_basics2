<!---Julia Taro UL. 12 ---->
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
        <label for="exampleInputEmail1">Sisestage väljasõiduaeg (13:15).</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="t1">

        <label for="exampleInputEmail1">Steisestage saabumisaeg (näiteks 22:10).</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="t2">
    </div>
    <input type="submit" class="btn btn-primary" value="Arvuta">
</form>
<?php
//programm leiab auto sõiduaeg minutites
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["t1"]; //esimesena võetakse väljasõiduaeg
    $end = $_POST["t2"]; //teisena võetakse tuleku saabumiseaeg
    $dtStart = new DateTime($start);//convert string to a date variable
    $dtEnd = new DateTime($end);//convert string to a date variable
    $interval = date_diff($dtStart, $dtEnd);//finds the difference
    echo $interval->format("%H:%I:");// formating, and if have date so $interval->format("Days = %a Time = %H:%I:%S .");
}
?>

<!---12(2) task: arvutame antud tabelist keskmist töötajade palka ja kas on diskrimineerimist sugu järgi-->
<?php
echo"<br><br>";
$allikas = "tootajad.csv"; //kasutame tabeli väljaspoolse faili
$kogu_info = [];
//teeme faili lahti
if (($open_csv = fopen("{$allikas}", 'r')) !== FALSE)
{
    while (($data = fgetcsv($open_csv, 1000, ";")) !== FALSE)
    {
        //Iga individuaalne massiiv on osa suurest massiivist $info
        $andmed[] = [(string)$data[0], (string)$data[1], (int)$data[2]]; // väljastab 2 veerandist data
    }
    fclose($open_csv);
}


//eraldame naiste ja meeste read
$mees = array();
$naine = array();

foreach ($andmed as $element){
if ($element[1] == 'm'){  // kui teisel veergus on "m" andmed, siis paneme m massiivisse andmed kolmast veergust>
    $m[] = $element[2];
} else {
    $n[] = $element[2]; //või pannakse n massiivisse
    }
}

arsort($m); //sorteerime massiivid
arsort($n);

$average1 = round(array_sum($m)/count($m),2); //leiame meeste keskmist palka
echo "Meeste keskmine palk on: ".$average1;

$average2 = array_sum($n)/count($n); //leiame naiste keskmist palka
echo "<br>Meeste keskmine palk on: ".$average2;

$max_n = max($n); //leiame naiste kõrgem palka
echo "<br>Naiste kõrkem palk on: ".$max_n;

$max_m = max($m); //leiame meeste kõrgem palka
echo "<br>Meeste kõrkem palk on: ".$max_m;




//allikas https://thisinterestsme.com/reading-csv-file-with-php/

?>







</body>
</html>