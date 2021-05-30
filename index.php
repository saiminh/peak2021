<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>
<?php if ( !is_singular( ) ) : ?>
  <h1 class="peak-headline ">
    Here we share our latest ideas on entrepreneurship and our events
  </h1>
  <nav class="peak-media-subnav">
    <a class="wp-block-button__link has-brand-yellow-background-color" href="#">Media</a>
    <a class="wp-block-button__link has-brand-pink-background-color" href="#">Events</a>
  </nav>
<? endif; ?>
	<main id="primary" class="site-main">
		<?php     
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
