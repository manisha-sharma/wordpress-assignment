<?php
/**
 *Template Name:CPT
 * @package CPT 
 * @since CPT  1.0
 */ 
get_header(); 
$query->set( 'post_type', array( 'post', 'page', 'album', 'movie', 'quote' ) );

?>

	<section id="primary" class="content-area col-sm-12 col-md-12 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( $query->have_posts()  ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while (  $query->have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>