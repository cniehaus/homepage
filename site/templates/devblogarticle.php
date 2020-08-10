<?php snippet('header-devblog') ?>


<main role="main">
    <div class="container w-full md:max-w-3xl mx-auto pt-20">

      <div class="w-full px-4 md:px-6 text-xl text-gray-700 leading-normal">

        <!--Title-->
        <div class="font-sans">
          <span class="text-base md:text-sm text-teal-500 font-bold">&lt;<span> <a href="<?= page('devblog')->url() ?>" class="text-base md:text-sm text-teal-500 font-bold no-underline hover:underline">Zurück zur Übersicht</a></p>
              <h1 class="font-bold font-sans break-normal text-gray-800 pt-6 pb-2 text-3xl md:text-4xl"><?= $page->title() ?></h1>
              <h1 class="font-bold font-sans break-normal text-gray-600 pt-6 pb-2 text-2xl md:text-2xl"><?= $page->heading() ?></h1>
              <p class="text-sm md:text-base text-gray-600">Veröffentlich am <?= $page->date()->toDate("d.m.Y") ?></p>
        </div>


        <p class="py-6">
          <?= $page->intro()->kirbytext() ?>
        </p>

        <p class="py-6">

          <?= $page->text()->blocks() ?>

        </p>

      </div>

      <!--Tags -->
      <div class="p-6">
        <div class="flex items-center">

          <svg class="bi" width="24" height="24">
            <use xlink:href="<?= $kirby->url('assets') ?>/icons/bootstrap-icons.svg#tags" />
          </svg>
          <?php foreach ($page->tags()->split() as $tag) : ?>
            <a href="<?= url('devblog', ['params' => ['tag' => $tag]]) ?>">
              <span class="inline-block bg-blue-200 text-blue-800 text-lg px-2 rounded-full uppercase font-semibold tracking-wide"><?= $tag ?></span>
            </a>
          <?php endforeach ?>
        </div>
      </div>
      <!--Divider-->
      <hr class="border-b-2 border-gray-400 mb-8 mx-4">



    </div>
    <!--/container-->


</main>

<?php snippet('footer-tailwind') ?>