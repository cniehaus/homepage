<?php snippet('header') ?>
<?php snippet('page-header') ?>


<div class="container">
    <div class="content">
    <?php if ($page->filterBy('toggle', true))
        {
            ?>
                <div class="row">
                    <div class="col-md-9">
                        <div class="container-md-flex"><?= $page->text()->kirbytext() ?></div>
                    </div>
                    <div class="col-md-3">
                        <div class="card"><a href="#"><?= $page->name() ?></a></div>
                    </div>
                </div>
        <?php
        }
        else
        {
            ?>
                dfdfs
            <?php
        }
        ?>
    </div>
</div>


<?php
if (true)
{
    ?><? ?><?php
}
else?>
{

}


<?php snippet('footer') ?>