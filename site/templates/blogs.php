<?php snippet('header') ?>

<?php snippet('page-header') ?>

<?php
  $items = $page->children()->flip();

  $list = $items->paginate(5);

  snippet('blog-schlicht', [
    'items' => $list
  ])
?>

<?php 
  $pagination = $list->pagination();

  snippet('pagination', [
    'pagination' => $pagination
  ]) 
  
?>


<?php snippet('footer') ?>