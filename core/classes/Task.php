<?php 

//*********************************************************
// This was the index.php file at the end of 'Classes 101'
//*********************************************************

namespace App\Controllers;

class Task {

	protected $description;
	protected $completed = false;

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
