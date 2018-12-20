<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://www.abelworld.com/', 'twentyeleven' ) ); ?>"
                   title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>">
                    <?php printf( __( 'Copy right %s', 'twentyeleven' ), 'Abel Guzman 2011-2019' ); ?>
                </a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131224900-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-131224900-1');
</script>

<?php wp_footer(); ?>

</body>
</html>
