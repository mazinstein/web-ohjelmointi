<?php
$tuntipalkka = $_POST["tuntipalkka"] ?? 0;
$tuntimaara = $_POST["tuntimaara"] ?? 0;
$viikonloppulisa = $_POST["viikonloppulisa"] ?? 0;
$viikonloppumaara = $_POST["viikonloppumaara"] ?? 0;


$yhteispalkka = $tuntipalkka * $tuntimaara;


$yhteispalkka_lisilla = $yhteispalkka + ($viikonloppulisa * $viikonloppumaara);

echo "Yhteispalkka ilman viikonloppulisiä: " . $yhteispalkka . "<br>";
echo "Yhteispalkka viikonloppulisien kanssa: " . $yhteispalkka_lisilla;
?>
