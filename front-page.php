<?php
/**
 * The Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peak2021
 */

get_header();
?>

	<main id="primary" class="site-main peak-homepage">
    <nav class="home-segment-nav">
      <a class="home-segment-nav-link" href="#home-copy-segment-our-team">1</a>
      <a class="home-segment-nav-link" href="#home-copy-segment-our-founders">2</a>
      <a class="home-segment-nav-link" href="#home-copy-segment-our-focus">3</a>
      <a class="home-segment-nav-link" href="#home-copy-segment-contact">4</a>
      <a class="home-segment-nav-link" href="#home-copy-segment-content">5</a>
      <a class="home-segment-nav-link" href="#home-copy-segment-staytuned">6</a>
    </nav>
		
    <div class="home-copy">
      <div class="home-copy-segment home-image">
        <?php //peak2021_post_thumbnail(); ?>
        <div class="post-thumbnail">
          <img src="wp-content/themes/peak2021/img/home-hero.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">
        </div>
        <div class="home-image-contact-details">
          €84M Founder-Funded — 31 Investments — Europe <br>
          SaaS — Marketplaces — Platforms 
        </div>      
      </div>
      <div class="home-copy-segment" id="home-copy-segment-our-team">
        <div>
          <h1 class="home-copy-segment-title">Hoi, we’re PEAK. </h1>
          <h1 class="home-copy-segment-title">The early-stage VC fully backed by entrepreneurs.</h1>
        </div>
        <div class="wp-block-buttons is-content-justification-center">
          <div class="wp-block-button is-style-fill">
            <a href="<?php echo get_home_url() ?>/team" class="wp-block-button__link">Our Team...</a>
          </div>
        </div>
      </div>
      <div class="home-copy-segment" id="home-copy-segment-our-founders">
        <h1 class="home-copy-segment-title">We dare Europe’s extraordinary founders to realise their visions quicker.</h1>
        <div class="wp-block-buttons is-content-justification-center">
          <div class="wp-block-button is-style-fill">
            <a href="<?php echo get_home_url() ?>/founders" class="wp-block-button__link">Our Founders...</a>
          </div>
        </div>
      </div>
      <div class="home-copy-segment" id="home-copy-segment-our-focus">
        <h1 class="home-copy-segment-title">
          €250k—€2.5M<br> 
          SaaS<br> 
          Marketplace<br> 
          Platforms<br> 
          Europe
        </h1>
        <div class="wp-block-buttons is-content-justification-center">
          <div class="wp-block-button is-style-fill">
            <a href="<?php echo get_home_url() ?>/focus" class="wp-block-button__link">Our Focus...</a>
          </div>
        </div>
      </div>
      <div class="home-copy-segment" id="home-copy-segment-contact">
        <h1 class="home-copy-segment-title">
          Share your vision with us.
        </h1>
        <h1 class="home-copy-segment-title">
          We might be the partners  you’ve been looking for.
        </h1>
        <div class="wp-block-buttons is-content-justification-center">
          <div class="wp-block-button is-style-fill">
            <a href="mailto: <?php the_global_var('email'); ?>" class="wp-block-button__link">Contact Us...</a>
          </div>
        </div>
      </div>
      <div class="home-copy-segment" id="home-copy-segment-content">
        <h1 class="home-copy-segment-title">
          As founders ourselves, we’ve taken the hits.
        </h1>
        <h1 class="home-copy-segment-title">
          Let us help you learn from them.
        </h1>
        <div class="wp-block-buttons is-content-justification-center">
          <div class="wp-block-button is-style-fill">
            <a href="/content" class="wp-block-button__link">Content...</a>
          </div>
        </div>
      </div>
      <div class="home-copy-segment" id="home-copy-segment-staytuned">
        <p>PEAK, Capital C</p>
        <p>Weesperplein 4b <br> 
          1018 XA Amsterdam <br> 
          Netherlands</p>
        <p>
          <a class="textlink-red" href="tel:+31850014343">+31 85 001 4343</a><br>
          <a class="textlink-pink" href="mailto:<?php the_global_var('email'); ?>"><?php the_global_var('email'); ?></a>
        </p>
        <div class="home-staytuned-contact">
          <p> 
            <a class="textlink-yellow" href="<?php the_global_var('medium'); ?>">Medium</a><br>
            <a class="textlink-blue" href="<?php the_global_var('twitter'); ?>">Twitter</a><br>
            <a class="textlink-green" href="<?php the_global_var('linkedin'); ?>">LinkedIn</a><br>
            <a class="textlink-green" href="<?php the_global_var('fundright'); ?>">Fundright</a><br>
            •<br>
            Privacy Policy
          </p>
        </div>
        <div class="home-staytuned-copyright">
          <p>(C) PEAK 2021</p>
        </div>
      </div>
    </div>

	</main><!-- #main -->

<?php
// get_sidebar();
 get_footer();
