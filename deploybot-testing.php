<?php
/**
 * Plugin Name: Deploy Bot Testing
 * Description: CANDCANELOLIPOPS
 * Author: Joel Worsham
 * Version: 0.2.0
 */

defined( 'ABSPATH' ) || die();

add_action( 'admin_notices', function () {
	?>
	<div class="updated">
		<p>
			<code>DeployBot Plugin = Very Functional (Ping Slack)</code>
		</p>
	</div>
<?php
});