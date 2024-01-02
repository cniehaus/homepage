<?php snippet('header') ?>
<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<div class="container">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 p-4 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <?php foreach ($page->children() as $kontakt): ?>
                <div class="group bg-slate-100 p-4">
                    <div class="mb-4">
                        <img class="card-img-top" src="<?= $kontakt->images()->first()->url() ?>" />
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <?= $kontakt->title() ?>
                        </h3>
                        <p class="mt-3 text-slate-600">
                            <?= $kontakt->position() ?>
                        </p>
                    </div>

                    <?php if ($kontakt->phone()->isNotEmpty() or $kontakt->email()->isNotEmpty()): ?>
                        <div class="">
                            <?php if ($kontakt->phone()->isNotEmpty()): ?>
                                <p>
                                    <i class="bi bi-phone"></i>

                                    <?= $kontakt->phone() ?>
                                </p>
                            <?php endif ?>

                            <?php if ($kontakt->email()->isNotEmpty()): ?>
                                <p>
                                    <i class="bi bi-envelope"></i>

                                    <script type="text/javascript">
                                        var mail = "<?= $kontakt->heading() ?>";
                                        var en = "eu";
                                        var dom = "kgs-rastede";
                                        var at = "@";
                                        document.open();
                                        document.write(unescape("%3Ca class='GrosserLink' href='mailto:" + mail + at + dom + "." + en + "'%3E" + mail + at + dom + "." + en + "%3C/a%3E"));
                                        document.close();
                                    </script>
                                </p>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                </div>


            <?php endforeach ?>

        </div>
    </div>
</div>





<?php snippet('footertw') ?>