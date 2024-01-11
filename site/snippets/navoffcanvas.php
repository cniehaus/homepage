<?php $kategorien = page('navbar')->navbar()->toStructure() ?>
<?php $count = 1 //Wird für die id der Kategorien verwendet, damit diese einmalig bleiben 
    ?>

<?php if ($kategorien->isNotEmpty()): //Erst die Grundstruktur für die nav 
        ?>


    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary" aria-label="Main navigation">

        <div class="container-fluid">
            <!-- Hier fehlt noch das Logo -->


            <a class="navbar-brand" href="<?= $site->url() ?>">KGS Rastede</a>

            <button class="navbar-toggler" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php //Jetzt kommen alle Kategorien
                        snippet('navkategorien', ['items' => $kategorien, 'count' => $count]) ?>
                </ul>

                <!-- Search -->
                <form action="/search">
                    <input type="text"
                        class="block w-full rounded-lg border border-gray-200 py-2 text-sm leading-5 placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:border-gray-700 dark:bg-gray-900/25 dark:focus:border-indigo-500"
                        id="search" name="q" placeholder="Suche..." />
                </form>

                <!-- END Search -->
            </div>
        </div>
    </nav>


<?php endif ?>