</main>

<hr>

<!-- Footer container -->
<footer id="page-footer" class="bg-neutral-100 text-center dark:bg-neutral-600 lg:text-left">

    <div class="container xl:max-w-7xl mx-auto px-4 py-4 lg:px-8 lg:py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            <!--Logo der Schule -->
            <nav class="flex flex-col space-y-2">

                <a href="<?= $site->url() ?>" aria-label="logo-bottom">
                    <?= asset('assets/bilder/logo.svg')->read() ?>
                </a>

            </nav>

            <nav class="flex flex-col space-y-3">

                <!--Second links section-->
                <h5 class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                    Kontakte
                </h5>

                <ul class="mb-0 list-none">
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('kontakte/schulleitung')->url() ?>">Schulleitung</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('kontakte/fbl')->url() ?>">Fachbereichsleiter</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('kontakte/sekretariate')->url() ?>">Sekretariate</a></li>

                </ul>
            </nav>

            <!--Third links section-->
            <nav class="flex flex-col space-y-3">
                <h5 class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                    Wichtige Downloads
                </h5>

                <ul class="mb-0 list-none">

                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('allgemeines/schulbuchlisten')->url() ?>">Schulbuchlisten</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('allgemeines/schulordnung')->url() ?>">Schulordnung</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('allgemeines/wichtigelinks')->url() ?>">Informationen und Formulare</a></li>

                </ul>
            </nav>

            <!--Fourth links section-->
            <nav class="flex flex-col space-y-3">
                <h5 class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                    Über die KGS
                </h5>

                <ul class="mb-0 list-none">

                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('schule/geschichte')->url() ?>">Unsere Geschichte</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('allgemeines/anfahrt')->url() ?>">Anfahrt</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="<?= page('allgemeines/impressum')->url() ?>">Impressum</a></li>
                    <li><a class="text-neutral-800 dark:text-neutral-200" href="https://kgs-rastede.l-e-o.eu" target="_blank" rel="noopener">Mensa</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <hr class="my-10 border-dashed border-gray-200 dark:border-gray-700/75" />
    <div
        class="flex flex-col gap-6 text-center text-sm md:flex-row-reverse md:justify-between md:gap-0 md:text-left">
        <nav class="space-x-4">

            <a href="https://bsky.app/profile/kgs-rastede.bsky.social" class="text-white/80 hover:text-[#ea4c89]">
                <svg
                    class="icon-dribbble inline-block size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12 12-5.373 12-12S18.628 0 12 0zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073a42.153 42.153 0 00-.767-1.68c2.31-1 4.165-2.358 5.548-4.082a9.863 9.863 0 012.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68a46.287 46.287 0 00-3.488-5.438A9.894 9.894 0 0112 2.087c2.275 0 4.368.779 6.043 2.072zM7.527 3.166a44.59 44.59 0 013.537 5.381c-2.43.715-5.331 1.082-8.684 1.105a9.931 9.931 0 015.147-6.486zM2.087 12l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48A9.865 9.865 0 012.087 12zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027a39.137 39.137 0 012.043 7.46c-3.349 1.291-6.953.666-9.641-1.433zm11.586.43a41.098 41.098 0 00-1.92-6.897c1.876-.265 3.94-.196 6.199.196a9.923 9.923 0 01-4.279 6.701z"></path>
                </svg>
            </a>

            <a href="https://www.instagram.com/kgsrastede_offiziell/" class="text-gray-400 hover:text-[#405de6]">
                <svg
                    class="icon-instagram inline-block size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
                </svg>
            </a>


        </nav>
        <div class="text-gray-500 dark:text-gray-400/80">
            <span class="font-medium">
                <div class="col" id="copyrightText">
                    <script>
                        document.getElementById("copyrightText").innerHTML = `Copyright &#xA9; ${new Date().getFullYear()} KGS Rastede ; All Rights Reserved.`;
                    </script>
                </div>
            </span>
        </div>
    </div>
</footer>

<?php snippet('skripte-im-footer') ?>


</body>

</html>