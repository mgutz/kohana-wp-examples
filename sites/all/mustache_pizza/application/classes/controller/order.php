<?php
class Controller_Order extends Controller {
	public $company = "Kohana Wild Hawaiian Pizza";

	/**
	 * Rendering is performed via a pipe. All templates in an array
	 * are processed left to right, with each preceeding step
	 * feeding the next. The key used by default is $content.
	 *
	 * All instance variables such as $company are passed as
	 * context to templates.
	 *
	 * @return void
	 */
	function action_index() {
		$this->render(array('order/step1', 'layout/order'));
	}
	
    function action_step2() {
		// Keep transient variable alive for 15 minutes. Think of transients as database-backed
		// session variables. Transients serialize/deserialize nicely for simple types.
		set_transient('order', $_POST['order'], 15*60);

		$this->render(array('order/step2', 'layout/order'));
    }

	/**
	 * More complex example of a Mustache view which uses a class to format the price.
	 * The class itself, view/order/summary.php, is a POPO.
	 *
	 * All instance variables ($company) are passed, as well as $order and $price as local
	 * variables data.
	 * 
	 * @return void
	 */
	function action_summary() {
		$order = Arr::merge(get_transient('order'), $_POST['order']);

		// Since order/summary.php exists, it will be instantiated and used as the code-behind class.
		// Use a code-behind class when a view requires view logic.

		// local variables are not assigned as context by default, they must be passed in manually
		$locals = array('order' => $order, 'price' => 100000);
		$this->render(array('order/summary', 'layout/order'), $locals);
	}
}
?>

