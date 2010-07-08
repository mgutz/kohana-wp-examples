<?php
class Controller_Order extends Controller_Mustache {
	public $company = "Kohana Wild Hawaiian Pizza";

	/**
	 * Example of a view that does not require any logic. Mustache is still
	 * used without the need to create a class.
	 *
	 * TODO: should be able to exclude variables
	 *
	 * By default all instance variables are assigned for use in the template.
	 * Local variables may be passed as a second argument.
	 *
	 * @return void
	 */
	function action_index() {
		// message of the day
		$motd = "Buy 1 Large Pizza, Get 1 Small Pizza FREE!";

		// render view/order/step1.mustache passing it $motd explicitly, $company implicitly
		$this->render('order/step1', array('motd' => $motd));
	}
	
    function action_step2() {
		// 15 minutes
		set_transient('order', $_POST['order'], 15*60);

        $this->render('order/step2');
    }

	/**
	 * More complex example of a Mustache view which uses a class to format the price using
	 * a locale. The class itself, view/order/summary.php, is a POPO.
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
		$this->render('order/summary', array('order' => $order, 'price' => 9.58));
	}
}
?>

