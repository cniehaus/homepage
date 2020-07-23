<?php snippet('header') ?>
<?php snippet('page-header') ?>


<h2><?= $page->heading() ?></h2>

<div class="col-lg-8 col-md-10 ml-auto mr-auto">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>Name</th>
        <th>Kürzel</th>
        <th>Fächer</th>
      </thead>
      <tbody>
        <?php foreach ($page->children() as $l) : ?>
          <tr>
            <td>
              <?= $l->name() ?>
            </td>
            <td>
              <script type="text/javascript">
                var mail = "<?= $l->kuerzel()->upper() ?>";
                var en = "de";
                var dom = "kgs-rastede";
                var at = "@";
                document.open();
                document.write(unescape("%3Ca href='mailto:" + mail + at + dom + "." + en + "'%3E" + mail + "%3C/a%3E"));
                document.close();
              </script>
            </td>
            <td>
              <?= $l->faecher() ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<?php snippet('footer') ?>