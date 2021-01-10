<?php include('config.php'); ?>


<?php

session_start();

if (isset($_SESSION['tuvastamine'])) {
    header('Location: ul_06_admin.php');
    exit();
}
//kontrollime kas väljad on täidetud
if (!empty($_POST['login']) && !empty($_POST['pass'])) {
    //eemaldame kasutaja sisestusest kahtlase pahna
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['pass']));
    //SIIA UUS KONTROLL
    
    $sool = 'prostosol';
    $kryp = crypt($password, $sool);
    //kontrollime kas andmebaasis on selline kasutaja ja parool
    $paring = "SELECT * FROM users WHERE login='$login' AND password='$kryp'";
    $valjund = mysqli_query($yhendus, $paring);
    //kui on, siis loome sessiooni ja suuname
    if (mysqli_num_rows($valjund)==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: ul_06_admin.php');
    } else {
        echo "Login or password is incorrect!";
    }
    }

?>
<h1>Login</h1>
<form action="" method="post">
    Login: <input type="text" name="login"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Logi sisse" name="logi">
</form>

