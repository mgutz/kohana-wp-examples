<?php
class Controller_Order extends Controller {
    function action_index() {
		$this->request->response = (string) new View_Order_Step1();
    }

    function action_step2() {
		// 15 minutes
		set_transient('order', $_POST['order'], 15*60);
        $this->request->response = (string) new View_Order_Step2();
    }

	function action_summary() {
		$order = Arr::merge(get_transient('order'), $_POST['order']);
		$view = new View_Order_Summary();
		$view->set('order', $order);
		$this->request->response = (string) $view;
	}
}
?>

