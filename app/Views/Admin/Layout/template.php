<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?>
    &nbsp;&nbsp;Mi Blog </title>
  <link rel="stylesheet" href="<?= base_url()?>/css/bulma.min.css">
  <?= $this->renderSection('css')?>
</head>

<body>
  <?= $this->include('Admin/layout/header')?>

  <section class="section">
    <div class="container">
      <h1 class="title">Tablero del Blog</h1>
      <h2 class="subtitle">
        Administra tu blog .
      </h2>
      <?php if (session('msg.body')):?>
      <div
        class="message <?=session('msg.color')?>">
        <div class="message-body">
          <?= session('msg.body')?>
        </div>
      </div>
      <?php endif?>

      <?= $this->renderSection('body')?>

    </div>
  </section>
</body>


<?= $this->renderSection('js')?>

</html>