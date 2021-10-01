<?php session()?>
<?= $this->extend('layout/template')?>

<?= $this->section('title') ?>
Hello World!
<?= $this->endSection() ?>

<?= $this->section('body')?>

<section class="section">
  <div class="container">
    <h1 class="title">Registrate ahora!</h1>
    <h2 class="subtitle">
      Solo debes ingresar algunos datos para comenenzar
    </h2>

  </div>
</section>


<?= $this->endSection();
