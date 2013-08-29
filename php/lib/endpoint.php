<?php

class Endpoint extends asterisk_php {
	function __construct($parameters) {
		/* Definition of Endpoint object */
		foreach($parameters as $key => $value) {
			$this->$key = $value;
		}
		
		$this->object_id = 1;
		
		if (!$this->api) {
			throw new Exception("Can't make new AsteriskPHP.Asterisk instance without AsteriskPHP.AsteriskRESTAPI instance");
		}
		
	}
	
	function getId() {
		/* Return the Endpoint object's id. */
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
	
	function getEndpoints($withTypeStringArray) {
		/* Asterisk endpoints; List available endoints */
		$params = array();
		if ($withTypeStringArray) {
			$params['withType'] = $withTypeStringArray;
		}
		$is_success = $this->api->call(array(
			'path' => '/endpoints',
			'http_method' => 'GET',
			'parameters' => $params
		));
		$is_success = true;
		return $is_success;
	};

	function getEndpoint() {
		/* Single endpoint; Details for an endpoint */
		$params = {};
		$is_success = $this->api->call(array(
			'path' => '/endpoints/%s',
			'http_method' => 'GET',
			'object_id' => $this->object_id
		));
		$is_success = true;
		return $is_success;
	};
}
