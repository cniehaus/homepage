<?php snippet('header') ?>

<?php snippet('page-header') ?>


<div class="container mx-auto">

  <div mb-4>

    <?php if ($page->date()->isNotEmpty() || $page->author()->isNotEmpty()): ?>

      <?php if ($page->date()->isNotEmpty()): ?>
        <time datetime="<?= $page->date()->toDate("d.m.Y") ?>" class="text-gray-500">
          <?= $page->date()->toDate("d.m.Y") ?>
        </time>
      <?php endif ?>
      <div class="ml-4">

        <?php snippet('tagliste', [
          'item' => $page
        ]) ?>
      </div>
      <div class="mb-2">

        <?php if ($page->author()->isNotEmpty()): ?>
          geschrieben von:
          <?= $page->author() ?>
        <?php endif ?>
      </div>

    <?php else: ?>
      <div></div>
    <?php endif ?>

  </div>




  <?php foreach ($page->text()->toLayouts() as $layout): ?>
    <section class="grid" id="<?= $layout->id() ?>">
      <div class="row align-items-start">
        <?php foreach ($layout->columns() as $column): ?>
          <div class="col">
            <div class="blocks">
              <?= $column->blocks() ?>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  <?php endforeach ?>



  <?php if ($page->fotoansicht() == 'carousel'): ?>
    <?php snippet('carousel') ?>
  <?php elseif ($page->fotoansicht() == 'gallery'): ?>
    <?php snippet('gallery') ?>
  <?php else: ?>
    <!-- Bilder werden vom Autor manuel gesetzt -->
  <?php endif ?>


</div>


<?php snippet('footertw') ?>