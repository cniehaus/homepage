<?php snippet('header') ?>


<ul class="projects">

    <?php foreach ($page->children()->listed() as $project): ?>
        <li>
            <a href="<?= $project->url() ?>">
                <?= $project->title() ?>
            </a>
        </li>
    <?php endforeach ?>

</ul>


<?php snippet('footer') ?>