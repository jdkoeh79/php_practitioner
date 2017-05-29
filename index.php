<?php 

// make dd() function available (for debugging/checking variable states)
require 'functions.php';

try {
	$pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'blah1234');
} catch (PDOException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM todos');

$statement->execute();

// dd($statement->fetchAll());
// dd($statement->fetchAll(PDO::FETCH_OBJ));

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// dd($tasks[5]->description);

require 'index.view.php';