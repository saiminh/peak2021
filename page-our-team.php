<?php
/**
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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );		

		endwhile; // End of the loop.
		?>

    <!-- <div class="teammembers cards">
      <?php 
        $args = array(  
          'post_type' => 'teammember',
          'post_status' => 'publish',
          'posts_per_page' => 8, 
          //'orderby’ => 'title', 
          //'order’ => 'ASC', 
        );
        global $more;
        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="card">
          <div class="card-preview">
            <?php  
              echo '<div class="card-preview-image">';
                the_post_thumbnail( 'full' );
              echo '</div>';
              echo '<h3 class="card-preview-title">';
                print the_title(); 
              echo '</h3>';
              echo '<div class="card-preview-subtitle">';
                the_content('', true); 
              echo '</div>';
              ?>
            <svg class="ui-plus" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="25" x2="25" y2="48" stroke="black" stroke-width="2"/>
            <line y1="23" x2="48" y2="23" stroke="black" stroke-width="2"/>
            </svg>
          </div>
          <?php $more = 1; ?>
          <div class="card-full">
            <?php echo get_template_part( 'inc/inline', 'peak_logo.svg' ) ?>
            <div class="card-full-image">
              <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="card-full-content">
              <h1 class="card-full-content-title"><?php the_title(); ?></h1>
              <?php the_content(); ?>
              <button class="cards-nav-close"></button>
              <button class="cards-nav-next"></button>
              <button class="cards-nav-prev"></button>
            </div>
          </div>
        </div>
      <?php 
        endwhile;
        wp_reset_postdata(); 
      ?>  
    </div>   -->

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
