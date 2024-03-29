<?php
/**
 * Latest wire post on profile page
 *
 * @uses $vars['entity'] User that owns this profile page
 */

$owner = get_user_by_username('root');


//grab the user's latest from the wire
$params = array(
	'types' => 'object',
	'subtypes' => 'thewire',
	'owner_guid' => $owner->guid,
	'limit' => 1,
);
$latest_wire = elgg_get_entities($params);

if ($latest_wire && count($latest_wire) > 0) {
	$latest_wire = $latest_wire[0];
	$content = thewire_filter($latest_wire->description);
	$time = "<p class='elgg-subtext'>(" . elgg_view_friendly_time($latest_wire->time_created) . ")</p>";

	$button = '';
	if ($owner->guid == elgg_get_logged_in_user_guid()) {
		$url_to_wire = "thewire/owner/" . $owner->username;
		$button = elgg_view('output/url', array(
			'text' => elgg_echo('thewire:update'),
			'href' => $url_to_wire,
			'class' => 'elgg-button elgg-button-action right',
		));
	}

	$body = $content . $time;
	$content = elgg_view_image_block('', $body, array('image_alt' => $button));

	echo $content;

}
