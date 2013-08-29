<?php

class asterisk_php {
	function __construct($parameters) {
		foreach($parameters as $key => $value) {
			$this->$key = $value;
		}
		
		$this->api = new AsteriskRESTAPI(array(
			'api_url' => $parameters['api_url'],
			
		));
		
		$this->asterisk = new Asterisk(array(
			'api' => $this->api
		));
		
		$this->getAsteriskInfo = $this->asterisk->getAsteriskInfo->bind($this->asterisk);
	}
	
	function getEndpoints() {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/endpoints',
			'http_method' => 'GET'
		));
		
		/* Temporary until method is implemented */
		$result_list = array(
			new Endpoint(array(
				'api' => $this->api
			)),
			new Endpoint(array(
				'api' => $this->api
			)),
		
		return $result_list;
	}
	
	function getChannels() {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/channels',
			'http_method' => 'GET'
		));
		
		/* Temporary until method is implemented */
		$result_list = array(
			new Channel(array(
				'api' => $this->api
			)),
			new Channel(array(
				'api' => $this->api
			)),
		
		return $result_list;
	}
	
	function getBridges() {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/Bridges',
			'http_method' => 'GET'
		));
		
		/* Temporary until method is implemented */
		$result_list = array(
			new Channel(array(
				'api' => $this->api
			)),
			new Channel(array(
				'api' => $this->api
			)),
		
		return $result_list;
	}
	
	function getRecordings() {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/recordings',
			'http_method' => 'GET'
		));
		
		/* Temporary until method is implemented */
		$result_list = array(
			new Recording(array(
				'api' => $this->api
			)),
			new Recording(array(
				'api' => $this->api
			)),
		
		return $result_list;
	}
	
	function getEndpoint($objectId) {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/endpoints',
			'http_method' => 'GET',
			'objectId' => $objectId
		));
		
		/* Temporary until method is implemented */
		$result = new Endpoint(array(
			'api' => $this->api
		));
		
		return $result;
	}
	
	function getChannel($objectId) {
		/* Return a list of all Endpoints from Asterisk. */
		$response = $this->api->call(array(
			'path' => '/api/channels',
			'http_method' => 'GET',
			'objectId' => $objectId
		));
		
		/* Temporary until method is implemented */
		$result = new Channel(array(
			'api' => $this->api
		));
		
		return $result;
	}
	
	function getBridge($objectId) {
		/* Return Bridge specified by objectId. */
		$response = $this->api->call(array(
			'path' => '/api/bridges',
			'http_method' => 'GET',
			'objectId' => $objectId
		));
		
		/* Temporary until method is implemented */
		$result = new Endpoint(array(
			'api' => $this->api
		));
		
		return $result;
	}
	
	function getRecording($objectId) {
		/* Return Recording specified by objectId. */
		$response = $this->api->call(array(
			'path' => '/api/recordings',
			'http_method' => 'GET',
			'objectId' => $objectId
		));
		
		/* Temporary until method is implemented */
		$result = new Recording(array(
			'api' => $this->api
		));
		
		return $result;
	}
	
	function createChannel($params) {
		/* In Asterisk, originate a channel. Return the Channel. */
		$response = $this->api->call(array(
			'path' => '/api/channels',
			'http_method' => 'POST',
			'parameters' => $params
		));
		
		/* Temporary until method is implemented */
		$result = new Channel(array(
			'api' => $this->api
		));
		
		return $result;
	}
}

class AsteriskRESTAPI extends asterisk_php {
	
}

class Asterisk extends asterisk_php {
	
}

class Endpoint extends asterisk_php {
	
}

class Channel extends asterisk_php {
	
}

class Bridges extends asterisk_php {
	
}

class Recording extends asterisk_php {
	
}