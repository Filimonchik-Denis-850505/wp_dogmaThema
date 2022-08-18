<?php

/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<main id="site-content">
	<div class="back-link ">
		<span>
			<h2>404</h2><br>
			page not found.
		</span>
		<a class="abl ajaxPageSwitchBacklink" <?php echo "href=\"javascript:history.go(-1)\""; ?>>Back to the last page</a>
	</div>
</main><!-- #site-content -->

<?php
get_footer(); ?>