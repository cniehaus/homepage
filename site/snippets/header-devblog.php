<!doctype html>
<html lang="en">
<head>
  <title><?= $site->title() ?></title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?= css('assets/css/tailwind-build.css') ?>
</head>


<navbar>
  <header class="flex bg-gray-800 justify-between">
    <a class="navbar-brand px-4 py-3" href="<?= $site->url() ?>">
      <img width="64" width="64"src="<?= $kirby->url('assets') ?>/logo-kgs-medium.jpg" loading="lazy">
    </a>
    
    <div class="sm:hidden">
      <button type="button" class="block text-gray-500 hover:text-white focus:outline-none py-5 px-5">
        <svg class="h-12 w-12 fill-current" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
        </svg>
      </button>
    </div>
  
    <a href="#" class="block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Kontakt</a>
    <a href="#" class="mt-1 block px-2 py-1 text-white rounded hover:bg-gray-800 sm:mt-0 sm:ml-2">Über die Schule</a>
    <a href="#" class="mt-1 block px-2 py-1 text-white rounded hover:bg-gray-800 sm:mt-0 sm:ml-2">Kalendar</a>
    <a href="#" class="mt-1 block px-2 py-1 text-white rounded hover:bg-gray-800 sm:mt-0 sm:ml-2">Unterricht und Schulleben</a>

  </header>
</navbar>

<body class="bg-gray-300">
  
  
