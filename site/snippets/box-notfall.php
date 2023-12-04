<?php if (page('wichtige_informationen')->toggle()->bool() === true) :
    /* 
        An besonderen Tagen (Schneefrei, Heizungsbruch, ...) soll ganz schnell
        ein Banner angezeigt werden, damit die Eltern schnell informiert werden können
    */
?>

    <div class="bg-red-200 dark:bg-gray-800/50">
        <div class="container p-2 lg:p-4">
            <div class="text-center">
                <div class="grow">
                    <div class="bg-red-600 text-black px-6 pt-10 pb-8 shadow-xl rounded-2xl mx-4">
                        <h1><?php page('wichtige_informationen/')->textTitel() ?></h1>
                        <div class="text-black">
                            <?= page('wichtige_informationen/')->text()->kt() ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php endif ?>