<?php
/**
 * Template part for displaying social list icon
 *
 * @package bee
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'bee_social_bar' ) ) {
	add_action( 'bee_social_bar_action', 'bee_social_bar' );
	function bee_social_bar() {
		$socials_facebook_url  		=  bee_get_setting( 'socials_facebook_url' );
		$socials_twitter_url   		=  bee_get_setting( 'socials_twitter_url' );
        $socials_instagram_url  	=  bee_get_setting( 'socials_instagram_url' );
    ?>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <?php if ( $socials_twitter_url != '' ) { ?>
            <li class="ftco-animate"><a href="<?php echo esc_url( $socials_twitter_url ); ?>" target="_blank"><span class="icon-twitter"></span></a></li>
            <?php } ?>
            <?php if ( $socials_facebook_url != '' ) { ?>
            <li class="ftco-animate"><a href="<?php echo esc_url( $socials_facebook_url ); ?>" target="_blank"><span class="icon-facebook"></span></a></li>
            <?php } ?>
            <?php if ( $socials_instagram_url != '' ) { ?>
            <li class="ftco-animate"><a href="<?php echo esc_url( $socials_instagram_url ); ?>" target="_blank"><span class="icon-instagram"></span></a></li>
            <?php } ?>         
        </ul>
	<?php
	}
}
