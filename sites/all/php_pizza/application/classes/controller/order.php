<?php
class Controller_Order extends Controller {

    function action_index() {
		$this->request->response = View::factory('order/step1');
    }

    function action_step2() {
		// 15 minutes
		set_transient('order', $_POST['order'], 15*60);
        $this->request->response = View::factory('order/step2');
    }

	function action_summary() {
		$order = Arr::merge(get_transient('order'), $_POST['order']);
		$this->request->response = View::factory('order/summary')
				->set('order', $order);
	}
}
?>

