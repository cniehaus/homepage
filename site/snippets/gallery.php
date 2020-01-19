<ul class="list-group">
  <?php foreach ($page->images() as $image) : ?>
    <li class="list-group-item">
      <figure class="figure">
        <img alt="<?= $image->alt() ?>" class="rounded img-thumbnail img-fluid" src="<?= $image->url() ?>">
        <figcaption class="figure-caption"><?= $image->bildunterschrift() ?></figcaption>
      </figure>
    </li>
  <?php endforeach ?>
</ul>
