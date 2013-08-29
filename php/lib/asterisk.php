<?php

class Asterisk extends asterisk_php {
	
	function __construct($parameters) {
		/* Definition of Asterisk object */
		foreach($parameters as $key => $value) {
			$this->$key = $value;
		}
		
		$this->object_id = 1;
		
		if (!$this->api) {
			throw new Exception("Can't make new AsteriskPHP.Asterisk instance without AsteriskPHP.AsteriskRESTAPI instance");
		}
		
	}
	
	function getId() {
		return $this->object_id;
	}
	
	function addEventHandler($eventName, $handler) {
		/* Add an event handler for Stasis events on this object.
		 * For general events, use AsteriskPHP.Asterisk.addEventHandler
		 * instead. */
		return true;
	};

	function removeEventHandler($eventName, $handler) {
		/* Remove an event handler for Stasis events on this object.
		 * For general events, use AsteriskPHP.Asterisk.removeEventHandler
		 * instead. */
		return true;
	};
	
	function getAsteriskInfo($onlyStringArray) {
		/* Asterisk system information (similar to core show settings); Gets
		 * Asterisk system information */
				$params = array();
				if ($onlyStringArray) {
					$params['only'] = $onlyStringArray;
				}
				$is_success = $this->api->call(array(
					'path' => 
				))
				if (onlyStringArray) {
					params['only'] = onlyStringArray;
				}
				is_success = this.api.call({
					'path' => '/asterisk/info',
					'http_method' => 'GET',
					'parameters' => $params
				});
				$is_success = true;
				return $is_success;
	}
}
