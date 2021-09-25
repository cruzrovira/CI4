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
  <?= $this->include('layout/header')?>
  <?= $this->renderSection('body')?>
</body>

<?= $this->include('layout/footer')?>
<?= $this->renderSection('js')?>

</html>