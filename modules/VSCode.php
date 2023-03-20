<?php

class VSCode extends PatchBase {
	function __construct() {
		parent::__construct('Microsoft', 'Visual Studio Code', 'https://code.visualstudio.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/microsoft/vscode/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
