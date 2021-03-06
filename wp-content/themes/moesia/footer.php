<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_footer_before(); ?>
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="site-info container">
			<p style="color:white">Homeless Gay Kids - Houston | P.O. Box 980935, Houston, Texas 77098 | <a id="footerLink" style="color:white;" href="mailto:info@homelessgaykidshouston.org">info@homelessgaykidshouston.org</a> | <a style="text-decoration:none;" href="https://www.facebook.com/pages/Homeless-Gay-Kids-Houston/1479108399056136?fref=ts"><img height="32" width="32" src="http://hkgh.lvtran.com/wp-content/themes/moesia/images/fb.svg"/></a></p>
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
