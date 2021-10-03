<?php
$url = base_url(service('request')->uri->getPath());

?>

<section class="hero is-dark">
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
            <a href="" class="navbar-item ">
              <?= session('username')?>
            </a>
            <a href="<?=base_url(route_to('logout'))?>"
              class="navbar-item ">
              Salir
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
            class="<?=  $url === base_url(route_to('posts')) ? 'is-active' : ''?>">
            <a
              href="<?= base_url(route_to('posts')) ?>">Articulos</a>
          </li>
          <li
            class="<?=  $url === base_url(route_to('categories')) ? 'is-active' : ''?>">
            <a
              href="<?= base_url(route_to('categories')) ?>">Categorias</a>
          </li>
          <li
            class="<?=  $url === base_url(route_to('users')) ? 'is-active' : ''?>">
            <a
              href="<?= base_url(route_to('users')) ?>">Usuarios</a>
          </li>

        </ul>
      </div>
    </nav>
  </div>

</section>