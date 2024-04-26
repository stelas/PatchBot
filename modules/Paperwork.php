<?php

class Paperwork extends PatchBase {
	function __construct() {
		parent::__construct('Jérôme Flesch', 'Paperwork', 'https://openpaper.work/');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.gnome.org/api/v4/projects/3560/repository/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
