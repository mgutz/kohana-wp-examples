<?php
/**
 * Created by PhpStorm.
 * User: mgutz
 * Date: Jul 7, 2010
 * Time: 2:34:34 AM
 * To change this template use File | Settings | File Templates.
 */


/**
 * This is an example of code-backed Mustache view. Note that is a plain object.
 *
 * Renders summary.mustache
 */

class View_Order_Summary {

	// Remember, this object gets instance variables as well as local data passed to it. Price is passed in
	// as part of the render_class call.
	function total() {
        return '$ ' . number_format($this->price, 2, '.', '');
	}

	function items() {
		return Kwp::objectify($this->order['items']);
	}

	function sides() {
		return Kwp::objectify($this->order['sides']);
	}

	function instructions() {
		return $this->order['instructions'];
	}
	
	function has_sides() {
		foreach ($this->order['sides'] as $side) {
			if (!empty($side)) return true;
		}
		
		return false;
	}

}
