<?php
/**
 * Created by PhpStorm.
 * User: mgutz
 * Date: Jul 7, 2010
 * Time: 2:34:34 AM
 * To change this template use File | Settings | File Templates.
 */


/**
 * This is an example of code-backed Mustache view. Note that is a plain object with a constructor that accepts
 * an associative array.
 *
 * Renders summary.mustache
 */

class View_Order_Summary {

	// Remember, this object gets instance variables as well as local data passed to it. Price is passed in
	// as part of the render_class call.
	function total() {
		setlocale(LC_MONETARY, 'en_US');
		return money_format('%i', $this->price);
	}
}
