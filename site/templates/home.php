<?php snippet('header') ?>

<?php foreach (page('blogs')->children()->filterBy('featured', true) as $subpage) : ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $subpage->title() ?></h5>
                    <p class="card-text"><?= $subpage->Text()->excerpt(150) ?></p>
                    <a href="<?= $subpage->url() ?>" class="btn btn-primary">...weiterlesen</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


<?php snippet('footer') ?>