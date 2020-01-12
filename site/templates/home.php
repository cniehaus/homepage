<?php snippet('header') ?>

<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('featured', true)
  ]) ?>

<?php snippet('footer') ?>