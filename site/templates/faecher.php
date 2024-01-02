<?php snippet('header') ?>

<?php snippet('page-header') ?>

<div class="container mx-auto">
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">

    <?php foreach ($page->children() as $fb): ?>

      <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mt-2">
        <dl class="flex flex-wrap">
          <div class="flex-auto pl-6 pt-6">
            <?php
            $images = $fb->symbolbild()->toFiles();
            foreach ($images as $image): ?>
              <img src="<?= $image->url() ?>" alt="">
            <?php endforeach ?>
            <dt class="text-2xl mt-2 font-semibold leading-6 text-gray-900">
              <?= $fb->title() ?>
            </dt>
            <dd class="mt-1 text-xl leading-6 text-gray-900">
              <?= $fb->bezeichnung() ?>
              <?= $fb->namefbl() ?>
            </dd>
          </div>
        </dl>
        <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
          <?php
          $relatedPages = $fb->pages()->toPages();
          foreach ($relatedPages as $relatedPage): ?>
            <div class="mt-6 flex w-full flex-none gap-x-4 border-t border-gray-900/5 px-6 pt-6 hover:bg-slate-100">
              <a href="<?= $relatedPage->url() ?>">
                <?= $relatedPage->title() ?>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>



<?php snippet('footertw') ?>