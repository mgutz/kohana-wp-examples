<?php
class Controller_Ad extends Controller {
	function action_index($which) {
		if ($which == 'kohana') {
			$this->request->response = "<h2 style='color: red'>Kohana rules!</h2>";
		}
		else {
			$this->request->response = "<h2>WordPress rules!</h2>";
		}
	}
}