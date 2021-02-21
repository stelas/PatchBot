<?php

class Lazydocker extends PatchBase {
	function __construct() {
		parent::__construct('Jesse Duffield', 'lazydocker', 'https://github.com/jesseduffield/lazydocker');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/jesseduffield/lazydocker/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
