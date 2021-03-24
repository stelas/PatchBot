<?php

class Valetudo extends PatchBase {
	function __construct() {
		parent::__construct('Sören Beye', 'Valetudo', 'https://valetudo.cloud/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Hypfer/Valetudo/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
