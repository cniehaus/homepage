<?php snippet('header') ?>
<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<div class="container">


<a href="https://youtu.be/SEpJkA6Fjpg" class="link-primary">.</a>

  <h2>Projekte:</h2>

  <?php
  foreach (page('blogs')
    ->children()
        ->listed()
    ->filterBy('tags', 'Projektwoche', ',')
    ->flip() as $subpage) :

    snippet('blogkarte', ['subpage' => $subpage]);
  ?>

  <?php endforeach ?>

</div>

<?php snippet('footer') ?>