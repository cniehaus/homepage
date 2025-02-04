<?php snippet('header'); ?>
<?php snippet('page-header'); ?>


<?php snippet('sidebar'); ?>

<?php if ($page->blogtag()->isNotEmpty()): ?>

    <div class="container mt-4">

        <h2 class="text-2xl border-t">
            Blogeinträge für das Tag
        </h2>

        <?php foreach (
          page('blogs')
            ->children()
            ->listed()
            ->filterBy('tags', $page->blogtag(), ',')
            ->flip()
          as $subpage
        ):
          snippet('blogkarte', ['subpage' => $subpage]); ?>

        <?php
        endforeach; ?>

    </div>
<?php endif; ?>



<?php snippet('footertw'); ?>
