<?php snippet('header') ?>

<?php snippet('page-header') ?>

<nav aria-label="presse-navigation">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>

  </ul>
</nav>



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