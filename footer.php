<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peak2021
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="site-footer-menu">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
      ?>
    </div>
		<div class="site-footer-site-info">
      PEAK <br> 
      Capital C <br>
      Weesperplein 4b <br>
      1018 XA Amsterdam <br>
      Netherlands <br>
      <a href="tel:+31 85 001 4343">+31 85 001 4343</a><br>
      <a href="mailto: info@peak.capital">info@peak.capital</a>
		</div><!-- .site-info -->
    <div class="site-footer-site-mail">
      Mail: <br>
      T.a.v Stefan Bary <br>
      Eerste Jacob van Campenstraat 46-1 <br>
      1072 BG <br> 
      Amsterdam
    </div>
    <div class="site-footer-social">
        <p>
          Follow Peak on:
        </p>
        <a href="https://www.linkedin.com/company/peak-capital" target="_blank">
          <?php get_template_part( 'inc/inline', 'footer-social-icons-linkedin.svg' ); ?>
        </a>
        <a href="https://www.linkedin.com/company/peak-capital" target="_blank">
          <?php get_template_part( 'inc/inline', 'footer-social-icons-instagram.svg' ); ?>
        </a>
        <a href="https://www.linkedin.com/company/peak-capital" target="_blank">
          <?php get_template_part( 'inc/inline', 'footer-social-icons-circles.svg' ); ?>
        </a>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
