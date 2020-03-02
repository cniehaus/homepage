<?php snippet('header') ?>

<?php snippet('page-header') ?>


<?php 
// `toStructure()` erzeugt einen Iterator fuer die URLs
$items = $page->pressenachrichten()->toStructure();
// Nun kann man jede URL durchgehen und jeweils einen Links erzeugen
foreach ($items as $item): ?>
  <h2>
    <a href="<?= $item->link() ?>">
      <?= $item->name()->html() ?>
    </a>
  </h2>

  <p><?= $item->anfang() ?></p>
<?php endforeach ?>


<?php snippet('footer') ?>