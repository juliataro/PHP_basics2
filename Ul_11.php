<?php
$allikas = 'Ul_11_txt.txt';
$text = 'See on lisamise tekst,\n vaatame kas toimub?\n';//texti lisamine
file_put_contents($allikas, $text, FILE_APPEND);
?>


<?php
echo nl2br(file_get_contents($allikas));
?>


