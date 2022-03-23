<?php snippet('header') ?>
<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<div class="container">

  <?php
  $images =  $page->gallery()->toFiles();
  foreach($images as $image): ?>
    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">

    <h1><?= $image->ort() ?></h1>
    <h2><?= $image->beschreibung() ?></h2>
  <?php endforeach ?>

</div>

<?php snippet('footer') ?>