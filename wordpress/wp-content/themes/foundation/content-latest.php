<?php $my_query = "showposts=6"; $my_query = new WP_Query($my_query); ?>
<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <div class="large-4 columns backblog">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="blog_image"/>
        </a>
        <h4 class="margin30top"><?php the_title();?></h4>
       <?php the_excerpt();?>
      </div>

<?php endwhile; // end of one post ?>
<?php endif; //end of loop ?>