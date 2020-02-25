<?php snippet('header') ?>
<?php snippet('page-header') ?>

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-9">
            <div class="container-md-flex"><?= $page->text()->kirbytext() ?></div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <?= $page->text()->kirbytext() ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php snippet('footer') ?>