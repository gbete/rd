<?php

//The "Custom" theme will still redirect to the browser detection page but will redirect based on the page settings defined in the DB

$config['DynamicLogin']['theme']['Custom'] = array(
	
);


$config['DynamicLogin']['theme']['Default'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index.html',
	'coova_mobile'		=> '/rd_login/cc/m/index.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index.html',
);


$config['DynamicLogin']['theme']['Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_green.html',
);

$config['DynamicLogin']['theme']['Black'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_black.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_black.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_black.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_black.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black.html',
);

$config['DynamicLogin']['theme']['Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_grey.html',
);

/*
$config['DynamicLogin']['theme']['Lightgrey Red Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_lightgrey_red_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_lightgrey_red_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_lightgrey_red_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_lightgrey_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lightgrey_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lightgrey_red_green.html',
);

$config['DynamicLogin']['theme']['Lightgrey Blue Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_lightgrey_blue_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_lightgrey_blue_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_lightgrey_blue_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_lightgrey_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lightgrey_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lightgrey_blue_green.html',
);

$config['DynamicLogin']['theme']['Darkgrey Blue Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_darkgrey_blue_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_darkgrey_blue_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_darkgrey_blue_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_darkgrey_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_darkgrey_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_darkgrey_blue_green.html',
);

$config['DynamicLogin']['theme']['Darkgrey Red Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_darkgrey_red_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_darkgrey_red_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_darkgrey_red_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_darkgrey_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_darkgrey_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_darkgrey_red_green.html',
);

$config['DynamicLogin']['theme']['Black Blue and Red'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_black_blue_red.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_black_blue_red.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_black_blue_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_black_blue_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_blue_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_blue_red.html',
);

$config['DynamicLogin']['theme']['Black Red Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_black_red_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_black_red_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_black_red_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_black_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_red_green.html',
);

$config['DynamicLogin']['theme']['Black Aqua Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_black_aqua_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_black_aqua_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_black_aqua_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_black_aqua_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_black_aqua_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_black_aqua_green.html',
);

$config['DynamicLogin']['theme']['Navy Lime Red'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_navy_lime_red.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_navy_lime_red.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_navy_lime_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_navy_lime_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_navy_lime_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_navy_lime_red.html',
);

$config['DynamicLogin']['theme']['Navy Red Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_navy_red_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_navy_red_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_navy_red_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_navy_red_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_navy_red_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_navy_red_green.html',
);

$config['DynamicLogin']['theme']['Red Green Blue'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_red_green_blue.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_red_green_blue.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_red_green_blue.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_red_green_blue.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_red_green_blue.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_red_green_blue.html',
);

$config['DynamicLogin']['theme']['Red Blue Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_red_blue_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_red_blue_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_red_blue_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_red_blue_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_red_blue_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_red_blue_grey.html',
);

$config['DynamicLogin']['theme']['Orange Blue Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_orange_blue_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_orange_blue_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_orange_blue_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_orange_blue_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_orange_blue_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_orange_blue_grey.html',
);

$config['DynamicLogin']['theme']['Orange Blue Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_orange_blue_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_orange_blue_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_orange_blue_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_orange_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_orange_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_orange_blue_green.html',
);

$config['DynamicLogin']['theme']['Blue Red Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_blue_red_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_blue_red_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_blue_red_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_blue_red_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_blue_red_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_blue_red_grey.html',
);

$config['DynamicLogin']['theme']['Blue Green Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_blue_green_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_blue_green_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_blue_green_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_blue_green_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_blue_green_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_blue_green_grey.html',
);

$config['DynamicLogin']['theme']['Winered Green Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_winered_green_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_winered_green_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_winered_green_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_winered_green_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_winered_green_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_winered_green_grey.html',
);

$config['DynamicLogin']['theme']['Woodgreen Red Grey'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_woodgreen_red_grey.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_woodgreen_red_grey.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_woodgreen_red_grey.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_woodgreen_red_grey.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_woodgreen_red_grey.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_woodgreen_red_grey.html',
);

$config['DynamicLogin']['theme']['Lime Grey Red'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_lime_grey_red.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_lime_grey_red.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_lime_grey_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_lime_grey_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_lime_grey_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_lime_grey_red.html',
);

$config['DynamicLogin']['theme']['Softpink Grey Lime'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_softpink_grey_lime.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_softpink_grey_lime.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_softpink_grey_lime.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_softpink_grey_lime.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_softpink_grey_lime.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_softpink_grey_lime.html',
);

$config['DynamicLogin']['theme']['Pink Blue Green'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_pink_blue_green.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_pink_blue_green.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_pink_blue_green.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_pink_blue_green.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_pink_blue_green.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_pink_blue_green.html',
);

$config['DynamicLogin']['theme']['Turqois Grey Red'] = array(
	'coova_desktop'		=> '/rd_login/cc/d/index_turqois_grey_red.html',
	'coova_mobile'		=> '/rd_login/cc/m/index_turqois_grey_red.html',
	'mikrotik_desktop'	=> '/rd_login/mt/d/index_turqois_grey_red.html',
	'mikrotik_mobile'	=> '/rd_login/mt/m/index_turqois_grey_red.html',
	'ruckus_desktop'    => '/rd_login/ru/d/index_turqois_grey_red.html',
	'ruckus_mobile'     => '/rd_login/ru/m/index_turqois_grey_red.html',
);

*/


$config['DynamicLogin']['ruckus']['northbound']['password'] = 'stayoutnow123!';

$config['DynamicLogin']['i18n'][0]     = array('name' => 'English',     'id' => 'en_GB',   'active' => true);
$config['DynamicLogin']['i18n'][1]     = array('name' => 'Italian',     'id' => 'it_IT',   'active' => true);
$config['DynamicLogin']['i18n'][2]     = array('name' => 'Spanish',     'id' => 'es_ES',   'active' => true);
$config['DynamicLogin']['i18n'][3]     = array('name' => 'Afrikaans',   'id' => 'af_ZA',   'active' => true);


?>
