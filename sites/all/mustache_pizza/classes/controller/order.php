<?php
class Controller_Order extends Controller_Mustache {
	public $company = "Kohana Wild Hawaiian Pizza";


	/**
	 * Example of a normal view that does not require any logic. You do not
	 * Do not create a separate class, the view() method will isntantiate a
	 * Mustache class.
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

	function action_summary() {
		$order = Arr::merge(get_transient('order'), $_POST['order']);

		// Use a code-behind class when a view requires some view logic
		$this->render_class('order/summary', array('order' => $order, 'price' => 9.58));
	}
}
?>

