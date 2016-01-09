<!--THE LOOP: voor laatste 6 posts-->

<?php $my_query = "showposts=6"; $my_query = new WP_Query($my_query); ?>
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <div class="large-4 columns backblog">
        <a href="<?php the_permalink(); ?>">
          <!--src van featured images opvragen-->
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>" alt="blog_image"/>
        </a>
        <!--Title opvragen-->
        <h4 class="margin30top"><?php the_title();?></h4>
       	<!--Samenvatting opvragen-->
       	<?php the_excerpt();?>
      </div>

<?php endwhile; // end of one post ?>
<?php endif; //end of loop ?>