<!-- Main Header Section: With Mega Menu -->
<div
    class="relative bg-white dark:bg-gray-900 dark:text-gray-100">
    <!-- Header -->
    <header
        x-data="{ mobileNavOpen: false }"
        id="page-header"
        class="relative flex flex-none items-center py-8">
        <!-- Main Header Content -->
        <div
            class="relative container mx-auto flex items-center justify-between px-4 lg:px-8 xl:max-w-7xl">
            <!-- Left Section -->
            <div class="flex items-center gap-4">
                <!-- Logo -->
                <a
                    href="<?= $site->url() ?>"
                    class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300">
                    <?= asset('assets/bilder/logo_square.svg')->read() ?>

                    <span>KGS Rastede</span>
                </a>
                <!-- END Logo -->

                <!-- Mega Menu visible on large screens -->
                <ul class="mt-0.5 hidden items-center lg:flex">
                    <!-- Kontakt Kategorie -->
                    <?php snippet(
                        'menu/menu-category',
                        ['title' => 'Kontakt'],
                        slots: true,
                    ); ?>
                    <?php slot('menuContent'); ?>
                    <div
                        class="grid scale-95 grid-cols-4 opacity-0 transition duration-500 ease-out group-hover:scale-100 group-hover:opacity-100">

                        <?php
                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/unterricht/ag-frieden", 'name' => "Anfahrt"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulleitung"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Fachbereichsleiter"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Sekretariate"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Hausmeister"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Schüler:innen Vertretung (SV)"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulpersonalrat (SPR)"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Gleichstellungsbeauftragte"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulelternrat (SER)"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Förderverein"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Links',
                            'menuItems' => $menuItems,
                        ]);

                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/unterricht/ag-frieden", 'name' => "Leitbild"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulprogramm"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulvorstand"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Unsere Geschichte"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulvorstand"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Übergang Grundschule / KGS"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Die drei Schulzweige"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Oberstufe"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Abschlüsse an der KGS"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Profile und Wahlen"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Zuständigkeiten / Organigram"],

                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Ausbildungsschule"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Unsere Schule in der Presse"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Rechts',
                            'menuItems' => $menuItems,
                        ]);
                        ?>
                        <div
                            class="col-span-2 space-y-6 bg-gray-50 p-8 dark:bg-gray-700/25">
                            <h4
                                class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                                Aktuelles
                            </h4>
                            <div class="grid grid-cols-2 gap-4 xl:gap-8">
                                <a
                                    href="javascript:void(0)"
                                    class="block space-y-3 text-sm font-semibold transition-opacity hover:text-kgs-blue hover:opacity-90 dark:hover:text-kgs-lblue">
                                    <img
                                        src="https://cdn.tailkit.com/media/placeholders/photo-8pb7Hq539Zw-300x180.jpg"
                                        class="rounded-lg"
                                        alt="Preview Image" />
                                    <h4>
                                        How to create the best web apps online with our app
                                    </h4>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="block space-y-3 text-sm font-semibold transition-opacity hover:text-kgs-blue hover:opacity-90 dark:hover:text-kgs-lblue">
                                    <img
                                        src="https://cdn.tailkit.com/media/placeholders/photo-TxXuh_hAFd8-300x180.jpg"
                                        class="rounded-lg"
                                        alt="Preview Image" />
                                    <h4>
                                        Inspiring results from your first work week online
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endslot(); ?>
                    <?php endsnippet(); ?>
                    <!-- END Kontakt Kategorie -->

                    <!-- Ueber die Schule Kategorie -->
                    <?php snippet(
                        'menu/menu-category',
                        ['title' => 'Über die Schule'],
                        slots: true,
                    ); ?>
                    <?php slot('menuContent'); ?>
                    <div
                        class="grid scale-95 grid-cols-4 opacity-0 transition duration-500 ease-out group-hover:scale-100 group-hover:opacity-100">

                        <?php
                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Links',
                            'menuItems' => $menuItems,
                        ]);

                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Mitte',
                            'menuItems' => $menuItems,
                        ]);

                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                            ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                            ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Rechts',
                            'menuItems' => $menuItems,
                        ]);
                        ?>

                        <div class="space-y-6 bg-gray-50 p-8 dark:bg-gray-700/25">
                            <h4
                                class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                                From the docs
                            </h4>
                            <a
                                href="javascript:void(0)"
                                class="block space-y-3 text-sm font-semibold transition-opacity hover:text-kgs-blue hover:opacity-90 dark:hover:text-kgs-lblue">
                                <div
                                    class="flex h-32 items-center justify-center rounded-lg border border-gray-200 bg-white text-kgs-blue dark:border-gray-700/75 dark:bg-gray-900/50 dark:text-kgs-lblue">
                                    <svg
                                        class="hi-mini hi-document-text inline-block size-10"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            fill-rule="evenodd"
                                            d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm2.25 8.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 3a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4>Get Started with ease</h4>
                            </a>
                        </div>
                    </div>
                    <?php endslot(); ?>
                    <?php endsnippet(); ?>
                    <!-- END Ueber die Schule Kategorie -->

                    <!-- Unterricht und Schulleben Kategorie -->
                    <?php snippet(
                        'menu/menu-category',
                        ['title' => 'Unterricht und Schulleben'],
                        slots: true,
                    ); ?>
                    <?php slot('menuContent'); ?>
                    <div
                        class="grid scale-95 grid-cols-4 opacity-0 transition duration-500 ease-out group-hover:scale-100 group-hover:opacity-100">

                        <?php
                        // prettier-ignore
                        $menuItems = [
                            ['pfad' => "/allgemeines/wichtigelinks", 'name' => "Informationen und Formular"],
                            ['pfad' => "/allgemeines/schulbuchlisten", 'name' => "Schulbuchlisten"],
                            ['pfad' => "/allgemeines/bus", 'name' => "Buszeiten"],
                            ['pfad' => "/allgemeines/zeitraster", 'name' => "Zeitraster"],
                            ['pfad' => "/suche", 'name' => "Suche"],
                            ['pfad' => "https://wiki.kgs-rastede.de/de/eltern/elterninfos_kompakt", 'name' => "Eltern-Wiki"]
                        ];
                        snippet('menu/menu-category-column', [
                            'title' => 'Desktop Links',
                            'menuItems' => $menuItems,
                        ]);
                        ?>

                        <div
                            class="col-span-3 space-y-6 bg-gray-50 p-8 dark:bg-gray-700/25">
                            <h4
                                class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                                Das Wichtigste für Eltern
                            </h4>
                            <div class="grid grid-cols-3 gap-4 xl:gap-8">
                                <a
                                    href="https://wiki.kgs-rastede.de/de/eltern"
                                    class="block space-y-3 text-sm font-semibold transition-opacity hover:text-kgs-blue hover:opacity-90 dark:hover:text-kgs-lblue">
                                    <div
                                        class="flex h-32 items-center justify-center rounded-lg border border-gray-200 bg-white text-emerald-500 dark:border-gray-700/75 dark:bg-gray-900/50 dark:text-emerald-400">
                                        <svg
                                            class="hi-mini hi-users inline-block size-10"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                        </svg>
                                    </div>
                                    <h4>
                                        Elterninformationen
                                    </h4>
                                </a>

                            </div>
                        </div>
                    </div>
                    <?php endslot(); ?>
                    <?php endsnippet(); ?>
                    <!-- END Unterricht und Schulleben Kategorie -->

                    <li class="group">
                        <a
                            href="/allgemeines/kalender "
                            class="inline-flex h-8 items-center gap-1 px-2.5 text-sm font-semibold text-gray-900 group-hover:text-kgs-blue dark:text-gray-100 dark:group-hover:text-kgs-lblue">
                            <span>Kalender</span>
                        </a>
                    </li>
                </ul>
                <!-- END Mega Menu visible on large screens -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="flex items-center">

                <!-- Open Mobile Navigation -->
                <div class="ml-3 lg:hidden">
                    <button
                        x-on:click="mobileNavOpen = true"
                        type="button"
                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-transparent dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                        aria-controls="tkMobileNav">
                        <svg
                            class="hi-mini hi-bars-3 inline-block size-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true">
                            <path
                                fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <!-- END Open Mobile Navigation -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Main Header Content -->

        <!-- Mobile Navigation -->
        <nav
            x-cloak
            x-show="mobileNavOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-50 translate-x-full"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-50 translate-x-full"
            id="tkMobileNav"
            class="fixed top-0 right-0 bottom-0 z-50 w-80 overflow-auto bg-white/95 shadow-lg lg:hidden dark:bg-gray-800/95"
            tabindex="-1"
            aria-labelledby="tkMobileNavLabel"
            x-bind:aria-modal="mobileNavOpen ? 'true' : null"
            x-bind:role="mobileNavOpen ? 'dialog' : null">
            <div class="flex items-center justify-between p-6">
                <!-- Logo -->
                <a
                    id="tkMobileNavLabel"
                    href="<?= $site->url() ?>"
                    class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300">
                    <?= asset('assets/bilder/logo.svg')->read() ?>

                    <span>KGS Rastede</span>
                </a>
                <!-- END Logo -->

                <!-- Close Mobile Navigation -->
                <button
                    x-on:click="mobileNavOpen = false"
                    type="button"
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700">
                    <svg
                        class="hi-mini hi-x-mark -mx-0.5 inline-block size-5"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true">
                        <path
                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
                <!-- END Close Mobile Navigation -->
            </div>
            <div class="h-px bg-gray-200/75 dark:bg-gray-700/75"></div>
            <div class="flex flex-col gap-8 px-6 py-6">
                <div class="grid grid-cols-2 gap-6">
                    <h3 class="col-span-2 font-semibold">Kontakt</h3>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Kontakt linke Spalte
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>
                        </nav>
                    </div>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Kontakt rechte Spalte
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <h3 class="col-span-2 font-semibold">Über die Schule</h3>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Links
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>

                        </nav>
                    </div>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Mitte
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "Leitbild"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulprogramm"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulvorstand"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Unsere Geschichte"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulvorstand"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Übergang Grundschule / KGS"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Die drei Schulzweige"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Oberstufe"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Abschlüsse an der KGS"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Profile und Wahlen"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Zuständigkeiten / Organigram"],

                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Ausbildungsschule"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Unsere Schule in der Presse"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>




                        </nav>
                    </div>
                    <div class="col-span-2 space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Rechts
                        </h4>
                        <nav class="flex flex-col gap-3">

                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "Anfahrt"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulleitung"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Fachbereichsleiter"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Sekretariate"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Hausmeister"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Schüler:innen Vertretung (SV)"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulpersonalrat (SPR)"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Gleichstellungsbeauftragte"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Schulelternrat (SER)"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Förderverein"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <h3 class="col-span-2 font-semibold">Service und Downloads</h3>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Learn
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>

                        </nav>
                    </div>
                    <div class="space-y-2">
                        <h4
                            class="text-xs font-semibold tracking-wider text-kgs-blue uppercase dark:text-kgs-lblue">
                            Downloads
                        </h4>
                        <nav class="flex flex-col gap-3">
                            <?php
                            // prettier-ignore
                            $menuItems = [
                                ['pfad' => "/unterricht/ag-frieden", 'name' => "AG 'Für den Frieden'"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"],
                                ['pfad' => "/unterricht/streitschlichter", 'name' => "Streitschlichter"],
                                ['pfad' => "/unterricht/sanitaetsdienst", 'name' => "Schulsanitätsdienst"]
                            ];

                            foreach ($menuItems as $item) {
                                snippet('menu/menu-item', $item);
                            }
                            ?>
                        </nav>
                    </div>
                </div>
            </div>

        </nav>
        <!-- END Mobile Navigation -->

        <!-- Mobile Navigation Backdrop -->
        <div
            x-cloak
            x-show="mobileNavOpen"
            x-on:click="mobileNavOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-40 bg-gray-900/20 backdrop-blur-xs will-change-auto lg:hidden dark:bg-gray-900/80"></div>
        <!-- END Mobile Navigation Backdrop -->
    </header>
    <!-- END Header -->


</div>
<!-- END Main Header Section: With Mega Menu -->