 <!--HEADER STRUCTUUR (meta+nav) -->

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De arkade | Home</title>
    <link rel="icon" type="image/png" href="img/fav.png">
    <!--Wp_head-->
    <?php wp_head();?>
  </head>
<!--INFO TOEVOEGEN AAN BODY ELEMENT -->
  <body <?php body_class(); ?>>

<!--RESPONSIVE NAVIGATIE-->

     <nav class="top-bar" data-topbar>
      <ul class="title-area"> 
        <li class="name">
          <!--LINK NAAR HOME -->
          <h1> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">DE ARKADE</a></h1>
        </li>
        <li class="toggle-topbar menu-icon menutext">
          <a href="#"><span class="menutext">menu</span></a>
        </li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
           <!--MAIN MENU INLADEN -->
          <?php
            $arg = array(

              'theme_location' => 'main-menu',
              'items_wrap' => '%3$s',
              'container' => ''
            );
          wp_nav_menu( $args );?>
        </ul>
      </section>
     </nav>
