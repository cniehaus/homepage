<div class="card mb-3 mt-3">
    <!-- Jetzt folgen die als 'Topartikel' getaggte Blogs -->
    <h1 class="ml-3">Aktuell im Fokus</h1>
    <div class="container-fluid">
        <?php foreach (page('blogs')
            ->children()
            ->flip() as $subpage) : ?>
            <?php

            // Ist es ein Topartikel?
            if (
                // handelt es sich um einen Artikel,
                // auf der Startseite hervorzuheben ist?
                in_array("Topartikel", $subpage->tags()->split())

                // ist der Artikel noch aktuell?
                and ($subpage->datumStartseite()->toDate('Y-m-d-H-i-s') >= date('Y-m-d-H-i-s'))

            ) : ?>

                <div class="container bg-danger">
                    <h3 class="text-white">
                        <?= $subpage->title() ?>
                    </h3>

                    <p class="text-white">
                    <?= $subpage->Text()->blocks()->excerpt(150) ?>
                        <a class="stretched-link" href="<?= $subpage->url() ?>">weiterlesen...</a>
                    </p>
                </div>


            <?php endif ?>

        <?php endforeach ?>
    </div>
</div>