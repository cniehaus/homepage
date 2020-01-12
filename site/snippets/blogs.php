<?= $page->text()->kirbytext() ?>

  <?php foreach($blogs as $blog): ?>

  <article>
    <h1><?= $blog->title()->html() ?></h1>
    <p><?= $blog->text()->excerpt(200) ?></p>
    <a href="<?= $blog->url() ?>">Mehr lesen…</a>
  </article>

  <?php endforeach ?>