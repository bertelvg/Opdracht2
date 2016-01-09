<!--THE LOOP: voor post type slider-->
<?php 
	$args = array('post_type' => 'slider'); 
	$loop = new WP_Query( $args );
 
	while ( $loop->have_posts() ) : $loop->the_post();?>

		<li>
		<!--src van featured images opvragen-->
		  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>" alt="slide 1" id="orbitheight"/>
		<!--Title opvragen-->
		  <h3 class="text-center slidetext" id="slidetext1"><?php the_title(); ?></h3>
		</li>

<?php endwhile;?>