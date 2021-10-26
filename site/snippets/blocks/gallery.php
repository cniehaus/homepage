<?php

/** @var \Kirby\Cms\Block $block */ ?>


<?php foreach ($block->images()->toFiles() as $image) : ?>
    <img src="<?= $image->url() ?>" class="rounded mx-auto d-block" alt="<?= $image->beschreibung() ?>">
<?php endforeach ?>