<?php snippet('header') ?>


<h1><?= $page->title()->kirbytext() ?></h1>
<h2><?= $page->heading()->kirbytext() ?></h2>


<?= $page->text()->kirbytext() ?>


<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <?php foreach ($page->images() as $image) : ?>
        <div class="carousel-item active">
          <img src="<?= $image->url() ?>" class="d-block w-50" alt="...">
        </div>
      <?php endforeach ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<h3>Tags</h3>

<ul>
  <?php foreach ($page->tags()->split() as $category) : ?>
    <li><?= $category ?></li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>