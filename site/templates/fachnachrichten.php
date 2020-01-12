<?php snippet('header') ?>


<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('tags', 'berlin', ',')
  ]) ?>

<?php snippet('footer') ?>
