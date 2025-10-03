<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Starbucks - Palaute</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include "header.php"; ?>
  <main>
    <h2>Anna palautetta</h2>
    <form action="lahetys.php" method="post">
      <p>Nimi: <br>
      <input type="text" name="nimi" required></p>

      <p>Sähköposti: <br>
      <input type="email" name="email" required></p>

      <p>Suosikkijuoma: <br>
      <select name="juoma">
        <option value="Latte">Latte</option>
        <option value="Cappuccino">Cappuccino</option>
        <option value="Frappuccino">Frappuccino</option>
        <option value="Espresso">Espresso</option>
      </select></p>

      <p>Haluatko uutiskirjeen? <br>
      <input type="checkbox" name="uutiskirje" value="kyllä"> Kyllä</p>

      <p>Palaute: <br>
      <textarea name="viesti"></textarea></p>

      <p><input type="submit" value="Lähetä"></p>
    </form>
  </main>
  <?php include "footer.php"; ?>
</body>
</html>
