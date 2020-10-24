<div class="card">
    <div class="card-body ">
        <h4 class="card-category">Aus der Presse</h4>
        <?php
        $items = page('schule/presse')->pressenachrichten()->toStructure()->sortBy("datum")->flip()->limit(6);

        foreach ($items as $item) : ?>
            <p>
                <a class="card-link" href="<?= $item->link() ?>"><?= $item->name() ?></a>
                (<?= $item->datum()->toDate('d.m.y') ?>)
            </p>


        <?php endforeach ?>

    </div>
</div>