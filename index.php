<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="p-nav__container">
    <div class="l-header__logo p-nav__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo.svg" alt="">
      </a>
    </div>

    <div class="p-nav__menu__wrapper">
      <!-- WPでのnav_menu表示させる -->
      <?php
      $args = array(
        'menu'       => 'gmenu',
        'menu_class' => 'p-nav__items',
        'container'  => false,
      );
      wp_nav_menu($args);
      ?>
      <div class="p-nav__sns__wrapper">
        <?php get_template_part('parts/sns') ?>
      </div>
    </div>

    <div id="hamburger" class="c-hamburger__button">
      <button id="hambuger-btn" class="c-hamburger__menu js-drawer">
        <div></div>
        <div></div>
        <div></div>
      </button>
    </div>
  </nav>
</body>

<style>
  @use "../global" as *;

  .p-nav {
    &__container {
      display: grid;
      grid-template-columns: auto 1fr;
      column-gap: 20px;
      height: 70px;
      align-items: center;
      margin: 0 20px;
    }

    &__menu__wrapper {
      display: grid;
      grid-template-columns: 1fr auto;
    }

    &__items {
      display: grid;
      grid-auto-flow: column;
      column-gap: 2px;
      justify-self: end;
      width: 100%;
      max-width: 800px;
      height: 100%;

      & a {
        display: grid;
        align-items: center;
        justify-content: center;
        height: 100%;
      }

      &__sns__wrapper {
        align-self: center;
      }
    }
  }
</style>

</html>