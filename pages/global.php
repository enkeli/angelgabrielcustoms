<?php
	
	elgg_set_context($vars['page']);
	
	$title = elgg_echo("agb:{$vars['page']}");
	$content = elgg_view("agb/{$vars['page']}{$vars['subpage']}");
	if ($vars['page'] == 'social' || $vars['page'] == 'acerca') {
		
		$sidebar = elgg_view_module('aside', elgg_view('agb/twittertitle'), elgg_view('agb/twitter'));
	}
	$content = elgg_view_layout('one_sidebar', array(
							  'content' => $content,
							  'sidebar' => $sidebar,
							  ));
	
	echo elgg_view_page($title, $content);
