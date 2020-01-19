<?php snippet('header') ?>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Biologie <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Chemie
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Physik
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Informatik
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Spanisch
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Französisch
            </a>
          </li>
        </ul>


        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $page->title() ?></h1>
      </div>

      <h2>Aktuelle Nachrichten</h2>
      <div class="table-responsive">
        <?php snippet('blogs', [
          'blogs' => page('blogs')
            ->children()
            ->listed()
            ->filterBy('tags', $page->haupttag(), ',')
        ]) ?>


        <?php if ($page->fotoansicht() == 'carousel') : ?>
          <?php snippet('carousel') ?>
        <?php elseif ($page->fotoansicht() == 'gallery') : ?>
          <?php snippet('gallery') ?>
        <?php else : ?>
          <!-- Bilder werden vom Autor manuel gesetzt -->
        <?php endif ?>
      </div>
    </main>
  </div>
</div>




















<?php snippet('footer') ?>