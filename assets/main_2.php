
    <?php foreach ($items as $item): ?>
      <?=renderTemplate('assets/item.php', ['item' => $item]);?>
    <?php endforeach; ?>


