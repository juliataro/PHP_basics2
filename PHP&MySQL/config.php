<?php
//sinu andmed

//***protseduuriline***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'julia';
$db_salasona = 'andmebaas2021';


//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}

?>