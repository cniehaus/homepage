<?php snippet('header') ?>

<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>



<?php foreach ($page->children() as $sf) : ?>

  <?php if ($image = $sf->bild()->toFile()) : ?>

    <div class="card card-background" style="background-image: url( <?= $image->url() ?> );">

  <?php else : ?>

    <div class="card bg-secondary">

  <?php endif ?>

      <div class="card-body">
        <h6 class="card-category"><?= $sf->Heading() ?></h6>
          <h3 class="card-title"><?= $sf->Title() ?></h3>
        <p class="card-description">
          <?= $sf->Beschreibung() ?>
        </p>
      </div>
    </div>

<?php endforeach ?>




<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('tags', 'Schülerfirmen', ',')
]) ?>

    <?php snippet('footer') ?>