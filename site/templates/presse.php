<?php snippet('header') ?>

<?php snippet('page-header') ?>


<nav aria-label="presse-navigation">
  <ul class="pagination">

    <?php 
    // `toStructure()` erzeugt einen Iterator fuer die URLs
    $items = $page->pressenachrichten()->toStructure();

    $i = 0;

    // die 4 ist nur zum testen, das muss natürlich über die URL gehen
    foreach ($items->paginate(8) as $item): $i++ ?>
        <?php if ($i== 4) : ?>
          <li class="page-item active"><a class="page-link" href="#"><?= $i ?></a></li>
        <?php else : ?>
          <li class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>
        <?php endif ?>

    <?php endforeach ?>

  </ul>
</nav>

<!--  -->

<?php 
// `toStructure()` erzeugt einen Iterator fuer die URLs
$items = $page->pressenachrichten()->toStructure();

// Nun kann man jede URL durchgehen und jeweils einen Links erzeugen
foreach ($items->paginate(2) as $item): ?>
 
  <h2 class="title">
    <a href="<?= $item->link() ?>">
      <?= $item->name()->html() ?>
      
    </a>
  </h2>
  <div class="text-right">
  Datum: <?= $item->datum()->html() ?> <span class="badge badge-pill alert-dark"><?= $item->zeitung()->html() ?></span>
  </div>

  <p><?= $item->anfang() ?></p>
<?php endforeach ?>


<?php snippet('footer') ?>