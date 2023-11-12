<?php

class EightySixBox extends PatchBase {
	function __construct() {
		parent::__construct('Miran Grča', '86Box', 'https://86box.net/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/86Box/86Box/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
