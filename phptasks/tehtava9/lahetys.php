<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$nimi = $_POST["nimi"] ?? "";
$viesti = $_POST["viesti"] ?? "";

$ok = mail(
  "mazuninalex1961@gmail.com",
  "Feedback from Starbucks Website",
  "Name: $nimi\nMessage: $viesti"
);

if ($ok) {
  header("Location: http://ares.vuoksi.fi/2025/b/aleksandr/phptasks/tehtava9/kiitos.php");
  exit();
} else {
  header("Location: http://ares.vuoksi.fi/2025/b/aleksandr/phptasks/tehtava9/virhe.php");
  exit();
}
?>
