<?php

class Zigbee2MQTT extends PatchBase {
	function __construct() {
		parent::__construct('Koen Kanters', 'Zigbee2MQTT', 'https://www.zigbee2mqtt.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Koenkk/zigbee2mqtt/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
