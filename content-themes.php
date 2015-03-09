<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package The Five Themes
 */
?>

<article id="theme-<?php the_ID(); ?>" <?php post_class('theme'); ?>>

	<div class="feature-image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		} ?>
	</div>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'thefivethemes' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
