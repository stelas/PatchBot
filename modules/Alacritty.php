<?php

class Alacritty extends PatchBase {
	function __construct() {
		parent::__construct('Alacritty Contributors', 'Alacritty', 'https://alacritty.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/alacritty/alacritty/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
