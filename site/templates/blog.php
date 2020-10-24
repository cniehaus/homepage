<?php snippet('header') ?>

<?php snippet('page-header') ?>


<div class="container">
  <div class="blockqoute">
    <div class="d-flex justify-content-between">

      <?php if ($page->date()->isNotEmpty() || $page->author()->isNotEmpty()) : ?>
        <div class="mt-0 mb-0 blockquote-footer h5">

          <?php if ($page->date()->isNotEmpty()) : ?>
            Datum: <?= $page->date()->toDate("d.m.Y") ?>
          <?php endif ?>          
          <?php if ($page->author()->isNotEmpty()) : ?>
            Autor: <?= $page->author() ?>
          <?php endif ?>

        </div> 
        
      <?php else : ?>
        <div></div>
      <?php endif ?>


      <?php snippet('tagliste', [
        'item' => $page
      ]) ?>
    </div>
  </div>
  
  <?= $page->text()->blocks() ?>

  <?php if ($page->fotoansicht() == 'carousel') : ?>
    <?php snippet('carousel') ?>
  <?php elseif ($page->fotoansicht() == 'gallery') : ?>
    <?php snippet('gallery') ?>
  <?php else : ?>
    <!-- Bilder werden vom Autor manuel gesetzt -->
  <?php endif ?>
</div>

<?php snippet('footer') ?>