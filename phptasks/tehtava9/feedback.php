<?php include "header.php"; ?>

<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$drink = $_POST['drink'] ?? '';
$visitType = $_POST['visit_type'] ?? '';
$rating = $_POST['rating'] ?? '';
$newsletter = $_POST['newsletter'] ?? '';
$message = $_POST['message'] ?? '';
$visitDays = $_POST['visit_days'] ?? [];

$errors = [];
$successMessage = '';
$ratingMessage = '';

function clean($value) {
  return htmlspecialchars(trim($value));
}

function drinkLabel($drink) {
  switch ($drink) {
    case 'latte':
      return 'Caffè Latte';
    case 'cappuccino':
      return 'Cappuccino';
    case 'coldbrew':
      return 'Cold Brew';
    case 'frappuccino':
      return 'Mocha Frappuccino';
    default:
      return 'Not selected';
  }
}

function ratingText($rating) {
  switch ($rating) {
    case '1':
      return 'Very poor';
    case '2':
      return 'Below average';
    case '3':
      return 'Good';
    case '4':
      return 'Very good';
    case '5':
      return 'Excellent';
    default:
      return '-';
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (trim($name) === '') {
    $errors[] = 'Name is required.';
  }

  if (trim($email) === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email is required.';
  }

  if ($drink === '') {
    $errors[] = 'Please select a favorite drink.';
  }

  if ($visitType === '') {
    $errors[] = 'Please choose a visit type.';
  }

  if ($rating === '') {
    $errors[] = 'Please choose a rating.';
  }

  if (trim($message) === '') {
    $errors[] = 'Message cannot be empty.';
  }

  if (empty($errors)) {
    $successMessage = 'Thank you. Your coffee experience has been submitted successfully.';
    $ratingMessage = ratingText($rating);
  }
}
?>

<section class="page-intro reveal">
  <div class="container narrow">
    <p class="eyebrow">Feedback</p>
    <h1>Share your coffee experience</h1>
    <p class="section-text">
      This page demonstrates PHP form handling with validation, conditions, functions,
      arrays, loops, and multiple input types.
    </p>
  </div>
</section>

<section class="section reveal">
  <div class="container feedback-editorial">
    <div class="form-panel">
      <h2>Experience form</h2>

      <?php if (!empty($errors)): ?>
        <div class="alert alert-error">
          <ul>
            <?php foreach ($errors as $error): ?>
              <li><?php echo clean($error); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if ($successMessage): ?>
        <div class="alert alert-success">
          <p><?php echo clean($successMessage); ?></p>
        </div>
      <?php endif; ?>

      <form action="feedback.php" method="post" class="feedback-form">
        <div class="form-group">
          <label for="name">Full name</label>
          <input type="text" id="name" name="name" value="<?php echo clean($name); ?>">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" value="<?php echo clean($email); ?>">
        </div>

        <div class="form-group">
          <label for="drink">Favorite drink</label>
          <select id="drink" name="drink">
            <option value="">Choose a drink</option>
            <option value="latte" <?php echo $drink === 'latte' ? 'selected' : ''; ?>>Caffè Latte</option>
            <option value="cappuccino" <?php echo $drink === 'cappuccino' ? 'selected' : ''; ?>>Cappuccino</option>
            <option value="coldbrew" <?php echo $drink === 'coldbrew' ? 'selected' : ''; ?>>Cold Brew</option>
            <option value="frappuccino" <?php echo $drink === 'frappuccino' ? 'selected' : ''; ?>>Mocha Frappuccino</option>
          </select>
        </div>

        <div class="form-group">
          <span class="label-text">Visit type</span>
          <div class="radio-group">
            <label><input type="radio" name="visit_type" value="study" <?php echo $visitType === 'study' ? 'checked' : ''; ?>> Study / Work</label>
            <label><input type="radio" name="visit_type" value="friends" <?php echo $visitType === 'friends' ? 'checked' : ''; ?>> Meeting Friends</label>
            <label><input type="radio" name="visit_type" value="takeaway" <?php echo $visitType === 'takeaway' ? 'checked' : ''; ?>> Takeaway</label>
          </div>
        </div>

        <div class="form-group">
          <span class="label-text">Visit days</span>
          <div class="check-group">
            <label><input type="checkbox" name="visit_days[]" value="Monday" <?php echo in_array('Monday', $visitDays) ? 'checked' : ''; ?>> Monday</label>
            <label><input type="checkbox" name="visit_days[]" value="Wednesday" <?php echo in_array('Wednesday', $visitDays) ? 'checked' : ''; ?>> Wednesday</label>
            <label><input type="checkbox" name="visit_days[]" value="Friday" <?php echo in_array('Friday', $visitDays) ? 'checked' : ''; ?>> Friday</label>
            <label><input type="checkbox" name="visit_days[]" value="Weekend" <?php echo in_array('Weekend', $visitDays) ? 'checked' : ''; ?>> Weekend</label>
          </div>
        </div>

        <div class="form-group">
          <label for="rating">Overall rating (1-5)</label>
          <input type="range" id="rating" name="rating" min="1" max="5" value="<?php echo $rating !== '' ? clean($rating) : '3'; ?>">
        </div>

        <div class="form-group">
          <label class="inline-check">
            <input type="checkbox" name="newsletter" value="yes" <?php echo $newsletter === 'yes' ? 'checked' : ''; ?>>
            Subscribe to coffee updates
          </label>
        </div>

        <div class="form-group">
          <label for="message">Your feedback</label>
          <textarea id="message" name="message" rows="6"><?php echo clean($message); ?></textarea>
        </div>

        <button type="submit" class="btn btn-dark full-width">Submit Feedback</button>
      </form>
    </div>

    <aside class="summary-panel">
      <p class="card-tag">Preview</p>
      <h2>Submitted details</h2>
      <div class="summary-list">
        <div><strong>Name:</strong> <?php echo clean($name ?: '-'); ?></div>
        <div><strong>Email:</strong> <?php echo clean($email ?: '-'); ?></div>
        <div><strong>Drink:</strong> <?php echo clean(drinkLabel($drink)); ?></div>
        <div><strong>Visit Type:</strong> <?php echo clean($visitType ?: '-'); ?></div>
        <div><strong>Rating:</strong> <?php echo clean($rating ?: '-'); ?></div>
        <div><strong>Rating Meaning:</strong> <?php echo clean($ratingMessage ?: ratingText($rating)); ?></div>
        <div><strong>Newsletter:</strong> <?php echo $newsletter === 'yes' ? 'Yes' : 'No'; ?></div>
        <div><strong>Visit Days:</strong> <?php echo !empty($visitDays) ? clean(implode(', ', $visitDays)) : '-'; ?></div>
        <div><strong>Message:</strong> <?php echo clean($message ?: '-'); ?></div>
      </div>
    </aside>
  </div>
</section>

<?php include "footer.php"; ?>