<?php

class Nvim extends PatchBase {
	function __construct() {
		parent::__construct('Neovim Contributors', 'Neovim', 'https://neovim.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/neovim/neovim/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
