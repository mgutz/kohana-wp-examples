<?
class Controller_Ad extends Controller_App {
	function action_index($which) {
		if ($which == 'kohana') {
			$this->request->response = "<h2 style='color: red'>My Pizza Shop! Kohana rules!</h2>";
		}
		else {
			$this->request->response = "<h2>My Pizza Shop! WordPress rules!</h2>";
		}
	}
}