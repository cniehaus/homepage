<?php if ($item->tags()->isNotEmpty()): ?>
    <i class="bi bi-tags"></i>

    <?php foreach ($item->tags()->split() as $tag): ?>
        <div
            class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-kgsblue-light text-white rounded-full">

            <a href="<?= url('blogs', ['params' => ['tag' => urlencode($tag)]]) ?>">

                <?= $tag ?>
            </a>
        </div>
    <?php endforeach ?>
<?php endif ?>