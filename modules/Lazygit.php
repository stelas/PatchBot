<?php

class Lazygit extends PatchBase {
	function __construct() {
		parent::__construct('Jesse Duffield', 'lazygit', 'https://github.com/jesseduffield/lazygit');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/jesseduffield/lazygit/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
