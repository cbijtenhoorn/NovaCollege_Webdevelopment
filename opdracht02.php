<!--Vul een variabele met een getal, als dit getal tussen de 0 en de 10 ligt,
    druk dan een boodschap af op het scherm.-->

<?php
$getal = 5;

if ($getal >= 0 && $getal <= 10) {
    echo "Het getal $getal ligt tussen de nul en tien";
}
else if ($getal < 0) {
    echo "Het getal $getal is kleiner dan nul";
}
else {
    echo "Het getal $getal is groter dan 10";
}