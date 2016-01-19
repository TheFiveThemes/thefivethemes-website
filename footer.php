<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Five_Themes
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <p><span class="site-info-credits">The Five Themes is licensed under the Open Source GPLv2 License, and is <a href="https://github.com/thefivethemes" rel="repository">available on GitHub</a>.</p>

            <p>Originally Created by <a href="http://hugobaeta.com" rel="designer">Hugo Baeta</a></span> &amp; <span class="site-info-cms"><?php printf( __( 'Proudly powered by', 'thefivethemes' ) ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'thefivethemes' ) ); ?>">WordPress</a></span></p>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
