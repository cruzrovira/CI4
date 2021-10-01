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
    <form
      action="<?= base_url(route_to('register'))?>"
      method="post">

      <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
          <input class="input" name="name" type="text"
            value="<?= old('name')?>">
        </div>
        <p class="is-danger help"><?= session('errors.name')?>
        </p>

      </div>
      <div class="field">
        <label class="label">Apellidos</label>
        <div class="control">
          <input class="input" name="surname" type="text"
            value="<?= old('surname')?>">
        </div>
        <p class="is-danger help"><?= session('errors.surname')?>
        </p>
      </div>

      <div class="field">
        <label class="label">Correo</label>
        <div class="control">
          <input class="input" name="email" type="email"
            value="<?= old('email')?>">
        </div>
        <p class="is-danger help"><?= session('errors.email')?>
        </p>
      </div>

      <div class="field">
        <label class="label">Nick</label>
        <div class="control">
          <input class="input" name="username" type="text"
            value="<?= old('username')?>">
        </div>
        <p class="is-danger help"><?= session('errors.username')?>
        </p>
      </div>

      <div class="field">
        <label class="label">Elige tu pais</label>
        <div class="control">
          <div class="select">
            <select name="id_country">
              <option selected disabled>Seleciona un país</option>

              <?php foreach ($countries as $country): ?>
              <option <?=old('id_country') === $country->id_country ? 'selected' : '' ?>
                value=<?= $country->id_country?> > <?= $country->name?>
              </option>
              <?php endforeach?>

            </select>
          </div>
          <p class="is-danger help"><?= session('errors.id_country')?>
          </p>
        </div>
      </div>

      <div class="field">
        <label class="label">Constraseña</label>
        <div class="control">
          <input class="input" name="password" type="password">
        </div>
        <p class="is-danger help"><?= session('errors.password')?>
        </p>
      </div>

      <div class="field">
        <label class="label">Confirmación de contraseña</label>
        <div class="control">
          <input class="input" name="c-password" type="password">
        </div>
        <p class="is-danger help"><?= session('errors.c-password')?>
        </p>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Registrarse</button>
        </div>
    </form>
  </div>
</section>


<?= $this->endSection();
