<?php

class Paperwork extends PatchBase {
	function __construct() {
		parent::__construct('Jérôme Flesch', 'Paperwork', 'https://openpaper.work/');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.gnome.org/api/v4/projects/World%2FOpenPaperwork%2Fpaperwork/releases'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
