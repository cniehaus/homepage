<?php snippet('header') ?>
<?php snippet('page-header') ?>

<div class="container mx-auto">

    <div>
        <?= $page->text()->toBlocks() ?>
    </div>

    <div class="mt-4">
        <?= $page->Subtitletext1() ?>
    </div>


    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div
            class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="flex max-w-xl flex-col items-start justify-between">
                <div class="group relative">
                    <?php foreach ($page->SchulbuchlistenHZ()->toStructure() as $liste): ?>
                        <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
                            <div class="flex justify-between">
                                <dt>
                                    <?= $liste->name() ?>
                                </dt>
                                <dd class="text-gray-900">
                                    <a href="<?= $liste->link()->toFile()->url() ?>">
                                        <button type="button"
                                            class="rounded-full bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                        </button>
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="flex max-w-xl flex-col items-start justify-between">
                <div class="group relative">
                    <?php foreach ($page->SchulbuchlistenRZ()->toStructure() as $liste): ?>
                        <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
                            <div class="flex justify-between">
                                <dt>
                                    <?= $liste->name() ?>
                                </dt>
                                <dd class="text-gray-900">
                                    <a href="<?= $liste->link()->toFile()->url() ?>">
                                        <button type="button"
                                            class="rounded-full bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                        </button>
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="flex max-w-xl flex-col items-start justify-between">
                <div class="group relative">
                    <?php foreach ($page->SchulbuchlistenGZ()->toStructure() as $liste): ?>
                        <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
                            <div class="flex justify-between">
                                <dt>
                                    <?= $liste->name() ?>
                                </dt>
                                <dd class="text-gray-900">
                                    <a href="<?= $liste->link()->toFile()->url() ?>">
                                        <button type="button"
                                            class="rounded-full bg-indigo-600 p-1.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                        </button>
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>

</div>

<?php snippet('footertw') ?>