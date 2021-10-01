<?php session()?>
<?= $this->extend('layout/template')?>

<?= $this->section('title') ?>
Login
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

    <form action="">
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="email" placeholder="Email">
        </p>
      </div>
      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="password" placeholder="Password">

        </p>
      </div>
      <div class="field">
        <p class="control">
          <button class="button is-link">
            Ingresar
          </button>
        </p>
      </div>
    </form>
  </div>
</section>


<?= $this->endSection();
