<?php 
 
//Define your custom post type name in the arguments
 
$args = array('post_type' => 'slider');
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
 
//Display the contents
 
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li>
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>" alt="slide 1" id="orbitheight"/>
        <h3 class="text-center slidetext" id="slidetext1"><?php the_title(); ?></h3>
</li>

<?php endwhile;?>