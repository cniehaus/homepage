<a href="<?= $subpage->url() ?>" class="group relative block">
    <div
        class="absolute inset-0 scale-0 rounded-sm bg-gray-100 opacity-0 transition group-hover:scale-110 group-hover:opacity-100 group-active:bg-indigo-100 dark:bg-gray-800 dark:group-active:bg-indigo-600/25"></div>
    <div class="relative">
        <p
            class="mt-3 mb-1 text-sm font-medium text-gray-600 dark:text-red-400">
            <span class="font-medium"><?= $subpage
              ->date()
              ->toDate('d.m.Y') ?></span>
        </p>
        <h4
            class="mb-2 text-lg leading-6 font-bold text-gray-800 dark:text-gray-200">
            <?= $subpage->title() ?>
        </h4>
        <p
            class="mt-3 mb-1 text-sm font-medium text-gray-600 dark:text-gray-400">
            <span class="font-medium"> <?= $subpage
              ->Text()
              ->toBlocks()
              ->excerpt(250) ?>
            </span>
        </p>
    </div>
</a>