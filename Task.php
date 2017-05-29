<?php 

//*********************************************************
// This was the index.php file at the end of 'Classes 101'
//*********************************************************

// make dd() function available (for debugging/checking variable states)
// require 'functions.php';

class Task {

	protected $description;
	protected $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}

	public function description()
	{
		return $this->description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function completed()
	{
		return $this->completed;
	}
}


// $tasks = [
// 	new Task('Go to the store'),
// 	new Task('Finish my screencast'),
// 	new Task('Clean my room')
// ];


// $tasks[0]->complete();
// dd($tasks);


// require 'index.view.php';