<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package peak2021
 * 
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

  register_block_pattern_category(
    'peak2021',
    array( 'label' => esc_html__( 'Peak Capital', 'peak2021' ) )
  );
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
  // Team member content block
  register_block_pattern(
    'peak2021/team-member',
    array(
      'title'         => esc_html__( 'Team member', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
          <!-- wp:group -->
          <div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"card-subtitle"} -->
          <h2 class="card-subtitle">Co-Founder &amp; Managing Partner</h2>
          <!-- /wp:heading -->

          <!-- wp:more -->
          <!--more-->
          <!-- /wp:more -->

          <!-- wp:paragraph -->
          <p><strong>“A pro-privacy, anti-monopoly and open web that inspires trusted connections and collaboration.”</strong></p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p>Open Social is a top-tier SaaS company based in Amsterdam and Enschede, The Netherlands. Open Social is specialized in online community and membership management solutions. They have mastered the art of sharing, serving some of the biggest international NGOs as clients, including the UN, Greenpeace and Pachamama Alliance, and having won several international awards.</p>
          <!-- /wp:paragraph -->

          <!-- wp:columns {"className":"teammember-full-content-coins"} -->
          <div class="wp-block-columns teammember-full-content-coins"><!-- wp:column -->
          <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-coin-title"} -->
          <h3 class="card-full-content-coin-title">Select Investments—</h3>
          <!-- /wp:heading -->

          <!-- wp:image {"id":66,"sizeSlug":"full","linkDestination":"none","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-full card-full-content-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" src="' . esc_url( get_template_directory_uri() ) . '/coin-dyme.svg" alt="" class="wp-image-66"/></figure>
          <!-- /wp:image -->

          <!-- wp:image {"id":65,"sizeSlug":"large","linkDestination":"none","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><img src="' . esc_url( get_template_directory_uri() ) . '/coin-studocu.svg" alt="" class="wp-image-65"/></figure>
          <!-- /wp:image --></div>
          <!-- /wp:column -->

          <!-- wp:column -->
          <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"card-full-content-coin-title"} -->
          <h3 class="card-full-content-coin-title">Links—</h3>
          <!-- /wp:heading -->

          <!-- wp:image {"id":63,"sizeSlug":"large","linkDestination":"custom","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><a href="https://twitter.com"><img src="' . esc_url( get_template_directory_uri() ) . '/icon-twitter.svg" alt="" class="wp-image-63"/></a></figure>
          <!-- /wp:image -->

          <!-- wp:image {"id":61,"sizeSlug":"large","linkDestination":"custom","className":"card-full-content-coin"} -->
          <figure class="wp-block-image size-large card-full-content-coin"><a href="https://linkedin.com"><img src="' . esc_url( get_template_directory_uri() ) . '/icon-linkedin.svg" alt="" class="wp-image-61"/></a></figure>
          <!-- /wp:image --></div>
          <!-- /wp:column --></div>
          <!-- /wp:columns --></div></div>
          <!-- /wp:group -->',
    )
  );

  //Testimonial Carousel
  register_block_pattern(
    'peak2021/testimonial-carousel',
    array(
      'title'         => esc_html__( 'Testimonial Carousel', 'peak2021' ),
      'categories'    => array( 'peak2021' ),
      'viewportWidth' => 1440,
      'content'       => '
        <!-- wp:group {"className":"testimonial-carousel slider"} -->
        <div class="wp-block-group testimonial-carousel slider"><div class="wp-block-group__inner-container">
        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="has-text-align-center testimonial-carousel-quote">Peak Capital is very hands on and reliable, with a strong network of LP\'s. The partners invest a lot of their time to help us grow and are available when we need them.</h3>
        <!-- /wp:heading -->

        <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"large","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <div class="wp-block-image testimonial-carousel-coin"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/img/coin-studocu.svg" alt="" width="80" height="80"/></figure></div>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="has-text-align-center testimonial-carousel-quote">Very involved, analytical and cooperative VC. Great guidance and always a pleasure to work with. Thanks Team Peak.</h3>
        <!-- /wp:heading -->

        <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"full","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <div class="wp-block-image testimonial-carousel-coin"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/img/coin-dyme.svg" alt="" width="80" height="80"/></figure></div>
        <!-- /wp:image --></div></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"testimonial-carousel-slide slide"} -->
        <div class="wp-block-group testimonial-carousel-slide slide"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"className":"testimonial-carousel-quote"} -->
        <h3 class="has-text-align-center testimonial-carousel-quote">From the first contact, the closing and the official collaboration, Peak is a great partner They have the knowledge and resources guide the growth phase, without losing sight of the culture</h3>
        <!-- /wp:heading -->

        <!-- wp:image {"align":"center","width":80,"height":80,"sizeSlug":"large","linkDestination":"none","className":"testimonial-carousel-coin"} -->
        <div class="wp-block-image testimonial-carousel-coin"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/img/coin-studocu.svg" alt="" width="80" height="80"/></figure></div>
        <!-- /wp:image --></div></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->
      ',
    )
  );  

}
