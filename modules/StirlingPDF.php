<?php

class StirlingPDF extends PatchBase {
	function __construct() {
		parent::__construct('Stirling PDF Inc.', 'Stirling PDF', 'https://www.stirling.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Stirling-Tools/Stirling-PDF/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
