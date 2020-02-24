<?php snippet('header') ?>
<?php snippet('page-header') ?>


<h1>default.php</h1>

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-9">
                <?= $page->text()->kirbytext() ?>
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