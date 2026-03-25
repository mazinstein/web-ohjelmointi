<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$navigation = [
  'index.php' => 'Journal',
  'about.php' => 'Story',
  'menu.php' => 'Selection',
  'contact.php' => 'Visit',
  'feedback.php' => 'Feedback'
];

function navLinkClass($file, $currentPage) {
  return $file === $currentPage ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbucks Journal</title>
  <link rel="stylesheet" href="starbucks.css">
</head>
<body>
  <div class="page-shell">
    <header class="site-header">
      <div class="container header-inner">
        <a href="index.php" class="brand">
          <span class="brand-mark">SJ</span>
          <div class="brand-copy">
            <span class="brand-name">Starbucks Journal</span>
            <span class="brand-tag">Coffee, comfort, and everyday rituals</span>
          </div>
        </a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav class="site-nav" id="site-nav">
          <ul>
            <?php foreach ($navigation as $file => $label): ?>
              <li>
                <a href="<?php echo $file; ?>" class="<?php echo navLinkClass($file, $currentPage); ?>">
                  <?php echo $label; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </header>

    <main class="site-main">