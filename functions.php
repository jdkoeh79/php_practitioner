<?php 

function connectToDb() {
	try {
		return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'blah1234');
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('SELECT * FROM todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}
