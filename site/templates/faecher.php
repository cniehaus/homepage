<?php snippet('header') ?>

<?php snippet('page-header') ?>


<h1>Über die Fächer</h1>

<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('tags', 'Biologie', ',')
  ]) ?>

<?php snippet('footer') ?>
