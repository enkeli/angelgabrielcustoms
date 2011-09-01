<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

$icon = get_user_by_username('root');
$icon = $icon->getIconURL('medium');
?>

<div class="agb-name">
	<img src="<?php echo $icon; ?>" />
	<a class="agb-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
	<span><?php echo elgg_view('agb/profile_status'); ?></span>
</div>
