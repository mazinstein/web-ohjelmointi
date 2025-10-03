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

$yhteenveto = null;
$maara = 2; 
$valittu_tapa = "Postipaketti";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $maara = isset($_POST["maara"]) ? intval($_POST["maara"]) : 1;
    if ($maara < 1) $maara = 1;
    $valittu_tapa = isset($_POST["toimitustapa"]) ? $_POST["toimitustapa"] : "Postipaketti";

    $hinta_kpl = 349.90;
    $valisumma = $maara * $hinta_kpl;
    $toimituskulut = laskeToimituskulut($valittu_tapa);

    if ($toimituskulut === -1) {
        $yhteenveto = '<p class="error">Virheellinen toimitustapa</p>';
    } else {
        $loppusumma = $valisumma + $toimituskulut;

        $yhteenveto = '<div class="summary">';
        $yhteenveto .= '<h3>Tilauksen yhteenveto</h3>';
        $yhteenveto .= '<p>Määrä: ' . htmlspecialchars($maara) . ' kpl</p>';
        $yhteenveto .= '<p>Välisumma: ' . number_format($valisumma, 2, ",", " ") . ' €</p>';
        $yhteenveto .= '<p>Toimitustapa: ' . htmlspecialchars($valittu_tapa) . '</p>';
        $yhteenveto .= '<p>Toimituskulut: ' . number_format($toimituskulut, 2, ",", " ") . ' €</p>';
        $yhteenveto .= '<p class="total"><b>Yhteensä: ' . number_format($loppusumma, 2, ",", " ") . ' €</b></p>';
        $yhteenveto .= '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tilauslomake</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f5f7fb; margin:0; padding:20px; }
        .container { max-width:480px; margin:40px auto; background:#fff; padding:24px; border-radius:8px; box-shadow:0 6px 18px rgba(20,30,50,0.08); }
        h1 { margin-top:0; }
        label { display:block; margin:10px 0 6px; font-weight:600; }
        input[type="number"], select { width:100%; padding:10px 12px; border:1px solid #ddd; border-radius:6px; box-sizing:border-box; }
        button { margin-top:14px; width:100%; padding:12px; background:#0d6efd; color:#fff; border:none; border-radius:6px; cursor:pointer; font-size:16px; }
        button:hover { background:#0b5ed7; }
        .summary { margin-top:20px; padding-top:12px; border-top:1px solid #eee; }
        .summary p { margin:8px 0; }
        .summary .total { margin-top:10px; font-size:1.05em; }
        .error { color:#b00020; font-weight:600; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tilaa tuote</h1>

        <h3>Tuote: Sähköpotkulauta (<?php echo number_format(349.90, 2, ",", " "); ?> €/kpl)</h3>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="maara">Määrä:</label>
            <input type="number" id="maara" name="maara" min="1" value="<?php echo htmlspecialchars($maara); ?>">

            <label for="toimitustapa">Toimitustapa:</label>
            <select id="toimitustapa" name="toimitustapa">
                <option value="Nouto" <?php echo ($valittu_tapa === "Nouto") ? "selected" : ""; ?>>Nouto (0,00 €)</option>
                <option value="Postipaketti" <?php echo ($valittu_tapa === "Postipaketti") ? "selected" : ""; ?>>Postipaketti (6,90 €)</option>
                <option value="Kotiinkuljetus" <?php echo ($valittu_tapa === "Kotiinkuljetus") ? "selected" : ""; ?>>Kotiinkuljetus (12,50 €)</option>
            </select>

            <button type="submit">Laske hinta</button>
        </form>

        <?php
        if ($yhteenveto !== null) {
            echo $yhteenveto;
        }
        ?>
    </div>
</body>
</html>
