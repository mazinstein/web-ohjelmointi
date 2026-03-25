<?php include "header.php"; ?>

<?php
$infoCards = [
  [
    'title' => 'Customer Service',
    'text' => 'For questions about drinks, café atmosphere, and general service.',
    'value' => 'support@starbucks-demo.com'
  ],
  [
    'title' => 'Project Information',
    'text' => 'For communication related to this PHP course project.',
    'value' => 'project@starbucks-demo.com'
  ],
  [
    'title' => 'Visit Location',
    'text' => 'A calm city café environment for study sessions, work, and coffee breaks.',
    'value' => 'Main Street Café, Helsinki'
  ]
];
?>

<section class="page-intro reveal">
  <div class="container narrow">
    <p class="eyebrow">Visit</p>
    <h1>Places, contact, and quiet coffee moments</h1>
    <p class="section-text">
      This section presents contact information in a calm editorial layout rather than a standard corporate contact page.
    </p>
  </div>
</section>

<section class="section reveal">
  <div class="container visit-panel">
    <div class="visit-copy">
      <p class="card-tag">Best time to visit</p>
      <h2>Late mornings and early evenings often feel the most balanced.</h2>
      <p>
        The best café atmosphere usually comes when the space feels active but not rushed.
        That is when coffee, work, and conversation coexist naturally.
      </p>
    </div>

    <div class="visit-meta">
      <div class="meta-row">
        <span>Opening Hours</span>
        <strong>08:00 – 20:00</strong>
      </div>
      <div class="meta-row">
        <span>Weekend Hours</span>
        <strong>10:00 – 18:00</strong>
      </div>
      <div class="meta-row">
        <span>Ambience</span>
        <strong>Quiet, warm, modern</strong>
      </div>
    </div>
  </div>
</section>

<section class="section reveal">
  <div class="container grid cards-3">
    <?php foreach ($infoCards as $card): ?>
      <article class="editorial-card">
        <span class="card-tag">Contact</span>
        <h3><?php echo $card['title']; ?></h3>
        <p><?php echo $card['text']; ?></p>
        <div class="contact-value"><?php echo $card['value']; ?></div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include "footer.php"; ?>