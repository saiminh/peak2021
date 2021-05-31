<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */
if ( get_field('tile-bg-color') || get_field('featured_image_type') ){
  $postTileOptions = 'blog-post-tile '.get_field('featured_image_type').' has-brand-'.get_field('tile-bg-color').'-background-color';
} else {
  $postTileOptions = '';
};
?>

<?php if ( is_singular() ) : ?>

<?php peak2021_post_thumbnail(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
  <?php if ( 'post' === get_post_type() ) :
    ?>
    <div class="entry-meta">
      <?php if ( is_singular() ) {
        peak2021_posted_on();
        peak2021_posted_by();
      } ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>
  <div class="entry-content">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'peak2021' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post( get_the_title() )
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'peak2021' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div><!-- .entry-content -->

<?php else : //not singular ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class( $postTileOptions ); ?>>
  <?php 
    if ( get_field('featured_image_type') == "bg-img" ) {
      echo '<div class="blog-tile-image">';
      peak2021_post_thumbnail(); 
      echo '</div>';
    }
  ?>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    <?php if ( get_field('tile_icon') ) {
      echo '<img src="'.get_field('tile_icon').'" />';
    }; ?>
	</header><!-- .entry-header -->
  
<?php endif; ?>
	<footer class="entry-footer">
		<?php peak2021_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
