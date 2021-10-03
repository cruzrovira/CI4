<?php session()?>
<?= $this->extend('layout/template')?>

<?= $this->section('title') ?>
<?= session('username')?>
<?= $this->endSection() ?>

<?= $this->section('body')?>

<section class="section">
  <div class="container">
    <h1 class="title">Login</h1>
    <h2 class="subtitle">
      Ingresa al sistema ahora!
    </h2>

    <?php if (session('msg.body')):?>
    <div
      class="message <?=session('msg.color')?>">
      <div class="message-body">
        <?= session('msg.body')?>
      </div>
    </div>
    <?php endif?>

  </div>
</section>


<?= $this->endSection();
