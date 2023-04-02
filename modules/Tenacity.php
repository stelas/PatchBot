<?php

class Tenacity extends PatchBase {
	function __construct() {
		parent::__construct('Tenacity Community', 'Tenacity', 'https://tenacityaudio.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://codeberg.org/api/v1/repos/tenacityteam/tenacity/releases'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
