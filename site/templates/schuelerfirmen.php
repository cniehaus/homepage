<?php snippet('header') ?>

<?php snippet('page-header') ?>


<h1>Über die Fächer</h1>

<!--SPRACHEN-->
<div class="card-columns">
  <div class="card">
    <div class="card-header card-header-danger"><h4 class="card-title">Colorful Office</h4></div>
    <div class="card-body">

      </div>
    </div>
<!--KULTURELL-->
  <div class="card">
    <div class="card-header card-header-primary"><h4 class="card-title">Fruchtinsel</h4></div>
    <div class="card-body">

      </div>
    </div>
<!--NTW-->
  <div class="card">
    <div class="card-header card-header-success"><h4 class="card-title">Das Sofa-Team</h4></div>
    <div class="card-body">

      </div>
    </div>
<!--SPORT-->
  <div class="card">
    <div class="card-header card-header-info"><h4 class="card-title">Die kleinen Imker</h4></div>
    <div class="card-body">

    </div>
    </div>
<!--GSW-->
  <div class="card">
    <div class="card-header card-header-warning"><h4 class="card-title">Holz und Mehr</h4></div>
    <div class="card-body">

      </div>
    </div>
  </div>


<?php snippet('blogs', [
  'blogs' => page('blogs')
    ->children()
    ->listed()
    ->filterBy('tags', 'Biologie', ',')
]) ?>

<?php snippet('footer') ?>