<br>
<div class="container">
	<h1>Welcome to CodeIgniter</h1>
	<p>Version <?= CodeIgniter\CodeIgniter::CI_VERSION . ' / ' . APP_DOMAIN . ' / ' . date('M j, Y h:i A') ?></p>
	<p> Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT ?></p>
	COOKIE:
	<?php
	view_r($_COOKIE);
	?>
</div>
