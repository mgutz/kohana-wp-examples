<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Application {

	/**
	 * Default action.
	 */
	public function action_index() {
		$bank = new Model_Bank();
		$this->request->response = "$bank->name : $bank->balance";
	}

}
