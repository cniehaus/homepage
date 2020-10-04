<div class="card mb-3 mt-3">
    <div class="card-body ">
        <h3>Zur Zeit aktuelle Downloads</h3>
        <?php foreach (page('allgemeines/wichtigelinks')->Schule()->toFiles() as $schnellverweis) : ?>
            <?php if ($schnellverweis->Startseite() == 'true') : ?>
                <li class="list-group-item">
                    <a class="btn btn-warning btn-lg btn-block" href="<?= $schnellverweis->url() ?>" role="button">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="<?= $kirby->url('assets') ?>/icons/bootstrap-icons.svg#cloud-download" />
                        </svg> <?= $schnellverweis->Anzeigename() ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach ?>
        <?php foreach (page('allgemeines/wichtigelinks')->Unterricht()->toFiles() as $schnellverweis) : ?>
            <?php if ($schnellverweis->Startseite() == 'true') : ?>
                <li class="list-group-item">
                    <a class="btn btn-warning btn-lg btn-block" href="<?= $schnellverweis->url() ?>" role="button">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="<?= $kirby->url('assets') ?>/icons/bootstrap-icons.svg#cloud-download" />
                        </svg> <?= $schnellverweis->Anzeigename() ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>