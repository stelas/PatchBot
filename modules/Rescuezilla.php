<?php

class Rescuezilla extends PatchBase {
	function __construct() {
		parent::__construct('Shasheen Ediriweera', 'Rescuezilla', 'https://rescuezilla.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/rescuezilla/rescuezilla/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
