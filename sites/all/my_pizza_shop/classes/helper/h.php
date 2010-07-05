<?php
class Helper_H {
	/**
	 * @param  $controller_instance Some methods need the controller's name to build links.
	 * @return void
	 */
	function __construct($controller_instance) {
		$this->controller_name = get_class($controller_instance);
		$this->controller_short_name = self::short_name($this->controller_name);
	}

    # Create a link to a URL within this application.
    #
    # @param $query_string
    #   Relative URLS are assumed to be an action of the current controller
    #       to_wp_url('update') => http://wp_site/some_page/?kr=some_controller/update
    #
    #   A '~' indicates a controler/action/...
    #       to_wp_url('~/account/update') => http://wp_site/some_page/?kr=account/update
    #
    #   Absolute URL starts with '/'
    #       to_wp_url('/account/update') => http://wp_site/account/update
    #
	function link_to($query_string) {
		return self::to_wp_url($query_string);
	}

	static function short_name($kohana_name) {
		$class = strrchr($kohana_name, '_');
		$result = strlen($class) > 0 ? substr($class, 1) : $kohana_name;
		$result = strtolower($result);
		return $result;
	}

    # Some conventions:
    #   URLS should look like this ?kr=applet/controller/action/args0/.../argn
    #
    #   if query_string does not start with '~' then it is assumed to be an action of the current controller
    #       to_wp_url('update') => http://wp_site/some_page/?kr=some_controller/update
    #       to_wp_url('~/account/update') => http://wp_site/some_page/?kr=account/update
	private function to_wp_url($query_string) {
		$wpurl = get_permalink();
		$prefix = strpos($wpurl, '?') ? '&kr=' : '?kr=';

		$ch = $query_string[0];
		# ~/controller/action
		if ($ch == '~') {
		    $query_string = substr($query_string, 2);
		}
		else {
			$query_string = $this->controller_short_name . '/' . $query_string;
		}

		$query_string = Html::chars($query_string);

		return $wpurl.$prefix.$query_string;
	}
}
?>