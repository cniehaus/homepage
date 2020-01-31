<?php snippet('header') ?>

<?php snippet('page-header') ?>

<h2><?= $page->heading() ?></h2>

<p>
  <?= $page->text()->kirbytext() ?>
</p>



<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email-Addresse</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Hier steht ein Hilfetext.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Abschicken</button>
</form>

<?php snippet('footer') ?>