<?php 

namespace App\Controllers;

use App\Core\App;



class UsersController
{
	public function index()
	{
		$users = App::get('database')->selectAll('users ORDER BY name');

		return view('users', compact('users'));
	}

	public function store()
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		]);

		return redirect('users');
	}

	public function remove()
	{
		App::get('database')->delete('users', [
			'id' => $_POST['id']
		]);

		return redirect('users');
	}
}
