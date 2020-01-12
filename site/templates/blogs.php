<?php snippet('header') ?>

<?php snippet('blogs', [
  'blogs' => $page->children()->listed()
  ]) ?>

<?php snippet('footer') ?>