<?php 
return array( 
    'modules' => array(
		'Defaults',
		'Album',// Đây là dòng ta thêm vào để khai báo module home. 
    ), 
    'module_listener_options' => array( 
        'config_glob_paths'    => array( 
            'config/autoload/{,*.}{global,local}.php', 
        ), 
        'module_paths' => array( 
            './module', 
            './vendor', 
        ), 
    ), 
);