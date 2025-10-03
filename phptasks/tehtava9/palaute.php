<?php include "header.php"; ?>
  <div class="card">
    <h2>Palautelomake</h2>
    <form action="lahetys.php" method="post">
      <div class="form-row">
        <label for="nimi">Nimi:</label>
        <div class="field"><input type="text" name="nimi" id="nimi"></div>
      </div>
      <div class="form-row">
        <label for="viesti">Viesti:</label>
        <div class="field"><textarea name="viesti" id="viesti"></textarea></div>
      </div>
      <p><input class="btn btn-primary" type="submit" value="Lähetä"></p>
    </form>
  </div>
<?php include "footer.php"; ?>
