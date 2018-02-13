<?php
  if(have_posts()) :  while(have_posts()) : the_post();
  // Example for custom post type 'car'.
  // Add the following inside the loop of your single-car.php file.
  if (get_post_type( $post->ID ) == 'car' ) update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
?>
<div class="single-page-wrapper">
  <?php the_content(); ?>
</div>
<?php
  endwhile;
  endif;
?>
