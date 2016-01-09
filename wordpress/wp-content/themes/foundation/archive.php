<!--TEMPLATE CATEGORIE PAGINA-->

 <!--HAALD HEADER OP -->
<?php get_header();?>

<div class="row blogoverview">
  <!--HAALD ELEMENTEN UIT CONTENT-CATEGORY.PHP PAGINA OP -->
  <?php   get_template_part('content','category') ?>
  <div class="large-9 columns" role="content">
      <?php   get_template_part('content','blog') ?>
  </div>
 
  <aside class="large-3 columns">
    <ul class="side-nav">
      <!--MAAKT CATEGORIE MENU AAN -->
      <?php wp_list_categories();?>
    </ul>
  </aside>
</div>


 <!--HAALD FOOTER OP-->
<?php get_footer();?>
