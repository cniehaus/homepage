<main role="main">


  <div class="hero-image">

    <div class="hero-text display-1">
      <h1>Herzlich Willkommen an der</h1>
      <p>Kooperative Gesamtschule Rastede</p>
    </div>

    <div class="hero-subtext row">
      <a href="#" class="card col">
        <img class="d-block w-100 img img-raised rounded" alt="Aktuelles" src="<?= $page->files()->find('acker.jpg')->url() ?>">
      </a>
      <a href="#" class="col">  
        <button>Termine</button>
      </a>
    
    </div>
  </div>
      



      <!-- Titelfeld -->

      <div class="p-3 mb-2 bg-light text-primary">
        <h1>
          <?= $page->title() ?>
        </h1>
      </div>
      <small class="text-muted"><?= $page->subtitle() ?></small>

      <h1 class="display-6 mb-3">
        <?= $page->heading() ?>
      </h1>
    </div>