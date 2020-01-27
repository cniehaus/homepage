<div class="col-md-7">
    <!-- Nun der Kartentitel -->
    <h3 class="card-title">
        <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
    </h3>
    <!-- Nun die ersten 250 Zeichen -->
    <p class="card-description">
        <?= $subpage->Text()->blocks()->excerpt(250) ?>
        <a href="<?= $subpage->url() ?>">...weiterlesen</a>
    </p>
    <p class="author">
        von
        <a href="#pablo">
            <b><?= $subpage->author() ?></b>
        </a> Datum: <?= $subpage->date()->toDate("d.m.Y") ?>
    </p>
</div>