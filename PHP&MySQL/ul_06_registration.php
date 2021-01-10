<!---UL. 6. Taro Julia-
http://old.code.mu/books/php/auth/registraciya-i-avtorizaciya-polzovatelej-na-php.html
-->

<?php include('config.php'); ?>

<?php

session_start();

if (isset($_SESSION['tuvastamine'])) {
    header('Location: ul_06_admin.php');
    exit();
    //kontrollime kas väljand on täidetud
}
if (!empty($_GET['login']) && !empty($_GET['pass'])) {
    // tekstiväljade kontroll ja imelikke asju eemaldaminej html märgendi keelamine
    $login = htmlspecialchars(trim($_GET['login']));
    $password = htmlspecialchars(trim($_GET['pass']));

    $cheking = 'SELECT * FROM users WHERE login = "$login"';

    // SIIA UUS KONTROLL
    $sool = 'prostosol';
    $kryp = crypt($password, $sool);
    $new = 'INSERT INTO users(login,password) VALUES("'.$login.'","'.$kryp.'")';

    $issue = mysqli_query($yhendus, $cheking);
    $valjund = mysqli_query($yhendus, $new);

    $tulemus = mysqli_affected_rows($yhendus);
    // Kui on, siis loom sessiooni ja suuname
    if (mysqli_num_rows($issue) > 0) {
        echo "Kasutaja selle nimiga on juba olemas";
    } elseif ($valjund==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: ul_06_admin.php');
    } else {
        echo "Midagi läks valesti";
    }
    mysqli_close($yhendus);
}

?>
<h1>Login</h1>
<form action="" method="get">
    Login: <input type="text" name="login"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Register" name="register"><input type="submit" value="tuhjendada" name="tuhjendada">
</form>
uf