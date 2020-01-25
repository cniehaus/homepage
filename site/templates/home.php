<?php snippet('header') ?>




<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= $kirby->url('assets') ?>/img/bg3.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1><?= $page->title() ?></h1>
          <h3 class="title text-center">Die Schule in Rastede</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <?php foreach (page('blogs')->children()->filterBy('featured', true) as $subpage) : ?>
        <div class="card mb-2">
          <div class="row no-gutters">
            <div class="col-md-2">
              <?php if ($subpage->hasImages() > 0) : ?>
                <img src="<?= $subpage->images()->first()->url() ?>" class="card-img" alt="...">
              <?php else : ?>
                <h5>kein bild</h5>
              <?php endif ?>
            </div>
            <div class="col-md-2">
              <div class="card-body">
                <h3 class="card-title"><?= $subpage->title() ?></h3>
                <p class="card-text"><?= $subpage->Text()->blocks()->excerpt(150) ?></p>
                <a href="<?= $subpage->url() ?>" class="btn btn-primary">...weiterlesen</a>

              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>