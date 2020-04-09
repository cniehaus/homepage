<?php if (page()->hintergrundbild()->isNotEmpty()) : ?>

  <div class="jumbotron" style="background-image: url('<?= $kirby->url() ?>/<?= $page->hintergrundbild() ?>'); background-size: cover;">
    <div class="container">
      <h1 class="title" style="font-size: 3vw"><?= $page->title() ?>
        <small class="text-muted"><?= $page->subtitle() ?></small>
      </h1>
    </div>
  </div>
<?php else : ?>

  <div class="jumbotron" style="background-image: url('<?= $kirby->url('assets') ?>/img/acker2.jpg'); background-size: cover;">
    <div class="container">
      <h1 class="title" style="font-size: 3vw"><?= $page->title() ?>
        <small class="text-muted"><?= $page->subtitle() ?></small>
      </h1>
    </div>
  </div>

<?php endif ?>


<!-- Ab hier der richtige Inhalt, der auf jeder Seite individuell sein kann -->

<div class="main main-raised">
  <div class="container">
    <div class="section text-left">