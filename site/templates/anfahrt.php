<?php snippet('header') ?>
<?php snippet('page-header') ?>

<div class="container">
    <div class="col-md-8 ms-auto me-auto text-center">
        <h2 class="title"> <?= $page->main_text() ?> </h2>
        <h5 class="description"> <?= $page->anfahrt_text() ?> </h5>
    </div>

    <div class="content">
        <div class="row">
                <div class="col-md-auto ms-auto me-auto text-auto">
                    <h6> <?= $page->adresse_s1()->toBlocks() ?> </h6>
                </div>

                <div class="col-md-auto ms-auto me-auto text-auto">
                    <h6> <?= $page->adresse_s2()->toBlocks() ?> </h6>
                </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
                <div class="col-md-5 ms-auto me-auto text-start">
                    <h5 class="description"> <?= $page->anfahrt_text_s1()->toBlocks() ?> </h5>
                </div>
                <div class="col-md-5 ms-auto me-auto text-auto">
                    <h5 class="description"> <?= $page->anfahrt_text_s2()->toBlocks() ?> </h5>
                </div>
        </div>
    </div>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


    <div id="mapid" style="height: 400px;"></div>
    <script>
        var mymap = L.map('mapid').setView([53.24111, 8.194932], 15);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        }).addTo(mymap);

        L.marker([53.2442, 8.1963]).addTo(mymap)
            .bindPopup("<b>Hauptgebäude</b><br />Jahrgänge 7-13")
            .openPopup();

        L.marker([53.24111, 8.194932]).addTo(mymap)
            .bindPopup("<b>Feldbreite</b><br />Jahrgänge 5-6.")
            .openPopup();


        var popup = L.popup();

        /*     Diese Funktion ist momentan deaktiviert, da Sie unnötig ist
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);
        */
    </script>
</div>

<?php snippet('footer') ?>