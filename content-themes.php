<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package The Five Themes
 */
?>

<article id="theme-<?php the_ID(); ?>" <?php post_class('themes-grid-item'); ?>>

	<div class="feature-image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		} else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/theme-placeholder.png" alt="<?php the_title(); ?>" />
		<?php } ?>
	</div>

	<div class="entry-wrap">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if(get_field('theme_type')) {
				echo '<h2>' . get_field('theme_type') . '</h2>';
			}?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-calltoaction">
		<?php if(get_field('theme_download_link')||get_field('theme_preview_link')) { ?>
			<a href="<?php the_field('theme_preview_link'); ?>">Preview</a>
			<a href="<?php the_field('theme_download_link'); ?>">Download</a>
		<?php } else { ?>
			<h3>Available Soon</h3>
		<?php }; ?>
		</footer><!-- .entry-calltoaction -->

	</div><!-- .entry-wrap -->
	
</article><!-- #post-## -->
