<?php snippet('header'); ?>

<?php snippet('page-header'); ?>

<!-- Blog List Section: In Grid Alternate -->
<div class="bg-white dark:bg-gray-900 dark:text-gray-100">
  <div
    class="container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">

    <!-- Latest Posts -->
    <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:gap-10">
      <?php foreach ($articles as $article) {
        snippet('blogkarte-einfach', [
          'subpage' => $article,
        ]);
      } ?>
    </div>
    <!-- END Latest Posts -->
  </div>
</div>
<!-- END Blog List Section: In Grid Alternate -->



<div class="d-flex justify-content-center">
  <?php
  $pagination = $articles->pagination();

  snippet('pagination', [
    'pagination' => $pagination,
  ]);
  ?>
</div>

<?php snippet('footertw'); ?>
