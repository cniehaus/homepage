<?php snippet('header') ?>


<?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article>
    <h1><?= $article->title()->html() ?></h1>
    <p><?= $article->text()->excerpt(200) ?></p>
    <a href="<?= $article->url() ?>">Mehr lesen…</a>
  </article>

  <?php endforeach ?>


<?php snippet('footer') ?>