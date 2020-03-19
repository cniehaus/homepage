<?php snippet('header') ?>
<?php snippet('page-header') ?>


<div class="card-columns">
  <div class="card p-3 text-center text-white bg-primary">
    <div class="card-body">
      <h5 class="card-title">Zweige</h5>
    </div>
  </div>
</div>


<div class="container"><?= $page->text()->blocks() ?></div>

<?php snippet('footer') ?>