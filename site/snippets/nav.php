<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <a class="navbar-brand" href="<?= $site->url() ?>">KGS Rastede</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          &Uuml;ber die Schule
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Anfahrt</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= page('kontakte/hausmeister')->url() ?>">Hausmeister</a>
            <a class="dropdown-item" href="<?= page('kontakte/schulleitung')->url() ?>">Schuleitung</a>
            <a class="dropdown-item" href="<?= page('kontakte/fbl')->url() ?>">Fachbereichsleiter</a>
            <a class="dropdown-item" href="<?= page('kontakte/sekretariate')->url() ?>">Sekretariate</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          &Uuml;ber die F&auml;cher
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Anfahrt</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= page('Faecher/Sport')->url() ?>">Sport</a>
            <a class="dropdown-item" href="<?= page('Faecher/Physik')->url() ?>">Physik</a>
            <a class="dropdown-item" href="<?= page('Faecher/Biologie')->url() ?>">Biologie</a>
            <a class="dropdown-item" href="<?= page('Faecher/Chemie')->url() ?>">Chemie</a>
            <a class="dropdown-item" href="<?= page('Faecher/Informatik')->url() ?>">Informatik</a>
          </div>
        </li>


      </ul>
      <form class="form-inline ml-auto">
          <div class="form-group no-border">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-white btn-just-icon btn-round">
              <i class="material-icons">search</i>
          </button>
      </form>
    </div>
  </div>
</nav>