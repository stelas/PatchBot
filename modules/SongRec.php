<?php

class SongRec extends PatchBase {
	function __construct() {
		parent::__construct('Marin Moulinier', 'SongRec', 'https://github.com/marin-m/SongRec');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/marin-m/SongRec/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
