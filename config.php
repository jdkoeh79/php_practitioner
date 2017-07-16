<?php 

return [
	'database' => [
		'name' => 'mytodo',
		'username' => 'root',
		'password' => 'blah1234',
		'connection' => 'mysql:host=localhost',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];