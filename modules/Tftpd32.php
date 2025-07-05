<?php

class Tftpd32 extends PatchBase {
	function __construct() {
		parent::__construct('Philippe Jounin', 'Tftpd64', 'http://www.tftpd64.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/PJO2/tftpd64/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
