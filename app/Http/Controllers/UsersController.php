<?php 

/**
 * 
 */
class UsersController extends BaseController 
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