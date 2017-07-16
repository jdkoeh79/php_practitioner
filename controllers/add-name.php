<?php 


// var_dump($_POST);

// var_dump($app['database']);

// homework, end of lesson: Forms, Request, Types, and Routing
// grab the user input and insert it into the database

// use pdo->prepare to perform and INSERT

App::get('database')->insert('users', [
	'name' => $_POST['name']
]);

header('Location: /');