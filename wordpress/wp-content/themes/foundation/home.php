<?php get_header();?>
  

<div class="row blogoverview">
 
    <div class="large-9 columns" role="content">
      
       <?php   get_template_part('content','blog') ?>
      
      

    </div>
 
 
    <aside class="large-3 columns">
      <ul class="side-nav">
       <?php wp_list_categories();?>
      </ul>
    </aside>
 
  </div>

<?php get_footer();?>
