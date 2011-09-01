<?php

function agb_init() {
elgg_register_plugin_hook_handler('index', 'system', 'agb_index_handler');

elgg_register_page_handler('activity', 'agb_activity_handler');
elgg_register_page_handler('acerca', 'agb_acerca_handler');
elgg_register_page_handler('proyectos', 'agb_proyectos_handler');
elgg_register_page_handler('social', 'agb_social_handler');

elgg_extend_view('css/elgg', 'agb/css');
elgg_unregister_menu_item('site', 'activity');
elgg_unregister_menu_item('site', 'thewire');

$item = new ElggMenuItem('social', elgg_echo('agb:social'), 'social');
elgg_register_menu_item('site', $item);

$item = new ElggMenuItem('proyectos', elgg_echo('agb:proyectos'), 'proyectos');
elgg_register_menu_item('site', $item);

$item = new ElggMenuItem('acerca', elgg_echo('agb:acerca'), 'acerca');
elgg_register_menu_item('site', $item);



$menus = array('redvabel', 'elgg');

foreach ($menus as $menu) {
	elgg_register_menu_item('page', array(
				'name' => "proyectos_$menu",
				'text' => elgg_echo("agb:$menu"),
				'href' => "proyectos/$menu",
				'context' => 'proyectos',
			));
}

}

function deyan_load_page($page, $vars = array()) {
	$dir = elgg_get_plugins_path();
	$plugin = elgg_get_calling_plugin_id();
	
	$dir .= $plugin;
	$dir .= "/pages/$page.php";
	
	
	return require_once $dir;
}

function agb_index_handler() {

forward('acerca');

return true;
}

function agb_acerca_handler() {

	deyan_load_page('global', array(
		'page' => 'acerca',
		));
}

function agb_social_handler() {
	
	deyan_load_page('global', array(
		'page' => 'social',
		));
}

function agb_proyectos_handler($page) {
	
	deyan_load_page('global', array(
		'page' => 'proyectos',
		'subpage' => $page[0],
		));
}

elgg_register_event_handler('init', 'system', 'agb_init');
