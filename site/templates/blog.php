<?php snippet('header') ?>

<?php snippet('page-header') ?>



<h1><?= $page->title()->text() ?></h1>
<h3><?= $page->heading()->text() ?></h3>

Datum: <?= $page->date()->toDate("d.m.Y") ?>

Autor: <?= $page->author() ?>


<?= $page->text()->blocks() ?>

<?php if ($page->fotoansicht() == 'carousel') : ?>
  <?php snippet('carousel') ?>
<?php elseif($page->fotoansicht() == 'gallery') : ?> 
  <?php snippet('gallery') ?>
<?php else: ?> 
<!-- Bilder werden vom Autor manuel gesetzt -->
<?php endif ?>


<?php snippet('footer') ?>