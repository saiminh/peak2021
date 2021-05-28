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
            <a href="./our-team" class="wp-block-button__link">Our Team...</a>
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
            <a href="#" class="wp-block-button__link">Our Focus...</a>
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
            <a href="#" class="wp-block-button__link">Contact Us...</a>
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
        <p>We're gearing up to launch our brand new website. Stay tuned.</p>
        <p>In the meantime find out more here:</p>
        <p>
          <a class="textlink-green" href="https://www.linkedin.com/company/peak-capital/">About Peak</a><br>
          <a class="textlink-pink" href="https://www.crunchbase.com/organization/peak-capital">Our Founders</a><br>
          <a class="textlink-cyan" href="https://peak.capital/blog/">Peak content</a><br>
          <a class="textlink-yellow" href="https://peakcapitalvc.typeform.com/to/wREuKa">Get in touch</a><br>
        </p>
        <div class="home-staytuned-contact">
          <p> 
            <a class="textlink-red" href="tel:+31850014343">+31 85 001 4343</a><br>
            <a class="textlink-pink" href="mailto:opportunity@peak.capital">opportunity@peak.capital</a><br>
            <a class="textlink-green" href="https://g.page/capitalcamsterdam?share">Peak HQ</a>
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
