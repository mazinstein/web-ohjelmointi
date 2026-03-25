<?php include "header.php"; ?>

<?php
$menuItems = [
  [
    'name' => 'Caffè Latte',
    'category' => 'Hot Coffee',
    'description' => 'Espresso and steamed milk with a smooth, familiar finish.',
    'price' => 4.90
  ],
  [
    'name' => 'Cappuccino',
    'category' => 'Hot Coffee',
    'description' => 'A classic espresso drink with milk and rich foam.',
    'price' => 4.70
  ],
  [
    'name' => 'Caramel Macchiato',
    'category' => 'Signature',
    'description' => 'Vanilla notes, espresso, milk, and caramel drizzle.',
    'price' => 5.60
  ],
  [
    'name' => 'Cold Brew',
    'category' => 'Cold Coffee',
    'description' => 'Slow-steeped coffee with a smooth and refreshing taste.',
    'price' => 4.80
  ],
  [
    'name' => 'Mocha Frappuccino',
    'category' => 'Blended',
    'description' => 'Chocolate-forward blended coffee with whipped topping.',
    'price' => 5.90
  ],
  [
    'name' => 'Green Tea Lemonade',
    'category' => 'Refreshers',
    'description' => 'A bright tea-based drink with citrus freshness.',
    'price' => 4.40
  ]
];

function formatPrice($price) {
  return number_format($price, 2) . " €";
}
?>

<section class="page-intro reveal">
  <div class="container narrow">
    <p class="eyebrow">Selection</p>
    <h1>Signature drinks</h1>
    <p class="section-text">
      A curated menu presented through PHP arrays and loops, styled as an editorial product selection.
    </p>
  </div>
</section>

<section class="section reveal">
  <div class="container menu-layout">
    <?php foreach ($menuItems as $item): ?>
      <article class="selection-card">
        <div class="selection-top">
          <span class="card-tag"><?php echo $item['category']; ?></span>
          <span class="price-chip"><?php echo formatPrice($item['price']); ?></span>
        </div>

        <h2><?php echo $item['name']; ?></h2>
        <p><?php echo $item['description']; ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include "footer.php"; ?>