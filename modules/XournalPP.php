<?php

class XournalPP extends PatchBase {
	function __construct() {
		parent::__construct('Xournal++ Team', 'Xournal++', 'https://xournalpp.github.io/installation/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/xournalpp/xournalpp/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
