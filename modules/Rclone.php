<?php

class Rclone extends PatchBase {
	function __construct() {
		parent::__construct('Nick Craig-Wood', 'Rclone', 'https://rclone.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rclone/rclone/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
