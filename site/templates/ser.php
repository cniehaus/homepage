<?php snippet('header') ?>

<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>




<?php
  $items = page('ser/nachrichten')->children()->listed();

  $list = $items->paginate(3);

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