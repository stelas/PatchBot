<?php

class Ebitengine extends PatchBase {
	function __construct() {
		parent::__construct('Hajime Hoshi', 'Ebitengine', 'https://ebitengine.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/hajimehoshi/ebiten/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
