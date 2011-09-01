<?php
	$imgurl = elgg_get_site_url() . '/mod/angelgabrielcustoms/images';
	$images = array('redvabel', 'twitter', 'google', 'linkedin', 'blog', 'elgg');
echo "<ul class=\"agb-social\">";
	foreach($images as $image) {
	echo "<li><a href=\"" . elgg_echo("agb:link:$image") . "\">";
	echo "<img src=\"$imgurl/$image.jpg\"><span>";
	echo elgg_echo("agb:span:$image");
	echo "</span></a></li>";
	}
echo "</ul>";

?>