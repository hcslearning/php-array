<?php

$files = [
	'/var/www/uno.html',
	'/var/www/dos.html',
	'/var/www/tres.jpg',
	'/var/www/cuatro.pdf',
];

print_r( $files );

array_walk( $files, function(&$item, $key){
	$item = basename($item);
});

print_r( $files );
