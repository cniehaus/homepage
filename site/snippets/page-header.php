<main role="main">







    <?php
    if ($image = $page->hintergrundbild()->toFile()) : ?>


      <div class="p-5 text-center bg-image" style="
            background-image: url('<?= $image->url() ?>');
            height: 400px;">

      
    <?php else : ?>
      
      <div class="p-5 text-center bg-image" style="
      background-image: url('<?= $kirby->url('assets') ?>/img/banner_eng.jpg');
      ">
      
    <?php endif ?>


    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3"><?= $page->title() ?></h1>
          <h4 class="mb-3"><?= $page->subtitle() ?></h4>
        </div>
      </div>
    </div>
  </div>





  <div class="titelfeld">
    <div class="container">
      <h1><?= $page->title() ?>
        <small class="text-muted"><?= $page->subtitle() ?></small>
      </h1>
    </div>
  </div>
  </div>


  <!-- Ab hier der richtige Inhalt, der auf jeder Seite individuell sein kann -->
  <div class="container">