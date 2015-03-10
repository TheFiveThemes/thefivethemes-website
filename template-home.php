<?php
/*
Template Name: Homepage
*
* @package The Five Themes
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main themes-grid" role="main">

				<?php
					$child_pages = new WP_Query( array(
						'post_type'      => 'page',
						'orderby'        => 'rand',
						'order'          => 'ASC',
						'post_parent'    => $post->ID,
						'posts_per_page' => 5,
						'no_found_rows'  => true,
					) );
				?>

				<?php if ( $child_pages->have_posts() ) : ?>

					<?php while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

						<?php get_template_part( 'content', 'themes' ); ?>

					<?php endwhile; ?>

				<?php
					endif;
					wp_reset_postdata();
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
