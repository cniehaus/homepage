<?php snippet('header') ?>
<?php snippet('page-header') ?>

<div class="section section-gray cd-section" id="footers">
<!--     *********    END MORPHING CARDS      *********      -->

<div class="row">
<div class="col-md-6 col-lg-4">
  <div class="rotating-card-container manual-flip">
    <div class="card card-rotate bg-warning">
      <div class="front">
        <div class="card-body">
          <h5 class="card-category card-category-social">
            <i class="material-icons">receipt</i> Elternsprechtag
          </h5>
          <h4 class="card-title">
            <a href="#pablo">Der Elternsprechtag findet am 30.2.2020 statt</a>
          </h4>
          <p class="card-description">
            Dort sprechen Eltern mit Lehrern
          </p>
          <div class="stats text-center">
            <button type="button" name="button" class="btn btn-white btn-fill btn-round btn-rotate">
              <i class="material-icons">refresh</i> umdrehen
            </button>
          </div>
        </div>
      </div>
      <div class="back">
        <div class="card-body">
          <br>
          <h5 class="card-title">
            Elternsprechtag 2020
          </h5>
          <p class="card-description">
            Treffen Sie uns im Forum
          </p>
          <div class="stats text-center">
            <a href="#pablo" class="btn btn-white btn-round">
              <i class="material-icons">subject</i> ...weiterlesen
            </a>
            <br>
            <div class="stats text-center">
              <button type="button" name="button" class="btn btn-white btn-fill btn-round">
                <i class="material-icons">attachment</i> Infozettel runterladen
              </button>
            </div>
            <br>
            <button type="button" name="button" class="btn btn-white btn-round btn-rotate">
              <i class="material-icons">refresh</i> Back...
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- -->

<div class="col-md-6 col-lg-4">
  <div class="rotating-card-container manual-flip">
    <div class="card card-rotate bg-warning">
      <div class="front">
        <div class="card-body">
          <h5 class="card-category card-category-social">
            <i class="material-icons">receipt</i> Elternsprechtag
          </h5>
          <h4 class="card-title">
            <a href="#pablo">Der Elternsprechtag findet am 30.2.2020 statt</a>
          </h4>
          <p class="card-description">
            Dort sprechen Eltern mit Lehrern
          </p>
          <div class="stats text-center">
            <button type="button" name="button" class="btn btn-white btn-fill btn-round btn-rotate">
              <i class="material-icons">refresh</i> umdrehen
            </button>
          </div>
        </div>
      </div>
      <div class="back">
        <div class="card-body">
          <br>
          <h5 class="card-title">
            Elternsprechtag 2020
          </h5>
          <p class="card-description">
            Treffen Sie uns im Forum
          </p>
          <div class="stats text-center">
            <a href="#pablo" class="btn btn-white btn-round">
              <i class="material-icons">subject</i> ...weiterlesen
            </a>
            <br>
            <div class="stats text-center">
              <button type="button" name="button" class="btn btn-white btn-fill btn-round">
                <i class="material-icons">attachment</i> Infozettel runterladen
              </button>
            </div>
            <br>
            <button type="button" name="button" class="btn btn-white btn-round btn-rotate">
              <i class="material-icons">refresh</i> Back...
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- -->

<div class="col-md-6 col-lg-4">
  <div class="rotating-card-container manual-flip">
    <div class="card card-rotate bg-warning">
      <div class="front">
        <div class="card-body">
          <h5 class="card-category card-category-social">
            <i class="material-icons">receipt</i> Elternsprechtag
          </h5>
          <h4 class="card-title">
            <a href="#pablo">Der Elternsprechtag findet am 30.2.2020 statt</a>
          </h4>
          <p class="card-description">
            Dort sprechen Eltern mit Lehrern
          </p>
          <div class="stats text-center">
            <button type="button" name="button" class="btn btn-white btn-fill btn-round btn-rotate">
              <i class="material-icons">refresh</i> umdrehen
            </button>
          </div>
        </div>
      </div>
      <div class="back">
        <div class="card-body">
          <br>
          <h5 class="card-title">
            Elternsprechtag 2020
          </h5>
          <p class="card-description">
            Treffen Sie uns im Forum
          </p>
          <div class="stats text-center">
            <a href="#pablo" class="btn btn-white btn-round">
              <i class="material-icons">subject</i> ...weiterlesen
            </a>
            <br>
            <div class="stats text-center">
              <button type="button" name="button" class="btn btn-white btn-fill btn-round">
                <i class="material-icons">attachment</i> Infozettel runterladen
              </button>
            </div>
            <br>
            <button type="button" name="button" class="btn btn-white btn-round btn-rotate">
              <i class="material-icons">refresh</i> Back...
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</row>

</div>


<!-- -->

<div class="section section-gray cd-section" id="blogs">

<div class="blogs-1" id="blogs-1">
  <div class="container">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <h2 class="title">Aktuelle Nachrichten</h2>
        <br>

        <!--  
              Jetzt werden die Elemente angefügt. 
              -->

        <div class="card card-plain card-blog">
          <div class="row">

            <!-- der ersten beiden Zeilen sind immer gleich -->



            <?php $index = 0;
            foreach (page('blogs')->children()->filterBy('featured', true) as $subpage) : $index++ ?>

              <!--  
                % 2 testet letztlich, ob der Wert in $index gerade ist oder nicht
                Das heißt: "glatt durch 2 teilbar".

                Ich möchte effektiv bei jedem zweiten Artikel das Bild links und 
                den Text rechts haben, um das Design etwas aufzulockern
              -->
              <?php if ($index % 2 == 0) : ?>

                <?php snippet('teaser-bild', [
                  'subpage' => $subpage
                ]) ?>

                <?php snippet('teaser-bild-text', [
                  'subpage' => $subpage
                ]) ?>

              <?php else : ?>

                <?php snippet('teaser-bild-text', [
                  'subpage' => $subpage
                ]) ?>

                <?php snippet('teaser-bild', [
                  'subpage' => $subpage
                ]) ?>

              <?php endif ?>



            <?php endforeach ?>

            <!-- der letzten beiden Zeilen sind immer gleich -->
          </div>
        </div>

        <!--  -->

      </div>
    </div>
  </div>
</div>

                </div>

<?php snippet('footer') ?>