<?php 

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;


class UsersController extends Controller 
{
	
	public function showWelcome()
	{
		return View::make('hello');
	}

	public function get_user()
	{
		return 'Hi user';
	}
}

 ?>