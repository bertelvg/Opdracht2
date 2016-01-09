<!--TEMPLATE BASIS PAGINA-->
<!--VERPLICHT OM THEME AAN TE KUNNEN MAKEN-->
 
 <!--HAALD HEADER OP -->
<?php get_header();?>
  
<div class="row margin50 text-center">
      <div class="large-12 columns">
      	<!--HAALD ELEMENTEN UIT CONTENT.PHP PAGINA OP -->
         <?php   get_template_part('content') ?>
      </div>
</div>

 <!--HAALD FOOTER OP-->
<?php get_footer();?>
