<?php
/**
 * 
 * * Template Name: Team page
 * The template for displaying "Our Team"
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>

	<main id="primary" class="site-main">

  <div class="team-header-coin-block">
    <div class="team-header-coin">
      <div class="team-header-coin-dataside">
        <?php 
          get_template_part( 'inc/inline', 'team-header-coin-deepdata.svg' );
          get_template_part( 'inc/inline', 'team-header-since2007ring.svg' );
          ?>
      </div>
      <div class="team-header-coin-gutside">
        <?php 
          get_template_part( 'inc/inline', 'team-header-coin-gutinstinct.svg' );
          get_template_part( 'inc/inline', 'team-header-since2007ring.svg' );
        ?>
      </div>
    </div>
  </div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
