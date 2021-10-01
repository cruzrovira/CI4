<?php
$url = base_url(service('request')->uri->getPath());

?>

<section class="hero is-link">
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">

          <span class="navbar-burger" data-target="navbarMenuHeroB">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroB" class="navbar-menu">
          <div class="navbar-end">
            <a href="<?=base_url(route_to('login'))?>"
              class="navbar-item <?=  $url === base_url(route_to('login')) ? 'is-active' : ''?> ">
              login
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>

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
              href="<?= base_url(route_to('register'))?>">Registro</a>
          </li>
          <li>
            <a>Ingreso</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

</section>