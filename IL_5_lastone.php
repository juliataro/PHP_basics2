<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <title>UL 5</title>
</head>
<body>
<h3>Otsi kasutaja nimi</h3>
<form method="post" action="?php echo $_SERVER['PHP_SELF'];">
    <label>Enter user's name</label>
    user_name <input type="text" name="inp"><br>
    <input type="submit" value="Search">
</form>
<?php
$user = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['inp']);
    $isFound = false;
    foreach ($user as $inusers) {
        if ($name == $inusers) {
            $isFound = true;
        }
    }
    if($isFound){
        echo "<br><br>Such user with name ".$name." is existing.";
    } else {
        echo "<br><br>Such user with name is not existing.";
    }
}

?>

<?php
//images list
$imago = array('devlin.jpg','freeland.jpg','gabriel.jpg','pete.jpg','peterus.jpg','prentice.jpg');

//bootstrap images

$count = 6;

echo '<div class ="container">';
echo '<div class="row">';
for ($i = 0; $i < count($imago); $i++) {

    echo '<div class="col-sm-2"><img class="img-responsive w-25" src="' . $imago[$i] . '"/></div>';

}
echo '</div>';
echo '</div>';
?>

</body>
</html>

