<?php /* $links_bilder: Die URL zur Seite => Der Name des Bildes (im Ordner assets/bilder), $alt: Alternativtext für das Bild
!!Beide arrays müssen gleich lang sein!! */
$links_bilder =
    array(
        'https://thalia.webuntis.com/WebUntis/?school=kgs-rastede' => 'webuntis.png',
        'https://www.schuelerzeitung.kgs-rastede.de/' => 'irregulaer.png',
        'https://kgs-rastede.schulserver.de/iserv' => 'IServ_Logo_klein_RGB_clean.svg',
        'foerderverein/ueber_uns' => 'foerderverein.png',
        'https://www.opc-asp.de/kgs-rastede/menuplan.php?VMP' => 'mensa.png'
    );
$alt =
    array(
        'Webuntis',
        'Schülerzeitung',
        'IServ',
        'Förderverein',
        'Mensa'
    );

?>


<div class="container">
    <div class="row equal">
        <?php foreach ($links_bilder as $link => $bild) : ?>
            <div class="col-sm-4 d-flex pb-3">
                <div class="card">
                    <a href="<?= $link ?>"target="_blank">
                        <img src="<?= $kirby->url('assets') ?>/bilder/<?= $bild ?>" class="img-fluid">
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>