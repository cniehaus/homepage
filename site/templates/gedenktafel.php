<?php snippet('header') ?>

<?php snippet('page-header') ?>

<h2>Moin moin Gedenktafel tetset</h2>



<?php snippet('sidebar') ?>

<div>

<div class="container">
Grab des Tages
</div>

<div class="container">

  <?php if ($page->fotoansicht() == 'carousel') : ?>
    <?php snippet('carousel') ?>
  <?php elseif ($page->fotoansicht() == 'gallery') : ?>
    <?php snippet('gallery') ?>
  <?php else : ?>
    <!-- Bilder werden vom Autor manuel gesetzt -->
  <?php endif ?>
  
</div>

<?php snippet('footer') ?>