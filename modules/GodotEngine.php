<?php

class GodotEngine extends PatchBase {
	function __construct() {
		parent::__construct('Juan Linietsky & Ariel Manzur', 'Godot Engine', 'https://godotengine.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/godotengine/godot/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
