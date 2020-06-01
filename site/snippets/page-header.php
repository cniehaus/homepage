<main role="main">

<?php if ($image = $page->hintergrundbild()->toFile()) : ?>
  <div class="jumbotron jumbotron-fluid" style="background-image: url('<?= $image->url() ?>'); background-size: cover;">
<?php else : ?>
  <div class="jumbotron jumbotron-fluid" style="background-image: url('<?= $kirby->url('assets') ?>/img/banner_eng.jpg'); background-size: cover;">
<?php endif ?>

    <div class="titelfeld">
      <div class="container">
        <h1><?= $page->title() ?>
          <small class="text-muted"><?= $page->subtitle() ?></small>
        </h1>
      </div>
    </div>
  </div>


<!-- Ab hier der richtige Inhalt, der auf jeder Seite individuell sein kann -->
<div class="container">