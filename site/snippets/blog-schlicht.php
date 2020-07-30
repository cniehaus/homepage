  <div class="col-md-12 mt-4">

    <?php foreach ($items as $item) : ?>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
          </h4>
          <p class="card-category">
            <div class="author text-right">
              von
              <b><?= $item->author() ?></b>
              Datum: <?= $item->date()->toDate("d.m.Y") ?>
            </div>

            <div class="author text-right">
              <?php foreach ($item->tags()->split() as $tag) : ?>
               <a href="<?= url('blogs', ['params' => ['tag' => $tag]]) ?>">
                  <span class="badge rounded-pill bg-info"><?= $tag ?></span>
                </a>
              <?php endforeach ?>

            </div>
          </p>
          <p class="card-text">
            <?= $item->Text()->blocks()->excerpt(250) ?>
          </p>
          <a href="<?= $item->url() ?>" class="btn btn-secondary">weiterlesen &#8594;
          </a>


        </div>
      </div>

      <hr>


    <?php endforeach ?>
  </div>