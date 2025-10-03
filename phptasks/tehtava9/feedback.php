<?php include "header.php"; ?>
<div class="card">
  <h2>Feedback Form</h2>
  <form action="lahetys.php" method="post">
    <div class="form-row">
      <label for="name">Name:</label>
      <div class="field"><input type="text" name="name" id="name" required></div>
    </div>
    <div class="form-row">
      <label for="email">Email:</label>
      <div class="field"><input type="email" name="email" id="email" required></div>
    </div>
    <div class="form-row">
      <label for="message">Message:</label>
      <div class="field"><textarea name="message" id="message" required></textarea></div>
    </div>
    <p><input class="btn btn-primary" type="submit" value="Send"></p>
  </form>
</div>
<?php include "footer.php"; ?>
