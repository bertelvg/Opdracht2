<!--THE LOOP-->
<?php if ( have_posts() ) :while ( have_posts() ): the_post(); ?>     
	<article>
		<div class="large-12 columns">
      <!--src van featured images opvragen-->
      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>" alt="image_blog" class="margin20"/>
    </div>

    <!--Title opvragen-->
    <h3 class="margin20" ><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    <!--Autheur en datum opvragen-->
    <h6>Written by <?php the_author(); ?> on <?php the_time('F j, Y');?> // course: 
      <?php $meta_value = get_post_meta( get_the_ID(), 'meta-text', true );
      if( !empty( $meta_value ) ) {
          echo $meta_value;
      }
      ?>
    </h6>
    
    <div class="row">  
      <div class="large-12 columns">
        <!--content opvragen-->
        <?php the_content();?>
      </div>
    </div>    
  </article>
<?php endwhile; endif; ?>