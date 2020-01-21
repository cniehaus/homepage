<?php snippet('header') ?>

<div class="jumbotron">
  <h1 class="display-4"><?= $page->title() ?></h1>
  <p class="lead"><?= $page->text() ?></p>
</div>


<div class="row row-cols-sm-2 row-cols-md-5">
    <?php foreach ($page->children() as $kontakt) : ?>
        <div class="card">
            <img src="<?= $kontakt->images()->first()->url() ?>" class="rounded card-img-top" alt="<?= $kontakt->images()->first()->alt() ?>">
            <div class="card-body bg-dark text-white">
                <h2 class="card-title"><?= $kontakt->position() ?></h2>
                <h3 class="card-subtitle"><?= $kontakt->title() ?></h3>
                <hr class="my-4">
                <p class="card-text p-3 mb-2">&#9993;<?= $kontakt->email() ?></p>
                <p class="card-text p-3 mb-2">&#9743; <?= $kontakt->phone() ?></p>
            </div>
            
                
        </div>
    <?php endforeach ?>
</div>


<?php snippet('footer') ?>