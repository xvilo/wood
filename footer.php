<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Patricklaan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p class="left"><i class="fa fa-copyright"></i> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <?php
    if (is_user_logged_in()) {
        echo '<a href="'. wp_logout_url() .'">Uitloggen</a>';
    }
    elseif (!is_user_logged_in()) {
        echo '<a href="'. site_url('wp-login.php') .'">Inloggen</a>';
    }else{
	    echo '<p>Oeps</p>';
    }
?>
</p> <p class="right"><?php
				foreach ( ot_get_option( 'social_links_footer' ) as $value) {
						    echo "<a href='{$value['href']}' alt='volg ons ook op {$value['title']}' target='_blank'><span class='social {$value['name']}'><i class='fa fa-{$value['name']}'></i></span></a> ";
						}
				?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php echo xvilo_cartAmount(); ?> 

<?php wp_footer(); ?>

</body>
</html>
