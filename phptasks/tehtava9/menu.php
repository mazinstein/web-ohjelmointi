<?php include "header.php"; ?>

<?php
$menuItems = [
  [
    'name' => 'Caffè Latte',
    'category' => 'Hot Coffee',
    'description' => 'Rich espresso with steamed milk and a soft, balanced finish.',
    'price' => 4.90
  ],
  [
    'name' => 'Cappuccino',
    'category' => 'Hot Coffee',
    'description' => 'Espresso with silky steamed milk and thick foam.',
    'price' => 4.70
  ],
  [
    'name' => 'Caramel Macchiato',
    'category' => 'Signature Drink',
    'description' => 'Espresso, vanilla notes, milk, and caramel drizzle.',
    'price' => 5.60
  ],
  [
    'name' => 'Cold Brew',
    'category' => 'Cold Coffee',
    'description' => 'Smooth and refreshing coffee brewed slowly for a clean taste.',
    'price' => 4.80
  ],
  [
    'name' => 'Mocha Frappuccino',
    'category' => 'Frappuccino',
    'description' => 'Blended coffee drink with chocolate flavor and whipped topping.',
    'price' => 5.90
  ],
  [
    'name' => 'Green Tea Lemonade',
    'category' => 'Refreshers',
    'description' => 'A bright and refreshing tea-based citrus drink.',
    'price' => 4.40
  ]
];

function formatPrice($price) {
  return number_format($price, 2) . " €";
}
?>

<section class="page-top reveal">
  <div class="container narrow">
    <p class="section-kicker">Menu</p>
    <h1>Featured drinks</h1>
    <p class="section-description">
      A sample product collection presented using PHP arrays, a loop, and reusable card components.
    </p>
  </div>
</section>

<section class="section reveal">
  <div class="container menu-grid">
    <?php foreach ($menuItems as $item): ?>
      <article class="menu-card">
        <span class="menu-tag"><?php echo $item['category']; ?></span>
        <h2><?php echo $item['name']; ?></h2>
        <p><?php echo $item['description']; ?></p>
        <div class="menu-bottom">
          <span class="menu-price"><?php echo formatPrice($item['price']); ?></span>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include "footer.php"; ?>