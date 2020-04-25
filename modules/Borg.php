<?php

class Borg extends PatchBase {
	function __construct() {
		parent::__construct('Borg Collective', 'BorgBackup', 'https://www.borgbackup.org/releases/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/borgbackup/borg/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
