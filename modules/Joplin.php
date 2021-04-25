<?php

class Joplin extends PatchBase {
	function __construct() {
		parent::__construct('Laurent Cozic', 'Joplin', 'https://joplinapp.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/laurent22/joplin/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
