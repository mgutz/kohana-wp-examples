<?php
class Controller_Order extends Controller_App {

    function action_index() {
		$this->request->response = $this->view('order/step1');
    }

    function action_step2() {
		// 15 minutes
		set_transient('order', $_POST['order'], 15*60);
        $this->request->response = $this->view('order/step2');
    }

	function action_summary() {
		$order = Arr::merge(get_transient('order'), $_POST['order']);
		$this->request->response = $this->view('order/summary')
				->set('order', $order);
	}
}
?>

