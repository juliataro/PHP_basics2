<?php include('config.php'); ?>


<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header('Location: ul_06_login.php');
    exit();
}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: ul_06_admin.php');
    exit();
}
?>

<h1>Salajane info</h1>
<p>Salainfo</p>
<form action="ul_06_logout.php" method="post">
    <input type="submit" value="Logi välja" name="logout">
</form>

