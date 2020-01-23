<?php snippet('header') ?>

<h1>Aktuelles aus der KGS</h1>

<?php foreach (page('blogs')->children()->filterBy('featured', true) as $subpage) : ?>

<div class="card mb-2">

  <div class="row no-gutters">
    <div class="col-md-2">
        <?php if( $subpage->hasImages() > 0 ) : ?>
             <img src="<?= $subpage->images()->first()->url() ?>" class="card-img" alt="..."> 
        <?php else: ?>
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



<?php snippet('footer') ?>