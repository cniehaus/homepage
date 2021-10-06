<?php snippet('header') ?>
<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<div class="container">



 <!-- //so kann man sehen, welche Tags gesetzt sind.
  //implode($page->tags()->split(','), ",")  -->

  <!-- // Bug, ich habe hier noch keine funktionierende Lösung für gefunden
  foreach (collection('blogs')->filterBy('tags', "Biologie")->flip() as $subpage) :
    snippet('blogkarte', ['subpage' => $subpage]); -->

    <h2>Der Fachbereich besteht aus folgenden Fächern</h2>
  <?php
  $relatedPages =  $page->pages()->toPages();
  foreach ($relatedPages as $relatedPage) : ?>
    <a href="<?= $relatedPage->url() ?>"><?= $relatedPage->title() ?></a>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>