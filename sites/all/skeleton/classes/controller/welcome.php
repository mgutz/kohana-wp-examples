<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Application {

	/**
	 * Default action.
	 */
	public function action_index() {
		$path = APPPATH . 'classes/controller/welcome.php';
		
		$this->request->response = "Hello, world!<p>Example path:<br /><code style='color:#444'>$path</code></p>";
	}

}
