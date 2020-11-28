<?php
//lisab vormist saadus andmed muutujasse
    $rombi_s = $_GET['t4'];

    $p = (4*$rombi_s);
    $formatted1 = sprintf("%01.1f", $p);

    echo "Rombi ümbermõõt on: ".$formatted1;

