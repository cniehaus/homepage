<div class="col-md-5 mt-4">
    <div class="card-header">

        <?php if ($subpage->hasImages() > 0) : ?>
            <img src="<?= $subpage->images()->first()->url() ?>" class="card-img-top" alt="<?= $subpage->images()->first()->alt() ?>">
        <?php else : ?>
            <!-- <img src="<?= $kirby->url('assets') ?>/logo-kgs-medium.jpg" class="img img-raised" alt="Logo der KGS"> -->
        <?php endif ?>

    </div>
</div>