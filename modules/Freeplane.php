<?php

class Freeplane extends PatchBase {
	function __construct() {
		parent::__construct('Freeplane Team', 'Freeplane', 'https://docs.freeplane.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://sourceforge.net/projects/freeplane/best_release.json'))
			return $this->parse_json('filename', '/-([\d\.]+[u\d]*)\.[a-z]+$/');
		return false;
	}
}

?>
