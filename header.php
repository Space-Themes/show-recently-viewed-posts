<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">

<!-- Show Recently Viewed Posts in Header. Start -->
<div class="recently-viewed-posts relative">
    <ul>
    	<?php
        $the_query = new WP_Query(array(
			'post_type' => 'car',
			'posts_per_page' => 3,
			'meta_key' => '_last_viewed',
			'orderby' => 'meta_value',
			'order' => 'DESC'
		));
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
		?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</li>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
    </ul>
</div>
<!-- Show Recently Viewed Posts in Header. End -->
