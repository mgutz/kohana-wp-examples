<?php
/**
 * Created by PhpStorm.
 * User: mgutz
 * Date: Jul 7, 2010
 * Time: 2:34:34 AM
 * To change this template use File | Settings | File Templates.
 */

/**
 * This is an example of code-backed Mustache class. Note that is a plain object with a constructor that accepts
 * an array of variables which can be processed here.
 */
// renders summary.mustache
class View_Order_Summary {
	public $price = "";

	function __construct($vars) {
		$this->price = $vars['price'];
	}

	function total() {
		setlocale(LC_MONETARY, 'en_US');
		return money_format('%i', $this->price);
	}
}
