<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_KWP {

	public function action_index()
	{
		$this->request->response = 'hello, world!';
	}

} // End Welcome
