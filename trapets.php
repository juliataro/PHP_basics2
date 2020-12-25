<?php
//lisab vormist saadud andmed nutujasse
    $alus_a = $_GET['t1'];
    $alus_b = $_GET['t2'];
    $trapets_h = $_GET['t3'];

    $s = (($alus_a+$alus_b)/2)*$trapets_h;
    $formatted1 = sprintf("%01.1f", $s);

    echo " Trapetsi pindala on: ".$formatted1;
