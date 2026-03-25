<?php include "header.php"; ?>

<?php
$contacts = [
  [
    'title' => 'Customer Service',
    'text' => 'Questions about drinks, café experience, and general customer support.',
    'value' => 'support@starbucks-demo.com'
  ],
  [
    'title' => 'Project Contact',
    'text' => 'Information related to this PHP course project and presentation.',
    'value' => 'project@starbucks-demo.com'
  ],
  [
    'title' => 'Visit Information',
    'text' => 'A calm café environment for studying, coffee breaks, and small meetings.',
    'value' => 'Main Street Café, Helsinki'
  ]
];
?>

<section class="page-top reveal">
  <div class="container narrow">
    <p class="section-kicker">Contact</p>
    <h1>Get in touch</h1>
    <p class="section-description">
      Find the most suitable contact option for support, project details, or café-related questions.
    </p>
  </div>
</section>

<section class="section reveal">
  <div class="container grid cards-3">
    <?php foreach ($contacts as $contact): ?>
      <article class="soft-card contact-card">
        <h2><?php echo $contact['title']; ?></h2>
        <p><?php echo $contact['text']; ?></p>
        <div class="contact-value"><?php echo $contact['value']; ?></div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include "footer.php"; ?>