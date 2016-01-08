<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De arkade | Home</title>
    <link rel="icon" type="image/png" href="img/fav.png">
    <?php wp_head();?>
  </head>

  <body <?php body_class(); ?>>

<!--RESPONSIVE NAVIGATIE-->

     <nav class="top-bar" data-topbar>
      
      <ul class="title-area"> 
        <li class="name">
          <h1> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">DE ARKADE</a></h1>
        </li>
        <li class="toggle-topbar menu-icon menutext">
          <a href="#"><span class="menutext">menu</span></a>
        </li>
      </ul>

      <section class="top-bar-section">
       
      <ul class="right">

        <?php
        

        $arg = array(

          'theme_location' => 'main-menu',
          'items_wrap' => '%3$s',
          'container' => ''


        );

        wp_nav_menu( $args );
        
        ?>
<!--
        <li class="divider"></li>
        <li ><a href="index.html" id="active">HOME</a></li>

        <li class="divider"></li>
        <li><a href="blog.html">BLOG</a></li>

        <li class="divider"></li>
        <li class="has-dropdown">
        <a href="#">CATEGORIES</a>
          <ul class="dropdown">
            <li><a href="blog.html">Presentation</a></li>
            <li><a href="blog.html">Demo</a></li>
            <li><a href="blog.html">Article</a></li>
            <li><a href="blog.html">Report</a></li>
            <li><a href="blog.html">Work</a></li>
          <li class="divider"></li>
          <li><a href="blog.html">See all &rarr;</a></li>
          </ul>
        </li>


        <li class="divider"></li>
        <li><a href="about.html">ABOUT</a></li>

        <li class="divider"></li>
        <li><a href="contact.html">CONTACT</a></li>-->
      </ul>

      </section>
    
    </nav>
