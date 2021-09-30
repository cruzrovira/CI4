<?php
$url = base_url(service('request')->uri->getPath());

?>

<section class="hero is-link">
  <div class="hero-body">
    <p class="title">
      Bienvenidos a mi Blog
    </p>
    <p class="subtitle">
      Lista de entradas
    </p>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li
            class="<?=  $url === base_url(route_to('home')) ? 'is-active' : ''?>">
            <a
              href="<?= base_url(route_to('home')) ?>">Inicio</a>
          </li>
          <li
            class="<?= $url === base_url(route_to('register')) ? 'is-active' : ''?>">
            <a
              href="<?= base_url(route_to('register'))?>">Reguistro</a>
          </li>
          <li>
            <a>Ingreso</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>