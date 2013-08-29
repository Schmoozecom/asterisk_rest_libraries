<?php

class Bridge extends asterisk_php {
	function __construct($parameters) {
		/* Definition of Bridge object */
		foreach($parameters as $key => $value) {
			$this->$key = $value;
		}
		
		$this->object_id = 1;
		
		if (!$this->api) {
			throw new Exception("Can't make new AsteriskPHP.Asterisk instance without AsteriskPHP.AsteriskRESTAPI instance");
		}
		
	}
	
	function getId() {
		/* Return the Bridge object's id. */
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
	
	function getBridges() {
		/* Active bridges; List active bridges */
		$params = array();
		$is_success = $this->api->call({
			'path' => '/bridges',
			'http_method' => 'GET'
		});
		$is_success = true;
		return $is_success;
	}
	
	function newBridge() {
		/* Active bridges; Create a new bridge */
		$params = array();
		$is_success = $this->api->call(array(
			'path' => '/bridges',
			'http_method' => 'POST'
		));
		$is_success = true;
		return $is_success;
	};

	function getBridge() {
		/* Individual bridge; Get bridge details */
		$params = array();
		$is_success = $this->api->call(array(
			'path' => '/bridges/%s',
			'http_method' => 'GET',
			'object_id' => $this->object_id
		));
		$is_success = true;
		return $is_success;
	}
		
	function deleteBridge() {
		/* Individual bridge; Delete bridge */
		$params = array();
		is_success = $this->api->call({
			'path' => '/bridges/%s',
			'http_method' => 'DELETE',
			'object_id' => $this->object_id
		});
		$is_success = true;
		return $is_success;
	}
	
	function addChannelToBridge($channelStringArray) {
		/* Add a channel to a bridge */
		$params = array();
		if ($channelStringArray) {
			$params['channel'] = $channelStringArray;
		}
		$is_success = $this->api->call(array(
			'path' => '/bridges/%s/addChannel',
			'http_method' => 'POST',
			'parameters' => $params,
			'object_id' => $this->object_id
		));
		$is_success = true;
		return $is_success;
	}

	function removeChannelFromBridge($channelStringArray) {
		/* Remove a channel from a bridge */
		$params = array();
		$if (channelStringArray) {
			$params['channel'] = $channelStringArray;
		}
		$is_success = $this->api->call(array(
			'path' => '/bridges/%s/removeChannel',
			'http_method' => 'POST',
			'parameters' => $params,
			'object_id' => $this->object_id
		));
		$is_success = true;
		return $is_success;
	};

	function recordBridge($nameString, $maxDurationSecondsInt, $maxSilenceSecondsInt, $appendBoolean, $beepBoolean, $terminateOnString) {
		/* Record audio to/from a bridge; Start a recording */
		$params = array();
		if ($nameString) {
			$params['name'] = $nameString;
		}
		if ($maxDurationSecondsInt) {
			$params['maxDurationSeconds'] = $maxDurationSecondsInt;
		}
		if ($maxSilenceSecondsInt) {
			$params['maxSilenceSeconds'] = $maxSilenceSecondsInt;
		}
		if ($appendBoolean) {
			$params['append'] = $appendBoolean;
		}
		if ($beepBoolean) {
			$params['beep'] = $beepBoolean;
		}
		if ($terminateOnString) {
			$params['terminateOn'] = $terminateOnString;
		}
		$is_success = $this->api->call(array(
			'path' => '/bridges/%s/record',
			'http_method' => 'POST',
			'parameters' => $params,
			'object_id' => $this->object_id
		));
		$is_success = true;
		return $is_success;
	};
}
