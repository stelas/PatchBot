<?php

class Tiled extends PatchBase {
	function __construct() {
		parent::__construct('Thorbjørn Lindeijer', 'Tiled Map Editor', 'https://www.mapeditor.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/bjorn/tiled/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
