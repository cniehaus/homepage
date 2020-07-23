<?php if ($image = $page->hintergrundbild()->toFile()) : ?>
  <div class="jumbotron" style="background-image: url('<?= $image->url() ?>'); background-size: cover;">
    <div class="container">
      <h1 class="title text-white mt-5"><?= $page->title() ?>
        <small class="text-muted"><?= $page->subtitle() ?></small>
      </h1>
    </div>
  </div>




<!-- Titelfeld -->
  <div class="titelfeld">
    <div class="container">
      <h1 class="title text-white mt-5"><?= $page->title() ?>
        <small class="text-muted"><?= $page->subtitle() ?></small>
      </h1>

      <p class="lead">
        <?= $page->heading() ?>
      </p>
    </div>
  </div>


  <!-- Ab hier der richtige Inhalt, der auf jeder Seite individuell sein kann -->
  <div class="container">