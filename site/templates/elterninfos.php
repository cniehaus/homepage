<?php snippet('header') ?>

<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">

    <?php foreach ($page->text()->toBlocks() as $block): ?>

      <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">
          <?= $block->name() ?>
        </div>
        <div class="card-body">
          <h5 class="card-title">
            <?= $block->kurzbeschreibung()->kt() ?>
          </h5>
          <p class="card-text">
            <?= $block->kurzbeschreibung()->kt() ?>

            <a href="<?= $block->link() ?>">Weiterlesen</a>


          </p>
        </div>
      </div>


    <?php endforeach ?>

  </div>

</div>

<?php snippet('footer') ?>