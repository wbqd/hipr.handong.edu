<?php
/**
 * The content for the Muut settings contextual SSO help tab.
 *
 * @package   Muut
 * @copyright 2014 Muut Inc
 */
?>
<p>
	<?php printf( __( 'Single Sign-On (SSO) let\'s you use WordPress registration and login instead of Muut\'s. For this to work you need to %supgrade%s your forum to support Federated Identities with the Small or Medium subscription and then input the public/private keypair to the settings.', 'muut' ), '<a class="muut_upgrade_to_developer_link" href="' . muut()->getUpgradeUrl() . '">', '</a>' ); ?>
</p>
<p>
	<?php _e( 'Grab the keys directly from the forum frontend (either on your embed or at muut.com) by clicking the "Settings" link and copying the API Key and Secret Key from the top bar.', 'muut' ); ?>
</p>
<p>
	<?php _e( 'After these fields are filled the SSO is enabled on all the forum and commenting instances: be it automatically generated or installed with shortcode.', 'muut' ); ?>
</p>