<?php

class XCA extends PatchBase {
	function __construct() {
		parent::__construct('Christian Hohnstädt', 'XCA', 'https://hohnstaedt.de/xca/index.php/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/chris2511/xca/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
