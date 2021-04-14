<?php

class SumatraPDF extends PatchBase {
	function __construct() {
		parent::__construct('Krzysztof Kowalczyk', 'Sumatra PDF', 'https://www.sumatrapdfreader.org/download-free-pdf-viewer.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/sumatrapdfreader/sumatrapdf/releases/latest'))
			return $this->parse_json('tag_name', '/(.+)rel/');
		return false;
	}
}

?>
