<?php
class Controller_Order extends Controller_Mustache {
	public $company = "Kohana Wild Hawaiian Pizza";

	// renders view/layout/order.mustache passing:
	//		content => output of rendering order/step1.mustache
	//		title => local variable used in layout.mustache
	function action_index() {
		$this->render('layout/order', array('content' => $this->render_text('order/step1')));
	}
	
    function action_step2() {
		// Keep transient variable alive for 15 minutes. Think of transients as database-backed
		// session variables. Transients serialize/deserialize nicely for simple types.
		set_transient('order', $_POST['order'], 15*60);

		$this->render('layout/order', array('content' => $this->render_text('order/step2')));
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
		$this->render('layout/order', array(
			'content' => $this->render_text('order/summary', array('order' => $order))
		));
	}
}
?>

