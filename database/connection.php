<?php 

class Connection {
	public static function make()
	{
		try {
			return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'blah1234');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}