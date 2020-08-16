<div class="card my-4">
    <div class="card-body">
        <h3 class="card-title"><?= $subpage->title() ?></h3>

        <p>
            <?= $subpage->text()->blocks() ?>
        </p>

        <?php if ($file = $subpage->downloads()->toFile()) : ?>
            <a href="<?php echo $file->url() ?>" download="<?php echo $file->filename() ?>" class="btn btn-primary">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="<?= $kirby->url('assets') ?>/icons/bootstrap-icons.svg#info-square" />
                </svg>
                <?php echo $file->name() ?>

            </a>
        <?php endif ?>
    </div>
</div>