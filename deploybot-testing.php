<?php
/**
 * Plugin Name: Deploy Bot Testing
 * Description: CANDCANELOLIPOPS
 * Author: Joel Worsham
 * Version: 0.1.1
 */

defined( 'ABSPATH' ) || die();

add_action( 'admin_notices', function () {
	?>
	<div class="updated">
		<p>
			<code>DeployBot Plugin = Very Functional</code>
		</p>
	</div>
<?php
});