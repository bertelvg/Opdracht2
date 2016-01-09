<!--TEMPLATE HOME PAGINA-->

 <!--HAALD HEADER OP -->
<?php get_header();?>

<!--SLIDER-->

    <ul class="slider" data-orbit>
      <!--HAALD ELEMENTEN UIT CONTENT-SLIDER.PHP PAGINA OP -->
      <?php   get_template_part('content','slider') ?>    
    </ul>

<!--CALL TO ACTION-->

    <div class="panel">
      <div class="row call">
        <!--HOME WIDGETS HIER WEERGEVEN-->
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Widgets') ) : ?>  
        <?php endif; ?>         
      </div>
    </div>

<!--LATEST BLOG POSTS-->

    <div class="row text-center latest" >
      <h3>Latest Blog-posts</h3>
    </div>

    <div class="row text-center lblog">
      <!--HAALD ELEMENTEN UIT CONTENT-LATEST.PHP PAGINA OP -->
      <?php   get_template_part('content','latest') ?>
    </div>

 <!--HAALD FOOTER OP-->
<?php get_footer();?>
