<?php snippet('header') ?>

<?php snippet('page-header') ?>


<?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->pressenachrichten()->toStructure();
// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
  <h2><?= $item->name()->html() ?></h2>
  <?php foreach ($item->images()->toFiles() as $image): ?>
    <img src="<?= $image->crop(400)->url() ?>">
  <?php endforeach ?>
  <p><?= $item->price() ?></p>
<?php endforeach ?>


<?php snippet('footer') ?>