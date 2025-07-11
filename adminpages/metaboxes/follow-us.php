<?php
/**
 * Paid Memberships Pro Follow Us Meta Box
 *
 * @package PaidMembershipsPro
 * @subpackage AdminPages
 * @since 3.5
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function pmpro_dashboard_follow_us_callback() { ?>
	<ul>
		<li><a href="https://www.facebook.com/Manticore.Marketing.Idaho/" target="_blank"><img alt="Facebook" src="<?php echo esc_url( PMPRO_URL . '/images/facebook.svg' ); ?>" /><?php esc_html_e( 'Facebook', 'paid-memberships-pro' ); ?></a></li>
	</ul>
	<?php
}
