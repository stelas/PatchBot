<?php

class GitUI extends PatchBase {
	function __construct() {
		parent::__construct('Stephan Dilly', 'GitUI', 'https://github.com/extrawurst/gitui');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/extrawurst/gitui/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
