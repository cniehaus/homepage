<?php snippet('header') ?>

<section class="jumbotron text-center">
  <div class="container">
    <h1>Die Fächer stellen sich vor</h1>

    <p class="lead">Hier stellen sich die Fächer und Fachbereiche vor. Klicken Sie auf das Symbolbild, um aktuelle Nachrichten zu lesen!</p>
  </div>
</section>

<section class="content blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php $index = 0; foreach ($page->children()->listed()->flip() as $subpage) : $index++ ?>


    <?php if ($index % 2 == 0) : ?>

      <div class="col-md-5">
        <div class="card-header card-header-image">
          <?php if ($subpage->hasImages() > 0) : ?>
            <img src="<?= $subpage->images()->first()->url() ?>" class="img img-raised" alt="<?= $subpage->images()->first()->alt() ?>">
          <?php else : ?>
            <img src="<?= $kirby->url('assets') ?>/logo-kgs.jpg" class="img img-raised" alt="Logo der KGS">
          <?php endif ?>
        </div>
      </div>
      <div class="col-md-7">
        <h6 class="card-category text-info">Artikel #<?= $index ?></h6>
        <h3 class="card-title">
          <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
        </h3>
        <p class="card-description">
          <?= $subpage->Text()->blocks()->excerpt(250) ?>
          <a href="<?= $subpage->url() ?>">...weiterlesen</a>
        </p>
        <p class="author">
          by
          <a href="#pablo">
            <b><?= $subpage->author() ?></b>
          </a> Datum: <?= $subpage->date()->toDate("d.m.Y") ?>
        </p>
      </div>

    <?php else : ?>



      <div class="card card-plain card-blog">
        <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">
              <a href="#pablo"><?= $subpage->title() ?></a>
            </h3>
            <p class="card-description">
              <?= $subpage->Text()->blocks()->excerpt(250) ?>
              <a href="<?= $subpage->url() ?>">...weiterlesen</a>
            </p>
            <p class="author">
              by
              <a href="#pablo">
                <b><?= $subpage->author() ?></b>
              </a> Datum: <?= $subpage->date()->toDate("d.m.Y") ?>
            </p>
          </div>
          <div class="col-md-5">
            <div class="card-header card-header-image">

              <?php if ($subpage->hasImages() > 0) : ?>
                <img src="<?= $subpage->images()->first()->url() ?>" class="img img-raised" alt="<?= $subpage->images()->first()->alt() ?>">
              <?php else : ?>
                <img src="<?= $kirby->url('assets') ?>/logo-kgs.jpg" class="img img-raised" alt="Logo der KGS">
              <?php endif ?>


            </div>
          </div>
        </div>
      </div>


    <?php endif ?>



  <?php endforeach ?>

</section>



<?php snippet('footer') ?>