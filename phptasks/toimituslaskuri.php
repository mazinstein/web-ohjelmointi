<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Toimituskululaskuri</title>
</head>
<body>
    <h1>Laske toimituskulut</h1>
    <?php
    function laskeToimituskulut($toimitustapa) {
        switch ($toimitustapa) {
            case "Nouto":
                return 0.00;
            case "Postipaketti":
                return 6.90;
            case "Kotiinkuljetus":
                return 12.50;
            default:
                return -1;
        }
    }

    $valittu_tapa = "Kotiinkuljetus";
    $hinta = laskeToimituskulut($valittu_tapa);

    if ($hinta != -1) {
        echo "Valittu toimitustapa: " . $valittu_tapa . "<br><br>";
        echo "<b>Toimituskulut: " . number_format($hinta, 2, ",", " ") . " €</b>";
    } else {
        echo "Virheellinen toimitustapa";
    }
    ?>
</body>
</html>
