<?php snippet('header') ?>

<?php snippet('page-header') ?>


<h1>Unsere Schülerfirmen</h1>


<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1471666875520-c75081f42081?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2038&q=80')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">Colorful Office</h3>
    </a>
    <p class="card-description">
      Zu den hergestellten Produkten zählen: Blöcke, Stifte, Handyhüllen, Buttons, Grußkarten und andere Aufträge, die von den Kunden gewünscht werden. Zum Materialeinsatz zählen daher vor allem Strasssteine und Bastelpapier. Das Produktionsprogramm wird nach und nach verändert und den Wünschen der Kunden angepasst.
    </p>
    <a href="mailto:eik@kgs-rastede.de" class="btn btn-white btn-link">
      <i class="material-icons">email</i> Kontakt
    </a>
  </div>
</div>




<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1546548970-71785318a17b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2134&q=80')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">Fruchtinsel</h3>
    </a>
    <p class="card-description">
      Das Fruchtinsel-Team versorgt die Schülerinnen und Schüler der KGS Rastede dienstags in der zweiten großen Pause mit allerlei Köstlichkeiten und kümmert sich somit um das leibliche Wohl. Zudem übernimmt diese Firma auch Cateringaufträge für Schulveranstaltungen.
    </p>
    <a href="mailto:lm@kgs-rastede.de" class="btn btn-white btn-link">
      <i class="material-icons">email</i> Kontakt
    </a>
  </div>
</div>




<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1565615833231-e8c91a38a012?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">Das Sofa-Team</h3>
    </a>
    <p class="card-description">
      Für Schüler, die sich gerne sozial engagieren und Interesse an sozialen Berufen haben, bietet diese Schülerfirma die Möglichkeit, Sozialkompetenz zu gewinnen.

      Wir wollen alte Menschen in der Gemeinde unterstützen, ihnen helfen und sie im Alltag begleiten, indem wir mit ihnen Spiele spielen, spazieren gehen, basteln, klönen, ihnen vorlesen oder Botengänge für sie erledigen. Das geschieht entweder in den Altenheimen oder im Rahmen von Hausbesuchen.

      Gemeinsame Projekte (kleine Theaterstücke, Beteiligung an Feiern in den Altenheimen, ran an den Computer…) sollen die Integration von Jung und Alt fördern.

      Nicht nur die alten Menschen profitieren von der Arbeit des ´Sofa-Teams`, auch die Mitarbeiter/innen dieser SF lernen viel und sammeln wertvolle Erfahrungen.

      Eure sozialen Fähigkeiten und Interessen, eure Kreativität und Teamfähigkeit sind in dieser SF gefragt.
    </p>
    <a href="mailto:lue@kgs-rastede.de" class="btn btn-white btn-link">
      <i class="material-icons">email</i> Kontakt
    </a>
  </div>
</div>



<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1556316830-8fce5824a0f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">Die kleinen Imker</h3>
    </a>
    <p class="card-description">
      Unsere Aufgabenbereiche:

      Führungen für Schulklassen und Kindergärten am Bienenvolk,
      Naturschutz durch Erhalt, Pflege und Neubildung von Bienenvölkern
      Produktion von Imkereiprodukten wie Honig, Kerzen……
      Reparatur von Rähmchen und Bienenkästen
      Vorbereitung der Ausbildung zum Jungimker </p>
    <a href="mailto:ree@kgs-rastede.de" class="btn btn-white btn-link">
      <i class="material-icons">email</i> Kontakt
    </a>
  </div>
</div>


<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1566373924413-3efde9d6eb67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">Holz und Mehr</h3>
    </a>
    <p class="card-description">
      Verkauf von selbst hergestelltem Spielzeug oder Ähnlichem aus Holz; Holzsitzbänke für Grundschulen; weitere Produkte auf Anfrage (Vogelhäuser für den Schlosspark)
    </p>
    <a href="mailto:lm@kgs-rastede.de" class="btn btn-white btn-link">
      <i class="material-icons">email</i> Kontakt
    </a>
  </div>
</div>



<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('tags', 'Schülerfirmen', ',')
]) ?>

<?php snippet('footer') ?>