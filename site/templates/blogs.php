<?php snippet('header') ?>

<section class="jumbotron text-center">
  <div class="container">
    <h1>Die Fächer stellen sich vor</h1>

    <p class="lead">Hier stellen sich die Fächer und Fachbereiche vor. Klicken Sie auf das Symbolbild, um aktuelle Nachrichten zu lesen!</p>
  </div>
</section>

<section class="content blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($page->children()->listed()->flip() as $article): ?>

  <article>
    <h1><?= $article->title()->html() ?></h1>
    <p><?= $article->text()->excerpt(300) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>



<?php snippet('footer') ?>