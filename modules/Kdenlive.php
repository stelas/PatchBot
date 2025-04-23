<?php

class Kdenlive extends PatchBase {
	function __construct() {
		parent::__construct('Kdenlive Authors', 'Kdenlive', 'https://kdenlive.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://invent.kde.org/api/v4/projects/multimedia%2Fkdenlive/repository/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
