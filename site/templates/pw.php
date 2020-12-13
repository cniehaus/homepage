<?php snippet('header') ?>
<?php snippet('page-header') ?>

<?php snippet('sidebar') ?>

<?php if ($success) : ?>
    <div class="alert success">
        <p><?= $success ?></p>
    </div>
<?php else : ?>
    <?php if (isset($alert['error'])) : ?>
        <div><?= $alert['error'] ?></div>
    <?php endif ?>


    <form method="post" action="<?= $page->url() ?>">
        <!-- Muss im CSS noch unsichtbar gemacht werden
            <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="website" id="website" name="website" tabindex="-1">
        </div> 
        -->


        <!--  -->

        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <div class="field">
                            <label for="name" class="form-label">
                                Vorname Nachname <abbr title="required">*</abbr>
                            </label>
                            <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                            <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vorname Nachname</label>
                        <input type="email" class="form-control" id="nachname" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">

                        <div class="field">
                            <label for="email" class="form-label">
                                Email <abbr title="required">*</abbr>
                            </label>
                            <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                            <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Klasse</label>
                        <input type="password" class="form-control" id="klasse">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" value="Submit" class="btn btn-secondary">Abschicken</button>

        <!--  -->
    </form>
<?php endif ?>

<?php snippet('footer') ?>